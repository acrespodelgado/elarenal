<div id="departamento-portada">
    <div class="container">
        <div class="row">
            <div class="col col-12">
                <div class="d-flex flex-row align-items-center">
                    <img src="<?php echo get_site_url(); ?>/img/decorator_grado_departamento.png" alt="Decorador título" class="img-fluid decorator">                    
                    <h1 class="ms-3"><?php echo get_the_title(); ?></h1>
                </div>
            </div>
            <?php if (get_field('portada')) : ?>
                <div class="col col-12 my-5">
                    <div class="img-container">
                        <img class="img-fluid w-100 banner" src="<?php the_field('portada')['url']; ?>" alt="<?php the_title(); ?>">
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>