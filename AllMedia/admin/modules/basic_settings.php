<?php 
function fetch_global_settings($field_name){
	global $wpdb;
	$global_settings = $wpdb->prefix . "global_settings";
	$global_settings_sql = mysql_query("select ".$field_name." from $global_settings");
	$global_settings = mysql_fetch_array($global_settings_sql);
	return $global_settings[$field_name];
} 

function display_wpcategories($taxonomy)
{ 
		global $wpdb;
		$table_prefix = $wpdb->prefix;
		$wpcat_id = NULL;
		$wpcategories = (array)$wpdb->get_results("
        SELECT * FROM {$table_prefix}terms, {$table_prefix}term_taxonomy
        WHERE {$table_prefix}terms.term_id = {$table_prefix}term_taxonomy.term_id
                AND {$table_prefix}term_taxonomy.taxonomy ='".$taxonomy."' AND {$table_prefix}term_taxonomy.parent = 0 ORDER BY {$table_prefix}terms.name");
		
		$wpcategories = array_values($wpcategories);
		$wpcat2 = NULL;
			echo "<select name='field_category'>";
		 	foreach ($wpcategories as $wpcat)
    		{
					echo "<option value='".$wpcat->term_id."'>".apply_filters('single_cat_title', stripslashes(str_replace('"', '', ucfirst($wpcat->name)." ")))."</option>";
					 $wpsubcategories = (array)$wpdb->get_results("
					SELECT * FROM {$table_prefix}terms, {$table_prefix}term_taxonomy
					WHERE {$table_prefix}terms.term_id = {$table_prefix}term_taxonomy.term_id
							AND {$table_prefix}term_taxonomy.taxonomy = '".$taxonomy."' AND {$table_prefix}term_taxonomy.parent = '".$wpcat->term_id."'");
					if(mysql_affected_rows() >0)
					{
						foreach ($wpsubcategories as $wpscat)
						{
							echo "<option value='".$wpscat->term_id."'>".apply_filters('single_cat_title', "-".stripslashes(str_replace('"', '', ucfirst($wpscat->name)." ")))."</option>";
						}
					}
			}
			echo "</select><br/>"; 
}
/* fetch categories options */
function display_wpcategories_options($taxonomy,$cid)
{ 
		if($taxonomy == "")
		{
			$taxonomy ="category";
		}
		global $wpdb;
		$table_prefix = $wpdb->prefix;
		$wpcat_id = NULL;
		$wpcategories = (array)$wpdb->get_results("
        SELECT * FROM {$table_prefix}terms, {$table_prefix}term_taxonomy
        WHERE {$table_prefix}terms.term_id = {$table_prefix}term_taxonomy.term_id
                AND {$table_prefix}term_taxonomy.taxonomy ='".$taxonomy."' AND {$table_prefix}term_taxonomy.parent = 0 ORDER BY {$table_prefix}terms.name");
		
		$wpcategories = array_values($wpcategories);
		$wpcat2 = NULL;

		 	foreach ($wpcategories as $wpcat)
    		{ ?>
				<option value="<?php echo $wpcat->term_id; ?>" <?php if($wpcat->term_id == $cid) { echo 'selected="selected"'; } ?>><?php echo apply_filters('single_cat_title', stripslashes(str_replace('"', '', ucfirst($wpcat->name)." "))); ?></option>
			<?php		 $wpsubcategories = (array)$wpdb->get_results("
					SELECT * FROM {$table_prefix}terms, {$table_prefix}term_taxonomy
					WHERE {$table_prefix}terms.term_id = {$table_prefix}term_taxonomy.term_id
							AND {$table_prefix}term_taxonomy.taxonomy = '".$taxonomy."' AND {$table_prefix}term_taxonomy.parent = '".$wpcat->term_id."'");
					if(mysql_affected_rows() >0)
					{
						foreach ($wpsubcategories as $wpscat)
						{ ?>
						<option value="<?php echo $wpscat->term_id; ?>" <?php if($wpcat->term_id == $cid) { echo 'selected="selected"'; } ?>><?php echo apply_filters('single_cat_title', "-".stripslashes(str_replace('"', '', ucfirst($wpscat->name)." "))); ?></option>
					<?php	}
					}
			}
}
/* end of function */

/* function to display dropdown of taxonomies term */
function get_wp_post_categores($taxonomy)
{ 
		global $wpdb;
		$table_prefix = $wpdb->prefix;
		$wpcategories = (array)$wpdb->get_results("
        SELECT * FROM {$table_prefix}terms, {$table_prefix}term_taxonomy
        WHERE {$table_prefix}terms.term_id = {$table_prefix}term_taxonomy.term_id
                AND {$table_prefix}term_taxonomy.taxonomy ='".$taxonomy."' AND {$table_prefix}term_taxonomy.parent = 0 ORDER BY {$table_prefix}terms.name");
		
		$wpcategories = array_values($wpcategories);

			echo "<select name='post_category'  class='textfield sctof' id='post_category' echo='0'>";
			echo "<option value='0' selected='selected'>Select category</option>";
		 	foreach ($wpcategories as $wpcat)
    		{
					echo "<option value='".$wpcat->term_id."'>".apply_filters('single_cat_title', stripslashes(str_replace('"', '', ucfirst($wpcat->name)." ")))."</option>";
					 $wpsubcategories = (array)$wpdb->get_results("
					SELECT * FROM {$table_prefix}terms, {$table_prefix}term_taxonomy
					WHERE {$table_prefix}terms.term_id = {$table_prefix}term_taxonomy.term_id
							AND {$table_prefix}term_taxonomy.taxonomy = '".$taxonomy."' AND {$table_prefix}term_taxonomy.parent = '".$wpcat->term_id."'");
					if(mysql_affected_rows() >0)
					{
						foreach ($wpsubcategories as $wpscat)
						{
							echo "<option value='".$wpscat->term_id."'>".apply_filters('single_cat_title', "-".stripslashes(str_replace('"', '', ucfirst($wpscat->name)." ")))."</option>";
						}
					}
			}
			echo "</select>"; 
}
/* end of function  */
function get_categoty_name($cat_id)
{
	global $wpdb;
		$table_prefix = $wpdb->prefix;
		$wpcat_id = NULL; 
	
		$wpcategories = $wpdb->get_row("
        SELECT * FROM {$table_prefix}terms
        WHERE {$table_prefix}terms.term_id = '".$cat_id."'");
	    _e($wpcategories->name,'templatic');
}
function get_post_custom_fields_templatic($cat_id)
{ 
	global $wpdb,$custom_post_meta_db_table_name;

	$post_meta_info = $wpdb->get_results("select * from $custom_post_meta_db_table_name where is_active=1 and post_type = '".CUSTOM_POST_TYPE1."' and field_category = '".$cat_id."' order by sort_order asc,admin_title asc");
	$return_arr = array();
	if($post_meta_info){
		foreach($post_meta_info as $post_meta_info_obj){	
			if($post_meta_info_obj->ctype){
			$options = explode(',',$post_meta_info_obj->option_values);
			}
			$custom_fields = array(
					"name"		=> $post_meta_info_obj->htmlvar_name,
					"label" 	=> $post_meta_info_obj->clabels,
					"default" 	=> $post_meta_info_obj->default_value,
					"type" 		=> $post_meta_info_obj->ctype,
					"desc"      => $post_meta_info_obj->admin_desc,
					"option_values"  => $post_meta_info_obj->option_values,
					"site_title"     => $post_meta_info_obj->site_title,
					);
			if($options)
			{
				$custom_fields["options"]=$options;
			}
			$return_arr[$post_meta_info_obj->htmlvar_name] = $custom_fields;
		}
	}
	return $return_arr;
}


/* set option BOF*/
function set_option_selling($option_name,$option_value){
	global $wpdb;
	$option_sql = "select option_value from $wpdb->options where option_name='$option_name'";
	$option_info = $wpdb->get_results($option_sql);
	if($option_info)	{
		update_option($option_name,$option_value);
	} else {
		$insertoption = "insert into $wpdb->options (option_name,option_value) values ('$option_name','$option_value')";
		$wpdb->query($insertoption);
	}
}
/* set option EOF*/
?>