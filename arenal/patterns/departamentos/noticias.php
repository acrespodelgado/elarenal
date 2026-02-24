<div id="noticias">
    <div class="container p-sm-20">
        <div class="row">
            <div class="col-12">
                <h2>Noticias relacionadas con el departamento</h2>
                <p>Conoce la información de <span class="accent">última hora</span> relacionado con el <?php echo get_the_title(); ?></p>
                <div class="row">
                <?php 

                    global $paged;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $posts_per_page = 9;

                    $slug = get_post_field('post_name', get_post());
                    $tipo_departamento = '';

                    if (stripos($slug, 'electricidad') !== false) :
                        $tipo_departamento = 'electricidad';
                    elseif (stripos($slug, 'instalacion') !== false) :
                        $tipo_departamento = 'instalacion';
                    elseif (stripos($slug, 'mecanica') !== false) :
                        $tipo_departamento = 'mecanica';
                    elseif (stripos($slug, 'edificacion') !== false) :
                        $tipo_departamento = 'edificacion';
                    elseif (stripos($slug, 'seguridad') !== false) :
                        $tipo_departamento = 'seguridad';
                    elseif (stripos($slug, 'orientacion') !== false) :
                        $tipo_departamento = 'orientacion';
                    elseif (stripos($slug, 'calidad') !== false) :
                        $tipo_departamento = 'calidad';
                    elseif (stripos($slug, 'relaciones') !== false) :
                        $tipo_departamento = 'relaciones';
                    elseif (stripos($slug, 'acreditaciones') !== false) :
                        $tipo_departamento = 'acreditaciones';
                    else :
                        $tipo_departamento = 'generico';
                    endif;
                    
                    $args = array(
                        'post_type' => 'noticia-departamento',
                        'posts_per_page' => $posts_per_page,
                        'paged' => $paged,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'meta_query' => array(
                            'relation' => 'OR',
                            array(
                                'key' => 'departamento',
                                'value' => $tipo_departamento,
                                'compare' => 'LIKE'
                            ),
                            array(
                                'key'     => 'departamento',
                                'value'   => 'generico',
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
                        <?php endwhile;
                        wp_reset_postdata();
                    else : ?>
                        <div class="col col-12 my-5 p-0">
                            <h4><span class="accent"><b>No se han encontrado noticias</b></span> relacionadas con este departamento.</h4>
                        </div> 
                    <?php endif; ?>
                </div>

                <div class="text-center mt-4">
                    <a href="<?php echo get_site_url(); ?>/noticias" class="btn btn-primary">Ver todas las noticias <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>