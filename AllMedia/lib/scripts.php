<?php

/**

 * Scripts and stylesheets

 *

 * Enqueue stylesheets in the following order:

 * 1. /theme/assets/css/main.css

 *

 * Enqueue scripts in the following order:

 * 1. jquery-1.11.1.min.js via Google CDN

 * 2. /theme/assets/js/vendor/modernizr.min.js

 * 3. /theme/assets/js/scripts.js

 *

 * Google Analytics is loaded after enqueued scripts if:

 * - An ID has been defined in config.php

 * - You're not logged in as an administrator

 */



function roots_scripts() {

	

  /**

   * The build task in Grunt renames production assets with a hash

   * Read the asset names from assets-manifest.json

   */

   $assets     = array(

    'bootstrapcss'       => '/assets/css/bootstrap.min.css',
    'strokecss'       => '/assets/css/pe-icon-7-stroke.css',
    'prettyPhotocss'       => '/assets/css/prettyPhoto.css',
    'stylecss'       => '/assets/css/style.css',
    'responsivecss'       => '/assets/css/responsive.css',
    'font-awesome'       => '/assets/vendors/fa/css/font-awesome.min.css',
    'owl-carousel'       => '/assets/vendors/owl.carousel/owl-carousel/owl.carousel.css',
    'owl-theme'       => '/assets/vendors/owl.carousel/owl-carousel/owl.theme.css',
    'owl-transitions'       => '/assets/vendors/owl.carousel/owl-carousel/owl.transitions.css',
    'vegas'       => '/assets/vendors/vegas/vegas.min.css',
    
	  'jquery'    => 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js',
	  'bootstrap' => '/assets/js/bootstrap.min.js',
	  'isotope' => '/assets/js/isotope.pkgd.min.js',
	  'prettyPhoto' => '/assets/js/jquery.prettyPhoto.js',
	  'carousel' => '/assets/vendors/owl.carousel/owl-carousel/owl.carousel.min.js',
	  'vegasjs' => '/assets/vendors/vegas/vegas.min.js',
	  'customjs' => '/assets/js/custom.js',
    );
	

       wp_enqueue_style('bootstrapcss', get_template_directory_uri() . $assets['bootstrapcss'], false, null);
   	   wp_enqueue_style('strokecss', get_template_directory_uri() . $assets['strokecss'], false, null);
       wp_enqueue_style('prettyPhotocss', get_template_directory_uri() . $assets['prettyPhotocss'], false, null);
       wp_enqueue_style('stylecss', get_template_directory_uri() . $assets['stylecss'], false, null);
       wp_enqueue_style('responsivecss', get_template_directory_uri() . $assets['responsivecss'], false, null);
       wp_enqueue_style('font-awesome', get_template_directory_uri() . $assets['font-awesome'], false, null);
       wp_enqueue_style('owl-carousel', get_template_directory_uri() . $assets['owl-carousel'], false, null);
       wp_enqueue_style('owl-theme', get_template_directory_uri() . $assets['owl-theme'], false, null);
       wp_enqueue_style('owl-transitions', get_template_directory_uri() . $assets['owl-transitions'], false, null);
       wp_enqueue_style('vegas', get_template_directory_uri() . $assets['vegas'], false, null);

  /**

   * jQuery is loaded using the same method from HTML5 Boilerplate:

   * Grab Google CDN's latest jQuery with a protocol relative URL; fallback to local if offline

   * It's kept in the header instead of footer to avoid conflicts with plugins.

   */

  if (!is_admin() && current_theme_supports('jquery-cdn')) {

    wp_deregister_script('jquery');
    wp_register_script('jquery', $assets['jquery'], array(), null, true);

    add_filter('script_loader_src', 'roots_jquery_local_fallback', 10, 2);

  }



  if (is_single() && comments_open() && get_option('thread_comments')) {

    wp_enqueue_script('comment-reply');

  }


  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrap', get_template_directory_uri() . $assets['bootstrap'], array(), null, true);
  wp_enqueue_script('isotope', get_template_directory_uri() . $assets['isotope'], array(), null, true);
  wp_enqueue_script('prettyPhoto', get_template_directory_uri() . $assets['prettyPhoto'], array(), null, true);
  wp_enqueue_script('carousel', get_template_directory_uri() . $assets['carousel'], array(), null, true);
  wp_enqueue_script('vegasjs', get_template_directory_uri() . $assets['vegasjs'], array(), null, true);
  wp_enqueue_script('customjs', get_template_directory_uri() . $assets['customjs'], array(), null, true);
  

}

add_action('wp_enqueue_scripts', 'roots_scripts', 100);



// http://wordpress.stackexchange.com/a/12450

function roots_jquery_local_fallback($src, $handle = null) {

  static $add_jquery_fallback = false;



  if ($add_jquery_fallback) {

    echo '<script>window.jQuery || document.write(\'<script src="' . get_template_directory_uri() . '/assets/vendor/jquery/dist/jquery.min.js?1.11.1"><\/script>\')</script>' . "\n";

    $add_jquery_fallback = false;

  }



  if ($handle === 'jquery') {

    $add_jquery_fallback = true;

  }



  return $src;

}

add_action('wp_head', 'roots_jquery_local_fallback');



/**

 * Google Analytics snippet from HTML5 Boilerplate

 *

 * Cookie domain is 'auto' configured. See: http://goo.gl/VUCHKM

 */

function roots_google_analytics() { ?>

<script>

  <?php if (WP_ENV === 'production') : ?>

    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=

    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;

    e=o.createElement(i);r=o.getElementsByTagName(i)[0];

    e.src='//www.google-analytics.com/analytics.js';

    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));

  <?php else : ?>


    function ga() {

      console.log('GoogleAnalytics: ' + [].slice.call(arguments));

    }

  <?php endif; ?>

  ga('create','<?php echo GOOGLE_ANALYTICS_ID; ?>','auto');ga('send','pageview');

</script>



<?php }

if (GOOGLE_ANALYTICS_ID && (WP_ENV !== 'production' || !current_user_can('manage_options'))) {

  add_action('wp_footer', 'roots_google_analytics', 20);

}