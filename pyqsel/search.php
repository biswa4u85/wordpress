<?php
use Roots\Sage\Wrapper;
?>
<section>
    <div class="container">
<div class="row">
      <div class="col-xs-12 col-md-8">
        <?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>
<?php the_posts_navigation(); ?>
      </div>
<div class="col-md-4">
<?php include Wrapper\sidebar_path(); ?>
</div>
</div>
<section>