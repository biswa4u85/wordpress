
            <div class="blog-right-sidebar">
              <div class="blog-search-box space-bottom-50 clearfix">
                <form role="search" method="get" action="<?= esc_url(home_url('/')); ?>">
                  <input type="text" name="s" id="s" class="form-control" placeholder="Search">
                  <button type="submit" class="btn btn-default btn-submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
              </div>
              <!-- Category -->
              <div class="cat blog-widget space-bottom-50">
                <h3>CATEGORIES</h3>
                <ul class="b-list-items">
                <?php 
                $categories = get_categories();
                foreach ($categories as $cat) {
                    echo '<li><a href="?cat='.$cat->term_id.'">'.$cat->name.' <span>('.$cat->category_count.')</span></a></li>';
                }
                ?>
                </ul>
              </div>

              <!-- Recent Post -->
              <div class="recent-post blog-widget space-bottom-50">
                <h3>Recent Post</h3>

                <?php 
          $args = array('post_type' => 'post', 'posts_per_page' => '3');
          $the_query = new WP_Query( $args );
          if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
?>

<div class="media space-top-10">
                  <div class="media-left">
                    <a href="<?php the_permalink(); ?>">
              <img class="media-object" style="width:100px;" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            </a>
                  </div>
                  <div class="media-body">
                    <p><?php echo substr(strip_tags($post->post_content), 0, 60);?> </p>
                    <span><?php the_time('M'); ?> <?php the_time('d'); ?>, <?php the_time('Y'); ?></a> </span>
                  </div>
                </div>

          <?php endwhile; else: ?>
          <div class="col-xs-12 col-md-12">Nothing Here.</div>
          <?php endif; wp_reset_postdata(); ?>
              </div>

              <!-- Archives -->
              <div class="archives blog-widget space-bottom-50">
                <h3>Archives</h3>
                <ul class="b-list-items">
                <?php 
                $my_archives=wp_get_archives(array(
                    'type'=>'monthly', 
                    'show_post_count'=>true, 
                    'limit'=>20, 
                    'post_type'=>'post', 
                    'format'=>'html' 
                ));
                    
                echo $my_archives;

                ?>
                </ul>
              </div>

              <!-- Popular Tags -->
              <?php if ( function_exists( 'wp_tag_cloud' ) ) : ?>    
                <div class="popular-tags blog-widget space-bottom-50">
                <h3>Popular Tags</h3>
                <ul>
                <li><?php wp_tag_cloud( 'smallest=8&largest=22' ); ?></li>
                </ul>    
                <?php endif; ?>
                </ul>
              </div>

            </div>