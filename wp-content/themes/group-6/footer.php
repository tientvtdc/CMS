<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package group-6
 */

?>

<footer id="colophon" class="site-footer">

	<div class="text-white pt-5 pb-5 bg-green">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<?php dynamic_sidebar('footer-widget-col-one'); ?>
				</div>

				<div class="col-sm-6 col-md-3">
					<?php dynamic_sidebar('footer-widget-col-two'); ?>
				</div>

				<div class="col-md-6 col-sm-12 ms-auto">
					<?php dynamic_sidebar('footer-widget-col-three'); ?>
				</div>
			</div>
		</div>
	</div>


	<div class="container pt-2 pb-2">
		<div class="row d-flex align-items-center">
			<div class="col">
				<p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?> / Created by <a href="https://tuanht99.github.io" target="_blank">Group 6 Shop</a>
			</div>
			<div class="col h-25 d-inline-block text-end">
				<img src="<?php echo get_template_directory_uri(); ?>/img/payment-methods.png" class="img-fluid" loading="lazy" alt="...">
			</div>
		</div>
	</div>



</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>