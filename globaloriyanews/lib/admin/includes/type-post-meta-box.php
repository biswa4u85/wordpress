<?php 
//first register the column
add_filter('manage_posts_columns', 'posts_columns');
function posts_columns($defaults){
    $defaults['o_title'] = __('Odia Title');
    return $defaults;
}
 
//then you need to render the column
add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);
function posts_custom_columns($column_name, $post_id){
    if($column_name === 'o_title'){
        echo get_post_meta($post_id,'odia_title', true);
    }
}
