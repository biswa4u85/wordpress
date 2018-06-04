<?php
//Home Slider
add_action('init', 'homeslider_register');
 function homeslider_register() {
 	$labels = array(
		'name' => _x('Home Sliders', 'post type general name'),
		'singular_name' => _x('Slider Item', 'post type singular name'),
		'add_new' => _x('Add New', 'Slider item'),
		'add_new_item' => __('Add New Slider Item'),
		'edit_item' => __('Edit Slider Item'),
		'new_item' => __('New Slider Item'),
		'view_item' => __('View Slider Item'),
		'search_items' => __('Search Slider'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' 		=> get_bloginfo('template_url').'/assets/images/fav.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 2,
		'supports' => array('title','thumbnail')
	  ); 
 	register_post_type( 'slider' , $args );
}

//Key Features
add_action('init', 'key_features_register');
 function key_features_register() {
 	$labels = array(
		'name' => _x('Key Features', 'post type general name'),
		'singular_name' => _x('Key Feature Item', 'post type singular name'),
		'add_new' => _x('Add New', 'Key Feature item'),
		'add_new_item' => __('Add New Key Feature Item'),
		'edit_item' => __('Edit Key Feature Item'),
		'new_item' => __('New Key Feature Item'),
		'view_item' => __('View Key Feature Item'),
		'search_items' => __('Search Key Feature'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' 		=> get_bloginfo('template_url').'/assets/images/fav.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 2,
		'supports' => array('title','editor','thumbnail')
	  ); 
 	register_post_type( 'feature' , $args );
}

//Sponsor
add_action('init', 'sponsor_register');
 function sponsor_register() {
 	$labels = array(
		'name' => _x('Sponsors', 'post type general name'),
		'singular_name' => _x('Sponsor Item', 'post type singular name'),
		'add_new' => _x('Add New', 'Sponsor item'),
		'add_new_item' => __('Add New Sponsor Item'),
		'edit_item' => __('Edit Sponsor Item'),
		'new_item' => __('New Sponsor Item'),
		'view_item' => __('View Sponsor Item'),
		'search_items' => __('Search Sponsor'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' 		=> get_bloginfo('template_url').'/assets/images/fav.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 2,
		'supports' => array('title','thumbnail')
	  ); 
 	register_post_type( 'sponsor' , $args );
}

//Services
add_action('init', 'service_register');
 function service_register() {
 	$labels = array(
		'name' => _x('Services', 'post type general name'),
		'singular_name' => _x('Service Item', 'post type singular name'),
		'add_new' => _x('Add New', 'Service item'),
		'add_new_item' => __('Add New Service Item'),
		'edit_item' => __('Edit Service Item'),
		'new_item' => __('New Service Item'),
		'view_item' => __('View Service Item'),
		'search_items' => __('Search Service'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' 		=> get_bloginfo('template_url').'/assets/images/fav.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 2,
		'supports' => array('title','editor','thumbnail')
	  ); 
 	register_post_type( 'service' , $args );
}

//Works
add_action('init', 'work_register');
 function work_register() {
 	$labels = array(
		'name' => _x('Works', 'post type general name'),
		'singular_name' => _x('Work Item', 'post type singular name'),
		'add_new' => _x('Add New', 'Work item'),
		'add_new_item' => __('Add New Work Item'),
		'edit_item' => __('Edit Work Item'),
		'new_item' => __('New Work Item'),
		'view_item' => __('View Work Item'),
		'search_items' => __('Search Work'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' 		=> get_bloginfo('template_url').'/assets/images/fav.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 2,
		'supports' => array('title','thumbnail')
	  ); 
 	register_post_type( 'work' , $args );
}

//Works Category
add_action( 'init', 'types_hierarchical_taxonomy', 0 );
function types_hierarchical_taxonomy() {
  $labels = array(
    'name' => _x( 'Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Types' ),
    'all_items' => __( 'All Types' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( 'Edit Type' ), 
    'update_item' => __( 'Update Type' ),
    'add_new_item' => __( 'Add New Type' ),
    'new_item_name' => __( 'New Type Name' ),
    'menu_name' => __( 'Types' ),
  );
  register_taxonomy('types',array('work'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));
}

//Teams
add_action('init', 'team_register');
 function team_register() {
 	$labels = array(
		'name' => _x('Teams', 'post type general name'),
		'singular_name' => _x('Team Item', 'post type singular name'),
		'add_new' => _x('Add New', 'Team item'),
		'add_new_item' => __('Add New Team Item'),
		'edit_item' => __('Edit Team Item'),
		'new_item' => __('New Team Item'),
		'view_item' => __('View Team Item'),
		'search_items' => __('Search Team'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' 		=> get_bloginfo('template_url').'/assets/images/fav.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 2,
		'supports' => array('title','thumbnail')
	  ); 
 	register_post_type( 'team' , $args );
}

//Testimonials
add_action('init', 'testimonial_register');
 function testimonial_register() {
 	$labels = array(
		'name' => _x('Testimonials', 'post type general name'),
		'singular_name' => _x('Testimonial Item', 'post type singular name'),
		'add_new' => _x('Add New', 'Testimonial item'),
		'add_new_item' => __('Add New Testimonial Item'),
		'edit_item' => __('Edit Testimonial Item'),
		'new_item' => __('New Testimonial Item'),
		'view_item' => __('View Testimonial Item'),
		'search_items' => __('Search Testimonial'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' 		=> get_bloginfo('template_url').'/assets/images/fav.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 2,
		'supports' => array('title','editor','thumbnail')
	  ); 
 	register_post_type( 'testimonial' , $args );
}

//FAQ
add_action('init', 'faq_register');
 function faq_register() {
 	$labels = array(
		'name' => _x('Faqs', 'post type general name'),
		'singular_name' => _x('Faq Item', 'post type singular name'),
		'add_new' => _x('Add New', 'Faq item'),
		'add_new_item' => __('Add New Faq Item'),
		'edit_item' => __('Edit Faq Item'),
		'new_item' => __('New Faq Item'),
		'view_item' => __('View Faq Item'),
		'search_items' => __('Search Faq'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' 		=> get_bloginfo('template_url').'/assets/images/fav.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 2,
		'supports' => array('title','editor','thumbnail')
	  ); 
 	register_post_type( 'Faq' , $args );
}
?>