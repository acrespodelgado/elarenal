<div id="oferta-grados-salidas" class="mt-3 mb-5">
    <div class="container text-center">
        <div class="row">
            <div class="col col-12">
                <h3>Salidas <span class="accent">Profesionales</span></h3>
                <?php 
                if(get_field('salidas_profesionales')) : ?>
                    <p><?php echo get_field('salidas_profesionales'); ?></p>
                <?php else : ?>
                    <p>No se han especificado salidas profesionales para este grado.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>