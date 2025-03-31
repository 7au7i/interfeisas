<?php
session_start();
?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagrindinis Puslapis</title>
</head>
<body>
    <?php if (isset($_SESSION['user_id'])): ?>
        <h1>Sveiki, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h1>
        <p>Jūs esate prisijungęs kaip: <?php echo $_SESSION['user_role']; ?>.</p>
        <a href="atsijungimas.php">Atsijungti</a>
    <?php else: ?>
        <h1>Prašome prisijungti arba užsiregistruoti</h1>
        <a href="prisijungimas.html">Prisijungti</a> | <a href="registracija.html">Užsiregistruoti</a>
    <?php endif; ?>
</body>
</html>
