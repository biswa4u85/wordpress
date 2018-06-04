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

////post start 1///
$post_meta = array(
				   "templ_seo_page_title" =>'Post one',
				   "templ_seo_page_kw" => '',"tl_dummy_content"	=> '1',
				   "templ_seo_page_desc" => '',
				);
$post_info[] = array(
					"post_title" =>	'Post One',
					"post_content" =>	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
					
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
',
					"post_meta" =>	$post_meta,
					"post_category" =>	array('Category1','Sub1'),
					"post_tags" =>	array('Tags One','Tags Two')
					);
////post end///
//====================================================================================//
////post start 2///
$post_meta = array(
				   "templ_seo_page_title" =>'Post Two',
				   "templ_seo_page_kw" => '',"tl_dummy_content"	=> '1',
				   "templ_seo_page_desc" => '',
				);
$post_info[] = array(
					"post_title" =>	'Post Two',
					"post_content" =>	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
					
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
',
					"post_meta" =>	$post_meta,
					"post_category" =>	array('Category2','Sub2'),
					"post_tags" =>	array('Tags Three','Tags Two')
					);
////post end///
//====================================================================================//
////post start 3///
$post_meta = array(
				   
				   "templ_seo_page_title" =>'Post Three',
				   "templ_seo_page_kw" => '',"tl_dummy_content"	=> '1',
				   "templ_seo_page_desc" => '',
				);
$post_info[] = array(
					"post_title" =>	'Post Three',
					"post_content" =>	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
',
					"post_meta" =>	$post_meta,
					"post_category" =>	array('Category3','Sub2'),
					"post_tags" =>	array('Tags Four','Tags Two')
					);
////post end///
//====================================================================================//
////post start 4///
$post_meta = array(
				   
				   "templ_seo_page_title" =>'Post Four',
				   "templ_seo_page_kw" => '',"tl_dummy_content"	=> '1',
				   "templ_seo_page_desc" => '',
				);
$post_info[] = array(
					"post_title" =>	'Post Four',

					"post_content" =>	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
',
					"post_meta" =>	$post_meta,
					"post_category" =>	array('Category3','Sub2'),
					"post_tags" =>	array('Tags Four','Tags Two')
					);
////post end///
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

/////////////////////////////////////////////////
$pages_array = array('Blog','Full Width',array('Dropdown Menu','Sub Page1','Sub Page2'),'Contact Us');
$page_info_arr = array();
$page_info_arr['Blog'] = '';
$page_info_arr['Full Width'] = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.';
$page_info_arr['Dropdown Menu'] = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.';
$page_info_arr['Sub Page1'] = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.';
$page_info_arr['Sub Page2'] = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.';
$page_info_arr['Contact Us'] = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.';
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
$photo_page_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts where post_title like 'Blog' and post_type='page'");
update_post_meta( $photo_page_id, '_wp_page_template', 'templates-pages/page-blog.php' );
$photo_page_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts where post_title like 'Full Width' and post_type='page'");
update_post_meta( $photo_page_id, '_wp_page_template', 'templates-pages/page-full-width.php' );
$photo_page_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts where post_title like 'Contact Us' and post_type='page'");
update_post_meta( $photo_page_id, '_wp_page_template', 'templates-pages/page-contact.php' );

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

////////////////Home Box//////////////////////
$homeboxs_widget = array();
$homeboxs_widget[1] = array(
					"title"		  => 'Home Box',					
					"name1"	      => 'Header here',	
					"link1"	      => '#',
					"quotetext1"  => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
					"name2"	      => 'Header here',	
					"link2"	      => '#',
					"quotetext2"  => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
					"name3"	      => 'Header here',	
					"link3"	      => '#',
					"quotetext3"  => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
					);					
$homeboxs_widget['_multiwidget'] = '1';
update_option('widget_homeboxs_widget',$homeboxs_widget);
$homeboxs_widget = get_option('widget_homeboxs_widget');
krsort($homeboxs_widget);
foreach($homeboxs_widget as $key1=>$val1)
{
	$boxes_key = $key1;
	if(is_int($boxes_key))
	{
		break;
	}
}
$sidebars_widgets["home-box-area"] = array("homeboxs_widget-$boxes_key");

////////////////Footer One//////////////////////
$widget_contact = array();
$widget_contact[1] = array(
					"title"        => 'Contact Us',					
					"contactinfo"  => '<p>Tel: (309) 999-9999<br />Email: me@yourcompany.com</p><p>Address:<br />902 Any Street<br />Your City, MO 41466</p>',
					);					
$widget_contact['_multiwidget'] = '1';
update_option('widget_widget_contact',$widget_contact);
$widget_contact = get_option('widget_widget_contact');
krsort($widget_contact);
foreach($widget_contact as $key1=>$val1)
{
	$boxes_key = $key1;
	if(is_int($boxes_key))
	{
		break;
	}
}
$sidebars_widgets["footer-one"] = array("widget_contact-$boxes_key");

////////////////Contact Form//////////////////////
$widget_contactform = array();
$widget_contactform[1] = array(
					"title"        => 'Email Successfully Sent!',					
					"contactforminfo"  => 'We will contact you soon.',
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
update_option("favicon_upload","$dummy_image_path/fav.png");
update_option("custom_logo","$dummy_image_path/logo.png");
update_option("youtube_link",'BmOpD46eZoA');
update_option("embedded_form_link",'http://form.betahub.net/form/54ff7e801c1a9/e');
update_option("embedded_form_height",'1040');
update_option("phone_number",'123-456-7890');
update_option("site_color",'BLUE');
update_option("map_address",'22.295926,70.791163');
update_option("google_profile_id",'102556015603468183499');
update_option("show_on_front",'page');
update_option("page_for_posts",'42');
update_option("admin_email",'info@mysite.com');
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