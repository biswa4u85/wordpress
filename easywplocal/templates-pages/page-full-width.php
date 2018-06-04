<?php
/**
 * Template Name: Page - Full-width
 * Description: Displays a page title and content without displaying a sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>

<div class="row-fluid">

        <?php while (have_posts()) : the_post(); ?>
        <h1><?php the_title();?></h1>
		<?php the_content(); ?>
        <?php wp_link_pages( array('before' => '<div class="page-links">' . __('Pages:', 'bootstrapwp'), 'after' => '</div>')); ?>
        <?php edit_post_link(__('Edit', 'bootstrapwp'), '<span class="edit-link">', '</span>'); ?>
        <?php endwhile; // end of the loop. ?>
        
</div>
<?php get_footer(); ?>