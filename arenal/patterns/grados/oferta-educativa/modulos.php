<div id="oferta-grados-modulos">
    <div class="container">
        <div class="row">
            <div class="col col-12">
                <h3 class="uppercase text-center">Plan de <span class="accent">formación</span></h3>
                <div class="light-background">
                    <?php 
                    if($modulos = get_field('modulos')) : 
                        $modulos_array = array_filter(array_map('trim', explode("\n", $modulos)));
                    ?>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <?php 
                                foreach($modulos_array as $index => $modulo) :
                                    if($index % 2 == 0) : // Números impares (1,3,5...) en columna izquierda
                                        $numero = sprintf('%02d', $index + 1);
                                ?>
                                        <div class="modulo-item">
                                            <p class="numero"><?php echo $numero; ?>.</p>
                                            <p><?php echo $modulo; ?></p>
                                        </div>
                                <?php 
                                    endif;
                                endforeach; 
                                ?>
                            </div>
                            <div class="col-12 col-md-6">
                                <?php 
                                foreach($modulos_array as $index => $modulo) :
                                    if($index % 2 != 0) : // Números pares (2,4,6...) en columna derecha
                                        $numero = sprintf('%02d', $index + 1);
                                ?>
                                        <div class="modulo-item">
                                            <p class="numero"><?php echo $numero; ?>.</p>
                                            <p><?php echo $modulo; ?></p>
                                        </div>
                                <?php 
                                    endif;
                                endforeach; 
                                ?>
                            </div>
                        </div>
                    <?php else : ?>
                        <p>No se han especificado módulos para este grado.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>