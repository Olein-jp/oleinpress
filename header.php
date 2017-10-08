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
	<button class="menu-toggle">
		<span class="top"></span>
		<span class="middle"></span>
		<span class="bottom"></span>
	</button>
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
	<?php if ( get_header_image() ) : ?>
	<div class="custom-header">
		<!-- <div class="container"> -->
			<?php the_header_image_tag(); ?>
		<!-- </div> -->
	</div>
	<?php endif; ?>
	<?php if ( has_nav_menu( 'header-menu' ) ) : ?>
	<nav id="site-navigation" class="main-navigation">
		<div class="main-navigation__inner container">
			<nav id="header-menu">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'header-menu',
						'container'      => '',
						'menu_class'     => '',
						'fallback_cb'    => 'wp_page_menu',
						'items_wrap'     => '<ul id="header-menu-container">%3$s</ul>',
					) );
				?>
			</nav>
		</div>
	</nav><!-- #site-navigation -->
	<?php endif; ?>

	<div id="content" class="site-content">
		<div class="site-content__inner container">
