<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../service/UserService.php';

session_start();

$db = (new Database())->connect();
$userService = new UserService($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['register'])) {
        $data = [
            'username' => $_POST['username'],
            'useremail' => $_POST['useremail'],
            'password' => $_POST['password']
        ];
        if ($userService->register($data)) {
            header("Location: ../views/login.php?success=registered");
            exit;
        }
    }

    if (isset($_POST['login'])) {
        $data = [
            'useremail' => $_POST['useremail'],
            'password' => $_POST['password']
        ];
        $user = $userService->login($data);
        if ($user) {
            $_SESSION['user_id'] = $user['userid'];
            header("Location: ../views/user_account.php");
            exit;
        } else {
            header("Location: ../views/login.php?error=invalid");
            exit;
        }
    }

    if (isset($_POST['delete'])) {
        $userService->deleteUser($_SESSION['user_id']);
        session_destroy();
        header("Location: ../views/login.php?deleted=true");
        exit;
    }
}
