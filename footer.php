<?php
/*
 * project   : OD Base
 * file name : footer.php
 * created   : 2017/06/16
 */
?>
</div>
<footer class="site-footer">
	<div class="container">
		<?php if ( ! is_active_sidebar( 'footer-left' ) ){ return; } else { ?>
		<div class="site-footer-leftbox">
		<?php dynamic_sidebar( 'footer-left' ); ?>
		</div>
		<?php } ?>
		<?php if ( ! is_active_sidebar( 'footer-right' ) ){ return; } else { ?>
		<div class="site-footer-rightbox">
		<?php dynamic_sidebar( 'footer-right' ); ?>
		</div>
		<?php } ?>
	</div>
	<div class="copyright">
		<p>©Copyright <a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'title' ); ?></a>. All Rights Reserved.</p>
	</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>