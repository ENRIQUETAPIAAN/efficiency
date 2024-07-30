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
    <title>Editar Reporte</title>
</head>
<body>
    <div class="contenedor-general">
        <header>
            <div class="contenedor">
                <div class="cont-admin">
                    <div class="img">

                    </div>
                    <div class="cont-perfil-usuario">
                        <h2>Enrique Tapia</h2>
                        <p>Administrador</p>
                    </div>
                </div>
                <input type="checkbox" id="menu-bar">
                <label class="fa-solid fa-bars" for="menu-bar"></label>
    
                <nav class="menu">
                    <a href="index.html">Inicio</a>
                    <a href="agregar-reporte.html">Registro</a>
                    <a href="cerrar.php">Cerrar Sesión</a>
                </nav>
            </div>
        </header>
        <section>
            <div class="cont-form">
                <form action="" name="login">
                    <div class="cont-imagen">
                        <img src="img/subir2.png" alt="">
                        <input type="file" name="" id="">
                    </div>
                    <div class="cont-input margin-bottom">
                        <div class="cont-input-number">
                            <label for="">Programado</label>
                            <input type="number" name="" id="" placeholder="">
                        </div>
                        <div class="cont-input-number">
                            <label for="">Real</label>
                            <input type="number" name="" id="" placeholder="">
                        </div>
                    </div>
                    <div class="cont-6m">
                        <div class="cont-input">
                            <div class="cont-input-number">
                                <label for="">Celula</label>
                                <select name="" id="">
                                    <option disabled selected>Selecciona celula</option>
                                    <option value="112 A">112 A</option>
                                    <option value="112 B">112 B</option>
                                    <option value="112 C">112 C</option>
                                </select>
                            </div>
                            <div class="cont-input-number">
                                <label for="">Turno</label>
                                <select name="" id="">
                                    <option disabled selected>Selecciona turno</option>
                                    <option value="Turno 1">Turno 1</option>
                                    <option value="Turno 2">Turno 2</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="cont-input">
                            <div class="cont-input-number">
                                <label for="">Mano de obra</label>
                                <input type="number" name="" id="" placeholder="">
                            </div>
                            <div class="cont-input-number">
                                <label for="">Maquinaria</label>
                                <input type="number" name="" id="" placeholder="">
                            </div>
                        </div>
                        <div class="cont-input">
                            <div class="cont-input-number">
                                <label for="">Material</label>
                                <input type="number" name="" id="" placeholder="">
                            </div>
                            <div class="cont-input-number">
                                <label for="">Metodo</label>
                                <input type="number" name="" id="" placeholder="">
                            </div>
                        </div>
                        <div class="cont-input">
                            <div class="cont-input-number">
                                <label for="">Medición</label>
                                <input type="number" name="" id="" placeholder="">
                            </div>
                            <div class="cont-input-number">
                                <label for="">Madre Natur.</label>
                                <input type="number" name="" id="" placeholder="">
                            </div>
                        </div>
                    </div>
                    
                    <div class="cont-input-textarea">
                        <label for="">Comentarios</label>
                        <textarea name="" id=""></textarea>
                    </div>
                    <div class="btn">
                        <a class="btn-sin" onclick="login.submit()">Eliminar</a>
                        <a class="btn-gris" onclick="login.submit()">Actualizar</a>
                    </div>
                    
                </form>
            </div>
        </section>
    </div>
    
</body>
</html>