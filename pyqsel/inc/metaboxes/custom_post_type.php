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
		'supports' => array('title','thumbnail')
	  ); 
 	register_post_type( 'Service' , $args );
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
		// 'menu_icon' 		=> get_bloginfo('template_url').'/assets/images/fav.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 2,
		'supports' => array('title','editor','thumbnail')
	  ); 
 	register_post_type( 'testimonial' , $args );
}
?>