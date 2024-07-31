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
    <title>Inicio - Reportes</title>
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
                                $conexion = new PDO('mysql:host=localhost;dbname=db_usuarios_reporte', 'root', '');
                            } catch (PDOException $e) {
                                echo "Error: " . $e->getMessage();
                            }

                            $statement = $conexion->prepare('SELECT administrador FROM tb_usuarios_reporte WHERE nombre = :nombre');
                            $statement->execute(array(':nombre' => $_SESSION['usuario']));
                            $resultado_admin = $statement->fetch();
                            $resultado_admin = $resultado_admin['administrador'];

                            if($resultado_admin == 0){
                                $tipo_de_usuario = 'Usuario I';
                                echo '<p>Usuario I</p>';
                            } elseif($resultado_admin == 1){
                                $tipo_de_usuario = 'Usuario II';
                                echo '<p>Usuario II</p>';
                            } elseif($resultado_admin == 2){
                                $tipo_de_usuario = 'Administrador';
                                echo '<p>Administrador</p>';
                            }
                    
                        ?>
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
            <div class="contenedor-reportes">
                <a href="reporte.html" class="cont-report">
                    <div class="cont-img-report">
                        <img src="img/p1.jpg">
                    </div>
                    <div class="cont-info-report">
                        <div class="cont-titulo-report">
                            <h2>Lunes, 15 de julio del 2024</h2>
                            <p class="eficiencia">100%</p>
                        </div>
                        <div class="cont-info">
                            <div class="cont-informacion">
                                <p>P. real: 448</p>
                                <p>P. programada: 448</p>
                                <p>TVC perdido: $ 5,000.00</p>
                            </div>
                            <p class="autor">Enrique Tapia</p>
                        </div>
                    </div>
                </a>
                <a href="reporte.html" class="cont-report">
                    <div class="cont-img-report">
                        <img src="img/p1.jpg">
                    </div>
                    <div class="cont-info-report">
                        <div class="cont-titulo-report">
                            <h2>Lunes, 15 de julio del 2024</h2>
                            <p class="eficiencia">100%</p>
                        </div>
                        <div class="cont-info">
                            <div class="cont-informacion">
                                <p>P. real: 448</p>
                                <p>P. programada: 448</p>
                                <p>TVC perdido: $ 5,000.00</p>
                            </div>
                            <p class="autor">Enrique Tapia</p>
                        </div>
                    </div>
                </a>
                <a href="reporte.html" class="cont-report">
                    <div class="cont-img-report">
                        <img src="img/p1.jpg">
                    </div>
                    <div class="cont-info-report">
                        <div class="cont-titulo-report">
                            <h2>Lunes, 15 de julio del 2024</h2>
                            <p class="eficiencia">100%</p>
                        </div>
                        <div class="cont-info">
                            <div class="cont-informacion">
                                <p>P. real: 448</p>
                                <p>P. programada: 448</p>
                                <p>TVC perdido: $ 5,000.00</p>
                            </div>
                            <p class="autor">Enrique Tapia</p>
                        </div>
                    </div>
                </a>
                <a href="reporte.html" class="cont-report">
                    <div class="cont-img-report">
                        <img src="img/p1.jpg">
                    </div>
                    <div class="cont-info-report">
                        <div class="cont-titulo-report">
                            <h2>Lunes, 15 de julio del 2024</h2>
                            <p class="eficiencia">100%</p>
                        </div>
                        <div class="cont-info">
                            <div class="cont-informacion">
                                <p>P. real: 448</p>
                                <p>P. programada: 448</p>
                                <p>TVC perdido: $ 5,000.00</p>
                            </div>
                            <p class="autor">Enrique Tapia</p>
                        </div>
                    </div>
                </a>
                
            </div>
            <div class="paginacion">
                <ul>
                    <li class="disabled">&laquo;</li>
                    <p>1 de 10</p>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
        </section>
    </div>
</body>
</html>