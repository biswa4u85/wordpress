<?php
/**
 * Template Name: Feedback Page
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>

<style>
	#dnn_content{margin: 0px 0 0;}
	.Full_Screen_PaneA{margin-bottom: 0px;}
</style>

    <!-- #main-content -->
    <section id="dnn_content">

        <div class="Full_Screen_PaneA">
            <div class="DnnModule DnnModule-DNN_HTML DnnModule-442">
                <div class="DNNModuleContent ModDNNHTMLC">
                    <div class="Normal">
                        <div class="Lead">
                            <img src="<?php the_field('header_banner');?>" alt=""></div>
                        <br>
                    </div>
                </div>
            </div>
        </div>

        <div class="dnn_layout">
            <div class="content_mid clearfix">
                <div class="pane_layout">

                    <div class="col-sm-12">
                        <div class="RowFour_Grid12_Pane1">

                            <div class="Theme_Responsive_20045_home2" style="width:100%;">
                                <?php echo do_shortcode("[si-contact-form form='4']"); ?>
                            </div>
                        </div>
                    </div>

                    

                </div>
            </div>
        </div>

    </section>

    <?php
get_footer();