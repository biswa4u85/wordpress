<?php

include_once(TT_ADMIN_FOLDER_PATH.'custom_functions.php');

if(is_wp_admin())
{
	include_once(TT_ADMIN_FOLDER_PATH.'admin_menu.php');
	
	if(file_exists(TT_ADMIN_FOLDER_PATH . 'theme_options/option_settings.php'))
	{
		include_once(TT_ADMIN_FOLDER_PATH . 'theme_options/option_settings.php');
	}
	if(file_exists(TT_ADMIN_FOLDER_PATH . 'theme_options/functions/functions.load.php'))
	{
		include_once(TT_ADMIN_FOLDER_PATH.'theme_options/functions/functions.load.php');
	}
	// Load ACF options
	if(file_exists(TT_ADMIN_FOLDER_PATH . 'modules/acf-options.php'))
	{
		include_once(TT_ADMIN_FOLDER_PATH.'modules/acf-options.php');
	}
	
	// Load Plugins
	if(file_exists(TT_ADMIN_FOLDER_PATH . 'tgm/tgm-init.php'))
	{
		include_once(TT_ADMIN_FOLDER_PATH.'tgm/tgm-init.php');
	}
}
?>