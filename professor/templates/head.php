<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="_">

    <?php
    GLOBAL $webnus_options;
    $favicon = $webnus_options->webnus_favicon();
    if($favicon){?>
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon; ?>">
    <?php } else { ?>
      <!-- <link rel="shortcut icon" type="image/x-icon" href="<?php //echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/favicon.ico"> -->
    <?php } ?> 

    <?php // Meta Description & Meta Keywords
      $seo_meta = '';		
      global $page_seo_meta;
      $seo_meta = !empty($page_seo_meta)?$page_seo_meta->the_meta():null;
    ?>	
    <meta name="description" content="<?php if( !empty($seo_meta) && !empty( $seo_meta['webnus_seo_options'][0]['seo_desc'] ) ){echo($seo_meta['webnus_seo_options'][0]['seo_desc']);}else{if (is_single()){single_post_title('', true);}else{bloginfo('name'); echo " - "; bloginfo('description');}}?>" />
    <meta name="keywords" content="<?php if( !empty($seo_meta) && !empty($seo_meta['webnus_seo_options'][0]['seo_keyword']) ){echo($seo_meta['webnus_seo_options'][0]['seo_keyword']);}?>" />
      
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700" rel="stylesheet">

   <?php wp_head(); ?>
</head>