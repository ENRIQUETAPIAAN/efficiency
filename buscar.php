<?php session_start();

if(isset($_SESSION['usuario'])){
    require 'admin/config.php';
    require 'functions.php';

    $conexion = conexion_reportes($db_config_reportes);
    if(!$conexion){
        header('Location: error.php');
    }

    if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])){
        $busqueda = limpiarDatos($_GET['busqueda']);

        $statement = $conexion->prepare('SELECT * FROM tb_reportes WHERE nombre LIKE :busqueda or celula LIKE :busqueda or comentarios LIKE :busqueda');
        $statement->execute(array(':busqueda' => "%$busqueda%"));
        $resultados_busqueda = $statement->fetchAll();

        if(empty($resultados_busqueda)){
            $titulo = 'No se encontraron resultados de la busqueda: ' . $busqueda;
        } else{
            $titulo = 'Resultados de la busqueda: '. $busqueda;
        }
    } else{
        header('Location: inicio.php');
    }

    require 'views/buscar.view.php'; 
} else{
    header('Location: index.php');
}

?>