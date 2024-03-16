<?php
if (isset($_POST['cedula'])) {
	$cedula = $_POST['cedula'];
	$clave = $_POST['clave'];
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$correo = $_POST['correo'];
	$nivel = 1;
	$estado = 0;

	
	require_once 'conexion.php';


	$sql = "SELECT * FROM usuario WHERE cedula = :cedula";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':cedula', $cedula);
	$stmt->execute();
	$resultado = $stmt->fetch(PDO::FETCH_ASSOC);

	if ($resultado) {
		header('Location: registro_funcionario.php?mensaje=registrado');
	} else {
		$sql = "INSERT INTO usuario (cedula, clave, nombres, apellidos, correo, nivel, estado) VALUES (:cedula, :clave, :nombres, :apellidos, :correo, :nivel, :estado)";
		$stmt = $pdo->prepare($sql);
		$stmt->bindParam(':cedula', $cedula);
		$stmt->bindParam(':clave', $clave);
		$stmt->bindParam(':nombres', $nombres);
		$stmt->bindParam(':apellidos', $apellidos);
		$stmt->bindParam(':correo', $correo);
		$stmt->bindParam(':nivel', $nivel);
		$stmt->bindParam(':estado', $estado);
		$stmt->execute();
		header('Location: registro_funcionario.php?mensaje=correcto');
	}
}


if (isset($_GET['mensaje']) && $_GET['mensaje'] == 'registrado') {
	$mensaje = 'Usuario ya se encuentra registrado intente con otros datos';
} else if (isset($_GET['mensaje']) && $_GET['mensaje'] == 'correcto') {
	$mensaje = 'Usuario registrado correctamente, espere a que el administrador lo active.';
} else {
	$mensaje = 'Error no definido';
}


?>

<!doctype html>
<html lang="es">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<title>Ordenes Copias - Softec</title>
</head>

<body class="bg-login">
	<!--wrapper-->
	<div class="wrapper">
		<br>
		<div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
					<div class="col mx-auto">
						
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<h3 class="">REGISTRO DE FUCIONARIO</h3>
										</div>
									<div class="login-separater text-center mb-4"> <span>DATOS DE FUNCIONARIO</span>
										<hr/>
									</div>
									<div class="form-body">
										<form class="row g-3" action="registro_funcionario.php" method="POST">
											<div class="col-sm-12">
												<label for="inputFirstName" class="form-label">Cédula</label>
												<input name="cedula" type="text" class="form-control" id="inputFirstName" placeholder="0212345678" minlength="10" maxlength="10" required>
											</div>
											<div class="col-sm-6">
												<label for="inputFirstName" class="form-label">Nombres</label>
												<input name="nombres" type="text" class="form-control" id="inputFirstName" placeholder="Nombre1 Nombre2" required>
											</div>
											<div class="col-sm-6">
												<label for="inputLastName" class="form-label">Apellidos</label>
												<input name="apellidos" type="text" class="form-control" id="inputLastName" placeholder="Apellido1 Apellido2" required>
											</div>
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Correo Electrónico</label>
												<input name="correo" type="email" class="form-control" id="inputEmailAddress" placeholder="example@user.com" required>
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Contraseña</label>
												<div class="input-group" id="show_hide_password">
													<input name="clave" type="password" class="form-control border-end-0" id="inputChoosePassword" required> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
											</div>
											
											<?php //Si existe la variable get imprimo el mensaje con html
												if (isset($_GET['mensaje'])) {
													echo "<div class='alert alert-warning' role='warning'>";
													echo $mensaje;
													echo "</div>";
												}
											 ?>

											

											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary"><i class='bx bx-user'></i>REGISTRARME</button>
												</div>
											</div>
											<a href="index.php" class="btn btn-link text-dark"><i class='bx bx-chevron-left'></i>Regresar al Inicio</a>
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