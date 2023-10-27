<?php
$host = 'localhost';
$dbname = 'login';
$username = 'root';
$password = '';
$port = 3306;

// Create a PDO database connection
try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>