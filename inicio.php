<?php session_start();

if(isset($_SESSION['usuario'])){
    require 'admin/config.php';
    require 'functions.php';

    $conexion = conexion_reportes($db_config_reportes);
    if(!$conexion){
        header('Location: error.php');
    }

    $reportes = obtener_reportes($blog_config['reportes_por_pagina'], $conexion);

    if(!$reportes){
        header('Location: error.php');
    }

    require 'views/inicio.view.php'; 
} else{
    header('Location: index.php');
}

?>