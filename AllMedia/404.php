<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<section class="section-padding">
    <div class="container">

            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="alert alert-warning">
                      <?php _e('Sorry, but the page you were trying to view does not exist.', 'roots'); ?>
                    </div>

                    <p><?php _e('It looks like this was the result of either:', 'roots'); ?></p>
                    <ul>
                      <li><?php _e('a mistyped address', 'roots'); ?></li>
                      <li><?php _e('an out-of-date link', 'roots'); ?></li>
                    </ul>

                    <?php get_search_form(); ?>
               </div> 
            </div>

    </div>
</section>