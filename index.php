<?php
require_once 'models/db.php';
require_once 'controllers/AuthController.php';

$authController = new AuthController();

// Check if the form is submitted and determine the action (register or login)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] === 'register') {
        // Call the registration method in the controller
        $authController->register($_POST);
    } elseif ($_POST['action'] === 'login') {
        // Call the login method in the controller
        $authController->login($_POST);
    }
}

// redirect to the login form view by default
header('location:views/login_form.php');
?>