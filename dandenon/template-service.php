<?php
/**
 * Template Name: Service Template
 */
 GLOBAL $webnus_options;
 $marketing_title = $webnus_options->webnus_marketing_title();
 $marketing_sub_title = $webnus_options->webnus_marketing_sub_title();
 $marketing_desc = $webnus_options->webnus_marketing_desc();
 $pId = $_GET['pId'];
?>
<!-- Body area Start -->
<div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="main-services">
              <div class="services-title">
                <h4>Conditions Treated</h4>             
              </div>
              <div class="services-sub">
                  <ul id="tabMain" class="services-ul-list">
                  <?php 
                    $args = array('post_type' => 'service');
                    $the_query = new WP_Query( $args );
                    if($the_query->have_posts() ) : $i=0; while ( $the_query->have_posts() ) : $the_query->the_post();
                 ?>
            
                <li onclick="updateContain('<?php echo $i; ?>')" id="<?php echo 'tabSub_' . $i ; ?>" class="<?php if ($pId){if($pId == $post->ID){echo 'active';}} elseif($i==0){echo 'active';}?>" ><a><?php the_title(); ?></a></li>

                <?php $i++; endwhile; ?>
                <?php endif; wp_reset_postdata(); ?>

                  </ul>
              </div> 
            </div>
            
			  <div class="services-slider">
                  <div class="bs-example">
                      <div id="myCarousel" class="carousel slide" data-ride="carousel">
                       
                          <!-- Wrapper for carousel items -->
                          <div class="slider-title">
                              <p>Our Doctors</p>
                              
                              <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                                  <span class="glyphicon glyphicon-chevron-left"></span>
                              </a>
                              <a class="carousel-control right" href="#myCarousel" data-slide="next">
                                  <span class="glyphicon glyphicon-chevron-right"></span>
                              </a>
                            
                            </div>
                          <div class="carousel-inner">
                          <?php $posts = new WP_Query( array('post_type' => 'team')); $i=1; $rand = rand(1,$posts->post_count); ?>
                          <?php while($posts->have_posts()) : $posts->the_post(); $terms = get_the_terms( $post->ID, 'types');
							  $meta = get_post_meta( $post->ID, '_team_option_meta', true );
          if($meta){
            $options = $meta['webnus_page_options'][0];
          }
							  ?>

                          <div class="item <?php if($i==$rand){ echo 'active'; }?>">
                          
                
                                  <div class="img-contant">
                                    <div class="col-xs-6 col-sm-6 ">
                                    <?php if($options['ProfileBg']){ ?>
                                <img src="<?php echo $options['ProfileBg']; ?>"  class="img-responsive" alt="First Slide" style="width:100%;">
                            <?php } else { ?>
                                <img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/office.png" class="img-responsive" alt="First Slide" style="width:100%;">
                            <?php } ?>
                                </div>
                                    <div class="col-xs-6 col-sm-6 slider-text">
                                       <h4><?php the_title(); ?></h4>
										<?php if($options['qualifications']){ ?>
                                       <p><?php echo $options['qualifications']; ?></p>
										<?php } ?>
										<a href="?page_id=52&cId=<?php echo $terms[0]->term_id; ?>&pId=<?php echo $post->ID ?>" class="btn slider-btn">Read More</a> 
                                    </div>
                                  </div>
                
                          </div>

                          <?php $i++; endwhile; ?>

						  </div></div></div></div>

			  
          </div>
          <div class="col-sm-8">
              <div id="contenMain" class="main-services-left">
              <?php 
                    $args = array('post_type' => 'service');
                    $the_query = new WP_Query( $args );
                    if($the_query->have_posts() ) : $i=0; while ( $the_query->have_posts() ) : $the_query->the_post();
                 ?>
                 <div id="<?php echo 'conten_' . $i ; ?>" class="<?php if ($pId){if($pId == $post->ID){echo 'active';}} elseif($i==0){echo 'active';}?>">
                    <?php the_content(); ?>
                    
                </div>
              <?php $i++; endwhile; ?>
              <?php endif; wp_reset_postdata(); ?>
          </div>
          </div>
          </div>
    </div>