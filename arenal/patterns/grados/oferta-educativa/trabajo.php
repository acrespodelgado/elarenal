<div id="oferta-grados-trabajo">
    <div class="container">
        <div class="row">
            <div class="col col-12">
                <div class="d-flex">
                    <img src="<?php echo get_site_url(); ?>/img/adorno_oferta_educativa.png" alt="Adorno oferta educativa" class="img-fluid decorator">
                    <h3>Trabajar como:</h3>
                </div>
                <?php 
                if($trabajos = get_field('trabajar_como')) : 
                    $trabajos_array = explode("\n", $trabajos);
                ?>
                    <ul>
                        <?php foreach($trabajos_array as $trabajo) : ?>
                            <?php if(trim($trabajo)) : ?>
                                <li><?php echo trim($trabajo); ?></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                <?php else : ?>
                    <p>No se han especificado trabajos para este grado.</p> 
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>