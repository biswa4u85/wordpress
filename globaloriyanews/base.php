<?php







use Roots\Sage\Setup;



use Roots\Sage\Wrapper;



?>







<!doctype html>



<html class="no-js" <?php language_attributes(); ?>>



  <?php get_template_part('templates/head'); ?>



  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/fav.gif" />



  <body <?php body_class(); ?>>



    <!--[if lt IE 9]>



      <div class="alert alert-warning">



        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>



      </div>



    <![endif]-->



    <div id="wrapper" class="wide">



    <?php



      do_action('get_header');



      get_template_part('templates/header');



    ?>



<div class="container">

                <div class="row">

          <?php include Wrapper\template_path(); ?>



        <!-- /.main -->



        <?php if (Setup\display_sidebar()) : ?>



          <div class="col col_4_of_12 sidebar_area" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">



            <?php include Wrapper\sidebar_path(); ?>



          </div><!-- /.sidebar -->



        <?php endif; ?>

 </div>
            </div> 



    <?php



      do_action('get_footer');



      get_template_part('templates/footer');



      wp_footer();



    ?>



    </div>

<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-69882622-1', 'auto');

  ga('send', 'pageview');



</script>

  </body>
</html>