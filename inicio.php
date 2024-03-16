<?php
$nivel = $_SESSION['nivel'];

if($nivel == 0 || $nivel == 1){
    echo '<div class="page-wrapper">
    <div class="page-content">
          <div class="container my-5">
<div class="row">
  <div class="col-lg-6 col-sm-12">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title">NUEVA ORDEN</h5>
        <p class="card-text">Aqui puede generar una orden de copias nueva</p>
        <a href="app.php?vista=nueva_orden" class="btn btn-primary">Generar Nueva Orden</a>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-sm-12">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title">MIS ORDENES</h5>
        <p class="card-text">Aqui puede ver sus ordenes, generadas, aprobadas y entregadas.</p>
        <a href="app.php?vista=misordenes" class="btn btn-primary">Ver mis ordenes</a>
      </div>
    </div>
  </div>
</div>
</div>
    </div>
  </div>
  <!--end page wrapper -->
  <!--start overlay-->
  <div class="overlay toggle-icon"></div>
  <!--end overlay-->
  <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>
  <!--End Back To Top Button-->';
}else if($nivel == 2){
    echo '<div class="page-wrapper">
    <div class="page-content">
          <div class="container my-5">
<div class="row">
  <div class="col-lg-12 col-sm-12">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title">ENTREGAR ORDEN</h5>
        <p class="card-text">Aqui puede generar una orden de copias nueva</p>
        <a href="app.php?vista=entregar_ordenes" class="btn btn-primary">ENTREGAR ORDEN</a>
      </div>
    </div>
  </div>
  
</div>
</div>
    </div>
  </div>
  <!--end page wrapper -->
  <!--start overlay-->
  <div class="overlay toggle-icon"></div>
  <!--end overlay-->
  <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>
  <!--End Back To Top Button-->';
}else{
    echo 'No tienes permisos';
}

?>

