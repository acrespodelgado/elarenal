<?php
/**
 * Template Name: Page - Grados
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}

$wrapper_id = 'full-width-page-wrapper';
if ( is_page_template( 'page-templates/no-title.php' ) ) {
	$wrapper_id = 'no-title-page-wrapper';
}
?>

<div class="wrapper" id="<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?>">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
				<div id="grado-slider">
					<?php echo do_shortcode('[smartslider3 slider="3"]'); ?>
					<h1><?php echo get_the_title(); ?></h1>
				</div>
				<div id="grado-background">
					<img src="<?php echo get_site_url();?>/img/fondo_noticia_1.png" class="absolute right img-responsive" alt="Decorador grado 1">
					<?php include get_stylesheet_directory() . '/patterns/grados/grados.php'; ?>
					<img src="<?php echo get_site_url();?>/img/fondo_noticia_2.png" class="absolute left img-responsive" alt="Decorador grado 2">
				</div>	
                <?php include get_stylesheet_directory() . '/patterns/opiniones/opiniones.php'; ?>
                <?php include get_stylesheet_directory() . '/patterns/formularios/formulario.php'; ?>
                <?php include get_stylesheet_directory() . '/patterns/noticia/noticias-actualidad.php'; ?>

				</main>

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?> -->

<?php
get_footer();
