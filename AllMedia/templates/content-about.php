<section class="section-padding">
            <div class="container">
            <?php the_content(); ?>
            </div>
        </section>


        <section class="section-padding three-boxs sec-pat-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="service-box text-center">
                            <span class="pe-7s-sun"></span>
                            <?php echo ot_get_option('all_media_about_mission'); ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="service-box text-center">
                            <span class="pe-7s-config"></span>
                            <?php echo ot_get_option('all_media_about_vision'); ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="service-box text-center">
                            <span class="pe-7s-help2"></span>
                            <?php echo ot_get_option('all_media_about_support'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="section-color section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="sec-header sec-header2">
                            <h2><?php echo ot_get_option('all_media_clients_title'); ?></h2>
                            <small><?php echo ot_get_option('all_media_clients_contain'); ?></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="owl-testimonial">
                            <?php 
                            $args = array('post_type' =>  array('post' => 'testimonial'));
                            $the_query = new WP_Query( $args );
                            if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                            ?>
                            <div class="owl-testimonial-thumb text-center">
                                <div class="cl-say">
                                    <?php if (has_post_thumbnail()){ ?> 
                                    <img class="img-responsive img-border img-circle" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                    <?php } else { ?>
                                    <img class="img-responsive img-border img-circle" src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/no-img.jpg" width="100" alt="<?php the_title(); ?>">
                                    <?php } ?>
                                    <h4><?php the_title(); ?></h4>
                                    <?php $rateval = get_post_meta($post->ID, "_Rate", true); ?>

                                    <?php if ($rateval == '1'){ ?>
                                    <img class="img-responsive" src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/rate-1.png" alt="rating">
                                    <?php } elseif($rateval == '2') { ?>
                                    <img class="img-responsive" src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/rate-2.png" alt="rating">
                                    <?php } elseif($rateval == '3') { ?>
                                    <img class="img-responsive" src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/rate-3.png" alt="rating">
                                    <?php } elseif($rateval == '4') { ?>
                                    <img class="img-responsive" src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/rate-4.png" alt="rating">
                                    <?php } elseif($rateval == '5') { ?>
                                    <img class="img-responsive" src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/rate-5.png" alt="rating">
                                    <?php } ?>

                                    <?php the_content(); ?>
                                </div>
                            </div>
                            <?php endwhile; else: ?>
                            <p>Nothing Here.</p>
                            <?php endif; wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>