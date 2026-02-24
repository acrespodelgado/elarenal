<div id="noticias" class="p-0">
    <div class="container p-0">
        <div class="row">
            <div class="col-12 p-0">
                <h3>Noticias <span class="accent">y actualidad</span></h3>
                <p>Conoce la información de última hora relacionado con EmprendeHer.</p>
                <div class="row">
                <?php 

                    global $paged;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $noticias_page = is_page('noticias');
                    $posts_per_page = $noticias_page ? 12 : 6;
                    
                    $args = array(
                        'post_type' => 'noticia',
                        'posts_per_page' => $posts_per_page,
                        'paged' => $paged,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'meta_query' => array(
                            array(
                                'key'     => 'grado',
                                'value'   => 'emprendeher',
                                'compare' => 'LIKE'
                            )
                        )
                    ); ?>

                    <?php
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

                    <?php
                        wp_reset_postdata();
                    endif;
                ?>
                </div>
                <?php 
                if(!$noticias_page): ?>
                    <div class="text-center mt-4">
                        <a href="<?php echo get_site_url(); ?>/noticias" class="btn btn-primary">Ver más <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                <?php else: 
                    understrap_pagination( [
                        'current' => $paged,
                        'total'   => $query->max_num_pages,
                    ]);
                endif; ?>    
            </div>
        </div>
    </div>
</div>