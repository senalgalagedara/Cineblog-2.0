<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../service/userService.php';

session_start();

$db = (new config())->connect();
$userService = new userService($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle Registration
    if (isset($_POST['register'])) {
        // Check if passwords match
        if ($_POST['password'] !== $_POST['cpassword']) {
            header("Location: ../register.php?error=passwords_mismatch");
            exit;
        }

        $data = [
            'username' => trim($_POST['username']),
            'useremail' => trim($_POST['useremail']),
            'password' => $_POST['password'],
            'cpassword' => $_POST['cpassword']
        ];
        
        $result = $userService->register($data);
        if ($result === true) {
            header("Location: ../login.php?success=registered");
            exit;
        } elseif ($result === 'email_exists') {
            header("Location: ../register.php?error=email_exists");
            exit;
        } else {
            header("Location: ../register.php?error=registration_failed");
            exit;
        }
    }

    // Handle Login
    if (isset($_POST['login'])) {
        $data = [
            'login_identifier' => trim($_POST['login_identifier']), // Can be username or email
            'password' => $_POST['password']
        ];
        
        $user = $userService->login($data);
        if ($user) {
            // Set session variables
            $_SESSION['user_id'] = $user['userid'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['useremail'] = $user['useremail'];
            $_SESSION['LAST_ACTIVITY'] = time();
            
            // Handle "Remember Me" - set cookie for 1 day
            if (isset($_POST['remember_me'])) {
                setcookie('remember_user', $user['userid'], time() + 86400, '/'); // 86400 = 1 day
            }
            
            // Redirect to home page
            header("Location: ../index.php");
            exit;
        } else {
            header("Location: ../login.php?error=invalid");
            exit;
        }
    }

    // Handle User Deletion
    if (isset($_POST['delete'])) {
        $userService->deleteUser($_SESSION['user_id']);
        
        // Delete cookie if exists
        if (isset($_COOKIE['remember_user'])) {
            setcookie('remember_user', '', time() - 3600, '/');
        }
        
        session_destroy();
        header("Location: ../login.php?deleted=true");
        exit;
    }
}
