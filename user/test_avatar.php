<!DOCTYPE html>
<html>
<head>
    <title>Test Avatar Upload - Cineblog</title>
    <style>
        body { font-family: Arial; padding: 20px; max-width: 600px; margin: 0 auto; }
        .success { background: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin: 10px 0; }
        .error { background: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin: 10px 0; }
        .info { background: #d1ecf1; color: #0c5460; padding: 10px; border-radius: 5px; margin: 10px 0; }
        form { background: #f8f9fa; padding: 20px; border-radius: 5px; }
        input[type="file"] { margin: 10px 0; }
        button { background: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background: #0056b3; }
        img { max-width: 200px; margin: 10px 0; border: 2px solid #ddd; border-radius: 5px; }
    </style>
</head>
<body>
    <?php
    require_once __DIR__ . '/../includes/session.php';
    require_once __DIR__ . '/../config/config.php';
    require_once __DIR__ . '/../service/userService.php';

    // Check if user is logged in
    if (!isLoggedIn()) {
        echo '<div class="error">Please <a href="../login.php">login</a> first to test avatar upload.</div>';
        exit;
    }

    $currentUser = getCurrentUser();
    $db = (new config())->connect();
    $userService = new userService($db);

    // Handle upload
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['test_avatar'])) {
        $result = $userService->uploadAvatar($currentUser['userid'], $_FILES['test_avatar']);
        
        if ($result['success']) {
            echo '<div class="success">✓ ' . htmlspecialchars($result['message']) . '</div>';
        } else {
            echo '<div class="error">✗ ' . htmlspecialchars($result['message']) . '</div>';
        }
    }
    ?>

    <h1>🧪 Avatar Upload Test Page</h1>
    
    <div class="info">
        <strong>Logged in as:</strong> <?php echo htmlspecialchars($currentUser['username']); ?><br>
        <strong>User ID:</strong> <?php echo $currentUser['userid']; ?>
    </div>

    <h2>Current Avatar</h2>
    <img src="get_avatar.php?id=<?php echo $currentUser['userid']; ?>&t=<?php echo time(); ?>" alt="Current Avatar">

    <h2>Upload New Avatar</h2>
    <form method="POST" enctype="multipart/form-data">
        <label><strong>Select Image (Max 200KB):</strong></label><br>
        <input type="file" name="test_avatar" accept="image/*" required>
        <br><br>
        <button type="submit">Upload Test Avatar</button>
    </form>

    <h2>Validation Rules</h2>
    <ul>
        <li>✓ Maximum file size: 200KB (204,800 bytes)</li>
        <li>✓ Allowed formats: JPG, PNG, GIF, WEBP</li>
        <li>✓ File type validated by MIME type (server-side)</li>
        <li>✓ Stored as BLOB in database</li>
    </ul>

    <h2>File Size Calculator</h2>
    <div class="info">
        <strong>200KB = </strong>
        <ul>
            <li>204,800 bytes</li>
            <li>~200x200px JPEG at medium quality</li>
            <li>~150x150px PNG with transparency</li>
        </ul>
    </div>

    <p><a href="user_account.php">← Back to User Account</a></p>
</body>
</html>
