<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */
?>

<?php if ( is_active_sidebar( 'right-hand-rail-sidebar' )  ) : ?>
	<aside class="site-rail-menu" role="complementary">
		<a class="site-rail-menu--close">Close</a>
		<div class="scrolling">

		<?php dynamic_sidebar( 'right-hand-rail-sidebar' ); ?>

		</div>
	</aside>
<?php endif; ?>


