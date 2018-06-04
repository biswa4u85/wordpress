<?php
global $wpdb,$custom_post_meta_db_table_name;
$cf = $_REQUEST['cf'];
$post_meta_info = $wpdb->get_results("select * from $custom_post_meta_db_table_name where cid= \"$cf\"");
if($post_meta_info){
	$post_val = $post_meta_info[0];
}else
{
	$post_val->sort_order = $wpdb->get_var("select max(sort_order)+1 from  $custom_post_meta_db_table_name");
}
if($_POST)
{
	$admin_title = $_POST['admin_title'];
	$field_cat = '';
	$site_title = $_POST['site_title'];
	$ctype = $_POST['ctype'];
	$htmlvar_name = $_POST['htmlvar_name'];
	$admin_desc = $_POST['admin_desc'];
	$clabels = $_POST['clabels'];
	$default_value = $_POST['default_value'];
	$sort_order = $_POST['sort_order'];
	$is_active = $_POST['is_active'];
	$show_on_listing = $_POST['show_on_listing'];
	$show_on_detail = $_POST['show_on_detail'];
	$ptype = explode(',',$_POST['post_type']);
	$post_type = $ptype[0];
	$option_values = $_POST['option_values'];
	$is_require = $_POST['is_require'];
	$extra_parameter = $_POST['extra_parameter'];
	$validation_type = $_POST['validation_type'];
	$field_require_desc = stripslashes($_POST['field_require_desc']);
	$style_class = $_POST['style_class'];
	$custom_field_check = $wpdb->get_var("SHOW COLUMNS FROM $custom_post_meta_db_table_name LIKE 'field_category'");
	if('field_category' != $custom_field_check)	{
		$custom_dbuser_table_alter = $wpdb->query("ALTER TABLE $custom_post_meta_db_table_name  ADD `field_category` TEXT NOT NULL AFTER `admin_title`");
	}	
	if($_REQUEST['cf'])
	{
		$cf = $_REQUEST['cf'];
		if($_REQUEST['is_delete']=='1'){
			$sql = "update $custom_post_meta_db_table_name set admin_title=\"$admin_title\" ,site_title=\"$site_title\"  ,admin_desc=\"$admin_desc\" ,clabels=\"$clabels\" ,default_value=\"$default_value\" ,sort_order=\"$sort_order\", is_active=\"$is_active\" where cid=\"$cf\"";
		}else{
		 $sql = "update $custom_post_meta_db_table_name set admin_title=\"$admin_title\",field_category= \"$field_cat\",post_type=\"$post_type\",site_title=\"$site_title\" ,ctype=\"$ctype\" ,htmlvar_name=\"$htmlvar_name\",admin_desc=\"$admin_desc\" ,clabels=\"$clabels\" ,default_value=\"$default_value\" ,sort_order=\"$sort_order\",is_active=\"$is_active\",is_require=\"$is_require\",show_on_listing=\"$show_on_listing\",show_on_detail=\"$show_on_detail\", option_values=\"$option_values\",extra_parameter = '".$extra_parameter."',style_class = '".$style_class."',validation_type = '".$validation_type."',field_require_desc = '".addslashes($field_require_desc)."' where cid=\"$cf\"";
		}
		
		$wpdb->query($sql);
		$msgtype = 'edit';
	}else
	{
		 $sql = "insert into $custom_post_meta_db_table_name (admin_title,field_category,post_type,site_title,ctype,htmlvar_name,admin_desc,clabels,default_value,sort_order,is_active,is_require,show_on_listing,show_on_detail,option_values,field_require_desc,style_class,extra_parameter,validation_type) values ('".$admin_title."','".$field_cat."','".$post_type."','".$site_title."','".$ctype."','".$htmlvar_name."','".$admin_desc."','".$clabels."','".$default_value."','".$sort_order."','".$is_active."','".$is_require."','".$show_on_listing."','".$show_on_detail."','".$option_values."','".addslashes($field_require_desc)."','".$style_class."','".$extra_parameter."','".$validation_type."')";
	
		$wpdb->query($sql);
		$cf = $wpdb->get_var("select max(cid) from $custom_post_meta_db_table_name");
		$msgtype = 'add';
		
	}
	
	$location = site_url().'/wp-admin/admin.php';
	echo '<form action="'.$location.'#option_display_custom_fields" method="get" id="frm_edit_custom_fields" name="frm_edit_custom_fields">
	<input type="hidden" value="manage_settings" name="page"><input type="hidden" value="success" name="custom_field_msg"><input type="hidden" value="'.$msgtype.'" name="custom_msg_type">
	</form>
	<script>document.frm_edit_custom_fields.submit();</script>
	';exit;
}
?>
<!-- Function to fetch categories -->
<script>
function showcat(str)
{  	
	if (str=="")
	  {
	  document.getElementById("field_category").innerHTML="";
	  return;
	  }else{
	  document.getElementById("field_category").innerHTML="";
	  document.getElementById("process").style.display ="block";
	  }
		if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
		else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
		xmlhttp.onreadystatechange=function()
	  {
	    if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("process").style.display ="none";
		document.getElementById("field_category").innerHTML=xmlhttp.responseText;
		}
	  } 
	  url = "<?php echo get_template_directory_uri(); ?>/monetize/manage_settings/ajax_custom_taxonomy.php?post_type="+str
	  xmlhttp.open("GET",url,true);
	  xmlhttp.send();
} 
</script>
<h4><?php if($_REQUEST['cf']){  _e('Edit Custom Fields','templatic'); 
	$custom_msg = 'Here you can edit custom field detail.'; }else { _e('Add Custom Fields','templatic'); $custom_msg = 'Here you can add custom field detail.';}?> 
    
    <a href="<?php echo site_url();?>/wp-admin/admin.php?page=manage_settings#option_display_custom_fields" name="btnviewlisting" class="l_add_new" title="<?php _e('Back to manage custom field list','templatic');?>"/><?php _e('&laquo; Back to manage custom field list','templatic'); ?></a>
    </h4>
    
    <p class="notes_spec"><?php _e($custom_msg,'templatic');?></p>

 
<form action="<?php echo site_url();?>/wp-admin/admin.php?page=manage_settings&mod=custom_fields&act=addedit#option_display_custom_fields" method="post" name="custom_fields_frm" onsubmit="return chk_field_form();">
<input type="hidden" name="save" value="1" /> <input type="hidden" name="is_delete" value="<?php echo $post_val->is_delete;?>" />
<?php if($_REQUEST['cf']){?>
<input type="hidden" name="cf" value="<?php echo $_REQUEST['cf'];?>" />
<?php }?>

<div class="option option-select">
    <h3><?php _e('Post Type : ','templatic');?></h3>
    <div class="section">
      <div class="element">
	  <?php
				$custom_post_types_args = array();  
                $custom_post_types = get_post_types($custom_post_types_args,'objects');   
				//print_r($custom_post_types);
	
	  ?>
                 <select name="post_type" id="post_type"  <?php if($post_val->is_delete=='1'){?> disabled="disabled" <?php }?> onChange="showcat(this.value)">
				  <?php
					foreach ($custom_post_types as $content_type) {
                    if($content_type->name!='nav_menu_item' && $content_type->name!='attachment' && $content_type->name!='revision' && $content_type->name!='page'){
                  ?>
                  <option value="<?php echo $content_type->name.",".$content_type->taxonomies[0].",".$post_val->field_category; ?>" <?php if($post_val->post_type==$content_type->name){ echo 'selected="selected"';}?>><?php echo $content_type->label;?></option>
                 <?php }}?>
                  </select>
      	   </div>
      <div class="description"><?php _e('Select Post Type','templatic');?></div>
    </div>
  </div> <!-- #end -->
    
 
  
  
  <div class="option option-select">
    <h3><?php _e('Type : ','templatic');?></h3>
    <div class="section">
      <div class="element">
                   <select name="ctype" id="ctype" onchange="show_option_add(this.value)" <?php if($post_val->is_delete=='1'){?> disabled="disabled" <?php }?>>
                  <option value="text" <?php if($post_val->ctype=='text'){ echo 'selected="selected"';}?>>Text</option>
                   <option value="texteditor" <?php if($post_val->ctype=='texteditor'){ echo 'selected="selected"';}?>>Text Editor</option>
                   <option value="head" <?php if($post_val->ctype=='head'){ echo 'selected="selected"';}?>>Text Heading</option>
                  <option value="checkbox" <?php if($post_val->ctype=='checkbox'){ echo 'selected="selected"';}?>>Checkbox</option>
                  <option value="date" <?php if($post_val->ctype=='date'){ echo 'selected="selected"';}?>>Date Picker</option>
                   <option value="multicheckbox" <?php if($post_val->ctype=='multicheckbox'){ echo 'selected="selected"';}?>>Multi Checkbox</option>
                  <option value="radio" <?php if($post_val->ctype=='radio'){ echo 'selected="selected"';}?>>Radio</option>
                  <option value="select" <?php if($post_val->ctype=='select'){ echo 'selected="selected"';}?>>Select</option>
                  <option value="textarea" <?php if($post_val->ctype=='textarea'){ echo 'selected="selected"';}?>>Textarea</option>
                   <option value="upload" <?php if($post_val->ctype=='upload'){ echo 'selected="selected"';}?>>Upload</option>
                   <option value="image_uploader" <?php if($post_val->ctype=='image_uploader'){ echo 'selected="selected"';}?>>Multiple image uploader</option>
                  </select>
      	   </div>
      <div class="description"><?php _e('Select type','templatic');?></div>
    </div>
  </div> <!-- #end -->


<div class="option option-select" id="ctype_option_tr_id"  <?php if($post_val->ctype=='select'){?> style="display:block;" <?php }else{?> style="display:none;" <?php }?> >
    <h3><?php _e('Option Values : ','templatic');?></h3>
    <div class="section">
      <div class="element">
                   <input type="text" name="option_values" id="option_values" value="<?php echo $post_val->option_values;?>" size="50" />
      </div>
      <div class="description"><?php _e('This Option Values should be separated by comma.','templatic');?></div>
    </div>
  </div> <!-- #end -->
  
  
  <div class="option option-select" id="admin_title_id"  <?php if($post_val->ctype=='head'){?> style="display:none;" <?php }else{?> style="display:block;" <?php }?> >
    <h3><?php _e('Admin Title : ','templatic');?></h3>
    <div class="section">
      <div class="element">
                   <input type="text" name="admin_title" id="admin_title" value="<?php echo $post_val->admin_title;?>" size="50" />
      	   </div>
      <div class="description"><?php _e('Personal comment, it would not be displayed anywhere except in Custom field settings','templatic');?></div>
    </div>
  </div> <!-- #end -->
  
  
  <div class="option option-select" >
    <h3><?php _e('Frontend Title : ','templatic');?></h3>
    <div class="section">
      <div class="element">
                   <input type="text" name="site_title" id="site_title" value="<?php echo $post_val->site_title;?>" size="50" />
      	   </div>
      <div class="description"><?php _e('Title which you wish to display in frontend','templatic');?></div>
    </div>
  </div> <!-- #end -->
  
  
  <div class="option option-select" >
    <h3><?php _e('HTML Variable Name : ','templatic');?></h3>
    <div class="section">
      <div class="element">
                   <input type="text" name="htmlvar_name" id="htmlvar_name" value="<?php echo $post_val->htmlvar_name;?>" size="50" <?php if($post_val->is_delete=='1'){?>  readonly="readonly"<?php }?> />
      	   </div>
      <div class="description"><?php _e('This should be a unique name','templatic');?></div>
    </div>
  </div> <!-- #end -->


  <div class="option option-select" id="admin_label_id"  <?php if($post_val->ctype=='head'){?> style="display:none;" <?php }else{?> style="display:block;" <?php }?>>
    <h3><?php _e('Admin Label : ','templatic');?></h3>
    <div class="section">
      <div class="element">
                   <input type="text" name="clabels" id="clabels" value="<?php echo $post_val->clabels;?>" size="50" />
      	   </div>
      <div class="description"><?php _e('Title which will appear in backend','templatic');?></div>
    </div>
  </div> <!-- #end -->
  
  
  <div class="option option-select" id="admin_desc_id"  <?php if($post_val->ctype=='head'){?> style="display:none;" <?php }else{?> style="display:block;" <?php }?>>
    <h3><?php _e('Description : ','templatic');?></h3>
    <div class="section">
      <div class="element">
                   <input type="text" name="admin_desc" id="admin_desc" value="<?php echo $post_val->admin_desc;?>" size="50" />
      	   </div>
      <div class="description"><?php _e('Description which will appear in backend and frontend','templatic');?></div>
    </div>
  </div> <!-- #end -->
  
  
  <div class="option option-select" id="default_value_id"  <?php if($post_val->ctype=='head'){?> style="display:none;" <?php }else{?> style="display:block;" <?php }?>>
    <h3><?php _e('Default Value : ','templatic');?></h3>
    <div class="section">
      <div class="element">
                   <input type="text" name="default_value" id="default_value" value="<?php echo $post_val->default_value;?>" size="50" />
      	   </div>
      <div class="description"><?php _e('Enter the default value','templatic');?></div>
    </div>
  </div> <!-- #end -->
  
  
  <div class="option option-select" >
    <h3><?php _e('Display Order : ','templatic');?></h3>
    <div class="section">
      <div class="element">
                   <input type="text" name="sort_order" id="sort_order"  value="<?php echo $post_val->sort_order;?>" size="50" />
      	   </div>
      <div class="description"><?php _e('Enter the display order of this field in backend and frontend. e.g. 5 ','templatic');?></div>
    </div>
  </div> <!-- #end -->
  
  <div class="option option-select" >
    <h3><?php _e('Activate : ','templatic');?></h3>
    <div class="section">
      <div class="element">
                   <select name="is_active" id="is_active">
                  <option value="1" <?php if($post_val->is_active=='1'){ echo 'selected="selected"';}?>><?php _e('Yes','templatic');?></option>
                  <option value="0" <?php if($post_val->is_active=='0'){ echo 'selected="selected"';}?>><?php _e('No','templatic');?></option>
                  </select>
      	   </div>
      <div class="description"><?php _e('Select Yes or No. If NO is selected then the field will not be displayed anywhere','templatic');?></div>
    </div>
  </div> <!-- #end -->
  
  
   <div class="option option-select" id="is_require_id"  <?php if($post_val->ctype=='head'){?> style="display:none;" <?php }else{?> style="display:block;" <?php }?>>
    <h3><?php _e('Compulsory : ','templatic');?></h3>
    <div class="section">
      <div class="element">
                    <select name="is_require" id="is_require" <?php if($post_val->is_delete=='1'){?> disabled="disabled" <?php }?>>
                  <option value="1" <?php if($post_val->is_require=='1'){ echo 'selected="selected"';}?>><?php _e('Yes','templatic');?></option>
                  <option value="0" <?php if($post_val->is_require=='0'){ echo 'selected="selected"';}?>><?php _e('No','templatic');?></option>
                  </select>
      	   </div>
      <div class="description"><?php _e('Select if you want this field to be compulsory','templatic');?></div>
    </div>
  </div> <!-- #end -->
  
  <div class="option option-select" id="show_on_detail_id"  <?php if($post_val->ctype=='head'){?> style="display:none;" <?php }else{?> style="display:block;" <?php }?> >
    <h3><?php _e('Display on <br /> Detail Page ? : ','templatic');?></h3>
    <div class="section">
      <div class="element">
                    <select name="show_on_detail" id="show_on_detail" <?php if($post_val->is_delete=='1'){?> disabled="disabled" <?php }?>>
                  <option value="1" <?php if($post_val->show_on_detail=='1'){ echo 'selected="selected"';}?>><?php _e('Yes','templatic');?></option>
                  <option value="0" <?php if($post_val->show_on_detail=='0'){ echo 'selected="selected"';}?>><?php _e('No','templatic');?></option>
                  </select>
      	   </div>
      <div class="description"><?php _e('Want to display this on Detail page ?','templatic');?></div>
    </div>
  </div> <!-- #end -->
  
 <div class="option option-select" >
    <h3><?php _e('Field Require Message : ','templatic');?></h3>
    <div class="section">
      <div class="element">
			<textarea name="field_require_desc" id="field_require_desc"><?php echo $booking_setting_res['field_require_desc'];?></textarea></div>
      <div class="description"><?php _e('This message will display when field is not optional and user not fill this field.','templatic');?></div>
    </div>
  </div>
	<div class="option option-select" >
    <h3><?php _e('Validation Type : ','templatic');?></h3>
    <div class="section">
      <div class="element">
			<select name="validation_type" id="validation_type"><?php echo validation_type_cmb($booking_setting_res['validation_type']);?></select></div>
			<div class="description"><?php _e('Validation Type if you select require this field must be have some value and if its email then you have to enter valid email address','templatic');?></div>
		</div>
	</div>
	
	<div class="option option-select" >
    <h3><?php _e('Stylesheet Class : ','templatic');?></h3>
    <div class="section">
      <div class="element"><input type="text" name="style_class" id="style_class" value="<?php echo $booking_setting_res['style_class']; ?>"></div>
			<div class="description"><?php _e('This stylesheet class apply on field','templatic');?></div>
		</div>
	</div>
	<div class="option option-select" >
    <h3><?php _e('Parameter : ','templatic');?></h3>
    <div class="section">
      <div class="element"><input type="text" name="extra_parameter" id="extra_parameter" value="<?php echo $booking_setting_res['extra_parameter']; ?>"></div>
			<div class="description"><?php _e('Extra Parameter (eg. maxlength, onchange etc.)','templatic');?></p></div>
		</div>
	</div>
  
  
  <input type="submit" name="submit" value="<?php _e('Save All Changes','templatic');?>" class="button-framework-imp right"> 


</form>
<script type="text/javascript">
function show_option_add(htmltype)
{
	if(htmltype=='select' || htmltype=='multiselect' || htmltype=='radio' || htmltype=='multicheckbox')
	{
		document.getElementById('ctype_option_tr_id').style.display='';		
	}else
	{
		document.getElementById('ctype_option_tr_id').style.display='none';	
	}
	
	if(htmltype=='head')
	{
		document.getElementById('admin_title_id').style.display='none';	
		document.getElementById('admin_label_id').style.display='none';	
		document.getElementById('admin_desc_id').style.display='none';	
		document.getElementById('default_value_id').style.display='none';	
		document.getElementById('show_on_listing_id').style.display='none';	
		document.getElementById('show_on_detail_id').style.display='none';	
		document.getElementById('is_require_id').style.display='none';	
	}
	else
	{
		document.getElementById('admin_title_id').style.display='';	
		document.getElementById('admin_label_id').style.display='';	
		document.getElementById('admin_desc_id').style.display='';	
		document.getElementById('default_value_id').style.display='';	
		document.getElementById('show_on_listing_id').style.display='';	
		document.getElementById('show_on_detail_id').style.display='';	
		document.getElementById('is_require_id').style.display='';	
	}
}
if(document.getElementById('ctype').value)
{
	show_option_add(document.getElementById('ctype').value)	;
}
</script>