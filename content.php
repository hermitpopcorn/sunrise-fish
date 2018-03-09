<?php
if($post->post_name == 'organigram') {
	get_template_part('parts/content', 'organigram');
} else {
	get_template_part('parts/content', get_post_format());
}
