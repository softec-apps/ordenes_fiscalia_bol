<?php
session_start();
$orden = $_GET['id'];
include_once 'conexion.php';


$sql_orden = 'SELECT * FROM ordenes WHERE id=?';
$sentencia_orden = $pdo->prepare($sql_orden);
$sentencia_orden->execute(array($orden));
$resultado_orden = $sentencia_orden->fetch();

//imprimo el id de la orden
echo "<center><h3>FISCALIA PROVINCIAL DE BOLÍVAR</h3></center>";

echo "<center><h4>UNIDAD FINANCIERA - ORDEN DE SERVICIO ".$resultado_orden['id']."</h4></center>";
echo "<hr>";

?>

<style type="text/css">
.tftable {font-size:12px;color: #000; width:100%;border-width: 1px;border-color: #bcaf91;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#ded0b0;border-width: 1px;padding: 8px;border-style: solid;border-color: #bcaf91;text-align:left;}
.tftable tr {background-color:#e9dbbb;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #bcaf91;}
.tftable tr:hover {background-color:#ffffff;}
</style>

<table class="tftable" border="1">
<tr><th>NÚMERO DE ORDEN:</th><th><?php echo $resultado_orden['id'];?></th></tr>
<tr><th>FECHA DE SOLICITUD:</th><th><?php echo $resultado_orden['fecha_solicitud'];?> </th></tr>
<tr><th>FECHA DE ENTREGA:</th><th><?php echo $resultado_orden['fecha_entrega'];?> </th></tr>
<tr><th>CÉDULA FUNCIONARIO:</th><th><?php echo $resultado_orden['solicita_ci'];?> </th></tr>
<tr><th>NOMBRES DEL FUNCIONARIO:</th><th><?php echo $resultado_orden['solicita_nombres'];?> </th></tr>
<tr><th>AUTORIZADO POR:</th><th><?php echo $resultado_orden['autoriza'];?> </th></tr>
<tr><th>ENTREGADO POR:</th><th><?php echo $resultado_orden['entrega'];?> </th></tr>
</table>

<hr>

<table class="tftable" border="1">
<tr><th>EXPEDIENTE</th><th><?php echo $resultado_orden['expediente'];?></th><th>HOJAS SOLICITADAS</th><th><?php echo $resultado_orden['hojas'];?></th><th>COPIAS SOLICITADAS</th><th><?php echo $resultado_orden['copias'];?></th></tr>
</table>

<hr>


<table class="tftable" border="1">
<tr><th>COPIAS ENTREGADAS</th><th><input type="text" style="width:100%; height:100%;"></th><th>ANILLADOS ENTREGADOS</th><th><input type="text" style="width:100%; height:100%;"></th></tr>
</table>

<table class="tftable" border="1">
<tr><th>OBSERVACIÓNES O NOVEDADES:</th></tr>
<tr><th><input style="width:100%; height:100%;"></th></tr>
</table>


<hr>
<p>RECIBÍ CONFORME</p>
<table class="tftable" border="1">
<tr><th>NOMBRE:</th><th>FIRMA:</th></tr>
</table>