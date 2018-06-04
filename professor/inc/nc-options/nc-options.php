<?php

/*
 *
 * Require the framework class before doing anything else, so we can use the defined urls and dirs
 * Also if running on windows you may have url problems, which can be fixed by defining the framework url first
 *
 */
//define('NHP_OPTIONS_URL', site_url('path the options folder'));
if (!class_exists('NHP_Options')) {
    require_once( dirname(__FILE__) . '/options/noptions.php' );
}

defined('WEBNUS_TEXT_DOMAIN') or define('WEBNUS_TEXT_DOMAIN', 'WEBNUS_TEXT_DOMAIN');


/*
 *
 * Custom function for filtering the sections array given by theme, good for child themes to override or add to the sections.
 * Simply include this function in the child themes functions.php file.
 *
 * NOTE: the defined constansts for urls, and dir will NOT be available at this point in a child theme, so you must use
 * get_template_directory_uri() if you want to use any of the built in icons
 *
 */

function add_another_section($sections) {

    //$sections = array();
    $sections[] = array(
        'title' => __('A Section added by hook', WEBNUS_TEXT_DOMAIN),
        'desc' => __('<p class="description">This is a section created by adding a filter to the sections array, great to allow child themes, to add/remove sections from the options.</p>', WEBNUS_TEXT_DOMAIN),
        //all the glyphicons are included in the options folder, so you can hook into them, or link to your own custom ones.
        //You dont have to though, leave it blank for default.
        'icon' => trailingslashit(get_template_directory_uri()) . 'options/img/glyphicons/glyphicons_062_attach.png',
        //Lets leave this as a blank section, no options just some intro text set above.
        'fields' => array()
    );

    return $sections;
}

//function
//add_filter('nhp-opts-sections-twenty_eleven', 'add_another_section');


/*
 *
 * Custom function for filtering the args array given by theme, good for child themes to override or add to the args array.
 *
 */

function change_framework_args($args) {

    //$args['dev_mode'] = false;

    return $args;
}

//function
//add_filter('nhp-opts-args-twenty_eleven', 'change_framework_args');


/*
 * This is the meat of creating the optons page
 *
 * Override some of the default values, uncomment the args and change the values
 * - no $args are required, but there there to be over ridden if needed.
 *
 *
 */

function setup_framework_options() {
    $args = array();

    $theme_dir = get_template_directory_uri() . '/';
    $theme_img_dir = $theme_dir . 'images/';
    $theme_img_bg_dir = $theme_img_dir . 'bgs/';

    //Set it to dev mode to view the class settings/info in the form - default is false
    $args['dev_mode'] = false;

    //google api key MUST BE DEFINED IF YOU WANT TO USE GOOGLE WEBFONTS
    //$args['google_api_key'] = '***';
    //Remove the default stylesheet? make sure you enqueue another one all the page will look whack!
    //$args['stylesheet_override'] = true;
    //Add HTML before the form
    $args['intro_text'] = __('<p>Theme options. all about theme option which can be edited is here.</p>', WEBNUS_TEXT_DOMAIN);

    //Setup custom links in the footer for share icons
    $args['share_icons']['twitter'] = null;

    /* array(
      'link' => 'http://twitter.com/webnus',
      'title' => 'Folow me on Twitter',
      'img' => NHP_OPTIONS_URL.'img/glyphicons/glyphicons_322_twitter.png'
      ); */
    $args['share_icons']['linked_in'] = null;

    /* array(
      'link' => 'http://facebook.com/webnus',
      'title' => 'Find me on LinkedIn',
      'img' => NHP_OPTIONS_URL.'img/glyphicons/glyphicons_320_facebook.png'
      ); */

    //Choose to disable the import/export feature
    $args['show_import_export'] = true;

    //Choose a custom option name for your theme options, the default is the theme name in lowercase with spaces replaced by underscores
    $args['opt_name'] = 'webnus_options';

    //Custom menu icon
    //$args['menu_icon'] = '';
    //Custom menu title for options page - default is "Options"
    $args['menu_title'] = __('Theme Options', WEBNUS_TEXT_DOMAIN);

    //Custom Page Title for options page - default is "Options"
    $args['page_title'] = __('Theme Options', WEBNUS_TEXT_DOMAIN);

    //Custom page slug for options page (wp-admin/themes.php?page=***) - default is "nhp_theme_options"
    $args['page_slug'] = 'theme_options';

    //Custom page capability - default is set to "manage_options"
    //$args['page_cap'] = 'manage_options';
    //page type - "menu" (adds a top menu section) or "submenu" (adds a submenu) - default is set to "menu"
    //$args['page_type'] = 'submenu';
    //parent menu - default is set to "themes.php" (Appearance)
    //the list of available parent menus is available here: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
    //$args['page_parent'] = 'themes.php';
    //custom page location - default 100 - must be unique or will override other items
    $args['page_position'] = 250;

    //Custom page icon class (used to override the page icon next to heading)
    //$args['page_icon'] = 'icon-themes';
    //Want to disable the sections showing as a submenu in the admin? uncomment this line
    //$args['allow_sub_menu'] = false;
    //Set ANY custom page help tabs - displayed using the new help tab API, show in order of definition
    /* $args['help_tabs'][] = array(
      'id' => 'nhp-opts-1',
      'title' => __('Theme Information 1', WEBNUS_TEXT_DOMAIN),
      'content' => __('<p>This is the tab content, HTML is allowed.</p>', WEBNUS_TEXT_DOMAIN)
      );
      $args['help_tabs'][] = array(
      'id' => 'nhp-opts-2',
      'title' => __('Theme Information 2', WEBNUS_TEXT_DOMAIN),
      'content' => __('<p>This is the tab content, HTML is allowed.</p>', WEBNUS_TEXT_DOMAIN)
      );
     */
    //Set the Help Sidebar for the options page - no sidebar by default
    //$args['help_sidebar'] = __('<p>This is the sidebar content, HTML is allowed.</p>', WEBNUS_TEXT_DOMAIN);


	$categories = array();
	$categories = get_categories();
	$category_slug_array = array('');
	foreach($categories as $category){$category_slug_array[] = $category->slug;}


    $args['show_theme_info'] = false;

    $sections = array();

    //Header
    $sections[] = array(
        'icon' => NHP_OPTIONS_URL . 'img/admin-header.png',
        'title' => __('General Options', WEBNUS_TEXT_DOMAIN),
        'fields' => array(
            
            array(
                'id' => 'webnus_favicon',
                'type' => 'upload',
                'title' => __('Favicon', WEBNUS_TEXT_DOMAIN),
                'desc' => __('An ico image that will represent your website\'s favicon (16px x 16px)', WEBNUS_TEXT_DOMAIN),
            ),
            
            array(
                'id' => 'webnus_logo',
                'type' => 'upload',
                'title' => __('Logo', WEBNUS_TEXT_DOMAIN),
                'desc' => __('Please choose an image file for your logo.<br/> For Retina displays please add Image in large size and set custom width.', WEBNUS_TEXT_DOMAIN),
            ),
            
            array(
                'id' => 'webnus_header_fb',
                'type' => 'text',
                'title' => __('Facebook Link', WEBNUS_TEXT_DOMAIN),
            ),

            array(
                'id' => 'webnus_header_tw',
                'type' => 'text',
                'title' => __('Twitter Link', WEBNUS_TEXT_DOMAIN),
            ),

            array(
                'id' => 'webnus_header_lnk',
                'type' => 'text',
                'title' => __('Linkedin Link', WEBNUS_TEXT_DOMAIN),
            ),

            array(
                'id' => 'webnus_header_you',
                'type' => 'text',
                'title' => __('YouTube Link', WEBNUS_TEXT_DOMAIN),
            ),

    ));

    //Home Info
	$sections[] = array(
        'icon' => NHP_OPTIONS_URL . 'img/admin-general.png',
        'title' => __('Home Page', WEBNUS_TEXT_DOMAIN),
        'fields' => array(

            array(
                'id' => 'webnus_home_banner',
                'type' => 'seperator',
                'title' => __('Home Banner', WEBNUS_TEXT_DOMAIN),
                'desc' => __('Home Banner Details Comes here.', WEBNUS_TEXT_DOMAIN),
            ),
            array(
                'id' => 'webnus_home_title',
                'type' => 'text',
                'title' => __('Home Title', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),
            array(
                'id' => 'webnus_home_desc',
                'type' => 'text',
                'title' => __('Home Description', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),
            array(
                'id' => 'webnus_home_img',
                'type' => 'upload',
                'title' => __('Home Image', WEBNUS_TEXT_DOMAIN),
                'desc' => __('Please choose an image file for your home banner.', WEBNUS_TEXT_DOMAIN),
            ),
            array(
                'id' => 'webnus_home_link',
                'type' => 'text',
                'title' => __('Home Link', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),

            
            array(
                'id' => 'webnus_prof_banner',
                'type' => 'seperator',
                'title' => __('Prof Info', WEBNUS_TEXT_DOMAIN),
                'desc' => __('Prof Info Details Comes here.', WEBNUS_TEXT_DOMAIN),
            ),
            array(
                'id' => 'webnus_prof_title',
                'type' => 'text',
                'title' => __('Home Prof Title', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),
            array(
                'id' => 'webnus_prof_desc',
                'type' => 'text',
                'title' => __('Home Prof Description', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),
            array(
                'id' => 'webnus_prof_link',
                'type' => 'text',
                'title' => __('Home Prof Link', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),

            array(
                'id' => 'webnus_libri_banner',
                'type' => 'seperator',
                'title' => __('Libri Info', WEBNUS_TEXT_DOMAIN),
                'desc' => __('Libri Info Details Comes here.', WEBNUS_TEXT_DOMAIN),
            ),
            array(
                'id' => 'webnus_libri_title',
                'type' => 'text',
                'title' => __('Home Libri Title', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),
            array(
                'id' => 'webnus_libri_desc',
                'type' => 'text',
                'title' => __('Home Libri Description', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),
            array(
                'id' => 'webnus_libri_link',
                'type' => 'text',
                'title' => __('Home Libri Link', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),

            array(
                'id' => 'webnus_conferenze_banner',
                'type' => 'seperator',
                'title' => __('Conferenze Info', WEBNUS_TEXT_DOMAIN),
                'desc' => __('Conferenze Info Details Comes here.', WEBNUS_TEXT_DOMAIN),
            ),
            array(
                'id' => 'webnus_conferenze_title',
                'type' => 'text',
                'title' => __('Home Conferenze Title', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),
            array(
                'id' => 'webnus_conferenze_desc',
                'type' => 'text',
                'title' => __('Home Conferenze Description', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),
            array(
                'id' => 'webnus_conferenze_link',
                'type' => 'text',
                'title' => __('Home Conferenze Link', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),

            array(
                'id' => 'webnus_pubblicazionie_banner',
                'type' => 'seperator',
                'title' => __('Pubblicazionie Info', WEBNUS_TEXT_DOMAIN),
                'desc' => __('Pubblicazionie Info Details Comes here.', WEBNUS_TEXT_DOMAIN),
            ),
            array(
                'id' => 'webnus_pubblicazioni_title',
                'type' => 'text',
                'title' => __('Home Pubblicazioni Title', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),
            array(
                'id' => 'webnus_pubblicazionie_desc',
                'type' => 'text',
                'title' => __('Home Pubblicazioni Description', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),
            array(
                'id' => 'webnus_pubblicazioni_link',
                'type' => 'text',
                'title' => __('Home Pubblicazioni Link', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),

    ));

    //Home Info Eng
	$sections[] = array(
        'icon' => NHP_OPTIONS_URL . 'img/admin-general.png',
        'title' => __('Home Page En', WEBNUS_TEXT_DOMAIN),
        'fields' => array(

            array(
                'id' => 'webnus_home_banner_en',
                'type' => 'seperator',
                'title' => __('Home Banner', WEBNUS_TEXT_DOMAIN),
                'desc' => __('Home Banner Details Comes here.', WEBNUS_TEXT_DOMAIN),
            ),
            array(
                'id' => 'webnus_home_title_en',
                'type' => 'text',
                'title' => __('Home Title', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),
            array(
                'id' => 'webnus_home_desc_en',
                'type' => 'text',
                'title' => __('Home Description', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),
            array(
                'id' => 'webnus_home_img_en',
                'type' => 'upload',
                'title' => __('Home Image', WEBNUS_TEXT_DOMAIN),
                'desc' => __('Please choose an image file for your home banner.', WEBNUS_TEXT_DOMAIN),
            ),
            array(
                'id' => 'webnus_home_link_en',
                'type' => 'text',
                'title' => __('Home Link', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),

            
            array(
                'id' => 'webnus_prof_banner_en',
                'type' => 'seperator',
                'title' => __('Prof Info', WEBNUS_TEXT_DOMAIN),
                'desc' => __('Prof Info Details Comes here.', WEBNUS_TEXT_DOMAIN),
            ),
            array(
                'id' => 'webnus_prof_title_en',
                'type' => 'text',
                'title' => __('Home Prof Title', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),
            array(
                'id' => 'webnus_prof_desc_en',
                'type' => 'text',
                'title' => __('Home Prof Description', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),
            array(
                'id' => 'webnus_prof_link_en',
                'type' => 'text',
                'title' => __('Home Prof Link', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),

            array(
                'id' => 'webnus_libri_banner_en',
                'type' => 'seperator',
                'title' => __('Libri Info', WEBNUS_TEXT_DOMAIN),
                'desc' => __('Libri Info Details Comes here.', WEBNUS_TEXT_DOMAIN),
            ),
            array(
                'id' => 'webnus_libri_title_en',
                'type' => 'text',
                'title' => __('Home Libri Title', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),
            array(
                'id' => 'webnus_libri_desc_en',
                'type' => 'text',
                'title' => __('Home Libri Description', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),
            array(
                'id' => 'webnus_libri_link_en',
                'type' => 'text',
                'title' => __('Home Libri Link', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),

            array(
                'id' => 'webnus_conferenze_banner_en',
                'type' => 'seperator',
                'title' => __('Conferenze Info', WEBNUS_TEXT_DOMAIN),
                'desc' => __('Conferenze Info Details Comes here.', WEBNUS_TEXT_DOMAIN),
            ),
            array(
                'id' => 'webnus_conferenze_title_en',
                'type' => 'text',
                'title' => __('Home Conferenze Title', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),
            array(
                'id' => 'webnus_conferenze_desc_en',
                'type' => 'text',
                'title' => __('Home Conferenze Description', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),
            array(
                'id' => 'webnus_conferenze_link_en',
                'type' => 'text',
                'title' => __('Home Conferenze Link', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),

            array(
                'id' => 'webnus_pubblicazionie_banner_en',
                'type' => 'seperator',
                'title' => __('Pubblicazionie Info', WEBNUS_TEXT_DOMAIN),
                'desc' => __('Pubblicazionie Info Details Comes here.', WEBNUS_TEXT_DOMAIN),
            ),
            array(
                'id' => 'webnus_pubblicazioni_title_en',
                'type' => 'text',
                'title' => __('Home Pubblicazioni Title', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),
            array(
                'id' => 'webnus_pubblicazionie_desc_en',
                'type' => 'text',
                'title' => __('Home Pubblicazioni Description', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),
            array(
                'id' => 'webnus_pubblicazioni_link_en',
                'type' => 'text',
                'title' => __('Home Pubblicazioni Link', WEBNUS_TEXT_DOMAIN),
                'std' => ''
            ),

    ));

    /*
     * Footer
     */
    $sections[] = array(
        'icon' => NHP_OPTIONS_URL . 'img/admin-footer.png',
        'title' => __('Footer Options', WEBNUS_TEXT_DOMAIN),
        'desc' => __('<p class="description">Customize Footer</p>', WEBNUS_TEXT_DOMAIN),
        'fields' => array(
			array(
                'id' => 'webnus_footer_copyright',
                'type' => 'text',
                'title' => __('Footer Copyright Text', WEBNUS_TEXT_DOMAIN),

            ),

    ));

      /*
     * 404 PAGE
     */
    $sections[] = array(
        'icon' => NHP_OPTIONS_URL . 'img/admin-404.png',
        'title' => __('404 Page', WEBNUS_TEXT_DOMAIN),
        'desc' => __('<p class="description">Customize Default 404 (Not Found) Page</p>', WEBNUS_TEXT_DOMAIN),
        'fields' => array(
            array(
                'id' => 'webnus_404_text',
                'type' => 'textarea',
                'title' => __('Text To Display', WEBNUS_TEXT_DOMAIN),
                'std' => '<h3>We\'re sorry, but the page you were looking for doesn\'t exist.</h3>'
            ),
    ));


    $tabs = array();

    if (function_exists('wp_get_theme')) {
        $theme_data = wp_get_theme();
        $theme_uri = $theme_data->get('ThemeURI');
        $description = $theme_data->get('Description');
        $author = $theme_data->get('Author');
        $version = $theme_data->get('Version');
        $tags = $theme_data->get('Tags');
    } else {
        $theme_data = wp_get_theme(get_template_directory());
        $theme_uri = $theme_data['URI'];
        $description = $theme_data['Description'];
        $author = $theme_data['Author'];
        $version = $theme_data['Version'];
        $tags = $theme_data['Tags'];
    }

    $theme_info = '<div class="nhp-opts-section-desc">';
    $theme_info .= '<p class="nhp-opts-theme-data description theme-uri">' . __('<strong>Theme URL:</strong> ', WEBNUS_TEXT_DOMAIN) . '<a href="' . $theme_uri . '" target="_blank">' . $theme_uri . '</a></p>';
    $theme_info .= '<p class="nhp-opts-theme-data description theme-author">' . __('<strong>Author:</strong> ', WEBNUS_TEXT_DOMAIN) . $author . '</p>';
    $theme_info .= '<p class="nhp-opts-theme-data description theme-version">' . __('<strong>Version:</strong> ', WEBNUS_TEXT_DOMAIN) . $version . '</p>';
    $theme_info .= '<p class="nhp-opts-theme-data description theme-description">' . $description . '</p>';
    $theme_info .= '<p class="nhp-opts-theme-data description theme-tags">' . __('<strong>Tags:</strong> ', WEBNUS_TEXT_DOMAIN) . implode(', ', $tags) . '</p>';
    $theme_info .= '</div>';



    $tabs['theme_info'] = array(
        'icon' => NHP_OPTIONS_URL . 'img/admin-info.png',
        'title' => __('Theme Information', WEBNUS_TEXT_DOMAIN),
        'content' => $theme_info
    );



    global $NHP_Options;
    $NHP_Options = new NHP_Options($sections, $args, $tabs);
}

//function
add_action('init', 'setup_framework_options', 0);

/*
 *
 * Custom function for the callback referenced above
 *
 */

function my_custom_field($field, $value) {
    print_r($field);
    print_r($value);
}

//function

/*
 *
 * Custom function for the callback validation referenced above
 *
 */

function validate_callback_function($field, $value, $existing_value) {

    $error = false;
    $value = 'just testing';
    /*
      do your validation

      if(something){
      $value = $value;
      }elseif(somthing else){
      $error = true;
      $value = $existing_value;
      $field['msg'] = 'your custom error message';
      }
     */

    $return['value'] = $value;
    if ($error == true) {
        $return['error'] = $field;
    }
    return $return;
}

//function
?>