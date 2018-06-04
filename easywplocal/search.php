<?php
/**
 * Search Results Template
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
  <div class="row-fluid show-grid article-box">
      <div class="span8">
      <div class="conten-shep">
            <?php if (have_posts()) : ?>

    		  <?php while (have_posts()) : the_post(); ?>
                <div class="row-fluid">
                        <h3><?php the_title();?></h3>
                        <p class="meta">
                        	<em><?php the_date(); ?></em>
                            <?php if ( comments_open() ) : ?>
								| <span><?php comments_popup_link( '' . __( 'Leave a reply', 'twentytwelve' ) . '', __( '1 Reply', 'twentytwelve' ), __( '% Replies', 'twentytwelve' ) ); ?></span>
							<?php endif; // comments_open() ?>
                        </p>
                        <?php the_excerpt(); ?>
                        <p><a href="<?php the_permalink(); ?>" title="<?php the_title();?>">Read More</a></p>
            </div>
             <?php endwhile; ?>

            <?php else : ?>
                        <h1><?php _e('No Results Found', 'bootstrapwp'); ?></h1>
                        <p class="lead">
                            <?php _e(
                                'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps you should try again with a different search term.',
                                'bootstrapwp'); ?>
                        </p>
                        <div class="well">
                            <?php get_search_form(); ?>
                        </div><!--/.well -->
             <?php endif;?>
</div>
    </div><!-- /.span8 -->

    <?php get_sidebar('blog'); ?>
</div> 
    

<?php get_footer(); ?>