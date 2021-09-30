<?php

add_action('wp_enqueue_scripts', 'spcms_assets');

function spcms_assets() {
    wp_enqueue_style('spcms_style', get_template_directory_uri() . '/css/style.css', microtime());
    wp_enqueue_script('spcms_script', get_template_directory_uri() . '/js/main.js', NULL, microtime(), true);
}