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
                                            <?php
                                                $titulo_lower = strtolower($titulo);
                                                $slug_titulo = sanitize_title($titulo);

                                                // Detectar tipo de grado y generar enlace
                                                if (stripos($titulo_lower, 'basico') !== false || stripos($titulo_lower, 'básico') !== false) {
                                                    $slug_enlace = str_replace(['grado-basico-', 'grado-básico-'], 'cfgb-', $slug_titulo);
                                                    echo '<a href="' . get_site_url() . '/grado/' . $slug_enlace . '"><b class="accent">' . esc_html($titulo) . '</b></a>';
                                                } elseif (stripos($titulo_lower, 'medio') !== false) {
                                                    $slug_enlace = str_replace('grado-medio-', 'cfgm-', $slug_titulo);
                                                    echo '<a href="' . get_site_url() . '/grado/' . $slug_enlace . '"><b class="accent">' . esc_html($titulo) . '</b></a>';
                                                } elseif (stripos($titulo_lower, 'superior') !== false) {
                                                    $slug_enlace = str_replace('grado-superior-', 'cfgs-', $slug_titulo);
                                                    echo '<a href="' . get_site_url() . '/grado/' . $slug_enlace . '"><b class="accent">' . esc_html($titulo) . '</b></a>';
                                                } elseif (stripos($titulo_lower, 'especializacion') !== false || stripos($titulo_lower, 'especialización') !== false) {
                                                    $slug_enlace = $slug_titulo;
                                                    echo '<a href="' . get_site_url() . '/grado/' . $slug_enlace . '"><b class="accent">' . esc_html($titulo) . '</b></a>';
                                                } else {
                                                    echo '<b class="accent">' . esc_html($titulo) . '</b>';
                                                }
                                            ?>
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