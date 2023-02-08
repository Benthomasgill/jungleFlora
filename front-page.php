<?php

$dimage = get_field('desktop_image');
$mimage = get_field('mobile_image');
$htext = get_field('headline_copy');
$btext = get_field('body_copy');
$ctatext = get_field('cta_text');
$ctalink = get_field('cta_link');

get_header(); ?>
		<div class="main-hero-cont">
		<div class="desktop-hero">
			<img alt="Jungle Flora Hero Image" src="<?php echo $dimage['url']; ?>">
			<div class="hero-overlay">
				<h2><?php echo $htext; ?></h2>
				<p><?php echo $btext; ?></p>
				<a href="<?php echo $ctalink; ?>">
					<p class="cta"><?php echo $ctatext; ?></p>
				</a>
			</div>
		</div>
		<div class="mobile-hero">
			<img alt="Jungle Flora Hero Image" src="<?php echo $mimage['url']; ?>">
		</div>	
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
