<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oleinpress
 */

?>
		</div><!-- .site-content__inner -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-footer__inner container">
			<div class="copyright-bar">
				<?php echo __( 'OleinPress WordPress theme by ', 'oleinpress' ) . '<a href="' . esc_url( __( 'http://olein-design.com', 'oleinpress' ) ) . '">' . __( 'Olein Design', 'oleinpress' ) . '</a>'; ?>
				</p>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
