<?php
//habilito la depuracion de errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = 'localhost';
$dbname = 'fisc_copias';
$user = 'fisc_admin';
$pass = '15036221';

//conexion php mysql usnado pdo
$dsn = "mysql:host=$host;dbname=$dbname";
try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    //echo   'Conectado a la base de datos';
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

//SELECT
