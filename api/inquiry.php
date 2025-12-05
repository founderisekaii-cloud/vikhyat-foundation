<?php
require_once __DIR__ . '/../config.php';
require_once 'email-template.php';

// Set content type to JSON
header('Content-Type: application/json');

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed']);
    exit;
}

// Get form data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$type = $_POST['type'] ?? '';
$message = $_POST['message'] ?? '';
$skill = $_POST['skill'] ?? '';
$other_specify = $_POST['other_specify'] ?? '';

// Validate required fields
if (empty($name) || empty($email) || empty($message)) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Please fill in all required fields']);
    exit;
}

// --- 1. Prepare Admin Email Content ---
$adminSubject = "New Inquiry: " . ucfirst($type) . " - " . $name;
$adminBody = "<h1>New Inquiry Received</h1>";
$adminBody .= "<p><strong>Name:</strong> $name</p>";
$adminBody .= "<p><strong>Email:</strong> $email</p>";
$adminBody .= "<p><strong>Type:</strong> " . ucfirst($type) . "</p>";

if ($type === 'volunteer' && !empty($skill)) {
    $adminBody .= "<p><strong>Skill:</strong> $skill</p>";
}

if ($type === 'other' && !empty($other_specify)) {
    $adminBody .= "<p><strong>Specified:</strong> $other_specify</p>";
}

$adminBody .= "<p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>";

$adminHtml = getEmailTemplate($adminBody);

// --- 2. Prepare User Auto-reply Content ---
$userSubject = "Thank you for contacting Vikhyat Foundation!";
$userBody = "<h1>Hello $name,</h1>";
$userBody .= "<p>Thank you for reaching out to the Vikhyat Foundation. We have received your inquiry regarding <strong>" . ucfirst($type) . "</strong>.</p>";
$userBody .= "<p>Your interest in supporting our mission means the world to us. Whether you're looking to volunteer, partner, or just learn more, you are taking a step towards making a real difference.</p>";
$userBody .= "<p>Our team will review your message and get back to you shortly. In the meantime, feel free to explore our website to see how we are empowering communities.</p>";
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
$adminSent = sendEmail(CONTACT_FORM_TO_EMAIL, $adminSubject, $adminHtml);

// Send to User
$userSent = sendEmail($email, $userSubject, $userHtml);

if ($adminSent) {
    echo json_encode(['status' => 'success', 'message' => 'Thank you! Your message has been sent.']);
} else {
    // Log error if admin email fails
    error_log("Failed to send inquiry email via Resend.");
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Failed to send message. Please try again later.']);
}
?>