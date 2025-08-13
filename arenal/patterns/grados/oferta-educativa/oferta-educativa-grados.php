<div id="oferta-educativa-grado">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?php 
                    $grado_name = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

                    global $paged;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'grado',
                        'posts_per_page' => 1,
                        'name' => $grado_name,
                    ); ?>

                    <?php
                    $query = new WP_Query( $args );
                    if($query->have_posts()) : 
                        while($query->have_posts()) : 
                            $query->the_post();   
                            include get_stylesheet_directory() . '/patterns/grados/oferta-educativa/portada.php';
                            include get_stylesheet_directory() . '/patterns/grados/oferta-educativa/requisitos.php';
                            include get_stylesheet_directory() . '/patterns/grados/oferta-educativa/voy-a-aprender.php';
                            include get_stylesheet_directory() . '/patterns/grados/oferta-educativa/modulos.php';  
                            include get_stylesheet_directory() . '/patterns/grados/oferta-educativa/salidas.php';
                            include get_stylesheet_directory() . '/patterns/grados/oferta-educativa/trabajo.php';
                            include get_stylesheet_directory() . '/patterns/grados/oferta-educativa/niveles.php';
                            include get_stylesheet_directory() . '/patterns/grados/oferta-educativa/seguir-estudiando.php';
                            include get_stylesheet_directory() . '/patterns/grados/oferta-educativa/carnes.php';
                            include get_stylesheet_directory() . '/patterns/grados/oferta-educativa/ambito-universitario.php';
                            include get_stylesheet_directory() . '/patterns/grados/oferta-educativa/mas-info.php';
                    endwhile; ?>

                    <?php
                        wp_reset_postdata();
                    endif;
                ?>
            </div>
        </div>
    </div>
</div>