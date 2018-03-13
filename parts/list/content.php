<article class="post list-entry" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="wrap">
		<header class="header">
			<?php the_title( sprintf( '<h2 class="title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<p class="meta"><?php the_date(); ?>, ditulis oleh <a href="#"><?php the_author(); ?></a></p>
		</header>
		<div class="summary">
			<?php the_content('Selengkapnya'); ?>
		</div>
	</div>
</article>
