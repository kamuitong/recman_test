<?php
class User {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Method to create a new user in the database
    public function create($data) {
        $sql = "INSERT INTO users (first_name, last_name, email, mobile, password) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        
        try {
            $stmt->execute([$data['first_name'], $data['last_name'], $data['email'], $data['mobile'], password_hash($data['password'], PASSWORD_BCRYPT)]);
        } catch (PDOException $e) {
            return $e->getCode();
        }
    }

    // Method to get a user by email
    public function getByEmail($email) {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>