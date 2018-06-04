                        <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; top: 65px; left: 858.5px;">
<aside class="widget">
<!-- GON -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7181367215079092"
     data-ad-slot="9286441944"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</aside>
<!-- Widget gallery -->
                            <aside class="widget">
                                <h3 class="widget_title"><span>Top News</span></h3>
                                <div class="widget_gallery_post">
                                    
                                    <?php

					// The Query

					query_posts( array( 'category_name' => 'top-10-news',  'posts_per_page' => 10 ));

					// The Loop

					while ( have_posts() ) : the_post();

					?>

                    <?php if ( has_post_thumbnail() ) {

						$image_url = wp_get_attachment_url( get_post_thumbnail_id() );

					}else{

						$image_url = get_template_directory_uri().'/assets/images/thum-sm.jpg';

					} ?>

                  <div class="slide">
                                        <a href="<?php the_permalink(); ?>"><img alt="<?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?>" src="<?php echo $image_url; ?>"></a>
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

					endwhile;

		

					// Reset Query

					wp_reset_query();

					?>
                                </div>
                            </aside>
                            <!-- Widget comments -->
                            <aside class="widget">
                                <h3 class="widget_title"><span>Popular posts</span></h3>
                                <div class="widget_post_comments">
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
                                            <img alt="<?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?>" src="<?php echo $image_url; ?>">
                                            <div class="item_content">
                                                <h3><a href="<?php the_permalink(); ?>"><?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?></a></h3>
                                                <span>Catagory</span>
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
                            
                            <!-- Widget recent posts -->
                            <aside class="widget">
                                <h3 class="widget_title">Recent posts</h3>
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

                                                <a href="post_standard.html"><img src="<?php echo $image_url; ?>" alt="<?php 
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
                            <!-- Widget tag cloud -->
                            <aside class="widget widget_tag_cloud">

                                <h3 class="widget_title"><span>Tag cloud</span></h3>

									<div class="tagcloud"><?php $args = array( 'taxonomy' => array( 'post_tag', 'category' ),);

									wp_tag_cloud( $args );

									?></div>

                            </aside>
                            <!-- Widget banner 125x125 -->
                            <aside class="widget">

                                <div class="widget_banner">

                                    <a href="http://call4peon.com/" target="_blank">

                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sm-banner.png" alt="call4peon">

                                    </a>

                                </div>

                            </aside>
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
<?php //dynamic_sidebar('sidebar-primary'); ?>