<?php

function banner_slider()
{

    $labels  = array (
        // Change the label of the cpt
'name'          => __('Banner Sliders', 'textdomain'), 
'singular_name' => __('Banner Slider', 'textdomain'),
'add_new'       => __('Add New Banner Slider', 'textdomain'),
'add_new_item'  => __('Add New Banner Slider', 'textdomain'),
'edit_item'     => __('Edit Banner Slider', 'textdomain'),
'all_items'     => __('All Banner Sliders', 'textdomain')
    );
    $args = array(
        
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-slides', 
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'announcements'),
        'show_in_menu'=> true,
    'capability_type'  => 'post',
    'taxonomies'=> array( 'category' ), // if you need category 


    );

    register_post_type('banner', $args);
}
add_action('init', 'banner_slider');

function news_cpt() {
    $labels  = array (
                        // Change the label of the cpt
     'name'          => __('News', 'textdomain'), 
     'singular_name' => __('News', 'textdomain'),
     'add_new'       => __('Add News', 'textdomain'),
     'add_new_item'  => __('Add News', 'textdomain'),
     'edit_item'     => __('Edit News', 'textdomain'),
    'all_items'     => __('All News', 'textdomain')
                    );
     
    $args = array( 
    'labels' => $labels,
    'public'  => true,
    'show_in_menu'=> true,
    'capability_type'  => 'post',
    'taxonomies'=> array( 'category' ), // if you need category 
    'supports' => array( 'title', 'editor', 'thumbnail'), // if you need thumbnail just add it but make sure you activate it on the theme_support add_theme_support( 'post-thumbnails');
    'rewrite' => array( 'slug' => 'news' ), // if you need pagination, you need this. Make sure it is the singular of the register_post_type name  
    );
    register_post_type( 'news', $args );
        // HERE YOU ADD ADDITION CPT 
    }
     
    add_action( 'init', 'news_cpt');

    function activities_cpt() {
        $labels  = array (
                            // Change the label of the cpt
         'name'          => __('Activities', 'textdomain'), 
         'singular_name' => __('Activity', 'textdomain'),
         'add_new'       => __('Add Activity', 'textdomain'),
         'add_new_item'  => __('Add Activity', 'textdomain'),
         'edit_item'     => __('Edit Activity', 'textdomain'),
        'all_items'     => __('All Activities', 'textdomain')
                        );
         
        $args = array( 
        'labels' => $labels,
        'public'  => true,
        'show_in_menu'=> true,
        'capability_type'  => 'post',
        'taxonomies'=> array( 'category' ), // if you need category 
        'supports' => array( 'title', 'editor', 'thumbnail'), // if you need thumbnail just add it but make sure you activate it on the theme_support add_theme_support( 'post-thumbnails');
        'rewrite' => array( 'slug' => 'activities' ), // if you need pagination, you need this. Make sure it is the singular of the register_post_type name  
        );
        register_post_type( 'activities', $args );
            // HERE YOU ADD ADDITION CPT 
        }
         
        add_action( 'init', 'activities_cpt');

        function gallery_cpt() {
            $labels  = array (
                                // Change the label of the cpt
             'name'          => __('Gallery', 'textdomain'), 
             'singular_name' => __('Gallery', 'textdomain'),
             'add_new'       => __('Add Gallery', 'textdomain'),
             'add_new_item'  => __('Add Gallery', 'textdomain'),
             'edit_item'     => __('Edit Gallery', 'textdomain'),
            'all_items'     => __('All Gallery', 'textdomain')
                            );
             
            $args = array( 
            'labels' => $labels,
            'public'  => true,
            'show_in_menu'=> true,
            'capability_type'  => 'post',
            'taxonomies'=> array( 'category' ), // if you need category 
            'supports' => array( 'title', 'editor', 'thumbnail'), // if you need thumbnail just add it but make sure you activate it on the theme_support add_theme_support( 'post-thumbnails');
            'rewrite' => array( 'slug' => 'gallery' ), // if you need pagination, you need this. Make sure it is the singular of the register_post_type name  
            );
            register_post_type( 'gallery', $args );
                // HERE YOU ADD ADDITION CPT 
            }
             
            add_action( 'init', 'gallery_cpt');
    