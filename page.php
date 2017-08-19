<?php
/**
 *
 * OleinPress
 *
 * file name : page.php
 *
 * created   : 2017/08/01
 *
 * @package OleinPress
 */
?>
<?php get_header(); ?>
	<main id="primary" class="content-area">
		<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		<article id="post-<?php the_id(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php if ( has_post_thumbnail() ) : ?>
				<figure class="entry-thumbnail">
					<?php the_post_thumbnail(); ?>
				</figure>
				<?php endif; ?>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</article>
		<?php
			endwhile;
			the_post_navigation();
		?>
	</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
