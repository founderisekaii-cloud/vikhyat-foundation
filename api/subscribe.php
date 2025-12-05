<?php
require_once __DIR__ . '/../config.php';
require_once 'email-template.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode(["success" => false, "message" => "Invalid email address."]);
        exit;
    }

    // --- 1. Prepare Admin Email Content ---
    $adminSubject = "New Newsletter Subscriber";
    $adminBody = "<h1>New Subscriber</h1>";
    $adminBody .= "<p>A new user has subscribed to the newsletter.</p>";
    $adminBody .= "<p><strong>Email:</strong> $email</p>";

    $adminHtml = getEmailTemplate($adminBody);

    // --- 2. Prepare User Auto-reply Content ---
    $userSubject = "Welcome to the Vikhyat Foundation Community!";
    $userBody = "<h1>Welcome Aboard!</h1>";
    $userBody .= "<p>Thank you for subscribing to the Vikhyat Foundation newsletter. You are now part of a community dedicated to driving social change.</p>";
    $userBody .= "<p>Stay tuned for updates on our latest initiatives, events, and impact stories.</p>";
    $userBody .= "<a href='https://vikhyatfoundation.com' class='button'>Visit Our Website</a>";

    $userHtml = getEmailTemplate($userBody);

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
    $adminSent = sendEmail(SUBSCRIBE_TO_EMAIL, $adminSubject, $adminHtml);

    // Send to User
    $userSent = sendEmail($email, $userSubject, $userHtml);

    if ($adminSent) {
        echo json_encode(["success" => true, "message" => "Subscribed successfully!"]);
    } else {
        http_response_code(500);
        echo json_encode(["success" => false, "message" => "Subscription failed. Please try again."]);
    }

} else {
    http_response_code(403);
    echo "Forbidden";
}
?>