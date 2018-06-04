<?php
include 'tab_header.php';
?>
<!-- Add /Edit Form For Custom Fields BOF -->
<link rel="stylesheet" href="<?php echo PLUGIN_URL_MANAGE_SETTINGS;?>css/style.css">
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="<?php echo PLUGIN_URL_MANAGE_SETTINGS;?>js/manage_settings.js"></script>

<div class="block" id="option_display_custom_fields">
<?php if($_REQUEST['mod'] == 'custom_fields'){
		include_once('admin_manage_custom_fields_edit.php');
	} else {
		include( 'admin_manage_custom_fields_list.php' ); 
	} ?>
</div>
<?php include TT_ADMIN_TPL_PATH.'footer.php';?>