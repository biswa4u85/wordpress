<?php

define('TEMPL_MANAGE_SETTINGS_MODULE', __("Theme Settings",'templatic'));

define('TEMPL_MANAGE_SETTINGS_CURRENT_VERSION', '1.0.0');

define('TEMPL_MANAGE_SETTINGS_LOG_PATH','http://templatic.com/updates/monetize/manage_settings/manage_settings_change_log.txt');

define('TEMPL_MANAGE_SETTINGS_ZIP_FOLDER_PATH','http://templatic.com/updates/monetize/manage_settings/manage_settings.zip');

define('TT_MANAGE_SETTINGS_FOLDER','manage_settings');

define('TT_MANAGE_SETTINGS_MODULES_PATH',TT_MODULES_FOLDER_PATH . TT_MANAGE_SETTINGS_FOLDER.'/');

define ("PLUGIN_DIR_MANAGE_SETTINGS", basename(dirname(__FILE__)));

define ("PLUGIN_URL_MANAGE_SETTINGS", get_template_directory_uri().'/monetize/'.PLUGIN_DIR_MANAGE_SETTINGS.'/');

//----------------------------------------------

     //MODULE AUTO UPDATE START//

//----------------------------------------------

add_action('templ_module_auto_update','templ_module_auto_update_manage_settings_fun');

global $wpdb;

function templ_module_auto_update_manage_settings_fun()

{

	$curversion = TEMPL_MANAGE_SETTINGS_CURRENT_VERSION;

	$liveversion = tmpl_current_framework_version(TEMPL_MANAGE_SETTINGS_LOG_PATH);

	$is_update = templ_is_updated( $curversion, $liveversion);

	if($is_update)

	{

?>

<table border="0" cellpadding="0" cellspacing="0" style="border:0px; padding:10px 0px;">

	<tr>

		<td class="module"><h3><?php echo TEMPL_MANAGE_SETTINGS_MODULE;?></h3></td>

	</tr>

	<tr>

		<td>

			<form method="post"  name="framework_update" id="framework_update">

			<input type="hidden" name="action" value="<?php echo TT_MANAGE_SETTINGS_FOLDER;?>" />

			<input type="hidden" name="zip" value="<?php echo TEMPL_MANAGE_SETTINGS_ZIP_FOLDER_PATH;?>" />

			<input type="hidden" name="log" value="<?php echo TEMPL_MANAGE_SETTINGS_LOG_PATH;?>" />

			<input type="hidden" name="path" value="<?php echo TT_MANAGE_SETTINGS_MODULES_PATH;?>" />

			<?php wp_nonce_field('update-options'); ?>



			<?php echo sprintf('<h4>'.__('A new version of Manage Global settings Module is available','templatic').'.</h4>

			<p>'.__('This updater will collect a file from the templatic.com server. It will download and extract the files to your current theme&prime;s functions folder.','templatic').' 

			<br />'.__('We recommend backing up your theme files before updating. Only upgrade related module files if necessary.','templatic').'

			<br />'.__('If you are facing any problem in auto updating the framework, then please download the latest version of the theme from members area and then just overwrite the ','templatic').'<b>"%s"</b> folder.

			<br /><br />&rArr; '.__('Your version:','templatic').' %s

			<br />&rArr; '.__('Current Version:','templatic').' %s </p>',TT_MANAGE_SETTINGS_MODULES_PATH,$curversion,$liveversion);?>



			<input type="submit" class="button" value="<?php _e('Update','templatic');?>" onclick="document.getElementById('framework_upgrade_process_span_id').style.display=''" />

			</form>

		</td>

	</tr>

	<tr>

		<td style="border-bottom:5px solid #dedede;">&nbsp;</td>

	</tr>

</table>

<?php

	}

}

//----------------------------------------------

     //MODULE AUTO UPDATE END//

//----------------------------------------------





/////////admin menu settings start////////////////

add_action('templ_admin_menu', 'manage_settings_add_admin_menu');

function manage_settings_add_admin_menu()

{

	

	//add_submenu_page('templatic_wp_admin_menu', TEMPL_MANAGE_SETTINGS_MODULE,TEMPL_MANAGE_SETTINGS_MODULE,TEMPL_ACCESS_USER, 'manage_settings', 'manage_settings');

}



function manage_settings()

{

	global $templ_module_path;

		include_once($templ_module_path . 'admin_manage_settings.php');



}

function allow_nt_allow($field_value = ''){

	$y_n_array = array("Y"=>"Yes","N"=>"No");

	$y_n_display = '';

	foreach($y_n_array as $ykey => $yvalue){

		if($ykey == $field_value){

			$yselect = "selected";

		} else {

			$yselect = "";

		}

		$y_n_display .= '<option value="'.$ykey.'" '.$yselect.'>'.$yvalue.'</option>';

	}

	return $y_n_display;

}

function enable_disable($field_value = ''){

	$e_d_array = array("E"=>"Enable","D"=>"Disable");

	$e_d_display = '';

	foreach($e_d_array as $edkey => $edvalue){

		if($edkey == $field_value){

			$edselect = "selected";

		} else {

			$edselect = "";

		}

		$e_d_display .= '<option value="'.$edkey.'" '.$edselect.'>'.$edvalue.'</option>';

	}

	return $e_d_display;

} function position_cmb($position = ''){

	$position_array = array("1"=>"Symbol Before amount","2"=>"Space between Before amount and Symbol","3"=>"Symbol After amount","4"=>"Space between After amount and Symbol");

	$position_display = '';

	foreach($position_array as $pkey => $pvalue){

		if($pkey == $position){

			$pselect = "selected";

		} else {

			$pselect = "";

		}

		$position_display .= '<option value="'.$pkey.'" '.$pselect.'>'.$pvalue.'</option>';

	}

	return $position_display;

} function currency_cmb($currency_value = ''){

	global $wpdb;

	$currency_table = $wpdb->prefix . "currency";

	$curreny_sql = mysql_query("select * from $currency_table order by currency_name");

	$currency_display = '';

	$currency_select = "";

	while($currency_res = mysql_fetch_array($curreny_sql)){

		if($currency_res['currency_code'] == $currency_value){

			$currency_select = "selected";

		} else {

			$currency_select = "";

		}

		$currency_display .= '<option value="'.$currency_res['currency_code'].'" '.$currency_select.'>'.$currency_res['currency_name'].'</option>';

	}

	return $currency_display;

}

/* Function For Select Box EOF */

/*payment Method Settings */

function templ_payment_option_radio()

{

	do_action('templ_payment_option_radio');	

}

					 

add_action('templ_payment_option_radio','templ_payment_option_radio_fun');

function templ_payment_option_radio_fun()

{

	global $wpdb;

	$paymentsql = "select * from $wpdb->options where option_name like 'payment_method_%' order by option_id";

	$paymentinfo = $wpdb->get_results($paymentsql);

	if($paymentinfo)

	{

	?>

	<h3> <?php echo SELECT_PAY_MEHTOD_TEXT; ?></h3>

	<ul class="payment_method">

	<?php

		$paymentOptionArray = array();

		$paymethodKeyarray = array();

		foreach($paymentinfo as $paymentinfoObj)

		{

			$paymentInfo = unserialize($paymentinfoObj->option_value);

			if($paymentInfo['isactive'])

			{

				$paymethodKeyarray[] = $paymentInfo['key'];

				$paymentOptionArray[$paymentInfo['display_order']][] = $paymentInfo;

			}

		}

		ksort($paymentOptionArray);

		$array_pay_options = array();

		if($paymentOptionArray)

		{

			foreach($paymentOptionArray as $key=>$paymentInfoval)

			{

				for($i=0;$i<count($paymentInfoval);$i++)

				{

					$paymentInfo = $paymentInfoval[$i];

					$jsfunction = 'onclick="showoptions(this.value);"';

					$chked = '';

					if($key==1)

					{

						$chked = 'checked="checked"';

					}

				?>

	<li id="<?php echo $paymentInfo['key'];?>"><label>

	  <input <?php echo $jsfunction;?>  type="radio" value="<?php echo $paymentInfo['key'];?>" id="<?php echo $paymentInfo['key'];?>_id" name="paymentmethod" <?php echo $chked;?> />  <?php echo $paymentInfo['name']?></label></li>

	 

	  <?php

					if(file_exists(TEMPLATEPATH.'/library/includes/payment/'.$paymentInfo['key'].'/'.$paymentInfo['key'].'.php'))

					{

					?>

	  <?php

						$array_pay_options[] =TEMPLATEPATH.'/library/includes/payment/'.$paymentInfo['key'].'/'.$paymentInfo['key'].'.php';

						?>

	  <?php

					} 

				 ?> 

	  <?php

				}

			}

		}else

		{

		?>

		<li><?php echo NO_PAYMENT_METHOD_MSG;?></li>

		<?php

		}

		

	?>

	

	</ul>

    <?php

    if($array_pay_options)

	{

		for($i=0;$i<count($array_pay_options);$i++)	

		{

			include_once($array_pay_options[$i]);	

		}

	}

	?>

    <script type="text/javascript">

    function showoptions(paymethod)

    {

    <?php

    for($i=0;$i<count($paymethodKeyarray);$i++)

    {

    ?>

    showoptvar = '<?php echo $paymethodKeyarray[$i]?>options';

    if(eval(document.getElementById(showoptvar)))

    {

    document.getElementById(showoptvar).style.display = 'none';

    if(paymethod=='<?php echo $paymethodKeyarray[$i]?>')

    {

    document.getElementById(showoptvar).style.display = '';

    }

    }

    <?php

    }

    ?>

    }

    <?php

    for($i=0;$i<count($paymethodKeyarray);$i++)

    {

    ?>

    if(document.getElementById('<?php echo $paymethodKeyarray[$i];?>_id').checked)

    {

    showoptions(document.getElementById('<?php echo $paymethodKeyarray[$i];?>_id').value);

    }

    <?php

    }	

    ?>

    </script>

	<?php

	}	

}



function templ_nopayment_redirect()

{

	if(apply_filters('templ_skip_payment_method','0'))

	{

	}else

	{

		wp_redirect(apply_filters('templ_nopayment_redirect_url',site_url('/?ptype=submition&backandedit=1&emsg=nopaymethod')));	

		exit;

	}

}



add_filter('templ_submit_form_emsg_filter','templ_submit_form_emsg_payment');

function templ_submit_form_emsg_payment($msg)

{

	if($_REQUEST['emsg']=='nopaymethod')

	{

		return $msg.=__('Please select payment method on preview page.','templatic');

	}

}

/* Payment Method EOF */

/* Coupon BOF */



function get_payable_amount_with_coupon($total_amt,$coupon_code)

{

	$discount_amt = 0;

	if(function_exists('get_discount_amount'))

	{

		$discount_amt = get_discount_amount($coupon_code,$total_amt);	

	}	

	if($discount_amt>0)

	{

		return $total_amt-$discount_amt;

	}else

	{

		return $total_amt;

	}

}



function get_discount_amount($coupon,$amount)

{

	global $wpdb;

	if($coupon!='' && $amount>0)

	{

		$couponinfo = templ_get_coupon_info($coupon);

		

		if($couponinfo['dis_per']=='per')

		{

			$discount_amt = ($amount*$couponinfo['dis_amt'])/100;

		}else

		if($couponinfo['dis_per']=='amt')

		{

			$discount_amt = $couponinfo['dis_amt'];

		}

		return apply_filters('templ_discount_amount_filter',$discount_amt);		

	}

	return '0';			

}

function get_coupon_amount($coupon,$amount)

{

	global $wpdb;

	if($coupon!='' && $amount>0)

	{

		$couponinfo = templ_get_coupon_info($coupon);

		

		if($couponinfo['dis_per']=='per')

		{

			$discount_amt = ($amount*$couponinfo['dis_amt'])/100;

		}else

		if($couponinfo['dis_per']=='amt')

		{

			$discount_amt = $couponinfo['dis_amt'];

		}

		return apply_filters('templ_discount_amount_filter',$discount_amt);		

	}

	return '0';			

}



function templ_get_coupon_info($coupon)

{

	if($coupon!='')

	{

		$couponinfo = get_option('discount_coupons');

		if($couponinfo)

		{

			foreach($couponinfo as $key=>$value)

			{

				if($value['couponcode'] == $coupon)

				{

					return $value;

				}

			}

		}

	}

	return false;

}



add_filter('templ_submit_form_emsg_filter','templ_submit_form_emsg_fun');

function templ_submit_form_emsg_fun($msg)

{

	if($_REQUEST['emsg']=='invalid_coupon')

	{

		return $msg.=__('Invalid coupon','templatic');

	}

}

/* Coupon EOF */

/* Package BOF */

function templ_get_package_price_info($pro_type='')

{

	global $price_db_table_name,$wpdb;

	if($pro_type)

	{

		$subsql = " and pid=\"$pro_type\"";	

	}

	$pricesql = "select * from $price_db_table_name where status=1 $subsql";

	$priceinfo = $wpdb->get_results($pricesql);

	$price_info = array();

	if($priceinfo)

	{

		foreach($priceinfo as $priceinfoObj)

		{

		$info = array();

		$info['id'] = $priceinfoObj->pid;

		$info['title'] = $priceinfoObj->title;

		$info['price'] = $priceinfoObj->amount;

		$info['days'] = $priceinfoObj->days;

		$info['alive_days'] =$priceinfoObj->days;

		$info['cat'] =$priceinfoObj->cat;

		$info['is_featured'] =$priceinfoObj->is_featured;

		$info['title_desc'] = stripslashes($priceinfoObj->title_desc);

		$price_info[] = $info;

		}

	}

	return $price_info;

}



function templ_get_package_price_html()

{

	$packinfo = templ_get_package_price_info();

	$package_arr = array();

	foreach($packinfo as $packinfo_obj)

	{

		$id=$packinfo_obj['id'];

		$title=$packinfo_obj['title'];

		$price=$packinfo_obj['price'];

		$alive_days=$packinfo_obj['alive_days'];

		$days=$packinfo_obj['days'];

		$title_desc=$packinfo_obj['title_desc'];

		if(!$title_desc)

		{

			$currency = get_currency_sym();

			$packageinfo = apply_filters('templ_package_price_desc_filter','%s '.__('in','templatic').' %s%s '.__('for','templatic').' %s '.__('days','templatic'));

			$title_desc = sprintf($packageinfo,$title,$currency,$price,$alive_days);

		}

		$package_arr[$id] = $title_desc;

	}	

	return $package_arr;

}

function get_category_array(){

	global $wpdb;

	$return_array = array();

	$pn_categories = $wpdb->get_results("SELECT $wpdb->terms.name as name, $wpdb->term_taxonomy.count as count, $wpdb->terms.term_id as cat_ID 

	                            FROM $wpdb->term_taxonomy,  $wpdb->terms

                                WHERE $wpdb->term_taxonomy.term_id =  $wpdb->terms.term_id

                                AND $wpdb->term_taxonomy.taxonomy in ('category')

								ORDER BY name");	

	foreach($pn_categories as $pn_categories_obj)

	{

		$return_array[] = array("id" => $pn_categories_obj->cat_ID,

							   "title"=> $pn_categories_obj->name,);

	}

	return $return_array;

}

/* Package EOF */

/* Bulk Upload BOF */

add_filter('templ_bulk_sample_csv_link_filter','templ_bulk_sample_csv_link_fun');

function templ_bulk_sample_csv_link_fun($file)

{

	$file = get_template_directory_uri().'/monetize/'.TT_MANAGE_SETTINGS_FOLDER.'/bulk_upload_sample.csv';

	return $file;

}

/* Bulk Upload EOF */

/* Custom Post Field BOF*/



function validation_type_cmb($validation_type = ''){

	$validation_type_display = '';

	$validation_type_array = array("require"=>"Require","phone_no"=>"Phone No.","digit"=>"Digit","email"=>"Email");

	foreach($validation_type_array as $validationkey => $validationvalue){

		if($validation_type == $validationkey){

			$vselected = 'selected';

		} else {

			$vselected = '';

		}

		$validation_type_display .= '<option value="'.$validationkey.'" '.$vselected.'>'.$validationvalue.'</option>';

	}

	return $validation_type_display;

}

function get_post_custom_fields_templ($post_types)

{

	global $wpdb,$custom_post_meta_db_table_name;

	$post_meta_info = $wpdb->get_results("select * from $custom_post_meta_db_table_name where is_active=1 and post_type='".$post_types."' order by sort_order asc,admin_title asc");

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

					"option_values" => $post_meta_info_obj->option_values,

					"site_title"  => $post_meta_info_obj->site_title,

					"is_require"  => $post_meta_info_obj->is_require,

					"show_on_listing"  => $post_meta_info_obj->show_on_listing,

					"show_on_detail"  => $post_meta_info_obj->show_on_detail,

					"extrafield1"  => $post_meta_info_obj->extrafield1,

					"extrafield2"  => $post_meta_info_obj->extrafield2,

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

//$custom_metaboxes = get_post_custom_fields_templ();





function get_post_custom_listing_single_page($pid, $paten_str,$fields_name='')

{

	global $wpdb,$custom_post_meta_db_table_name;

	 $sql = "select * from $custom_post_meta_db_table_name where is_active=1 and show_on_detail=1 ";

	if($fields_name)

	{

		$fields_name = '"'.str_replace(',','","',$fields_name).'"';

		$sql .= " and htmlvar_name in ($fields_name) ";

	}

	$sql .=  " and ctype!='upload' order by sort_order asc,admin_title asc";

	

	$post_meta_info = $wpdb->get_results($sql);

	$return_str = '';

	$search_arr = array('{#TITLE#}','{#VALUE#}');

	$replace_arr = array();

	if($post_meta_info){

		foreach($post_meta_info as $post_meta_info_obj){

			

			if($post_meta_info_obj->site_title)

			{

				$replace_arr[] = $post_meta_info_obj->site_title;	

			}

			if($post_meta_info_obj->ctype=='upload'){

			//$image_var = get_post_meta($pid,$post_meta_info_obj->htmlvar_name,true);

			$image_var = "<img src='".templ_thumbimage_filter(get_post_meta($pid,$post_meta_info_obj->htmlvar_name,true),'&amp;w=100&amp;h=100&amp;zc=1&amp;q=80')."'/>";

			$replace_arr = array($post_meta_info_obj->site_title,$image_var);

			

			}

			

			$replace_arr = array($post_meta_info_obj->site_title,get_post_meta($pid,$post_meta_info_obj->htmlvar_name,true));

			if(get_post_meta($pid,$post_meta_info_obj->htmlvar_name,true))

			{

				$return_str .= str_replace($search_arr,$replace_arr,$paten_str);

			}

		}	

	}

	

	return $return_str;

}



function get_post_custom_for_listing_page($pid, $paten_str,$fields_name='')

{

	global $wpdb,$custom_post_meta_db_table_name;

	$sql = "select * from $custom_post_meta_db_table_name where is_active=1 and show_on_listing=1 ";

	if($fields_name)

	{

		$fields_name = '"'.str_replace(',','","',$fields_name).'"';

		$sql .= " and htmlvar_name in ($fields_name) ";

	}

	$sql .=  " order by sort_order asc,admin_title asc";

	

	$post_meta_info = $wpdb->get_results($sql);

	$return_str = '';

	$search_arr = array('{#TITLE#}','{#VALUE#}');

	$replace_arr = array();

	if($post_meta_info){

		foreach($post_meta_info as $post_meta_info_obj){

			if($post_meta_info_obj->site_title)

			{

				$replace_arr[] = $post_meta_info_obj->site_title;	

			}

			if($post_meta_info_obj->ctype!='upload'){

			//$image_var = get_post_meta($pid,$post_meta_info_obj->htmlvar_name,true);

			$image_var = "<img src='".templ_thumbimage_filter(get_post_meta($pid,$post_meta_info_obj->htmlvar_name,true),'&amp;w=100&amp;h=100&amp;zc=1&amp;q=80')."'/>";

			$replace_arr = array($post_meta_info_obj->site_title,$image_var);

			

			

			$replace_arr = array($post_meta_info_obj->site_title,get_post_meta($pid,$post_meta_info_obj->htmlvar_name,true));

			if(get_post_meta($pid,$post_meta_info_obj->htmlvar_name,true))

			{

				$return_str .= str_replace($search_arr,$replace_arr,$paten_str);

			}

			}

		}	

	}

	return $return_str;

}

include_once(TT_ADMIN_FOLDER_PATH.'modules/manage_settings/manage_post_custom_fields.php');

/* Custom Post Field EOF*/

?>