<?php
// sukurti_vartotoju_lentele.php - Sukuria users lentele
require 'duombaze.php';
$db = new Duombaze();
$conn = $db->getConnection();

$query = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

$conn->exec($query);
echo "Users lentele sukurta sekmingai.";
?>
