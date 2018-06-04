<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		 <!--Footer-->
     <div id="footer1">
        <footer>
        
         <?php if ( ! (is_page('privacy-statement') || is_page('terms-of-use') ) ) { ?>
          <div class="Footer_Contentbg  ">
            <div class="dnn_layout">
              <div class="footer_mid clearfix">
                <div class="row">
                  <div class="col-md-3 col-sm-6 fadeInLeft wow">
                    <div class="FootPaneA">
                      <div class="DnnModule DnnModule-DNN_HTML DnnModule-420"><a name="420"></a>
                        <div class="Container-4"> 
                          <div class="dnntitle"> <span class="title4">Headquarters</span> </div>
                          <div class="contentmain1">
                            <div class="contentpane">
                              <div class="DNNModuleContent ModDNNHTMLC">
                                <div class="Normal">
                                  <ul class="ContactInfo_list">
                                    <li> <span class="fa fa-map-marker">&nbsp;</span> <?php the_field('address', 'option'); ?> </li>
                                    <li> <span class="fa fa-phone-square"></span>
                                    <a href="http://www.hensongroup.com/contact-us"><?php the_field('phone_number', 'option'); ?></a> </li>
                                    <!--<li> <span class="fa fa-fax"></span> <?php the_field('fax', 'option'); ?> </li>-->
                                    <li> <span class="fa fa-envelope"></span> 
                                    <a href="http://www.hensongroup.com/contact-us" class="ApplyClass"><?php the_field('email_id', 'option'); ?></a> </li>
                                     <li> <span class="fa fa-building-o"></span> 
                                    <a href="http://www.hensongroup.com/about-us/offices/" class="ApplyClass">Worldwide Offices</a> </li>
                                  </ul>
                                </div>
                              </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6 fadeInLeft wow">
                    <div class="FootPaneB">
                      <div class="DnnModule DnnModule-DNNGOxBlogDashBoard DnnModule-558"><a name="558"></a>
                        <div class="Container-4"> 
                          <!--Container Title-->
                          <div class="dnntitle"> <span class="title4">Recent Posts</span> </div>
                          <div class="contentmain1">
                            <div class="contentpane">
                              <div class="DNNModuleContent ModDNNGOxBlogDashBoardC">
                                  <div class="validationEngineContainer form_div_558">
                                    <div class="XBD_Effect_09_Default">
                                      <ul>
                                        <?php
											$args = array( 'numberposts' => '3' );
											$recent_posts = wp_get_recent_posts( $args );
											foreach( $recent_posts as $recent ){
												echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
											}
										?>
                                      </ul>
                                    </div>
                                  </div> 
                              </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6  zoomIn wow">
                    <div class="FootPaneC">
                      <div class="DnnModule DnnModule-DNN_HTML DnnModule-422"><a name="422"></a>
                        <div class="Container-4"> 
                          <div class="dnntitle"> <span class="title4">Follow Us</span> </div>
                          <div class="contentmain1">
                            <div class="contentpane">
                              <div class="DNNModuleContent ModDNNHTMLC">
                                <div class="Normal">
                                  <ul class="social-icons social-icons2 animation scaleUp animated">
                                    <li><a target="_blank" href="<?php the_field('facebook_link', 'option'); ?>"><em class="fa fa-facebook"></em>Facebook</a></li>
                                    <li><a target="_blank" href="<?php the_field('twitter_link', 'option'); ?>"><em class="fa fa-twitter"></em>Twitter</a></li>
                                    <li><a target="_blank" href="<?php the_field('linkdin_link', 'option'); ?>"><em class="fa fa-linkedin"></em>Linkedin</a></li>
                                    <li><a target="_blank" href="<?php bloginfo('rdf_url'); ?>"><em class="fa fa-rss"></em>Rss</a></li>
                                    <li><a target="_blank" href="<?php the_field('instagram_link', 'option'); ?>"><em class="fa fa-instagram"></em>Instagram</a></li>
                                  </ul>
                                </div>
                              </div>
                             </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6  zoomIn wow">
                    <div class="FootPaneD">
                      <div class="DnnModule DnnModule-DNNGoPowerForms DnnModule-423">
                        <div class="Container-4"> 
                          <div class="dnntitle"> <span class="title4">Contact Us</span> </div>
                          <div class="contentmain1">
                            <div class="contentpane">
                              <div class="animation scaleUp animated">
                                <div class="DNNModuleContent ModDNNGoPowerFormsC">
                                    <div class="validationEngineContainer form_div_423">
                                        <div class="Theme_Responsive_20045_home1">
                                        <?php echo do_shortcode("[si-contact-form form='2']"); ?>
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
            </div>
          </div>
         <?php } ?> 
          
          <div class="Footer_Bottombg">
            <div class="dnn_layout">
              <div class="footer_mid clearfix">
                <div class="copyright_style"> 
                <span class="footer">Copyright </span> <span class="sep">|</span> 
                <a href="<?php echo esc_url( home_url( '/privacy-statement' ) ); ?>" rel="nofollow" class="terms">Privacy Statement</a> <span class="sep">|</span> 
                <a href="<?php echo esc_url( home_url( '/terms-of-use' ) ); ?>" rel="nofollow" class="terms">Terms Of Use</a> </div>
              </div>
            </div>
          </div>
           
        </footer>
      </div>
      
  </div>
 </div>
 <div class="scroll-up"> <a href="#top"><i class="fa fa-angle-up"></i></a> </div>
</div>
<!--Slider-->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/responsive.css'?>" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/settings.css'?>" media="screen" />
<?php if ( is_page('blog') || is_single() ) { ?>
<link href="<?php echo get_template_directory_uri() . '/css/blog_style.css'?>" media="all" type="text/css" rel="stylesheet"/>
<?php } ?>
<?php if ( is_page('contact-us') || is_page('support') ) { ?>
<link href="<?php echo get_template_directory_uri() . '/css/form_style.css'?>" media="all" type="text/css" rel="stylesheet"/>
<?php } ?>
<?php if ( is_page('support') ) { ?>
<link href="<?php echo get_template_directory_uri() . '/css/support_custom.css'?>" media="all" type="text/css" rel="stylesheet"/>
<?php } ?>
<?php if ( get_theme_mod( 'themeslug_fav' ) ) : ?>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo esc_url( get_theme_mod( 'themeslug_fav' ) ); ?>">
<?php endif; ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/script.js'?>"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/custom.js'?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/dnngo-xplugin.js'?>"></script>

<!--new js-->
<script src="<?php echo get_template_directory_uri() . '/js/owl.carousel.js'?>" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() . '/js/wow.js'?>" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/jquery.templateaccess.plugins.min.js'?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/jquery.templateaccess.revolution.js'?>"></script>
<!-- scroll up -->
<script type="text/javascript">
    var $ = jQuery.noConflict();
    $(document).ready(function(){

setInterval(function(){ $('.owl-next').trigger('click'); }, 3000); 


 $('.scroll-up').hide();
        $(window).scroll(function(){
            if ($(this).scrollTop() > 250) {
                $('.scroll-up').fadeIn();
            } else {
                $('.scroll-up').fadeOut();
            }
        });

        $('.scroll-up').click(function(){
            $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
        });

        $('a[href^="#"]').on('click', function(event) {
            var target = $( $(this).attr('href') );

            if( target.length ) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 750);
            }
         });
    });

 $(document).ready(function() {
      var owl = $("#one_slide");
      owl.owlCarousel({
        itemsCustom : [
          [0, 1],
          [480, 2],
          [640, 3],
          [992, 4],
          [1200, 6]
        ],
        navigation : true,
        loop:true,
    margin:10,
    autoPlay:true,
    autoPlayTimeout:1000,
    autoPlayHoverPause:true,
    autoPlaySpeed:5000
      });
    });

</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-74816198-1', 'auto');
  ga('send', 'pageview');
</script>
<style type="text/css">
.backgroundImage12 {
background: url(<?php the_field('testimonial_background_picture');
?>) no-repeat fixed center center / cover;
}
</style>

	<?php wp_footer(); ?>
</body>
</html>