<div id="oferta-grado-portada">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-md-8">
                <div class="d-flex align-items-center">
                    <img src="<?php echo get_site_url(); ?>/img/decorator_grado_titulo.png" alt="Decorador título" class="img-fluid decorator">
                    <div class="ms-3 d-flex flex-column">
                        <?php 
                        $field = get_field_object('tipo_grado');
                        if($field && $field['value']) : 
                        ?>
                            <span class="accent"><?php echo $field['choices'][$field['value']]; ?></span>
                        <?php endif; ?>
                        <h1><?php echo get_the_title(); ?></h1>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-md-4">
                <div class="d-flex align-items-center">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <div class="ms-3 d-flex flex-column">
                        <?php if(get_field('duracion_estudio')) : ?>
                            <span class="uppercase">Duración del estudio</span>
                            <p><?php the_field('duracion_estudio'); ?></p>
                        <?php else : ?>
                            <span class="uppercase">Duración del estudio</span>
                            <p>No se ha especificado la duración del estudio.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0 mt-5 mb-3">
        <div class="row">
            <div class="col col-12">
                <?php if(get_field('slider')) : ?>
                    <?php echo do_shortcode(get_field('slider')); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col col-12 text-center big">
                <?php echo the_content(); ?>
            </div>
        </div>
    </div>
</div>