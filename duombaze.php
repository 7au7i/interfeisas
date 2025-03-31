<?php
// duombaze.php - PDO jungtis

class Duombaze {
    private $pdo;
    
    public function __construct() {
        $config = require 'config.php';
        try {
            $this->pdo = new PDO(
                "mysql:host={$config['db_host']};dbname={$config['db_name']}",
                $config['db_user'],
                $config['db_pass'],
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        } catch (PDOException $e) {
            die("Duomenų bazės prisijungimas nepavyko: " . $e->getMessage());
        }
    }
    
    public function getConnection() {
        return $this->pdo;
    }
}
?>
