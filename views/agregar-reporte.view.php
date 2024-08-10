<?php $pagina = 'Agregar Reporte'; ?>
<?php require 'header.php'?>
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
                        <a href="index.html">Volver</a>
                        <a class="btn-gris" onclick="login.submit()">Guardar</a>
                    </div>
                    
                </form>
            </div>
        </section>
    </div>
    
</body>
</html>