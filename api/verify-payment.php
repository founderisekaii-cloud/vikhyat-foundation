<?php
require_once __DIR__ . '/../config.php';
require_once 'email-template.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $payment_id = $_POST['razorpay_payment_id'] ?? '';
    $order_id = $_POST['razorpay_order_id'] ?? '';
    $signature = $_POST['razorpay_signature'] ?? '';
    $amount = $_POST['amount'] ?? 0; // Amount in Rupees
    $name = $_POST['name'] ?? 'Donor';
    $email = $_POST['email'] ?? '';

    if (empty($payment_id) || empty($order_id) || empty($signature)) {
        http_response_code(400);
        echo json_encode(["success" => false, "message" => "Missing payment details"]);
        exit;
    }

    // 1. Verify Signature
    $generated_signature = hash_hmac('sha256', $order_id . "|" . $payment_id, RAZORPAY_KEY_SECRET);

    if ($generated_signature !== $signature) {
        http_response_code(400);
        echo json_encode(["success" => false, "message" => "Payment verification failed: Invalid Signature"]);
        exit;
    }

    // 2. Capture Payment (Server-to-Server)
    $captureUrl = "https://api.razorpay.com/v1/payments/$payment_id/capture";
    $captureData = [
        'amount' => $amount * 100, // Convert to paise
        'currency' => 'INR'
    ];

    $ch = curl_init($captureUrl);
    curl_setopt($ch, CURLOPT_USERPWD, RAZORPAY_KEY_ID . ':' . RAZORPAY_KEY_SECRET);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($captureData));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $data = json_decode($response, true);

    // Check if capture successful (Razorpay returns status 'captured')
    // Or if it was already captured (sometimes auto-capture is on), status will be 'captured'
    // If capture fails, httpCode is usually NOT 200, or status is not captured.

    if ($httpCode !== 200 || (isset($data['status']) && $data['status'] !== 'captured')) {
        // Log Error
        $errorMsg = $data['error']['description'] ?? 'Unknown Error';
        error_log("Razorpay Capture Failed: $errorMsg for Payment ID: $payment_id");
        http_response_code(500);
        echo json_encode(["success" => false, "message" => "Payment authorized but capture failed: " . $errorMsg]);
        exit;
    }

    // 3. Send Emails (Success)

    // --- Prepare Admin Email Content ---
    $adminSubject = "New Donation Received: ₹$amount";
    $adminBody = "<h1>New Donation Captured</h1>";
    $adminBody .= "<p>A new donation has been successfully captured.</p>";
    $adminBody .= "<p><strong>Amount:</strong> ₹$amount</p>";
    $adminBody .= "<p><strong>Payment ID:</strong> $payment_id</p>";
    $adminBody .= "<p><strong>Order ID:</strong> $order_id</p>";
    $adminBody .= "<p><strong>Donor Name:</strong> $name</p>";
    if (!empty($email)) {
        $adminBody .= "<p><strong>Donor Email:</strong> $email</p>";
    }

    $adminHtml = getEmailTemplate($adminBody);

    // --- Prepare User Receipt Content ---
    $userHtml = '';
    if (!empty($email)) {
        $userSubject = "Thank you for your donation!";
        $userBody = "<h1>Thank You, $name!</h1>";
        $userBody .= "<p>We have successfully received your donation of <strong>₹$amount</strong>.</p>";
        $userBody .= "<p>Your contribution helps us continue our mission to empower communities and create lasting change.</p>";
        $userBody .= "<p><strong>Transaction Details:</strong><br>Payment ID: $payment_id<br>Date: " . date('d M Y') . "</p>";
        $userBody .= "<a href='https://vikhyatfoundation.com' class='button'>Visit Our Website</a>";

        $userHtml = getEmailTemplate($userBody);
    }

    // --- Send Email Function (Native Curl) ---
    function sendEmail($to, $subject, $html)
    {
        if (!extension_loaded('curl')) {
            $logEntry = "<!-- EMAIL START -->\nTo: $to\nSubject: $subject\nDate: " . date('Y-m-d H:i:s') . "\nContent:\n$html\n<!-- EMAIL END -->\n\n";
            file_put_contents(__DIR__ . '/../emails.log', $logEntry, FILE_APPEND);
            return true;
        }

        $url = 'https://api.resend.com/emails';
        $data = [
            'from' => SITE_NAME . ' <' . SENDER_EMAIL . '>',
            'to' => [$to],
            'subject' => $subject,
            'html' => $html
        ];

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . RESEND_API_KEY,
            'Content-Type: application/json'
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return ($httpCode >= 200 && $httpCode < 300);
    }

    // Send Admin Email
    sendEmail(CONTACT_FORM_TO_EMAIL, $adminSubject, $adminHtml);

    // Send User Email
    if (!empty($email) && !empty($userHtml)) {
        sendEmail($email, $userSubject, $userHtml);
    }

    echo json_encode(["success" => true, "message" => "Payment verified and captured successfully"]);

} else {
    http_response_code(403);
    echo "Forbidden";
}
?>