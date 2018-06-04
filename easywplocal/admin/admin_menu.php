<?php
/////////////////////////////////////////
// ************* Theme Options Page *********** //
$admin_menu_access_level = apply_filters('templ_admin_menu_access_level_filter',8);
define('TEMPL_ACCESS_USER',$admin_menu_access_level);
add_action('admin_menu', 'templ_admin_menu'); //Add new menu block to admin side

add_action('templ_admin_menu', 'templ_add_admin_menu');
function templ_admin_menu()
{
	do_action('templ_admin_menu');	
}
function templ_add_admin_menu(){
	$menu_title = apply_filters('templ_admin_menu_title_filter',__('Theme Settings','templatic'));
	if((strtolower(get_option('ptthemes_use_third_party_data'))=='no' || !get_option('ptthemes_use_third_party_data')) && (strtolower(get_option('pttheme_seo_hide_fields'))=='no' || !get_option('pttheme_seo_hide_fields')))
	{
		include_once(TT_ADMIN_FOLDER_PATH.'seo_settings.php');
	}
	if(function_exists(add_object_page))
    {
       //add_object_page("Admin Menu",  $menu_title, TEMPL_ACCESS_USER, 'theme_settings', 'design', get_bloginfo('template_url').'/assets/ico/fav.png'); // title of new sidebar
    }
    else
    {
      // add_menu_page("Admin Menu",  $menu_title, TEMPL_ACCESS_USER, 'theme_settings', 'design', get_bloginfo('template_url').'/assets/ico/fav.png'); // title of new sidebar
    }	
}
?>