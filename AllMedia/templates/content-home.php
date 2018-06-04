<section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-7 col-md-8">
                        <h2 class="section-title"><?php echo ot_get_option('all_media_key_title'); ?></h2>
                        <p class="sub-title"><?php echo ot_get_option('all_media_key_contain'); ?></p>

                        <div class="fe-con clearfix">
                            <?php 
                            $args = array('post_type' =>  array('post' => 'feature'));
                            $the_query = new WP_Query( $args );
                            if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                            ?>

                            <div class="col-xs-12 col-md-6">
                            <div class="media">
                                <h4 class="media-heading"><?php the_title(); ?></h4>
                                <div class="media-left">
                                    <span class="pe-7s-check"></span>
                                </div>
                                <div class="media-body media-body-con">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            </div>
                            <?php endwhile; else: ?>
                            <p>Nothing Here.</p>
                            <?php endif; wp_reset_postdata(); ?>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-4">
                        <?php if (ot_get_option('all_media_key_banner')) { ?>
                        <img class="img-responsive" src="<?php echo ot_get_option('all_media_key_banner'); ?>" alt="girl">
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-bg section-padding call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <?php echo ot_get_option('all_media_key_customer_service'); ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="sec-header text-center">
                        <h2 class="section-title"><?php echo ot_get_option('all_media_services_title'); ?></h2>
                        <?php echo ot_get_option('all_media_services_contain'); ?>
                    </div>
                </div>
                <div class="row">

                    <?php 
                    $args = array('post_type' =>  array('post' => 'service'));
                    $the_query = new WP_Query( $args );
                    if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                    ?>

                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="service-box text-center">
                            <span class="<?php echo get_post_meta($post->ID, "_Icon", true); ?>"></span>
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo get_post_meta($post->ID, "_Details", true); ?></p>
                        </div>
                    </div>

                    <?php endwhile; else: ?>
                    <p>Nothing Here.</p>
                    <?php endif; wp_reset_postdata(); ?>
                    
                </div>
                <div class="ser-off">
                    <div class="row">
                        <?php echo ot_get_option('all_media_services_contain_bottom'); ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding sec-pat-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="sec-header sec-header2">
                            <h2><?php echo ot_get_option('all_media_work_title'); ?></h2>
                            <small><?php echo ot_get_option('all_media_work_contain'); ?></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="project-filter text-uppercase">
                            <ul class="list-inline text-center">
                            <li class="active" data-filter="*">All</li>
                            <?php
                            $terms = get_terms( 'types' );
                            $count = count( $terms );
                            if ( $count > 0 ) {
                                foreach ( $terms as $term ) {
                                    echo '<li data-filter=".' . $term->slug . '">' . $term->name . '</li>';
                                }
                            }

                            ?>
                            </ul>
                        </div>
                        <div class="project-items margin-top30">
                            <ul class="gallery clearfix">

                                <?php 
                                $args = array('post_type' =>  array('post' => 'work'));
                                $the_query = new WP_Query( $args );
                                if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                                ?>
                                
                                <?php if (has_post_thumbnail()){ ?>
                                <li class="project-item <?php foreach(get_the_terms($post->ID, 'types') as $term)
                                echo $term->slug . ' '; ?>"> <a href="<?php the_post_thumbnail_url(); ?>" rel="prettyPhoto[gallery1]" title="<?php the_title(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive"> </a></li>
                                <?php } ?>

                                <?php endwhile; else: ?>
                                <p>Nothing Here.</p>
                                <?php endif; wp_reset_postdata(); ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="sec-header text-center">
                        <h2 class="section-title"><?php echo ot_get_option('all_media_team_title'); ?></h2>
                        <small><?php echo ot_get_option('all_media_team_contain'); ?></small>
                    </div>
                </div>
                <div id="owl-cx">
                    
    <?php 
    $args = array('post_type' =>  array('post' => 'team'));
    $the_query = new WP_Query( $args );
    if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
    ?>

    <div class="owl-team-member">
        <div class="team-box">
            <?php if (has_post_thumbnail()){ ?> 
            <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            <?php } else { ?>
            <img class="img-responsive" src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/no-img.jpg" alt="<?php the_title(); ?>">
            <?php } ?>
        </div>
        <div class="team-text text-center">
            <p class="lead"><?php the_title(); ?></p>
            <?php if (get_post_meta($post->ID, "_Position", true)){ ?>
            <p class="desig"><?php echo get_post_meta($post->ID, "_Position", true); ?></p>
            <?php } ?>
            <div class="team-separator"></div>
            <p class="lead">
                <?php if (get_post_meta($post->ID, "_Facebook", true)){ ?>
                <a href="<?php echo get_post_meta($post->ID, "_Facebook", true); ?>" class="fa fa-facebook-square"></a>
                <?php } ?>
                <?php if (get_post_meta($post->ID, "_Linkedin", true)){ ?>
                <a href="<?php echo get_post_meta($post->ID, "_Linkedin", true); ?>" class="fa fa-linkedin-square"></a>
                <?php } ?>
                <?php if (get_post_meta($post->ID, "_Pinterest", true)){ ?>
                <a href="<?php echo get_post_meta($post->ID, "_Pinterest", true); ?>" class="fa fa-pinterest-square"></a>
                <?php } ?>
            </p>
        </div>
    </div>

    <?php endwhile; else: ?>
    <p>Nothing Here.</p>
    <?php endif; wp_reset_postdata(); ?>

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

        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="sec-header text-center">
                        <h2 class="section-title"><?php echo ot_get_option('all_media_faq_title'); ?></h2>
                        <small><?php echo ot_get_option('all_media_faq_contain'); ?></small>
                    </div>
                </div>
                <div class="row">
                    <?php 
                    $args = array('post_type' =>  array('post' => 'faq'));
                    $the_query = new WP_Query( $args );
                    if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                    ?>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="fre-box">
                            <h4><?php the_title(); ?></h4>
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <?php endwhile; else: ?>
                    <p>Nothing Here.</p>
                    <?php endif; wp_reset_postdata(); ?>
                </div>
            </div>
        </section>