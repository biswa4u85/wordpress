<?php
/**
 * Template Name: Service Child Page uk
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
                <div class="TopPane">
                  <div class="row">
                  
                 
                    <div class="col-md-3 col-sm-6">
                    <div class="flip_box flip_box_2">
                    <div class="rotate">
                    <div class="front"> <span class="fa <?php the_field('section_one_icon_class'); ?>  } ?>"></span>
                    <h3><?php the_field('section_one');  ?></h3>
                    <br>
                    <p><?php if ( is_page('devices') ) { the_field('mobile_device_management_subhead'); }
					if ( is_page('collaboration') ) { the_field('systems_management_subhead'); }
					if ( is_page('security') ) { the_field('citrix_management_subheading'); }
                    if ( is_page('cloud') ) { the_field('section_one_subheading'); } ?>
                    <br>
                    <br>
                    <br>
                    <span style="color: #1f497d;">Learn More.....</span></p>
                    </div>
                    <div class="back">
                    <h3><?php the_field('section_one'); ?></h3>
                    
                    <p><?php if ( is_page('devices') ) { the_field('mobile_device_management_brief'); }
					if ( is_page('collaboration') ) { the_field('systems_management_brief'); }
					if ( is_page('security') ) { the_field('citrix_management_brief'); }
					if ( is_page('cloud') ) { the_field('section_one_brief'); } ?>
                    <br>
                    <br>
                    <a href="<?php the_field('section_one_link'); ?>"><span style="color: #ff9200;">Contact Us to Learn More..</span></a></p>
                    </div>
                    </div>
                    </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                    <div class="flip_box flip_right flip_box_2">
                    <div class="rotate">
                    <div class="front"> <span class="fa <?php the_field('section_two_icon_class'); ?>  "></span>
                    <h3><?php the_field('section_two'); ?></h3>
                    <br>
                    <p><?php if ( is_page('devices') ) { the_field('windows_10_strategy_subhead'); }
					if ( is_page('collaboration') ) { the_field('server_2003_end_of_life_subhead'); }
					if ( is_page('security') ) { the_field('azure_site_recovery_subheading'); }
					if ( is_page('cloud') ) { the_field('section_two_subheading'); } ?>
                    <br>
                    <br>
                    <br>
                    <span style="color: #1f497d;">Learn More.....</span></p>
                    </div>
                    <div class="back">
                    <h3><?php the_field('section_two'); ?></h3>
                    <p><?php if ( is_page('devices') ) { the_field('windows_10_strategy_brief'); }
					if ( is_page('collaboration') ) { the_field('server_2003_end_of_life_brief'); }
					if ( is_page('security') ) { the_field('azure_site_recovery_brief'); } 
					if ( is_page('cloud') ) { the_field('section_two_brief'); }?></p>
                    <p><a href="<?php the_field('section_two_link'); ?>">
                    <span style="color: #ff9200; text-decoration: underline;">Contact Us to Learn More..</span></a>
                    </p>
                    </div>
                    </div>
                    </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                    <div class="flip_box flip_top flip_box_2">
                    <div class="rotate">
                    <div class="front"> <span class="fa <?php the_field('section_three_icon_class'); ?>  "> </span>
                    <h3><?php the_field('section_three'); ?></h3>
                    <br>
                    <p><?php if ( is_page('devices') ) { the_field('vdi_subheading'); }
					if ( is_page('collaboration') ) { the_field('sql_server_subheading'); }
					if ( is_page('security') ) { the_field('data_protection_subheading'); }
					if ( is_page('cloud') ) { the_field('section_three_subheading'); } ?>
                    <br>
                    <br>
                    <br>
                    <span style="color: #1f497d;">Learn More.....</span></p>
                    </div>
                    <div class="back">
                    <h3><?php the_field('section_three'); ?></h3> 
                    <p><?php if ( is_page('devices') ) { the_field('vdi_brief'); }
					if ( is_page('collaboration') ) { the_field('sql_server_brief'); }
					if ( is_page('security') ) { the_field('data_protection_brief'); }
					if ( is_page('cloud') ) { the_field('section_three_brief'); } ?><br>
                    <br>
                    <a href="<?php the_field('section_three_link'); ?>">
                    <span style="color: #ff9200; text-decoration: underline;">Contact Us to Learn More..</span></a></p>
                    </div>
                    </div>
                    </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="flip_box flip_bottom flip_box_2">
                        <div class="rotate">
                        <div class="front"> <span class="fa <?php the_field('section_four_icon_class'); ?> "></span>
                        <h3><?php the_field('section_four');?></h3>
                        <br>
                        <br>
                        <p><?php if ( is_page('devices') ) { the_field('office_365_subhead'); }
					if ( is_page('collaboration') ) { the_field('datacenter_automation_subhead'); }
					if ( is_page('security') ) { the_field('office_365_managed_subheading'); }
					if ( is_page('cloud') ) { the_field('section_four_subheading'); } ?>
                        <br>
                        <br>
                        <br>
                        <span style="color: #1f497d;">Learn More.....</span></p>
                        </div>
                        <div class="back">
                        <h3><?php the_field('section_four');?></h3>
                        <p><?php if ( is_page('devices') ) { the_field('office_365_brief'); }
					if ( is_page('collaboration') ) { the_field('datacenter_automation_brief'); }
					if ( is_page('security') ) { the_field('office_365_managed_brief'); }
					if ( is_page('cloud') ) { the_field('section_four_brief'); } ?>
                    	<br>
                        <br>
                        <a href="<?php the_field('section_four_link'); ?>">
                        <span style="color: #ff9200; text-decoration: underline;">Contact Us to Learn More..</span></a></p>
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
                          <h3><span class="title_H3" id="dnn_ctr435_dnnTITLE_titleLabel">  
						  <?php if ( is_page('cloud') || is_page('security') ){  echo "What Others Say About Us?";  }
 							if ( is_page('collaboration') || is_page('devices') ){ echo "What Others Say About Us?"; } ?></span></h3>
                          </div>
                          <div class="contentmain">
                            <div class="About_info">
                            <div class="Img_box">
                            <span class="fa fa-star"></span>
                            </div>
                            <?php if ( is_page('cloud') || is_page('security') ){ the_field('project_highlights', 'option'); }
							 if ( is_page('collaboration') || is_page('devices') ){ the_field('what_others_say_about_us', 'option'); } ?>
                            <div class="About_msg">
                            <?php if ( is_page('cloud')) { ?>
                            <?php }?>
                            <?php if ( is_page('collaboration') || is_page('devices') ) { ?>
                                                        <?php }?>
                            <?php if ( is_page('security')) { ?>
                            <?php }?>
                            </div>
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
