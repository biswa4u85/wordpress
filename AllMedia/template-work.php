<?php
/*
Template Name: Works Template
*/
?>
  <?php while (have_posts()) : the_post(); ?>
  	<?php get_template_part('templates/content', 'work'); ?>
  <?php endwhile; ?>