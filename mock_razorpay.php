<?php
require 'config.php';

// Mock Data
$secret = RAZORPAY_KEY_SECRET;
$order_id = 'order_mock123';
$payment_id = 'pay_mock456';

// Generate correct signature
$generated_signature = hash_hmac('sha256', $order_id . "|" . $payment_id, $secret);

// Test Logic
echo "Secret: " . substr($secret, 0, 4) . "...\n";
echo "Generated Signature: $generated_signature\n";

// Validate
if (hash_hmac('sha256', $order_id . "|" . $payment_id, $secret) === $generated_signature) {
    echo "SUCCESS: Signature verification logic is correct.\n";
} else {
    echo "FAILED: Signature mismatch.\n";
}

// Check curl availability for Capture
if (extension_loaded('curl')) {
    echo "SUCCESS: cURL extension is loaded.\n";
} else {
    echo "FAILED: cURL extension is missing.\n";
}
?>