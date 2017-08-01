<?php
/**
 * 
 * OleinPress
 *
 * file name : search.php
 *
 * created   : 2017/08/01
 *
 * @package OleinPress
 */
?>
<?php get_header(); ?>
	<main id="primary" class="content-area">
		<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<h1 class="page-title">
				<?php printf( esc_html__( 'Search result of %s', 'oleinpress' ), '<span>' . get_search_query() . '</span>' ); ?>
			</h1>
		</header>
		<?php while ( have_posts() ): the_post(); ?>
		<article id="post-<?php the_id(); ?>" <?php post_class( 'list-item' ); ?>>
			<?php if ( has_post_thumbnail() ): ?>
			<figure class="entry-thumbnail">
				<a href="<?php the_permalink(); ?>" rel="bookmark">
				<?php the_post_thumbnail( 'olenpress-blog-thumbnail' ); ?>
				</a>
			</figure>
			<?php endif; ?>
			<div class="list-item-content">
				<div class="entry-meta">
					<?php the_category(' / '); ?>
				</div>
				<header class="entry-header">
					<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					<?php oleinpress_posted_on() ?>
				</header>
				<div class="entry-excerpt">
					<?php the_excerpt(); ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">',
							'after'  => '</div>',
							'link_before' => '<span class="page-links-item">',
							'link_after' => '</span>',
						) );
					?>
				</div>
			</div>
		</article>
		<?php
			endwhile;

			the_posts_pagination( array(
				'prev_text' => esc_html__( '<', 'oleinpress' ),
				'next_text' => esc_html__( '>', 'oleinpress' ),
			) );
			
			endif;
		?>
	</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>