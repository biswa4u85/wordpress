<?php
/**
 * Template Name: About Template
 */
 GLOBAL $webnus_options;
  $marketing_title = $webnus_options->webnus_marketing_title();
 $marketing_sub_title = $webnus_options->webnus_marketing_sub_title();
 $marketing_desc = $webnus_options->webnus_marketing_desc();
?>
<!-- Body area Start -->

<section>
  
  <div class="container">
    <div class="service-page">

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

   </div>
  </section>
<!-- Body area End -->

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
     

</header>
    <!-- /Header -->