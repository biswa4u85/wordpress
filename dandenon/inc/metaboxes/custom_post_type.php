<?php
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
	//	'menu_icon' 		=> get_bloginfo('template_url').'/assets/images/fav.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 2,
		'supports' => array('title','editor','thumbnail')
	  ); 
 	register_post_type( 'Service' , $args );
}

//teams
add_action('init', 'team_register');
 function team_register() {
 	$labels = array(
		'name' => _x('Teams', 'post type general name'),
		'singular_name' => _x('Teams Item', 'post type singular name'),
		'add_new' => _x('Add New', 'Teams item'),
		'add_new_item' => __('Add New team Item'),
		'edit_item' => __('Edit team Item'),
		'new_item' => __('New team Item'),
		'view_item' => __('View team Item'),
		'search_items' => __('Search team'),
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
		// 'menu_icon' 		=> get_bloginfo('template_url').'/assets/images/fav.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 2,
		'supports' => array('title','editor','thumbnail')
	  ); 
 	register_post_type( 'team' , $args );
}

//Works Type Category
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
  register_taxonomy('types',array('team'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));
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
		// 'menu_icon' 		=> get_bloginfo('template_url').'/assets/images/fav.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 2,
		'supports' => array('title','editor','thumbnail')
	  ); 
 	register_post_type( 'Faq' , $args );
}

//Works Type Category
add_action( 'init', 'faqtype_hierarchical_taxonomy', 0 );
function faqtype_hierarchical_taxonomy() {
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
  register_taxonomy('faqtypes',array('faq'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'faqtypes' ),
  ));
}

?>