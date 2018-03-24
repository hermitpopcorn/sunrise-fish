<article class="post blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if($thumbnail = get_the_post_thumbnail_url()) { ?>
		<div class="thumbnail">
			<img class="featured" src="<?php echo esc_url($thumbnail) ?>">
		</div>
	<?php } ?>
	<?php $withSidebar = is_active_sidebar('sidebar'); ?>
	<?php if($withSidebar) { ?>
	<div class="row">
		<div class="col-md-9">
	<?php } ?>
			<div class="wrap">
				<h2 class="title"><?php the_title(); ?></h2>
				<p class="meta"><?php the_date(); ?>, ditulis oleh <?php the_author(); ?></p>
			 	<div class="content">
					<?php the_content(); ?>
				</div>
			</div>
	<?php if($withSidebar) { ?>
		</div>
		<div class="col-md-3">
			<div class="sidebar">
				<?php dynamic_sidebar('sidebar') ?>
			</div>
		</div>
	<?php } ?>
</article>
