<?php
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

function xt_theme_register_required_plugins() {
	$plugins = array(
		array(
            'name'               => 'Simple Newsletter',
            'slug'               => 'simple-newsletter-br',
            'required'           => true,
        ),
		array(
            'name'               => 'Contact Form 7',
            'slug'               => 'contact-form-7',
            'required'           => true,
        ),
	);

	$config = array(
		'default_path' => '',                           // Default absolute path to bundled plugins.
		'menu'         => 'install-required-plugins',   // Menu slug.
		'parent_slug'  => 'themes.php',                 // Parent menu slug.
		'capability'   => 'edit_theme_options',
		'has_notices'  => true,                         // Show admin notices or not.
		'is_automatic' => true,                         // Automatically activate plugins after installation or not.
	);

	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'xt_theme_register_required_plugins' );
