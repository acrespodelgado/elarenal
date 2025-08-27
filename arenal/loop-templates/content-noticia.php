<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="container">
		<div class="row text-center">
			<div class="col col-12 col-lg-12 mt-5">
				<header class="entry-header pt-md-5">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->
			</div>

			<div class="col col-12 mt-3 mb-5">
				<?php echo get_the_post_thumbnail( $post->ID, 'full img-fluid' ); ?>
			</div>
		</div>
		<div class="row mt-3 mt-md-5">
			<div class="col col-12 col-lg-6">

				<div class="entry-content">
					<?php if(get_field('resumen')) : ?>
						<h2><?php the_field('resumen'); ?></h2>
					<?php endif; ?>
					<?php the_content(); ?>
				</div><!-- .entry-content -->
			
			</div>

			<div class="col-12 col-lg-4 offset-lg-1">
				<div class="d-flex flex-wrap gap-3 mb-4">
					<?php $count = 1; ?>
					<?php while(get_field('imagen_adicional_' . $count)): ?>
							<div class="img-wrapper w-100">
								<img src="<?php echo get_field('imagen_adicional_' . $count)['url']; ?>" alt="Imagen <?php echo $count; ?>" class="img-fluid zoom">
							</div>
						<?php $count++; ?>
					<?php endwhile; ?>
				</div>
			</div>

			<div class="col-12 text-center mt-5">
				<a href="<?php echo site_url('/noticias'); ?>" class="btn btn-primary">Ver todas las noticias</a>
			</div>

		</div>	
	</div>

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
