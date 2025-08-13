<div id="oferta-grados-niveles">
    <?php 
    if($niveles = get_field('niveles')) :
        $niveles_array = array_filter(array_map('trim', explode("\n", $niveles)));
        if(!empty($niveles_array)) :
    ?>
        <div class="container text-center">
            <div class="row">
                <div class="col col-12">
                    <h3><span class="accent">Niveles</span></h3>
                    <p>Esta formación se corresponde con:</p>
                </div>
            </div>
        </div>
        <div class="niveles">
            <div class="container-fluid">
                <div class="row">
                    <?php 
                    foreach($niveles_array as $index => $nivel) :
                        $background_class = (count($niveles_array) === 1) ? 'light-background' : 
                                          (($index % 2 == 0) ? 'light-background' : 'primary-background');
                    ?>
                        <div class="col col-background col-12 <?php echo (count($niveles_array) > 1) ? 'col-md-6' : ''; ?> <?php echo $background_class; ?>">
                            <div class="container py-4">
                                <div class="row">
                                    <div class="col-12">
                                        <p class="mb-0 d-flex align-items-center">
                                            <img src="<?php echo get_site_url(); ?>/img/adorno_oferta_educativa.png" alt="Adorno oferta educativa" class="img-fluid decorator me-3">
                                            <?php echo $nivel; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php 
        endif;
    endif; 
    ?>
</div>