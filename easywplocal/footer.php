<?php

/**

 * Default Footer

 *

 * @package WordPress

 * @subpackage BootstrapWP

 */

?>

</div>

</div><div class="conten-bot">Contact us at <i><a href="tel:<?php echo ot_get_option('phone_number'); ?>"><?php echo ot_get_option('phone_number'); ?></a></i></div></div></div>

<footer>

            <div class="row-fluid padbot40">

            <?php if ( is_active_sidebar( 'home-box-area' ) ) : ?>

				<div class="row-fluid footer-topbg"><?php dynamic_sidebar( 'home-box-area' ); ?></div>

			<?php endif; ?>

          </div>

             
 		<?php if (is_front_page()) { ?>
		<?php while (have_posts()) : the_post(); ?>
        <h1><?php the_title();?></h1>
		<?php the_content(); ?>
        <?php wp_link_pages( array('before' => '<div class="page-links">' . __('Pages:', 'bootstrapwp'), 'after' => '</div>')); ?>
        <?php edit_post_link(__('Edit', 'bootstrapwp'), '<span class="edit-link">', '</span>'); ?>
        <?php endwhile; // end of the loop. ?>
         <?php } ?>   

            <div class="row-fluid footer-mainbg">

                <div class="pad25">

                <div class="row-fluid">

                <?php if ( is_active_sidebar( 'footer-one' ) ) : ?>

				<div class="span4"><?php dynamic_sidebar( 'footer-one' ); ?></div>

				<?php endif; ?>

                                <?php $social_links = ot_get_option('demo_social_links');  // print_r($social_links); ?>
				<div class="span7"><div class="footer-bot-right"><ul id="social" style="">
                                        <?php if ($social_links) {
                                            foreach ($social_links as $social) {
                                             if ($social[name]) { ?>
                                                 <li><a href='<?php echo $social[href]; ?>' target="blank"><i class="fa fa-<?php echo strtolower($social[name]); ?>"></i></a></li>
                                            <?php }
                                            }
                                        }
                                        ?>
					</ul>
					<div id="slideshow">
                    <ul class="bjqs">
                    <?php $loop = new WP_Query( array( 'post_type' => 'Testimonials') );?>
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                      <li><span class="leftinvo">&nbsp;</span><?php the_content(); ?><span class="rightinvo">&nbsp;</span></li>
                      <?php endwhile; ?>
                    </ul>
                </div>
                <script>
				jQuery(document).ready(function($) {
					$('#slideshow').bjqs({
						'width' : 620,
						'showcontrols' : false,
						'automatic' : true,
						'responsive' : true
					});
				});
				</script>
                </div></div>


                </div>

                </div>

                </div>
</footer>
<div class="clear"></div>
</div>
 </div>
       <?php wp_footer(); ?>
 <?php echo ot_get_option('footer_scripts'); ?>
    </body>
</html>