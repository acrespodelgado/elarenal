<div id="grados">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                <?php 
                    $tipo_grado = str_replace('grados-', '', get_post_field( 'post_name', get_post()));

                    global $paged;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'grado',
                        'posts_per_page' => 9,
                        'paged' => $paged,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'meta_query' => array(
                            array(
                                'key' => 'tipo_grado',
                                'value' => $tipo_grado, // "basico", "medio", etc.
                                'compare' => '='
                            )
                        )
                    ); ?>

                    <?php
                    $query = new WP_Query( $args );
                    if($query->have_posts()) : 
                        while($query->have_posts()) : 
                            $query->the_post(); ?>            
                            <div class="col col-12 col-lg-4 mt-xs-2 mt-3">
                                <div class="grado">
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

                    <?php
                        wp_reset_postdata(); ?>
                    <?php else : ?>
                        <div class="col col-12">
                            <h3>No se encontraron grados para este tipo.</h3>
                        </div>
                    <?php endif;
                ?>
                <?php
                    understrap_pagination( [
                        'current' => $paged,
                        'total'   => $query->max_num_pages,
                    ]);
                ?>
                </div>
            </div>
        </div>
    </div>
</div>