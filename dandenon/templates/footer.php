<?php 
GLOBAL $webnus_options;

$footer_logo = $webnus_options->webnus_footer_logo();
$phone = $webnus_options->webnus_header_phone();
$address = $webnus_options->webnus_header_address();
$fb = $webnus_options->webnus_header_fb();
$tw = $webnus_options->webnus_header_tw();
$footer_copyright = $webnus_options->webnus_footer_copyright();
?>

<footer>
      <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="footer-title">
                  <h3>QUICK LINKS</h3>
                </div>
                <?php
                if (has_nav_menu('footer_navigation')) :
                  wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'quick-link']);
                endif;
                ?>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="foter-sub">
                  <div class="footer-title">
                    <h3>CONTACT US</h3>
                  </div>
                  <div class="footer-phone">
                    <h3><?php echo $phone; ?></h3>
                  </div>
                  <div class="footer-location">
                    <p><?php echo $address; ?></p>
                  </div>
                  <ul class="footer-social">
                  <li>JOIN US</li>
                  <?php  if($tw){ ?>
                    <!--<li><a target="_blank" href="<?php echo $tw; ?>"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/twitterfooter.png" alt="twitter"></a></li>-->
                    <?php } ?>
                  <?php  if($fb){ ?>
                    <li><a target="_blank" href="<?php echo $fb; ?>"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/facebookfooter.png" alt="facebook"></a></li>
                  <?php } ?>
                  </ul>
              </div>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
              <div class="logo-footer">
              <?php               
              if($footer_logo){ ?>
              <a class="img-responsive" href="<?= esc_url(home_url('/')); ?>"><img class="img-responsive img-center" src="<?php echo $footer_logo; ?>" alt="<?php bloginfo('name'); ?>"></a>
              <?php } else { ?>
              <a class="img-responsive" href="<?= esc_url(home_url('/')); ?>"><img class="img-responsive img-center" src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/logo-footer.png" alt="<?php bloginfo('name'); ?>"></a>
              <?php } ?>
              </div>
              <div class="clearfix"> </div>
              <div class="footer-logo-text">
                <p><?php echo $footer_copyright; ?></p>
              </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer: End -->
