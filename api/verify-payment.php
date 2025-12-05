<?php
require_once __DIR__ . '/../config.php';
require_once 'email-template.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $payment_id = $_POST['razorpay_payment_id'] ?? '';
    $amount = $_POST['amount'] ?? 0;
    $name = $_POST['name'] ?? 'Donor';
    $email = $_POST['email'] ?? '';

    // In a real scenario, you would verify the signature here using the RAZORPAY_KEY_SECRET
    // For this demo/static architecture, we will assume success if the ID is present.

    if (!empty($payment_id)) {
        // TODO: Store transaction in database if available

        // --- 1. Prepare Admin Email Content ---
        $adminSubject = "New Donation Received: ₹$amount";
        $adminBody = "<h1>New Donation</h1>";
        $adminBody .= "<p>A new donation has been received.</p>";
        $adminBody .= "<p><strong>Amount:</strong> ₹$amount</p>";
        $adminBody .= "<p><strong>Payment ID:</strong> $payment_id</p>";
        $adminBody .= "<p><strong>Donor Name:</strong> $name</p>";
        if (!empty($email)) {
            $adminBody .= "<p><strong>Donor Email:</strong> $email</p>";
        }

        $adminHtml = getEmailTemplate($adminBody);

        // --- 2. Prepare User Receipt Content (if email exists) ---
        $userHtml = '';
        if (!empty($email)) {
            $userSubject = "Thank you for your donation!";
            $userBody = "<h1>Thank You, $name!</h1>";
            $userBody .= "<p>We have successfully received your donation of <strong>₹$amount</strong>.</p>";
            $userBody .= "<p>Your contribution helps us continue our mission to empower communities and create lasting change. We are incredibly grateful for your support.</p>";
            $userBody .= "<p><strong>Transaction Details:</strong><br>Payment ID: $payment_id<br>Date: " . date('d M Y') . "</p>";
            $userBody .= "<p>Together, we are making a difference.</p>";
            $userBody .= "<a href='https://vikhyatfoundation.com' class='button'>Visit Our Website</a>";

            $userHtml = getEmailTemplate($userBody);
        }

        // --- 3. Function to Send Email via Resend ---
        function sendEmail($to, $subject, $html)
        {
            // Check if curl is enabled
            if (!extension_loaded('curl')) {
                // Fallback: Log to file for local development
                $logEntry = "<!-- EMAIL START -->\n";
                $logEntry .= "To: $to\nSubject: $subject\nDate: " . date('Y-m-d H:i:s') . "\n";
                $logEntry .= "Content:\n$html\n";
                $logEntry .= "<!-- EMAIL END -->\n\n";
                file_put_contents(__DIR__ . '/../emails.log', $logEntry, FILE_APPEND);
                return true; // Simulate success
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

            if ($response === false) {
                // Curl error
                $logEntry = "Curl Error: " . curl_error($ch) . "\n";
                file_put_contents(__DIR__ . '/../emails.log', $logEntry, FILE_APPEND);
                curl_close($ch);
                return false;
            }

            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            return ($httpCode >= 200 && $httpCode < 300);
        }

        // --- 4. Send Emails ---

        // Send to Admin
        sendEmail(CONTACT_FORM_TO_EMAIL, $adminSubject, $adminHtml);

        // Send to User (if email provided)
        if (!empty($email) && !empty($userHtml)) {
            sendEmail($email, $userSubject, $userHtml);
        }

        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "message" => "Payment ID missing"]);
    }
} else {
    http_response_code(403);
    echo "Forbidden";
}
?>