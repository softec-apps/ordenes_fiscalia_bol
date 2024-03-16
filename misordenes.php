<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'conexion.php';

//consulto todas las ordenes de la tabla ordenes donde el campo solicita_ci sea igual a la cedula de la sesion
$cedula = $_SESSION['cedula'];
$sql_leer = 'SELECT * FROM ordenes WHERE solicita_ci=?';
$sentencia_leer = $pdo->prepare($sql_leer);
$sentencia_leer->execute(array($cedula));
$resultado = $sentencia_leer->fetchAll();


?>
<div class="page-wrapper">
			<div class="page-content">
			<div class="card">
	<div class="card-body">
		<h4 class="card-title">Mis ordenes solicitadas</h4>
		<br>
		<div class="table-responsive">
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>Orden #</th>
						<th>Fecha_Solicitud</th>
						<th>Fecha_Entrega</th>
						<th>Expediente</th>
						<th>Hojas</th>
						<th>Copias</th>
						<th>Estado</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($resultado as $dato): ?>
					<tr>
						<td><?php echo $dato['id'] ?></td>
						<td><?php echo $dato['fecha_solicitud'] ?></td>
						<td><?php echo $dato['fecha_entrega'] ?></td>
						<td><?php echo $dato['expediente'] ?></td>
						<td><?php echo $dato['hojas'] ?></td>
						<td><?php echo $dato['copias'] ?></td>
						<td><?php 
								if($dato['estado'] == 0){
									echo 'Solicitado';
								}elseif($dato['estado'] == 1){
									echo 'Autorizado';
								}elseif($dato['estado'] == 2){
									echo 'Entregado';
								}elseif($dato['estado'] == 3){
									echo 'Anulado';
								}
						?></td>
					</tr>
					<?php endforeach ?>
				</tbody>
				<tfoot>
					<tr>
					<th>Orden #</th>
						<th>Fecha_Solicitud</th>
						<th>Fecha_Entrega</th>
						<th>Expediente</th>
						<th>Hojas</th>
						<th>Copias</th>
						<th>Estado</th>
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

