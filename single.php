<?php
/*
 * project   : OD Base
 * file name : single.php
 * created   : 2017/06/16
 */
?>
<?php get_header(); ?>
<div class="container container_content">
	<main id="primary" class="content-area">
		<?php while ( have_posts() ): the_post(); ?>
		<?php
			// カテゴリー名をリンクなしで取得したい場合
			$cat = get_the_category();
			$cat = $cat[0];
			// 出力はline.23
		?>
		<article id="post-<?php the_id(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></a></h1>
				<div class="entry-meta">
					<?php oleinpress_posted_on(); ?>
				</div>
			</header>
			<?php if ( has_post_thumbnail() ): ?>
			<figure class="entry-thumbnail">
				<?php the_post_thumbnail(); ?>
			</figure>
			<?php endif; ?>
			<div class="entry-content">
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">',
						'after'  => '</div>',
						'link_before' => '<span class="page-links-item">',
						'link_after' => '</span>',
					) );
				?>
			</div>
			<footer class="entry-footer">
				<div class="entry-meta">
					<?php oleinpress_entry_footer(); ?>
				</div>
			</footer>
		</article>
		<?php
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			
			endwhile;
		
			the_post_navigation();
		?>
	</main>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>