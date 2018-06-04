                    <!-- Main content -->

                    <div class="col col_8_of_12 main_content">

                        <!-- Main slider -->

                        <div class="main_slider">

                            <!-- Slide -->

                            

                    <?php

					// The Query

					query_posts( array( 'category_name' => 'top-10-news', 'posts_per_page' => 10 ));

					// The Loop

					$i = 1; while ( have_posts() ) : the_post();

					?>

                    <?php if ( has_post_thumbnail() ) {

						$image_url = wp_get_attachment_url( get_post_thumbnail_id() );

					}else{

						$image_url = get_template_directory_uri().'/assets/images/thum-sm.jpg';

					} ?>

                    

                    <div class="slide">

                                <a href="<?php the_permalink(); ?>"><img src="<?php echo $image_url; ?>" alt="Post"></a>

                                <div class="slide_content">

                                    <h3><a href="<?php the_permalink(); ?>"><?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?></a></h3>

                                    

                                </div>

                            </div>

					<?php

					$i++; endwhile;

		

					// Reset Query

					wp_reset_query();

					?>

                            

                        </div>

                        <!-- Title section -->

                        

                        <div class="row">

                            <div class="col col_6_of_12">
                            	<h5 class="title_section"><a href="?cat=7"><?php echo get_cat_name(7);?></a></h5> 

                                <!-- Article list view -->

                                <div class="article_tiny_view">

                                

                                <?php

					// The Query

					query_posts( array( 'category_name' => 'bhubaneswar', 'posts_per_page' => 4 ));

					// The Loop

					while ( have_posts() ) : the_post();

					?>

                    <?php if ( has_post_thumbnail() ) {

						$image_url = wp_get_attachment_url( get_post_thumbnail_id() );

					}else{

						$image_url = get_template_directory_uri().'/assets/images/thum-sm.jpg';

					} ?>

					<article class="item">

                                        <div class="item_header">

                                            <a href="<?php the_permalink(); ?>"><img src="<?php echo $image_url; ?>" alt="<?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?>"></a>

                                        </div>

                                        <div class="item_content">

                                            <h3><a href="<?php the_permalink(); ?>"><?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?></a></h3>

                                            <div class="item_post_share">

                                        <span class="item_post_share_button"><i class="fa fa-share-square-o"></i></span>

                                        <div class="item_post_share_content">
<span class='st_sharethis' displayText=''></span>
<span class='st_facebook' displayText=''></span>
<span class='st_twitter' displayText=''></span>
<span class='st_whatsapp' displayText=''></span>
<span class='st_pinterest' displayText=''></span>
<span class='st_email' displayText=''></span>
</div>

                                    </div>

                                        </div>

                                    </article>

					<?php

					endwhile;

		

					// Reset Query

					wp_reset_query();

					?>

                    

                                </div>
                                
                                <h4 class="more_section"><a href="?cat=7">More</a></h4>

                            </div>

                            <div class="col col_6_of_12">
                            <h5 class="title_section"><a href="?cat=6"><?php echo get_cat_name(6);?></a></h5> 

                                <!-- Article list view -->

                                <div class="article_tiny_view">

                                

                                <?php

					// The Query

					query_posts( array( 'category_name' => 'odisha', 'posts_per_page' => 4 ));

					// The Loop

					while ( have_posts() ) : the_post();

					?>

                    <?php if ( has_post_thumbnail() ) {

						$image_url = wp_get_attachment_url( get_post_thumbnail_id() );

					}else{

						$image_url = get_template_directory_uri().'/assets/images/thum-sm.jpg';

					} ?>

					<article class="item">

                                        <div class="item_header">

                                            <a href="<?php the_permalink(); ?>"><img src="<?php echo $image_url; ?>" alt="<?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?>"></a>

                                        </div>

                                        <div class="item_content">

                                            <h3><a href="<?php the_permalink(); ?>"><?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?></a></h3>

                                            <div class="item_post_share">

                                        <span class="item_post_share_button"><i class="fa fa-share-square-o"></i></span>

                                        <div class="item_post_share_content">
<span class='st_sharethis' displayText=''></span>
<span class='st_facebook' displayText=''></span>
<span class='st_twitter' displayText=''></span>
<span class='st_whatsapp' displayText=''></span>
<span class='st_pinterest' displayText=''></span>
<span class='st_email' displayText=''></span>
</div>

                                    </div>

                                        </div>

                                    </article>

					<?php

					endwhile;

		

					// Reset Query

					wp_reset_query();

					?>

                    

                                </div>
							<h4 class="more_section"><a href="?cat=6">More</a></h4>
                            
                            </div>

                        </div>

                        <div class="row">

                            <div class="col col_6_of_12">
                            	<h5 class="title_section"><a href="?cat=8"><?php echo get_cat_name(8);?></a></h5> 

                                <!-- Article list view -->

                                <div class="article_tiny_view">

                                

                                <?php

					// The Query

					query_posts( array( 'category_name' => 'national', 'posts_per_page' => 4 ));

					// The Loop

					while ( have_posts() ) : the_post();

					?>

                    <?php if ( has_post_thumbnail() ) {

						$image_url = wp_get_attachment_url( get_post_thumbnail_id() );

					}else{

						$image_url = get_template_directory_uri().'/assets/images/thum-sm.jpg';

					} ?>

					<article class="item">

                                        <div class="item_header">

                                            <a href="<?php the_permalink(); ?>"><img src="<?php echo $image_url; ?>" alt="<?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?>"></a>

                                        </div>

                                        <div class="item_content">

                                            <h3><a href="<?php the_permalink(); ?>"><?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?></a></h3>

                                            <div class="item_post_share">

                                        <span class="item_post_share_button"><i class="fa fa-share-square-o"></i></span>

                                        <div class="item_post_share_content">
<span class='st_sharethis' displayText=''></span>
<span class='st_facebook' displayText=''></span>
<span class='st_twitter' displayText=''></span>
<span class='st_whatsapp' displayText=''></span>
<span class='st_pinterest' displayText=''></span>
<span class='st_email' displayText=''></span>
</div>

                                    </div>

                                        </div>

                                    </article>

					<?php

					endwhile;

		

					// Reset Query

					wp_reset_query();

					?>

                    

                                </div>
                                
                                <h4 class="more_section"><a href="?cat=8">More</a></h4>

                            </div>

                            <div class="col col_6_of_12">
                            <h5 class="title_section"><a href="?cat=5"><?php echo get_cat_name(5);?></a></h5> 

                                <!-- Article list view -->

                                <div class="article_tiny_view">

                                

                                <?php

					// The Query

					query_posts( array( 'category_name' => 'international', 'posts_per_page' => 4 ));

					// The Loop

					while ( have_posts() ) : the_post();

					?>

                    <?php if ( has_post_thumbnail() ) {

						$image_url = wp_get_attachment_url( get_post_thumbnail_id() );

					}else{

						$image_url = get_template_directory_uri().'/assets/images/thum-sm.jpg';

					} ?>

					<article class="item">

                                        <div class="item_header">

                                            <a href="<?php the_permalink(); ?>"><img src="<?php echo $image_url; ?>" alt="<?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?>"></a>

                                        </div>

                                        <div class="item_content">

                                            <h3><a href="<?php the_permalink(); ?>"><?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?></a></h3>

                                            <div class="item_post_share">

                                        <span class="item_post_share_button"><i class="fa fa-share-square-o"></i></span>

                                        <div class="item_post_share_content">
<span class='st_sharethis' displayText=''></span>
<span class='st_facebook' displayText=''></span>
<span class='st_twitter' displayText=''></span>
<span class='st_whatsapp' displayText=''></span>
<span class='st_pinterest' displayText=''></span>

<span class='st_email' displayText=''></span>
</div>

                                    </div>

                                        </div>

                                    </article>

					<?php

					endwhile;

		

					// Reset Query

					wp_reset_query();

					?>

                    

                                </div>
							<h4 class="more_section"><a href="?cat=5">More</a></h4>
                            
                            </div>

                        </div>
                        
                        <div class="row">

                            <div class="col col_6_of_12">
                            	<h5 class="title_section"><a href="?cat=10"><?php echo get_cat_name(10);?></a></h5> 

                                <!-- Article list view -->

                                <div class="article_tiny_view">

                                

                                <?php

					// The Query

					query_posts( array( 'category_name' => 'sports', 'posts_per_page' => 4 ));

					// The Loop

					while ( have_posts() ) : the_post();

					?>

                    <?php if ( has_post_thumbnail() ) {

						$image_url = wp_get_attachment_url( get_post_thumbnail_id() );

					}else{

						$image_url = get_template_directory_uri().'/assets/images/thum-sm.jpg';

					} ?>

					<article class="item">

                                        <div class="item_header">

                                            <a href="<?php the_permalink(); ?>"><img src="<?php echo $image_url; ?>" alt="<?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?>"></a>

                                        </div>

                                        <div class="item_content">

                                            <h3><a href="<?php the_permalink(); ?>"><?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?></a></h3>

                                            <div class="item_post_share">

                                        <span class="item_post_share_button"><i class="fa fa-share-square-o"></i></span>

                                        <div class="item_post_share_content">
<span class='st_sharethis' displayText=''></span>
<span class='st_facebook' displayText=''></span>
<span class='st_twitter' displayText=''></span>
<span class='st_whatsapp' displayText=''></span>
<span class='st_pinterest' displayText=''></span>
<span class='st_email' displayText=''></span>
</div>

                                    </div>

                                        </div>

                                    </article>

					<?php

					endwhile;

		

					// Reset Query

					wp_reset_query();

					?>

                    

                                </div>
                                
                                <h4 class="more_section"><a href="?cat=10">More</a></h4>

                            </div>

                            <div class="col col_6_of_12">
                            <h5 class="title_section"><a href="?cat=13"><?php echo get_cat_name(13);?></a></h5> 

                                <!-- Article list view -->

                                <div class="article_tiny_view">

                                

                                <?php

					// The Query

					query_posts( array( 'category_name' => 'business', 'posts_per_page' => 4 ));

					// The Loop

					while ( have_posts() ) : the_post();

					?>

                    <?php if ( has_post_thumbnail() ) {

						$image_url = wp_get_attachment_url( get_post_thumbnail_id() );

					}else{

						$image_url = get_template_directory_uri().'/assets/images/thum-sm.jpg';

					} ?>

					<article class="item">

                                        <div class="item_header">

                                            <a href="<?php the_permalink(); ?>"><img src="<?php echo $image_url; ?>" alt="<?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?>"></a>

                                        </div>

                                        <div class="item_content">

                                            <h3><a href="<?php the_permalink(); ?>"><?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?></a></h3>

                                            <div class="item_post_share">

                                        <span class="item_post_share_button"><i class="fa fa-share-square-o"></i></span>

                                        <div class="item_post_share_content">
<span class='st_sharethis' displayText=''></span>
<span class='st_facebook' displayText=''></span>
<span class='st_twitter' displayText=''></span>
<span class='st_whatsapp' displayText=''></span>
<span class='st_pinterest' displayText=''></span>

<span class='st_email' displayText=''></span>
</div>

                                    </div>

                                        </div>

                                    </article>

					<?php

					endwhile;

		

					// Reset Query

					wp_reset_query();

					?>

                    

                                </div>
							<h4 class="more_section"><a href="?cat=13">More</a></h4>
                            
                            </div>

                        </div>
                        

                    </div>                    

                    <!-- Sidebar area -->

                    <div class="col col_4_of_12 sidebar_area">

                        <div class="theiaStickySidebar">

                            

<!-- Widget recent posts -->
                            <aside class="widget">

                                <h3 class="widget_title">Popular posts</h3>

                                <div class="widget_custom_posts">

                                    <ul>

                                    	<?php

								// The Query

								query_posts('post_type=post&posts_per_page=3&orderby=comment_count&order=DESC');

								// The Loop

								$i = 1; while ( have_posts() ) : the_post();

								?>

								<?php if ( has_post_thumbnail() ) {

									$image_url = wp_get_attachment_url( get_post_thumbnail_id() );

								}else{

									$image_url = get_template_directory_uri().'/assets/images/thum-sm.jpg';

								} ?>

								

								<li>

                                            <div class="entry_thumbnail">

                                                <a href="<?php the_permalink(); ?>"><img src="<?php echo $image_url; ?>" alt="<?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?>"></a>

                                            </div>

                                            <h3><a href="<?php the_permalink(); ?>"><?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?></a></h3>

                                            <div class="entry_meta">

                                                <span><i class="fa fa-clock-o"></i> <?= get_the_date(); ?></span>

                                            </div>

                                        </li>            

					

					<?php

					$i++; endwhile;

		

					// Reset Query

					wp_reset_query();

					?>

                                    </ul>

                                </div>

                            </aside>
<aside class="widget">
<!-- GON -->
<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7181367215079092" data-ad-slot="9286441944" data-ad-format="auto"></ins>
<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
</aside>
                            
							
<!-- Widget recent posts -->

                            <aside class="widget">

                                <h3 class="widget_title">Upcoming Movies</h3>

                                <div class="widget_gallery_post widget_custom_posts">


                                    	<?php

								// The Query

								query_posts( array( 'category_name' => 'upcoming-movies', 'posts_per_page' => 11, 'orderby' => 'date', 'order' => 'DESC'  ));

								// The Loop
								echo '<div class="slide"><ul>';
								$i = 1; while ( have_posts() ) : the_post();

								?>

								<?php if ( has_post_thumbnail() ) {

									$image_url = wp_get_attachment_url( get_post_thumbnail_id() );

								}else{

									$image_url = get_template_directory_uri().'/assets/images/thum-sm.jpg';

								} 
								
								?>

                                <li>
									<div class="entry_thumbnail">

                                    <img src="<?php echo $image_url; ?>" alt="<?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?>">

                                            </div>

                                            <h3><?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?></h3>

                                            <div class="entry_meta">

                                                <span><i class="fa fa-clock-o"></i> <?php echo get_field( 'release_date'); ?></span>

                                            </div>

                                        </li>
                                <?php if ($i%3==0) { echo '</ul></div><div class="slide"><ul>'; } ?>
                                        
					

					<?php

					$i++; endwhile;

					echo '</ul></div>';

					// Reset Query

					wp_reset_query();

					?>

                      

                                </div>

                            </aside>

<!-- Widget banner 300x250 -->

                            <aside class="widget">

                                <div class="widget_banner">

                                    <a href="http://ibubble.co/" target="_blank">

                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sms.jpg" alt="SMS">

                                    </a>

                                </div>

                            </aside>

                            <?php dynamic_sidebar('sidebar-twitter'); ?>

                            <!-- Widget timeline -->

                            <aside class="widget">

                                <h3 class="widget_title">Price Chat</h3>

                                <div class="widget_timeline_posts">

                                    <?php echo do_shortcode( '[gold-price]' ); ?>

                                </div>  

                            </aside>

                            <aside class="widget">

                                <div class="widget_timeline_posts">

                                    <iframe width="auto" height="30" frameborder="0" scrolling="no" src="http://www.appuonline.com/nseindices-ticker.html">

	</iframe>

	<iframe width="auto" height="30" frameborder="0" scrolling="no" src="http://www.appuonline.com/data/nse-ticker.html">

    </iframe>

                                </div>

                            </aside>

                        </div>

                    </div>                    

                </div>

            </div>

            

            <!-- Wild container -->

            <div class="wild_conatiner">

                <div class="container">

                    <!-- Section title -->

                    <h5 class="title_section"><a href="?cat=15"><?php echo get_cat_name(15);?></a></h5>

                    <!-- Article grid view -->

                    <div class="row article_standard_view">

                    

                    <?php

					// The Query

					query_posts( array(  'category_name' => 'entertainment', 'posts_per_page' => 4 ));

					// The Loop

					while ( have_posts() ) : the_post();

					?>

                    <?php if ( has_post_thumbnail() ) {

						$image_url = wp_get_attachment_url( get_post_thumbnail_id() );

					}else{

						$image_url = get_template_directory_uri().'/assets/images/thum-md.jpg';

					} ?>

                    

                    <div class="col col_3_of_12">

                            <article class="item">

                                <div class="item_header">

                                    <a href="<?php the_permalink(); ?>"><img src="<?php echo $image_url; ?>" alt="<?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?>"></a>

                                </div>

                                <div class="item_content">

                                    <h3><a href="<?php the_permalink(); ?>"><?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?></a></h3>

                                </div>

                            </article>

                        </div>

					<?php

					endwhile;

		

					// Reset Query

					wp_reset_query();

					?>

                    </div>

                </div>

            </div>

            

            <!-- Container -->

            <div class="container">

                <div class="row">     

                    <!-- Sidebar area -->

                    <div class="col col_4_of_12 sidebar_area">

                        <div class="theiaStickySidebar">

                            

                            <!-- Widget recent posts -->

                             <?php dynamic_sidebar('sidebar-facebook'); ?>

                            <!-- Widget tag cloud -->

                            <aside class="widget widget_tag_cloud">

                                <h3 class="widget_title"><span>Tag cloud</span></h3>

									<div class="tagcloud"><?php $args = array( 'taxonomy' => array( 'post_tag', 'category' ),);

									wp_tag_cloud( $args );

									?></div>

                            </aside>

                        </div>

                    </div>       

                    <!-- Main content -->

                    <div class="col col_8_of_12 main_content">

                        <div class="row">

                            <div class="col col_6_of_12">
                            	<h5 class="title_section"><a href="?cat=17"><?php echo get_cat_name(17);?></a></h5> 

                                <!-- Article list view -->

                                <div class="article_tiny_view">

                                

                                <?php

					// The Query

					query_posts( array( 'category_name' => 'beauty-fashion', 'posts_per_page' => 4 ));

					// The Loop

					while ( have_posts() ) : the_post();

					?>

                    <?php if ( has_post_thumbnail() ) {

						$image_url = wp_get_attachment_url( get_post_thumbnail_id() );

					}else{

						$image_url = get_template_directory_uri().'/assets/images/thum-sm.jpg';

					} ?>

					<article class="item">

                                        <div class="item_header">

                                            <a href="<?php the_permalink(); ?>"><img src="<?php echo $image_url; ?>" alt="<?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?>"></a>

                                        </div>

                                        <div class="item_content">

                                            <h3><a href="<?php the_permalink(); ?>"><?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?></a></h3>

                                            <div class="item_post_share">

                                        <span class="item_post_share_button"><i class="fa fa-share-square-o"></i></span>

                                        <div class="item_post_share_content">
<span class='st_sharethis' displayText=''></span>
<span class='st_facebook' displayText=''></span>
<span class='st_twitter' displayText=''></span>
<span class='st_whatsapp' displayText=''></span>
<span class='st_pinterest' displayText=''></span>
<span class='st_email' displayText=''></span>
</div>

                                    </div>

                                        </div>

                                    </article>

					<?php

					endwhile;

		

					// Reset Query

					wp_reset_query();

					?>

                    

                                </div>
                                
                                <h4 class="more_section"><a href="?cat=17">More</a></h4>

                            </div>

                            <div class="col col_6_of_12">
                            <h5 class="title_section"><a href="?cat=11"><?php echo get_cat_name(11);?></a></h5> 

                                <!-- Article list view -->

                                <div class="article_tiny_view">

                                

                                <?php

					// The Query

					query_posts( array( 'category_name' => 'life-style', 'posts_per_page' => 4 ));

					// The Loop

					while ( have_posts() ) : the_post();

					?>

                    <?php if ( has_post_thumbnail() ) {

						$image_url = wp_get_attachment_url( get_post_thumbnail_id() );

					}else{

						$image_url = get_template_directory_uri().'/assets/images/thum-sm.jpg';

					} ?>

					<article class="item">

                                        <div class="item_header">

                                            <a href="<?php the_permalink(); ?>"><img src="<?php echo $image_url; ?>" alt="<?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?>"></a>

                                        </div>

                                        <div class="item_content">

                                            <h3><a href="<?php the_permalink(); ?>"><?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?></a></h3>

                                            <div class="item_post_share">

                                        <span class="item_post_share_button"><i class="fa fa-share-square-o"></i></span>

                                        <div class="item_post_share_content">
<span class='st_sharethis' displayText=''></span>
<span class='st_facebook' displayText=''></span>
<span class='st_twitter' displayText=''></span>
<span class='st_whatsapp' displayText=''></span>
<span class='st_pinterest' displayText=''></span>

<span class='st_email' displayText=''></span>
</div>

                                    </div>

                                        </div>

                                    </article>

					<?php

					endwhile;

		

					// Reset Query

					wp_reset_query();

					?>

                    

                                </div>
							<h4 class="more_section"><a href="?cat=11">More</a></h4>
                            
                            </div>

                        </div>
                        
                        <div class="woocommerce-tabs">
                                <div class="tab_group ui-tabs ui-widget ui-widget-content ui-corner-all">
                                    <ul class="ui-tabs-nav" role="tablist">
                                        <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabs-1" aria-labelledby="ui-id-5" aria-selected="true" aria-expanded="true"><a href="#tabs-1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-5"><?php echo get_cat_name(16);?></a></li>
                                        <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-2" aria-labelledby="ui-id-6" aria-selected="false" aria-expanded="false"><a href="#tabs-2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-6"><?php echo get_cat_name(12);?></a></li>
                                         <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-3" aria-labelledby="ui-id-7" aria-selected="false" aria-expanded="false"><a href="#tabs-3" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-7"><?php echo get_cat_name(9);?></a></li>
                                         <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-4" aria-labelledby="ui-id-8" aria-selected="false" aria-expanded="false"><a href="#tabs-4" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-8"><?php echo get_cat_name(18);?></a></li>
                                          <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-5" aria-labelledby="ui-id-9" aria-selected="false" aria-expanded="false"><a href="#tabs-5" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-9"><?php echo get_cat_name(14);?></a></li>
                                          <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-6" aria-labelledby="ui-id-10" aria-selected="false" aria-expanded="false"><a href="#tabs-6" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-10"><?php echo get_cat_name(4);?></a></li>
                                    </ul>
                                    <div id="tabs-1" aria-labelledby="ui-id-5" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="false" style="display: block;">
                                        <div class="article_tiny_view">

                                

                                <?php

					// The Query

					query_posts( array( 'category_name' => 'education', 'posts_per_page' => 4 ));

					// The Loop

					while ( have_posts() ) : the_post();

					?>

                    <?php if ( has_post_thumbnail() ) {

						$image_url = wp_get_attachment_url( get_post_thumbnail_id() );

					}else{

						$image_url = get_template_directory_uri().'/assets/images/thum-sm.jpg';

					} ?>

					<article class="item">

                                        <div class="item_header">

                                            <a href="<?php the_permalink(); ?>"><img src="<?php echo $image_url; ?>" alt="<?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?>"></a>

                                        </div>

                                        <div class="item_content">

                                            <h3><a href="<?php the_permalink(); ?>"><?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?></a></h3>

                                            <div class="item_post_share">

                                        <span class="item_post_share_button"><i class="fa fa-share-square-o"></i></span>

                                        <div class="item_post_share_content">
<span class='st_sharethis' displayText=''></span>
<span class='st_facebook' displayText=''></span>
<span class='st_twitter' displayText=''></span>
<span class='st_whatsapp' displayText=''></span>
<span class='st_pinterest' displayText=''></span>
<span class='st_email' displayText=''></span>
</div>

                                    </div>

                                        </div>

                                    </article>

					<?php

					endwhile;

		

					// Reset Query

					wp_reset_query();

					?>

                    

                                </div>
                                		<h4 class="more_section"><a href="?cat=16">More</a></h4>
                                    </div>
                                    <div id="tabs-2" aria-labelledby="ui-id-6" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" style="display: none;" aria-hidden="true">
                                      <div class="article_tiny_view">

                                

                                <?php

					// The Query

					query_posts( array( 'category_name' => 'science', 'posts_per_page' => 4 ));

					// The Loop

					while ( have_posts() ) : the_post();

					?>

                    <?php if ( has_post_thumbnail() ) {

						$image_url = wp_get_attachment_url( get_post_thumbnail_id() );

					}else{

						$image_url = get_template_directory_uri().'/assets/images/thum-sm.jpg';

					} ?>

					<article class="item">

                                        <div class="item_header">

                                            <a href="<?php the_permalink(); ?>"><img src="<?php echo $image_url; ?>" alt="<?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?>"></a>

                                        </div>

                                        <div class="item_content">

                                            <h3><a href="<?php the_permalink(); ?>"><?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?></a></h3>

                                            <div class="item_post_share">

                                        <span class="item_post_share_button"><i class="fa fa-share-square-o"></i></span>

                                        <div class="item_post_share_content">
<span class='st_sharethis' displayText=''></span>
<span class='st_facebook' displayText=''></span>
<span class='st_twitter' displayText=''></span>
<span class='st_whatsapp' displayText=''></span>
<span class='st_pinterest' displayText=''></span>
<span class='st_email' displayText=''></span>
</div>

                                    </div>

                                        </div>

                                    </article>

					<?php

					endwhile;

		

					// Reset Query

					wp_reset_query();

					?>

                    

                                </div>
                                	  <h4 class="more_section"><a href="?cat=12">More</a></h4>
                                    </div>
                                    <div id="tabs-3" aria-labelledby="ui-id-7" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" style="display: none;" aria-hidden="true">
                                       <div class="article_tiny_view">

                                

                                <?php

					// The Query

					query_posts( array( 'category_name' => 'recipe', 'posts_per_page' => 4 ));

					// The Loop

					while ( have_posts() ) : the_post();

					?>

                    <?php if ( has_post_thumbnail() ) {

						$image_url = wp_get_attachment_url( get_post_thumbnail_id() );

					}else{

						$image_url = get_template_directory_uri().'/assets/images/thum-sm.jpg';

					} ?>

					<article class="item">

                                        <div class="item_header">

                                            <a href="<?php the_permalink(); ?>"><img src="<?php echo $image_url; ?>" alt="<?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?>"></a>

                                        </div>

                                        <div class="item_content">

                                            <h3><a href="<?php the_permalink(); ?>"><?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?></a></h3>

                                            <div class="item_post_share">

                                        <span class="item_post_share_button"><i class="fa fa-share-square-o"></i></span>

                                        <div class="item_post_share_content">
<span class='st_sharethis' displayText=''></span>
<span class='st_facebook' displayText=''></span>
<span class='st_twitter' displayText=''></span>
<span class='st_whatsapp' displayText=''></span>
<span class='st_pinterest' displayText=''></span>
<span class='st_email' displayText=''></span>
</div>

                                    </div>

                                        </div>

                                    </article>

					<?php

					endwhile;

		

					// Reset Query

					wp_reset_query();

					?>

                    

                                </div>
                                	  <h4 class="more_section"><a href="?cat=9">More</a></h4>
                                    </div>
                                    <div id="tabs-4" aria-labelledby="ui-id-8" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" style="display: none;" aria-hidden="true">
                                      <div class="article_tiny_view">

                                

                                <?php

					// The Query

					query_posts( array( 'category_name' => 'health', 'posts_per_page' => 4 ));

					// The Loop

					while ( have_posts() ) : the_post();

					?>

                    <?php if ( has_post_thumbnail() ) {

						$image_url = wp_get_attachment_url( get_post_thumbnail_id() );

					}else{

						$image_url = get_template_directory_uri().'/assets/images/thum-sm.jpg';

					} ?>

					<article class="item">

                                        <div class="item_header">

                                            <a href="<?php the_permalink(); ?>"><img src="<?php echo $image_url; ?>" alt="<?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?>"></a>

                                        </div>

                                        <div class="item_content">

                                            <h3><a href="<?php the_permalink(); ?>"><?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?></a></h3>

                                            <div class="item_post_share">

                                        <span class="item_post_share_button"><i class="fa fa-share-square-o"></i></span>

                                        <div class="item_post_share_content">
<span class='st_sharethis' displayText=''></span>
<span class='st_facebook' displayText=''></span>
<span class='st_twitter' displayText=''></span>
<span class='st_whatsapp' displayText=''></span>
<span class='st_pinterest' displayText=''></span>
<span class='st_email' displayText=''></span>
</div>

                                    </div>

                                        </div>

                                    </article>

					<?php

					endwhile;

		

					// Reset Query

					wp_reset_query();

					?>

                    

                                </div>
                                	  <h4 class="more_section"><a href="?cat=18">More</a></h4>
                                    </div>
                                    <div id="tabs-5" aria-labelledby="ui-id-9" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" style="display: none;" aria-hidden="true">
                                      <div class="article_tiny_view">

                                

                                <?php

					// The Query

					query_posts( array( 'category_name' => 'good-news', 'posts_per_page' => 4 ));

					// The Loop

					while ( have_posts() ) : the_post();

					?>

                    <?php if ( has_post_thumbnail() ) {

						$image_url = wp_get_attachment_url( get_post_thumbnail_id() );

					}else{

						$image_url = get_template_directory_uri().'/assets/images/thum-sm.jpg';

					} ?>

					<article class="item">

                                        <div class="item_header">

                                            <a href="<?php the_permalink(); ?>"><img src="<?php echo $image_url; ?>" alt="<?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?>"></a>

                                        </div>

                                        <div class="item_content">

                                            <h3><a href="<?php the_permalink(); ?>"><?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?></a></h3>

                                            <div class="item_post_share">

                                        <span class="item_post_share_button"><i class="fa fa-share-square-o"></i></span>

                                        <div class="item_post_share_content">
<span class='st_sharethis' displayText=''></span>
<span class='st_facebook' displayText=''></span>
<span class='st_twitter' displayText=''></span>
<span class='st_whatsapp' displayText=''></span>
<span class='st_pinterest' displayText=''></span>
<span class='st_email' displayText=''></span>
</div>

                                    </div>

                                        </div>

                                    </article>

					<?php

					endwhile;

		

					// Reset Query

					wp_reset_query();

					?>

                    

                                </div>
                                	  <h4 class="more_section"><a href="?cat=14">More</a></h4>
                                    </div>
                                    <div id="tabs-6" aria-labelledby="ui-id-10" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" style="display: none;" aria-hidden="true">
                                       <div class="article_tiny_view">

                                

                                <?php

					// The Query

					query_posts( array( 'category_name' => 'spiritual', 'posts_per_page' => 4 ));

					// The Loop

					while ( have_posts() ) : the_post();

					?>

                    <?php if ( has_post_thumbnail() ) {

						$image_url = wp_get_attachment_url( get_post_thumbnail_id() );

					}else{

						$image_url = get_template_directory_uri().'/assets/images/thum-sm.jpg';

					} ?>

					<article class="item">

                                        <div class="item_header">

                                            <a href="<?php the_permalink(); ?>"><img src="<?php echo $image_url; ?>" alt="<?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?>"></a>

                                        </div>

                                        <div class="item_content">

                                            <h3><a href="<?php the_permalink(); ?>"><?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?></a></h3>

                                            <div class="item_post_share">

                                        <span class="item_post_share_button"><i class="fa fa-share-square-o"></i></span>

                                        <div class="item_post_share_content">
<span class='st_sharethis' displayText=''></span>
<span class='st_facebook' displayText=''></span>
<span class='st_twitter' displayText=''></span>
<span class='st_whatsapp' displayText=''></span>
<span class='st_pinterest' displayText=''></span>
<span class='st_email' displayText=''></span>
</div>

                                    </div>

                                        </div>

                                    </article>

					<?php

					endwhile;

		

					// Reset Query

					wp_reset_query();

					?>

                    

                                </div>
                                	  <h4 class="more_section"><a href="?cat=4">More</a></h4>
                                    </div>
                                </div>
                            </div>

                    </div> 