<?php $pagina = 'Editar Reporte'; ?>
<?php require 'header.php'?>
        <section>
            <div class="cont-form">
                <form enctype="multipart/form-data" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="login">
                    <input type="hidden" name="id_reporte" value="<?php echo $reporte['id_reporte']; ?>">
                    <div class="cont-imagen">
                        <img src="img/subir2.png" alt="">
                        <input type="file" name="thumb">
                        <input type="hidden" name="foto-guardada" value="<?php echo $reporte['foto']; ?>">
                    </div>
                    <div class="cont-input margin-bottom">
                        <div class="cont-input-number">
                            <label for="">Programado</label>
                            <input type="number" name="p_programada" value="<?php echo $reporte['p_programada']; ?>">
                        </div>
                        <div class="cont-input-number">
                            <label for="">Real</label>
                            <input type="number" name="p_real"  value="<?php echo $reporte['p_real']; ?>">
                        </div>
                    </div>
                    <div class="cont-6m">
                            <div class="fecha">
                                <label for="">Fecha</label>
                                <input type="date" name="fecha_manual" value="<?php echo $reporte['fecha_manual']; ?>">
                            </div>
                        <div class="cont-input">
                            <div class="cont-input-number">
                                <label for="">Celula</label>
                                <select name="celula">
                                    <?php 

                                        if(!empty($reporte['celula'])){
                                            echo '<option selected>'.$reporte['celula'].'</option>';
                                        }

                                    ?>
                                    <option value="112 A">112 A</option>
                                    <option value="112 B">112 B</option>
                                    <option value="112 C">112 C</option>
                                    <option value="112 D">112 D</option>
                                    <option value="112 E">112 E</option>
                                    <option value="112 F">112 F</option>
                                    <option value="112 G">112 G</option>
                                    <option value="112 H">112 H</option>
                                </select>
                            </div>
                            <div class="cont-input-number">
                                <label for="">Turno</label>
                                <select name="turno">
                                <?php 

                                    if(!empty($reporte['turno'])){
                                        echo '<option selected>'.$reporte['turno'].'</option>';
                                    }

                                ?>
                                    <option value="Turno 1">Turno 1</option>
                                    <option value="Turno 2">Turno 2</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="cont-input">
                            <div class="cont-input-number">
                                <label for="">Mano de obra</label>
                                <input type="number" name="mano_de_obra" value="<?php echo $reporte['mano_de_obra']; ?>">
                            </div>
                            <div class="cont-input-number">
                                <label for="">Maquinaria</label>
                                <input type="number" name="maquinaria" value="<?php echo $reporte['maquinaria']; ?>">
                            </div>
                        </div>
                        <div class="cont-input">
                            <div class="cont-input-number">
                                <label for="">Material</label>
                                <input type="number" name="material" value="<?php echo $reporte['material']; ?>">
                            </div>
                            <div class="cont-input-number">
                                <label for="">Metodo</label>
                                <input type="number" name="metodo" value="<?php echo $reporte['metodo']; ?>">
                            </div>
                        </div>
                        <div class="cont-input">
                            <div class="cont-input-number">
                                <label for="">Medición</label>
                                <input type="number" name="medicion" value="<?php echo $reporte['medicion']; ?>">
                            </div>
                            <div class="cont-input-number">
                                <label for="">Madre Natur.</label>
                                <input type="number" name="madre_natur" value="<?php echo $reporte['madre_natur']; ?>">
                            </div>
                        </div>
                    </div>
                    
                    <div class="cont-input-textarea">
                        <label for="">Comentarios</label>
                        <textarea name="comentarios"><?php echo $reporte['comentarios']; ?></textarea>
                    </div>
                    <?php if($reporte['nombre'] == $_SESSION['usuario']):?>
                        <div class="btn">
                            <a class="btn-sin eliminar" href="borrar.php?id_reporte=<?php echo $reporte['id_reporte']; ?>">Eliminar</a>
                            <a class="btn-gris" onclick="login.submit()">Actualizar</a>
                        </div>
                    <?php else:?>
                        <div class="btn">
                        </div>
                    <?php endif; ?>
                    
                </form>
            </div>
        </section>
    </div>
    
</body>
</html>