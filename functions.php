<?php 

function conexion_reportes($db_config_reportes){
    try {
        $conexion = new PDO('mysql:host=localhost;dbname='.$db_config_reportes['basedatos'], $db_config_reportes['usuario'], $db_config_reportes['pass']);
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
}

function limpiarDatos($datos){
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

function pagina_actual(){
    return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

function obtener_reportes($reportes_por_pagina, $conexion){
    $inicio = ((pagina_actual() > 1) ? pagina_actual() * $reportes_por_pagina - $reportes_por_pagina : 0 );
    $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM tb_reportes LIMIT $inicio, $reportes_por_pagina");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

?>