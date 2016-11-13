<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */
?>


<section class="additional-footer">
	<?php if ( is_active_sidebar( 'footer-ctas-sidebar' )  ) : ?>

			<?php dynamic_sidebar( 'footer-ctas-sidebar' ); ?>

	<?php endif; ?>

</section>


