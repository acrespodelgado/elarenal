<?php
/**
 * Header Navbar (bootstrap5)
 *
 * @package Understrap
 * @since 1.1.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<div id="pre-navbar" class="fixed-top">
	<div class="container-fluid d-flex justify-content-between align-items-center">
		<div class="row">
			<div class="col col-12">
				<ul class="list-unstyled">
					<li><a href="tel:+ 34 955 62 25 13">+ 34 955 62 25 13</a></li>
					<li><i class="fa fa-square"></i></li>
					<li><a href="mailto:info@fpelarenal.es">info@fpelarenal.es</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<nav id="main-nav" class="navbar navbar-expand-md fixed-top" aria-labelledby="main-nav-label">

	<h2 id="main-nav-label" class="screen-reader-text">
		<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
	</h2>

	<div class="<?php echo esc_attr( $container ); ?>">

		<!-- Your site branding in the menu -->
		<?php get_template_part( 'global-templates/navbar-branding' ); ?>

		<button class="btn-floating hamburger hamburger--collapse navbar-toggler" type="button" id="openNav" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>" data-bs-toggle="collapse"
		data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</button>

		<!-- The WordPress Menu goes here -->
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'container_class' => 'collapse navbar-collapse',
				'container_id'    => 'navbarNavDropdown',
				'menu_class'      => 'navbar-nav ms-auto',
				'fallback_cb'     => '',
				'menu_id'         => 'main-menu',
				'depth'           => 2,
				'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
			)
		);
		?>

	</div><!-- .container(-fluid) -->

</nav><!-- #main-nav -->
