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

function id_reporte($id_reporte){
    return (int)limpiarDatos($id_reporte);
}

function obtener_reporte_por_id($conexion, $id_reporte){
    $resultado = $conexion->query("SELECT * FROM tb_reportes WHERE id_reporte = $id_reporte");
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}

function fecha($fecha){
    $timestamp = strtotime($fecha);
    $dias = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];
    $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

    $dia = date('N', $timestamp) - 1;
    $dia_num = date('d', $timestamp);
    $mes = date('m', $timestamp) - 1;
    $year = date('Y', $timestamp);

    $fecha = "$dias[$dia], $dia_num de $meses[$mes] del $year ";
    return $fecha;
}

?>