<?php if (is_home()) { ?>
<header class="main">        
            <div class="banner">
                <div class="overlay">
                    <nav class="navbar navbar-custom navbar-static-top" data-spy="affix" data-offset-top="70">
                        <div class="container">
                            <div class="navbar-header"> 
                                <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-7" aria-expanded="false"> 
                                    <span class="sr-only">Toggle navigation</span> 
                                    <span class="icon-bar"></span> 
                                    <span class="icon-bar"></span> 
                                    <span class="icon-bar"></span> </button> 
                                <a class="navbar-brand top-name" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                            <?php if (ot_get_option('all_media_logo_url') == '') { ?>
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png"> 
                            <?php } else { ?>
                            <img src="<?php echo ot_get_option('all_media_logo_url'); ?>" alt="<?php bloginfo('name'); ?>"> 
                            <?php } ?>           
                        </a>
                 n           </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-10">
                                <?php wp_nav_menu( array('theme_location' => 'mainmenu', 'menu_class'=>'nav navbar-nav navbar-right', 'walker' => new New_Walker_Nav_Menu() )); ?>
                            </div>
                        </div>
                    </nav>                   
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-5 banner-info">
                            	<?php echo ot_get_option('all_media_contaon'); ?>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-3">
                                <div class="quote-form">
                                	<?php $homeform = ot_get_option('all_media_form'); ?>
                                	<?php echo do_shortcode($homeform); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="logo-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul class="c-logo">
                            <?php 
                            $args = array('post_type' =>  array('post' => 'sponsor'),'posts_per_page' => 6);
                            $the_query = new WP_Query( $args );
                            if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                            ?>

                                <?php if (has_post_thumbnail()){ ?> 
                                <li><a href="<?php echo get_post_meta($post->ID, "_Link", true); ?>" target="blank"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a></li>
                                <?php } ?>

                                <?php endwhile; else: ?>
                                <li>Nothing Here.</li>
                                <?php endif; wp_reset_postdata(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
<?php } else { ?>
                <header class="main inner-header">
        <nav class="navbar navbar-custom navbar-static-top" data-spy="affix" data-offset-top="70">
                        <div class="container">
                            <div class="navbar-header"> 
                                <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-7" aria-expanded="false"> 
                                    <span class="sr-only">Toggle navigation</span> 
                                    <span class="icon-bar"></span> 
                                    <span class="icon-bar"></span> 
                                    <span class="icon-bar"></span> </button>
                                <a class="navbar-brand top-name" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                                    <?php if (ot_get_option('all_media_logo_url') == '') { ?>
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png"> 
                                    <?php } else { ?>
                                    <img src="<?php echo ot_get_option('all_media_logo_url'); ?>" alt="<?php bloginfo('name'); ?>"> 
                                    <?php } ?>           
                                </a>

                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-10">
                                <?php wp_nav_menu( array('theme_location' => 'mainmenu', 'menu_class'=>'nav navbar-nav navbar-right', 'walker' => new New_Walker_Nav_Menu() )); ?>
                            </div>
                        </div>
                    </nav>        
        </header>


<div class="banner-inner">
<div class="overlay">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-uppercase"><?php the_title(); ?></h1>
        </div>
    </div>
</div>                   
</div>
</div>
<?php } ?>