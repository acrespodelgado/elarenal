<div id="oferta-educativa">
    <div class="container-fluid">
        <div class="row">
            <div class="col col-12 text-center">
                <img src="<?php echo get_site_url(); ?>/img/separator.png" class="img-fluid separator" alt="Separador">
            </div>
        </div>
    </div>

    <?php
    $args = array(
        'post_type' => 'oferta-educativa',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    );
    $query = new WP_Query($args);
    $first = true;
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col col-12 text-center">
                <?php
                $uri = $_SERVER['REQUEST_URI'];
                if ( strpos($uri, 'presentacion') !== false ) : ?>
                    <h3><span class="accent">Actualmente,</span> nuestra oferta formativa es:</h3>
                <?php else: ?>
                    <h3>Nuestra <span class="accent">oferta educativa</span></h3>
                    <p>Elige tu rama profesional para ver nuestra oferta educativa completa</p>
                <?php endif; ?>
            </div>
        </div>
    </div>



    <div class="container mt-4">
        <div class="row">
            <div class="col col-12 text-center">
                <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <button class="btn btn-outline-primary <?php echo $first ? 'active' : ''; ?>" data-target="#oferta-<?php echo get_the_ID(); ?>">
                            <?php the_title(); ?>
                        </button>
                    <?php $first = false; endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <?php
        $query->rewind_posts();
        $first = true;
        while ($query->have_posts()) : $query->the_post();
            $imagen = get_the_post_thumbnail_url(get_the_ID(), 'large');
            $grados_text = get_field('grados');
            $grados_por_tipo = [];

            if ($grados_text) :
                $lineas = explode("\n", $grados_text);
                foreach ($lineas as $linea) :
                    if (strpos($linea, ':') === false) continue;
                    list($tipo, $grados_str) = explode(':', $linea, 2);
                    $tipo = trim($tipo);
                    $grados = array_filter(array_map('trim', explode('-', $grados_str)));
                    if (!empty($grados)) :
                        $grados_por_tipo[$tipo] = $grados;
                    endif;
                endforeach;
            endif;
        ?>
            <div class="oferta-contenido <?php echo $first ? '' : 'd-none'; ?>" id="oferta-<?php echo get_the_ID(); ?>">
                <div class="row g-0 p-sm-20 p-content">
                    <!-- IZQUIERDA -->
                    <div class="col col-12 col-xl-6 py-5 background">
                        <div class="px-lg-5">
                            <h4><?php echo get_the_title(); ?></h4>
                            <?php echo get_the_content(); ?>

                            <?php foreach ($grados_por_tipo as $tipo => $grados): ?>
                                <h5><?php echo ucfirst($tipo); ?></h5>
                                <ul class="list-unstyled">
                                    <?php foreach ($grados as $grado): ?>
                                        <li class="d-flex align-items-center mb-2">
                                            <img src="<?php echo get_site_url(); ?>/img/adorno_oferta_educativa.png" alt="Adorno" class="me-4">
                                            <p><?php echo esc_html($grado); ?></p>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- DERECHA -->
                    <div class="col col-12 col-xl-6">
                        <img src="<?php echo esc_url($imagen); ?>" alt="<?php the_title(); ?>" class="img-fluid w-100 object-fit-cover">
                    </div>
                </div>
            </div>
        <?php 
            $first = false; 
        endwhile; 
        wp_reset_postdata();
        ?>
    </div>
</div>
