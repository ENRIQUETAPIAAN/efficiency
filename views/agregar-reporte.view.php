<?php $pagina = 'Agregar Reporte'; ?>
<?php require 'header.php'?>
        <section>
            <div class="cont-form">
                <form enctype="multipart/form-data" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="login">
                    <div class="cont-imagen">
                        <img src="img/subir2.png" alt="">
                        <input type="file" name="thumb">
                    </div>

                    <div class="cont-input margin-bottom">
                        <div class="cont-input-number">
                            <label for="">Programado</label>
                            <input type="number" name="p_programada" id="" placeholder="">
                        </div>
                        <div class="cont-input-number">
                            <label for="">Real</label>
                            <input type="number" name="p_real" id="" placeholder="">
                        </div>
                    </div>
                    <div class="cont-6m">
                            <div class="fecha">
                                <label for="">Fecha</label>
                                <input type="date" name="fecha_manual" id="" placeholder="">
                            </div>
                        <div class="cont-input">
                            <div class="cont-input-number">
                                <label for="">Celula</label>
                                <select name="celula" id="">
                                    <option disabled selected>Selecciona celula</option>
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
                                <select name="turno" id="">
                                    <option disabled selected>Selecciona turno</option>
                                    <option value="Turno 1">Turno 1</option>
                                    <option value="Turno 2">Turno 2</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="cont-input">
                            <div class="cont-input-number">
                                <label for="">Mano de obra</label>
                                <input type="number" name="mano_de_obra" id="" placeholder="">
                            </div>
                            <div class="cont-input-number">
                                <label for="">Maquinaria</label>
                                <input type="number" name="maquinaria" id="" placeholder="">
                            </div>
                        </div>
                        <div class="cont-input">
                            <div class="cont-input-number">
                                <label for="">Material</label>
                                <input type="number" name="material" id="" placeholder="">
                            </div>
                            <div class="cont-input-number">
                                <label for="">Metodo</label>
                                <input type="number" name="metodo" id="" placeholder="">
                            </div>
                        </div>
                        <div class="cont-input">
                            <div class="cont-input-number">
                                <label for="">Medición</label>
                                <input type="number" name="medicion" id="" placeholder="">
                            </div>
                            <div class="cont-input-number">
                                <label for="">Madre Natur.</label>
                                <input type="number" name="madre_natur" id="" placeholder="">
                            </div>
                        </div>
                    </div>
                    
                    <div class="cont-input-textarea">
                        <label for="">Comentarios</label>
                        <textarea name="comentarios" id=""></textarea>
                    </div>
                    <div class="cont-input margin-bottom">
                        <div class="cont-input-number">
                        </div>
                    </div>
                    <div class="btn">
                        <a class="btn-sin" href="index.php">Cancelar</a>
                        <a class="btn-gris" onclick="login.submit()">Guardar</a>
                    </div>
                    
                </form>
            </div>
        </section>
    </div>
    
</body>
</html>