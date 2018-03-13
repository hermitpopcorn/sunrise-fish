<?php get_header(); ?>

	<div class="container main-container pl-0 pr-0">

		<?php get_template_part('parts/header'); ?>

		<div class="content-container">

			<?php
				if(is_front_page()) { // Front page view

					get_template_part('parts/content-front-page');

				} else { // Post view
					if(have_posts()) {
						if(is_singular()) {
							get_template_part('parts/content-singular');
						} else {
							get_template_part('parts/content-list');
						}
					}
				}
			?>

		</div>

<?php get_footer(); ?>
