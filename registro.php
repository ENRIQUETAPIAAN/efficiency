<?php session_start();
$administrador = 0;
if(isset($_SESSION['usuario'])){
    header('Location: index.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];


    $errores = '';

    if(empty($usuario) or empty($password) or empty($password2)){
        $errores .= '<li>Por favor rellena todos los datos correctamente.</li>';
    } else{
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=db_usuarios_reporte','root','');
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $statement = $conexion->prepare('SELECT * FROM tb_usuarios_reporte WHERE nombre = :nombre LIMIT 1');
        $statement->execute(array(':nombre' => $usuario));
        
        $resultado = $statement->fetch();

        if($resultado != false){
            $errores .= '<li>El nombre de usuario ya existe en la base de datos.</li>';
        }

        $password = hash('sha512',$password);
        $password2 = hash('sha512',$password2);

        if($password != $password2){
            $errores .= '<li>Las contraseñas no son iguales</li>';
        }
    }

    if($errores == ''){
        $statement = $conexion->prepare('INSERT INTO tb_usuarios_reporte (id_usuario, nombre, pass, administrador) VALUES (null, :nombre, :pass, :administrador)');
        $statement->execute(array(':nombre' => $usuario, ':pass' => $password, ':administrador'=>$administrador));

        header('Location: login.php');
    }
}

require 'views/registro.view.php';
?>