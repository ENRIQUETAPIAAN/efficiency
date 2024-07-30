<?php session_start();

$errores = '';
if(isset($_SESSION['usuario'])){
    header('Location: index.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password = hash('sha512', $password);

    try {
        $conexion = new PDO('mysql:host=localhost;dbname=db_usuarios_reporte', 'root', '');
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $statement = $conexion->prepare('SELECT * FROM tb_usuarios_reporte WHERE nombre = :nombre AND :contra = :contra');
    $statement->execute(array(':nombre' => $usuario, ':contra' => $password));

    $resultado = $statement->fetch();

    if($resultado !== false){
        $_SESSION['usuario'] = $usuario;
        header('Location: index.php');
    } else{
        $errores .= '<li>Las credenciales son incorrectas</li>';
    }
}

require 'views/login.view.php';
?>