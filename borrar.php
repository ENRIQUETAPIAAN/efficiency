<?php session_start();

if(isset($_SESSION['usuario'])){
    require 'admin/config.php';
    require 'functions.php';

    $conexion_reportes = conexion_reportes($db_config_reportes);
    if(!$conexion_reportes){
        header('Location: error.php');
    }
    
    $id_reporte = limpiarDatos($_GET['id_reporte']);

    if(!$id_reporte){
        header('Location: index.php');
    }

    $statement = $conexion_reportes->prepare('DELETE FROM tb_reportes WHERE id_reporte = :id_reporte');
    $statement->execute(array(':id_reporte' => $id_reporte));

    header('Location: index.php');
    
} else{
    header('Location: index.php');
}

?>