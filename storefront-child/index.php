<?php


get_header(); ?>
		<?php if (!wp_is_mobile()) { ?>
			<img alt="Jungle Flora Hero Image" src="https://via.placeholder.com/1600x600.png">
		<?php } else { ?>
			<img alt="Jungle Flora Hero Image" src="https://via.placeholder.com/960x960.png">
		<?php } ?>	
		<div class="bt-flex">
			<div class="bt-1-2"><img alt="" src="https://via.placeholder.com/800x600.png"></div>
			<div class="bt-1-2"><img alt="" src="https://via.placeholder.com/800x600.png"></div>
		</div>

		<div class="bt-flex">
			<div class="bt-1-2">
				<h2>About Jungle Flora</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat posuere sollicitudin. Vestibulum blandit elit sit amet quam lobortis, eu mattis tortor volutpat. Etiam eget magna at urna maximus vestibulum ac at ante. Etiam ultricies tristique sapien non tristique. Donec faucibus libero in ex faucibus, vel condimentum nisi imperdiet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut quis euismod urna.</p>
			</div>
			<div class="bt-1-2"><img alt="" src="https://via.placeholder.com/800x600.png"></div>
		</div>


<?php
get_footer();
