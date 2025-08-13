<div id="oferta-grados-requisitos">
    <div class="container">
        <div class="row">
            <div class="col col-12">
                <div class="d-flex">
                    <img src="<?php echo get_site_url(); ?>/img/adorno_oferta_educativa.png" alt="Adorno oferta educativa" class="img-fluid decorator">
                    <h3>Requisitos <span class="accent">de acceso</span></h3>
                </div>
                <?php 
                if($requisitos = get_field('requisitos_acceso')) : 
                    $requisitos_array = explode("\n", $requisitos);
                ?>
                    <ul>
                        <?php foreach($requisitos_array as $requisito) : ?>
                            <?php if(trim($requisito)) : ?>
                                <li><?php echo trim($requisito); ?></li>
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