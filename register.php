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
    <title>Register - CINEBLOG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='assert/css/style.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assert/css/mob_style.css'>
    <link rel="icon" type="image/x-icon" href="assert/img/favicon.ico">
    <script src="https://kit.fontawesome.com/4e00cb04a3.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,800;1,800&family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <style>
        .register-container {
            max-width: 450px;
            margin: 100px auto;
            padding: 40px;
            background: rgba(0, 0, 0, 0.8);
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
        }
        .register-title {
            text-align: center;
            color: white;
            margin-bottom: 10px;
            font-size: 2rem;
        }
        .register-subtitle {
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
            border-color: #28a745;
        }
        .register-btn {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s;
        }
        .register-btn:hover {
            transform: translateY(-2px);
        }
        .login-link {
            text-align: center;
            color: white;
            margin-top: 20px;
        }
        .login-link a {
            color: #28a745;
            text-decoration: none;
        }
        .login-link a:hover {
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
        .terms {
            color: #aaa;
            font-size: 14px;
            text-align: center;
            margin-top: 20px;
        }
        .terms a {
            color: #667eea;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <?php include __DIR__ . '/includes/navbar.php'; ?>

    <div class="register-container">
        <h1 class="register-title">Join CINEBLOG</h1>
        <p class="register-subtitle">Create your account to start reviewing</p>

        <?php if (isset($_GET['error'])): ?>
            <div class="alert alert-error">
                <?php 
                    if ($_GET['error'] == 'passwords_mismatch') {
                        echo "Passwords do not match!";
                    } elseif ($_GET['error'] == 'email_exists') {
                        echo "Email already registered!";
                    } else {
                        echo "Registration failed. Please try again.";
                    }
                ?>
            </div>
        <?php endif; ?>

        <form action="controller/userController.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Choose a username" required>
            </div>

            <div class="form-group">
                <label for="useremail">Email</label>
                <input type="email" id="useremail" name="useremail" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Create a password" required minlength="6">
            </div>

            <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" id="cpassword" name="cpassword" placeholder="Confirm your password" required minlength="6">
            </div>

            <button type="submit" name="register" class="register-btn">Register</button>
        </form>

        <div class="terms">
            By registering, you agree to our <a href="#">Terms & Privacy Policy</a>
        </div>

        <div class="login-link">
            Already have an account? <a href="login.php">Login here</a>
        </div>
    </div>

    <div style="min-height: 50vh;"></div>
</body>
</html>
