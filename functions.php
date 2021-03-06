<?php

add_theme_support( 'post-thumbnails' );
add_filter('acf/settings/remove_wp_meta_box', '__return_false');

add_action('wp_enqueue_scripts', 'srf_register_javascript', 100);

function srf_register_javascript() {
    wp_register_script('mediaelement', plugins_url('wp-mediaelement.min.js', __FILE__), array('jquery'), false, true);
    wp_enqueue_script('mediaelement');
}

/**
 * Register widget area.
 */
function srf_widgets_init() {
	register_sidebar(array(
		'name'          => __('Sidebar', 'srf'),
		'id'            => 'sidebar',
		'description'   => __('Add widgets here to appear in your sidebar on blog posts and archive pages.', 'srf'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action( 'widgets_init', 'srf_widgets_init' );

/**
 * Disable paging in category view.
 */
function set_nopaging($query) {
    if (is_category()) {
        $query->set('nopaging', 1);
    }
}
add_action('parse_query', 'set_nopaging');

require __DIR__ . '/functions/theme-options.php';
