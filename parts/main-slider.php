<?php
    $srfOptions = get_option('srf-options');

    $parser = function($input) {
        $input = str_replace("<SITE_URL>", get_site_url(), $input);
        $input = str_replace("<TEMPLATE_DIR>", get_bloginfo('template_directory'), $input);
        return $input;
    };

    echo (!empty($srfOptions['slider-content']) ? $parser($srfOptions['slider-content']) : '<div class="main-slider"></div>');
