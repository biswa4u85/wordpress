<?php
/**
 * Template Name: Service Page
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
                  
                    <div class="col-sm-3">
                     <div class="RownTen_Grid3_Pane1">
                      <div class="boxes_style_3">
                        <div class="boxes">
                        <h3 class="Boxes_title"><?php the_field('service_one', 'option'); ?></h3>
                        <p><?php the_field('cloud_summery', 'option'); ?></p>
                        <div class="but">
                        <a href="<?php the_field('service_one_detail_link', 'option'); ?>" class="Button_blue">View More</a>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div> 

                    <div class="col-sm-3">
                    <div class="RownTen_Grid3_Pane1">
                      <div class="boxes_style_3">
                        <div class="boxes">
                        <h3 class="Boxes_title"><?php the_field('service_two', 'option'); ?></h3>
                        <p><?php the_field('modernized_workspace_summary', 'option'); ?></p>
                        <br>
                        <div class="but">
                        <a href="<?php the_field('service_two_detail_link', 'option'); ?>" class="Button_blue">View More</a>
                        </div>
                        </div>
                      </div>
                    </div>
                    </div>
                    
                    <div class="col-sm-3">
                    <div class="RownTen_Grid3_Pane1">
                      <div class="boxes_style_3">
                        <div class="boxes">
                        <h3 class="Boxes_title"><?php the_field('service_three', 'option'); ?></h3>
                        <p><?php the_field('datacenter_transformation_summary', 'option'); ?></p>
                        <div class="but">
                        <a href="<?php the_field('service_three_detail_link', 'option'); ?>" class="Button_blue">View More</a>
                        </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    
                    <div class="col-sm-3">
                    <div class="RownTen_Grid3_Pane1">
                      <div class="boxes_style_3">
                        <div class="boxes">
                        <h3 class="Boxes_title"><?php the_field('service_four', 'option'); ?></h3>
                        <p><?php the_field('managed_services_summary', 'option'); ?></p>
                        <div class="but">
                        <br>
                        <a href="<?php the_field('service_four_detail_link', 'option'); ?>" class="Button_blue">View More</a>
                        </div>
                        </div>
                        </div>
                      </div>
                    </div>
                    
                    </div>
                  </div>
               </div>
            </div>
            

             <div class="dnn_layout">
               <div class="content_mid clearfix">
                 <div class="pane_layout">
                   <div class="row">
                   
                      <div class="col-sm-6">
                      <div class="RowSeventeen_Grid6_Pane2">
                        <div class="Container-H3"> 
                          <div class="dnntitle">
                          <h3><span class="title_H3" id="dnn_ctr435_dnnTITLE_titleLabel"> What Others Say About Us?</span></h3>
                          </div>
                          <div class="contentmain">
                            <div class="About_info">
                            <div class="Img_box">
                            <span class="fa fa-star"></span>
                            </div>
                            <?php the_field('what_others_say_about_us', 'option'); ?>
                            

                            </div>
                            <br>
                            </div>
                          </div>
                        </div>
                       </div>

                      <div class="col-sm-6">
                      <div class="RowSeventeen_Grid6_Pane2">
                        <div class="Container-H3"> 
                          <div class="dnntitle">
                          <h3><span class="title_H3"> Why Choose Us?</span></h3>
                          </div>
                          <div class="contentmain"> 
                            <ul class="Choose_List">
                            <?php the_field('why_choose_us', 'option'); ?>
                            </ul>
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
