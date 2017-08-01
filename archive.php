<?php
/**
 * 
 * OleinPress
 *
 * file name : archive.php
 *
 * created   : 2017/08/01
 *
 * @package OleinPress
 */
?>
<?php get_header(); ?>
<div class="container container_content">
	<main id="primary" class="content-area">
		<?php if ( have_posts() ) : while ( have_posts() ): the_post(); ?>
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
				</header>
				<div class="entry-excerpt">
					<?php the_excerpt(); ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'oleinpress' ),
							'after'  => '</div>',
						) );
					?>
				</div>
			</div>
		</article>
		<?php
			endwhile;
			
			the_posts_navigation( array(
				'prev_text' => esc_html__( 'Older', 'oleinpress' ),
				'next_text' => esc_html__( 'Newer', 'oleinpress' ),
			));
			
			endif;
		?>
	</main>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>