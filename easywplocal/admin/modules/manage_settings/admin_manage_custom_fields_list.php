<?php
global $wpdb,$custom_post_meta_db_table_name;
if($_REQUEST['pagetype']=='delete')
{
	$cid = $_REQUEST['cf'];
	$wpdb->query("delete from $custom_post_meta_db_table_name where cid=\"$cid\"");
	$url = site_url().'/wp-admin/admin.php';
	echo '<form action="'.$url.'#option_display_custom_fields" method="get" id="frm_custom_field" name="frm_custom_field">
	<input type="hidden" value="manage_settings" name="page"><input type="hidden" value="delsuccess" name="custom_field_msg">
	</form>
	<script>document.frm_custom_field.submit();</script>
	';exit;	
}
?>
	<h4><?php _e('Manage custom fields','templatic');?> <a href="<?php echo site_url().'/wp-admin/admin.php?page=manage_settings&mod=custom_fields#option_display_custom_fields';?>" title="<?php _e('Add custom field','templatic');?>" name="btnviewlisting" class="l_add_new" /><?php _e('Add custom field','templatic'); ?></a> </h4>
    
    <p class="notes_spec"><?php _e('In this section, you can add, delete and manage the custom fields appearing in the submit post.','templatic');?></p>


<?php if(isset($_REQUEST['custom_field_msg'])) {?>
<div class="updated fade below-h2" id="message" style="padding:5px; font-size:11px;" >
<?php if($_REQUEST['custom_field_msg']=='delsuccess'){
		_e('Custom field deleted successfully.','templatic');	
	} if($_REQUEST['custom_field_msg']=='success'){
		if($_REQUEST['custom_msg_type']=='add') {
			_e('Custom field created successfully.','templatic');
		} else {
			_e('Custom field updated successfully.','templatic');
		}
	}
?></div>
<?php } ?>
<table width="100%"  class="widefat post" >
  <thead>
    <tr>
      <th><?php _e('Admin Title','templatic');?></th>
      <th><?php _e('Post Type','templatic');?></th>
      <th align="center"><?php _e('Type','templatic');?></th>
      <th align="center"><?php _e('Activated?','templatic');?></th>
      <th><?php _e('Action','templatic');?></th>
    </tr>
<?php
$post_meta_info = $wpdb->get_results("select * from $custom_post_meta_db_table_name order by sort_order asc,admin_title asc");
if($post_meta_info){
	foreach($post_meta_info as $post_meta_info_obj){
	?>
     <tr>
      <td><?php echo $post_meta_info_obj->admin_title;?></td>
      <td><?php echo $post_meta_info_obj->post_type;?></td>
      <td><?php echo $post_meta_info_obj->ctype;?></td>
      <td><?php if($post_meta_info_obj->is_active) _e('Yes','templatic'); else _e('No','templatic');?></td>
      <td>
	 <a href="javascript:void(0);showdetail('<?php echo $post_meta_info_obj->cid;?>');"><img src="<?php echo get_template_directory_uri(); ?>/images/details.png" alt="<?php _e('Detail','templatic');?>" title="<?php _e('Detail','templatic');?>" border="0" /></a> &nbsp;&nbsp; 
     <a href="<?php echo site_url().'/wp-admin/admin.php?page=manage_settings&mod=custom_fields&cf='.$post_meta_info_obj->cid.'#option_display_custom_fields';?>" title="<?php _e('Edit Field','templatic');?>"><img src="<?php echo get_template_directory_uri(); ?>/images/edit.png" alt="<?php _e('Edit Field','templatic');?>" border="0" /></a> <?php if($post_meta_info_obj->is_delete=='0'){?>&nbsp;&nbsp;
	  <a href="<?php echo site_url().'/wp-admin/admin.php?page=manage_settings&pagetype=delete&cf='.$post_meta_info_obj->cid;?>#option_display_custom_fields" onclick="return confirmSubmit();" title="<?php _e('Delete Field','templatic');?>"><img src="<?php echo get_template_directory_uri(); ?>/images/delete.png" alt="<?php _e('Delete Field','templatic');?>" border="0" /></a><?php }?>
      </td>
      </tr>
      <tr id="detail_<?php echo $post_meta_info_obj->cid;?>" style="display:none;">
      <td colspan="5">
      <table style="background-color:#eee;" width="100%">
      <tr>
        <td><?php _e('Admin Title','templatic')?> : <strong><?php echo $post_meta_info_obj->admin_title;?></strong></td>
        <td><?php _e('Category ','templatic')?> : <strong><?php get_categoty_name($post_meta_info_obj->field_category);?></strong></td>
        <td><?php _e('Post Type','templatic')?> : <strong><?php echo $post_meta_info_obj->post_type;?></strong></td>

     </tr> 
	<tr>
	        <td><?php _e('Display Order','templatic')?> : <strong><?php echo $post_meta_info_obj->sort_order;?></strong></td>
	<td><?php _e('Type','templatic')?> : <strong><?php echo $post_meta_info_obj->ctype;?></strong></td>
	<td><?php _e('Defaule Value','templatic')?> : <strong><?php echo $post_meta_info_obj->default_value;?></strong></td>

	 
	</tr>
	<tr>    
		<td><?php _e('Is Display On Detail?','templatic')?> : <strong><?php if($post_meta_info_obj->show_on_detail) _e('Yes','templatic'); else _e('No','templatic');?></strong></td>
		<td><?php _e('Front Title','templatic')?> : <strong><?php echo $post_meta_info_obj->site_title;?></strong></td>
        <td><?php _e('Activated?','templatic')?> : <strong><?php if($post_meta_info_obj->is_active) _e('Yes','templatic'); else _e('No','templatic');?></strong></td>
		
	</tr>
      
       <tr>   
		<td><?php _e('Is Display On listing?','templatic')?> : <strong><?php if($post_meta_info_obj->show_on_listing) _e('Yes','templatic'); else _e('No','templatic');?></strong></td>	   
      	<td><?php _e('HTML Variable Name','templatic')?> : <strong><?php echo $post_meta_info_obj->htmlvar_name;?></strong></td>
		
         <td><?php _e('Use at front end','templatic')?> : <strong><?php if($post_meta_info_obj->is_delete=='0'){echo 'get_post_meta($post->ID,"'.$post_meta_info_obj->htmlvar_name.'",true)';}elseif($post_meta_info_obj->is_delete=='1'){_e('Theme Default Field','templatic');}elseif($post_meta_info_obj->ctype=='head'){_e('Heading','templatic');}?></strong></td>
      </tr>
      </table>
      </td>
      </tr>
    <?php	
	}
}else
{
?>
     <tr><td colspan="9"><?php _e('No Custom fields available.','templatic');?></td></tr>
<?php		
}
?>
  </thead>
</table>
<script type="text/javascript">
function showdetail(custom_id)
{
	if(document.getElementById('detail_'+custom_id).style.display=='none')
	{
		document.getElementById('detail_'+custom_id).style.display='';
	}else
	{
		document.getElementById('detail_'+custom_id).style.display='none';	
	}
}
</script>
<div class="legend_section">
<h5><?php _e('Legend','templatic');?> :</h5>
<ul>
<li><img src="<?php echo get_template_directory_uri(); ?>/images/details.png" alt="<?php _e('Detail Field','templatic');?>" border="0" /> <?php _e('Field details','templatic');?></li>
<li><img src="<?php echo get_template_directory_uri(); ?>/images/edit.png" alt="<?php _e('Edit Field','templatic');?>" border="0" />  <?php _e('Edit field','templatic');?></li>
<li><img src="<?php echo get_template_directory_uri(); ?>/images/delete.png" alt="<?php _e('Delete Field','templatic');?>" border="0" /> <?php _e('Delete field','templatic');?></li>
</ul>
</div>