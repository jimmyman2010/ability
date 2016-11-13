<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */
?>


<section class="personal-network">
	<?php if ( is_active_sidebar( 'footer-menu-sidebar' )  ) : ?>
		<div class="container clearfix">

			<?php dynamic_sidebar( 'footer-menu-sidebar' ); ?>

		</div>
	<?php endif; ?>

</section>


<section class="footer--info">
	<div class="information">
		<?php if ( is_active_sidebar( 'footer-address-sidebar' )  ) : ?>
			<div class="container clearfix">

				<?php dynamic_sidebar( 'footer-address-sidebar' ); ?>

			</div>
		<?php endif; ?>
	</div>
</section>


