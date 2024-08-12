<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/07702d4e25.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <title>
        <?php 
            if(!empty($pagina)){
                echo $pagina;
            }
        ?>
    </title>
</head>
<body>
    <div class="contenedor-general">
        <header>
            <div class="contenedor">
                <div class="cont-admin">
                    <div class="img">

                    </div>
                    <div class="cont-perfil-usuario">
                        <h2><?php echo $_SESSION['usuario']; ?></h2>
                        <?php 

                            try {
                                $conexion_usuarios = new PDO('mysql:host=localhost;dbname=db_usuarios_reporte', 'root', '');
                            } catch (PDOException $e) {
                                echo "Error: " . $e->getMessage();
                            }

                            $statement = $conexion_usuarios->prepare('SELECT administrador FROM tb_usuarios_reporte WHERE nombre = :nombre');
                            $statement->execute(array(':nombre' => $_SESSION['usuario']));
                            $resultado_admin = $statement->fetch();
                            $resultado_admin = $resultado_admin['administrador'];

                            if($resultado_admin == 0){
                                $tipo_de_usuario = 'Cell Leader';
                                echo "<p>$tipo_de_usuario</p>";
                            } elseif($resultado_admin == 1){
                                $tipo_de_usuario = 'Coordinador';
                                echo "<p>$tipo_de_usuario</p>";
                            } elseif($resultado_admin == 2){
                                $tipo_de_usuario = 'Focus Factory Manager';
                                echo "<p>$tipo_de_usuario</p>";
                            } elseif($resultado_admin == 3){
                                $tipo_de_usuario = 'Administrador';
                                echo "<p>$tipo_de_usuario</p>";
                            }
                            
                    
                        ?>
                    </div>
                </div>
                <input type="checkbox" id="menu-bar">
                <label class="fa-solid fa-bars" for="menu-bar"></label>
    
                <nav class="menu">
                    <a href="inicio.php">Inicio</a>
                    <a href="agregar-reporte.php">Agregar Reporte</a>
                    <a href="cerrar.php">Cerrar Sesión</a>
                </nav>
            </div>
        </header>