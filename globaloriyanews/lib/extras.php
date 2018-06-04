<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/**
 * Optional: set 'ot_show_pages' filter to false.
 * This will hide the settings & documentation pages.
 */
add_filter( 'ot_show_pages', '__return_false' );

/**
 * Optional: set 'ot_show_new_layout' filter to false.
 * This will hide the "New Layout" section on the Theme Options page.
 */
add_filter( 'ot_show_new_layout', '__return_false' );

/*
* Required: set 'ot_theme_mode' filter to true.
*/ 
add_filter( 'ot_theme_mode', '__return_true' );

/**
 * Required: include OptionTree.
 */
load_template( trailingslashit( get_template_directory() ) . 'lib/admin/option-tree/ot-loader.php' );

/**
 * Theme Options
 */
load_template( trailingslashit( get_template_directory() ) . 'lib/admin/includes/theme-options.php' );


/**
 * Make theme available for translation
 * Translations can be filed in the /languages/ directory
 */
load_theme_textdomain( 'faculty', get_template_directory() . 'lib/admin/languages' );

$locale = get_locale();
$locale_file = get_template_directory() . "lib/admin/languages/$locale.php";
if ( is_readable( $locale_file ) )
	require_once( $locale_file );

/*
* Include custom page types (CPTs) 
*/
require_once( get_template_directory().'/lib/admin/includes/type-breakingnews.php');
require_once( get_template_directory().'/lib/admin/includes/type-post-meta-box.php');
//require_once( get_template_directory().'/lib/admin/includes/type-publications-meta-box.php');

