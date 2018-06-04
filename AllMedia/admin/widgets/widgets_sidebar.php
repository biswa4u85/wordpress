<?php

// Register widgetized areas

if ( function_exists('register_sidebar') ) {

	

	// Area 1, located in the footer. Empty by default.
	register_sidebar( array(

		'name' => __( 'Primary Widget Area', 'twentyten' ),

		'id' => 'primary-widget-area',

		'description' => __( 'The primary widget area', 'twentyten' ),

		'before_widget' => '',

		'after_widget' => '',

		'before_title' => '<h3 class="widget-title">',

		'after_title' => '</h3>',

	) );

}

?>