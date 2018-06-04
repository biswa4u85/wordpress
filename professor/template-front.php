<?php
/**
 * Template Name: Front Template
 */

 GLOBAL $webnus_options;
 $homeProfTitle = $webnus_options->webnus_prof_title();
 $homeProfDesc = $webnus_options->webnus_prof_desc();
 $homeProfLink = $webnus_options->webnus_prof_link();
 $homeLibriTitle = $webnus_options->webnus_libri_title();
 $homeLibriDesc = $webnus_options->webnus_libri_desc();
 $homeLibriLink = $webnus_options->webnus_libri_link();
 $homeConferenzeTitle = $webnus_options->webnus_conferenze_title();
 $homeConferenzeDesc = $webnus_options->webnus_conferenze_desc();
 $homeConferenzeLink = $webnus_options->webnus_conferenze_link();
 $homePubblicazionieTitle = $webnus_options->webnus_pubblicazioni_title();
 $homePubblicazionieDesc = $webnus_options->webnus_pubblicazionie_desc();
 $homePubblicazionieLink = $webnus_options->webnus_pubblicazioni_link();
?>
  
  <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="bannerbtm">
          <h2><?php echo $homeProfTitle; ?></h2>
          <p><?php echo $homeProfDesc; ?></p>
          <p class="readmore-btninr">
            <a href="<?php echo $homeProfLink; ?>">Read More +</a>
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="bannerbtm">
          <h2><?php echo $homeLibriTitle; ?></h2>
          <p><?php echo $homeLibriDesc; ?></p>
          <p class="readmore-btninr">
            <a href="<?php echo $homeLibriLink; ?>">Read More +</a>
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="bannerbtm">
          <h2><?php echo $homeConferenzeTitle; ?></h2>
          <p><?php echo $homeConferenzeDesc; ?></p>
          <p class="readmore-btninr">
            <a href="<?php echo $homeConferenzeLink; ?>">Read More +</a>
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="bannerbtm">
          <h2><?php echo $homePubblicazionieTitle; ?></h2>
          <p><?php echo $homePubblicazionieDesc; ?></p>
          <p class="readmore-btninr">
            <a href="<?php echo $homePubblicazionieLink; ?>">Read More +</a>
          </p>
        </div>
      </div>

    </div>