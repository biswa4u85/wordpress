<?php
/**
 * Template Name: Office Page
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
					          <div class="office_cat">
                    
                    <?php echo the_content(); ?>
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
