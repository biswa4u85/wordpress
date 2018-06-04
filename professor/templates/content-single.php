<div class="row lstrow">
             
             <div class="col-md-12">
                 <?php while (have_posts()) : the_post(); ?>
<?php $thumUrl =  wp_get_attachment_url( get_post_thumbnail_id()); ?>
<?php if ( $thumUrl ) { ?>
<div class="dtlbook">
    <img src="<?php echo $thumUrl; ?>">  
</div>
<?php } ?>
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
<?php // comments_template('/templates/comments.php'); ?>

<?php endwhile; ?>
</div></div>