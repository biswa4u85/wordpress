<?php while (have_posts()) : the_post(); ?>
<!-- Section: Start -->
  <section>
    <div class="container">
        <?php get_template_part('templates/content', 'page'); ?>
    </div>
  </section>
  <!-- Section: End -->
<?php endwhile; ?>
