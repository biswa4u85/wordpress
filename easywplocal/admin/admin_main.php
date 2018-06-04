<?php

include_once(TT_ADMIN_FOLDER_PATH.'custom_functions.php');

if(is_wp_admin())
{
	include_once(TT_ADMIN_FOLDER_PATH.'admin_menu.php');

        if(file_exists(TT_ADMIN_FOLDER_PATH . 'option-tree/ot-loader.php'))
	{
		include_once(TT_ADMIN_FOLDER_PATH.'option-tree/ot-loader.php');
                include_once(TT_ADMIN_FOLDER_PATH.'theme-options.php');
	}
}
?>