<section class="section-padding sec-pat-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="sec-header sec-header2">
                            <h2><?php echo ot_get_option('all_media_work_title'); ?></h2>
                            <small><?php echo ot_get_option('all_media_work_contain'); ?></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="project-filter text-uppercase">
                            <ul class="list-inline text-center">
                            <li class="active" data-filter="*">All</li>
                            <?php
                            $terms = get_terms( 'types' );
                            $count = count( $terms );
                            if ( $count > 0 ) {
                                foreach ( $terms as $term ) {
                                    echo '<li data-filter=".' . $term->slug . '">' . $term->name . '</li>';
                                }
                            }

                            ?>
                            </ul>
                        </div>
                        <div class="project-items margin-top30">
                            <ul class="gallery clearfix">

                                <?php 
                                $args = array('post_type' =>  array('post' => 'work'));
                                $the_query = new WP_Query( $args );
                                if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                                ?>
                                
                                <?php if (has_post_thumbnail()){ ?>
                                <li class="project-item <?php foreach(get_the_terms($post->ID, 'types') as $term)
                                echo $term->slug . ' '; ?>"> <a href="<?php the_post_thumbnail_url(); ?>" rel="prettyPhoto[gallery1]" title="<?php the_title(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive"> </a></li>
                                <?php } ?>

                                <?php endwhile; else: ?>
                                <p>Nothing Here.</p>
                                <?php endif; wp_reset_postdata(); ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>