<?php
// Session management
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set session timeout to 1 day (86400 seconds)
$session_timeout = 86400;

// Check if session should expire
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $session_timeout)) {
    session_unset();
    session_destroy();
    header("Location: /movieblog/login.php?timeout=1");
    exit();
}

// Update last activity time
$_SESSION['LAST_ACTIVITY'] = time();

// Handle remember me cookie
if (!isset($_SESSION['user_id']) && isset($_COOKIE['remember_user'])) {
    // Auto login from cookie
    require_once __DIR__ . '/../config/config.php';
    require_once __DIR__ . '/../model/usermodel.php';
    
    $db = (new config())->connect();
    $userModel = new usermodel($db);
    
    $userId = $_COOKIE['remember_user'];
    $user = $userModel->getUserById($userId);
    
    if ($user) {
        $_SESSION['user_id'] = $user['userid'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['useremail'] = $user['useremail'];
    }
}

// Check if user is logged in
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

// Get current user data
function getCurrentUser() {
    if (isLoggedIn()) {
        return [
            'userid' => $_SESSION['user_id'],
            'username' => $_SESSION['username'],
            'useremail' => $_SESSION['useremail']
        ];
    }
    return null;
}
