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
        $query = "SELECT userid, username, useremail FROM {$this->table} WHERE userid = :userid";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":userid", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function deleteUser($id) {
        $query = "DELETE FROM {$this->table} WHERE userid = :userid";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":userid", $id);
        return $stmt->execute();
    }
}
