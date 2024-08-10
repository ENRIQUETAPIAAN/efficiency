<?php session_start();

if(isset($_SESSION['usuario'])){
    require 'admin/config.php';
    require 'functions.php';
} else{
    header('Location: index.php');
}
require 'views/header.php';

?>

<section>
    <div class="contenedor-reportes">
        <h2>Error:</h2>
        <p>Error.</p>
    </div>
</section>