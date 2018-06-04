<?php
/*Hooks*/
function templ_seo_meta()
{
	do_action('templ_seo_meta');	
}
add_action('templ_head_meta','templ_header_settings');

function templ_header_settings()
{
	templ_seo_meta();
}
///=============BODY Start HOOK==============/////
function templ_body_start()
{
	do_action('templ_body_start');
}

///=============BODY END HOOK==============/////
function templ_body_end()
{
	do_action('templ_body_end');	
}


/************************************
//FUNCTION NAME : templ_thumbimage_filter
//ARGUMENTS : image src,height-width argument
//RETURNS : thumb image url 
***************************************/
function templ_thumbimage_filter($src,$att='&amp;w=100&amp;h=100&amp;zc=1&amp;q=80',$isresize=0)
{
	global $thumb_url;
	if(strtolower(get_option('ptthemes_timthumb'))=='yes' || get_option('ptthemes_timthumb')=='' || $isresize)
	$imgurl = get_bloginfo( 'template_directory', 'display' ).'/thumb.php?src='.$src.$att.$thumb_url;
	else
	$imgurl = $src;
	
	return apply_filters('templ_thumbimage_filter',$imgurl);
}

/*Seo_meta_content*/
function templ_seo_meta_content()
{
	if (is_home() || is_front_page()) 
	{
		$description = stripslashes(get_option('ptthemes_home_desc_seo'));
		$keywords = stripslashes(get_option('ptthemes_home_keyword_seo'));
	}elseif (is_single() || is_page())
	{
		global $post;
		$description = get_post_meta($post->ID,'templ_seo_page_desc',true);
		$keywords = get_post_meta($post->ID,'templ_seo_page_kw',true);
	}
	
	if(is_archive() && strtolower(get_option( 'ptthemes_archives_noindex' ))=='yes')
	{
		echo '<meta name="robots" content="noindex" />';
	}elseif(is_tag() && strtolower(get_option( 'ptthemes_tag_archives_noindex' ))=='yes')
	{
		echo '<meta name="robots"  content="noindex" />';
	}elseif(is_archive() && strtolower(get_option('ptthemes_category_noindex'))=='yes')
	{
		echo '<meta name="robots"  content="noindex" />';
	}
	if($description){ echo '<meta content="'.$description.'" name="description" />';}
	if($keywords){ echo '<meta content="'.$keywords.'" name="keywords" />';}
	
}
add_action('templ_seo_meta','templ_seo_meta_content');

/*SEO page title*/
function templ_seo_title() {
	if(templ_is_third_party_seo()){ }else
	{
	global $page, $paged,$page_title;
	$sep = " | "; # delimiter
	$newtitle = get_bloginfo('name'); # default title
	if($_GET['ptype'] != '') {
			$newtitle = $page_title;
			$newtitle .=  $sep .get_bloginfo('name');
	} else {
		# Single & Page ##################################
		if (is_single() || is_page())
		{
			global $post;
			$newtitle = get_post_meta($post->ID,'templ_seo_page_title',true);
			if($newtitle=='')
			{
				$newtitle = single_post_title("", false);
			}
		}
	
		# Category ######################################
		if (is_category())
			$newtitle = single_cat_title("", false);
	
		# Tag ###########################################
		if (is_tag())
		 $newtitle = single_tag_title("", false);
	
		# Search result ################################
		if (is_search())
		 $newtitle = __("Search Result ",'templatic') . $s;
	
		# Taxonomy #######################################
		if (is_tax()) {
			$curr_tax = get_taxonomy(get_query_var('taxonomy'));
			$curr_term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy')); # current term data
			# if it's term
			if (!empty($curr_term)) {
				$newtitle = $curr_tax->label . $sep . $curr_term->name;
			} else {
				$newtitle = $curr_tax->label;
			}
		}
		if ( is_author() ) {
			$newtitle = __('Author Archives','templatic');
		}
		# Page number
		if ($paged >= 2 || $page >= 2)
				$newtitle .= $sep . sprintf('Page %s', max($paged, $page));
	
		# Home & Front Page ########################################
		if (is_home() || is_front_page()) {
			if(get_option('ptthemes_home_title_seo')){
				$newtitle = stripslashes(get_option('ptthemes_home_title_seo'));
			}else
			{
				$newtitle = get_bloginfo('name') . $sep . stripslashes(get_bloginfo('description'));
			}
		} else {
			$newtitle .=  $sep . get_bloginfo('name');
		}
	}
		return $newtitle;
	}
}
add_filter('wp_title', 'templ_seo_title');

function templ_is_third_party_seo()
{
	if(strtolower(get_option('ptthemes_use_third_party_data'))=='yes')
	{
		return true;	
	}
	return false;		
}

/////////PRODUCT DETAIL PAGE FUNCTIONS START///////////////
function is_wp_admin()
{
	if(strstr($_SERVER['REQUEST_URI'],'/wp-admin/'))
	{
		return true;
	}
	return false;
}
 ///////////NEW FUNCTIONS  START//////
function bdw_get_images($iPostID,$img_size='thumb',$no_images='') 
{
    $arrImages =& get_children('order=ASC&orderby=menu_order ID&post_type=attachment&post_mime_type=image&post_parent=' . $iPostID );
	$counter = 0;
	$return_arr = array();
	if($arrImages) 
	{		
       foreach($arrImages as $key=>$val)
	   {
	   		$id = $val->ID;
			if($img_size == 'large')
			{
				$img_arr = wp_get_attachment_image_src($id,'full');	// THE FULL SIZE IMAGE INSTEAD
				$return_arr[] = $img_arr[0];
			}
			elseif($img_size == 'medium')
			{
				$img_arr = wp_get_attachment_image_src($id, 'medium'); //THE medium SIZE IMAGE INSTEAD
				$return_arr[] = $img_arr[0];
			}
			elseif($img_size == 'thumb')
			{
				$img_arr = wp_get_attachment_image_src($id, 'thumbnail'); // Get the thumbnail url for the attachment
				$return_arr[] = $img_arr[0];
			}
			$counter++;
			if($no_images!='' && $counter==$no_images)
			{
				break;	
			}
	   }
	  return $return_arr;
	}
}
function templ_is_show_post_category()
{
	if(strtolower(get_option('ptthemes_details_category'))=='yes' || get_option('ptthemes_details_category')=='')
	{
		return true;	
	}
	return false;
}
?>