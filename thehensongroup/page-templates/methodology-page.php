<?php
/**
 * Template Name: Methodology Page
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
                 <div class="ContentPane">
                 <div class="DnnModule DnnModule-DNN_HTML DnnModule-503">
                 <div class="DNNModuleContent ModDNNHTMLC method">
					<div class="Normal">
                    <div class="col-sm-12"><img src="<?php the_field('structural_picture'); ?>" alt="" class="img-responsive"></div>
                    <div class="col-sm-12 method_cntn">
                    <?php
					$post_id = get_page_by_path( 'about-us/our-methodology' );
					$content = $post_id->post_content;
					$content = apply_filters('the_content', $content);
					$content = str_replace(']]>', ']]>', $content);
					echo $content;
					?>

                    </div>
                    <br>
                    <br>
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
      
      <div class="dnn_layout">
        <div class="content_mid clearfix">
          <div class="pane_layout">
            <div class="row">
              <div class="col-sm-12">
                <div class="TopPane">
                  <div class="DnnModule DnnModule-DNN_HTML DnnModule-431">
                      <div class="DNNModuleContent ModDNNHTMLC">
                        <div class="Normal"><br><br>
                          <div class="row pt-20">
                            <div class="col-sm-5 fadeInLeft wow"> 
                            <img src="<?php the_field('why_work_with_us_picture', 'option'); ?>" class="img-responsive" alt=""> </div>
                            <div class="col-sm-7 fadeInRight wow">
                              <div class="home_head">
                                <h3>why work with us</h3>
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
      

    </section>

<?php
get_footer();
