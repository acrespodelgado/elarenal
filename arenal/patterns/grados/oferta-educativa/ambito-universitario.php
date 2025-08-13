<?php if(get_field('ambito_universitario')) :?>
    <div id="oferta-grados-universitario" class="mb-5">
        <div class="container text-center">
            <div class="row">
                <div class="col col-12">
                    <h3>Ámbito de conocimiento <span class="accent">universitario</span></h3>
                    <?php 
                    if($ambitos = get_field('ambito_universitario')) : 
                        $ambitos_array = explode("\n", $ambitos);
                    ?>
                        <ul class="list-unstyled">
                            <?php foreach($ambitos_array as $ambito) : ?>
                                <?php if(trim($ambito)) : ?>
                                    <li><?php echo trim($ambito); ?></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php else : ?>
                        <p>No se ha especificado ámbito universitario para este grado.</p> 
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>