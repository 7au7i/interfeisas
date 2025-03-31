<?php
// registracija.php - Vartotojo registracija
require 'duombaze.php';
$db = new Duombaze();
$conn = $db->getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'] ?? 'user';
    
    $stmt = $conn->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
    if ($stmt->execute([$name, $email, $password, $role])) {
        header('Location: pagrindinis.php');  // Po registracijos nukreipiame į pagrindinį puslapį
        exit;
    } else {
        echo "Registracija nepavyko.";
    }
}
?>
