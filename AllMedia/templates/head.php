<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
  <?php if (ot_get_option('all_media_favicon') == '') { ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/favicon.ico">
    <?php } else { ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo ot_get_option('all_media_favicon'); ?>">
    <?php } ?>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <?php wp_head(); ?>
</head>