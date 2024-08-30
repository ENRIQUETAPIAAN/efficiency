<?php $pagina = 'Inicio - Reportes'; ?>
<?php require 'header.php'?>



        <section>
            <div class="cont-busqueda">
                <form name="busqueda" class="buscar" action="buscar.php" method="get">
                    <input type="text" name="busqueda" placeholder="Buscar:">
                    <button type="submit" class="icono fa fa-search"></button>
                </form>
            </div>
            <div class="contenedor-reportes">

                <?php foreach($reportes as $reporte): ?>
                

                <a href="reporte.php?id_reporte=<?php echo $reporte['id_reporte']; ?>" class="cont-report">
                    <div class="cont-img-report">
                        <img src="img/<?php echo $reporte['foto']; ?>">
                    </div>
                    <div class="cont-info-report">
                        <div class="cont-titulo-report">
                            <h2><?php echo fecha($reporte['fecha']); ?></h2>
                            <?php 
                                if($reporte['p_programada'] > 0){
                                    $eficiencia = ($reporte['p_real'] / $reporte['p_programada']) * 100;
                                } else{
                                    $eficiencia = 0;
                                }
                            ?>
                            <?php if($eficiencia < 85): ?>
                                <p class="bad">
                                    <?php
                                        echo round($eficiencia, 0);
                                    ?>
                                    %
                                </p>
                            <?php else: ?>
                                <p class="eficiencia">
                                    <?php
                                        echo round($eficiencia, 0);
                                    ?>
                                    %
                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="cont-info">
                            <div class="cont-informacion">
                                <p>Celula: <?php echo $reporte['celula']; ?></p>
                                <p>P. real: <?php echo $reporte['p_real']; ?></p>
                                <p>P. programada: <?php echo $reporte['p_programada']; ?></p>
                                <p>TVC perdido: $
                                    <?php
                                        $tvc_perdido = $reporte['mano_de_obra'] + $reporte['maquinaria'] + $reporte['material'] + $reporte['metodo'] + $reporte['medicion'] + $reporte['madre_natur'];
                                        echo number_format($tvc_perdido);
                                    ?>
                                </p>
                            </div>
                            <p class="autor"><?php echo $reporte['nombre']; ?></p>
                        </div>
                    </div>
                </a>
                
                <?php endforeach; ?>
                
            </div>
<?php require 'paginacion.php';?>