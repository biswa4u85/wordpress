<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<section class="section-padding">
    <div class="container">
    		<div class="service-box text-center">
                            <span class="<?php echo get_post_meta($post->ID, "_Icon", true); ?>"></span>
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo get_post_meta($post->ID, "_Details", true); ?></p>
                        </div>
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12">
                  <?php while (have_posts()) : the_post(); ?>
                    <article <?php post_class(); ?>>
                        <div class="featured-image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <?php the_content(); ?>
                    </article>
                <?php endwhile; ?>
               </div>  
            </div>

    </div>
</section>