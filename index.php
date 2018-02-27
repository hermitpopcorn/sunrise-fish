<?php get_header(); ?>

	<div class="container">

		<?php get_template_part('parts/header', get_post_format()); ?>

		<div class="blog-main">

			<?php if(is_front_page()) { // Front page view ?>
				<?php
				if(have_posts()) {
					while (have_posts()) {
						the_post();
						get_template_part('content', get_post_format());
					}
				}
				?>
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
