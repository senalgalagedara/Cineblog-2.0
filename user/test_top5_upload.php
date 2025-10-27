<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Top 5 Movies Upload</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #f5f5f5;
        }
        .test-section {
            background: white;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }
        .preview-box {
            margin: 15px 0;
            padding: 15px;
            background: #f9f9f9;
            border: 1px dashed #ccc;
            border-radius: 4px;
        }
        .preview-img {
            max-width: 200px;
            max-height: 300px;
            border: 1px solid #ddd;
            margin: 10px 0;
        }
        input[type="file"], input[type="text"] {
            margin: 10px 0;
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
        }
        button {
            background: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 5px;
        }
        button:hover {
            background: #0056b3;
        }
        .error {
            color: red;
            font-weight: bold;
        }
        .success {
            color: green;
            font-weight: bold;
        }
        .info {
            background: #e7f3ff;
            padding: 10px;
            border-left: 4px solid #007bff;
            margin: 10px 0;
        }
        .status {
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <h1>🎬 Top 5 Movies Upload Test</h1>

    <?php
    require_once __DIR__ . '/../includes/session.php';
    require_once __DIR__ . '/../config/config.php';
    require_once __DIR__ . '/../model/usermodel.php';

    // Check login status
    if (!isLoggedIn()) {
        echo '<div class="test-section">';
        echo '<p class="error">❌ Not logged in. Please <a href="../login.php">login</a> first.</p>';
        echo '</div>';
        echo '</body></html>';
        exit;
    }

    $currentUser = getCurrentUser();
    $db = (new config())->connect();
    $userModel = new usermodel($db);
    $userProfile = $userModel->getUserById($currentUser['userid']);
    $top5Movies = !empty($userProfile['top5_movies']) ? json_decode($userProfile['top5_movies'], true) : [];

    // Display test status
    echo '<div class="test-section">';
    echo '<h2>✅ System Status</h2>';
    echo '<div class="info">';
    echo '<p><strong>User ID:</strong> ' . htmlspecialchars($currentUser['userid']) . '</p>';
    echo '<p><strong>Username:</strong> ' . htmlspecialchars($currentUser['username']) . '</p>';
    echo '<p><strong>Current Movies:</strong> ' . count($top5Movies) . ' / 5</p>';
    echo '</div>';
    
    // Check directory
    $postersDir = __DIR__ . '/posters/';
    echo '<h3>Directory Status</h3>';
    if (is_dir($postersDir)) {
        echo '<p class="success">✅ Posters directory exists</p>';
        if (is_writable($postersDir)) {
            echo '<p class="success">✅ Directory is writable</p>';
        } else {
            echo '<p class="error">❌ Directory is NOT writable</p>';
        }
    } else {
        echo '<p class="error">❌ Posters directory does NOT exist</p>';
    }
    
    // Check PHP settings
    echo '<h3>PHP Upload Settings</h3>';
    echo '<p><strong>upload_max_filesize:</strong> ' . ini_get('upload_max_filesize') . '</p>';
    echo '<p><strong>post_max_size:</strong> ' . ini_get('post_max_size') . '</p>';
    echo '<p><strong>max_file_uploads:</strong> ' . ini_get('max_file_uploads') . '</p>';
    echo '</div>';

    // Display current movies
    if (!empty($top5Movies)) {
        echo '<div class="test-section">';
        echo '<h2>📽️ Current Top 5 Movies</h2>';
        echo '<div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(150px, 1fr)); gap: 15px;">';
        foreach ($top5Movies as $index => $movie) {
            echo '<div style="border: 1px solid #ddd; padding: 10px; border-radius: 4px;">';
            if (!empty($movie['poster'])) {
                $posterSrc = (strpos($movie['poster'], 'http') === 0) 
                    ? htmlspecialchars($movie['poster']) 
                    : 'posters/' . htmlspecialchars($movie['poster']);
                
                if (strpos($movie['poster'], 'http') !== 0) {
                    $filePath = $postersDir . $movie['poster'];
                    if (file_exists($filePath)) {
                        $fileSize = filesize($filePath);
                        echo '<p style="font-size: 11px; color: green;">✅ File exists (' . number_format($fileSize/1024, 1) . ' KB)</p>';
                    } else {
                        echo '<p style="font-size: 11px; color: red;">❌ File not found</p>';
                    }
                }
                
                echo '<img src="' . $posterSrc . '" alt="' . htmlspecialchars($movie['title']) . '" style="width: 100%; height: auto; margin: 5px 0;">';
            } else {
                echo '<div style="width: 100%; height: 200px; background: #eee; display: flex; align-items: center; justify-content: center;">No Poster</div>';
            }
            echo '<p style="font-weight: bold; margin: 5px 0;">' . htmlspecialchars($movie['title']) . '</p>';
            echo '<p style="font-size: 11px; color: #666;">Index: ' . $index . '</p>';
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
    }
    ?>

    <!-- Test Upload Form -->
    <div class="test-section">
        <h2>🧪 Test Upload</h2>
        <form method="POST" action="../controller/userController.php" enctype="multipart/form-data">
            <input type="hidden" name="save_single_movie" value="1">
            <input type="hidden" name="movie_index" id="test_index" value="-1">
            
            <label><strong>Movie Title:</strong></label>
            <input type="text" name="movie_title" placeholder="Enter movie title" required>
            
            <label><strong>Poster Image (Max 500KB):</strong></label>
            <input type="file" name="movie_poster" id="test_poster" accept="image/*" onchange="previewTestPoster(this)" required>
            
            <div class="preview-box" id="test_preview" style="display: none;">
                <strong>Preview:</strong>
                <div id="test_preview_content"></div>
            </div>
            
            <div class="info">
                <strong>Test Instructions:</strong>
                <ul>
                    <li>Select an image file (JPG, PNG, GIF, or WebP)</li>
                    <li>File must be under 500KB</li>
                    <li>Preview will show below</li>
                    <li>Click "Upload Test Movie" to submit</li>
                </ul>
            </div>
            
            <button type="submit">Upload Test Movie</button>
        </form>
    </div>

    <!-- Validation Tests -->
    <div class="test-section">
        <h2>🔍 Validation Tests</h2>
        
        <h3>Test 1: File Size Validation</h3>
        <input type="file" id="size_test" accept="image/*" onchange="testFileSize(this)">
        <div id="size_result" class="status"></div>
        
        <h3>Test 2: File Type Validation</h3>
        <input type="file" id="type_test" onchange="testFileType(this)">
        <div id="type_result" class="status"></div>
        
        <h3>Test 3: Preview Functionality</h3>
        <input type="file" id="preview_test" accept="image/*" onchange="testPreview(this)">
        <div id="preview_result" class="preview-box" style="display: none;"></div>
    </div>

    <!-- Directory Browser -->
    <div class="test-section">
        <h2>📁 Posters Directory Contents</h2>
        <?php
        if (is_dir($postersDir)) {
            $files = array_diff(scandir($postersDir), array('.', '..'));
            if (empty($files)) {
                echo '<p>Directory is empty</p>';
            } else {
                echo '<table style="width: 100%; border-collapse: collapse;">';
                echo '<tr style="background: #f0f0f0;"><th>Filename</th><th>Size</th><th>Modified</th><th>Preview</th></tr>';
                foreach ($files as $file) {
                    if ($file === '.htaccess' || $file === 'index.php') continue;
                    $filePath = $postersDir . $file;
                    $size = filesize($filePath);
                    $modified = date('Y-m-d H:i:s', filemtime($filePath));
                    echo '<tr style="border-bottom: 1px solid #ddd;">';
                    echo '<td style="padding: 8px;">' . htmlspecialchars($file) . '</td>';
                    echo '<td style="padding: 8px;">' . number_format($size/1024, 1) . ' KB</td>';
                    echo '<td style="padding: 8px;">' . $modified . '</td>';
                    echo '<td style="padding: 8px;"><img src="posters/' . htmlspecialchars($file) . '" style="max-width: 50px; max-height: 75px;"></td>';
                    echo '</tr>';
                }
                echo '</table>';
            }
        }
        ?>
    </div>

    <script>
        function previewTestPoster(input) {
            const preview = document.getElementById('test_preview');
            const content = document.getElementById('test_preview_content');
            
            if (input.files && input.files[0]) {
                const file = input.files[0];
                
                // Size check
                if (file.size > 500 * 1024) {
                    content.innerHTML = '<p class="error">❌ File too large: ' + (file.size / 1024).toFixed(1) + ' KB (Max: 500 KB)</p>';
                    preview.style.display = 'block';
                    return;
                }
                
                // Type check
                const allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/webp'];
                if (!allowedTypes.includes(file.type)) {
                    content.innerHTML = '<p class="error">❌ Invalid file type: ' + file.type + '</p>';
                    preview.style.display = 'block';
                    return;
                }
                
                const reader = new FileReader();
                reader.onload = function(e) {
                    content.innerHTML = `
                        <p class="success">✅ Valid image (${(file.size / 1024).toFixed(1)} KB)</p>
                        <img src="${e.target.result}" class="preview-img">
                        <p><strong>Name:</strong> ${file.name}</p>
                        <p><strong>Type:</strong> ${file.type}</p>
                    `;
                };
                reader.readAsDataURL(file);
                preview.style.display = 'block';
            }
        }
        
        function testFileSize(input) {
            const result = document.getElementById('size_result');
            if (input.files && input.files[0]) {
                const file = input.files[0];
                const sizeKB = (file.size / 1024).toFixed(1);
                if (file.size > 500 * 1024) {
                    result.innerHTML = `<p class="error">❌ FAIL: ${sizeKB} KB exceeds 500 KB limit</p>`;
                    result.style.background = '#ffe7e7';
                } else {
                    result.innerHTML = `<p class="success">✅ PASS: ${sizeKB} KB is within limit</p>`;
                    result.style.background = '#e7ffe7';
                }
            }
        }
        
        function testFileType(input) {
            const result = document.getElementById('type_result');
            if (input.files && input.files[0]) {
                const file = input.files[0];
                const allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/webp'];
                if (!allowedTypes.includes(file.type)) {
                    result.innerHTML = `<p class="error">❌ FAIL: "${file.type}" is not an allowed image type</p>`;
                    result.style.background = '#ffe7e7';
                } else {
                    result.innerHTML = `<p class="success">✅ PASS: "${file.type}" is valid</p>`;
                    result.style.background = '#e7ffe7';
                }
            }
        }
        
        function testPreview(input) {
            const result = document.getElementById('preview_result');
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    result.innerHTML = `
                        <p class="success">✅ Preview working</p>
                        <img src="${e.target.result}" class="preview-img">
                    `;
                    result.style.display = 'block';
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        
        // Display success/error messages from URL
        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('success')) {
                alert('✅ SUCCESS: ' + urlParams.get('success').replace(/_/g, ' '));
            }
            if (urlParams.has('error')) {
                alert('❌ ERROR: ' + decodeURIComponent(urlParams.get('error')));
            }
        };
    </script>
</body>
</html>
