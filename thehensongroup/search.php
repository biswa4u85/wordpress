<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

			<?php if ( have_posts() ) : ?>
            
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
                            <span class="title12"><?php printf( __( 'Search Results for: %s', 'twentyfourteen' ), get_search_query() ); ?></span>
                            <div class="line"></div>
                          </div>
				<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );

					endwhile;
					// Previous/next post navigation.
					twentyfourteen_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>

				</div>
                  </div>
                 </div>
                </div>
              </div>
            </div>
           </div>
          </div>
      </section>
      
<?php
get_footer();
