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

    // 	DIRECTORY
	$labelsDirectory  = array (
        // Change the label of the cpt
    'name'          => __('Directories', 'textdomain'), 
    'singular_name' => __('Directory', 'textdomain'),
    'add_new'       => __('Add Directory', 'textdomain'),
    'add_new_item'  => __('Add Directory', 'textdomain'),
    'edit_item'     => __('Edit Directory', 'textdomain'),
    'all_items'     => __('All Directories', 'textdomain')
        );

    $argsDirectory = array( 
    'labels' => $labelsDirectory,
    'public'  => true,
    'show_in_menu'=> true,
    'capability_type'  => 'post',
    'taxonomies'=> array( 'category',), 
    'supports' => array( 'title', 'editor', 'thumbnail'),
    'rewrite' => array( 'slug' => 'directory' ),  
    );
    register_post_type( 'directories', $argsDirectory );
    
    // 	COUNCIL
	$labelsCouncil  = array (
        // Change the label of the cpt
    'name'          => __('Councils', 'textdomain'), 
    'singular_name' => __('Council', 'textdomain'),
    'add_new'       => __('Add Council', 'textdomain'),
    'add_new_item'  => __('Add Council', 'textdomain'),
    'edit_item'     => __('Edit Council', 'textdomain'),
    'all_items'     => __('All Councils', 'textdomain')
        );

    $argsCouncil = array( 
    'labels' => $labelsCouncil,
    'public'  => true,
    'show_in_menu'=> true,
    'capability_type'  => 'post',
    'taxonomies'=> array( 'category',), 
    'supports' => array( 'title', 'editor', 'thumbnail'),
    'rewrite' => array( 'slug' => 'directory' ),  
    );
    register_post_type( 'councils', $argsCouncil );

}


add_action('init', 'spcms_custom_taxonomy', 0);
function spcms_custom_taxonomy()
{

    // DIRECTORY - DOCTOR TYPE
    $doctor_type_label = array(
    'name'              => _x('Doctor Type', 'taxonomy general name'),
    'singular_name'     => _x('Doctor Type', 'taxonomy singular name'),
    'search_items'      => __('Search Doctor Type'),
    'all_items'         => __('All Doctor Type'),
    'parent_item'       => __('Parent Doctor Type'),
    'parent_item_colon' => __('Parent Doctor Type:'),
    'edit_item'         => __('Edit Doctor Type'),
    'update_item'       => __('Update Doctor Type'),
    'add_new_item'      => __('Add New Doctor Type'),
    'new_item_name'     => __('New Doctor Type Name'),
    'menu_name'         => __('Doctor Type'),
    );
    $doctor_type_args = array(
    'hierarchical'      => true, 
    'labels'            => $doctor_type_label,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite' => array( 'slug' => 'doctor' ), 
    );
register_taxonomy('doctor_type', 'directories', $doctor_type_args);   


    // COUNCIL - ROLE TYPE
    $role_type_label = array(
    'name'              => _x('Role Type', 'taxonomy general name'),
    'singular_name'     => _x('Role Type', 'taxonomy singular name'),
    'search_items'      => __('Search Role Type'),
    'all_items'         => __('All Role Type'),
    'parent_item'       => __('Parent Role Type'),
    'parent_item_colon' => __('Parent Role Type:'),
    'edit_item'         => __('Edit Role Type'),
    'update_item'       => __('Update Role Type'),
    'add_new_item'      => __('Add New Role Type'),
    'new_item_name'     => __('New Role Type Name'),
    'menu_name'         => __('Role Type'),
    );
    $role_type_args = array(
    'hierarchical'      => true, 
    'labels'            => $role_type_label,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite' => array( 'slug' => 'role' ), 
    );
register_taxonomy('role_type', 'councils', $role_type_args);    
}