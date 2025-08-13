<?php if(get_field('carnes_profesionales')) : ?>
<?php 
if($carnes = get_field('carnes_profesionales')) :
    $carnes_array = array_filter(array_map('trim', explode("\n", $carnes)));
    if(!empty($carnes_array)) :
?>
    <div id="oferta-grados-carnes">
        <div class="container text-center">
            <div class="row">
                <div class="col col-12">
                    <h3><span class="accent">Carnés profesionales asociados:</span></h3>
                </div>
            </div>
        </div>
        <div class="carnes">
            <div class="container-fluid">
                <div class="row">
                    <?php 
                    foreach($carnes_array as $index => $carne) :
                        $background_class = ($index % 2 == 0) ? 'light-background' : 'primary-background';
                    ?>
                        <div class="col col-background col-12 <?php echo (count($carnes_array) > 1) ? 'col-md-6' : ''; ?> <?php echo $background_class; ?>">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <p>
                                            <img src="<?php echo get_site_url(); ?>/img/adorno_oferta_educativa.png" alt="Adorno oferta educativa" class="img-fluid decorator">
                                            <?php echo $carne; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<?php 
    endif;
endif; 
?>
<?php endif; ?>