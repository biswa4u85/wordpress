<?php 
use Roots\Sage\Titles;
GLOBAL $webnus_options;
GLOBAL $webnus_page_options_meta;
$logo = $webnus_options->webnus_logo();
$phone_text = $webnus_options->webnus_header_phone_text();
$phone = $webnus_options->webnus_header_phone();
$webnus_header_quote_text = $webnus_options->webnus_header_quote_text();
$webnus_header_quote = $webnus_options->webnus_header_quote();
$email = $webnus_options->webnus_header_email();

$meta = $webnus_page_options_meta->the_meta();
if(!empty($meta)){
$sub_title =  isset($meta['webnus_page_options'][0]['sub_title_text'])?$meta['webnus_page_options'][0]['sub_title_text']:null;
$the_page_bg =  isset($meta['webnus_page_options'][0]['the_page_bg'])?$meta['webnus_page_options'][0]['the_page_bg']:null;
}
?>
  <!-- Header -->
    <!-- <div id="preloader"></div> -->
    <header>

    <!-- Header Top: Start -->
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3">
              <?php if($logo){?>
              <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img class="img-responsive img-center" src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?>"></a>
              <?php } else { ?>
              <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img class="img-responsive img-center" src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/dist/images/logo.png" alt="<?php bloginfo('name'); ?>"></a>
              <?php } ?>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-4">
              <div class="header-t-r text-right">
                  <ul class="list-inline">
                    <li class="phone-number">
                      <?php echo $phone_text; ?>
                    <span><i class="fa fa-phone"></i> <?php echo $phone; ?></span>
                    </li>
                   <li class="color-dark-grey">-- OR --</li>
                   <li><a href="<?php echo $webnus_header_quote; ?>" class="btn btn-success btn-lg"><?php echo $webnus_header_quote_text; ?></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- Header Top: End -->

<!-- Memu: Start -->
  <nav class="navbar m-b-0 border-none">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <i class="fa fa-bars" style="color: #333; font-size: 25px;"></i>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-new']);
      endif;
      ?>
      <form class="navbar-form navbar-right" id="searchform" method="get" action="<?= esc_url(home_url('/')); ?>">
        <div class="form-group">
          <input type="text" name="s" id="s" class="form-control search-box" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default btn-search"><i class="fa fa-search"></i></button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- Memu: End -->
<?php if ( ! is_front_page()){ ?>
<!-- Start Header Intro-->
  <div class="inner-header blog-page" <?php if ($the_page_bg) { ?> style="background: url(<?php echo $the_page_bg; ?>) no-repeat top/cover;" <?php } ?> >
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1><?= Titles\title(); ?></h1>
          <p><?php echo $sub_title; ?></p>
        </div>
      </div>
    </div>
  </div>
  <!-- End Header Intro-->

<!-- Body area Start -->

<section class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <?php if('webnus_breadcrumbs') webnus_breadcrumbs(); ?>
      </div>
    </div>
  </div>
</section>
<?php } ?>
<!-- Body area End -->
    </header>
    <!-- /Header -->