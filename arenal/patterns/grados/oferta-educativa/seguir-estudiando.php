<div id="oferta-grados-seguir" class="mb-5">
    <div class="container text-center">
        <div class="row">
            <div class="col col-12">
                <h3>¿Seguir <span class="accent">estudiando?</span></h3>
                <?php 
                if($estudios = get_field('seguir_estudiando')) : 
                    $estudios_array = explode("\n", $estudios);
                ?>
                    <ul class="list-unstyled">
                        <?php foreach($estudios_array as $estudio) : ?>
                            <?php if(trim($estudio)) : ?>
                                <li><?php echo trim($estudio); ?></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                <?php else : ?>
                    <p>No se han especificado requisitos de acceso para este grado.</p> 
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>