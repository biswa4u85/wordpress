<?php
/**
 * Template Name: About Us Page uk
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<!-- #main-content -->
<section id="dnn_content">
	  
      <div class="Full_Screen_PaneA">
      <div class="DnnModule DnnModule-DNN_HTML DnnModule-442">
      <div class="DNNModuleContent ModDNNHTMLC">
        <div class="Normal">
        <div class="Lead">
        <div class="Lead_font">
        <h1><?php the_field('about_title'); ?></h1>
        <p><?php the_field('who_is_vdx'); ?></p>
        </div>
        <img src="<?php the_field('header_banner'); ?>" alt=""></div>
        <br>
        </div>
        </div>
        </div>
        </div>
        
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
                          <div class="contentmain1">
                            <div class="contentpane">
                            <div class="DNNModuleContent ModDNNHTMLC">
                            <div class="Normal">
                            <br>
                        <?php
						$post_id = get_page_by_path( 'about-us' );
						$content = $post_id->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]>', $content);
						echo $content;
						?>
                        <div style="text-align: center;">
                        <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="Button_blue">Contact Us</a>
                        <br>
                        </div>
                        <br>
                        <div class="gray_line">&nbsp;</div>
                        <br>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>
                  </div>
                 </div>
                </div>
              </div>
            </div>
           </div>
          </div>
      
      <div class="Full_Screen_PaneB">
        <div class="DnnModule DnnModule-DNN_HTML DnnModule-430">
            <div class="DNNModuleContent ModDNNHTMLC">
              <div class="Normal">
                <div class="backgroundImage13">
                  <div class="dnn_layout pt-40 pb-40">
                    <div class="content_mid clearfix">
                      <div class="number_Animation_2 row">
                        <div class="col-sm-6 col-md-3 wow rotateIn">
                          <div class="number_border">
                            <div class="number_box"> <span data-number="<?php the_field('engagements_delivered', 'option'); ?>" class="number animated">
                            <?php the_field('engagements_delivered', 'option'); ?></span>Engagements Delivered </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3 wow rotateIn" data-wow-delay="0.4s">
                          <div class="number_border">
                            <div class="number_box"> <span data-number="<?php the_field('on-time_completion', 'option'); ?>" class="number animated">
                            <?php the_field('on-time_completion', 'option'); ?></span>On-Time Completion </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3 wow rotateIn" data-wow-delay="0.5s">
                          <div class="number_border">
                            <div class="number_box"> <span data-number="<?php the_field('customer_satisfaction', 'option'); ?>" class="number animated">
                            <?php the_field('customer_satisfaction', 'option'); ?></span>Customer Satisfaction </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3 wow rotateIn" data-wow-delay="0.8s">
                          <div class="number_border">
                            <div class="number_box"> <span data-number="<?php the_field('cloud_environments_built', 'option'); ?>" class="number animated">
                            <?php the_field('cloud_environments_built', 'option'); ?></span>Cloud Environments Built</div>
                          </div>
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
