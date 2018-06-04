 
<article class="item">
                                <div class="item_header">
                                <?php if ( has_post_thumbnail() ) {

						$image_url = wp_get_attachment_url( get_post_thumbnail_id() );

					}else{

						$image_url = get_template_directory_uri().'/assets/images/thum-sm.jpg';

					} ?> 
                                    <a href="<?php the_permalink(); ?>">
                <img alt="<?php 
									$odia_title = get_field( 'odia_title');
									if($odia_title) {
									echo $odia_title;
									} else {
									the_title();
									}
									?>" src="<?php echo $image_url; ?>">
            </a>
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
                                    <div class="entry_meta">
                                        <span><i class="fa fa-clock-o"></i> <?php the_time('l, F jS, Y') ?></span>
                                    </div>
                                    <?php $release = get_field( 'release_date'); ?>
<?php if ($release) { ?>
<p>Release Date : <i class="fa fa-clock-o"></i> <?php echo $release; ?></p>
<?php } else { ?>
<?php the_excerpt(); ?>
<?php } ?>
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