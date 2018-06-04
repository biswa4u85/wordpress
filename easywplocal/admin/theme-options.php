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
        'id'          => 'add_scripts',
        'title'       => __( 'Add Scripts', 'option-tree-theme' )
      ),
      array(
        'id'          => 'posts',
        'title'       => __( 'posts', 'option-tree-theme' )
      ),
      array(
        'id'          => 'social_media',
        'title'       => __( 'Social Media', 'option-tree-theme' )
      )
    ),
    'settings'        => array( 
     array(
        'id'          => 'favicon_upload',
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
        'id'          => 'custom_logo',
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
        'id'          => 'youtube_link',
        'label'       => __( 'Youtube Link', 'option-tree-theme' ),
        'desc'        => __( 'Enter Youtube Link here', 'option-tree-theme' ),
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
        'id'          => 'embedded_form_link',
        'label'       => __( 'Embedded Form Link', 'option-tree-theme' ),
        'desc'        => __( 'Enter Embedded Form Link here', 'option-tree-theme' ),
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
        'id'          => 'embedded_form_height',
        'label'       => __( 'Embedded Form Height', 'option-tree-theme' ),
        'desc'        => __( 'Enter Embedded Form Height here', 'option-tree-theme' ),
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
        'id'          => 'phone_number',
        'label'       => __( 'Phone Number', 'option-tree-theme' ),
        'desc'        => __( 'Enter Phone Number here', 'option-tree-theme' ),
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
        'id'          => 'google_profile_id',
        'label'       => __( 'Google Profile Id', 'option-tree-theme' ),
        'desc'        => __( 'Enter Profile Id here', 'option-tree-theme' ),
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
        'id'          => 'site_color',
        'label'       => __( 'Site Color', 'option-tree-theme' ),
        'desc'        => __( 'Choose Site Colors', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'select',
        'section'     => 'general_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => '',
            'label'       => __( '-- Choose One --', 'option-tree-theme' ),
            'src'         => ''
          ),
          array(
            'value'       => 'BLUE',
            'label'       => __( 'BLUE', 'option-tree-theme' ),
            'src'         => ''
          ),
          array(
            'value'       => 'GREEN',
            'label'       => __( 'GREEN', 'option-tree-theme' ),
            'src'         => ''
          ),
          array(
            'value'       => 'ORANGE',
            'label'       => __( 'ORANGE', 'option-tree-theme' ),
            'src'         => ''
          ),
          array(
            'value'       => 'SOFT BLUE',
            'label'       => __( 'SOFT BLUE', 'option-tree-theme' ),
            'src'         => ''
          ),
          array(
            'value'       => 'BRIGHT RED',
            'label'       => __( 'BRIGHT RED', 'option-tree-theme' ),
            'src'         => ''
          ),
          array(
            'value'       => 'LIGHT GREEN',
            'label'       => __( 'LIGHT GREEN', 'option-tree-theme' ),
            'src'         => ''
          ),
          array(
            'value'       => 'YELLOW',
            'label'       => __( 'YELLOW', 'option-tree-theme' ),
            'src'         => ''
          ),
          array(
            'value'       => 'BURGUNDY',
            'label'       => __( 'BURGUNDY', 'option-tree-theme' ),
            'src'         => ''
          ),
          array(
            'value'       => 'RICH BROWN',
            'label'       => __( 'RICH BROWN', 'option-tree-theme' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'sidebar',
        'label'       => __( 'Sidebar', 'option-tree-theme' ),
        'desc'        => __( 'Change Sidebar here', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'select',
        'section'     => 'general_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => '',
            'label'       => __( '-- Choose One --', 'option-tree-theme' ),
            'src'         => ''
          ),
          array(
            'value'       => 'GOOGLE MAP',
            'label'       => __( 'GOOGLE MAP', 'option-tree-theme' ),
            'src'         => ''
          ),
          array(
            'value'       => 'SIDEBAR1',
            'label'       => __( 'SIDEBAR1', 'option-tree-theme' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'map_address',
        'label'       => __( 'Map Address', 'option-tree-theme' ),
        'desc'        => __( 'Enter address here', 'option-tree-theme' ),
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
        'id'          => 'header_scripts',
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
        'id'          => 'footer_scripts',
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
        'id'          => 'home_page',
        'label'       => __( 'Home Page', 'option-tree-theme' ),
        'desc'        => __( 'Enter Number of post in home page', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'posts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'archive_page',
        'label'       => __( 'Archive Page', 'option-tree-theme' ),
        'desc'        => __( 'Enter Number of post in Archive Page', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'posts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'search_page',
        'label'       => __( 'Search Page', 'option-tree-theme' ),
        'desc'        => __( 'Enter Number of post in search page', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'posts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'home_page',
        'label'       => __( 'Home Page', 'option-tree-theme' ),
        'desc'        => __( 'Enter Number of post in home page', 'option-tree-theme' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'posts',
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