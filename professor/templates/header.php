<?php 
use Roots\Sage\Titles;
GLOBAL $webnus_options;
GLOBAL $webnus_page_options_meta;
$logo = $webnus_options->webnus_logo();
$homeTitle = $webnus_options->webnus_home_title();
$homeDesc = $webnus_options->webnus_home_desc();
$homeImg = $webnus_options->webnus_home_img();
$homeLink = $webnus_options->webnus_home_link();
?>

<header>
    <div class="container">

    <?php if($logo){?>
        <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><img class="img-responsive img-center" src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?>"></a>
			<?php } else { ?>
        <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">Prof. Vittorio Alessandro Sironi</a>
     <?php } ?>

      <div class="language">
      <?php dynamic_sidebar('sidebar-header'); ?>
      </div>
    </div>
  </header>

  <div class="navbar-wrapper">
    <div class="container">

      <nav class="navbar navbar-inverse navbar-static-top">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
            aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <?php
      if (has_nav_menu('primary_navigation')) :
       wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
        </div>
      </nav>
    </div>
  </div>

  <?php if (get_page_template_slug() == 'template-front.php') { ?>
  <?php
  if ( defined( 'ICL_LANGUAGE_CODE' ) ) {
    echo ICL_LANGUAGE_CODE;
  }
  ?>
  <div class="container">
    <div class="banner">

      <div class="left col-md-7">
        <h1><?php echo $homeTitle; ?></h1>
        <p><?php echo $homeDesc; ?></p>
        <div class="readmore-btn">
          <a href="<?php echo $homeLink; ?>">Read More +</a>
        </div>
      </div>
      <div class="right col-md-5">
      <?php if($homeImg){?>
        <img src="<?php echo $homeImg; ?>">
      <?php } ?>
      </div>
    </div>
  </div>
  <?php  } ?>