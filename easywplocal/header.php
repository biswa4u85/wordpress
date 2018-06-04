<?php
/**
 * Default Page Header
 *
 * @package WP-Bootstrap
 * @subpackage WP-Bootstrap
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>><head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title ( '|', true,'right' ); ?></title>
    <?php do_action('templ_head_meta');?>
    <script type='text/javascript' src='<?php echo get_template_directory_uri();?>/assets/js/html5.js'></script>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <?php if (ot_get_option('favicon_upload') == '') { ?>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/assets/ico/favicon.png">
    <?php } else { ?>
    <link rel="shortcut icon" href="<?php echo ot_get_option('favicon_upload'); ?>">
    <?php } ?>
    <!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js" type="text/javascript"></script>
	<![endif]-->
    <?php echo ot_get_option('header_scripts'); ?>
    <link rel='stylesheet' id='font-awesome'  href='<?php echo get_template_directory_uri();?>/assets/css/font-awesome.min.css' type='text/css' media='all' />
    <?php wp_head(); ?>
    <?php if (ot_get_option('site_color') == 'BLUE') { ?>
    <link rel='stylesheet' id='bootstrapwp-Blue-css'  href='<?php echo get_template_directory_uri();?>/assets/css/blue.css' type='text/css' media='all' />
    <?php } elseif (ot_get_option('site_color') == 'GREEN') { ?>
    <link rel='stylesheet' id='bootstrapwp-Green-css'  href='<?php echo get_template_directory_uri();?>/assets/css/green.css' type='text/css' media='all' /
    <?php } elseif (ot_get_option('site_color') == 'WHITE') { ?>
    <link rel='stylesheet' id='bootstrapwp-Green-css'  href='<?php echo get_template_directory_uri();?>/assets/css/white.css' type='text/css' media='all' />
    <?php } elseif (ot_get_option('site_color') == 'SOFT BLUE') { ?>
    <link rel='stylesheet' id='bootstrapwp-Green-css'  href='<?php echo get_template_directory_uri();?>/assets/css/softblue.css' type='text/css' media='all' />
    <?php } elseif (ot_get_option('site_color') == 'BRIGHT RED') { ?>
    <link rel='stylesheet' id='bootstrapwp-Green-css'  href='<?php echo get_template_directory_uri();?>/assets/css/brightred.css' type='text/css' media='all' />
    <?php } elseif (ot_get_option('site_color') == 'LIGHT GREEN') { ?>
    <link rel='stylesheet' id='bootstrapwp-Green-css'  href='<?php echo get_template_directory_uri();?>/assets/css/lightgreen.css' type='text/css' media='all' />
    <?php } elseif (ot_get_option('site_color') == 'YELLOW') { ?>
    <link rel='stylesheet' id='bootstrapwp-Green-css'  href='<?php echo get_template_directory_uri();?>/assets/css/yellow.css' type='text/css' media='all' />
    <?php } elseif (ot_get_option('site_color') == 'BURGUNDY') { ?>
    <link rel='stylesheet' id='bootstrapwp-Green-css'  href='<?php echo get_template_directory_uri();?>/assets/css/burgundy.css' type='text/css' media='all' />
    <?php } elseif (ot_get_option('site_color') == 'RICH BROWN') { ?>
    <link rel='stylesheet' id='bootstrapwp-Green-css'  href='<?php echo get_template_directory_uri();?>/assets/css/richbrown.css' type='text/css' media='all' />
    <?php } ?>
</head>
<body>
<div class="container clearfix">
<div class="main-bg">
<header>

        <div class="row-fluid heading">
          <div class="span4">
            
            <!-- Logo -->
            <div class="logo"><a class="brand" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
            <?php if (ot_get_option('custom_logo')) { ?>
            <img width="269" height="95" src="<?php echo ot_get_option('custom_logo'); ?>" alt="<?php bloginfo('name'); ?>">
            <?php } else { ?>
            <img width="269" height="95" src="<?php echo get_template_directory_uri();?>/assets/img/logo.png">  
            <?php } ?>           
            </a></div>
            </div>
            <div class="span8">
            <div class="row-fluid">
            <div class="search"><?php get_search_form(); ?></div>
            </div>
            <div class="row-fluid">
     
            <div class="navbar navbar-inverse"><a class="btn-navbar" data-toggle="collapse" data-target=".nav-collapse1"><img src="<?php echo get_template_directory_uri();?>/assets/img/mob-nav.png" /></a>
            </div>
            <div class="nav-left"><div class="nav-right"><div class="nav-box">
            <div class="nav1 nav-collapse1 collapse"><?php wp_nav_menu( array( 'theme_location' => 'main') ); ?></div>
            </div></div></div>
		
            </div>
            
      </div>
            </div>
            

</header>
<!-- End Header. Begin Navigation Content -->
<div class="contain-arrea">
<div class="conten-top"><div class="conten-bg"><div class="conten-xbg">