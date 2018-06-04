<?php

namespace Roots\Sage\Assets;

/**
 * Scripts and stylesheets
 */

class JsonManifest {
  private $manifest;

  public function __construct($manifest_path) {
    if (file_exists($manifest_path)) {
      $this->manifest = json_decode(file_get_contents($manifest_path), true);
    } else {
      $this->manifest = [];
    }
  }

  public function get() {
    return $this->manifest;
  }

  public function getPath($key = '', $default = null) {
    $collection = $this->manifest;
    if (is_null($key)) {
      return $collection;
    }
    if (isset($collection[$key])) {
      return $collection[$key];
    }
    foreach (explode('.', $key) as $segment) {
      if (!isset($collection[$segment])) {
        return $default;
      } else {
        $collection = $collection[$segment];
      }
    }
    return $collection;
  }
}

function asset_path($filename) {
  $dist_path = get_template_directory_uri() . DIST_DIR;
  $directory = dirname($filename) . '/';
  $file = basename($filename);
  static $manifest;

  if (empty($manifest)) {
    $manifest_path = get_template_directory() . DIST_DIR . 'assets.json';
    $manifest = new JsonManifest($manifest_path);
  }

  if (array_key_exists($file, $manifest->get())) {
    return $dist_path . $directory . $manifest->get()[$file];
  } else {
    return $dist_path . $directory . $file;
  }
}

function assets() {
  wp_enqueue_style('common', asset_path('css/common.css'), false, null);
  wp_enqueue_style('0-responsive', asset_path('css/0-responsive.css'), false, null, '(max-width:767px)');
  wp_enqueue_style('768-responsive', asset_path('css/768-responsive.css'), false, null, '(min-width:768px) and (max-width:1024px)');
  wp_enqueue_style('1025-responsive', asset_path('css/1025-responsive.css'), false, null, '(min-width:1025px) and (max-width:1199px)');
  wp_enqueue_style('1200-responsive', asset_path('css/1200-responsive.css'), false, null, '(min-width:1200px)');
  wp_enqueue_style('sage/css', asset_path('styles/main.css'), false, null);

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
	
	wp_enqueue_script('jquery', asset_path('js/jquery.js'), [], null, true);
	wp_enqueue_script('jquery-ui', asset_path('js/jquery-ui.js'), [], null, true);
	wp_enqueue_script('stickykit', asset_path('js/jquery-stickykit.js'), [], null, true);
	wp_enqueue_script('lightbox', asset_path('js/jquery-lightbox.js'), [], null, true);
	wp_enqueue_script('fitvids', asset_path('js/jquery-fitvids.js'), [], null, true);
	wp_enqueue_script('carousel', asset_path('js/jquery-carousel.js'), [], null, true);
	wp_enqueue_script('init', asset_path('js/jquery-init.js'), [], null, true);
	wp_enqueue_script('demo', asset_path('js/jquery-demo.js'), [], null, true);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);
