
        <section class="sec-bg2">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <?php echo ot_get_option('all_media_key_bottom_part'); ?>
                    </div>
                </div>
            </div>
        </section>
         <footer class="footer-con">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                    
                        <h1 class="large-title">
                            <?php if (ot_get_option('all_media_logo_url') == '') { ?>
                            <img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/sport_tennis2.png"> Action <span class="accent">Long</span> 
                            <?php } else { ?>
                            <img src="<?php echo ot_get_option('all_media_footer_logo_url'); ?>" alt="<?php bloginfo('name'); ?>"> 
                            <?php } ?>           
                        </h1>                       
                        <p><?php echo ot_get_option('all_media_footer_desc'); ?></p>
                        <div class="newsletter">
                        <h4 class="text-uppercase mt30">Subscribe To Newslette</h4>
                        <?php $newsletter = ot_get_option('all_media_newsletter'); ?>
                        <?php echo do_shortcode($newsletter); ?>
                        </div>


                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-1 footer-widget">
                        <h3>Our <span class="accent">Services</span></h3>
                        <ul class="list-group">
                            <?php 
                            $args = array('post_type' =>  array('post' => 'service'),'posts_per_page' => 5);
                            $the_query = new WP_Query( $args );
                            if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                            ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php endwhile; else: ?>
                            <li>Nothing Here.</li>
                            <?php endif; wp_reset_postdata(); ?>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 footer-widget">
                        <h3>Contact <span class="accent">Us</span></h3>
                        <address><?php echo ot_get_option('all_media_key_address'); ?></address>
                        <?php $social_links = ot_get_option('demo_social_links');?>
                        <p class="lead footer-social-icon">
                            <?php if ($social_links) {
                                foreach ($social_links as $social) {
                                 if ($social['title']) { ?>
                                     <a href="<?php echo $social['href']; ?>" class="fa fa-<?php echo $social['title']; ?>"></a>
                                <?php }
                                }
                            }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </footer>