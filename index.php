<?php get_header(); ?>

	<div class="container main-container pl-0 pr-0">

		<?php get_template_part('parts/header'); ?>

		<div class="content-container">

			<?php if(is_front_page()) { // Show slider in front page view
				get_template_part('parts/main-slider');
			} ?>

			<div class="blog-main">

				<?php if(is_front_page()) { // Front page view ?>

					<?php get_template_part('parts/content-front-page'); ?>

				<?php } else { // Post view ?>
					<?php
					if(have_posts()) {
						while (have_posts()) {
							the_post();
							get_template_part('content', get_post_format());
						}
					}
					?>
				<?php } ?>

			</div>

		</div>

<?php get_footer(); ?>
