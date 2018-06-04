<?php if (is_front_page()) { ?>

        <?php include TEMPLATEPATH . '/templates-pages/page-home.php'; exit; ?>

<?php } ?>
<?php
/**
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>

  <div class="row-fluid show-grid article-box">
      <div class="span8">
      <div class="conten-shep">
        <?php while (have_posts()) : the_post(); ?>
        <h1><?php the_title();?></h1>
		<?php the_content(); ?>
        <?php wp_link_pages( array('before' => '<div class="page-links">' . __('Pages:', 'bootstrapwp'), 'after' => '</div>')); ?>
        <?php edit_post_link(__('Edit', 'bootstrapwp'), '<span class="edit-link">', '</span>'); ?>
        <?php endwhile; // end of the loop. ?>

</div>
    </div><!-- /.span8 -->

    <?php get_sidebar(); ?>
</div> 
    

<?php get_footer(); ?>