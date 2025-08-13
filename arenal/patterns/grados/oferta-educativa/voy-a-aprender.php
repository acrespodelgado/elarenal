<div id="oferta-grados-aprender">
    <div class="container">
        <div class="row">
            <div class="col col-12">
                <h3>¿Qué voy a <span class="accent">aprender y hacer?</span></h3>
                <?php 
                if($aprender = get_field('voy_a_aprender')) : 
                    $aprender_array = explode("\n", $aprender);
                ?>
                    <ul class="list-unstyled">
                        <?php foreach($aprender_array as $aprender_item) : ?>
                            <?php if(trim($aprender_item)) : ?>
                                <li><img src="<?php echo get_site_url(); ?>/img/adorno_oferta_educativa.png" alt="Adorno oferta educativa" class="img-fluid decorator"><?php echo trim($aprender_item); ?></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                <?php else : ?>
                    <p>No se han especificado aprendizajes para este grado.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>