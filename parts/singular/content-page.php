<?php
$custom = false;

// If using custom page
$content = get_the_content();
$match = [];
preg_match('/\[[A-z0-9]+:[A-z0-9\.\-\/]+\]/i', $content, $match);
if($match) {
    $match = trim($match[0], '[]');

    $tag = explode(':', $match);
    $tag[0] = strtoupper($tag[0]);
    if($tag[0] === 'CUSTOM') {
        ob_start();
        include(get_template_directory() . '/' . $tag[1]);
        $custom = ob_get_clean();
    }
}

if($custom) { echo $custom; } else {
?>
<article class="post blog-page" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="wrap">
		<div class="content">
			<?php the_content(); ?>
		</div>
	</div>
</article>
<?php } ?>
