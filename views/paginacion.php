<?php $numero_paginas = numero_paginas($blog_config['reportes_por_pagina'], $conexion); ?>

<div class="paginacion">
                <ul>

                    <?php if(pagina_actual() == 1): ?>
                        <li class="disabled">&laquo;</li>
                    <?php else: ?>
                        <li><a href="inicio.php?p=<?php echo pagina_actual() - 1; ?>">&laquo;</a></li>
                    <?php endif; ?>



                    <p><?php echo pagina_actual(); ?> de <?php echo $numero_paginas; ?></p>

                    

                    <?php if(pagina_actual() == $numero_paginas): ?>
                        <li class="disabled">&raquo;</li>
                    <?php else: ?>
                        <li><a href="inicio.php?p=<?php echo pagina_actual() + 1; ?>">&raquo;</a></li>
                    <?php endif; ?>
                    
                </ul>
                <br>
                <ul>

                    <?php if(pagina_actual() == 1): ?>
                        <li class="disabled">&laquo;</li>
                    <?php else: ?>
                        <li><a href="inicio.php?p=<?php echo 1; ?>">&laquo;</a></li>
                    <?php endif; ?>



                    <p>Página 1 - Ultima página</p>

                    

                    <?php if(pagina_actual() == $numero_paginas): ?>
                        <li class="disabled">&raquo;</li>
                    <?php else: ?>
                        <li><a href="inicio.php?p=<?php echo $numero_paginas; ?>">&raquo;</a></li>
                    <?php endif; ?>
                    
                </ul>
            </div>
        </section>
    </div>
</body>
</html>