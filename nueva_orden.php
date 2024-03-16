<div class="page-wrapper">
			<div class="page-content">


<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="d-flex flex-column align-items-center text-center">
							<div class="mt-1">
								<h4><?php echo $_SESSION['nombres'].' '.$_SESSION['apellidos'];?></h4>
								<p class="text-secondary mb-1"><?php echo $_SESSION['cedula'];?></p>
								<?php 
								
								if (isset($mensaje)) {
									echo '<p class="text-muted font-size-sm">'.$mensaje.'</p>';
								}
								
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<form action="guardar_orden.php" method="POST">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="row mb-3">
							<div class="col-sm-3">
								<h6 class="mb-0">Expediente</h6>
							</div>
							<div class="col-sm-9 text-secondary">
								<input name="expediente" type="text" class="form-control" required />
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-sm-3">
								<h6 class="mb-0">N° Hojas</h6>
							</div>
							<div class="col-sm-9 text-secondary">
								<input name="hojas" type="number" class="form-control" required/>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-sm-3">
								<h6 class="mb-0">N° Copias</h6>
							</div>
							<div class="col-sm-9 text-secondary">
								<input name="copias" type="number" class="form-control" required/>
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-3"></div>
							<div class="col-sm-9 text-secondary">
								<input type="submit" class="btn btn-primary px-4" value="Solicitar" />
								<a href="app.php" class="btn btn-danger">Volver</a>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			</form>
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
		