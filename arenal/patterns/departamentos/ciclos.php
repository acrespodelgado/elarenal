<div id="departamento-ciclos">
    <div class="container">
        <div class="row">
            <div class="col col-12 my-5">
                <h2 class="mb-3">Ciclos del departamento</h2>
                <?php if($ciclos = get_field('ciclos')) : 
                    $ciclos_array = explode("\n", $ciclos);
                ?>
                    <ul class="list-unstyled">
                        <?php foreach($ciclos_array as $ciclo_item) : ?>
                            <?php if(trim($ciclo_item)) : ?>
                                <?php 
                                    $partes = explode(' : ', trim($ciclo_item), 2);
                                    $titulo = $partes[0];
                                    $descripcion = isset($partes[1]) ? $partes[1] : '';
                                ?>
                                <li>
                                    <p class="d-flex align-items-center">
                                        <img src="<?php echo get_site_url(); ?>/img/adorno_oferta_educativa.png" alt="Adorno oferta educativa" class="img-fluid decorator">
                                        <span class="ms-3">
                                            <b class="accent"><?php echo esc_html($titulo); ?></b>
                                            <?php if($descripcion) : ?>
                                                : <?php echo esc_html($descripcion); ?>
                                            <?php endif; ?>
                                        </span>
                                    </p>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                <?php else : ?>
                    <p>No se han especificado ciclos para este departamento.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>