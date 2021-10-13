<?php

add_action('wp_head', 'spcms_fonts');

function spcms_fonts() {
    wp_enqueue_style( 'spcms_font_bold', get_template_directory_uri() . '/font/Poppins-Bold.woff2' );
    wp_enqueue_style( 'spcms_font_regular', get_template_directory_uri() . '/font/Poppins-Regular.woff2' );
    wp_enqueue_style( 'spcms_font_light', get_template_directory_uri() . '/font/Poppins-Light.woff2' );
    wp_enqueue_style( 'spcms_font_semibold', get_template_directory_uri() . '/font/Poppins-SemiBold.woff2' );
    wp_enqueue_style( 'spcms_font_extralight', get_template_directory_uri() . '/font/Poppins-ExtraLight.woff2' );
}

add_action('wp_enqueue_scripts', 'spcms_assets');

function spcms_assets() {
    wp_enqueue_style('spcms_style', get_template_directory_uri() . '/css/style.css', microtime());
    wp_enqueue_script('spcms_script', get_template_directory_uri() . '/js/main.js', NULL, microtime(), true);
}