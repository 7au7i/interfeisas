<?php
// atsijungimas.php - Vartotojo atsijungimas
session_start();
session_destroy();
header('Location: pagrindinis.php');  // Po atsijungimo nukreipiame į pagrindinį puslapį
exit;
?>
