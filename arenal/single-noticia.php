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

<div class="wrapper mt-5" id="single-wrapper-noticia">

	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'loop-templates/content', 'noticia' );
	endwhile;
	?>

</div><!-- #single-wrapper -->

<?php
get_footer();
