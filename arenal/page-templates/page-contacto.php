<?php
/**
 * Template Name: Page - Contacto
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

				<?php include get_stylesheet_directory() . '/patterns/contacto/cabecera-contacto.php'; ?>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3174.0414921325273!2d-5.927414123075451!3d37.29415043969858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1270438d4d830d%3A0xb75bc8098ff5106!2sCPIFP%20El%20Arenal!5e0!3m2!1ses!2ses!4v1754857198161!5m2!1ses!2ses" width="2560" height="500" style="border:0;" allowfullscreen="yes" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-100 map"></iframe>
				<?php include get_stylesheet_directory() . '/patterns/formularios/formulario.php'; ?>
				<?php include get_stylesheet_directory() . '/patterns/logos/partners.php'; ?>

				</main>

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?> -->

<?php
get_footer();
