<?php

$post_id = $_GET['post'];
$templates = get_page_template_slug( $post_id );

//if($templates == 'template-contact.php' ) {
  
// }

add_action( 'admin_init', 'custom_meta_boxes' ); 
function custom_meta_boxes() { 

  $page_meta_box = 
  array(
    'id'          => 'page_meta_box',
    'title'       => __( 'Contain Details', 'theme-text-domain' ),
    'desc'        => '',
    'pages'       => array( 'page' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
//Location
      array(
        'label'       => __( 'Location', 'theme-text-domain' ),
        'id'          => 'contact_location',
        'type'        => 'tab'
      ),
      array(
        'label'       => __( 'Title', 'theme-text-domain' ),
        'id'          => 'contact_location_title',
        'type'        => 'text',
        'desc'        => __( 'Add Title here.', 'theme-text-domain' )
      ),
      array(
        'label'       => __( 'Details', 'theme-text-domain' ),
        'id'          => 'contact_location_details',
        'type'        => 'textarea',
        'desc'        => __( 'Add Details here.', 'theme-text-domain' )
      ),
//Call Us
      array(
        'label'       => __( 'Call Us On', 'theme-text-domain' ),
        'id'          => 'contact_call_us',
        'type'        => 'tab'
      ),
      array(
        'label'       => __( 'Title', 'theme-text-domain' ),
        'id'          => 'contact_call_us_title',
        'type'        => 'text',
        'desc'        => __( 'Add Title here.', 'theme-text-domain' )
      ),
      array(
        'label'       => __( 'Details', 'theme-text-domain' ),
        'id'          => 'contact_call_us_details',
        'type'        => 'textarea',
        'desc'        => __( 'Add Details here.', 'theme-text-domain' )
      ),
//Send a Message
      array(
        'label'       => __( 'Send a Message', 'theme-text-domain' ),
        'id'          => 'contact_message',
        'type'        => 'tab'
      ),
      array(
        'label'       => __( 'Title', 'theme-text-domain' ),
        'id'          => 'contact_message_title',
        'type'        => 'text',
        'desc'        => __( 'Add Title here.', 'theme-text-domain' )
      ),
      array(
        'label'       => __( 'Details', 'theme-text-domain' ),
        'id'          => 'contact_message_details',
        'type'        => 'textarea',
        'desc'        => __( 'Add Details here.', 'theme-text-domain' )
      ),
    )
  );

  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $page_meta_box );
}