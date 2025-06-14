<?php
require_once __DIR__ . '/../model/User.php';

class UserService {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function register($data) {
        $user = new User($this->db);
        $user->username = $data['username'];
        $user->useremail = $data['useremail'];
        $user->password = $data['password'];

        return $user->register();
    }

    public function login($data) {
        $user = new User($this->db);
        $user->useremail = $data['useremail'];
        $user->password = $data['password'];

        return $user->login();
    }

    public function getUser($id) {
        $user = new User($this->db);
        return $user->getUserById($id);
    }

    public function deleteUser($id) {
        $user = new User($this->db);
        return $user->deleteUser($id);
    }
}
