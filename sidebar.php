<?php
/**
 * 
 * OleinPress
 *
 * file name : sidebar.php
 *
 * created   : 2017/08/01
 *
 * @package OleinPress
 */
?>
<aside id="secondary" class="sidebar" role="complementary">
	<?php if ( ! is_active_sidebar( 'sidebar-1' ) ){ return; } ?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>