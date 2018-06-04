<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>

<?php
// Start the Loop.
while ( have_posts() ) : the_post(); ?>


		<section id="dnn_content">
        	<div class="dnn_layout">
              <div class="content_mid clearfix">
                 <div class="pane_layout">
                  <div class="row">
                      <div class="col-sm-12">
                      <div class="TopPane">
                      <div class="DnnModule DnnModule-DNN_HTML DnnModule-443">
                        <div class="Container-18"> 
                          <div class="dnntitle">
                            <span class="title12"><?php echo get_the_title(); ?></span>
                            <div class="line"></div>
                          </div>
                        <?php if ( is_page('survey')) { ?>
                        <div class="survey">
                        <?php echo do_shortcode( get_the_content() ); ?>
                        </div>
						<?php } else echo $content = get_the_content(); ?>
                    </div>
                  </div>
                 </div>
                </div>
              </div>
            </div>
           </div>
          </div>
      </section>
      
	  <?php endwhile; ?>

<?php
get_footer();
