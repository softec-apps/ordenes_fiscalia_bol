<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'conexion.php';
$sql_leer = 'SELECT * FROM ordenes WHERE estado = 1';
$gsent = $pdo->prepare($sql_leer);
$gsent->execute();
$resultado = $gsent->fetchAll();
?>
<div class="page-wrapper">
			<div class="page-content">
			<div class="card">
	<div class="card-body">
		<h4 class="card-title">Entregar Ordenes</h4>
		<br>
		<div class="table-responsive">
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>Orden #</th>
						<th>Fecha_Solicitud</th>
						<th>CI Funcionario</th>	
						<th>Solicita</th>
						<th>Autoriza</th>
						<th>Expediente</th>
						<th>Hojas</th>
						<th>Copias</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($resultado as $dato): ?>
					<tr>
						<td><?php echo $dato['id'] ?></td>
						<td><?php echo $dato['fecha_solicitud'] ?></td>
						<td><?php echo $dato['solicita_ci'] ?></td>
						<td><?php echo $dato['solicita_nombres'] ?></td>
						<td><?php echo $dato['autoriza'] ?></td>
						<td><?php echo $dato['expediente'] ?></td>
						<td><?php echo $dato['hojas'] ?></td>
						<td><?php echo $dato['copias'] ?></td>
						<td>
						<a href="funciones_ordenes.php?op=4&id=<?php echo $dato['id'] ?>"  class="btn btn-primary"><i class="bx bx-arrow-to-right me-0"></i></a>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
				<tfoot>
					<tr>
						<th>Orden #</th>
						<th>Fecha_Solicitud</th>
						<th>CI Funcionario</th>	
						<th>Solicita</th>
						<th>Autoriza</th>
						<th>Expediente</th>
						<th>Hojas</th>
						<th>Copias</th>
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

