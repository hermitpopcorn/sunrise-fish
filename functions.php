<?php

add_theme_support( 'post-thumbnails' );

add_action('wp_enqueue_scripts', 'srf_register_javascript', 100);

function srf_register_javascript() {
    wp_register_script('mediaelement', plugins_url('wp-mediaelement.min.js', __FILE__), array('jquery'), false, true);
    wp_enqueue_script('mediaelement');
}
