<?php 
global $wpdb,$table_prefix;
/* Custom Post Field TABLE Creation BOF */
$custom_post_meta_db_table_name = strtolower($table_prefix . "templatic_custom_post_fields");
global $custom_post_meta_db_table_name,$wpdb ;
if($wpdb->get_var("SHOW TABLES LIKE \"$custom_post_meta_db_table_name\"") != $custom_post_meta_db_table_name){
$wpdb->query("CREATE TABLE IF NOT EXISTS $custom_post_meta_db_table_name (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `post_type` varchar(255) NOT NULL,
  `admin_title` varchar(255) NOT NULL,
  `field_category` int(8) NOT NULL ,
  `htmlvar_name` varchar(255) NOT NULL,
  `admin_desc` text NOT NULL,
  `site_title` varchar(255) NOT NULL,
  `ctype` varchar(255) NOT NULL COMMENT 'text,checkbox,date,radio,select,textarea,upload',
  `default_value` text NOT NULL,
  `option_values` text NOT NULL,
  `clabels` text NOT NULL,
  `sort_order` int(11) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `is_delete` tinyint(4) NOT NULL DEFAULT '0',
  `is_edit` tinyint(4) NOT NULL DEFAULT '1',
  `is_require` tinyint(4) NOT NULL DEFAULT '0',
  `show_on_page` varchar(20) NOT NULL ,
  `show_on_listing` tinyint(4) NOT NULL DEFAULT '1',
  `show_on_detail` tinyint(4) NOT NULL DEFAULT '1',
  `field_require_desc` text NOT NULL,
  `style_class` varchar(200) NOT NULL,
  `extra_parameter` text NOT NULL,
  `validation_type` varchar(20) NOT NULL,
  `extrafield1` text NOT NULL,
  `extrafield2` text NOT NULL,
  PRIMARY KEY (`cid`)
);");
global $wpdb;

$qry = $wpdb->query("INSERT INTO $custom_post_meta_db_table_name (`cid`, `post_type`, `admin_title`, `field_category`, `htmlvar_name`, `admin_desc`, `site_title`, `ctype`, `default_value`, `option_values`, `clabels`, `sort_order`, `is_active`, `is_delete`, `is_edit`, `is_require`, `show_on_page`, `show_on_listing`, `show_on_detail`, `field_require_desc`, `style_class`, `extra_parameter`, `validation_type`, `extrafield1`, `extrafield2`) VALUES
(1, 'portfolio', 'Homepage slider full image URL', '0', 'portfolio_image', 'To show full image in the homepage slider, mention its URL here.', 'Select Images', 'text', '', '', 'Slider full image URL', 1, 1, 1, '1', 0, 'both_side', 0, 1, '', '', '', ' ', '', '')"); 
}
?>