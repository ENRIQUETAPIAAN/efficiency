<?php session_start();

if(isset($_SESSION['usuario'])){
    require 'admin/config.php';
    require 'functions.php';

    $conexion_reporte = conexion_reportes($db_config_reportes);
    if(!$conexion_reporte){
        header('Location: error.php');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

    } else{
        $id_reporte = id_reporte($_GET['id_reporte']);

        if(empty($id_reporte)){
            header('Location: index.php');
        }

        $reporte = obtener_reporte_por_id($conexion_reporte, $id_reporte);

        if(!$reporte){
            header('Location: index.php');
        }

        $reporte = $reporte['0'];
    }

    require 'views/editar-reporte.view.php';   

} else{
    header('Location: index.php');
}
?>