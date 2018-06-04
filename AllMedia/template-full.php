<?php
/*
Template Name: Full Template
*/
?>
  <?php while (have_posts()) : the_post(); ?>
  	<?php get_template_part('templates/content', 'full'); ?>
  <?php endwhile; ?>