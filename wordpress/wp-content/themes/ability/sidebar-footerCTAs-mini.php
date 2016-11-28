<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */
?>


<section class="additional-footer additional-footer--mini">
	<?php if ( is_active_sidebar( 'footer-ctas-mini-sidebar' )  ) : ?>

			<?php dynamic_sidebar( 'footer-ctas-mini-sidebar' ); ?>

	<?php endif; ?>

</section>


