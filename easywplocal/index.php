<?php if (is_front_page()) { ?>

        <?php include TEMPLATEPATH . '/templates-pages/page-home.php'; exit; ?>

<?php } ?>

<?php

/**

 * Description: Default Index template to display loop of blog posts

 *

 * @package WordPress

 * @subpackage BootstrapWP

 */

get_header(); ?>

  <div class="row-fluid show-grid article-box">

      <div class="span8">

      		<div class="conten-shep">

            <iframe width="538" height="303" src="//www.youtube.com/embed/<?php echo ot_get_option('youtube_link'); ?>" frameborder="0" allowfullscreen></iframe>
			 
			 <?php if ( is_active_sidebar( 'contact-form' ) ) : ?>
				<?php dynamic_sidebar( 'contact-form' ); ?>
			<?php endif; ?>

            </div>

        </div>

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>