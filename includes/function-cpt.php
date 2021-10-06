<?php
add_action('init', 'banner_slider');
function banner_slider() {
	// 	BANNER SLIDER CPT
    $labelslider  = array (
        // Change the label of the cpt
		'name'          => __('Banner Sliders', 'textdomain'), 
		'singular_name' => __('Banner Slider', 'textdomain'),
		'add_new'       => __('Add New Banner Slider', 'textdomain'),
		'add_new_item'  => __('Add New Banner Slider', 'textdomain'),
		'edit_item'     => __('Edit Banner Slider', 'textdomain'),
		'all_items'     => __('All Banner Sliders', 'textdomain')
			);
    $argslider = array(
        
        'labels' => $labelslider,
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-slides', 
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'announcements'),
        'show_in_menu'=> true,
    'capability_type'  => 'post',
    'taxonomies'=> array( 'category' ), 
    );
    register_post_type('banner', $argslider);
	
	
	// 	NEWS CPT
	 $labelsNews  = array (
                        // Change the label of the cpt
     'name'          => __('News', 'textdomain'), 
     'singular_name' => __('News', 'textdomain'),
     'add_new'       => __('Add News', 'textdomain'),
     'add_new_item'  => __('Add News', 'textdomain'),
     'edit_item'     => __('Edit News', 'textdomain'),
    'all_items'     => __('All News', 'textdomain')
                    );
     
    $argsNews = array( 
    'labels' => $labelsNews,
    'public'  => true,
    'show_in_menu'=> true,
    'capability_type'  => 'post',
    'taxonomies'=> array( 'category'), 
    'supports' => array( 'title', 'editor', 'thumbnail'), 
    'rewrite' => array( 'slug' => 'new' ), 
    );
    register_post_type( 'news', $argsNews );
	
	
	// 	ACTIVITY
	$labelsActivity  = array (
                            // Change the label of the cpt
         'name'          => __('Activities', 'textdomain'), 
         'singular_name' => __('Activity', 'textdomain'),
         'add_new'       => __('Add Activity', 'textdomain'),
         'add_new_item'  => __('Add Activity', 'textdomain'),
         'edit_item'     => __('Edit Activity', 'textdomain'),
        'all_items'     => __('All Activities', 'textdomain')
                        );
         
        $argsActivity = array( 
        'labels' => $labelsActivity,
        'public'  => true,
        'show_in_menu'=> true,
        'capability_type'  => 'post',
        'taxonomies'=> array( 'category',), 
        'supports' => array( 'title', 'editor', 'thumbnail'),
        'rewrite' => array( 'slug' => 'activity' ),  
        );
        register_post_type( 'activities', $argsActivity );
    

    // 	GALLERY
	$labelsGallery  = array (
                            // Change the label of the cpt
         'name'          => __('Galleries', 'textdomain'), 
         'singular_name' => __('Gallery', 'textdomain'),
         'add_new'       => __('Add Gallery', 'textdomain'),
         'add_new_item'  => __('Add Gallery', 'textdomain'),
         'edit_item'     => __('Edit Gallery', 'textdomain'),
        'all_items'     => __('All Galleries', 'textdomain')
                        );
         
        $argsGallery = array( 
        'labels' => $labelsGallery,
        'public'  => true,
        'show_in_menu'=> true,
        'capability_type'  => 'post',
        'taxonomies'=> array( 'category',), 
        'supports' => array( 'title', 'editor', 'thumbnail'),
        'rewrite' => array( 'slug' => 'gallery' ),  
        );
        register_post_type( 'galleries', $argsGallery );

}


add_action('init', 'tamar_custom_taxonomy', 0);
function tamar_custom_taxonomy()
{
    $room_type_label = array(
    'name'              => _x('Room Type', 'taxonomy general name'),
    'singular_name'     => _x('Room Type', 'taxonomy singular name'),
    'search_items'      => __('Search Room Type'),
    'all_items'         => __('All Room Type'),
    'parent_item'       => __('Parent Room Type'),
    'parent_item_colon' => __('Parent Room Type:'),
    'edit_item'         => __('Edit Room Type'),
    'update_item'       => __('Update Room Type'),
    'add_new_item'      => __('Add New Room Type'),
    'new_item_name'     => __('New Room Type Name'),
    'menu_name'         => __('Room Type'),
    );
    $room_type_args = array(
    'hierarchical'      => true, 
    'labels'            => $room_type_label,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    );
register_taxonomy('room_type', 'news', $room_type_args);    
}