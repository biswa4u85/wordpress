<?php 
GLOBAL $webnus_options;
$bottom_quote_title = $webnus_options->webnus_bottom_quote_title();
$bottom_quote_desc = $webnus_options->webnus_bottom_quote_desc();
$bottom_quote_link_text = $webnus_options->webnus_bottom_quote_link_text();
$bottom_quote_link = $webnus_options->webnus_bottom_quote_link();

$webnus_twitter_ID = $webnus_options->webnus_twitter_ID();
$webnus_facebook_ID = $webnus_options->webnus_facebook_ID();
$webnus_youtube_ID = $webnus_options->webnus_youtube_ID();
$webnus_linkedin_ID = $webnus_options->webnus_linkedin_ID();
$webnus_google_ID = $webnus_options->webnus_google_ID();

$footer_logo = $webnus_options->webnus_footer_logo();
$phone_text = $webnus_options->webnus_header_phone_text();
$phone = $webnus_options->webnus_header_phone();
$footer_copyright = $webnus_options->webnus_footer_copyright();
?>

        <!-- Section: Start -->
    <section class="bg4 section-padding">
      <div class="container">

      <!-- Title: Start -->
        <div class="row">
          
          <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 text-center">
            <figure><img class="img-responsive img-center" src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/dist/images/icon9.png" alt="icon"></figure>
            <h2 class="section-title color-white"><?php echo $bottom_quote_title; ?></h2>
            <p class="color-white"><?php echo $bottom_quote_desc; ?></p>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 text-center m-t-30"><a href="<?php echo $bottom_quote_link; ?>" class="btn btn-success btn-lg"><?php echo $bottom_quote_link_text; ?></a></div>
        </div>
        <!-- Title: End -->

      </div>
    </section>
     <!-- Section: End -->
     
    
     <!-- Footer: Start -->
    <footer class="footer-container">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-4 footer-logo">
              <?php               
              if($footer_logo){ ?>
              <a class="img-responsive" href="<?= esc_url(home_url('/')); ?>"><img class="img-responsive img-center" src="<?php echo $footer_logo; ?>" alt="<?php bloginfo('name'); ?>"></a>
              <?php } else { ?>
              <a class="img-responsive" href="<?= esc_url(home_url('/')); ?>"><img class="img-responsive img-center" src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/dist/images/logo.png" alt="<?php bloginfo('name'); ?>"></a>
              <?php } ?>
          </div>
           <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
             <div class="footer-phone-number">
                <?php echo $phone_text; ?>
              <span><i class="fa fa-phone"></i> <?php echo $phone; ?></span>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">

          <nav>
              <ul class="pagination blog-pagination" style="margin:0">
              <?php  if($webnus_twitter_ID){ ?>
                <li><a target="_blank" class="page-link" href="<?php echo $webnus_twitter_ID; ?>"><i class="fa fa-twitter"></i></a></li>
              <?php } ?>
              <?php  if($webnus_facebook_ID){ ?>
                <li><a target="_blank" class="page-link" href="<?php echo $webnus_facebook_ID; ?>"><i class="fa fa-facebook"></i></a></li>
              <?php } ?>
              <?php  if($webnus_youtube_ID){ ?>
                <li><a target="_blank" class="page-link" href="<?php echo $webnus_youtube_ID; ?>"><i class="fa fa-youtube"></i></a></li>
              <?php } ?>
              <?php  if($webnus_linkedin_ID){ ?>
                <li><a target="_blank" class="page-link" href="<?php echo $webnus_linkedin_ID; ?>"><i class="fa fa-linkedin"></i></a></li>
              <?php } ?>
              <?php  if($webnus_google_ID){ ?>
                <li><a target="_blank" class="page-link" href="<?php echo $webnus_google_ID; ?>"><i class="fa fa-google"></i></a></li>
              <?php } ?>
              </ul>
            </nav>
         
             <p><?php echo $footer_copyright; ?></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer: End -->
<?php //dynamic_sidebar('sidebar-footer'); ?>
