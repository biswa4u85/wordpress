<?php
/**
 * Template Name: Faq Template
 */
?>
<!-- Body area Start -->


<div class="container">
      <div class="main-paint-form">
            
            <ul class="nav nav-pills nav-justified">
            <?php $i=0; foreach (get_terms('faqtypes', array('hide_empty' => true) ) as $cat) : ?>
                <li class="<?php if($i == 0) { echo 'active';} ?>"><a data-toggle="tab" href="#menu_<?php echo $i; ?>"><?php echo $cat->name; ?></a></li>
            <?php $i++; endforeach; ?>
              </ul>
          <div class="faq-box">
              <div class="row">
                  <div class="col-sm-12">  
                    <h1>FAQ's</h1>
                <div class="tab-content">

                  <?php $i=0; foreach (get_terms('faqtypes', array('hide_empty' => true) ) as $cat) : ?>
                  <div id="menu_<?php echo $i; ?>" class="tab-pane fade in <?php if($i == 0) { echo 'active';} ?>">
                      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                      <?php $posts = new WP_Query( array('tax_query' => array(array('taxonomy' => 'faqtypes','field' => 'term_id','terms' => $cat->term_id)),'post_type' => 'faq')); ?>
                      <?php $j=0; while($posts->have_posts()) : $posts->the_post(); ?>

                          <div class="panel panel-default">
                              <div class="panel-heading" role="tab" id="heading_<?php echo $i . '_' . $j; ?>">
                                  <h4 class="panel-title">
                                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_<?php echo $i . '_' . $j; ?>" aria-expanded="false" aria-controls="collapse_<?php echo $i . '_' . $j; ?>">
                                          <i class="more-less glyphicon glyphicon-plus"></i>
                                          <?php the_title(); ?>
                                      </a>
                                  </h4>
                              </div>
                              <div id="collapse_<?php echo $i . '_' . $j; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_<?php echo $i . '_' . $j; ?>">
                                  <div class="panel-body">
                                  <?php the_content(); ?>
                                  </div>
                              </div>
                          </div>
                          <?php $j++; endwhile; ?>
                  
                      </div> 
                    </div> 
                    <?php $i++; endforeach; ?> 


                    </div>            
                   </div> 
              </div>
          </div>
    </div>
  </div>