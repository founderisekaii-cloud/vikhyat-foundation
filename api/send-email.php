<?php
require_once '../config.php';
require_once 'email-template.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = strip_tags(trim($_POST["subject"]));
    $message = strip_tags(trim($_POST["message"]));

    // Basic Validation
    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode(["success" => false, "message" => "Invalid input."]);
        exit;
    }

    // --- 1. Prepare Admin Email Content ---
    $adminSubject = "New Message: $subject - $name";
    $adminBody = "<h1>New Contact Message</h1>";
    $adminBody .= "<p><strong>Name:</strong> $name</p>";
    $adminBody .= "<p><strong>Email:</strong> $email</p>";
    $adminBody .= "<p><strong>Subject:</strong> $subject</p>";
    $adminBody .= "<p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>";

    $adminHtml = getEmailTemplate($adminBody);

    // --- 2. Prepare User Auto-reply Content ---
    $userSubject = "We received your message - Vikhyat Foundation";
    $userBody = "<h1>Hello $name,</h1>";
    $userBody .= "<p>Thank you for contacting Vikhyat Foundation. We have received your message regarding \"<strong>$subject</strong>\".</p>";
    if ($adminSent) {
        // Redirect back with success message
        header("Location: /contact.php?success=1");
    } else {
        // Log error in production
        header("Location: /contact.php?error=1");
    }
} else {
    http_response_code(403);
    echo "Forbidden";
}
?>