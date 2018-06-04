<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
GLOBAL $webnus_page_options_meta;
$meta = $webnus_page_options_meta->the_meta();
if(!empty($meta)){
  $full_page =  $meta['webnus_page_options'][0]['full_page'];
}

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>  style="background-color: <?php echo $full_page ? '#eef8e6' : '#f2faff;' ; ?>" >
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
          <?php include Wrapper\template_path(); ?>
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php //include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
