<?php
/**
 * Template Name: Front Template
 */

 GLOBAL $webnus_options;
 $banner_youtube = $webnus_options->webnus_banner_youtube();
 $banner_form = $webnus_options->webnus_banner_form();

 $marketing_title = $webnus_options->webnus_marketing_title();
 $marketing_sub_title = $webnus_options->webnus_marketing_sub_title();
 $marketing_desc = $webnus_options->webnus_marketing_desc();

 $credit_card_title = $webnus_options->webnus_credit_card_title();
 $credit_card_subtitle = $webnus_options->webnus_credit_card_subtitle();
 $credit_card_desc = $webnus_options->webnus_credit_card_desc();
 $credit_card_img = $webnus_options->webnus_credit_card_img();

 $new_business_title = $webnus_options->webnus_new_business_title();
 $new_business_subtitle = $webnus_options->webnus_new_business_subtitle();
 $new_business_desc = $webnus_options->webnus_new_business_desc();
 $new_business_img = $webnus_options->webnus_new_business_img();

 $testimonialss_title = $webnus_options->webnus_testimonialss_title();
 $testimonialsss_desc = $webnus_options->webnus_testimonialsss_desc();
 $testimonialss_long_desc = $webnus_options->webnus_testimonialss_long_desc();

 $blog_status = $webnus_options->webnus_blog_status();
 $blog_title = $webnus_options->webnus_blog_title();
 $blog_desc = $webnus_options->webnus_blog_desc();

?>
<!-- Header Form Info: Start -->
      <div class="bg1">
       <div class="tras-color">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-8">
              <!-- Video: Start -->
              <div class="embed-responsive embed-responsive-16by9 video-box">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $banner_youtube; ?>"></iframe>
              </div>
              <figure><img class="img-responsive pull-right arrow-right hidden-xs" src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/dist/images/arrow.png" alt="arrow">
              </figure>
              <!-- Video: End -->
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">  
            <div class="form-holder">
                      <div class="form-box">          
             <?php echo do_shortcode($banner_form); ?> 
             </div></div>                   
                </div>
          </div>
        </div>
       </div> 
      </div>
<!-- Header Form Info: Start -->

    </header>
    <!-- /Header -->

    <!-- Section: Start -->
    <section id="s2" class="section-padding">
      <div class="container">

      <!-- Title: Start -->
        <div class="row">
          
          <div id="t-box" class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 text-center">
            <h2 class="section-title"><b class="color-sky"><?php echo $marketing_title; ?></b> <?php echo $marketing_sub_title; ?></h2>
            <p><?php echo $marketing_desc; ?></p>
          </div>
        </div>
        <!-- Title: End -->

        <!-- Content: Start -->
        <div class="row m-t-50">

          <?php 
          $args = array('post_type' => 'service', 'posts_per_page' => '6');
          $the_query = new WP_Query( $args );
          if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
          ?>

            <div class="col-xs-12 col-sm-4 col-md-4 t-box">
            <!-- icon-boxs: Start -->
            <div class="icon-boxs <?php echo get_post_meta($post->ID, "_Sclass", true); ?> text-center">
              <?php if (has_post_thumbnail()){ ?>
              <figure><img class="img-responsive img-center" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></figure>
              <?php } ?>

              <h3><?php the_title(); ?></h3>
              <?php echo get_post_meta($post->ID, "_Details", true); ?>

            </div>
           <!-- icon-boxs: End -->
          </div>

          <?php endwhile; else: ?>
          <div class="text-center animated cl">Nothing Here.</div>
          <?php endif; wp_reset_postdata(); ?>

        </div>
        <!-- Content: End -->
      </div>
    </section>
     <!-- Section: End -->


      <!-- Section: Start -->
    <section id="c-card" class="section-color-light section-padding">
      <div class="container">

      
        <div class="row">
          <!-- Title: Start -->
          <div class="col-xs-12 col-sm-8 col-md-6 animated cl">
            <h2 class="section-title"><b class="color-sky"><?php echo $credit_card_title; ?></b> <?php echo $credit_card_subtitle; ?></h2>
            <p><?php echo $credit_card_desc; ?></p>
          </div>
           <!-- Title: End -->
          <div class="col-xs-12 col-sm-4 col-md-4 col-md-offset-2 animated cr">
            <figure><img class="img-responsive img-center" src="<?php echo $credit_card_img; ?>" alt="icon"></figure>
          </div>
        </div> 

      </div>
    </section>
     <!-- Section: End -->

       <!-- Section: Start -->
    <section id="s3" class="section-padding">
      <div class="container">

      
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-4 animated ml">
            <figure id="target"><img class="img-responsive img-center" src="<?php echo $new_business_img; ?>" alt="icon"></figure>
          </div>
          <!-- Title: Start -->
          <div class="col-xs-12 col-sm-8 col-md-6 col-md-offset-2 animated mr">
          <div id="icon8-text">
            <h2 class="section-title"><b class="color-sky"><?php echo $new_business_title; ?></b> <?php echo $new_business_subtitle; ?></h2>
            <p><?php echo $new_business_desc; ?></p>
          </div>
          </div>
           <!-- Title: End -->        
        </div> 

      </div>
    </section>
     <!-- Section: End -->

<!-- Section: Start -->
    <section class="bg2">
      <div class="tras-color-testimonial">
       <div class="container">
        <!-- Title: Start -->
        <div class="row">
          
          <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 text-center">
            <h2 class="section-title color-white"><?php echo $testimonialss_title; ?></h2>
            <p class="color-light"><?php echo $testimonialsss_desc; ?></p>
          </div>
        </div>
        <!-- Title: End -->

        <!-- Content: Start -->
        <div class="row m-t-50">

          <?php 
          $args = array('post_type' => 'testimonial', 'posts_per_page' => '2');
          $the_query = new WP_Query( $args );
          if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
          ?>
          
          <div class="col-xs-12 col-sm-4 col-md-4 col-md-offset-1">
            <!-- Testimonials: Start -->
            <div class="text-center animated cl">
            <?php if (has_post_thumbnail()){ ?>
              <figure><img class="img-responsive img-center img-circle img-border" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></figure>
              <?php } ?>
              <div class="color-light"><?php the_content(); ?></div>
              <h4 class="color-white m-b-30"></h4>

              <?php $rateval = get_post_meta($post->ID, "_Rate", true); ?>

              <?php if ($rateval == '1'){ ?>
              <img class="img-responsive img-center" src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/dist/images/rate-1.png" alt="star">
              <?php } elseif($rateval == '2') { ?>
              <img class="img-responsive img-center" src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/dist/images/rate-2.png" alt="star">
              <?php } elseif($rateval == '3') { ?>
              <img class="img-responsive img-center" src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/dist/images/rate-3.png" alt="star">
              <?php } elseif($rateval == '4') { ?>
              <img class="img-responsive img-center" src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/dist/images/rate-4.png" alt="star">
              <?php } elseif($rateval == '5') { ?>
              <img class="img-responsive img-center" src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/dist/images/rate-5.png" alt="star">
              <?php } ?>

            </div>
           <!-- icon-boxs: Testimonials -->
          </div>

          <?php endwhile; else: ?>
          <div class="text-center animated cl">Nothing Here.</div>
          <?php endif; wp_reset_postdata(); ?>

        </div>

        <div class="row m-t-50">
          <div class="col-md-12 text-center"><h3 class="color-white"><?php echo $testimonialss_long_desc; ?></h3></div>
        </div>
       </div><!-- Content: End -->
      </div> 
    </section>
     <!-- Section: End -->
<?php if($blog_status == 1) { ?>
     <!-- Start Blog -->
     <section class="section-padding">
      <div class="container">
        <!-- Title: Start -->
          <div class="row">
            <div id="t-box" class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 text-center">
              <h2 class="section-title"><?php echo $blog_title; ?></h2>
              <p><?php echo $blog_desc; ?></p>
            </div>
          </div>
          <!-- Title: End -->
        <!-- Section Contant -->
          <div class="row">

          <?php 
          $args = array('post_type' => 'post', 'posts_per_page' => '3');
          $the_query = new WP_Query( $args );
          if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
          ?>

          <div class="col-xs-12 col-md-4">
            <?php if (has_post_thumbnail()){ ?>
              <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>">
              <?php } ?>
              <div class="blog-content">
                <div class="post-meta"><?php the_category(' '); ?><i class="fa fa-circle" aria-hidden="true"></i><a href="#"><?php the_time('d'); ?> <?php the_time('M'); ?> <?php the_time('Y'); ?></a> <i class="fa fa-circle" aria-hidden="true"></i> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>">Posted by: <?= get_the_author(); ?></a><a href="#"></a></div>
                <h2><?php the_title(); ?></h2>
                <p><?php echo substr(strip_tags($post->post_content), 0, 320);?></p>
                <a class="btn btn-green btn-well btn-learn" href="<?php the_permalink(); ?>">Read More</a>
              </div>
            </div>

          <?php endwhile; else: ?>
          <div class="col-xs-12 col-md-12">Nothing Here.</div>
          <?php endif; wp_reset_postdata(); ?>

          </div>
      </div>
    </section>
            <?php } ?>
    <!-- End Blog-->
<?php the_posts_navigation(); ?>