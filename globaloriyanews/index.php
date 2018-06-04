<!-- Main content -->
                    <div class="col col_8_of_12 main_content">
                        <!-- Breadcrumb -->
                        <div class="breadcrumb">
                            <ul class="clearfix">
                                <li><a href="<?= esc_url(home_url('/')); ?>">Home</a></li>
                                <li><?php get_template_part('templates/page', 'header'); ?></li>
                            </ul>
                        </div>

<h1><?php get_template_part('templates/page', 'header'); ?></h1>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <div class="article_list_view"><?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?></div>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
</div>
