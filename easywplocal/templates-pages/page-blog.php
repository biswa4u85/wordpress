<?php
/**
 * Template Name: Page - Blog Template
 * Description: Displays blog posts with pagination and featured image.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>

  <div class="row-fluid show-grid article-box">
      <div class="span8"><div class="conten-shep">
     	<?php
$args = array( 'posts_per_page' => 10, 'order'=> 'ASC', 'orderby' => 'title' );
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post ); ?> 
	<div>
		<h1><?php the_title(); ?></h1>
		<?php the_excerpt(); ?>
        <em><?php the_date(); ?></em>
	</div>
<?php
endforeach; 
wp_reset_postdata();
?>
     </div></div>

    <?php get_sidebar(); ?>
</div>

    <?php get_footer(); ?>