<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package velociraptor
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light site-nav p-0 bg-white border-bottom sticky-tops high-shadow">
		<div class="container">
			<a class="navbar-brand p-3" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php bloginfo( 'name' ); ?>
			</a>
			<button class="navbar-toggler navbar-toggler-right mr-3" type="button" data-toggle="collapse" data-target="#navbarResponsive"
			 aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<?php
				wp_nav_menu( array(
					'theme_location'	=> 'menu-1',
					'menu_id'			=> 'primary-menu',
					'menu_class'		=> 'navbar-nav',
					'container_class'	=> 'collapse navbar-collapse',
					'container_id'		=> 'navbarResponsive',
				) );
			?>
		</div>
	</nav>


	<div id="page" class="site">
		<a class="skip-link sr-only" href="#content">
			<?php esc_html_e( 'Skip to content', 'velociraptor' ); ?>
		</a>

		<header id="masthead" class="site-header"  style="display: none">
			<div class="site-branding">
				<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				</h1>
				<?php
			else :
				?>
				<p class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				</p>
				<?php
			endif;
			$velociraptor_description = get_bloginfo( 'description', 'display' );
			if ( $velociraptor_description || is_customize_preview() ) :
				?>
				<p class="site-description">
					<?php echo $velociraptor_description; /* WPCS: xss ok. */ ?>
				</p>
				<?php endif; ?>
			</div>
			<!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<?php esc_html_e( 'Primary Menu', 'velociraptor' ); ?>
				</button>
				<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
			</nav>
			<!-- #site-navigation -->
		</header>
		<!-- #masthead -->

		<div id="content" class="site-content">