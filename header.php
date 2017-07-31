<?php
/*
 * project   : OD Base
 * file name : header-topmenu.php
 * created   : 2017/06/20
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
<div class="site-header-bar">
	<?php
		if ( has_nav_menu( 'header-bar' ) ){
			wp_nav_menu( array(
				'theme_location' => 'header-bar',
				'menu_id' => '',
				'menu_class' => 'site-header-bar-menu',
				'container_class' => 'container site-header-bar__inner',
				'depth' => 1,
			) );
		}
	?>
</div>
<header class="site-header">
	<div class="container">
		<div class="site-header__branding">
			<?php if ( is_home() || is_front_page() ): ?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else: ?>
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
		</div>
		<nav class="site-header__menu">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_class' => 'oleinpress-menu',
					'depth' => 0,
				) );
			?>
		</nav>
	</div>
</header>
<?php do_action( 'oleinpress_breadcrumbs' ); ?>
<div id="content" class="site-content">