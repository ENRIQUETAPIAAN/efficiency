<?php session_start();

if(isset($_SESSION['usuario'])){
    require 'admin/config.php';
    require 'functions.php';

    $conexion = conexion_reportes($db_config_reportes);
    if(!$conexion){
        header('Location: error.php');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $p_programada = limpiarDatos($_POST['p_programada']);
        $p_real = limpiarDatos($_POST['p_real']);
        $celula = $_POST['celula'];
        $turno = $_POST['turno'];
        $mano_de_obra = $_POST['mano_de_obra'];
        if(empty($mano_de_obra)){
            $mano_de_obra = 0;
        }
        $maquinaria = $_POST['maquinaria'];
        if(empty($maquinaria)){
            $maquinaria = 0;
        }
        $material = $_POST['material'];
        if(empty($material)){
            $material = 0;
        }
        $metodo = $_POST['metodo'];
        if(empty($metodo)){
            $metodo = 0;
        }
        $medicion = $_POST['medicion'];
        if(empty($medicion)){
            $medicion = 0;
        }
        $madre_natur = $_POST['madre_natur'];
        if(empty($madre_natur)){
            $madre_natur = 0;
        }
        $comentarios = limpiarDatos($_POST['comentarios']);
        
        $foto = $_FILES['thumb']['tmp_name'];

        $archivo_subido = $blog_config['carpeta_imagenes'].$_FILES['thumb']['name'];

        move_uploaded_file($foto, $archivo_subido);

        $nombre_usuario = $_SESSION['usuario'];

        $statement = $conexion->prepare('INSERT INTO tb_reportes (id_reporte, nombre, p_real, p_programada, celula, turno, mano_de_obra,
        maquinaria, material, metodo, medicion, madre_natur, comentarios, foto) VALUES (null, :nombre, :p_real, :p_programada, :celula, 
        :turno, :mano_de_obra, :maquinaria, :material, :metodo, :medicion, :madre_natur, :comentarios, :foto)');

        $statement->execute(array(':nombre' => $nombre_usuario, 
        ':p_real' => $p_real, 
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
        ':foto' => $_FILES['thumb']['name']));

        header('Location: index.php');
    }

    require 'views/agregar-reporte.view.php';
} else{
    header('Location: index.php');
}   

?>