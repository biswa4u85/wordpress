<?php

/**

 * Template Name: Page - Home  Template

 * Description: Displays blog posts with pagination and featured image.

 *

 * @package WordPress

 * @subpackage BootstrapWP

 */

get_header(); ?>

  <div class="row-fluid show-grid article-box">

      <div class="span8">

      		<div class="conten-shep">

            <iframe width="538" height="303" src="//www.youtube.com/embed/<?php echo ot_get_option('youtube_link'); ?>" frameborder="0" allowfullscreen></iframe>
            <div style="background:#fff; padding:20px 10px"><iframe frameborder="0" scrolling="no" style="overflow:scroll; width: 100%; height:<?php echo ot_get_option('embedded_form_height'); ?>px;" src="<?php echo ot_get_option('embedded_form_link'); ?>"></iframe></div>

            </div>

        </div>

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>