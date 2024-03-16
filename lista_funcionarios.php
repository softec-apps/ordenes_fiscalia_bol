<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'conexion.php';

//consulto todos los usuarios de la tabla usuario menos el de id 1
$sql_leer = 'SELECT * FROM usuario WHERE nivel != 2';
$gsent = $pdo->prepare($sql_leer);
$gsent->execute();
$resultado = $gsent->fetchAll();




?>
<div class="page-wrapper">
			<div class="page-content">
			<div class="card">
	<div class="card-body">
		<h4 class="card-title">LISTADO DE FUNCIONARIOS</h4>
		<br>
		<div class="table-responsive">
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
					
						<th>Cédula</th>
						<th>Nombres</th>
						<th>Apellidos</th>
						<th>Correo</th>
						<th>Nivel</th>
						<th>Estado</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($resultado as $dato): ?>
					<tr>
						<td><?php echo $dato['cedula'] ?></td>
						<td><?php echo $dato['nombres'] ?></td>
						<td><?php echo $dato['apellidos'] ?></td>
						<td><?php echo $dato['correo'] ?></td>
						<td>
							<?php if ($dato['nivel'] == 0) {echo "ADM";}else{echo "USR";}?>
						</td>
						<td>
							<?php if ($dato['estado'] == 0) {echo "INACTIVO";}else{echo "ACTIVO";}?>
						</td>
						<td>
							<a href="funciones_funcionario.php?op=1&id=<?php echo $dato['id'] ?>" class="btn btn-primary"><i class="bx bx-user-check me-0"></i></a>
							<a href="funciones_funcionario.php?op=2&id=<?php echo $dato['id'] ?>" class="btn btn-warning"><i class="bx bx-user-x me-0"></i></a>
							<a href="funciones_funcionario.php?op=3&id=<?php echo $dato['id'] ?>" class="btn btn-success"><i class="bx bx-edit-alt me-0"></i></a>
							<a href="funciones_funcionario.php?op=4&id=<?php echo $dato['id'] ?>" class="btn btn-danger"><i class="bx bx-message-alt-x me-0"></i></a>
							<a href="funciones_funcionario.php?op=5&id=<?php echo $dato['id'] ?>" class="btn btn-warning"><i class="bx bx-street-view me-0"></i></a>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
				<tfoot>
					<tr>
					
						<th>Cédula</th>
						<th>Nombres</th>
						<th>Apellidos</th>
						<th>Correo</th>
						<th>Nivel</th>
						<th>Estado</th>
						<th>Opciones</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->

