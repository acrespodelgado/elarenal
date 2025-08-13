<?php
/**
 * Template Name: Page - Proyecto Funcional
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

<div id="proyecto-funcional">
	
	<div class="wrapper" id="<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?>">

		<div class="<?php echo esc_attr( $container ); ?>" id="content">

			<div class="row">

				<div class="col-md-12 content-area" id="primary">

					<main class="site-main" id="main" role="main">
					
					<?php include get_stylesheet_directory() . '/patterns/proyecto-funcional/texto-presentacion.php'; ?>
					<?php include get_stylesheet_directory() . '/patterns/proyecto-funcional/planes.php'; ?>

					</main>

				</div><!-- #primary -->

			</div><!-- .row -->

		</div><!-- #content -->

	</div><!-- #<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?> -->
</div>

<?php
get_footer();
