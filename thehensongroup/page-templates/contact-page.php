<?php
/**
 * Template Name: Contact Page
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
        <img src="<?php the_field('header_banner');?>" alt="" class="center-block"></div>
        <br>
        </div>
        </div>
        </div>
        </div>
        
        <div class="dnn_layout">
              <div class="content_mid clearfix">
                  <div class="pane_layout">
                  
                    <div class="col-sm-6">
                      <div class="RowFour_Grid6_Pane1">
                      
    					<div class="Theme_Responsive_20045_home2" style="width:100%;">
                        <?php echo do_shortcode("[si-contact-form form='1']"); ?>
					  </div>
					</div>
				  </div>
                      
                    <div class="col-sm-6">
                       <div class="RowFour_Grid6_Pane2">
                       
                       <div class="DnnModule DnnModule-DNN_HTML DnnModule-448">
                       <div class="DNNModuleContent ModDNNHTMLC">
						<div class="Normal">
                        <ul class="ContactInfo_list">
                        <li>  <span class="fa fa-map-marker">&nbsp;</span><?php the_field('address', 'option'); ?> </li>
                        <li> <span class="fa fa-phone-square"></span> <a href="tel:<?php the_field('phone_number', 'option'); ?>">
						<?php the_field('phone_number', 'option'); ?></a> </li>
                        <!--<li> <span class="fa fa-fax"></span><?php the_field('fax', 'option'); ?> </li>-->
                        <li> <span class="fa fa-envelope"></span><a href="mailto:<?php the_field('email_id', 'option'); ?>" class="ApplyClass"><?php the_field('email_id', 'option'); ?></a> </li>
                      </ul>
                     <br>
                    </div>
                    </div>
                    </div>

						<div class="DnnModule DnnModule-DNN_HTML DnnModule-447">

                        <div class="Container-H3"> 
                          <div class="dnntitle">
                          <h3><span id="dnn_ctr447_dnnTITLE_titleLabel" class="title_H3"> Contact Map</span></h3>
                          </div>
                        
                          <div class="contentmain">    
                            <div class="contentpane">
                            <div class="DNNModuleContent ModDNNHTMLC">
                            <div class="Normal">
                            <?php
							$post_id = get_page_by_path( 'contact-us' );
							$content = $post_id->post_content;
							$content = apply_filters('the_content', $content);
							$content = str_replace(']]>', ']]>', $content);
							echo $content;
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
                  </div>
                </div>
                
    </section>

<?php
get_footer();
