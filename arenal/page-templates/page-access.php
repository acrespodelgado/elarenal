<?php
/**
 * Template Name: Page - Access
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

                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="container p-xs-20" id="access">
                        <div class="row">
                            <div class="col col-12">
                                <h1><?php the_title(); ?></h1>
                                <?php if ( post_password_required() ) : ?>
                                    <?php echo get_the_password_form(); ?>
                                <?php else : ?>
                                    <?php the_content(); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                    <?php include get_stylesheet_directory() . '/patterns/contacto/formulario.php'; ?>
                    <?php include get_stylesheet_directory() . '/patterns/logos/partners.php'; ?>
                </main>

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?> -->

<?php
get_footer();
