<?php
class usermodel {
    private $conn;
    private $table = "user_sign";

    public $userid;
    public $username;
    public $useremail;
    public $password;
    public $cpassword;


    public function __construct($db) {
        $this->conn = $db;
    }

    public function register() {
        // Defensive: if DB connection failed, avoid calling prepare() and return false
        if (!$this->conn) {
            return false;
        }
        // Check if email already exists
        $checkQuery = "SELECT userid FROM {$this->table} WHERE useremail = :useremail LIMIT 1";
        $checkStmt = $this->conn->prepare($checkQuery);
        $checkStmt->bindParam(":useremail", $this->useremail);
        $checkStmt->execute();
        
        if ($checkStmt->rowCount() > 0) {
            return 'email_exists';
        }
        
        $query = "INSERT INTO {$this->table} (username, useremail, password, cpassword) VALUES (:username, :useremail, :password, :cpassword)";
        $stmt = $this->conn->prepare($query);
        
        // Hash the password
        $hashedPassword = password_hash($this->password, PASSWORD_BCRYPT);

        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":useremail", $this->useremail);
        $stmt->bindParam(":password", $hashedPassword);
        $stmt->bindParam(":cpassword", $this->cpassword);

        return $stmt->execute();
    }

    public function login() {
        // Defensive: if DB connection failed, avoid calling prepare() and return false
        if (!$this->conn) {
            return false;
        }
        // Support both email and username login
        $query = "SELECT * FROM {$this->table} WHERE useremail = :identifier OR username = :identifier LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":identifier", $this->useremail);
        $stmt->execute();

        if($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if(password_verify($this->password, $row['password'])) {
                return $row;
            }
        }
        return false;
    }

    public function getUserById($id) {
        $query = "SELECT userid, username, useremail, avatar, avatar_mime, avatar_size, bio, favorite_actor, favorite_actress, favorite_director, top5_movies FROM {$this->table} WHERE userid = :userid";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":userid", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getUserByUsername($username) {
        $query = "SELECT userid, username, useremail, avatar, avatar_mime, avatar_size, bio, favorite_actor, favorite_actress, favorite_director, top5_movies FROM {$this->table} WHERE username = :username";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateAvatar($userid, $blob, $mime, $size) {
        // Ensure avatar columns exist — if not, attempt to add them (helps when migration wasn't run)
        try {
            $colCheckStmt = $this->conn->query("SHOW COLUMNS FROM {$this->table} LIKE 'avatar'");
            $colExists = ($colCheckStmt && $colCheckStmt->rowCount() > 0);
        } catch (PDOException $e) {
            $colExists = false;
        }

        if (!$colExists) {
            try {
                $alter = "ALTER TABLE {$this->table} 
                          ADD COLUMN avatar MEDIUMBLOB NULL AFTER cpassword,
                          ADD COLUMN avatar_mime VARCHAR(50) NULL AFTER avatar,
                          ADD COLUMN avatar_size INT NULL AFTER avatar_mime";
                $this->conn->exec($alter);
            } catch (PDOException $e) {
                // If alter fails, return false so caller can handle it
                return false;
            }
        }

        $query = "UPDATE {$this->table} SET avatar = :avatar, avatar_mime = :avatar_mime, avatar_size = :avatar_size WHERE userid = :userid";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":avatar", $blob, PDO::PARAM_LOB);
        $stmt->bindParam(":avatar_mime", $mime);
        $stmt->bindParam(":avatar_size", $size);
        $stmt->bindParam(":userid", $userid);
        try {
            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function deleteUser($id) {
        $query = "DELETE FROM {$this->table} WHERE userid = :userid";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":userid", $id);
        return $stmt->execute();
    }

    public function updateBio($userid, $bio) {
        $query = "UPDATE {$this->table} SET bio = :bio WHERE userid = :userid";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":bio", $bio);
        $stmt->bindParam(":userid", $userid);
        return $stmt->execute();
    }

    public function updateFavorites($userid, $actor, $actress, $director) {
        $query = "UPDATE {$this->table} SET favorite_actor = :actor, favorite_actress = :actress, favorite_director = :director WHERE userid = :userid";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":actor", $actor);
        $stmt->bindParam(":actress", $actress);
        $stmt->bindParam(":director", $director);
        $stmt->bindParam(":userid", $userid);
        return $stmt->execute();
    }

    public function updateTop5Movies($userid, $moviesJson) {
        $query = "UPDATE {$this->table} SET top5_movies = :movies WHERE userid = :userid";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":movies", $moviesJson);
        $stmt->bindParam(":userid", $userid);
        return $stmt->execute();
    }
}
