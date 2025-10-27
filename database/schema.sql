-- Database schema for review, watchlist, and watched features

-- Reviews table
CREATE TABLE IF NOT EXISTS reviews (
    review_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    movie_id VARCHAR(100) NOT NULL,
    movie_title VARCHAR(255) NOT NULL,
    review_text TEXT NOT NULL,
    rating DECIMAL(2,1),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL,
    is_edited BOOLEAN DEFAULT FALSE,
    edit_count INT DEFAULT 0,
    FOREIGN KEY (user_id) REFERENCES user_sign(userid) ON DELETE CASCADE,
    UNIQUE KEY unique_user_movie (user_id, movie_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Watchlist table
CREATE TABLE IF NOT EXISTS watchlist (
    watchlist_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    movie_id VARCHAR(100) NOT NULL,
    movie_title VARCHAR(255) NOT NULL,
    movie_type ENUM('movie', 'series', 'anime', 'short') NOT NULL,
    added_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES user_sign(userid) ON DELETE CASCADE,
    UNIQUE KEY unique_user_movie_watchlist (user_id, movie_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Watched table
CREATE TABLE IF NOT EXISTS watched (
    watched_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    movie_id VARCHAR(100) NOT NULL,
    movie_title VARCHAR(255) NOT NULL,
    movie_type ENUM('movie', 'series', 'anime', 'short') NOT NULL,
    watched_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES user_sign(userid) ON DELETE CASCADE,
    UNIQUE KEY unique_user_movie_watched (user_id, movie_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create indexes for better performance
CREATE INDEX idx_movie_id ON reviews(movie_id);
CREATE INDEX idx_user_id_reviews ON reviews(user_id);
CREATE INDEX idx_movie_id_watchlist ON watchlist(movie_id);
CREATE INDEX idx_user_id_watchlist ON watchlist(user_id);
CREATE INDEX idx_movie_id_watched ON watched(movie_id);
CREATE INDEX idx_user_id_watched ON watched(user_id);
