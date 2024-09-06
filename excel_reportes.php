<?php session_start();

if(isset($_SESSION['usuario'])){
    require 'admin/config.php';
    require 'functions.php';

    $documento = "reportes.xls";
    
    $conexion_reportes = conexion_reportes($db_config_reportes);

    if(!$conexion_reportes){
        header('Location: error.php');
    }

    $statement = $conexion_reportes->prepare('SELECT * FROM tb_reportes');
    
    $statement->execute();
    $reportes_excel = $statement->fetchAll();

    header('Content-type: application/vnd.ms-excel');
    header('Content-Disposition: attachment; filename='.$documento);
    header('Pragma: no-cache');
    header('Expires: 0');

    echo '<table border=1';
    //echo '<tr>';
    //echo '<th colspan=16>Reportes de producción.</th>';
    //echo '</tr>';
    echo '<tr><th>id_reporte</th><th>nombre</th><th>p_real</th>
    <th>p_programada</th><th>celula</th><th>fecha</th><th>turno</th>
    <th>mano_de_obra</th><th>maquinaria</th><th>material</th><th>metodo</th>
    <th>medicion</th><th>madre_natur</th><th>comentarios</th><th>foto</th><th>fecha_manual</th></tr>';


    foreach ($reportes_excel as $row) {
        echo '<td>'.$row['id_reporte'] .'</td>';
        echo '<td>'.$row['nombre'] .'</td>';
        echo '<td>'.$row['p_real'] .'</td>';
        echo '<td>'.$row['p_programada'] .'</td>';
        echo '<td>'.$row['celula'] .'</td>';
        echo '<td>'.$row['fecha'] .'</td>';
        echo '<td>'.$row['turno'] .'</td>';
        echo '<td>'.$row['mano_de_obra'] .'</td>';
        echo '<td>'.$row['maquinaria'] .'</td>';
        echo '<td>'.$row['material'] .'</td>';
        echo '<td>'.$row['metodo'] .'</td>';
        echo '<td>'.$row['medicion'] .'</td>';
        echo '<td>'.$row['madre_natur'] .'</td>';
        echo '<td>'.$row['comentarios'] .'</td>';
        echo '<td>'.$row['foto'] .'</td>';
        echo '<td>'.$row['fecha_manual'] .'</td>';
        echo '</tr>';
    }
/*
    while($row=mysqli_fetch_array($statement)){
        echo '<tr>';
        echo '<td>'.$row['id_reporte'] .'</td>';
        echo '<td>'.$row['nombre'] .'</td>';
        echo '<td>'.$row['p_real'] .'</td>';
        echo '<td>'.$row['p_programada'] .'</td>';
        echo '<td>'.$row['celula'] .'</td>';
        echo '<td>'.$row['fecha'] .'</td>';
        echo '<td>'.$row['turno'] .'</td>';
        echo '<td>'.$row['mano_de_obra'] .'</td>';
        echo '<td>'.$row['maquinaria'] .'</td>';
        echo '<td>'.$row['material'] .'</td>';
        echo '<td>'.$row['metodo'] .'</td>';
        echo '<td>'.$row['medicion'] .'</td>';
        echo '<td>'.$row['madre_natur'] .'</td>';
        echo '<td>'.$row['comentarios'] .'</td>';
        echo '<td>'.$row['foto'] .'</td>';
        echo '<td>'.$row['fecha_manual'] .'</td>';
        echo '</tr>';
    }
*/
    echo '</table>';

} else{
    header('Location: index.php');
}


?>