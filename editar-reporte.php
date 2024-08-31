<?php session_start();

if(isset($_SESSION['usuario'])){
    require 'admin/config.php';
    require 'functions.php';

    $conexion_reporte = conexion_reportes($db_config_reportes);
    if(!$conexion_reporte){
        header('Location: error.php');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $fecha_manual = $_POST['fecha_manual'];
        $id_reporte = $_POST['id_reporte'];
        $p_programada = $_POST['p_programada'];
        $p_real = $_POST['p_real'];
        $celula = $_POST['celula'];
        $turno = $_POST['turno'];
        $mano_de_obra = $_POST['mano_de_obra'];
        $maquinaria = $_POST['maquinaria'];
        $material = $_POST['material'];
        $metodo = $_POST['metodo'];
        $medicion = $_POST['medicion'];
        $madre_natur = $_POST['madre_natur'];
        $comentarios = limpiarDatos($_POST['comentarios']);
        $foto_guardada = $_POST['foto-guardada'];
        $foto = $_FILES['thumb'];

        if(empty($foto['name'])){
            $foto = $foto_guardada;
        } else{
            $archivo_subido = $blog_config['carpeta_imagenes'].$_FILES['thumb']['name'];
            move_uploaded_file($_FILES['thumb']['tmp_name'], $archivo_subido);
            $foto = $_FILES['thumb']['name'];
        }

        $statement = $conexion_reporte->prepare('UPDATE tb_reportes SET p_real = :p_real, p_programada = :p_programada, 
        celula = :celula, turno = :turno, mano_de_obra = :mano_de_obra, maquinaria = :maquinaria, material = :material, 
        metodo = :metodo, medicion = :medicion, madre_natur = :madre_natur, comentarios = :comentarios, foto = :foto, 
        fecha_manual = :fecha_manual WHERE id_reporte = :id_reporte');

        $statement->execute(array(':p_real' => $p_real, 
        ':p_programada' => $p_programada, 
        ':celula' => $celula, 
        ':turno' => $turno, 
        ':mano_de_obra' => $mano_de_obra,
        ':maquinaria' => $maquinaria, 
        ':material' => $material, 
        ':metodo' => $metodo, 
        ':medicion' => $medicion, 
        ':madre_natur' => $madre_natur, 
        ':comentarios' => $comentarios, 
        ':foto' => $foto,
        ':id_reporte' => $id_reporte,
        ':fecha_manual' => $fecha_manual
        ));


        header('Location: index.php');

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