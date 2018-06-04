<?php
/**
 * Template Name: Client Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<!-- #main-content -->
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
						<?php
					$post_id = get_page_by_path( 'our-clients' );
					$content = $post_id->post_content;
					$content = apply_filters('the_content', $content);
					$content = str_replace(']]>', ']]>', $content);
					echo $content;
					?>
                    <div class="client_cat">
                    <?php

						// check if the repeater field has rows of data
						if( have_rows('client_category') ):
						
							// loop through the rows of data
							while ( have_rows('client_category') ) : the_row(); 
						
								// display a sub field value ?>
                        	<h3><?php the_sub_field('category_title'); ?></h3>
                        	<ul> 
                               <?php
								$image = get_sub_field('logos');
								foreach($image as $imgdata){
									echo '<li><img src="'.$imgdata['picture'].'" /></li>';
								}
								?>
                      		</ul>
						
                    <?php endwhile;
						
						else :
						
							echo "There is no client category present right now";
						
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
          </div>
      </section>

<?php
get_footer();
