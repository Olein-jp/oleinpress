<?php
/**
 * 
 * OleinPress
 *
 * file name : 404.php
 *
 * created   : 2017/08/01
 *
 * @package OleinPress
 */
?>
<?php get_header(); ?>
	<main id="primary" class="content-area">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'oleinpress' ); ?></h1>
		</header>
		<section class="error-404">
			<h2><?php esc_html_e( 'Please search below.', 'oleinpress' ); ?></h2>
			<?php
				get_search_form();
				the_widget( 'WP_Widget_Recent_Posts' );
			?>
			<h2><?php esc_html_e( 'Reccomended Category.', 'oleinpress' ); ?></h2>
			<ul>
			<?php
				wp_list_categories( array(
					'orderby'    => 'count',
					'order'      => 'DESC',
					'show_count' => 1,
					'title_li'   => '',
					'number'     => 10,
				) );
			?>
			</ul>
		</section>
	</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>