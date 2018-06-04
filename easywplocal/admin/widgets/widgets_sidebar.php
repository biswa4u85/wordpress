<?php

// Register widgetized areas

if ( function_exists('register_sidebar') ) {

	

	// Area 1, located in the footer. Empty by default.
	register_sidebar( array(

		'name' => __( 'Primary Widget Area', 'twentyten' ),

		'id' => 'primary-widget-area',

		'description' => __( 'The primary widget area', 'twentyten' ),

		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',

		'after_widget' => '</li>',

		'before_title' => '<h3 class="widget-title">',

		'after_title' => '</h3>',

	) );

	

	// Area 2, located in the footer. Empty by default.

	register_sidebar( array(

		'name' => __( 'Home Box Area', 'twentyten' ),

		'id' => 'home-box-area',

		'description' => __( 'Home Box area', 'twentyten' ),

		'before_widget' => '',

		'after_widget' => '',

		'before_title' => '<h3 class="widget-none">',

		'after_title' => '</h3>',

	) );



	// Area 3, located below the Primary Widget Area in the sidebar. Empty by default.

	register_sidebar( array(

		'name' => __( 'Footer Widget One', 'twentyten' ),

		'id' => 'footer-one',

		'description' => __( 'Footer Widget One', 'twentyten' ),

		'before_widget' => '',

		'after_widget' => '',

		'before_title' => '<h3>',

		'after_title' => '</h3>',

	) );
	
	// Area 4, located below the Primary Widget Area in the sidebar. Empty by default.

	register_sidebar( array(

		'name' => __( 'Contact Form', 'twentyten' ),

		'id' => 'contact-form',

		'description' => __( 'Contact Form', 'twentyten' ),

		'before_widget' => '',

		'after_widget' => '',

		'before_title' => '<h3>',

		'after_title' => '</h3>',

	) );



}

?>