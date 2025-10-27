<?php
session_start();

// Delete remember me cookie
if (isset($_COOKIE['remember_user'])) {
    setcookie('remember_user', '', time() - 3600, '/');
}

// Destroy session
session_unset();
session_destroy();

// Redirect to home page
header("Location: index.php");
exit();
