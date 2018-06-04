<div class="col-md-9 pgshdow">
<?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
</div>