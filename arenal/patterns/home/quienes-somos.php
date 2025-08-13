<?php
    $faqs = [
        [
            'pregunta' => 'Oferta educativa diversificada',
            'respuesta' => 'Impartimos ciclos formativos en áreas como Instalación y cursos de especialización como Fabricación Aditiva.'
        ],
        [
            'pregunta' => 'Participación en programas Erasmus',
            'respuesta' => 'Impartimos ciclos formativos en áreas como Instalación y cursos de especialización como Fabricación Aditiva.'
        ],
        [
            'pregunta' => 'Proyectos innovadores',
            'respuesta' => 'Impartimos ciclos formativos en áreas como Instalación y cursos de especialización como Fabricación Aditiva.'
        ],
        [
            'pregunta' => 'Conexión con el sector empresarial',
            'respuesta' => 'Impartimos ciclos formativos en áreas como Instalación y cursos de especialización como Fabricación Aditiva.'
        ]
    ];
?>

<div id="quienes-somos">
    <div class="container p-xs-20">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h3>¿Quiénes <span class="accent">somos?</h3>
                <p>En el Centro Público Integrado de Formación Profesional El Arenal, formamos a profesionales preparados para los retos del presente y del futuro.</p>
                <p>Nuestro compromiso es proporcionar una formación de calidad, centrada en el aprendizaje práctico, la innovación y la empleabilidad.</p>
                <p>Apostamos por una enseñanza cercana, actualizada y conectada con el mundo laboral y empresarial.</p>
                <?php foreach($faqs as $faq): ?>
                    <div class="col-12 faq-item mb-3">
                        <div class="faq-header">
                            <i class="fa fa-long-arrow-right"></i>
                            <h5><?php echo htmlspecialchars($faq['pregunta']); ?></h5>
                        </div>
                        <div class="faq-content">
                            <p><?php echo htmlspecialchars($faq['respuesta']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-12 col-lg-6">
                <img src="<?php echo get_site_url();?>/img/quienes_somos.png" alt="Quiénes somos" class="img-fluid">
            </div>
        </div>
    </div>
</div>


