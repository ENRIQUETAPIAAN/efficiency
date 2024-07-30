<?php session_start();

if(isset($_SESSION['usuario'])){
    require 'admin/config.php';
    require 'views/agregar-reporte.view.php';   
} else{
    header('Location: index.php');
}   

?>