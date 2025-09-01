<?php
/**
 * The template for displaying search results pages
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="search-wrapper">

	<div class="container" id="search-content" tabindex="-1">

		<div class="row">

			<div class="col-md-12 content-area">

				<main class="site-main" id="main">

					<?php if ( have_posts() ) : ?>

						<header class="page-header">

							<?php echo do_shortcode('[smartslider3 slider="7"]'); ?>

							<h1 class="page-title mt-5">
								<?php
								printf(
									/* translators: %s: query term */
									esc_html__( 'Search Results for: %s', 'understrap' ),
									'<span>' . get_search_query() . '</span>'
								);

								?>
								
							</h1>

						</header><!-- .page-header -->

						<div class="search-form">
							<?php get_search_form(); ?>
						</div>

						<?php
						// Loop de posts
						while ( have_posts() ) :
							the_post();

							/*
							* Run the loop for the search to output the results.
							* If you want to overload this in a child theme then include a file
							* called content-search.php and that will be used instead.
							*/
							get_template_part( 'loop-templates/content', 'search' );
						endwhile;
						?>

					<?php else : ?>

						<?php get_template_part( 'loop-templates/content', 'none' ); ?>

					<?php endif; ?>

				</main>

				<?php
				// Display the pagination component.
				understrap_pagination();
			?>

			</div>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #search-wrapper -->

<?php
get_footer();
