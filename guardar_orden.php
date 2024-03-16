<?php   
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once 'conexion.php';

//recibo los datos del formulario
$expediente = $_POST['expediente'];
$hojas = $_POST['hojas'];
$copias = $_POST['copias'];
$fecha = date("d-m-Y");
$solicita_ci = $_SESSION['cedula'];
$solicita_nombres = $_SESSION['nombres'].' '.$_SESSION['apellidos'];
$estado = 0;

//inserto los datos en la tabla ordenes
$sql_agregar = 'INSERT INTO ordenes (expediente, hojas, copias, fecha_solicitud, solicita_ci, solicita_nombres, estado) VALUES (?,?,?,?,?,?,?)';
$sentencia_agregar = $pdo->prepare($sql_agregar);
$sentencia_agregar->execute(array($expediente, $hojas, $copias, $fecha, $solicita_ci, $solicita_nombres, $estado));

//cierro la conexion
$pdo = null;
$sentencia_agregar = null;

//redirecciono a la pagina de inicio
header('location:app.php?vista=misordenes');
