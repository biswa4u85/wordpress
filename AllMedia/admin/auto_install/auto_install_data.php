<?php
set_time_limit(0);
global  $wpdb,$one_time_insert;
$dummy_image_path = get_template_directory_uri().'/assets/dummy/';


//====================================================================================//
/////////////// TERMS START ///////////////
//=============================CUSTOM TAXONOMY=======================================================//
$category_array = array('Category1','Category2',array('Category3','Sub1','Sub2'));
insert_taxonomy_category($category_array);
function insert_taxonomy_category($category_array)
{
	global $wpdb;
	for($i=0;$i<count($category_array);$i++)
	{
		$parent_catid = 0;
		if(is_array($category_array[$i]))
		{
			$cat_name_arr = $category_array[$i];
			for($j=0;$j<count($cat_name_arr);$j++)
			{
				$catname = $cat_name_arr[$j];
				if($j>1)
				{
					$catid = $wpdb->get_var("select term_id from $wpdb->terms where name=\"$catname\"");
					if(!$catid)
					{
					$last_catid = wp_insert_term( $catname, 'category' );
					}					
				}else
				{
					$catid = $wpdb->get_var("select term_id from $wpdb->terms where name=\"$catname\"");
					if(!$catid)
					{
						$last_catid = wp_insert_term( $catname, 'category');
					}
				}
			}
			
		}else
		{
			$catname = $category_array[$i];
			$catid = $wpdb->get_var("select term_id from $wpdb->terms where name=\"$catname\"");
			if(!$catid)
			{
				wp_insert_term( $catname, 'category');
			}
		}
	}
	
	for($i=0;$i<count($category_array);$i++)
	{
		$parent_catid = 0;
		if(is_array($category_array[$i]))
		{
			$cat_name_arr = $category_array[$i];
			for($j=0;$j<count($cat_name_arr);$j++)
			{
				$catname = $cat_name_arr[$j];
				if($j>0)
				{
					$parentcatname = $cat_name_arr[0];
					$parent_catid = $wpdb->get_var("select term_id from $wpdb->terms where name=\"$parentcatname\"");
					$last_catid = $wpdb->get_var("select term_id from $wpdb->terms where name=\"$catname\"");
					wp_update_term( $last_catid, 'category', $args = array('parent'=>$parent_catid) );
				}
			}
			
		}
	}
}

/////////////// TERMS END ///////////////
$post_info = array();
//////////// Arts - Entertainment /////////////
//====================================================================================//
insert_posts($post_info);
function insert_posts($post_info)
{
	global $wpdb,$current_user;
	for($i=0;$i<count($post_info);$i++)
	{
		$post_title = $post_info[$i]['post_title'];
		$post_count = $wpdb->get_var("SELECT count(ID) FROM $wpdb->posts where post_title like \"$post_title\" and post_type='post' and post_status in ('publish','draft')");
		if(!$post_count)
		{
			$post_info_arr = array();
			$catids_arr = array();
			$my_post = array();
			$post_info_arr = $post_info[$i];
			if($post_info_arr['post_category'])
			{
				for($c=0;$c<count($post_info_arr['post_category']);$c++)
				{
					$catids_arr[] = get_cat_ID($post_info_arr['post_category'][$c]);
				}
			}else
			{
				$catids_arr[] = 1;
			}
			$my_post['post_title'] = $post_info_arr['post_title'];
			$my_post['post_content'] = $post_info_arr['post_content'];
			if($post_info_arr['post_author'])
			{
				$my_post['post_author'] = $post_info_arr['post_author'];
			}else
			{
				$my_post['post_author'] = 1;
			}
			$my_post['post_status'] = 'publish';
			$my_post['post_category'] = $catids_arr;
			$my_post['tags_input'] = $post_info_arr['post_tags'];
			$last_postid = wp_insert_post( $my_post );
			$post_meta = $post_info_arr['post_meta'];
			if($post_meta)
			{
				foreach($post_meta as $mkey=>$mval)
				{
					update_post_meta($last_postid, $mkey, $mval);
				}
			}
		}
	}
}
////post end///

//CUSTOM Service BOF ====================================================================================//

//===============================================================================//
$image_array = array();
$post_meta = array();
$post_meta = array('key'=>$post_meta1,);
$post_info[] = array(
					"post_title"	=>	'Service Name',
					"post_excerpt"	=>	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lectus ipsum, porttitor nec elementum non, porttitor volutpat lectus. Cras vehicula, mauris non dictum fermentum, tellus lectus Lorem ipsum dolor.',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lectus ipsum, porttitor nec elementum non, porttitor volutpat lectus. Cras vehicula, mauris non dictum fermentum, tellus lectus Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lectus ipsum, porttitor nec elementum non, porttitor volutpat lectus. Cras vehicula, mauris non dictum fermentum, tellus lectus Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
					"post_meta"		=>	$post_meta,
					"post_type"		=>	service,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Women'),
					"post_meta"		=>	$post_meta,
					"post_tags"		=>	array('')
					);
////post end///
$image_array = array();
$post_meta = array();
$post_meta = array('key'=>$post_meta1,);
$post_info[] = array(
					"post_title"	=>	'Service Name',
					"post_excerpt"	=>	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lectus ipsum, porttitor nec elementum non, porttitor volutpat lectus. Cras vehicula, mauris non dictum fermentum, tellus lectus Lorem ipsum dolor.',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lectus ipsum, porttitor nec elementum non, porttitor volutpat lectus. Cras vehicula, mauris non dictum fermentum, tellus lectus Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lectus ipsum, porttitor nec elementum non, porttitor volutpat lectus. Cras vehicula, mauris non dictum fermentum, tellus lectus Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
					"post_meta"		=>	$post_meta,
					"post_type"		=>	service,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Women'),
					"post_meta"		=>	$post_meta,
					"post_tags"		=>	array('')
					);
////post end///
$image_array = array();
$post_meta = array();
$post_meta = array('key'=>$post_meta1,);
$post_info[] = array(
					"post_title"	=>	'Service Name',
					"post_excerpt"	=>	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lectus ipsum, porttitor nec elementum non, porttitor volutpat lectus. Cras vehicula, mauris non dictum fermentum, tellus lectus Lorem ipsum dolor.',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lectus ipsum, porttitor nec elementum non, porttitor volutpat lectus. Cras vehicula, mauris non dictum fermentum, tellus lectus Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lectus ipsum, porttitor nec elementum non, porttitor volutpat lectus. Cras vehicula, mauris non dictum fermentum, tellus lectus Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
					"post_meta"		=>	$post_meta,
					"post_type"		=>	service,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Women'),
					"post_meta"		=>	$post_meta,
					"post_tags"		=>	array('')
					);
////post end///
$image_array = array();
$post_meta = array();
$post_meta = array('key'=>$post_meta1,);
$post_info[] = array(
					"post_title"	=>	'Service Name',
					"post_excerpt"	=>	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lectus ipsum, porttitor nec elementum non, porttitor volutpat lectus. Cras vehicula, mauris non dictum fermentum, tellus lectus Lorem ipsum dolor.',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lectus ipsum, porttitor nec elementum non, porttitor volutpat lectus. Cras vehicula, mauris non dictum fermentum, tellus lectus Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lectus ipsum, porttitor nec elementum non, porttitor volutpat lectus. Cras vehicula, mauris non dictum fermentum, tellus lectus Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
					"post_meta"		=>	$post_meta,
					"post_type"		=>	service,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Women'),
					"post_meta"		=>	$post_meta,
					"post_tags"		=>	array('')
					);
////post end///
$image_array = array();
$post_meta = array();
$post_meta = array('key'=>$post_meta1,);
$post_info[] = array(
					"post_title"	=>	'Service Name',
					"post_excerpt"	=>	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lectus ipsum, porttitor nec elementum non, porttitor volutpat lectus. Cras vehicula, mauris non dictum fermentum, tellus lectus Lorem ipsum dolor.',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lectus ipsum, porttitor nec elementum non, porttitor volutpat lectus. Cras vehicula, mauris non dictum fermentum, tellus lectus Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lectus ipsum, porttitor nec elementum non, porttitor volutpat lectus. Cras vehicula, mauris non dictum fermentum, tellus lectus Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
					"post_meta"		=>	$post_meta,
					"post_type"		=>	service,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Women'),
					"post_meta"		=>	$post_meta,
					"post_tags"		=>	array('')
					);
////post end///
$image_array = array();
$post_meta = array();
$post_meta = array('key'=>$post_meta1,);
$post_info[] = array(
					"post_title"	=>	'Service Name',
					"post_excerpt"	=>	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lectus ipsum, porttitor nec elementum non, porttitor volutpat lectus. Cras vehicula, mauris non dictum fermentum, tellus lectus Lorem ipsum dolor.',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lectus ipsum, porttitor nec elementum non, porttitor volutpat lectus. Cras vehicula, mauris non dictum fermentum, tellus lectus Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lectus ipsum, porttitor nec elementum non, porttitor volutpat lectus. Cras vehicula, mauris non dictum fermentum, tellus lectus Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
					"post_meta"		=>	$post_meta,
					"post_type"		=>	service,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Women'),
					"post_meta"		=>	$post_meta,
					"post_tags"		=>	array('')
					);
////post end///
$image_array = array();
$post_meta = array();
$post_meta = array('key'=>$post_meta1,);
$post_info[] = array(
					"post_title"	=>	'Service Name',
					"post_excerpt"	=>	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lectus ipsum, porttitor nec elementum non, porttitor volutpat lectus. Cras vehicula, mauris non dictum fermentum, tellus lectus Lorem ipsum dolor.',
					"post_content"	=>	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lectus ipsum, porttitor nec elementum non, porttitor volutpat lectus. Cras vehicula, mauris non dictum fermentum, tellus lectus Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lectus ipsum, porttitor nec elementum non, porttitor volutpat lectus. Cras vehicula, mauris non dictum fermentum, tellus lectus Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
					"post_meta"		=>	$post_meta,
					"post_type"		=>	service,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Women'),
					"post_meta"		=>	$post_meta,
					"post_tags"		=>	array('')
					);
////post end///
insert_taxonomy_posts($post_info);
function insert_taxonomy_posts($post_info)
{
	global $wpdb,$current_user;
	for($i=0;$i<count($post_info);$i++)
	{
		$post_title = $post_info[$i]['post_title'];
		$post_exp = $post_info[$i]['post_excerpt'];
		$post_count = $wpdb->get_var("SELECT count(ID) FROM $wpdb->posts where post_title like \"$post_title\" and post_type='service' and post_status in ('publish','draft')");
		if(!$post_count)
		{
			$post_info_arr = array();
			$catids_arr = array();
			$my_post = array();
			$post_info_arr = $post_info[$i];
			$my_post['post_title'] = $post_info_arr['post_title'];
			$my_post['post_excerpt'] = $post_info_arr['post_excerpt'];
			$my_post['post_content'] = $post_info_arr['post_content'];
			$my_post['post_type'] = service;
			if($post_info_arr['post_author'])
			{
				$my_post['post_author'] = $post_info_arr['post_author'];
			}else
			{
				$my_post['post_author'] = 1;
			}
			$my_post['post_status'] = 'publish';
			$my_post['post_category'] = $post_info_arr['post_category'];
			$my_post['tags_input'] = $post_info_arr['post_tags'];
			$last_postid = wp_insert_post( $my_post );
			wp_set_object_terms($last_postid,$post_info_arr['post_category'], $taxonomy=CUSTOM_CATEGORY_TYPE1);
			wp_set_object_terms($last_postid,$post_info_arr['post_tags'], $taxonomy=CUSTOM_TAG_TYPE1);
			
			
			$data = array(
			'comment_post_ID' => $last_postid,
			'comment_author' => 'admin',
			'comment_author_email' => get_option('admin_email'),
			'comment_author_url' => 'http://',
			'comment_content' => 'Hi,This is really amazing.',
			'comment_type' => '',
			'comment_parent' => 0,
			'user_id' => 1,
			'comment_author_IP' => '127.0.0.1',
			'comment_agent' => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.10) Gecko/2009042316 Firefox/3.0.10 (.NET CLR 3.5.30729)',
			'comment_date' => $time,
			'comment_approved' => 1,
			);

			$last_comment_id = wp_insert_comment($data);
			$rating_ip = getenv("REMOTE_ADDR");
			$rate_userid = $current_user->ID;
			global $rating_table_name;
			$wpdb->query("INSERT INTO $rating_table_name (rating_postid,rating_rating,comment_id,rating_ip,rating_userid) VALUES ( \"$last_postid\",'4',\"$last_comment_id\",\"$rating_ip\",\"$rate_userid \")");
			
			$post_meta = $post_info_arr['post_meta'];
			if($post_meta)
			{
				foreach($post_meta as $mkey=>$mval)
				{
					update_post_meta($last_postid, $mkey, $mval);
				}
			}
			
			$post_image = $post_info_arr['post_image'];
			if($post_image)
			{
				for($m=0;$m<count($post_image);$m++)
				{
					$menu_order = $m+1;
					$image_name_arr = explode('/',$post_image[$m]);
					$img_name = $image_name_arr[count($image_name_arr)-1];
					$img_name_arr = explode('.',$img_name);
					$post_img = array();
					$post_img['post_title'] = $img_name_arr[0];
					$post_img['post_status'] = 'attachment';
					$post_img['post_parent'] = $last_postid;
					$post_img['post_type'] = 'attachment';
					$post_img['post_mime_type'] = 'image/jpeg';
					$post_img['menu_order'] = $menu_order;
					$last_postimage_id = wp_insert_post( $post_img );
					update_post_meta($last_postimage_id, '_wp_attached_file', $post_image[$m]);					
					$post_attach_arr = array(
										"width"	=>	580,
										"height" =>	480,
										"hwstring_small"=> "height='150' width='150'",
										"file"	=> $post_image[$m],
										//"sizes"=> $sizes_info_array,
										);
					wp_update_attachment_metadata( $last_postimage_id, $post_attach_arr );
				}
			}
		}
	}
}

/////////////////////////////////////////////////
$pages_array = array('Home','Services','About Us','Testimonials','Contact Us');
$page_info_arr = array();
$page_info_arr['Home'] = '<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lectus ipsum, porttitor nec elementum non, porttitor volutpat lectus. Cras vehicula, mauris non dictum fermentum, tellus lectus venenatis justo, ac tempus massa lorem quis metus. </span></p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lectus ipsum, porttitor nec elementum non, porttitor volutpat lectus. Cras vehicula, mauris non dictum fermentum, tellus lectus venenatis justo, ac tempus massa lorem quis metus.</p><h6>Morbi lectus ipsum, porttitor nec elementum non, porttitor volutpat lectus:</h6><ul class="cars"><li><a href="#">Cras vehicula, mauris non dictum fermentum</a></li><li><a href="#">Cras vehicula, mauris non dictum fermentum</a></li><li><a href="#">Cras vehicula, mauris non dictum fermentum</a></li><li><a href="#">Cras vehicula, mauris non dictum fermentum</a></li></ul><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lectus ipsum, porttitor nec elementum non, porttitor volutpat lectus. Cras vehicula, mauris non dictum fermentum, tellus lectus venenatis justo, ac tempus massa lorem quis metus.</p>';
$page_info_arr['Services'] = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lectus ipsum, porttitor nec elementum non, porttitor volutpat lectus. Cras vehicula, mauris non dictum fermentum, tellus lectus venenatis justo, ac tempus massa lorem quis metus.</p>';
$page_info_arr['About Us'] = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.';
$page_info_arr['Testimonials'] = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.';
$page_info_arr['Contact Us'] = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lectus ipsum, porttitor nec elementum non, porttitor volutpat lectus. Cras vehicula, mauris non dictum fermentum, tellus lectus venenatis justo, ac tempus massa lorem quis metus.</p>';
set_page_info_autorun($pages_array,$page_info_arr);
function set_page_info_autorun($pages_array,$page_info_arr_arg)
{
	global $post_author,$wpdb;
	$last_tt_id = 1;
	if(count($pages_array)>0)
	{
		$page_info_arr = array();
		for($p=0;$p<count($pages_array);$p++)
		{
			if(is_array($pages_array[$p]))
			{
				for($i=0;$i<count($pages_array[$p]);$i++)
				{
					$page_info_arr1 = array();
					$page_info_arr1['post_title'] = $pages_array[$p][$i];
					$page_info_arr1['post_content'] = $page_info_arr_arg[$pages_array[$p][$i]];
					$page_info_arr1['post_parent'] = $pages_array[$p][0];
					$page_info_arr[] = $page_info_arr1;
				}
			}
			else
			{
				$page_info_arr1 = array();
				$page_info_arr1['post_title'] = $pages_array[$p];
				$page_info_arr1['post_content'] = $page_info_arr_arg[$pages_array[$p]];
				$page_info_arr1['post_parent'] = '';
				$page_info_arr[] = $page_info_arr1;
			}
		}

		if($page_info_arr)
		{
			for($j=0;$j<count($page_info_arr);$j++)
			{
				$post_title = $page_info_arr[$j]['post_title'];
				$post_content = addslashes($page_info_arr[$j]['post_content']);
				$post_parent = $page_info_arr[$j]['post_parent'];
				if($post_parent!='')
				{
					$post_parent_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts where post_title like \"$post_parent\" and post_type='page'");
				}else
				{
					$post_parent_id = 0;
				}
				$post_date = date('Y-m-d H:s:i');
				$post_name = strtolower(str_replace(array("'",'"',"?",".","!","@","#","$","%","^","&","*","(",")","-","+","+"," "),array('-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-'),$post_title));
				$post_name_count = $wpdb->get_var("SELECT count(ID) FROM $wpdb->posts where post_title like \"$post_title\" and post_type='page'");
				if($post_name_count>0)
				{
					echo '';
				}else
				{
					$post_sql = "insert into $wpdb->posts (post_author,post_date,post_date_gmt,post_title,post_content,post_name,post_parent,post_type) values (\"$post_author\", \"$post_date\", \"$post_date\",  \"$post_title\", \"$post_content\", \"$post_name\",\"$post_parent_id\",'page')";
					$wpdb->query($post_sql);
					$last_post_id = $wpdb->get_var("SELECT max(ID) FROM $wpdb->posts");
					$guid = get_option('siteurl')."/?p=$last_post_id";
					$guid_sql = "update $wpdb->posts set guid=\"$guid\" where ID=\"$last_post_id\"";
					$wpdb->query($guid_sql);
					$ter_relation_sql = "insert into $wpdb->term_relationships (object_id,term_taxonomy_id) values (\"$last_post_id\",\"$last_tt_id\")";
					$wpdb->query($ter_relation_sql);
					update_post_meta( $last_post_id, 'pt_dummy_content', 1 );
				}
			}
		}
	}
}
//=====================================================================
$photo_page_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts where post_title like 'Home' and post_type='page'");
update_post_meta( $photo_page_id, '_wp_page_template', 'template-home.php' );

$wp_upload_dir = wp_upload_dir();
$basedir = $wp_upload_dir['basedir'];
$baseurl = $wp_upload_dir['baseurl'];
$folderpath = $basedir."/dummy/";
full_copy( TEMPLATEPATH."/assets/dummy/", $folderpath );
function full_copy( $source, $target ) 
{
	$imagepatharr = explode('/',str_replace(TEMPLATEPATH,'',$target));
	for($i=0;$i<count($imagepatharr);$i++)
	{
	  if($imagepatharr[$i])
	  {
		  $year_path = ABSPATH.$imagepatharr[$i]."/";
		  if (!file_exists($year_path)){
			 @mkdir($year_path, 0777);
		  }     
		}
	}
	if ( is_dir( $source ) ) {
		@mkdir( $target );
		$d = dir( $source );
		while ( FALSE !== ( $entry = $d->read() ) ) {
			if ( $entry == '.' || $entry == '..' ) {
				continue;
			}
			$Entry = $source . '/' . $entry; 
			if ( is_dir( $Entry ) ) {
				full_copy( $Entry, $target . '/' . $entry );
				continue;
			}
			@copy( $Entry, $target . '/' . $entry );
		}
	
		$d->close();
	}else {
		@copy( $source, $target );
	}
}

/////////////// WIDGET SETTINGS START ///////////////

$sidebars_widgets = get_option('sidebars_widgets');  //collect widget informations
$sidebars_widgets = array();


////////////////Contact Form//////////////////////
$widget_contactform = array();
$widget_contactform[1] = array(
					"title"        => 'Lorem ipsum dolor sit amet.',					
					"contactforminfo"  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
					"thanksinfo"  => '[contact-form-7 id="32" title="Contact form 1"]',
					);					
$widget_contactform['_multiwidget'] = '1';
update_option('widget_widget_contactform',$widget_contactform);
$widget_contactform = get_option('widget_widget_contactform');
krsort($widget_contactform);
foreach($widget_contactform as $key1=>$val1)
{
	$boxes_key = $key1;
	if(is_int($boxes_key))
	{
		break;
	}
}
$sidebars_widgets["contact-form"] = array("widget_contactform-$boxes_key");


//===============================================================================
//////////////////////////////////////////////////////
update_option('sidebars_widgets',$sidebars_widgets);  //save widget iformations
/////////////// WIDGET SETTINGS END /////////////

//=====================================================================
/////////////// Design Settings START ///////////////


// General settings start  /////
update_option("ptthemes_callus",'CALL US TODAY');
update_option("ptthemes_phone",'123-456-1234');
update_option("ptthemes_get_quote",'GET A QUOTE');
update_option("ptthemes_get_quote_link",'#');
update_option("ptthemes_our_contact_title",'Our Contact');
update_option("ptthemes_adress",'1800 Main St, Suite 902B Tinkerton USA');
update_option("ptthemes_latlng",'39.727172, -95.489219');
update_option("ptthemes_email",'samplemail@gmail.com');
update_option("ptthemes_copyright",'Copyright © 2015 Pauls Template, All rights reserved.');
update_option("ptthemes_site",'Plumber');
update_option("page_on_front",'Home');
update_option("page_for_posts",'Blog');
update_option("show_on_front",'page');
update_option("admin_email",'samplemail@gmail.com');
update_option("ptthemes_auto_install",'No');
// General settings End  /////

// Seo option
update_option("pttheme_seo_hide_fields",'No');
update_option("ptthemes_use_third_party_data",'No');
// Seo option 



if($_REQUEST['dump']==1){
echo "<script>";
echo "window.location.href='".get_option('siteurl')."/wp-admin/themes.php?dummy_insert=1'";
echo "</script>";
}
?>