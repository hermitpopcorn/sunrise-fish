<?php
if($post->post_name == 'organigram') {
	get_template_part('parts/content', 'organigram');
} else if($post->post_type == 'page') {
	get_template_part('parts/content', 'page');
} else {
	get_template_part('parts/content', get_post_format());
}
