<?php
// prisijungimas.php - Vartotojo prisijungimas
session_start();
require 'duombaze.php';
$db = new Duombaze();
$conn = $db->getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['user_role'] = $user['role'];
        header('Location: pagrindinis.php');  // Po prisijungimo nukreipiame į pagrindinį puslapį
        exit;
    } else {
        echo "Neteisingas el. paštas arba slaptažodis.";
    }
}
?>
