<?php if(get_field('mas_informacion')) : ?>
<div id="oferta-grados-mas-info">
    <div class="container">
        <div class="row">
            <div class="col col-12">
                <div class="d-flex">
                    <img src="<?php echo get_site_url(); ?>/img/adorno_oferta_educativa.png" alt="Adorno oferta educativa" class="img-fluid decorator">
                    <h3>Más información:</h3>
                </div>
                <?php 
                if($informacion = get_field('mas_informacion')) : 
                    $informacion_array = explode("\n", $informacion);
                ?>
                    <ul>
                        <?php foreach($informacion_array as $informacion) : ?>
                            <?php if(trim($informacion)) : ?>
                                <li><?php echo trim($informacion); ?></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>