<section class="section-padding">
    <div class="container">

            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12">
                  <?php while (have_posts()) : the_post(); ?>
                    <article <?php post_class(); ?>>
                        <h1><span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></h1>
                        <div class="featured-image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <?php the_content(); ?>
                        <div class="blog-header">
                            <?php get_template_part('templates/entry-meta'); ?>
                        </div>
                        <div class="tags">
                            <?php echo get_the_tag_list(__("Tags : ","xylus_themes"),' ', ''); ?>
                        </div>
                    <?php comments_template('/templates/comments.php'); ?>
                    </article>
                <?php endwhile; ?>
               </div>  
            </div>

    </div>
</section>