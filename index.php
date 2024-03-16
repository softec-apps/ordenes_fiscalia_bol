<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_GET['error'])) {
	if ($_GET['error'] == 'c81e728d9d4c2f636f067f89cc14862c') {
		$error = 'El funcionario se encuentra inactivo';
	} else if ($_GET['error'] == 'c4ca4238a0b923820dcc509a6f75849b') {
		$error = 'Usuario o contraseña incorrectos';
	}
}

if (isset($_POST['cedula']) && isset($_POST['clave'])) {
	require_once 'conexion.php';
	$cedula = $_POST['cedula'];
	$clave = $_POST['clave'];
	$sql = "SELECT * FROM usuario WHERE cedula = :cedula AND clave = :clave";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':cedula', $cedula);
	$stmt->bindParam(':clave', $clave);
	$stmt->execute();
	$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
	if ($resultado) {
		if ($resultado['estado'] == 1) {
			session_start();
			$_SESSION['cedula'] = $resultado['cedula'];
			$_SESSION['nivel'] = $resultado['nivel'];
			$_SESSION['nombres'] = $resultado['nombres'];
			$_SESSION['apellidos'] = $resultado['apellidos'];
			$_SESSION['correo'] = $resultado['correo'];
			header('Location: app.php');
		} else {
			header('Location: index.php?error=c81e728d9d4c2f636f067f89cc14862c');
		}
	} else {
		header('Location: index.php?error=c4ca4238a0b923820dcc509a6f75849b');
	}
}
 
?>



<!doctype html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<title>Ordenes de Copias - Softec</title>
</head>

<body class="bg-login">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<img src="assets/images/logo.png" alt="logo">
									</div>
									<div class="form-body">
										<form class="row g-3" action="index.php" method ="POST">
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Cédula</label>
												<input name="cedula" type="text" class="form-control" id="inputEmailAddress" placeholder="Cédula">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Contraseña</label>
												<div class="input-group" id="show_hide_password">
													<input name="clave" type="password" class="form-control border-end-0" id="inputChoosePassword" value="" placeholder="Contraseña"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
											</div>
											<div class="col-md-6">

											</div>

										
											<div class="col-md-6 text-end">	
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary">INGRESAR AL SISTEMA</button>
												</div>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<a href="registro_funcionario.php" class="btn btn-danger">REGISTRO DE FUNCIONARIOS</a>
												</div>
											</div>

											<div class = "col-12">
												<?php if (isset($error)) : ?>
													<div class="alert alert-danger" role="alert">
														<?php echo $error; ?>
													</div>
												<?php endif; ?>

										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>