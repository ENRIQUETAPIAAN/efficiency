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
    <title>Registrar Usuarios</title>
</head>
<body>
    <div class="contenedor-login">
        <h2 class="titulo-login">Registro de usuarios</h2>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="registro" method="POST">
            <input type="text" name="usuario" id="" placeholder="Nombre de usario" class="top">
            <input type="password" name="password" id="" placeholder="Contraseña" class="medio">
            <input type="password" name="password2" id="" placeholder="Repetir contraseña" class="bottom">
            <?php if(!empty($errores)): ?>
                <div class="error">
                    <ul>
                        <?php echo $errores; ?>
                    </ul>
                </div>
            <?php endif;?>
            <div class="cont-btn-login">
                <input type="submit" value="Registrar">
                <p>¿Ya tienes cuenta?</p>
                <a href="login.php">Iniciar Sesión</a>
            </div>
            
        </form>
    </div>
</body>
</html>