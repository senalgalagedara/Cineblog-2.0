<?php
class ReviewModel {
    private $conn;
    private $reviews_table = "reviews";
    private $watchlist_table = "watchlist";
    private $watched_table = "watched";

    public function __construct($db) {
        $this->conn = $db;
    }

    // Review methods
    public function addReview($user_id, $movie_id, $movie_title, $review_text, $rating = null) {
        // Check if user already has a review for this movie
        if ($this->hasUserReviewed($user_id, $movie_id)) {
            return ['success' => false, 'message' => 'You have already reviewed this movie.'];
        }

        $query = "INSERT INTO {$this->reviews_table} (user_id, movie_id, movie_title, review_text, rating) 
                  VALUES (:user_id, :movie_id, :movie_title, :review_text, :rating)";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":user_id", $user_id);
        $stmt->bindParam(":movie_id", $movie_id);
        $stmt->bindParam(":movie_title", $movie_title);
        $stmt->bindParam(":review_text", $review_text);
        $stmt->bindParam(":rating", $rating);

        if ($stmt->execute()) {
            return ['success' => true, 'message' => 'Review added successfully!'];
        }
        return ['success' => false, 'message' => 'Failed to add review.'];
    }

    public function updateReview($review_id, $user_id, $review_text, $rating = null) {
        // Check if review exists and belongs to user
        $review = $this->getReviewById($review_id);
        if (!$review || $review['user_id'] != $user_id) {
            return ['success' => false, 'message' => 'Review not found or unauthorized.'];
        }

        // Check if already edited once
        if ($review['edit_count'] >= 1) {
            return ['success' => false, 'message' => 'You can only edit your review once.'];
        }

        $query = "UPDATE {$this->reviews_table} 
                  SET review_text = :review_text, rating = :rating, 
                      updated_at = CURRENT_TIMESTAMP, is_edited = TRUE, edit_count = edit_count + 1
                  WHERE review_id = :review_id AND user_id = :user_id";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":review_text", $review_text);
        $stmt->bindParam(":rating", $rating);
        $stmt->bindParam(":review_id", $review_id);
        $stmt->bindParam(":user_id", $user_id);

        if ($stmt->execute()) {
            return ['success' => true, 'message' => 'Review updated successfully!'];
        }
        return ['success' => false, 'message' => 'Failed to update review.'];
    }

    public function getReviewById($review_id) {
        $query = "SELECT * FROM {$this->reviews_table} WHERE review_id = :review_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":review_id", $review_id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getUserReviewForMovie($user_id, $movie_id) {
        $query = "SELECT * FROM {$this->reviews_table} 
                  WHERE user_id = :user_id AND movie_id = :movie_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":user_id", $user_id);
        $stmt->bindParam(":movie_id", $movie_id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getReviewsForMovie($movie_id) {
        $query = "SELECT r.*, u.username 
                  FROM {$this->reviews_table} r 
                  JOIN user_sign u ON r.user_id = u.userid 
                  WHERE r.movie_id = :movie_id 
                  ORDER BY r.created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":movie_id", $movie_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function hasUserReviewed($user_id, $movie_id) {
        $query = "SELECT COUNT(*) as count FROM {$this->reviews_table} 
                  WHERE user_id = :user_id AND movie_id = :movie_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":user_id", $user_id);
        $stmt->bindParam(":movie_id", $movie_id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['count'] > 0;
    }

    // Watchlist methods
    public function addToWatchlist($user_id, $movie_id, $movie_title, $movie_type) {
        // Check if already in watchlist
        if ($this->isInWatchlist($user_id, $movie_id)) {
            return ['success' => false, 'message' => 'Already in your watchlist.'];
        }

        $query = "INSERT INTO {$this->watchlist_table} (user_id, movie_id, movie_title, movie_type) 
                  VALUES (:user_id, :movie_id, :movie_title, :movie_type)";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":user_id", $user_id);
        $stmt->bindParam(":movie_id", $movie_id);
        $stmt->bindParam(":movie_title", $movie_title);
        $stmt->bindParam(":movie_type", $movie_type);

        if ($stmt->execute()) {
            return ['success' => true, 'message' => 'Added to watchlist!'];
        }
        return ['success' => false, 'message' => 'Failed to add to watchlist.'];
    }

    public function removeFromWatchlist($user_id, $movie_id) {
        $query = "DELETE FROM {$this->watchlist_table} 
                  WHERE user_id = :user_id AND movie_id = :movie_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":user_id", $user_id);
        $stmt->bindParam(":movie_id", $movie_id);
        
        if ($stmt->execute()) {
            return ['success' => true, 'message' => 'Removed from watchlist.'];
        }
        return ['success' => false, 'message' => 'Failed to remove from watchlist.'];
    }

    public function isInWatchlist($user_id, $movie_id) {
        $query = "SELECT COUNT(*) as count FROM {$this->watchlist_table} 
                  WHERE user_id = :user_id AND movie_id = :movie_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":user_id", $user_id);
        $stmt->bindParam(":movie_id", $movie_id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['count'] > 0;
    }

    public function getUserWatchlist($user_id) {
        $query = "SELECT * FROM {$this->watchlist_table} 
                  WHERE user_id = :user_id 
                  ORDER BY added_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":user_id", $user_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Watched methods
    public function markAsWatched($user_id, $movie_id, $movie_title, $movie_type) {
        // Check if already marked as watched
        if ($this->isWatched($user_id, $movie_id)) {
            return ['success' => false, 'message' => 'Already marked as watched.'];
        }

        $query = "INSERT INTO {$this->watched_table} (user_id, movie_id, movie_title, movie_type) 
                  VALUES (:user_id, :movie_id, :movie_title, :movie_type)";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":user_id", $user_id);
        $stmt->bindParam(":movie_id", $movie_id);
        $stmt->bindParam(":movie_title", $movie_title);
        $stmt->bindParam(":movie_type", $movie_type);

        if ($stmt->execute()) {
            // Remove from watchlist if present
            $this->removeFromWatchlist($user_id, $movie_id);
            return ['success' => true, 'message' => 'Marked as watched!'];
        }
        return ['success' => false, 'message' => 'Failed to mark as watched.'];
    }

    public function removeFromWatched($user_id, $movie_id) {
        $query = "DELETE FROM {$this->watched_table} 
                  WHERE user_id = :user_id AND movie_id = :movie_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":user_id", $user_id);
        $stmt->bindParam(":movie_id", $movie_id);
        
        if ($stmt->execute()) {
            return ['success' => true, 'message' => 'Removed from watched.'];
        }
        return ['success' => false, 'message' => 'Failed to remove from watched.'];
    }

    public function isWatched($user_id, $movie_id) {
        $query = "SELECT COUNT(*) as count FROM {$this->watched_table} 
                  WHERE user_id = :user_id AND movie_id = :movie_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":user_id", $user_id);
        $stmt->bindParam(":movie_id", $movie_id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['count'] > 0;
    }

    public function getUserWatchedList($user_id) {
        $query = "SELECT * FROM {$this->watched_table} 
                  WHERE user_id = :user_id 
                  ORDER BY watched_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":user_id", $user_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
