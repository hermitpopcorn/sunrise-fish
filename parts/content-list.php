<?php $withSidebar = is_active_sidebar('sidebar'); ?>
<?php if($withSidebar) { ?>
	<div class="row">
		<div class="col-md-9">
<?php } ?>
			<div class="wrap">
				<?php
					while (have_posts()) {
						the_post();
						get_template_part('parts/list/short', get_post_format());
					}
				?>
			</div>
<?php if($withSidebar) { ?>
		</div>
		<div class="col-md-3">
			<div class="sidebar">
				<?php dynamic_sidebar('sidebar') ?>
			</div>
		</div>
	</div>
<?php } ?>
