<div class="container">
    <div class="row">
        <div class="col-12">
            <h3 class="text-center my-3">Nuestros alumnos <span class="accent">opinan</span></h3>
        </div>
    </div>
</div>

<div id="opiniones">
    <div class="container-fluid p-xs-20">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-5">
                <div id="carouselOpiniones" class="carousel slide" data-bs-ride="carousel" data-bs-wrap="false">
                    <div class="carousel-inner">
                        <?php 
                        $first = true;
                        $args = array(
                            'post_type' => 'opinion',
                            'posts_per_page' => 24,
                            'orderby' => 'date',
                            'order' => 'DESC'
                        ); 

                        $query = new WP_Query($args);
                        if($query->have_posts()) : 
                            while($query->have_posts()) : 
                                $query->the_post(); 
                        ?>
                        <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                            <p class="nombre"><?php echo the_title(); ?></p>
                            <div class="opinion"><?php echo the_content(); ?></div>
                        </div>
                        <?php 
                            $first = false;
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>
                    <button class="btn carousel-control-prev" type="button" data-bs-target="#carouselOpiniones" data-bs-slide="prev">
                        <i class="fa fa-long-arrow-left control"></i>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="btn carousel-control-next" type="button" data-bs-target="#carouselOpiniones" data-bs-slide="next">
                        <i class="fa fa-long-arrow-right control"></i>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
