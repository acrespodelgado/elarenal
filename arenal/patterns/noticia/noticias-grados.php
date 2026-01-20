<div id="noticias">
    <div class="container p-sm-20">
        <div class="row">
            <div class="col-12">
                <h3>Noticias <span class="accent">y actualidad</span> sobre <?php echo get_the_title(); ?></h3>
                <p>En esta página encontrarás las últimas noticias sobre nuestros grados.</p>
                <p>Conoce la información de última hora del CPIFP El Arenal, todo relativo al ciclo formativo.</p>
                <div class="row">
                <?php 

                    global $paged;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $posts_per_page = 9;

                    $slug = get_post_field('post_name', get_post());
                    $tipo_grado = '';

                    if (stripos($slug, 'cfgb') !== false) :
                        $tipo_grado = 'basico';
                    elseif (stripos($slug, 'cfgm') !== false) :
                        $tipo_grado = 'medio';
                    elseif (stripos($slug, 'cfgs') !== false) :
                        $tipo_grado = 'superior';
                    elseif (stripos($slug, 'certificados') !== false) :
                        $tipo_grado = 'certificados';
                    elseif (stripos($slug, 'master') !== false || stripos($slug, 'máster') !== false) :
                        $tipo_grado = 'master';
                    elseif (stripos($slug, 'acreditacion') !== false || stripos($slug, 'acreditaciones') !== false) :
                        $tipo_grado = 'acreditacion';
                    endif;
                    
                    $args = array(
                        'post_type' => 'noticia',
                        'posts_per_page' => $posts_per_page,
                        'paged' => $paged,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'meta_query' => array(
                            array(
                                'key' => 'grado',
                                'value' => '"' . $tipo_grado . '"',
                                'compare' => 'LIKE'
                            )
                        )
                    );

                    $query = new WP_Query( $args );
                    if($query->have_posts()) : 
                        while($query->have_posts()) : 
                            $query->the_post(); ?>            
                            <div class="col col-12 col-lg-4 mt-xs-2 mt-3">
                                <div class="noticia">
                                    <a href="<?php echo get_post_permalink(); ?>" title="<?php echo get_the_title(); ?>">
                                        <img class="img-fluid icon" alt="ir" src="<?php echo get_site_url() . '/img/arrow_icon.png'; ?>">
                                        <h4><?php echo get_the_title(); ?></h4>
                                        <?php if(get_field('resumen')) : ?>
                                            <p><?php the_field('resumen'); ?></p>
                                        <?php endif; ?>
                                        <div class="overflow">
                                            <?php echo get_the_post_thumbnail( $post->ID, 'img-responsive' ); ?>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <div class="col col-12 my-5 p-0">
                            <h3><span class="accent">No se han encontrado noticias</span> relacionadas con este grado.</h3>
                        </div> 
                    <?php
                        wp_reset_postdata();
                    endif;
                ?>
                </div>
                <?php
                    /*
                    understrap_pagination( [
                        'current' => $paged,
                        'total'   => $query->max_num_pages,
                    ]);
                    */
                ?> 
                <div class="text-center mt-4">
                    <a href="<?php echo get_site_url(); ?>/noticias" class="btn btn-primary">Ver todas las noticias <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>