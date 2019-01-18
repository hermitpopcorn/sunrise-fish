<?php
the_post();

if($post->post_type == 'page') {
	get_template_part('parts/singular/content', 'page');
} else if(is_singular() === false) {
	get_template_part('parts/singular/content', 'list');
} else {
	get_template_part('parts/singular/content', get_post_format());
}

if ( comments_open() || get_comments_number() ) :
	comments_template();
endif;
