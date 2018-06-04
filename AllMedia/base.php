<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>><div class="animsition">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php echo ot_get_option('ptthemes_scripts_header'); ?>
<?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>
<?php include roots_template_path(); ?>
<!-- /.wrap -->

<?php get_template_part('templates/footer'); ?>
<?php wp_footer(); ?>
<?php echo ot_get_option('ptthemes_scripts_footer'); ?>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/js/ie10-viewport-bug-workaround.js"></script> -->
</div>
<?php if (is_home()) { ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('.banner').vegas({
            slides: [

                <?php 
                $args = array('post_type' =>  array('post' => 'slider'));
                $the_query = new WP_Query( $args );
                if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>
                
                <?php if (has_post_thumbnail()){ ?>
                {src: '<?php the_post_thumbnail_url(); ?>'},
                <?php } ?>

                <?php endwhile; else: ?>
                {src: '<?php echo get_template_directory_uri();?>/assets/images/slide1.jpg'}
                <?php endif; wp_reset_postdata(); ?>

            ],
            delay: 7000,
            timer: false,
            shuffle: true,
            firstTransition: 'fade',
            firstTransitionDuration: 5000,
            transition: ['fade2', 'blur2', 'swirlRight2'],
            transitionDuration: 2000,
        })    
    })
</script>
<?php } ?>
</body>
</html>