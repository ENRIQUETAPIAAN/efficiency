<?php session_start();

if(isset($_SESSION['usuario'])){
    require 'admin/config.php';
    require 'functions.php';

    $conexion = conexion_reportes($db_config_reportes);
    $id_reporte = id_reporte($_GET['id_reporte']);

    if(!$conexion){
        header('Location: error.php');
    }

    if(empty($id_reporte)){
        header('Location: index.php');
    }

    $reporte = obtener_reporte_por_id($conexion, $id_reporte);

    if(!$reporte){
        header('Location: index.php');
    }

    $reporte = $reporte[0];

    require 'views/reporte.view.php';    

} else{
    header('Location: index.php');
}
?>