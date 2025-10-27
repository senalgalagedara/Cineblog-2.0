<?php
require_once __DIR__ . '/../config/config.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    http_response_code(400);
    exit;
}

$posterId = intval($_GET['id']);

try {
    $db = (new config())->connect();
    $stmt = $db->prepare("SELECT poster_image, poster_mime FROM movie_posters WHERE poster_id = ?");
    $stmt->execute([$posterId]);
    $poster = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($poster && !empty($poster['poster_image'])) {
        // Set appropriate headers
        header('Content-Type: ' . $poster['poster_mime']);
        header('Content-Length: ' . strlen($poster['poster_image']));
        header('Cache-Control: public, max-age=31536000'); // Cache for 1 year
        
        // Output image data
        echo $poster['poster_image'];
    } else {
        http_response_code(404);
        // Optional: serve a default "no image" placeholder
    }
} catch (Exception $e) {
    error_log("Error fetching poster: " . $e->getMessage());
    http_response_code(500);
}
?>
