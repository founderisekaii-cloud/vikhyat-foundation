<?php
// Mock Environment
$_SERVER['REQUEST_METHOD'] = 'POST';
$_POST = [
    'name' => 'Contact Page User',
    'email' => 'contact@test.com',
    'type' => 'Contact',
    'message' => 'Testing the new AJAX contact form.',
    'subject' => 'Website Feedback' // inquire.php might ignore this if not mapped, but checks if it crashes
];

// Run API
echo "Running api/inquiry.php for Contact...\n";
require 'api/inquiry.php';
echo "\n";
