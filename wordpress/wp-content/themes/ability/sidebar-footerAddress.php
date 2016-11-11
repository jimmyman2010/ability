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

		<!--div class="personal-column for-students">
			<h3>FOR STUDENTS</h3>
			<ul class="nav">
				<li class="menu-item">
					<a href="#">Course Finder</a>
				</li>
				<li class="menu-item">
					<a href="#">Free Cambridge Seminars</a>
				</li>
				<li class="menu-item">
					<a href="#">Activities Calendar</a>
				</li>
				<li class="menu-item">
					<a href="#">Find an Agent</a>
				</li>
				<li class="menu-item">
					<a href="#">Job Club</a>
				</li>
				<li class="menu-item">
					<a href="#">Free English Test</a>
				</li>
				<li class="menu-item">
					<a href="#">Course Start Dates</a>
				</li>
				<li class="menu-item">
					<a href="#">Student Blog</a>
				</li>
			</ul>
		</div>
		<div class="personal-column for-agents">
			<h3>FOR AGENTS</h3>
			<ul class="nav">
				<li class="menu-item">
					<a href="#">Brochure</a>
				</li>
				<li class="menu-item"></li>
				<li class="menu-item">
					<a href="#">Enrolment Form</a>
				</li>
				<li class="menu-item"></li>
				<li class="menu-item">
					<a href="#">Book a Placement Test</a>
				</li>
				<li class="menu-item"></li>
				<li class="menu-item">
					<a href="#">Latest News</a>
				</li>
			</ul>
		</div-->
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


