<?php
// Helper functions for movie pages
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../model/reviewmodel.php';

function getMovieData($movie_id) {
    if (!isset($_SESSION['user_id'])) {
        return [
            'is_in_watchlist' => false,
            'is_watched' => false,
            'user_review' => null,
            'all_reviews' => []
        ];
    }

    $db = (new config())->connect();
    $reviewModel = new ReviewModel($db);
    $user_id = $_SESSION['user_id'];

    return [
        'is_in_watchlist' => $reviewModel->isInWatchlist($user_id, $movie_id),
        'is_watched' => $reviewModel->isWatched($user_id, $movie_id),
        'user_review' => $reviewModel->getUserReviewForMovie($user_id, $movie_id),
        'all_reviews' => $reviewModel->getReviewsForMovie($movie_id)
    ];
}

function renderReviewSection($movie_id, $movie_title, $movie_type = 'anime') {
    $movieData = getMovieData($movie_id);
    $isLoggedIn = isset($_SESSION['user_id']);
    $userReview = $movieData['user_review'];
    $allReviews = $movieData['all_reviews'];
    ?>
    
    <div class="reviewspace">
        <div class="revbg">
            <h2 class="infotitle" style="padding-left: 10px !important;">Reviews</h2>
            
            <?php if ($isLoggedIn): ?>
                <?php if ($userReview): ?>
                    <!-- User's existing review -->
                    <div class="user-review-section">
                        <h3>Your Review</h3>
                        <div class="review-card user-review">
                            <p class="review-text"><?php echo htmlspecialchars($userReview['review_text']); ?></p>
                            <?php if ($userReview['rating']): ?>
                                <p class="review-rating">Rating: <?php echo htmlspecialchars($userReview['rating']); ?>/10</p>
                            <?php endif; ?>
                            <p class="review-meta">
                                Posted on <?php echo date('F j, Y', strtotime($userReview['created_at'])); ?>
                                <?php if ($userReview['is_edited']): ?>
                                    <span class="edited-badge">(Edited)</span>
                                <?php endif; ?>
                            </p>
                            <?php if ($userReview['edit_count'] < 1): ?>
                                <button onclick="editReview(<?php echo $userReview['review_id']; ?>, '<?php echo htmlspecialchars($userReview['review_text'], ENT_QUOTES); ?>', <?php echo $userReview['rating'] ?? 'null'; ?>)" class="edit-review-btn">Edit Review</button>
                            <?php else: ?>
                                <p class="edit-limit-msg">You have already edited this review once.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php else: ?>
                    <!-- Add review form -->
                    <button onclick="document.getElementById('reviewModal').style.display='block'" class="submitreview">Add Your Review</button>
                <?php endif; ?>
            <?php else: ?>
                <p class="login-prompt">Please <a href="/movieblog/login.php">login</a> to add a review.</p>
            <?php endif; ?>

            <!-- All reviews -->
            <div class="all-reviews-section">
                <h3 style="margin-top: 30px;">All Reviews (<?php echo count($allReviews); ?>)</h3>
                <?php if (count($allReviews) > 0): ?>
                    <?php foreach ($allReviews as $review): ?>
                        <div class="review-card">
                            <div class="review-header">
                                <span class="review-author"><?php echo htmlspecialchars($review['username']); ?></span>
                                <?php if ($review['rating']): ?>
                                    <span class="review-rating">★ <?php echo htmlspecialchars($review['rating']); ?>/10</span>
                                <?php endif; ?>
                            </div>
                            <p class="review-text"><?php echo nl2br(htmlspecialchars($review['review_text'])); ?></p>
                            <p class="review-meta">
                                <?php echo date('F j, Y', strtotime($review['created_at'])); ?>
                                <?php if ($review['is_edited']): ?>
                                    <span class="edited-badge">(Edited)</span>
                                <?php endif; ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="no-reviews">No reviews yet. Be the first to review!</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Review Modal -->
    <div id="reviewModal" class="modal">
        <div class="modal-content">
            <div class="flexbtnwthin">
                <h1 class="adrevwin">Add Your Review</h1>
                <div onclick="document.getElementById('reviewModal').style.display='none'" class="closebtn" title="Close Modal">&times;</div>
            </div>
            <form id="reviewForm" onsubmit="submitReview(event)">
                <input type="hidden" name="movie_id" value="<?php echo htmlspecialchars($movie_id); ?>">
                <input type="hidden" name="movie_title" value="<?php echo htmlspecialchars($movie_title); ?>">
                
                <h3 class="usernamewrite">Rating (Optional)</h3>
                <select name="rating" class="rating-select">
                    <option value="">No Rating</option>
                    <option value="1">1 - Terrible</option>
                    <option value="2">2 - Bad</option>
                    <option value="3">3 - Poor</option>
                    <option value="4">4 - Below Average</option>
                    <option value="5">5 - Average</option>
                    <option value="6">6 - Above Average</option>
                    <option value="7">7 - Good</option>
                    <option value="8">8 - Very Good</option>
                    <option value="9">9 - Excellent</option>
                    <option value="10">10 - Masterpiece</option>
                </select>
                <br><br>
                
                <h3 class="usernamewrite">Your Review</h3>
                <textarea name="review_text" class="textareaa" rows="10" placeholder="Share your thoughts about this <?php echo $movie_type; ?>..." required></textarea>
                
                <button type="submit" class="submitrevieww">Submit Review</button>
                <br><br>
            </form>
        </div>
    </div>

    <!-- Edit Review Modal -->
    <div id="editReviewModal" class="modal">
        <div class="modal-content">
            <div class="flexbtnwthin">
                <h1 class="adrevwin">Edit Your Review</h1>
                <div onclick="document.getElementById('editReviewModal').style.display='none'" class="closebtn" title="Close Modal">&times;</div>
            </div>
            <form id="editReviewForm" onsubmit="updateReview(event)">
                <input type="hidden" name="review_id" id="edit_review_id">
                
                <h3 class="usernamewrite">Rating (Optional)</h3>
                <select name="rating" id="edit_rating" class="rating-select">
                    <option value="">No Rating</option>
                    <option value="1">1 - Terrible</option>
                    <option value="2">2 - Bad</option>
                    <option value="3">3 - Poor</option>
                    <option value="4">4 - Below Average</option>
                    <option value="5">5 - Average</option>
                    <option value="6">6 - Above Average</option>
                    <option value="7">7 - Good</option>
                    <option value="8">8 - Very Good</option>
                    <option value="9">9 - Excellent</option>
                    <option value="10">10 - Masterpiece</option>
                </select>
                <br><br>
                
                <h3 class="usernamewrite">Your Review</h3>
                <textarea name="review_text" id="edit_review_text" class="textareaa" rows="10" required></textarea>
                
                <p class="edit-warning">⚠️ You can only edit your review once!</p>
                
                <button type="submit" class="submitrevieww">Update Review</button>
                <br><br>
            </form>
        </div>
    </div>

    <style>
        .review-card {
            background: #f9f9f9;
            border-left: 4px solid #007bff;
            padding: 15px;
            margin: 15px 0;
            border-radius: 5px;
        }
        .user-review {
            border-left-color: #28a745;
            background: #f0fff4;
        }
        .review-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        .review-author {
            font-weight: bold;
            color: #333;
        }
        .review-rating {
            color: #ffa500;
            font-weight: bold;
        }
        .review-text {
            color: #555;
            line-height: 1.6;
            margin: 10px 0;
        }
        .review-meta {
            font-size: 0.85em;
            color: #888;
            margin-top: 10px;
        }
        .edited-badge {
            font-style: italic;
            color: #666;
        }
        .edit-review-btn {
            background: #007bff;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        .edit-review-btn:hover {
            background: #0056b3;
        }
        .edit-limit-msg {
            color: #666;
            font-style: italic;
            margin-top: 10px;
        }
        .no-reviews {
            text-align: center;
            color: #888;
            padding: 20px;
        }
        .login-prompt {
            text-align: center;
            padding: 20px;
            background: #fff3cd;
            border-radius: 5px;
            margin: 15px 0;
        }
        .login-prompt a {
            color: #007bff;
            font-weight: bold;
        }
        .rating-select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        .edit-warning {
            background: #fff3cd;
            padding: 10px;
            border-radius: 5px;
            color: #856404;
            margin: 10px 0;
        }
        .user-review-section {
            margin-bottom: 30px;
        }
        .all-reviews-section h3 {
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
    </style>

    <script>
        // Close modal when clicking outside
        window.onclick = function(event) {
            const reviewModal = document.getElementById('reviewModal');
            const editReviewModal = document.getElementById('editReviewModal');
            if (event.target == reviewModal) {
                reviewModal.style.display = 'none';
            }
            if (event.target == editReviewModal) {
                editReviewModal.style.display = 'none';
            }
        }

        function submitReview(event) {
            event.preventDefault();
            const form = event.target;
            const formData = new FormData(form);
            formData.append('action', 'add_review');

            fetch('/movieblog/controller/reviewController.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.message);
                    location.reload();
                } else {
                    if (data.redirect) {
                        alert(data.message);
                        window.location.href = data.redirect;
                    } else {
                        alert(data.message);
                    }
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            });
        }

        function editReview(reviewId, reviewText, rating) {
            document.getElementById('edit_review_id').value = reviewId;
            document.getElementById('edit_review_text').value = reviewText;
            document.getElementById('edit_rating').value = rating || '';
            document.getElementById('editReviewModal').style.display = 'block';
        }

        function updateReview(event) {
            event.preventDefault();
            const form = event.target;
            const formData = new FormData(form);
            formData.append('action', 'update_review');

            fetch('/movieblog/controller/reviewController.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.message);
                    location.reload();
                } else {
                    alert(data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            });
        }
    </script>
    <?php
}

function renderHeaderButtons($movie_id, $movie_title, $movie_type = 'anime') {
    $movieData = getMovieData($movie_id);
    $isLoggedIn = isset($_SESSION['user_id']);
    
    // Debug output
    echo "<!-- Debug: movie_id=$movie_id, movie_title=$movie_title, movie_type=$movie_type -->";
    echo "<!-- Debug: isLoggedIn=" . ($isLoggedIn ? 'true' : 'false') . " -->";
    echo "<!-- Debug: is_watched=" . ($movieData['is_watched'] ? 'true' : 'false') . " -->";
    echo "<!-- Debug: is_in_watchlist=" . ($movieData['is_in_watchlist'] ? 'true' : 'false') . " -->";
    ?>
    
    <div class="header-action-buttons">
        <?php if ($isLoggedIn): ?>
            <button class="header-action-btn watched-btn <?php echo $movieData['is_watched'] ? 'active' : ''; ?>" 
                    id="watchedBtn"
                    data-movie-id="<?php echo htmlspecialchars($movie_id); ?>"
                    data-movie-title="<?php echo htmlspecialchars($movie_title); ?>"
                    data-movie-type="<?php echo htmlspecialchars($movie_type); ?>"
                    title="<?php echo $movieData['is_watched'] ? 'Remove from Watched' : 'Mark as Watched'; ?>">
                <?php echo $movieData['is_watched'] ? 'Watched' : 'Mark as Watched'; ?>
            </button>
            
            <button class="header-action-btn wishlist-btn <?php echo $movieData['is_in_watchlist'] ? 'active' : ''; ?>" 
                    id="watchlistBtn"
                    data-movie-id="<?php echo htmlspecialchars($movie_id); ?>"
                    data-movie-title="<?php echo htmlspecialchars($movie_title); ?>"
                    data-movie-type="<?php echo htmlspecialchars($movie_type); ?>"
                    title="<?php echo $movieData['is_in_watchlist'] ? 'Remove from Watchlist' : 'Add to Watchlist'; ?>">
                <span class="heart-icon"><?php echo $movieData['is_in_watchlist'] ? '❤️' : '🤍'; ?></span>
            </button>
        <?php else: ?>
            <button class="header-action-btn watched-btn"
                    id="watchedBtnGuest"
                    title="Mark as Watched">
                Mark as Watched
            </button>
            <button class="header-action-btn wishlist-btn"
                    id="watchlistBtnGuest"
                    title="Add to Wishlist">
                <span class="heart-icon">🤍</span>
            </button>
        <?php endif; ?>
    </div>

    <style>
        .header-action-buttons {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }
        .header-action-btn {
            background: rgba(0, 0, 0, 0.7);
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.3);
            padding: 10px 20px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }
        .header-action-btn:hover {
            background: rgba(0, 0, 0, 0.9);
            border-color: rgba(255, 255, 255, 0.6);
            transform: translateY(-2px);
        }
        .watched-btn {
            min-width: 150px;
        }
        .wishlist-btn {
            min-width: 60px;
            padding: 10px 15px;
        }
        .heart-icon {
            font-size: 20px;
            display: inline-block;
        }
        .header-action-btn.active {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.8);
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('DOM loaded, setting up event listeners');
            
            // Handle watched button
            const watchedBtn = document.getElementById('watchedBtn');
            if (watchedBtn) {
                console.log('Watched button found');
                watchedBtn.addEventListener('click', function() {
                    const movieId = this.getAttribute('data-movie-id');
                    const movieTitle = this.getAttribute('data-movie-title');
                    const movieType = this.getAttribute('data-movie-type');
                    console.log('Watched button clicked:', movieId, movieTitle, movieType);
                    toggleWatched(movieId, movieTitle, movieType);
                });
            } else {
                console.log('Watched button NOT found');
            }
            
            // Handle wishlist button
            const wishlistBtn = document.getElementById('watchlistBtn');
            if (wishlistBtn) {
                console.log('Wishlist button found');
                wishlistBtn.addEventListener('click', function() {
                    const movieId = this.getAttribute('data-movie-id');
                    const movieTitle = this.getAttribute('data-movie-title');
                    const movieType = this.getAttribute('data-movie-type');
                    console.log('Wishlist button clicked:', movieId, movieTitle, movieType);
                    toggleWatchlist(movieId, movieTitle, movieType);
                });
            } else {
                console.log('Wishlist button NOT found');
            }
            
            // Handle guest buttons
            const watchedBtnGuest = document.getElementById('watchedBtnGuest');
            if (watchedBtnGuest) {
                watchedBtnGuest.addEventListener('click', function() {
                    alert('Please login to use this feature.');
                    window.location.href = '/movieblog/login.php';
                });
            }
            
            const wishlistBtnGuest = document.getElementById('watchlistBtnGuest');
            if (wishlistBtnGuest) {
                wishlistBtnGuest.addEventListener('click', function() {
                    alert('Please login to use this feature.');
                    window.location.href = '/movieblog/login.php';
                });
            }
        });
        
        function toggleWatched(movieId, movieTitle, movieType) {
            console.log('toggleWatched called:', movieId, movieTitle, movieType);
            const btn = document.getElementById('watchedBtn');
            console.log('Button found:', btn);
            if (!btn) {
                alert('Button not found!');
                return;
            }
            const isWatched = btn.classList.contains('active');
            const action = isWatched ? 'remove_from_watched' : 'mark_as_watched';
            console.log('Action:', action);

            const formData = new FormData();
            formData.append('action', action);
            formData.append('movie_id', movieId);
            formData.append('movie_title', movieTitle);
            formData.append('movie_type', movieType);

            fetch('/movieblog/controller/reviewController.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                console.log('Response status:', response.status);
                return response.json();
            })
            .then(data => {
                console.log('Response data:', data);
                if (data.success) {
                    location.reload();
                } else {
                    if (data.redirect) {
                        alert(data.message);
                        window.location.href = data.redirect;
                    } else {
                        alert(data.message);
                    }
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            });
        }

        function toggleWatchlist(movieId, movieTitle, movieType) {
            console.log('toggleWatchlist called:', movieId, movieTitle, movieType);
            const btn = document.getElementById('watchlistBtn');
            console.log('Button found:', btn);
            if (!btn) {
                alert('Button not found!');
                return;
            }
            const isInWatchlist = btn.classList.contains('active');
            const action = isInWatchlist ? 'remove_from_watchlist' : 'add_to_watchlist';
            console.log('Action:', action);

            const formData = new FormData();
            formData.append('action', action);
            formData.append('movie_id', movieId);
            formData.append('movie_title', movieTitle);
            formData.append('movie_type', movieType);

            fetch('/movieblog/controller/reviewController.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                console.log('Response status:', response.status);
                return response.json();
            })
            .then(data => {
                console.log('Response data:', data);
                if (data.success) {
                    location.reload();
                } else {
                    if (data.redirect) {
                        alert(data.message);
                        window.location.href = data.redirect;
                    } else {
                        alert(data.message);
                    }
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            });
        }
    </script>
    <?php
}

function renderWatchlistButtons($movie_id, $movie_title, $movie_type = 'anime') {
    $movieData = getMovieData($movie_id);
    $isLoggedIn = isset($_SESSION['user_id']);
    ?>
    
    <div class="action-buttons">
        <?php if ($isLoggedIn): ?>
            <button onclick="toggleWatched('<?php echo htmlspecialchars($movie_id); ?>', '<?php echo htmlspecialchars($movie_title); ?>', '<?php echo $movie_type; ?>')" 
                    class="action-btn <?php echo $movieData['is_watched'] ? 'active' : ''; ?>" 
                    id="watchedBtn">
                <span class="btn-icon"><?php echo $movieData['is_watched'] ? '✓' : '👁'; ?></span>
                <?php echo $movieData['is_watched'] ? 'Watched' : 'Mark as Watched'; ?>
            </button>
            
            <button onclick="toggleWatchlist('<?php echo htmlspecialchars($movie_id); ?>', '<?php echo htmlspecialchars($movie_title); ?>', '<?php echo $movie_type; ?>')" 
                    class="action-btn <?php echo $movieData['is_in_watchlist'] ? 'active' : ''; ?>" 
                    id="watchlistBtn">
                <span class="btn-icon"><?php echo $movieData['is_in_watchlist'] ? '✓' : '📌'; ?></span>
                <?php echo $movieData['is_in_watchlist'] ? 'In Watchlist' : 'Add to Watchlist'; ?>
            </button>
        <?php else: ?>
            <button onclick="alert('Please login to use this feature.'); window.location.href='/movieblog/login.php';" class="action-btn">
                <span class="btn-icon">👁</span> Mark as Watched
            </button>
            <button onclick="alert('Please login to use this feature.'); window.location.href='/movieblog/login.php';" class="action-btn">
                <span class="btn-icon">📌</span> Add to Watchlist
            </button>
        <?php endif; ?>
    </div>

    <style>
        .action-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin: 30px 0;
            flex-wrap: wrap;
        }
        .action-btn {
            background: black;
            color: white;
            border: none;
            width: 50%;
            padding: 12px 25px;
            font-size: 16px;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        .action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }
        .action-btn.active {
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
        }
        .btn-icon {
            font-size: 18px;
        }
    </style>

    <script>
        if (typeof toggleWatched === 'undefined') {
            function toggleWatched(movieId, movieTitle, movieType) {
                const btn = document.getElementById('watchedBtn');
                const isWatched = btn.classList.contains('active');
                const action = isWatched ? 'remove_from_watched' : 'mark_as_watched';

                const formData = new FormData();
                formData.append('action', action);
                formData.append('movie_id', movieId);
                formData.append('movie_title', movieTitle);
                formData.append('movie_type', movieType);

                fetch('/movieblog/controller/reviewController.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    } else {
                        if (data.redirect) {
                            alert(data.message);
                            window.location.href = data.redirect;
                        } else {
                            alert(data.message);
                        }
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred. Please try again.');
                });
            }

            function toggleWatchlist(movieId, movieTitle, movieType) {
                const btn = document.getElementById('watchlistBtn');
                const isInWatchlist = btn.classList.contains('active');
                const action = isInWatchlist ? 'remove_from_watchlist' : 'add_to_watchlist';

                const formData = new FormData();
                formData.append('action', action);
                formData.append('movie_id', movieId);
                formData.append('movie_title', movieTitle);
                formData.append('movie_type', movieType);

                fetch('/movieblog/controller/reviewController.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    } else {
                        if (data.redirect) {
                            alert(data.message);
                            window.location.href = data.redirect;
                        } else {
                            alert(data.message);
                        }
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred. Please try again.');
                });
            }
        }
    </script>
    <?php
}
?>
