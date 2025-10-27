<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../model/usermodel.php';

// Get user ID from query parameter
$userId = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($userId <= 0) {
    // Serve default avatar
    header('Content-Type: image/jpeg');
    readfile(__DIR__ . '/img/user.jpg');
    exit;
}

// Connect to database
$db = (new config())->connect();
$userModel = new usermodel($db);

// Get user data
$user = $userModel->getUserById($userId);

// Check if user has avatar
if ($user && $user['avatar'] && $user['avatar_mime']) {
    // Set proper content type
    header('Content-Type: ' . $user['avatar_mime']);
    header('Content-Length: ' . $user['avatar_size']);
    header('Cache-Control: public, max-age=86400'); // Cache for 1 day
    
    // Output the image data
    echo $user['avatar'];
} else {
    // Serve default avatar
    header('Content-Type: image/jpeg');
    readfile(__DIR__ . '/img/user.jpg');
}
exit;
