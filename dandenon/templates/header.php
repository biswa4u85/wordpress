<?php 
use Roots\Sage\Titles;
GLOBAL $webnus_options;
GLOBAL $webnus_page_options_meta;
$logo = $webnus_options->webnus_logo();
$phone = $webnus_options->webnus_header_phone();
$address = $webnus_options->webnus_header_address();
$parking = $webnus_options->webnus_header_parking();
$fb = $webnus_options->webnus_header_fb();
$tw = $webnus_options->webnus_header_tw();
$mail = $webnus_options->webnus_header_mail();

$meta = $webnus_page_options_meta->the_meta();
if(!empty($meta)){
$full_page =  $meta['webnus_page_options'][0]['full_page'];
$bannerLeft =  isset($meta['webnus_page_options'][0]['sub_banner_left'])?$meta['webnus_page_options'][0]['sub_banner_left']:null;
$the_page_bg =  isset($meta['webnus_page_options'][0]['the_page_bg'])?$meta['webnus_page_options'][0]['the_page_bg']:null;
$sub_title =  isset($meta['webnus_page_options'][0]['sub_title_text'])?$meta['webnus_page_options'][0]['sub_title_text']:null;
}
?>

<div class="header-top" style="background-color: transparent;">
		<div class="container">
			<div class="bottom_header_left">
            <?php if($logo){?>
              <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img class="img-responsive img-center" src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?>"></a>
              <?php } elseif($full_page) { ?>
              <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img class="img-responsive img-center" src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>"></a>
			<?php } else { ?>
              <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img class="img-responsive img-center" src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/logo-blue.png" alt="<?php bloginfo('name'); ?>"></a>
              <?php } ?>
			</div>
			<div class="bottom_header_right">
				<div class="header-phone">
					<?php if ($full_page){ ?>
					<h2><img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/phone.png"  alt="phone"> <?php echo $phone; ?></h2>
          <p><img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/location.png" alt="location">   <?php echo $address; ?></p>
					<span><img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/car.png" alt="car">  <?php echo $parking; ?></span>
					<?php } else { ?>
						<h2><span>Call Us: </span> <?php echo $phone; ?></h2>
          				<p><span>Location: </span>  <?php echo $address; ?></p>
					<?php }  ?>
          <div class="clearfix hidden-xs"> </div>
          <div class="top-social">
          <ul class="bottom-social-icons">
            <?php  if($fb){ ?>
              <li><a target="_blank" href="<?php echo $fb; ?>" class="facebook-icon"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/facebook.png" alt="facebook"></a></li>
            <?php } ?>
            <?php  if($tw){ ?>
              <!-- <li><a target="_blank" href="<?php echo $tw; ?>" class="facebook-icon"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/twitter.png" alt="twitter"></a></li> -->
              <?php } ?>
            <?php  if($mail){ ?>
              <li><a  href="mailto:<?php echo $mail; ?>" class="facebook-icon"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/email.png" alt="email"></a></li>
              <?php } ?>						  				  
            </ul>
        </div>
				</div>
			<div class="clearfix  hidden-xs"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
  </div>

  <?php echo $full_page ? '<nav class="navbar navbar-default"><div class="container">' : '<div class="container"><nav class="navbar navbar-default">' ; ?>


  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

    <?php
      if (has_nav_menu('primary_navigation')) :
       // wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-new']);
      endif;
      ?>

      <ul class="nav navbar-nav">
        <li class=""><a href="<?= esc_url(home_url('/')); ?>"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/home.png" alt="home"></a></li>
        <li class=""><a href="<?= esc_url(home_url('/')); ?>team">Our Practice </a></li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Our Services</a>
            <ul class="dropdown-menu">
              <?php $the_query = new WP_Query( array('post_type' => 'service') ); while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <li><a href="?page_id=54&pId=<?php echo $post->ID ?>"><?php the_title(); ?></a></li>
            <?php endwhile; wp_reset_postdata(); ?>
            </ul>
          </li>
        
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Patient Information</a>
            <ul class="dropdown-menu">
              <li><a href="<?= esc_url(home_url('/')); ?>patient">Patient Information Form</a></li>
              <li><a href="<?= esc_url(home_url('/')); ?>referrals">Referrals</a></li>
              <li><a href="<?= esc_url(home_url('/')); ?>faq">Faq's</a></li>
            </ul>
          </li>
        <li><a href="<?= esc_url(home_url('/')); ?>contact">Contact us</a></li>
      </ul>
          <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="<?= esc_url(home_url('/')); ?>contact"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/office.png" alt="office"> Request Appointment</a></li>
           </ul>
        </div>

        <?php echo $full_page ? '</nav></div>' : '</div></nav>' ; ?>



<?php if ( is_front_page()){ ?>
<div class="main">
<?php echo do_shortcode('[rev_slider alias="home"]'); ?>
</div>
<?php } else { ?>
  <div class="container">
  <div class="row">
    <div class="col-sm-6">
		   <?php echo $bannerLeft ?>
    </div>
    <div class="col-sm-6">
      <div class="pull-right">
        <?php if($the_page_bg){?>
          <img src="<?php echo $the_page_bg; ?>" class="img-responsive float-left" alt="bg">
        <?php } else { ?>
        <img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/bg-services.png" class="img-responsive float-left" alt="bg">
        <?php }  ?>
      </div>
    </div>
  </div>
</div>
<?php } ?>


<?php if($sub_title){?>
<div class="contant-green">
<div class="container">
    <div class="row">
      <div class="col-sm-12">
      <?php echo $sub_title; ?>
      </div>
    </div>
  </div>
</div>
<?php }  ?>