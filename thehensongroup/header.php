<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 header("Access-Control-Allow-Origin: *");
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
<?php wp_title( '|', true, 'right' ); ?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->


<?php wp_head(); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="<?php echo get_template_directory_uri() . '/css/default.css'?>" media="all" type="text/css" rel="stylesheet"/>
<link href="<?php echo get_template_directory_uri() . '/css/font-awesome.min.css'?>" media="all" type="text/css" rel="stylesheet"/>
<link href="<?php echo get_template_directory_uri() . '/css/bootstrap.min.css'?>" media="all" type="text/css" rel="stylesheet"/>
<link href="<?php echo get_template_directory_uri() . '/css/owl.carousel.css'?>" media="all" type="text/css" rel="stylesheet"/>
<link href="<?php echo get_template_directory_uri() . '/css/skin.css'?>" media="all" type="text/css" rel="stylesheet"/>
<link href="<?php echo get_template_directory_uri() . '/css/shortcodes.css'?>" media="all" type="text/css" rel="stylesheet"/>
<link href="<?php echo get_template_directory_uri() . '/css/HomePage.css'?>" media="all" type="text/css" rel="stylesheet"/>
<link href="<?php echo get_template_directory_uri() . '/css/jquery.css'?>" media="all" type="text/css" rel="stylesheet"/>
<link href="<?php echo get_template_directory_uri() . '/css/portal.css'?>" media="all" type="text/css" rel="stylesheet"/>
<link href="<?php echo get_template_directory_uri() . '/css/SearchSkinObjectPreview.css'?>" media="all" type="text/css" rel="stylesheet"/>
<link href="<?php echo get_template_directory_uri() . '/css/animate.css'?>" media="all" type="text/css" rel="stylesheet"/>
<link href="<?php echo get_template_directory_uri() . '/css/Style_002.css'?>" media="all" type="text/css" rel="stylesheet"/>
<link href="<?php echo get_template_directory_uri() . '/css/Style_003.css'?>" media="all" type="text/css" rel="stylesheet"/>
 <!-- scroll up -->
<script type="text/javascript">
    var $ = jQuery.noConflict();
    $(document).ready(function(){

setInterval(function(){ $('.owl-next').trigger('click'); }, 3000); 


 $('.scroll-up').hide();
        $(window).scroll(function(){
            if ($(this).scrollTop() > 250) {
                $('.scroll-up').fadeIn();
            } else {
                $('.scroll-up').fadeOut();
            }
        });

        $('.scroll-up').click(function(){
            $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
        });

        $('a[href^="#"]').on('click', function(event) {
            var target = $( $(this).attr('href') );

            if( target.length ) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 750);
            }
         });
    });

 $(document).ready(function() {
      var owl = $("#one_slide");
      owl.owlCarousel({
        itemsCustom : [
          [0, 1],
          [480, 2],
          [640, 3],
          [992, 4],
          [1200, 6]
        ],
        navigation : true,
        loop:true,
    margin:10,
    autoPlay:true,
    autoPlayTimeout:1000,
    autoPlayHoverPause:true,
    autoPlaySpeed:5000
      });
    });

</script>
</head>
<body id="top">
<div class="body_bg full">
<div id="dnn_wrapper">
<div class="navigation  navigation_mobile visible-xs">
  <div class="Login ElementHide-xs ElementHide-sm ElementHide-md ElementHide-lg"> <span class="sep">|</span> </div>
  <div class="searchBox2">
    <form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
      <span id="dnn_dnnSEARCH_ClassicSearch"> <span class="searchInputContainer">
      <input type="search" class="NormalTextBox" size="20" maxlength="255" placeholder="<?php echo esc_attr_x( 'Search…', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" />
      <a class="dnnSearchBoxClearText"></a> </span>
      <button type="submit" value="<?php echo esc_attr_x( '', 'submit button' ) ?>" class="srch-submit"> <i class="fa fa-search"></i> </button>
      </span>
    </form>
  </div>
  <div class="IHide-xs" id="mobile_menu">
    <div class="menu_main">
      <div class="multi_menu" id="multi_menufd1b35d95c">
        <ul class="dropdown " id="gomenufd1b35d95c">
          <li class=" <?php if ( is_page('home')) echo "current" ?> Item-1 "><a  title="Home" class="menuitem" href="<?php echo esc_url( home_url( '/' ) ); ?>"><span>Home</span></a></li>
          <li class="Item-2 dir <?php if (is_page( 'services' ) || '7' == $post->post_parent) echo "current" ?>"><a title="Services" class="menuitem" href="<?php echo esc_url( home_url( '/services' ) ); ?>"><span class="menu_arrow arrow_opened">+</span> <span>Services</span></a>
            <ul style="display: none;">
              <li class=" SunItem-1 "><a title="Cloud" href="<?php echo esc_url( home_url( '/cloud' ) ); ?>"><span>Cloud</span></a></li>
              <li class=" SunItem-2 "><a title="Devices" href="<?php echo esc_url( home_url( '/devices' ) ); ?>"><span>Devices</span></a></li>
              <li class=" SunItem-3 ">
              <a title="Collaboration" href="<?php echo esc_url( home_url( '/collaboration' ) ); ?>"><span>Collaboration</span></a></li>
              <li class=" SunItem-4 "><a title="Security" href="<?php echo esc_url( home_url( '/security' ) ); ?>"><span>Security</span></a></li>
            </ul>
          </li>
          <li class="Item-3 dir <?php if (is_page( 'about-us' ) || '17' == $post->post_parent) echo "current" ?>">
          <a title="About Us" class="menuitem" href="<?php echo esc_url( home_url( '/about-us' ) ); ?>"><span class="menu_arrow arrow_opened">+</span><span>About Us</span></a>
            <ul style="display: none;">
              <li class=" SunItem-1 "><a title="Blog" href="<?php echo esc_url( home_url( '/blog' ) ); ?>"><span>Blog</span></a></li>
              <li class=" SunItem-2 "><a title="Offices" href="<?php echo esc_url( home_url( '/offices' ) ); ?>"><span>Offices</span></a></li>
             <!-- <li class=" SunItem-3 "><a title="Team" href="<?php //echo esc_url( home_url( '/our-team' ) ); ?>"><span>Team</span></a></li> -->
             <!-- <li class=" SunItem-3 "><a title="Our " href="<?php //echo esc_url( home_url( '/our-methodology' ) ); ?>"><span>Our Methodology</span></a></li> -->
              <li class=" SunItem-4 "><a title="Fun" href="<?php echo esc_url( home_url( '/fun' ) ); ?>"><span>Fun</span></a></li>
            </ul>
          </li>
          <li class="<?php if ( is_page('our-clients')) echo "current" ?> Item-4 "><a title="Our Clients" class="menuitem " href="<?php echo esc_url( home_url( '/our-clients' ) ); ?>"><span>Our Clients</span></a></li>
          <li class="<?php if ( is_page('contact-us')) echo "current" ?> Item-5 "><a title="Contact Us" class="menuitem " href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>"><span>Contact Us</span></a></li>
          <!--<li class="<?php // if ( is_page('survey')) echo "current" ?> Item-6 "><a title="Survey" class="menuitem " href="<?php // echo esc_url( home_url( '/survey' ) ); ?>"><span>Survey</span></a></li>-->
          <li class="<?php if ( is_page('careers')) echo "current" ?> Item-7 "><a title="Careers" class="menuitem " href="<?php echo esc_url( home_url( '/careers' ) ); ?>"><span>Careers</span></a></li>
           <li class="<?php if ( is_page('case-studies')) echo "current" ?> Item-8 "><a title="Case Studies" class="menuitem " href="<?php echo esc_url( home_url( '/case-studies' ) ); ?>"><span>Case Studies</span></a></li>
          <li><div style="display: inline-block;vertical-align:middle;padding-top:8px"><?php do_action('icl_language_selector'); ?></div></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="wrapper">
<div class="visible-xs">
  <header class="mobile_header  ">
    <div class=" phoneHeadTop clearfix">
      <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
      <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'> <img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='henson group IT consulting'></a> <span class="switchOpen fa fa-bars"> </span>
      <?php endif; ?>
    </div>
    <div class="phoneHeadBottom">
      <div class="HeaderPane_mobile ElementHide-xs"> <span class="fa fa-phone-square"></span> Phone : 
        <?php the_field('phone_number', 'option'); ?>
         | <span class="fa fa-envelope"></span> Email : <a href="http://www.hensongroup.com/contact-us" class="ApplyClass">
        <?php the_field('email_id', 'option'); ?>
        </a> |&nbsp;<a target="_blank" href="<?php the_field('facebook_link', 'option'); ?>"><img style="width: 24px; height: 24px;" src="<?php echo get_template_directory_uri() . '/images/facebook.png'?>" alt=""></a>&nbsp;
        |&nbsp;<a target="_blank" href="<?php the_field('twitter_link', 'option'); ?>"><img style="width: 24px; height: 24px;" src="<?php echo get_template_directory_uri() . '/images/twitter.png'?>"></a>&nbsp;|&nbsp;<a target="_blank" href="<?php the_field('linkdin_link', 'option'); ?>"><img style="width: 24px; height: 24px;" src="<?php echo get_template_directory_uri() . '/images/linkedin.png'?>"></a>&nbsp;|&nbsp; 
                      <a target="_blank" href="<?php the_field('instagram_link', 'option'); ?>"><em  style ="font-size: 15.7px;height:24px;vertical-align: text-bottom;padding-top: 11px;!important;"class="fa fa-instagram"></em></a></div>
    </div>
  </header>
</div>
<div class="hidden-xs"> <!-- header1 -->
  <div id="header1">
    <header>
      <div class="header_top  ">
        <div class="dnn_layout">
          <div class="head_mid clearfix">
            <div class="HeaderPane ElementHide-xs" id="dnn_HeaderPane">
              <div class="DnnModule DnnModule-DNN_HTML DnnModule-480"><a name="480"></a>
                <div class="DNNAlignright" id="dnn_ctr480_ContentPane"><!-- Start_Module_480 -->
                  <div class="DNNModuleContent ModDNNHTMLC" id="dnn_ctr480_ModuleContent">
                    <div class="Normal" id="dnn_ctr480_HtmlModule_lblContent"> <span class="fa fa-phone-square"></span> Phone : 
                      <?php the_field('phone_number', 'option'); ?>
                       | <span class="fa fa-envelope"></span> Email : <a href="http://www.hensongroup.com/contact-us" class="ApplyClass">
                      <?php the_field('email_id', 'option'); ?>
                      </a> |&nbsp;<a target="_blank" href="<?php the_field('facebook_link', 'option'); ?>"><img style="width: 24px; height: 24px;" src="<?php echo get_template_directory_uri() . '/images/facebook.png'?>" alt=""></a>&nbsp;
                      |&nbsp;<a target="_blank" href="<?php the_field('twitter_link', 'option'); ?>"><img style="width: 24px; height: 24px;" src="<?php echo get_template_directory_uri() . '/images/twitter.png'?>" alt=""></a>&nbsp;|&nbsp; <a target="_blank" href="<?php the_field('linkdin_link', 'option'); ?>"><img style="width: 24px; height: 24px;" src="<?php echo get_template_directory_uri() . '/images/linkedin.png'?>" alt=""></a>&nbsp;|&nbsp; 
                      <a target="_blank" href="<?php the_field('instagram_link', 'option'); ?>"><em  style ="font-size: 15.7px;height:24px;vertical-align: text-bottom;padding-top: 11px;!important;"class="fa fa-instagram"></em></a>
                      </div>
                  </div>
                  <!-- End_Module_480 --></div>
              </div>
            </div>
            <div class="searchBox hidden-xs" id="search">
            
              <form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
                <span id="dnn_dnnSEARCH_ClassicSearch"> <span class="searchInputContainer">
                <input type="search" class="NormalTextBox" size="20" maxlength="255" placeholder="<?php echo esc_attr_x( 'Search…', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" />
                <a class="dnnSearchBoxClearText"></a> </span>
                <button type="submit" value="<?php echo esc_attr_x( '', 'submit button' ) ?>" class="srch-submit"> <i class="fa fa-search"></i> </button>
                </span>
              </form>
            
             
            </div>
          </div>
        </div>
      </div>
      <div class="roll_menu">
        <div class="dnn_layout  LogoMenuBox">
          <div class="head_mid clearfix">
            <div class="dnn_logo">
              <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
              <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'> <img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='henson group IT consulting'></a>
              <?php endif; ?>
            </div>
            <div class="Head_right">
              <nav>
                <div class="dnn_menu">
                  <div class="IHide-sm IHide-md" id="dnngo_megamenu">
                    <div id="dnngo_megamenu1c8436d12b" class="dnngo_gomenu">
                      <ul class="primary_structure">
                        <li class="<?php if ( is_page('home')) echo "current" ?>"> <a title="Home" href="<?php echo esc_url( home_url( '/' ) ); ?>"><span>Home</span></a> </li>
                        <li class="dir <?php if (is_page( 'services' ) || '7' == $post->post_parent) echo "current" ?>"> <a title="Services" href="<?php echo esc_url( home_url( '/services' ) ); ?>" aria-haspopup="true"><span>Services</span></a>
                          <div class="dnngo_menuslide" style="left: 0px; display: none;">
                            <ul class="dnngo_slide_menu ">
                              <li> <a title="Cloud" href="<?php echo esc_url( home_url( '/cloud' ) ); ?>"><span>Cloud</span></a> </li>
                              <li> <a title="Devices" href="<?php echo esc_url( home_url( '/devices' ) ); ?>"><span>Devices</span></a> </li>
                              <li> <a title="Collaboration" href="<?php echo esc_url( home_url( '/collaboration' ) ); ?>"><span>Collaboration</span></a>                               </li>
                              <li> <a title="Security" href="<?php echo esc_url( home_url( '/security' ) ); ?>"><span>Security</span></a> </li>
                            </ul>
                          </div>
                        </li>
                        <li class="dir <?php if (is_page( 'about-us' ) || '17' == $post->post_parent) echo "current" ?>">
                        <a  title="About Us" href="<?php echo esc_url( home_url( '/about-us' ) ); ?>" aria-haspopup="true"><span>About Us</span></a>
                          <div class="dnngo_menuslide" style="left: 0px; display: none;">
                            <ul class="dnngo_slide_menu ">
                                <li> <a title="Offices" href="<?php echo esc_url( home_url( '/offices' ) ); ?>"><span>Offices</span></a> </li>
                                <!--<li class=" SunItem-3 "><a title="Team" href="<?php //echo esc_url( home_url( '/our-team' ) ); ?>"><span>Team</span></a></li>-->
                                 <!-- <li> <a title="Our " href="<?php //echo esc_url( home_url( '/our-methodology' ) ); ?>"><span>Our Methodology</span></a> </li> -->
                              <li> <a title="Blog" href="<?php echo esc_url( home_url( '/blog' ) ); ?>"><span>Blog</span></a> </li>
                              <li class=" SunItem-3 "><a title="Fun" href="<?php echo esc_url( home_url( '/fun' ) ); ?>"><span>Fun</span></a></li>
                            </ul>
                          </div>
                        </li>
                        <li class="<?php if ( is_page('our-clients')) echo "current" ?>">
                        <a title="Our Clients" href="<?php echo esc_url( home_url( '/our-clients' ) ); ?>"><span>Our Clients</span></a> </li>
                        <li class="<?php if ( is_page('contact-us')) echo "current" ?>">
                        <a title="Contact Us" href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>"><span>Contact Us</span></a> </li>
                        <!--<li class="<?php // if ( is_page('survey')) echo "current" ?>">
                        <a title="Survey" href="<?php // echo esc_url( home_url( '/survey' ) ); ?>"><span>Survey</span></a> </li>-->
                        <li class="<?php if ( is_page('careers')) echo "current" ?>">
                        <a title="Careers" href="<?php echo esc_url( home_url( '/careers' ) ); ?>"><span>Careers</span></a> </li>
                         <li class="<?php if ( is_page('case-studies')) echo "current" ?>">
                        <a title="Case Studies" href="<?php echo esc_url( home_url( '/case-studies' ) ); ?>"><span>Case Studies</span></a> </li>
                      <div style=" display: inline-block;vertical-align:middle;padding-top:8px;"><?php do_action('icl_language_selector'); ?></div>
                         </ul>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
  </div>
  <!-- header1 End -->
</div>

<!--Slider-->
<?php if ( is_page('home') || is_page('services') || is_page('cloud') || is_page('devices') || is_page('collaboration') || is_page('security') ||  '7' == $post->post_parent ) { ?>
<?php //echo do_shortcode('[unoslider id="2"]'); ?>
<?php echo do_shortcode('[cycloneslider id="home-slider"]'); ?>
<?php } ?>
<!-- /rev_bannercontainer -->
