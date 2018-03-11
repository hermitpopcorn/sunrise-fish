<div class="post blog-post">
	<?php if($thumbnail = get_the_post_thumbnail_url()) { ?>
		<div class="thumbnail">
			<img class="featured" src="<?php echo esc_url($thumbnail) ?>">
		</div>
	<?php } ?>
	<div class="wrap">
		<h2 class="title"><?php the_title(); ?></h2>
		<p class="meta"><?php the_date(); ?>, ditulis oleh <a href="#"><?php the_author(); ?></a></p>
	 	<div class="content">
			<?php the_content(); ?>
		</div>
	</div>
</div>
