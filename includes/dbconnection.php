<?php
// --- Config ---
define('DB_HOST', '127.0.0.1');   // mejor que 'localhost'
define('DB_PORT', 3308);          // tu MySQL de XAMPP
define('DB_NAME', 'damsmsdb');
define('DB_USER', 'root');
define('DB_PASS', '');            // sin contraseña en XAMPP

// --- Conexión PDO ---
try {
  $dsn = "mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME.";charset=utf8mb4";
  $dbh = new PDO($dsn, DB_USER, DB_PASS, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'"
  ]);
} catch (PDOException $e) {
  exit("Error: " . $e->getMessage());
}
