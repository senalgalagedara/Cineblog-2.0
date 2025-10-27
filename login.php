<?php
require_once __DIR__ . '/includes/session.php';

// Redirect if already logged in
if (isLoggedIn()) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login - CINEBLOG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='assert/css/style.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assert/css/mob_style.css'>
    <link rel="icon" type="image/x-icon" href="assert/img/favicon.ico">
    <script src="https://kit.fontawesome.com/4e00cb04a3.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,800;1,800&family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <style>
        .login-container {
            max-width: 450px;
            margin: 100px auto;
            padding: 40px;
            background: rgba(0, 0, 0, 0.8);
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
        }
        .login-title {
            text-align: center;
            color: white;
            margin-bottom: 10px;
            font-size: 2rem;
        }
        .login-subtitle {
            text-align: center;
            color: #aaa;
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            color: white;
            margin-bottom: 8px;
            font-weight: 500;
        }
        .form-group input {
            width: 100%;
            padding: 12px;
            border: 2px solid #444;
            border-radius: 8px;
            background: #222;
            color: white;
            font-size: 16px;
            box-sizing: border-box;
        }
        .form-group input:focus {
            outline: none;
            border-color: #667eea;
        }
        .remember-me {
            display: flex;
            align-items: center;
            color: white;
            margin-bottom: 20px;
        }
        .remember-me input {
            margin-right: 8px;
            width: auto;
        }
        .login-btn {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s;
        }
        .login-btn:hover {
            transform: translateY(-2px);
        }
        .register-link {
            text-align: center;
            color: white;
            margin-top: 20px;
        }
        .register-link a {
            color: #667eea;
            text-decoration: none;
        }
        .register-link a:hover {
            text-decoration: underline;
        }
        .alert {
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 8px;
            text-align: center;
        }
        .alert-error {
            background: #dc3545;
            color: white;
        }
        .alert-success {
            background: #28a745;
            color: white;
        }
        .alert-info {
            background: #17a2b8;
            color: white;
        }
    </style>
</head>
<body>
    <?php include __DIR__ . '/includes/navbar.php'; ?>

    <div class="login-container">
        <h1 class="login-title">Welcome Back</h1>
        <p class="login-subtitle">Login to your account</p>

        <?php if (isset($_GET['error'])): ?>
            <div class="alert alert-error">
                Invalid username/email or password!
            </div>
        <?php endif; ?>

        <?php if (isset($_GET['success']) && $_GET['success'] == 'registered'): ?>
            <div class="alert alert-success">
                Registration successful! Please login.
            </div>
        <?php endif; ?>

        <?php if (isset($_GET['timeout'])): ?>
            <div class="alert alert-info">
                Your session has expired. Please login again.
            </div>
        <?php endif; ?>

        <form action="controller/userController.php" method="POST">
            <div class="form-group">
                <label for="login_identifier">Username or Email</label>
                <input type="text" id="login_identifier" name="login_identifier" placeholder="Enter username or email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter password" required>
            </div>

            <div class="remember-me">
                <input type="checkbox" id="remember_me" name="remember_me" value="1">
                <label for="remember_me" style="margin-bottom: 0;">Remember me for 1 day</label>
            </div>

            <button type="submit" name="login" class="login-btn">Login</button>
        </form>

        <div class="register-link">
            Don't have an account? <a href="register.php">Register here</a>
        </div>
    </div>

    <div style="min-height: 50vh;"></div>
</body>
</html>
