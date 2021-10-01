<?php

function banner_slider()
{
    $args = array(
        
        'labels' => array(
            'name' => 'Banner Sliders',
            'singular_name' => 'Banner Slider',
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-slides', 
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'announcements'),


    );

    register_post_type('banner', $args);
}
add_action('init', 'banner_slider');