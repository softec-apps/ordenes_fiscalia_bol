<?php
session_start();
include_once 'conexion.php';

if(isset($_GET['op']) && isset($_GET['op'])){
    $op = $_GET['op'];
    $id = $_GET['id'];

    switch ($op) {
        case '1':
            activa_funcionario($id);
            break;
        case '2':
            desactiva_funcionario($id);
            break;
        case '3':
            editar_funcionario($id);
            break;
        case '4':
            eliminar_funcionario($id);
            break;
        case '5':
            cambiar_nivel($id);
            break;
        default:
            header('Location: ../app.php?vista=lista_funcionarios');
            break;
   
    }
}

function activa_funcionario($id){
    global $pdo;
    $sql = "UPDATE usuario SET estado = 1 WHERE id = ?";
    $gsent = $pdo->prepare($sql);
    $gsent->execute(array($id));
    header('Location: ../app.php?vista=lista_funcionarios');
}

function desactiva_funcionario($id){
    global $pdo;
    $sql = "UPDATE usuario SET estado = 0 WHERE id = ?";
    $gsent = $pdo->prepare($sql);
    $gsent->execute(array($id));
    header('Location: ../app.php?vista=lista_funcionarios');
}

function editar_funcionario($id){
    header('Location: ../app.php?vista=lista_funcionarios');
}

function eliminar_funcionario($id){
    global $pdo;
    $sql = "DELETE FROM usuario WHERE id = ?";
    $gsent = $pdo->prepare($sql);
    $gsent->execute(array($id));
    header('Location: ../app.php?vista=lista_funcionarios');
}

function cambiar_nivel($id){
    global $pdo;
    $sql = "SELECT nivel FROM usuario WHERE id = ?";
    $gsent = $pdo->prepare($sql);
    $gsent->execute(array($id));
    $resultado = $gsent->fetch();
    if($resultado['nivel'] == 0){
        $sql = "UPDATE usuario SET nivel = 1 WHERE id = ?";
        $gsent = $pdo->prepare($sql);
        $gsent->execute(array($id));
        header('Location: ../app.php?vista=lista_funcionarios');
    }else{
        $sql = "UPDATE usuario SET nivel = 0 WHERE id = ?";
        $gsent = $pdo->prepare($sql);
        $gsent->execute(array($id));
        header('Location: ../app.php?vista=lista_funcionarios');
    }
}