<?php
$dsn  = "mysql:host=127.0.0.1;port=3308;dbname=damsmsdb;charset=utf8mb4";
$user = "root";
$pass = ""; // si en phpMyAdmin root no tiene clave

try {
  $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
  echo "OK: Conexión exitosa";
} catch (PDOException $e) {
  echo "FALLO: " . $e->getMessage();
}
