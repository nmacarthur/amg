<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Merriweather:300,400,700" rel="stylesheet">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

<div class="loader__container">
	<div class="loading">

	</div>
	</div>
</div>

	<!-- ******************* The Navbar Area ******************* -->
<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-lg">

		<?php if ( 'container' == $container ) : ?>
			<div class="container" >
		<?php endif; ?>

				<nav class="col-12 menu" data-animation="menu__animation">
					<div class="logo">
					<?php 

						$logo = get_field('header_logo', 'option');
						$link = get_field('logo_link', 'option');
						if( $logo ): ?>
							<a href="<?php echo $link ?>" ><img class="logo__img" src="<?php echo $logo['url']; ?>"/></a>
						<?php endif; ?>
						</div>

						<div class="menu__content">
				
						<?php wp_nav_menu(
							array(
								'theme_location'  => 'header-menu',
								'container_class' => 'collapse navbar-collapse',
								'container_id'    => 'navbarNavDropdown',
								'menu_class'      => 'navbar-nav links',
								'fallback_cb'     => '',
								'menu_id'         => 'main-menu',
								'walker'          => new understrap_WP_Bootstrap_Navwalker(),
							)
						); ?>
						
					</div>
					<div class="toggler-container">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"><i class="far fa-bars"></i></span>
						</button>
					</div>

				</nav>
						
			

				<!-- The WordPress Menu goes here -->
				
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->
