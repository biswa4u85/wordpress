<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

  <section id="dnn_content">
        <div class="dnn_layout">
          <div class="content_mid clearfix">
            <div class="pane_layout">
              <div class="row">
                <div class="col-sm-8">
                  <div class="RowSix_Grid8_Pane">
                    <div class="DnnModule DnnModule-DNNGoxBlog DnnModule-456">
                      <div class="Container-18">
                        <div class="dnntitle"> <span class="title12">Careers</span>
                          <div class="line"></div>
                        </div>
                        
                        <div class="contentmain1">
              <div class="contentpane">
                          <div class="DNNModuleContent ModDNNGoxBlogC">
              <div class="validationEngineContainer form_div_456">   
                <div class="news_list Skin_01_Default">
                                
      <?php
        // Start the Loop.
        while ( have_posts() ) : the_post();

          /*
           * Include the post format-specific template for the content. If you want to
           * use this in a child theme, then include a file called called content-___.php
           * (where ___ is the post format) and that will be used instead.
           */
          //get_template_part( 'content', get_post_format() ); ?>
          
          <div class="news_post">
                    <div class="news_headline clearfix">
                      <div class="news_calendar calendaricon_11">
                                              <div class="cal_month"><?php the_time('F') ?></div>
                        

                      </div>
                                            
                    <h2 class="news_title"><?php the_title(); ?></h2>
                                        
                                        </div>
                                        
                    <div class="post_content clearfix">
                    <?php the_content();?>
                    </div>
                                        <div class="post_categories">  
                                        <span class="sep">|</span> Categories: <?php the_category(', ') ?>  <span class="sep">|</span> 
                                        <?php the_tags(); ?>
                                        <span class="sep">|</span> Comments: <?php comments_rss_link('RSS 2.0'); ?>   
                                        <span class="sep">|</span> View Count: (<?php echo_views(get_the_ID()); ?>)   
                                        </div>
                       </div>

        <?php // Previous/next post navigation.
          //twentyfourteen_post_nav(); ?>
                    <div class="attachments_box">
                <h4>Related</h4>
                  <ul class="AlbumDetail_RelationList ">
                      <?php  $next_post = get_next_post(); if (!empty( $next_post )) { ?> 
                                <li class="Album_item"><a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo $next_post->post_title; ?></a></li> <?php } ?> 
                <?php $prev_post = get_previous_post(); if (!empty( $prev_post )) { ?>
                                <li class="Album_item"><a href="<?php echo get_permalink( $prev_post->ID ); ?>"><?php echo $prev_post->post_title; ?></a></li> <?php } ?>
                  </ul>
                </div>

        <?php // If comments are open or we have at least one comment, load up the comment template.
          
          if ( comments_open() || get_comments_number() ) { ?>
            <div class="comment_form" id="comment_form"> <h4>Post a Comment</h4> <?php comments_template(); ?> </div>
        <?php }
        endwhile;
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

                    
                    
              <div class="col-sm-4">
                 <div class="RowSix_Grid4_Pane">
           
                        
            
              </div>
              
             </div>
           </div>
          </div>
        </div>
    </section>

<?php
get_footer();
