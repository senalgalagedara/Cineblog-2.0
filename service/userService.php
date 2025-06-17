<?php
require_once __DIR__ . '/../model/usermodel.php';

class userService {
    private $db;

    public function __construct($db) {
        $this->db = $db;
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
        $user->useremail = $data['useremail'];
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
}
