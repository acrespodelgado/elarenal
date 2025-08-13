<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">
    <div class="container">
        <footer class="site-footer">
            <div class="row w-100">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="footer-logo">
                            <a href="<?php echo get_site_url();?>" class="d-block mb-3">
                                <img src="<?php echo get_site_url();?>/img/footer_logo.png" class="img-fluid" alt="El Arenal">
                            </a>
                        </div>
                        <div class="footer-social">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="https://www.instagram.com/cpifpelarenal/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.facebook.com/cpifpelarenal/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
			</div>
			<div class="row w-100 align-items-end">
				<div class="col col-12 col-lg-4">
					<p>Centro público integrado de formación profesional</p>
					<p><a href="https://maps.app.goo.gl/U6H6Tugc6DVxcSgMA">Avenida Ramón y Cajal, s/n · 41701 Dos Hermanas (Sevilla)</a></p>
					<ul class="list-unstyled">
						<li><a href="mailto:info@fpelarenal.es">info@fpelarenal.es</a></li>
						<li><a href="mailto:orientacion@fpelarenal.es">orientacion@fpelarenal.es</a></li>
						<li><a href="tel:+34 955 62 25 13 ">+34 955 62 25 13 </a></li>
					</ul>
				</div>

				<div class="col col-12 col-lg-3">
					<h5>Información</h5>
					<ul class="menu">
						<li><a href="<?php echo get_site_url();?>/politica-de-privacidad">Política de privacidad</a></li>
						<li><a href="<?php echo get_site_url();?>/aviso-legal">Aviso Legal</a></li>
						<li><a href="<?php echo get_site_url();?>/politica-de-cookies">Política de cookies</a></li>
						<li><a href="<?php echo get_site_url();?>/secretaria">Secretaría</a></li>
						<li><a href="<?php echo get_site_url();?>/proyecto-funcional">Proyecto Funcional</a></li>
						<li><a href="<?php echo get_site_url();?>/contacto">Contacto</a></li>
					</ul>
				</div>

				<div class="col col-12 col-lg-5">
					<h5>Oferta formativa</h5>
					<ul class="menu">
						<li><a href="<?php echo get_site_url();?>/departamento-de-administracion-y-finanzas">Administración y Finanzas</a></li>
						<li><a href="<?php echo get_site_url();?>/departamento-de-comercio-y-marketing">Comercio y Marketing</a></li>
						<li><a href="<?php echo get_site_url();?>/departamento-de-electricidad-y-electronica">Electricidad y Electrónica</a></li>
						<li><a href="<?php echo get_site_url();?>/departamento-de-mantenimiento-y-servicios-a-la-produccion">Mantenimiento y Servicios a la producción</a></li>
						<li><a href="<?php echo get_site_url();?>/departamento-de-sanidad">Sanidad</a></li>
						<li><a href="<?php echo get_site_url();?>/aula-emprendimiento">Aula de Emprendimiento</a></li>
					</ul>
				</div>
			</div>
		</footer><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

