<div id="departamento-contacto">
    <div class="container">
        <div class="row">
            <div class="col col-12">
                <h2>Contacto</h2>
                <p>A continuación se ofrecen los datos de contacto del Departamento.</p>
                <?php if(get_field('contacto')) : ?>
                    <h3><a class="accent" href="mailto:<?php the_field('contacto'); ?>"><?php the_field('contacto'); ?></a></h3>
                <?php else : ?>
                    <h4 class="accent">No se ha proporcionado un correo electrónico de contacto para este departamento.</h4>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>