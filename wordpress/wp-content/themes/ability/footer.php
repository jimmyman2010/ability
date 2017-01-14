<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */
?>


		<footer class="site-footer">



			<?php get_sidebar('footerAddress'); ?>
			<div class="partners">
				<p>Our Language Centre is accredited by following institutions:</p>
				<div class="partner--logo">
					<a target="_blank" href="https://www.austrade.gov.au/Australian/Education/Future-Unlimited">
						<img src="<?= get_template_directory_uri() ?>/assets/images/AusOnlyAndFuture-Logo.png" alt=""/>
					</a>
					<a target="_blank" href="https://www.englishaustralia.com.au/">
						<img src="<?= get_template_directory_uri() ?>/assets/images/EA_logo_web.jpg" alt=""/>
					</a>
					<a target="_blank" href="http://www.acpet.edu.au/">
						<img src="<?= get_template_directory_uri() ?>/assets/images/ACPET-Logo.jpg" alt=""/>
					</a>
				</div>
			</div>
			<div class="copyright">
				<div class="container clearfix">
					<a href="#body" class="back-to-top anchor">Go To Top <i class="fa fa-angle-up"></i></a>
					<p>&copy; 2017 ABILITY English. All Rights Reserved. CRICOS Provider Codes: 01530K</p>
				</div>
			</div>
		</footer>

	</div>

</div>

<!--<script type="text/javascript">var switchTo5x=true;</script>-->
<!--<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>-->
<!--<script type="text/javascript">stLight.options({publisher: "f5aa822b-dd9d-40c5-ab1d-949e4ccb9e9c", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>-->

<?php wp_footer(); ?>
</body>
</html>
