<?php get_header(); ?>

	<div class="container main-container pl-0 pr-0">

		<?php get_template_part('parts/header'); ?>

		<div class="content-container">

			<div class="wrap">

				<?php
					the_archive_title( '<h2 class="archive-title">', '</h2>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>

				<?php
				if ( have_posts() ) : ?>
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'parts/list/short', get_post_format() );

					endwhile;

					the_posts_pagination( array(
						'prev_text' => '<span class="screen-reader-text">' . "Halaman Sebelumnya" . '</span>',
						'next_text' => '<span class="screen-reader-text">' . "Halaman Selanjutnya" . '</span>',
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . "Halaman" . ' </span>',
					) );

				else :

					get_template_part( 'parts/list/content', 'none' );

				endif; ?>

			</div>

		</div>

<?php get_footer(); ?>
