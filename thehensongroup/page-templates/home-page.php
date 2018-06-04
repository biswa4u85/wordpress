<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<!-- #main-content -->
<section id="dnn_content">

	  
      
      <div class="Full_Screen_PaneA">
        <div class="DnnModule DnnModule-DNN_HTML DnnModule-424">
          <div id="dnn_ctr424_ContentPane">
            <div class="DNNModuleContent ModDNNHTMLC">
              <div class="Normal">
                <div class="backgroundImage10 top_line bottom_line animation">
                  <div class="dnn_layout pt-40 pb-40">
                    <div class="content_mid clearfix">
                      <div class="functionList row">
                        <div class="functionBox col-md-3 col-sm-6 wow fadeInUp">
                          <div class="functionIcon"><a href="<?php the_field('service_one_detail_link', 'option'); ?>"> <em class="fa fa-cloud color_1_bg "></em></a> </div>
                          <h2 class="functiontitle"><?php the_field('service_one', 'option'); ?></h2>
                          <div class="functionMain">
                            <p><span style="color: #595959; font-size: 13px;"><?php the_field('cloud_summery', 'option'); ?></span></p>
                            <a href="<?php the_field('service_one_detail_link', 'option'); ?>">&gt; Learn More</a> </div>
                        </div>
                        <div class="functionBox col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                          <div class="functionIcon"><a href="<?php the_field('service_two_detail_link', 'option'); ?>"> <em class="fa fa-desktop color_2_bg"></em></a> </div>
                          <h2 class="functiontitle"><?php the_field('service_two', 'option'); ?></h2>
                          <div class="functionMain">
                            <p><?php the_field('modernized_workspace_summary', 'option'); ?></p>
                            <a href="<?php the_field('service_two_detail_link', 'option'); ?>">&gt; Learn More</a> </div>
                        </div>
                        <div class="functionBox col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s"> 
                          <div class="functionIcon"><a href="<?php the_field('service_three_detail_link', 'option'); ?>"> <em class="fa fa-users color_3_bg"></em></a> </div>
                          <h2 class="functiontitle"><?php the_field('service_three', 'option'); ?></h2>
                          <div class="functionMain">
                            <p><?php the_field('datacenter_transformation_summary', 'option'); ?></p>
                            <a href="<?php the_field('service_three_detail_link', 'option'); ?>">&gt; Learn More</a> </div>
                        </div>
                        <div class="functionBox col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s"> 
                          <div class="functionIcon"><a href="<?php the_field('service_four_detail_link', 'option'); ?>"> <em class="fa fa-lock color_4_bg"></em></a> </div>
                          <h2 class="functiontitle"><?php the_field('service_four', 'option'); ?></h2>
                          <div class="functionMain">
                            <p><?php the_field('managed_services_summary', 'option'); ?></p>
                            <a href="<?php the_field('service_four_detail_link', 'option'); ?>">&gt; Learn More</a> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End_Module_424 --></div>
        </div>
      </div>
      
      <div class="dnn_layout">
        <div class="content_mid clearfix">
          <div class="pane_layout">
            <div class="row">
              <div class="col-sm-12">
                <div class="TopPane">
                  <div class="DnnModule DnnModule-DNN_HTML DnnModule-431">
                      <div class="DNNModuleContent ModDNNHTMLC">
                        <div class="Normal">
                          <div class="row pt-20">
                            <div class="col-sm-5 fadeInLeft wow"> 
                            <img src="<?php the_field('why_work_with_us_picture', 'option'); ?>" class="img-responsive" alt="henson group IT consulting"> </div>
                            <div class="col-sm-7 fadeInRight wow">
                              <div class="home_head">
                                <h3>why work with The Henson Group IT Consulting</h3>
                                <div class="line"></div>
                              </div>
                              <div class="home_text1">
                                <?php the_field('why_work_with_us_:-_summary', 'option'); ?>
                                <div><a target="_blank" href="<?php the_field('why_work_learn_more_link', 'option'); ?>" class="Button_special">Learn More</a></div>
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
                            <div class="number_box"> 
                            <span data-number="<?php the_field('engagements_delivered', 'option'); ?>" class="number animated"><?php the_field('engagements_delivered', 'option'); ?></span>Engagements Delivered</div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3 wow rotateIn" data-wow-delay="0.4s">
                          <div class="number_border">
                            <div class="number_box"> 
                            <span data-number="<?php the_field('on-time_completion', 'option'); ?>" class="number animated"><?php the_field('on-time_completion', 'option'); ?></span>On-Time Completion </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3 wow rotateIn" data-wow-delay="0.5s">
                          <div class="number_border">
                            <div class="number_box"> 
                            <span data-number="<?php the_field('customer_satisfaction', 'option'); ?>" class="number animated">
							<?php the_field('customer_satisfaction', 'option'); ?></span>Customer Satisfaction </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3 wow rotateIn" data-wow-delay="0.8s">
                          <div class="number_border">
                            <div class="number_box"> 
                            <span data-number="<?php the_field('cloud_environments_built', 'option'); ?>" class="number animated"><?php the_field('cloud_environments_built', 'option'); ?></span>Cloud Environments Built</div>
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
      
      <div class="Full_Screen_PaneE">
        <div class="DnnModule DnnModule-DNN_HTML DnnModule-428">
            <div class="DNNModuleContent ModDNNHTMLC">
              <div class="Normal">
                <div class="backgroundImage12">
                  <div class="dnn_layout pt-40 pb-40 zoomIn wow">
                    <div class="content_mid clearfix">
                      <div class="home_head_center">
                        <h3>testimonials</h3>
                        <div class="line"></div>
                      </div>
					<ul data-position="fade" data-height-auto="true" data-autoplay="5000" class="Testimonials_tab Testimonials_6" style="height: 282px;">
                     <?php

						// check if the repeater field has rows of data
						if( have_rows('testimonial') ):
						
							// loop through the rows of data
							while ( have_rows('testimonial') ) : the_row(); 
						
								// display a sub field value ?>
                        <li style="z-index: 10; display: list-item;" class="active">
                          <blockquote>
                            <p><?php the_sub_field('message'); ?></p>
                            <small><img src="<?php the_sub_field('picture'); ?>" alt="henson group IT consulting">
                            <span><?php the_sub_field('role'); ?></span></small> </blockquote>
                        </li>
                    <?php	endwhile;
						
						else :
						
							echo "There are no testimonials present right now";
						
						endif;
						
					?>
                      </ul>
						
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      
      <div class="Full_Screen_PaneH">
        <div class="DnnModule DnnModule-DNN_HTML DnnModule-429">
            <div class="DNNModuleContent ModDNNHTMLC">
              <div class="Normal">
                <div class="backgroundImage10 top_line">
                  <div class="dnn_layout pt-40 pb-40">
                    <div class="content_mid clearfix">
                    <div class="home_head_center">
                        <h3>Our Partners</h3>
                        <div class="line"></div>
                      </div>
                      <div id="one_slide" class="owl-carousel wow zoomIn carousel carousel_6" data-wow-delay="0.3s"> 
                      <?php

						// check if the repeater field has rows of data
						if( have_rows('client_logo') ):
						
							// loop through the rows of data
							while ( have_rows('client_logo') ) : the_row(); 
						
								// display a sub field value ?>
                        <div class="item"><img src="<?php the_sub_field('picture'); ?>" alt="henson group IT consulting"></div>
                    <?php	endwhile;
						
						else :
						
							echo "There are no client logo present right now";
						
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
