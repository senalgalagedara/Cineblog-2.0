<?php
class User {
    private $conn;
    private $table = "user_sign";

    public $userid;
    public $username;
    public $useremail;
    public $password;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function register() {
        $query = "INSERT INTO {$this->table} (username, useremail, password) VALUES (:username, :useremail, :password)";
        $stmt = $this->conn->prepare($query);
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);

        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":useremail", $this->useremail);
        $stmt->bindParam(":password", $this->password);

        return $stmt->execute();
    }

    public function login() {
        $query = "SELECT * FROM {$this->table} WHERE useremail = :useremail LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":useremail", $this->useremail);
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
