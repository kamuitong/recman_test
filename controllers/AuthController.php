<?php
require_once 'models/User.php';

class AuthController {
    private $userModel;

    public function __construct() {
        global $db;
        $this->userModel = new User($db);
    }

    // Method to handle user registration
    public function register($data) {
        // Call the create method in the User model
        $result = $this->userModel->create($data);
        // Success/failure handling here
        if ($result) {
            header("location:../views/registration_form.php?register=fail");
            exit;
        } else {
            header("location:../views/login_form.php?register=success");
            exit;
        }
    }

    // Method to handle user login
    public function login($data) {
        $email = $data['email'];
        $password = $data['password'];

        // Call the getByEmail method in the User model
        $user = $this->userModel->getByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            // User is authenticated
            header("location:../views/login_form.php?login=success");
            exit;
        } else {
            // Authentication failed
            header("location:../views/login_form.php?login=fail");
            exit;
        }
    }
}
?>