<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
  <div class="row-fluid show-grid article-box">
      <div class="span8"><div class="conten-shep">

            <p class="lead"><?php _e(
                'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.',
                'bootstrapwp'
            ); ?></p>

           <div class="well">
               <?php get_search_form(); ?>
           </div>
</div></div>
            
    <?php get_sidebar('blog'); ?>
</div>
<?php get_footer(); ?>