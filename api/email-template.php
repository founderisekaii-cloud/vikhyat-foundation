<?php
function getEmailTemplate($content)
{
    $year = date('Y');
    $siteName = SITE_NAME;

    // Logo URL - Assuming hosted or using a placeholder for now if local
    // In production, this should be a public URL. For now, we'll use a placeholder or relative if supported by client (usually needs absolute)
    $logoUrl = "https://vikhyatfoundation.com/images/logo.png"; // Replace with actual production URL

    return <<<HTML
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body { margin: 0; padding: 0; font-family: 'Outfit', sans-serif; background-color: #f3f4f6; }
        .container { max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .header { background-color: #ffffff; padding: 24px; text-align: center; border-bottom: 1px solid #e5e7eb; }
        .header img { height: 48px; width: auto; }
        .content { padding: 32px 24px; color: #374151; line-height: 1.6; font-size: 16px; }
        .content h1 { color: #111827; font-size: 24px; font-weight: 700; margin-top: 0; margin-bottom: 16px; }
        .content p { margin-bottom: 16px; }
        .footer { background-color: #f9fafb; padding: 24px; text-align: center; color: #6b7280; font-size: 14px; border-top: 1px solid #e5e7eb; }
        .footer a { color: #0ea5e9; text-decoration: none; }
        .social-links { margin-top: 16px; }
        .social-links a { margin: 0 8px; display: inline-block; }
        .button { display: inline-block; background-color: #0ea5e9; color: #ffffff; padding: 12px 24px; border-radius: 6px; text-decoration: none; font-weight: 600; margin-top: 16px; }
        @media only screen and (max-width: 600px) {
            .content { padding: 24px 16px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="https://vikhyatfoundation.com" target="_blank">
                <img src="$logoUrl" alt="$siteName" style="height: 48px; width: auto; border: 0;">
            </a>
        </div>
        <div class="content">
            $content
        </div>
        <div class="footer">
            <p>&copy; $year $siteName. All rights reserved.</p>
            <p>Humanity at Heart, Progress in Action.</p>
            <div class="social-links">
                <a href="https://www.facebook.com/people/Vikhyat-Foundation/61583891132823/">Facebook</a> |
                <a href="https://www.instagram.com/vikhyat_foundation/">Instagram</a> |
                <a href="https://youtube.com/@vikhyatfoundation?si=Zi2wVSugmQaEK5OB">YouTube</a>
                <a href="https://wa.me/919619578549">WhatsApp</a>
            </div>
            <p style="margin-top: 16px; font-size: 12px;">
                You received this email because you contacted us or subscribed to our newsletter.
            </p>
        </div>
    </div>
</body>
</html>
HTML;
}
?>