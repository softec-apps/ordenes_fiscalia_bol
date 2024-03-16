<?php
session_start();
//activo la depuracion de errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//imprimo todas las variables de sesion
print_r($_SESSION);

if (isset($_POST['nombres'])) {
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$correo = $_POST['correo'];
	$clave = $_POST['clave'];
	$cedula = $_SESSION['cedula'];
	
//uso conexion.php y actualizo lo datos con PDO
	include 'conexion.php';
	$consulta = $pdo->prepare("UPDATE usuario SET nombres = :nombres, apellidos = :apellidos, correo = :correo, clave = :clave WHERE cedula = :cedula");
	$consulta->bindParam(':nombres', $nombres);
	$consulta->bindParam(':apellidos', $apellidos);
	$consulta->bindParam(':correo', $correo);
	$consulta->bindParam(':clave', $clave);
	$consulta->bindParam(':cedula', $cedula);
	$consulta->execute();
	
	$_SESSION['nombres'] = $nombres;
	$_SESSION['apellidos'] = $apellidos;
	$_SESSION['correo'] = $correo;
	$_SESSION['clave'] = $clave;
	$_SESSION['cedula'] = $cedula;
		
	header('Location: app.php?vista=perfil&mensaje=correcto');
}
	
?>