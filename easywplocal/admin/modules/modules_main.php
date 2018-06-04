<?php
if(file_exists(TT_ADMIN_FOLDER_PATH . 'modules/custom_post_type/custom_post_type_lang.php'))
{
	include_once(TT_ADMIN_FOLDER_PATH.'modules/custom_post_type/custom_post_type_lang.php');
}

if(file_exists(TT_ADMIN_FOLDER_PATH . 'modules/custom_post_type/custom_post_type.php'))
{
	include_once(TT_ADMIN_FOLDER_PATH.'modules/custom_post_type/custom_post_type.php');
}

if(file_exists(TT_ADMIN_FOLDER_PATH . 'modules/manage_settings/function_manage_settings.php'))
{
	include_once(TT_ADMIN_FOLDER_PATH . 'modules/manage_settings/function_manage_settings.php');
}
if(file_exists(TT_ADMIN_FOLDER_PATH . 'modules/db_table_creation.php'))
{
	include_once(TT_ADMIN_FOLDER_PATH . 'modules/db_table_creation.php');
}
if(file_exists(TT_ADMIN_FOLDER_PATH . 'modules/basic_settings.php'))
{
	include_once (TT_ADMIN_FOLDER_PATH . 'modules/basic_settings.php');
}
?>