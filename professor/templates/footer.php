
<?php 
GLOBAL $webnus_options;
$footer_copyright = $webnus_options->webnus_footer_copyright();
$fb = $webnus_options->webnus_header_fb();
$tw = $webnus_options->webnus_header_tw();
$lnk = $webnus_options->webnus_header_lnk();
$you = $webnus_options->webnus_header_you();

?>

<div class="container">

<div class="sep"></div>

<footer>
  <div class="left">
    <p><?php echo $footer_copyright; ?></p>
  </div>
  <div class="right">


  <?php  if($fb){ ?>
    <a target="_blank" href="<?php echo $fb; ?>"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/fb-ico.jpg" alt="facebook"></a>
  <?php } ?>

  <?php  if($tw){ ?>
    <a target="_blank" href="<?php echo $tw; ?>"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/tw-ico.jpg" alt="twitter"></a>
  <?php } ?>

  <?php  if($lnk){ ?>
    <a target="_blank" href="<?php echo $lnk; ?>"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/lnk-ico.jpg" alt="Linkedin"></a>
  <?php } ?>

  <?php  if($you){ ?>
    <a target="_blank" href="<?php echo $you; ?>"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/you-ico.jpg" alt="Youtube"></a>
  <?php } ?>

  </div>

</footer>
</div>