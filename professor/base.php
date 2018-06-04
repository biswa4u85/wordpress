<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
GLOBAL $webnus_page_options_meta;

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
        <div class="container marketing">
        <div class="innerbox">
        <?php if (get_page_template_slug() != 'template-front.php') { ?>
        <?php webnus_breadcrumbs() ?>
        <?php } ?>
          <?php include Wrapper\template_path(); ?>
        <?php if (Setup\display_sidebar()) : ?>
            <?php include Wrapper\sidebar_path(); ?>
        <!-- /.sidebar -->
        <?php endif; ?>
        </div></div>
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
