<!-- Header -->

<header id="header"> 
  
  <!-- Header meta -->
  
  <div class="header_meta">
    <div class="container"> 
      
      <!-- Top menu --> 
      
      <!-- Social links -->
      
      <ul class="header_social_links clearfix">
        <?php if (is_user_logged_in()) { ?>
        <?php global $current_user;  wp_get_current_user(); ?>
        <li><a href="<?php echo get_edit_user_link(); ?>"><i class="fa fa-globe"></i> Welcome <?php echo $current_user->display_name; ?></a></li>
        <li><a href="<?php echo wp_logout_url( home_url() ); ?>"><i class="fa fa-sign-in"></i> Logout</a></li>
        <?php } else {  ?>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/wp-login.php"><i class="fa fa-sign-in"></i> Login</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/wp-login.php?action=register"><i class="fa fa-registered"></i> Register</a></li>
        <?php } ?>
      </ul>
      <div class="header_search">
        <div class="widget_social_apps">
          <div class="app_social facebook"> <a href="https://www.facebook.com/dbgujarat" target="_blank"> <span class="app_icon"><i class="fa fa-facebook"></i></span> </a> </div>
          <div class="app_social twitter"> <a href="https://twitter.com/dbgujarat" target="_blank"> <span class="app_icon"><i class="fa fa-twitter"></i></span> </a> </div>
          <div class="app_social pinterest"> <a href="https://www.pinterest.com/dbgujarat" target="_blank"> <span class="app_icon"><i class="fa fa-pinterest"></i></span> </a> </div>
          <div class="app_social instagram"> <a href="https://www.instagram.com/dbgujarat" target="_blank"> <span class="app_icon"><i class="fa fa-instagram"></i></span> </a> </div>
          <div class="app_social google"> <a href="https://plus.google.com/u/1/117711186896431788244/posts" target="_blank"> <span class="app_icon"><i class="fa fa-google-plus"></i></span> </a> </div>
          <div class="app_social linkedin"> <a href="https://www.linkedin.com/in/dbgujarat" target="_blank"> <span class="app_icon"><i class="fa fa-linkedin"></i></span> </a> </div>
          <div class="app_social flickr"> <a href="https://www.flickr.com/photos/136401170@N05/" target="_blank"> <span class="app_icon"><i class="fa fa-flickr"></i></span> </a> </div>
          <div class="app_social pinterest"> <a href="https://www.youtube.com/channel/UCO3Le0YNIhCTzLTlr66MFOQ" target="_blank"> <span class="app_icon"><i class="fa fa-youtube"></i></span> </a> </div>
        </div>
      </div>
      
    </div>
  </div>
  
  <!-- Header main -->
  
  <div class="header_main">
    <div class="container">
      <div class="logo"> <a href="<?= esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>"></a> </div>
      <div class="quick_links">
        <div class="link"> <i class="fa fa-clock-o"></i> <span><?php echo date("D, M d, Y"); ?></span> </div>
      </div>
      
    </div>
  </div>
  
  <!-- Header menu -->
  
  <div id="header_menu" class="header_menu header_is_sticky">
    <div class="container">
      <div class="toggle_main_navigation"><i class="fa fa-bars"></i></div>
      <nav id="main_navigation" class="clearfix">
        <?php



      if (has_nav_menu('primary_navigation')) :



        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'main_navigation clearfix']);



      endif;



      ?>
      </nav>
    </div>
  </div>
  
  <!-- Braking news -->
  
  <div class="breaking_news">
    <div class="container">
      <div class="breaking_news_title">Breaking News�</div>
      <div class="breaking_news_container">
        <?php $loop = new WP_Query(array('post_type' => 'breakingnews','paged' => get_query_var('paged'), 'posts_per_page' => 10)); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div>
          <?php the_title(); ?>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</header>
