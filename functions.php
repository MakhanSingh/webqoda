<?php
function _themename_assets()
{
    wp_enqueue_style('_themename-stylesheet', get_template_directory_uri() . '/dist/assets/css/bundle.css', array(), '1.0.0', 'all');
    wp_enqueue_script('_themename-scripts', get_template_directory_uri() . '/dist/assets/js/bundle.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('_themename-scripts', get_template_directory_uri() . '/dist/assets/js/admin.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', '_themename_assets');
