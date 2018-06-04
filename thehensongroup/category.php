<?php
/**
 * The template for displaying Category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<section id="dnn_content">
        	<div class="dnn_layout">
              <div class="content_mid clearfix">
                 <div class="pane_layout">
                  <div class="row">
                      <div class="col-sm-12">
                      <div class="TopPane">
                      <div class="DnnModule DnnModule-DNN_HTML DnnModule-443">
                        <div class="Container-18"> 

			<?php if ( have_posts() ) : ?>

				<div class="dnntitle">
                            <span class="title12"><?php printf( __( 'Category Archives: %s', 'twentyfourteen' ), single_cat_title( '', false ) ); ?>
                            </span>
                            <div class="line"></div>
                          </div>

				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>

			<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

					endwhile;
					// Previous/next page navigation.
					twentyfourteen_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>
		</div>
                  </div>
                 </div>
                </div>
              </div>
            </div>
           </div>
          </div>
      </section>

<?php
get_footer();
