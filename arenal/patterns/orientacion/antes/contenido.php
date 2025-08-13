<div id="orientacion-antes-contenido">

    <div class="container-fluid">
        <div class="row g-0 banner">
            <div class="col-12 col-lg-6 primary-background">
                <div class="p-content">
                    <h3>No te dejes influenciar por opiniones externas.</h3>
                    <p>Explora tus intereses, descubre tus talentos y traza un rumbo que te permita desarrollarte plenamente.</p>
                    <h3 class="mt-4">Oferta de ciclos formativos y notas de corte</h3>
                    <p>La oferta de los diferentes ciclos se publica cada curso, alrededor del mes de mayo: aquí podrás consultarla y ver las notas de corte. Recuerda que la solicitud se realiza en el mes de junio.</p>
                </div>
            </div>

            <div class="col-12 col-lg-6 img-background">
                <img src="<?php echo get_site_url(); ?>/img/orientacion_antes_right.png" alt="Orientación antes" class="img-fluid w-100 h-100 object-fit-cover">
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Accede a <span class="accent">nuestra oferta</h1>
            </div>
        </div>
    </div>
    
    <?php
    $grado_types = array(
        array('basico', 'medio'),
        array('superior', 'curso-especializacion')
    );

    foreach($grado_types as $row_types) : ?>
        <div class="container-fluid">
            <div class="row g-0">
            <?php foreach($row_types as $index => $tipo) :
                    $args = array(
                        'post_type' => 'grado',
                        'posts_per_page' => -1,
                        'orderby' => 'title',
                        'order' => 'ASC',
                        'meta_query' => array(
                            array(
                                'key' => 'tipo_grado',
                                'value' => $tipo,
                                'compare' => '='
                            )
                        )
                    );
                    
                    $query = new WP_Query($args);
                    $col_number = $index + 1;
                    if($tipo == 'superior') $col_number = 3;
                    if($tipo == 'curso-especializacion') {
                        $col_number = 4;
                        $show_extra_info = true;
                    }
                ?>
                    <div class="col-12 col-lg-6 col-grado col-grado-<?php echo $col_number; ?>">
                        <div class="p-content">
                            <?php
                            $grado_titles = array(
                                'basico' => 'Grados Básicos',
                                'medio' => 'Grados Medios',
                                'superior' => 'Grados Superiores',
                                'curso-especializacion' => 'Cursos de Especialización'
                            );
                            ?>
                            <h4><?php echo $grado_titles[$tipo]; ?></h4>
                            <?php if($query->have_posts()) : ?>
                                <ul class="list-unstyled">
                                    <?php while($query->have_posts()) : $query->the_post(); ?>
                                        <li>
                                            <img src="<?php echo get_site_url(); ?>/img/adorno_oferta_educativa.png" alt="Adorno" class="me-4">
                                            <a href="<?php echo get_site_url() . '/' . sanitize_title(get_the_title()); ?>"><?php echo get_the_title(); ?></a>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; 
                            wp_reset_postdata(); ?>
                            <?php if(isset($show_extra_info) && $show_extra_info) : ?>
                                <div class="extra-info mt-5">
                                    <div class="info-box mb-4">
                                        <h4>Acreditación de competencias</h4>
                                        <p>En el CPIFP El Arenal, impartimos Grados C, Grados D y Grados E.</p>
                                        <p>Los certificados profesionales (Grados C), son títulos oficiales expedidos por el Ministerio de Educación, Formación Profesional y Deportes o en su caso, por las CCAA, que acreditan las competencias profesionales adquiridas.</p>
                                    </div>

                                    <hr class="border-accent my-4">

                                    <div class="info-box">
                                        <h4>Certificados profesionales</h4>
                                        <p>Si tienes una experiencia laboral de al menos 3 años o un mínimo de formación de 300 horas, puedes obtener el reconocimiento oficial de tus competencias profesionales. Y así aumentar tus posibilidades de encontrar empleo, mejorar tus condiciones laborales y seguir formándote.</p>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center align-items-center gap-3">
                    <a href="https://www.juntadeandalucia.es/secretariavirtual/consultas/#FORM_PROF" target="_blank" rel="nofollow" class="btn btn-accent">OFERTA CICLOS EDUCATIVOS ANDALUCÍA <i class="fa fa-long-arrow-right"></i></a>
                    <a href="https://www.juntadeandalucia.es/educacion/portales/web/formacion-profesional-andaluza/orientacion" target="_blank" rel="nofollow" class="btn btn-accent">TODO SOBRE FP <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>