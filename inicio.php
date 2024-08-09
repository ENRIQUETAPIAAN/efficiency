<?php session_start();

if(isset($_SESSION['usuario'])){
    require 'admin/config.php';
    require 'views/inicio.view.php'; 
} else{
    header('Location: index.php');
}

?>