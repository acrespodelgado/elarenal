<?php
/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">

	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'loop-templates/content', 'grado' );
	endwhile;
	?>

</div><!-- #single-wrapper -->

<?php
get_footer();
