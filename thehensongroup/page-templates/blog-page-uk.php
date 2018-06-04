<?php
/**
 * Template Name: Blog Page ukeng
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

              <div class="col-sm-8">
                <div class="RowSix_Grid8_Pane">
                  <div class="DnnModule DnnModule-DNNGoxBlog DnnModule-456">
					<div class="Container-18">
  						<div class="dnntitle">
    						<span class="title12"><?php echo get_the_title(); ?></span>
							<div class="line"></div>
  						 </div>
  					<div class="contentmain1">
    				  <div class="contentpane">
                          <div class="DNNModuleContent ModDNNGoxBlogC">
							<div class="validationEngineContainer form_div_456">
								<div class="news_list Skin_01_Default">


									<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
									$args = array( 'post_type' => 'post', 'posts_per_page' => 10, 'paged' => $paged );
									$wp_query = new WP_Query($args);
									while ( have_posts() ) : the_post(); ?>
                                      <div class="news_post">
										<div class="news_headline clearfix">
											<div class="news_calendar calendaricon_11">
                                            	<div class="cal_month"><?php the_time('F') ?></div>
												<div class="calendarday"><?php the_time('d') ?></div>
											</div>

										<h2 class="news_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                        </div>

										<div class="post_content clearfix">
                      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
										<?php the_excerpt(); ?>
					 					</div>
                                        <div class="post_categories">
                                        <span class="sep">|</span> Categories: <?php the_category(', ') ?>  <span class="sep">|</span>
                                        <?php the_tags(); ?>
                                        <span class="sep">|</span> Comments: <?php comments_rss_link('RSS 2.0'); ?>
                                        <span class="sep">|</span> View Count: (<?php echo_views(get_the_ID()); ?>)
                                          <span class="sep">|</span> Date: <?php the_date(); ?>
                                        </div>
                                        </div>
									<?php endwhile;

                                    twentyfourteen_paging_nav();?>
           </div>
          </div>
         </div>


         		</div>
               </div>
             </div>
           </div>
          </div>
        </div>



              <div class="col-sm-4">
                 <div class="RowSix_Grid4_Pane">
                   <div class="DnnModule DnnModule-DNNGOxBlogSearch DnnModule-458">
						<div class="Container-18">
  							<div class="dnntitle">
    							<span class="title12">Search</span>
								<div class="line"></div>
  							</div>

  						<div class="contentmain1">
   							<div class="contentpane">
                             <div class="DNNModuleContent ModDNNGOxBlogSearchC">

                             <form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
								<div class="xblog_search">
									<input type="search" class="NormalTextBox" placeholder="" value="<?php echo get_search_query() ?>" style="width:150px;" name="s" / >
                                    <input type="submit" class="CommandButton" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>">
								</div>
							 </form>
							</div>
                          </div>
  						 </div>
						</div>

						</div>

                       <!-- <div class="DnnModule DnnModule-DNNGOxBlogSubscription DnnModule-457">
							<div class="Container-18">
                              <!Container Title-->
                             <!-- <div class="dnntitle">
                                <span class="title12" id="dnn_ctr457_dnnTITLE12_titleLabel">Subscribe</span>
								<div class="line"></div>
  							  </div>
  							<div class="contentmain1">
    							<div class="contentpane">
                                 <div class="DNNModuleContent ModDNNGOxBlogSubscriptionC">
    								<div class="validationEngineContainer form_div_457">
                                    <?php //es_subbox( $namefield = "YES", $desc = "", $group = "" ); ?>

								</div>
							</div>
                           </div>
  						</div>
					</div>
				</div>-->
              </div>

             </div>
           </div>
          </div>
        </div>
    </section>

<?php
get_footer();
