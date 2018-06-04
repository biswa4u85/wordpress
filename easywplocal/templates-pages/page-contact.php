<?php

/**

 * Template Name: Page - Forum  Template

 * Description: Displays blog posts with pagination and featured image.

 *

 * @package WordPress

 * @subpackage BootstrapWP

 */

get_header(); ?>



  <div class="row-fluid show-grid article-box">

      <div class="span8"><div class="conten-shep">

     	<?php while (have_posts()) : the_post(); ?>

        <h1><?php the_title();?></h1>

		<?php the_content(); ?>

        <?php wp_link_pages( array('before' => '<div class="page-links">' . __('Pages:', 'bootstrapwp'), 'after' => '</div>')); ?>

        <?php edit_post_link(__('Edit', 'bootstrapwp'), '<span class="edit-link">', '</span>'); ?>

        <?php endwhile; // end of the loop. ?>

       <?php if ( is_active_sidebar( 'contact-form' ) ) : ?>
				<?php dynamic_sidebar( 'contact-form' ); ?>
			<?php endif; ?>

     </div></div>



    <?php get_sidebar(); ?>

</div>



    <?php get_footer(); ?>