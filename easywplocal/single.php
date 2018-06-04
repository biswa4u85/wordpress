<?php

/**

 * Default Post Template

 * Description: Post template with a content container and right sidebar.

 *

 * @package WordPress

 * @subpackage BootstrapWP

 */

get_header(); ?>



  <div class="row-fluid show-grid article-box">

      <div class="span12">

      	<?php while ( have_posts() ) : the_post(); ?>



					<?php get_template_part( 'content-single', get_post_format() ); ?>

					<?php //comments_template( '', true ); ?>



				<?php endwhile; // end of the loop. ?>

</div>

</div>   

    

<?php get_footer(); ?>