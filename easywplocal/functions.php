<?php

/**

 * BootstrapWP Theme Functions

 *

 * @author Rachel Baker <rachel@rachelbaker.me>

 * @package WordPress

 * @subpackage BootstrapWP

 */



/**

 * Maximum allowed width of content within the theme.

 */

define('TT_ADMIN_FOLDER_NAME','admin');

define('TT_ADMIN_FOLDER_PATH',TEMPLATEPATH.'/'.TT_ADMIN_FOLDER_NAME.'/'); //admin folder path



include_once(TT_ADMIN_FOLDER_PATH.'admin_main.php');  //ALL ADMIN FILE INTEGRATOR



if(file_exists(TT_ADMIN_FOLDER_PATH . 'constants/constants.php')){

	include_once(TT_ADMIN_FOLDER_PATH.'constants/constants.php');  //ALL CONSTANTS FILE INTEGRATOR

}



if(file_exists(TT_ADMIN_FOLDER_PATH . 'widgets/widgets_main.php')){

include_once (TT_ADMIN_FOLDER_PATH . 'widgets/widgets_main.php'); // theme widgets in the file

}



if(file_exists(TT_ADMIN_FOLDER_PATH . 'auto_install/auto_install.php')){

include_once (TT_ADMIN_FOLDER_PATH . 'auto_install/auto_install.php'); // sample data insert file

}



if(file_exists(TT_ADMIN_FOLDER_PATH . 'modules/modules_main.php')){

include_once (TT_ADMIN_FOLDER_PATH . 'modules/modules_main.php'); // Theme moduels include file

}





if ( ! isset( $content_width ) )

	$content_width = 640;



/** Tell WordPress to run twentyten_setup() when the 'after_setup_theme' hook is run. */

add_action( 'after_setup_theme', 'twentyten_setup' );



if ( ! function_exists( 'twentyten_setup' ) ):

/**

 * Sets up theme defaults and registers support for various WordPress features.

 *

 * Note that this function is hooked into the after_setup_theme hook, which runs

 * before the init hook. The init hook is too late for some features, such as indicating

 * support post thumbnails.

 *

 * To override twentyten_setup() in a child theme, add your own twentyten_setup to your child theme's

 * functions.php file.

 *

 * @uses add_theme_support() To add support for post thumbnails and automatic feed links.

 * @uses register_nav_menus() To add support for navigation menus.

 * @uses add_custom_background() To add support for a custom background.

 * @uses add_editor_style() To style the visual editor.

 * @uses load_theme_textdomain() For translation/localization support.

 * @uses add_custom_image_header() To add support for a custom header.

 * @uses register_default_headers() To register the default custom header images provided with the theme.

 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.

 *

 * @since Twenty Ten 1.0

 */

function twentyten_setup() {



	// This theme styles the visual editor with editor-style.css to match the theme style.

	add_editor_style();



	// Post Format support. You can also use the legacy "gallery" or "asides" (note the plural) categories.

	add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );



	// This theme uses post thumbnails

	add_theme_support( 'post-thumbnails' );



	// Add default posts and comments RSS feed links to head

	add_theme_support( 'automatic-feed-links' );



	// Make theme available for translation

	// Translations can be filed in the /languages/ directory

	load_theme_textdomain( 'twentyten', TEMPLATEPATH . '/languages' );



	$locale = get_locale();

	$locale_file = TEMPLATEPATH . "/languages/$locale.php";

	if ( is_readable( $locale_file ) )

		require_once( $locale_file );



	// This theme allows users to set a custom background

	add_custom_background();



	// Your changeable header business starts here

	if ( ! defined( 'HEADER_TEXTCOLOR' ) )

		define( 'HEADER_TEXTCOLOR', '' );



	// No CSS, just IMG call. The %s is a placeholder for the theme template directory URI.

	if ( ! defined( 'HEADER_IMAGE' ) )

		define( 'HEADER_IMAGE', '%s/images/headers/path.jpg' );



	// The height and width of your custom header. You can hook into the theme's own filters to change these values.

	// Add a filter to twentyten_header_image_width and twentyten_header_image_height to change these values.

	define( 'HEADER_IMAGE_WIDTH', apply_filters( 'twentyten_header_image_width', 940 ) );

	define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'twentyten_header_image_height', 198 ) );



	// We'll be using post thumbnails for custom header images on posts and pages.

	// We want them to be 940 pixels wide by 198 pixels tall.

	// Larger images will be auto-cropped to fit, smaller ones will be ignored. See header.php.

	set_post_thumbnail_size( HEADER_IMAGE_WIDTH, HEADER_IMAGE_HEIGHT, true );



	// Don't support text inside the header image.

	if ( ! defined( 'NO_HEADER_TEXT' ) )

		define( 'NO_HEADER_TEXT', true );



	// Add a way for the custom header to be styled in the admin panel that controls

	// custom headers. See twentyten_admin_header_style(), below.

	add_custom_image_header( '', 'twentyten_admin_header_style' );



	// ... and thus ends the changeable header business.



	// Default custom headers packaged with the theme. %s is a placeholder for the theme template directory URI.

	register_default_headers( array(

		'berries' => array(

			'url' => '%s/images/headers/berries.jpg',

			'thumbnail_url' => '%s/images/headers/berries-thumbnail.jpg',

			/* translators: header image description */

			'description' => __( 'Berries', 'twentyten' )

		),

		'cherryblossom' => array(

			'url' => '%s/images/headers/cherryblossoms.jpg',

			'thumbnail_url' => '%s/images/headers/cherryblossoms-thumbnail.jpg',

			/* translators: header image description */

			'description' => __( 'Cherry Blossoms', 'twentyten' )

		),

		'concave' => array(

			'url' => '%s/images/headers/concave.jpg',

			'thumbnail_url' => '%s/images/headers/concave-thumbnail.jpg',

			/* translators: header image description */

			'description' => __( 'Concave', 'twentyten' )

		),

		'fern' => array(

			'url' => '%s/images/headers/fern.jpg',

			'thumbnail_url' => '%s/images/headers/fern-thumbnail.jpg',

			/* translators: header image description */

			'description' => __( 'Fern', 'twentyten' )

		),

		'forestfloor' => array(

			'url' => '%s/images/headers/forestfloor.jpg',

			'thumbnail_url' => '%s/images/headers/forestfloor-thumbnail.jpg',

			/* translators: header image description */

			'description' => __( 'Forest Floor', 'twentyten' )

		),

		'inkwell' => array(

			'url' => '%s/images/headers/inkwell.jpg',

			'thumbnail_url' => '%s/images/headers/inkwell-thumbnail.jpg',

			/* translators: header image description */

			'description' => __( 'Inkwell', 'twentyten' )

		),

		'path' => array(

			'url' => '%s/images/headers/path.jpg',

			'thumbnail_url' => '%s/images/headers/path-thumbnail.jpg',

			/* translators: header image description */

			'description' => __( 'Path', 'twentyten' )

		),

		'sunset' => array(

			'url' => '%s/images/headers/sunset.jpg',

			'thumbnail_url' => '%s/images/headers/sunset-thumbnail.jpg',

			/* translators: header image description */

			'description' => __( 'Sunset', 'twentyten' )

		)

	) );

}

endif;



if ( ! function_exists( 'twentyten_admin_header_style' ) ) :

/**

 * Styles the header image displayed on the Appearance > Header admin panel.

 *

 * Referenced via add_custom_image_header() in twentyten_setup().

 *

 * @since Twenty Ten 1.0

 */

function twentyten_admin_header_style() {

?>

<style type="text/css">

/* Shows the same border as on front end */

#headimg {

	border-bottom: 1px solid #000;

	border-top: 4px solid #000;

}

/* If NO_HEADER_TEXT is false, you would style the text with these selectors:

	#headimg #name { }

	#headimg #desc { }

*/

</style>

<?php

}

endif;



/**

 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.

 *

 * To override this in a child theme, remove the filter and optionally add

 * your own function tied to the wp_page_menu_args filter hook.

 *

 * @since Twenty Ten 1.0

 */

function twentyten_page_menu_args( $args ) {

	$args['show_home'] = true;

	return $args;

}

add_filter( 'wp_page_menu_args', 'twentyten_page_menu_args' );



/**

 * Sets the post excerpt length to 40 characters.

 *

 * To override this length in a child theme, remove the filter and add your own

 * function tied to the excerpt_length filter hook.

 *

 * @since Twenty Ten 1.0

 * @return int

 */

function twentyten_excerpt_length( $length ) {

	return 40;

}

add_filter( 'excerpt_length', 'twentyten_excerpt_length' );



/**

 * Returns a "Continue Reading" link for excerpts

 *

 * @since Twenty Ten 1.0

 * @return string "Continue Reading" link

 */

function twentyten_continue_reading_link() {

	return ' <a href="'. get_permalink() . '">' . __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) . '</a>';

}



/**

 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and twentyten_continue_reading_link().

 *

 * To override this in a child theme, remove the filter and add your own

 * function tied to the excerpt_more filter hook.

 *

 * @since Twenty Ten 1.0

 * @return string An ellipsis

 */

function twentyten_auto_excerpt_more( $more ) {

	return ' &hellip;' . twentyten_continue_reading_link();

}

add_filter( 'excerpt_more', 'twentyten_auto_excerpt_more' );



/**

 * Adds a pretty "Continue Reading" link to custom post excerpts.

 *

 * To override this link in a child theme, remove the filter and add your own

 * function tied to the get_the_excerpt filter hook.

 *

 * @since Twenty Ten 1.0

 * @return string Excerpt with a pretty "Continue Reading" link

 */

function twentyten_custom_excerpt_more( $output ) {

	if ( has_excerpt() && ! is_attachment() ) {

		$output .= twentyten_continue_reading_link();

	}

	return $output;

}

add_filter( 'get_the_excerpt', 'twentyten_custom_excerpt_more' );



/**

 * Remove inline styles printed when the gallery shortcode is used.

 *

 * Galleries are styled by the theme in Twenty Ten's style.css. This is just

 * a simple filter call that tells WordPress to not use the default styles.

 *

 * @since Twenty Ten 1.2

 */

add_filter( 'use_default_gallery_style', '__return_false' );



/**

 * Deprecated way to remove inline styles printed when the gallery shortcode is used.

 *

 * This function is no longer needed or used. Use the use_default_gallery_style

 * filter instead, as seen above.

 *

 * @since Twenty Ten 1.0

 * @deprecated Deprecated in Twenty Ten 1.2 for WordPress 3.1

 *

 * @return string The gallery style filter, with the styles themselves removed.

 */

function twentyten_remove_gallery_css( $css ) {

	return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );

}

// Backwards compatibility with WordPress 3.0.

if ( version_compare( $GLOBALS['wp_version'], '3.1', '<' ) )

	add_filter( 'gallery_style', 'twentyten_remove_gallery_css' );



if ( ! function_exists( 'twentyten_comment' ) ) :

/**

 * Template for comments and pingbacks.

 *

 * To override this walker in a child theme without modifying the comments template

 * simply create your own twentyten_comment(), and that function will be used instead.

 *

 * Used as a callback by wp_list_comments() for displaying the comments.

 *

 * @since Twenty Ten 1.0

 */

function twentyten_comment( $comment, $args, $depth ) {

	$GLOBALS['comment'] = $comment;

	switch ( $comment->comment_type ) :

		case '' :

	?>

	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">

		<div id="comment-<?php comment_ID(); ?>">

		<div class="comment-author vcard">

			<?php echo get_avatar( $comment, 40 ); ?>

			<?php printf( __( '%s <span class="says">says:</span>', 'twentyten' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>

		</div><!-- .comment-author .vcard -->

		<?php if ( $comment->comment_approved == '0' ) : ?>

			<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'twentyten' ); ?></em>

			<br />

		<?php endif; ?>



		<div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">

			<?php

				/* translators: 1: date, 2: time */

				printf( __( '%1$s at %2$s', 'twentyten' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)', 'twentyten' ), ' ' );

			?>

		</div><!-- .comment-meta .commentmetadata -->



		<div class="comment-body"><?php comment_text(); ?></div>



		<div class="reply">

			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>

		</div><!-- .reply -->

	</div><!-- #comment-##  -->



	<?php

			break;

		case 'pingback'  :

		case 'trackback' :

	?>

	<li class="post pingback">

		<p><?php _e( 'Pingback:', 'twentyten' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'twentyten' ), ' ' ); ?></p>

	<?php

			break;

	endswitch;

}

endif;



/**

 * Register widgetized areas, including two sidebars and four widget-ready columns in the footer.

 *

 * To override twentyten_widgets_init() in a child theme, remove the action hook and add your own

 * function tied to the init hook.

 *

 * @since Twenty Ten 1.0

 * @uses register_sidebar

 */



/**

 * Removes the default styles that are packaged with the Recent Comments widget.

 *

 * To override this in a child theme, remove the filter and optionally add your own

 * function tied to the widgets_init action hook.

 *

 * This function uses a filter (show_recent_comments_widget_style) new in WordPress 3.1

 * to remove the default style. Using Twenty Ten 1.2 in WordPress 3.0 will show the styles,

 * but they won't have any effect on the widget in default Twenty Ten styling.

 *

 * @since Twenty Ten 1.0

 */

function twentyten_remove_recent_comments_style() {

	add_filter( 'show_recent_comments_widget_style', '__return_false' );

}

add_action( 'widgets_init', 'twentyten_remove_recent_comments_style' );



if ( ! function_exists( 'twentyten_posted_on' ) ) :

/**

 * Prints HTML with meta information for the current post-date/time and author.

 *

 * @since Twenty Ten 1.0

 */

function twentyten_posted_on() {

	printf( __( '<span class="%1$s">Posted on</span> %2$s <span class="meta-sep">by</span> %3$s', 'twentyten' ),

		'meta-prep meta-prep-author',

		sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',

			get_permalink(),

			esc_attr( get_the_time() ),

			get_the_date()

		),

		sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',

			get_author_posts_url( get_the_author_meta( 'ID' ) ),

			sprintf( esc_attr__( 'View all posts by %s', 'twentyten' ), get_the_author() ),

			get_the_author()

		)

	);

}

endif;



if ( ! function_exists( 'twentyten_posted_in' ) ) :

/**

 * Prints HTML with meta information for the current post (category, tags and permalink).

 *

 * @since Twenty Ten 1.0

 */

function twentyten_posted_in() {

	// Retrieves tag list of current post, separated by commas.

	$tag_list = get_the_tag_list( '', ', ' );

	if ( $tag_list ) {

		$posted_in = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyten' );

	} elseif ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {

		$posted_in = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyten' );

	} else {

		$posted_in = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyten' );

	}

	// Prints the string, replacing the placeholders.

	printf(

		$posted_in,

		get_the_category_list( ', ' ),

		$tag_list,

		get_permalink(),

		the_title_attribute( 'echo=0' )

	);

}

endif;



function short_content($num) {

 

$limit = $num+1;

 

$content = str_split(get_the_content());

 

$length = count($content);

 

if ($length>=$num) {

 

$content = array_slice( $content, 0, $num);

 

$content = implode("",$content)."...";

 

echo $content ;

 

} else {

 

the_content();

 

}

 

}



if (!isset($content_width)) {

    $content_width = 770;

}



/**

 * Setup Theme Functions

 *

 */

if (!function_exists('bootstrapwp_theme_setup')):

    function bootstrapwp_theme_setup() {



        load_theme_textdomain('bootstrapwp', get_template_directory() . '/lang');



        add_theme_support('automatic-feed-links');

        add_theme_support('post-thumbnails');

        add_theme_support('post-formats', array( 'aside', 'image', 'gallery', 'link', 'quote', 'status', 'video', 'audio', 'chat' ));

		

		 register_nav_menus(

            array('main' => __('main Menu', 'bootstrapwp'),

            ));

	



        // load custom walker menu class file

        require 'includes/class-bootstrapwp_walker_nav_menu.php';

    }

endif;

add_action('after_setup_theme', 'bootstrapwp_theme_setup');



/**

 * Define post thumbnail size.

 * Add two additional image sizes.

 *

 */

function bootstrapwp_images() {



    set_post_thumbnail_size(260, 180); // 260px wide x 180px high

    add_image_size('bootstrap-small', 300, 200); // 300px wide x 200px high

    add_image_size('bootstrap-medium', 360, 270); // 360px wide by 270px high

}



/**

 * Load CSS styles for theme.

 *

 */

function bootstrapwp_styles_loader() {



    wp_enqueue_style('bootstrapwp-style', get_template_directory_uri() . '/assets/css/bootstrapwp.css', true, '1.0', 'all');

	wp_enqueue_style('bootstrapwp-common', get_template_directory_uri() . '/assets/css/common.css', true, '1.0', 'all');
	
	wp_enqueue_style('slider-common', get_template_directory_uri() . '/assets/css/bjqs.css', true, '1.0', 'all');

    wp_enqueue_style('bootstrapwp-default', get_stylesheet_uri());



}

add_action('wp_enqueue_scripts', 'bootstrapwp_styles_loader');



/**

 * Load JavaScript and jQuery files for theme.

 *

 */

function bootstrapwp_scripts_loader() {



    if (is_singular() && comments_open() && get_option('thread_comments')) {



        wp_enqueue_script('comment-reply');

    }

	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('jquery-validate', get_template_directory_uri() . '/assets/js/jquery.validate.pack.js');
	wp_enqueue_script('slider-js', get_template_directory_uri() . '/assets/js/bjqs-1.3.min.js');
}

add_action('wp_enqueue_scripts', 'bootstrapwp_scripts_loader');



/**

 * Define theme's widget areas.

 *

 */

/* sidebar code */

function wpb_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Sidebar1', 'wpb' ),
		'id' => 'ptthemes_sidebar',
		'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	}

add_action( 'widgets_init', 'wpb_widgets_init' );

// UPLOAD ENGINE
function load_wp_media_files() {
    wp_enqueue_media();
}
add_action( 'admin_enqueue_scripts', 'load_wp_media_files' );

/*sidebar code end */

/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );

/**
 * Required: include OptionTree.
 */
require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );
require( trailingslashit( get_template_directory() ) . 'admin/theme-options.php' );