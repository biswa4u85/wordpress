<?php
use Roots\Sage\Wrapper;
?>
<div class="container">
      <div class="row">
            <div class="col-xs-12 col-md-8">
            <div class="main-contact">    
                  <?php while (have_posts()) : the_post(); ?>
                  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
                  <?php endwhile; ?>
                  <?php the_posts_navigation(); ?>
                  </div>
                  </div>
            <div class="col-md-4">
            <div class="main-contact-right">
                  <?php include Wrapper\sidebar_path(); ?>
                  </div></div>
      </div>
</div>