<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Oswald:300,400,700" rel="stylesheet"> 

    <!-- font-aweasome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <?php
    GLOBAL $webnus_options;
    $favicon = $webnus_options->webnus_favicon();
    if($favicon){?>
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon; ?>">
    <?php } else { ?>
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/favicon.ico">
    <?php } ?> 

    <?php // Meta Description & Meta Keywords
      $seo_meta = '';		
      global $page_seo_meta;
      $seo_meta = !empty($page_seo_meta)?$page_seo_meta->the_meta():null;
    ?>	
	<meta name="description" content="<?php if( !empty($seo_meta) && !empty( $seo_meta['webnus_seo_options'][0]['seo_desc'] ) ){echo($seo_meta['webnus_seo_options'][0]['seo_desc']);}else{if (is_single()){single_post_title('', true);}else{bloginfo('name'); echo " - "; bloginfo('description');}}?>" />
	<meta name="keywords" content="<?php if( !empty($seo_meta) && !empty($seo_meta['webnus_seo_options'][0]['seo_keyword']) ){echo($seo_meta['webnus_seo_options'][0]['seo_keyword']);}?>" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   <?php wp_head(); ?>
</head>