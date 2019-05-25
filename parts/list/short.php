<p id="post-<?php the_ID(); ?>" <?php post_class("mb-1"); ?>>
	<span class="meta"><?php echo get_the_date('j F Y'); ?></span>
	<?php the_title( sprintf( '<span class="title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></span>' ); ?>
</p>
