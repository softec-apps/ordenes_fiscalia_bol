<footer class="page-footer">
			<p class="mb-0">SOFTEC</p>
		</footer>
	</div>
	<!--end wrapper-->
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable(
				{
					"language": {
						"lengthMenu": "Mostrar _MENU_ registros por página",
						"zeroRecords": "No se encontraron registros",
						"info": "Mostrando página _PAGE_ de _PAGES_",
						"infoEmpty": "No hay registros disponibles",
						"infoFiltered": "(filtrado de _MAX_ registros totales)",
						"search": "Buscar:",
						"paginate": {
							"next": "Siguiente",
							"previous": "Anterior"
						}
					}
				}
			);
		  } );
	</script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>