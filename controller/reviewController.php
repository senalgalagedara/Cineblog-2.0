<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../model/reviewmodel.php';

session_start();

header('Content-Type: application/json');

$db = (new config())->connect();
$reviewModel = new ReviewModel($db);

$response = ['success' => false, 'message' => 'Invalid request'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    // Check if user is logged in for all actions
    if (!isset($_SESSION['user_id'])) {
        echo json_encode(['success' => false, 'message' => 'You must be logged in.', 'redirect' => '/movieblog/login.php']);
        exit;
    }

    $user_id = $_SESSION['user_id'];

    switch ($action) {
        case 'add_review':
            $movie_id = $_POST['movie_id'] ?? '';
            $movie_title = $_POST['movie_title'] ?? '';
            $review_text = trim($_POST['review_text'] ?? '');
            $rating = $_POST['rating'] ?? null;

            if (empty($movie_id) || empty($movie_title) || empty($review_text)) {
                $response = ['success' => false, 'message' => 'All fields are required.'];
            } else {
                $response = $reviewModel->addReview($user_id, $movie_id, $movie_title, $review_text, $rating);
            }
            break;

        case 'update_review':
            $review_id = $_POST['review_id'] ?? '';
            $review_text = trim($_POST['review_text'] ?? '');
            $rating = $_POST['rating'] ?? null;

            if (empty($review_id) || empty($review_text)) {
                $response = ['success' => false, 'message' => 'All fields are required.'];
            } else {
                $response = $reviewModel->updateReview($review_id, $user_id, $review_text, $rating);
            }
            break;

        case 'add_to_watchlist':
            $movie_id = $_POST['movie_id'] ?? '';
            $movie_title = $_POST['movie_title'] ?? '';
            $movie_type = $_POST['movie_type'] ?? '';

            if (empty($movie_id) || empty($movie_title) || empty($movie_type)) {
                $response = ['success' => false, 'message' => 'Invalid data.'];
            } else {
                $response = $reviewModel->addToWatchlist($user_id, $movie_id, $movie_title, $movie_type);
            }
            break;

        case 'remove_from_watchlist':
            $movie_id = $_POST['movie_id'] ?? '';
            if (empty($movie_id)) {
                $response = ['success' => false, 'message' => 'Invalid data.'];
            } else {
                $response = $reviewModel->removeFromWatchlist($user_id, $movie_id);
            }
            break;

        case 'mark_as_watched':
            $movie_id = $_POST['movie_id'] ?? '';
            $movie_title = $_POST['movie_title'] ?? '';
            $movie_type = $_POST['movie_type'] ?? '';

            if (empty($movie_id) || empty($movie_title) || empty($movie_type)) {
                $response = ['success' => false, 'message' => 'Invalid data.'];
            } else {
                $response = $reviewModel->markAsWatched($user_id, $movie_id, $movie_title, $movie_type);
            }
            break;

        case 'remove_from_watched':
            $movie_id = $_POST['movie_id'] ?? '';
            if (empty($movie_id)) {
                $response = ['success' => false, 'message' => 'Invalid data.'];
            } else {
                $response = $reviewModel->removeFromWatched($user_id, $movie_id);
            }
            break;

        default:
            $response = ['success' => false, 'message' => 'Invalid action.'];
    }
}

echo json_encode($response);
