<?php
/**
 * Initialize the custom Theme Options.
 */
add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 *
 * @return    void
 * @since     2.3.0
 */
function custom_theme_options() {

  /* OptionTree is not loaded yet, or this is not an admin request */
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;

  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'content'       => array( 
        array(
          'id'        => 'option_types_help',
          'title'     => __( 'Option Types', 'option-tree-theme' ),
          'content'   => '<p>' . __( 'Help content goes here!', 'option-tree-theme' ) . '</p>'
        )
      ),
      'sidebar'       => '<p>' . __( 'Sidebar content goes here!', 'option-tree-theme' ) . '</p>'
    ),
    'sections'        => array( 
      array(
        'id'          => 'general_settings',
        'title'       => __( 'General Settings', 'option-tree-theme' )
      ),
      array(
        'id'          => 'banner_settings',
        'title'       => __( 'Banner Settings', 'option-tree-theme' )
      ),
      array(
        'id'          => 'key_features_settings',
        'title'       => __( 'Key Features Settings', 'option-tree-theme' )
      ),
      array(
        'id'          => 'services_settings',
        'title'       => __( 'Services Settings', 'option-tree-theme' )
      ),
      array(
        'id'          => 'work_settings',
        'title'       => __( 'Work Settings', 'option-tree-theme' )
      ),
      array(
        'id'          => 'team_settings',
        'title'       => __( 'Team Settings', 'option-tree-theme' )
      ),
      array(
        'id'          => 'clients_settings',
        'title'       => __( 'Clients Settings', 'option-tree-theme' )
      ),
      array(
        'id'          => 'faq_settings',
        'title'       => __( 'FAQ Settings', 'option-tree-theme' )
      ),
      array(
        'id'          => 'about_us',
        'title'       => __( 'About Us', 'option-tree-theme' )
      ),
      array(
        'id'          => 'contact_us',
        'title'       => __( 'Contact Us', 'option-tree-theme' )
      ),
      array(
        'id'          => 'add_scripts',
        'title'       => __( 'Add Scripts', 'option-tree-theme' )
      ),
      array(
        'id'          => 'social_media',
        'title'       => __( 'Social Media', 'option-tree-theme' )
      )
    ),
    'settings'        => array( 

//General Settings
     array(
        'id'          => 'all_media_favicon',
        'label'       => __( 'Favicon', 'option-tree-theme' ),
        'desc'        => sprintf( __( 'Enter the full URL to your favicon image. You can create one here', 'option-tree-theme' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'option-tree-theme' ) ), 'FTP' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'all_media_logo_url',
        'label'       => __( 'Custom logo', 'option-tree-theme' ),
        'desc'        => sprintf( __( 'Enter the full URL to your logo image or add a new logo by clicking the Upload button', 'option-tree-theme' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'option-tree-theme' ) ), 'FTP' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'all_media_footer_logo_url',
        'label'       => __( 'Custom Footer logo', 'option-tree-theme' ),
        'desc'        => sprintf( __( 'Enter the full URL to your logo image or add a new logo by clicking the Upload button', 'option-tree-theme' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'option-tree-theme' ) ), 'FTP' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'all_media_footer_desc',
        'label'       => __( 'Custom Footer Desc', 'option-tree-theme' ),
        'desc'        => __( 'Enter Footer Desc here', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'general_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'all_media_newsletter',
        'label'       => __( 'Newsletter', 'option-tree-theme' ),
        'desc'        => __( 'Enter Newsletter Short Code here', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'general_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	   array(
        'id'          => 'all_media_key_customer_service',
        'label'       => __( 'Customer Service', 'option-tree-theme' ),
        'desc'        => __( 'Enter Customer Service here', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'general_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
     array(
        'id'          => 'all_media_key_bottom_part',
        'label'       => __( 'Bottom Section', 'option-tree-theme' ),
        'desc'        => __( 'Enter Bottom Section here', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'general_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
     array(
        'id'          => 'all_media_key_address',
        'label'       => __( 'Add Address', 'option-tree-theme' ),
        'desc'        => __( 'Enter Bottom Address here', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'general_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
 
//Banner Settings
     array(
        'id'          => 'all_media_contaon',
        'label'       => __( 'Add Banner Contain', 'option-tree-theme' ),
        'desc'        => __( 'If you need to add Contain here.', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'banner_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

     array(
        'id'          => 'all_media_form',
        'label'       => __( 'Add Form', 'option-tree-theme' ),
        'desc'        => __( 'If you need to add Contain7 Form (short code) here.', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'banner_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

//Key Features Settings
     array(
        'id'          => 'all_media_key_title',
        'label'       => __( 'Add Title', 'option-tree-theme' ),
        'desc'        => __( 'If you need to add Title here.', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'key_features_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
     array(
        'id'          => 'all_media_key_contain',
        'label'       => __( 'Add Contain', 'option-tree-theme' ),
        'desc'        => __( 'If you need to add Contain here.', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'key_features_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
     array(
        'id'          => 'all_media_key_banner',
        'label'       => __( 'Add Banner', 'option-tree-theme' ),
        'desc'        => sprintf( __( 'Enter the full URL to your Banner image or add a new Banner by clicking the Upload button', 'option-tree-theme' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'option-tree-theme' ) ), 'FTP' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'key_features_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

//Services Settings
     array(
        'id'          => 'all_media_services_title',
        'label'       => __( 'Add Title', 'option-tree-theme' ),
        'desc'        => __( 'If you need to add Title here.', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'services_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
     array(
        'id'          => 'all_media_services_contain',
        'label'       => __( 'Add Contain', 'option-tree-theme' ),
        'desc'        => __( 'If you need to add Contain here.', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'services_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
     array(
        'id'          => 'all_media_services_contain_bottom',
        'label'       => __( 'Add Contain Bottom', 'option-tree-theme' ),
        'desc'        => __( 'If you need to add Bottom Contain here.', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'services_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

//Work Settings
     array(
        'id'          => 'all_media_work_title',
        'label'       => __( 'Add Title', 'option-tree-theme' ),
        'desc'        => __( 'If you need to add Title here.', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'work_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
     array(
        'id'          => 'all_media_work_contain',
        'label'       => __( 'Add Contain', 'option-tree-theme' ),
        'desc'        => __( 'If you need to add Contain here.', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'work_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

//Team Settings
     array(
        'id'          => 'all_media_team_title',
        'label'       => __( 'Add Title', 'option-tree-theme' ),
        'desc'        => __( 'If you need to add Title here.', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'team_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
     array(
        'id'          => 'all_media_team_contain',
        'label'       => __( 'Add Contain', 'option-tree-theme' ),
        'desc'        => __( 'If you need to add Contain here.', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'team_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

//Clients Settings
     array(
        'id'          => 'all_media_clients_title',
        'label'       => __( 'Add Title', 'option-tree-theme' ),
        'desc'        => __( 'If you need to add Title here.', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'clients_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
     array(
        'id'          => 'all_media_clients_contain',
        'label'       => __( 'Add Contain', 'option-tree-theme' ),
        'desc'        => __( 'If you need to add Contain here.', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'clients_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

//FAQ Settings
     array(
        'id'          => 'all_media_faq_title',
        'label'       => __( 'Add Title', 'option-tree-theme' ),
        'desc'        => __( 'If you need to add Title here.', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'faq_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
     array(
        'id'          => 'all_media_faq_contain',
        'label'       => __( 'Add Contain', 'option-tree-theme' ),
        'desc'        => __( 'If you need to add Contain here.', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'faq_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  
//About Us
      array(
        'id'          => 'all_media_about_mission',
        'label'       => __( 'Our Mission', 'option-tree-theme' ),
        'desc'        => __( 'Enter Our Mission Here.', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'about_us',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'all_media_about_vision',
        'label'       => __( 'Our Vision', 'option-tree-theme' ),
        'desc'        => __( 'Enter Our vision Here.', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'about_us',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'all_media_about_support',
        'label'       => __( 'Our Support', 'option-tree-theme' ),
        'desc'        => __( 'Enter Our Support Here.', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'about_us',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

//Contact Us
      array(
        'id'          => 'all_media_contact_location',
        'label'       => __( 'Our Location', 'option-tree-theme' ),
        'desc'        => __( 'Enter Our Location Here.', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'contact_us',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'all_media_contact_call_us',
        'label'       => __( 'Call Us On', 'option-tree-theme' ),
        'desc'        => __( 'Enter Call Us On Here.', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'contact_us',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'all_media_contact_message',
        'label'       => __( 'Send a Message', 'option-tree-theme' ),
        'desc'        => __( 'Enter Send a Message Here.', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'contact_us',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      
//Script
     array(
        'id'          => 'ptthemes_scripts_header',
        'label'       => __( 'Header Scripts', 'option-tree-theme' ),
        'desc'        => __( 'If you need to add scripts to your header (like Mint tracking code), do so here.', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'add_scripts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'ptthemes_scripts_footer',
        'label'       => __( 'Footer Scripts', 'option-tree-theme' ),
        'desc'        => __( 'If you need to add scripts to your footer (like Google Analytics tracking code), do so here.', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'add_scripts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'id'          => 'demo_social_links',
        'label'       => __( 'Social Links', 'option-tree-theme' ),
        'desc'        => '<p>' . sprintf( __( 'The Social Links option type utilizes a drag & drop interface to create a list of social links. There are a few filters that make extending this option type easy. You can set the %s filter to %s and turn off loading default values. Use the %s filter to change the default values that are loaded. To filter the settings array use the %s filter.', 'option-tree-theme' ), '<code>ot_type_social_links_load_defaults</code>', '<code>false</code>', '<code>ot_type_social_links_defaults</code>', '<code>ot_social_links_settings</code>' ) . '</p>',
        'std'         => '',
        'type'        => 'social-links',
        'section'     => 'social_media',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      )
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}