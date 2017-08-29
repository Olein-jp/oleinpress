<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link http://olein-design.com
 * @author Koji Kuno
 * @package oleinpress
 * @license GPLv2 or later
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'oleinpress' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<div class="site-branding__inner container">
				<?php
				if ( has_custom_logo() ) {
					the_custom_logo();
				} else {
					if ( is_front_page() && is_home() ) :
				?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
					endif;
				}
				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) :
				?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->
	<nav id="site-navigation" class="main-navigation">
		<div class="main-navigation__inner container">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'oleinpress' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</div>
	</nav><!-- #site-navigation -->

	<div class="breadcrumb">
		<div class="breadcrumb__inner container">
			<?php oleinpress_breadcrumbs(); ?>
		</div>
	</div>

	<div id="content" class="site-content">
		<div class="site-content__inner container">
