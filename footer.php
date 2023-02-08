<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">
			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20 
			 */
			do_action( 'storefront_footer' );
			?>
		<p class="foot-text">
		<nav>
			<span>Shop	|	Account	|	About	|	FAQs |	Shipping</span>
		</nav>
		<div class="bt-flex social-footer">
			<img class="fb" alt="Facebook" src="<?php echo get_template_directory_uri();?>-child/assets/images/social/facebook.svg">
			<img class="in" alt="Instagram" src="<?php echo get_template_directory_uri();?>-child/assets/images/social/instagram.svg">
		</div>			
		<strong>Acknowledgement of Country</strong><br>
		We acknowledge the traditional custodians throughout Australia and their continuing connection to the land, waters and community. 
		We pay our respects to all members of the Aboriginal communities and their cultures; and to Elders both past and present.
		</p>
		<p>© Jungle Flora & Co <?php echo date('Y'); ?></p>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
