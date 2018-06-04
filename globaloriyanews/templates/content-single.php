<?php while (have_posts()) : the_post(); ?>
  <!-- Main content -->
                    <div class="col col_8_of_12 main_content">
                        <!-- Breadcrumb -->
                        <div class="breadcrumb">
                            <ul class="clearfix">
                                <li><a href="<?= esc_url(home_url('/')); ?>">Home</a></li>
                                <li><?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?></li>
                            </ul>
                        </div>
                        <!-- Article -->
                        <article class="post">
                            <!-- Post header -->
                            <header class="post_header">
                                <h1><?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?></h1>
                            </header>
                            <!-- Main content -->
                            <div class="post_main_container">
                                <!-- Post content -->
                                <?php if ( has_post_thumbnail() ) {

						$image_url = wp_get_attachment_url( get_post_thumbnail_id() );

					}else{

						$image_url = get_template_directory_uri().'/assets/images/thum-sm.jpg';

					} ?>
								<p><img alt="<?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?>" src="<?php echo $image_url; ?>"></p>
								<?php the_content(); ?>
                                <div class="item_post_share">

                                        

<div class="item_post_share_content">
<span class='st_sharethis' displayText=''></span>
<span class='st_facebook' displayText=''></span>
<span class='st_twitter' displayText=''></span>
<span class='st_whatsapp' displayText=''></span>
<span class='st_pinterest' displayText=''></span>
<span class='st_email' displayText=''></span>
</div>

                                    </div>
								<?php //wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
                            </div>
                            
                        </article>


<div class="relatedposts">
<h1>Related posts</h3>
<?php
 $args=array(
'tag__in' => $tag_ids,
'post__not_in' => array($post->ID),
'showposts'=>5, // get all the posts at once, then split them up afterwards.
'ignore_sticky_posts' => 1
 );
$posts_per_block = 4;
$my_query = new wp_query($args); ?>
<?php
if( $my_query->have_posts() ) : while ($my_query->have_posts()) : $my_query->the_post();
?>
<div class="article_list_view"><?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?></div>
<?php
endwhile; endif;
?>
</div>
</div>
<!-- Sidebar area -->
<?php endwhile; ?>