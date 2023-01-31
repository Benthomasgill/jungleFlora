<?php


get_header(); ?>
		<div class="main-hero-cont">
		<?php if (!wp_is_mobile()) { ?>
			<img alt="Jungle Flora Hero Image" src="<?php echo get_template_directory_uri();?>-child/assets/images/HeroSliderD.jpg">
			<div class="hero-overlay">
				<h2>Natives, pops of colour, neutrals</h2>
				<p>Create a unique personalised design like a bouquet, installation, pot or vase arrangement.</p>
				<a href="">
					<p class="cta">SHOP NATIVES</p>
				</a>
			</div>
		<?php } else { ?>
			<img alt="Jungle Flora Hero Image" src="<?php echo get_template_directory_uri();?>-child/assets/images/HeroSliderM.jpg">
		<?php } ?>	
		</div>
		<div class="bt-flex">
			<div class="bt-1-2"><img alt="" src="<?php echo get_template_directory_uri();?>-child/assets/images/placeholder1.jpg"></div>
			<div class="bt-1-2"><img alt="" src="<?php echo get_template_directory_uri();?>-child/assets/images/placeholder2.jpg"></div>
		</div>

		<div class="bt-flex">
			<div class="bt-1-2">
				<h2>About Jungle Flora</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat posuere sollicitudin. Vestibulum blandit elit sit amet quam lobortis, eu mattis tortor volutpat. Etiam eget magna at urna maximus vestibulum ac at ante. Etiam ultricies tristique sapien non tristique. Donec faucibus libero in ex faucibus, vel condimentum nisi imperdiet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut quis euismod urna.</p>
			</div>
			<div class="bt-1-2"><img alt="" src="<?php echo get_template_directory_uri();?>-child/assets/images/placeholder3.jpg"></div>
		</div>


<?php
get_footer();
