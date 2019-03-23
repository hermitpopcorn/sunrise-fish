<?php $meta = get_post_meta(get_the_ID()); ?>
<article class="post blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if(empty($meta['disable_featured_header'])) { ?>
		<?php if($thumbnail = get_the_post_thumbnail_url()) { ?>
			<div class="thumbnail">
				<img class="featured" src="<?php echo esc_url($thumbnail) ?>">
			</div>
		<?php } ?>
	<?php } ?>
	<?php $withSidebar = is_active_sidebar('sidebar'); ?>
	<?php if($withSidebar) { ?>
	<div class="row">
		<div class="col-md-9">
	<?php } ?>
			<div class="wrap">
				<?php if(empty($meta['hide_date'])) { ?><p class="meta"><?php the_date(); ?></p><?php } ?>
				<?php if(empty($meta['hide_title'])) { ?><h2 class="title"><?php the_title(); ?></h2><?php } ?>
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
