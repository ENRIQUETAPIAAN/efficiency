<?php $pagina = 'Reporte'; ?>
<?php require 'header.php'?>
        <section>
            <div class="contenedor-articulo-single">
                <div class="cont-articulo-img">  
                    <img src="img/<?php echo $reporte['foto'] ?>">
                </div>
                <div class="cont-articulo-info">
                    <p class="bold">Fecha: <span><?php echo fecha($reporte['fecha']); ?></span></p>
                    <p class="bold">Turno: <span><?php echo $reporte['turno']; ?></span></p>
                    <p class="bold">Celula: <span><?php echo $reporte['celula']; ?></span></p>
                    <p class="bold">Eficiencia: <span>
                        <?php 
                            if($reporte['p_programada'] > 0){
                                $eficiencia = ($reporte['p_real'] / $reporte['p_programada']) * 100;
                                echo round($eficiencia,0);
                            } else{
                                $eficiencia = 0;
                                echo $eficiencia;
                            }
                           
                        ?>
                        %
                    </span></p>
                    <p class="bold">Producción Real: <span><?php echo $reporte['p_real']; ?></span></p>
                    <p class="bold">Producción Programada: <span><?php echo $reporte['p_programada']; ?></span></p>
                    <p class="bold">Autor: <span><?php echo $reporte['nombre']; ?></span></p>

                    <?php if($reporte['nombre'] == $_SESSION['usuario']): ?>
                        <div class="btn">
                            <a href="editar-reporte.php?id_reporte=<?php echo $reporte['id_reporte']; ?>" class="btn-sin eliminar">Eliminar</a>
                            <a href="editar-reporte.php?id_reporte=<?php echo $reporte['id_reporte']; ?>" class="btn-gris">Editar</a>
                        </div>
                    <?php else: ?>
                        <div class="btn">
                        </div>
                    <?php endif; ?>


                </div>
                <div class="cont-articulo-info2">
                    <p class="bold">TVC Perdido: <span>$ 
                        <?php
                            $tvc_perdido = $reporte['mano_de_obra'] + $reporte['maquinaria'] + $reporte['material'] + $reporte['metodo'] + $reporte['medicion'] + $reporte['madre_natur'];
                            echo number_format($tvc_perdido);
                        ?>
                    </span></p>
                    <p class="bold">Mano de obra: <span>$ <?php echo number_format($reporte['mano_de_obra']); ?></span></p>
                    <p class="bold">Maquinaria: <span>$ <?php echo number_format($reporte['maquinaria']); ?></span></p>
                    <p class="bold">Material: <span>$ <?php echo number_format($reporte['material']); ?></span></p>
                    <p class="bold">Metodo: <span>$ <?php echo number_format($reporte['metodo']); ?></span></p>
                    <p class="bold">Medición: <span>$ <?php echo number_format($reporte['medicion']); ?></span></p>
                    <p class="bold">Mano de obra: <span>$ <?php echo number_format($reporte['madre_natur']); ?></span></p>
                </div>
                <div class="cont-articulo-info">
                    <p class="bold">Comentarios: <span><?php echo nl2br($reporte['comentarios']); ?></span></p>
                </div>
                
            </div>
        </section>
    </div>
    
</body>
</html>