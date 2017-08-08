<?php
/**
 * 
 * OleinPress
 *
 * file name : header.php
 *
 * created   : 2017/08/01
 *
 * @package OleinPress
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
	<a class="menu-trigger" href="#">
	  <span></span>
	  <span></span>
	  <span></span>
	</a>
	<script>
		jQuery(function($){
			$('.menu-trigger').click(function(){
				$('.oleinpress-menu').fadeToggle(400);
				$('.menu-trigger').toggleClass('active');
			});
		});
	</script>
	<div class="container">
		<div class="site-header__branding">
			<?php if ( function_exists( 'the_custom_logo' ) ) : ?>
				<?php if ( is_home() || is_front_page() ): ?>
					<h1 class="site-title_img"><?php the_custom_logo(); ?></h1>
				<?php else: ?>
					<p class="site-title_img"><?php the_custom_logo(); ?></p>
				<?php endif; ?>
			<?php else: ?>
				<?php if ( is_home() || is_front_page() ): ?>
					<h1 class="site-title_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else: ?>
					<p class="site-title_text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif; ?>
			<?php endif; ?>
		</div>
		<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container' => 'nav',
				'container_class' => 'site-header__menu',
				'menu_id' => 'oleinpress-menu',
				'menu_class' => 'oleinpress-menu',
				'depth' => 0,
			) );
		?>
	</div>
</header>
<?php do_action( 'oleinpress_breadcrumbs' ); ?>
<div id="content" class="site-content">