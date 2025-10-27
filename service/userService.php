<?php
require_once __DIR__ . '/../model/usermodel.php';

class userService {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Ensure the movie_posters table exists; create it if missing
    private function ensureMoviePostersTable() {
        try {
            // Probe the table; if it doesn't exist, this will throw 42S02
            $this->db->query("SELECT 1 FROM movie_posters LIMIT 1");
        } catch (PDOException $e) {
            if ($e->getCode() === '42S02') { // Base table not found
                $sql = "
                CREATE TABLE IF NOT EXISTS movie_posters (
                    poster_id INT AUTO_INCREMENT PRIMARY KEY,
                    user_id INT NOT NULL,
                    movie_title VARCHAR(255) NOT NULL,
                    poster_image MEDIUMBLOB NOT NULL,
                    poster_mime VARCHAR(50) NOT NULL,
                    poster_size INT NOT NULL,
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                    INDEX idx_user_id (user_id),
                    CONSTRAINT fk_movie_posters_user FOREIGN KEY (user_id) REFERENCES user_sign(userid) ON DELETE CASCADE
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
                try {
                    $this->db->exec($sql);
                } catch (PDOException $inner) {
                    // If FK creation fails due to engine or other constraints, create without FK as a fallback
                    $fallbackSql = "
                    CREATE TABLE IF NOT EXISTS movie_posters (
                        poster_id INT AUTO_INCREMENT PRIMARY KEY,
                        user_id INT NOT NULL,
                        movie_title VARCHAR(255) NOT NULL,
                        poster_image MEDIUMBLOB NOT NULL,
                        poster_mime VARCHAR(50) NOT NULL,
                        poster_size INT NOT NULL,
                        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                        INDEX idx_user_id (user_id)
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
                    $this->db->exec($fallbackSql);
                }
            } else {
                throw $e;
            }
        }
    }

    public function register($data) {
        $user = new usermodel($this->db);
        $user->username = $data['username'];
        $user->useremail = $data['useremail'];
        $user->password = $data['password'];
        $user->cpassword = $data['cpassword'];

        return $user->register();
    }

    public function login($data) {
        $user = new usermodel($this->db);
        // login_identifier can be either username or email
        $user->useremail = $data['login_identifier'];
        $user->password = $data['password'];

        return $user->login();
    }

    public function getUser($id) {
        $user = new usermodel($this->db);
        return $user->getUserById($id);
    }

    public function deleteUser($id) {
        $user = new usermodel($this->db);
        return $user->deleteUser($id);
    }

    public function uploadAvatar($userid, $file) {
        // Validate file exists
        if (!isset($file['tmp_name']) || !is_uploaded_file($file['tmp_name'])) {
            return ['success' => false, 'message' => 'No file uploaded.'];
        }

        // Check file size (200KB = 204800 bytes)
        if ($file['size'] > 204800) {
            return ['success' => false, 'message' => 'File size must be 200KB or less.'];
        }

        // Check MIME type
        $allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/webp'];
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimeType = finfo_file($finfo, $file['tmp_name']);
        finfo_close($finfo);

        if (!in_array($mimeType, $allowedTypes)) {
            return ['success' => false, 'message' => 'Invalid file type. Only JPG, PNG, GIF, and WEBP are allowed.'];
        }

        // Read file into binary
        $imageData = file_get_contents($file['tmp_name']);
        if ($imageData === false) {
            return ['success' => false, 'message' => 'Failed to read file.'];
        }

        // Update avatar in database
        $user = new usermodel($this->db);
        if ($user->updateAvatar($userid, $imageData, $mimeType, $file['size'])) {
            return ['success' => true, 'message' => 'Avatar uploaded successfully!'];
        }

        return ['success' => false, 'message' => 'Failed to save avatar.'];
    }

    public function updateBio($userid, $bio) {
        $user = new usermodel($this->db);
        if ($user->updateBio($userid, $bio)) {
            return ['success' => true, 'message' => 'Bio updated successfully!'];
        }
        return ['success' => false, 'message' => 'Failed to update bio.'];
    }

    public function updateFavorites($userid, $data) {
        $user = new usermodel($this->db);
        $actor = isset($data['favorite_actor']) ? trim($data['favorite_actor']) : '';
        $actress = isset($data['favorite_actress']) ? trim($data['favorite_actress']) : '';
        $director = isset($data['favorite_director']) ? trim($data['favorite_director']) : '';
        
        if ($user->updateFavorites($userid, $actor, $actress, $director)) {
            return ['success' => true, 'message' => 'Favorites updated successfully!'];
        }
        return ['success' => false, 'message' => 'Failed to update favorites.'];
    }

    public function updateSingleFavorite($userid, $type, $value) {
        $user = new usermodel($this->db);
        
        // Get current favorites
        require_once __DIR__ . '/../model/usermodel.php';
        $currentUser = $user->getUserById($userid);
        
        $actor = $currentUser['favorite_actor'] ?? '';
        $actress = $currentUser['favorite_actress'] ?? '';
        $director = $currentUser['favorite_director'] ?? '';
        
        // Update the specific type
        if ($type === 'actor') {
            $actor = $value;
        } elseif ($type === 'actress') {
            $actress = $value;
        } elseif ($type === 'director') {
            $director = $value;
        }
        
        if ($user->updateFavorites($userid, $actor, $actress, $director)) {
            return ['success' => true, 'message' => 'Favorite updated successfully!'];
        }
        return ['success' => false, 'message' => 'Failed to update favorite.'];
    }

    public function updateTop5Movies($userid, $movies) {
        $user = new usermodel($this->db);
        $moviesJson = json_encode($movies);
        
        if ($user->updateTop5Movies($userid, $moviesJson)) {
            return ['success' => true, 'message' => 'Top 5 movies updated successfully!'];
        }
        return ['success' => false, 'message' => 'Failed to update top 5 movies.'];
    }

    public function saveSingleMovie($userid, $index, $title, $poster) {
        $user = new usermodel($this->db);
        
        // Get current top 5 movies
        $currentUser = $user->getUserById($userid);
        $movies = !empty($currentUser['top5_movies']) ? json_decode($currentUser['top5_movies'], true) : [];
        
        $newMovie = ['title' => $title, 'poster' => $poster];
        
        if ($index === -1) {
            // Adding new movie
            if (count($movies) >= 5) {
                return ['success' => false, 'message' => 'You can only have 5 movies in your top list.'];
            }
            $movies[] = $newMovie;
        } else {
            // Editing existing movie
            if (isset($movies[$index])) {
                $movies[$index] = $newMovie;
            } else {
                return ['success' => false, 'message' => 'Movie not found.'];
            }
        }
        
        $moviesJson = json_encode($movies);
        if ($user->updateTop5Movies($userid, $moviesJson)) {
            return ['success' => true, 'message' => 'Movie saved successfully!'];
        }
        return ['success' => false, 'message' => 'Failed to save movie.'];
    }

    public function saveSingleMovieWithUpload($userid, $index, $title, $file, $existingPoster = '') {
        // Ensure backing table exists
        $this->ensureMoviePostersTable();
        $user = new usermodel($this->db);
        
        // Get current top 5 movies
        $currentUser = $user->getUserById($userid);
        $movies = !empty($currentUser['top5_movies']) ? json_decode($currentUser['top5_movies'], true) : [];
        
        $posterId = null;
        
        // Handle file upload if provided
        if (isset($file['tmp_name']) && is_uploaded_file($file['tmp_name'])) {
            // Validate file size (500KB = 512000 bytes)
            if ($file['size'] > 512000) {
                return ['success' => false, 'message' => 'Poster size must be 500KB or less.'];
            }

            // Check MIME type
            $allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/webp'];
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mimeType = finfo_file($finfo, $file['tmp_name']);
            finfo_close($finfo);

            if (!in_array($mimeType, $allowedTypes)) {
                return ['success' => false, 'message' => 'Invalid file type. Only JPG, PNG, GIF, and WEBP are allowed.'];
            }

            // Read file data
            $posterData = file_get_contents($file['tmp_name']);
            
            // Delete old poster from database if updating
            if ($index !== -1 && isset($movies[$index]['poster_id']) && !empty($movies[$index]['poster_id'])) {
                $stmt = $this->db->prepare("DELETE FROM movie_posters WHERE poster_id = ? AND user_id = ?");
                $stmt->execute([$movies[$index]['poster_id'], $userid]);
            }
            
            // Insert new poster into database
            $stmt = $this->db->prepare("
                INSERT INTO movie_posters (user_id, movie_title, poster_image, poster_mime, poster_size)
                VALUES (?, ?, ?, ?, ?)
            ");
            $stmt->execute([$userid, $title, $posterData, $mimeType, $file['size']]);
            $posterId = $this->db->lastInsertId();
            
        } elseif ($index !== -1 && isset($movies[$index]['poster_id'])) {
            // Keep existing poster_id when editing without new upload
            $posterId = $movies[$index]['poster_id'];
        }
        
        $newMovie = [
            'title' => $title,
            'poster_id' => $posterId
        ];
        
        if ($index === -1) {
            // Adding new movie
            if (count($movies) >= 5) {
                return ['success' => false, 'message' => 'You can only have 5 movies in your top list.'];
            }
            $movies[] = $newMovie;
        } else {
            // Editing existing movie
            if (isset($movies[$index])) {
                $movies[$index] = $newMovie;
            } else {
                return ['success' => false, 'message' => 'Movie not found.'];
            }
        }
        
        $moviesJson = json_encode($movies);
        if ($user->updateTop5Movies($userid, $moviesJson)) {
            return ['success' => true, 'message' => 'Movie saved successfully!'];
        }
        return ['success' => false, 'message' => 'Failed to save movie.'];
    }

    public function deleteMovie($userid, $index) {
        // Ensure backing table exists (safe if already present)
        $this->ensureMoviePostersTable();
        $user = new usermodel($this->db);
        
        // Get current top 5 movies
        $currentUser = $user->getUserById($userid);
        $movies = !empty($currentUser['top5_movies']) ? json_decode($currentUser['top5_movies'], true) : [];
        
        if (isset($movies[$index])) {
            // Delete poster from database if it exists
            if (!empty($movies[$index]['poster_id'])) {
                $stmt = $this->db->prepare("DELETE FROM movie_posters WHERE poster_id = ? AND user_id = ?");
                $stmt->execute([$movies[$index]['poster_id'], $userid]);
            }
            
            array_splice($movies, $index, 1);
            $moviesJson = json_encode($movies);
            
            if ($user->updateTop5Movies($userid, $moviesJson)) {
                return ['success' => true, 'message' => 'Movie deleted successfully!'];
            }
        }
        return ['success' => false, 'message' => 'Failed to delete movie.'];
    }
}
