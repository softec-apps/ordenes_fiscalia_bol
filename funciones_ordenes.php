<?php
session_start();
include_once 'conexion.php';
if(isset($_GET['op']) && isset($_GET['op'])){
    $op = $_GET['op'];
    $id = $_GET['id'];
    $autoriza = $_SESSION['nombres'].' '.$_SESSION['apellidos'];
    switch ($op) {
        case '1':
            autorizar_ordenes($id, $autoriza);
            break;
        case '2':
            anular_ordenes($id, $autoriza);
            break;
        case '3':
            eliminar_ordenes($id);
            break;
        case '4':
            entregar_ordenes($id,$autoriza);
            break;
        default:
            header('Location: ../app.php?vista=ordenes_activas');
            break;
    }
}

function autorizar_ordenes($id, $autoriza){
    global $pdo;
    $sql = 'UPDATE ordenes SET estado = 1, autoriza = ? WHERE id = ?';
    $sentencia = $pdo->prepare($sql);
    $sentencia->execute(array($autoriza, $id));
    header('Location: ../app.php?vista=ordenes_activas');
}

function anular_ordenes($id, $autoriza){
    global $pdo;
    $sql = 'UPDATE ordenes SET estado = 3, autoriza = ? WHERE id = ?';
    $sentencia = $pdo->prepare($sql);
    $sentencia->execute(array($autoriza, $id));
    header('Location: ../app.php?vista=ordenes_activas');
}

function eliminar_ordenes($id){
    global $pdo;
    $sql = 'DELETE FROM ordenes WHERE id = ?';
    $sentencia = $pdo->prepare($sql);
    $sentencia->execute(array($id));
    header('Location: ../app.php?vista=ordenes_activas');
}

function entregar_ordenes($id, $autoriza){
    global $pdo;
    $fecha_entrega = date('d-m-Y');
    $sql = 'UPDATE ordenes SET estado = 2, fecha_entrega = ?, entrega = ? WHERE id = ?';
    $sentencia = $pdo->prepare($sql);
    $sentencia->execute(array($fecha_entrega, $autoriza, $id));
    header('Location: ../app.php?vista=ordenes_entregadas');
}