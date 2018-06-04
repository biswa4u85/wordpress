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
function templ_add_admin_menu(){}
?>