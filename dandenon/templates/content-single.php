<?php while (have_posts()) : the_post(); ?>
<div class="blog-post">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php if (has_post_thumbnail()){ ?>
    <img class="img-responsive" style="width:100%;" src="<?php the_post_thumbnail_url(); ?>">
    <?php } ?>
    <div class="blog-post-meta">
      <div class="date"><?php the_time('d'); ?><span><?php the_time('M'); ?></span></div>
  <ul>
    <li><a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>"><i class="fa fa-user" aria-hidden="true"></i> <?= get_the_author(); ?></a></li>
    <?php
    $posts = get_posts();
    $count = count($posts);
    ?>
    <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $count; ?> Views</a></li>
    <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> <?php comments_number( 'no responses', 'one Comment', '% Comments' ); ?></a></li>
  </ul>
<?php if(function_exists('the_views')) { the_views(); } ?>
    </div>
    <?php the_content(); ?>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
    </div>
<?php endwhile; ?>