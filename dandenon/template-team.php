<?php
/**
 * Template Name: Team Template
 */ 
 $cId = $_GET['cId'];
 $pId = $_GET['pId'];
?>
<!-- Body area Start -->





<div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 space-right">
        <div class="main-team-left">
            <div class="panel-group pnnel-main-team" id="accordion">
               
            <?php $i=0; foreach (get_terms('types', array('hide_empty' => true) ) as $cat) : ?>
            <div class="panel panel-default team-pannel">
                  <div class="panel-heading team-pannel-heding">
                    <h4 class="panel-title pannel-title-team">
                    <a class="accordion-toggle " aria-expanded="<?php if ($cId){if($cId == $cat->term_id){echo 'true';}} elseif($i==0){echo 'true';}?>" data-toggle="collapse" data-parent="#accordion" href="#collapseOne_<?php echo $cat->term_id; ?>">
                    <?php echo $cat->name; ?>
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne_<?php echo $cat->term_id; ?>" class="panel-collapse collapse <?php if ($cId){if($cId == $cat->term_id){echo 'in';}} elseif($i==0){echo 'in';}?>">
                    <div class="panel-body team-pannel-body">

                    <?php $posts = new WP_Query( array('tax_query' => array(array('taxonomy' => 'types','field' => 'term_id','terms' => $cat->term_id)),'post_type' => 'team')); ?>
                    <ul id="<?php echo 'accordionMain_' . $cat->term_id; ?>" class="team-side-profile">
                      <?php $j=0; while($posts->have_posts()) : $posts->the_post();
                      $meta = get_post_meta( $post->ID, '_team_option_meta', true );
                      if($meta){
                        $options = $meta['webnus_page_options'][0];
                      }
                       ?>
                          <li onclick="updateContainTeam('<?php echo $cat->term_id; ?>','<?php echo $i; ?>','<?php echo $j; ?>')" id="<?php echo 'accordion_' . $cat->term_id . '_' . $i . '_' . $j; ?>" class="<?php if ($pId){if($pId == $post->ID){echo 'active';}} elseif($j==0){echo 'active';}?>"><a>
                          <?php if($options['ProfileBg']){ ?>
                          <img class="img-circle" src="<?php echo $options['ProfileBg'] ?>">
                          <?php } else { ?>
                            <img class="img-circle" src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/office.png" alt="img">
                          <?php } ?>
                        <?php the_title(); ?></a></li>
                      <?php $j++; endwhile; ?>
                  </ul>
                  <?php wp_reset_postdata(); ?>
                    </div>
                  </div>
                  
                </div>
                <?php $i++; endforeach; ?>
              </div>
        </div>
        

      </div>
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        <div id="contenMain"  class="main-team">
        <?php $i=0; foreach (get_terms('types', array('hide_empty' => true) ) as $cat) : ?>
        <?php $posts = new WP_Query( array('tax_query' => array(array('taxonomy' => 'types','field' => 'term_id','terms' => $cat->term_id)),'post_type' => 'team')); ?>
        <?php $j=0; while($posts->have_posts()) : $posts->the_post(); 
          $meta = get_post_meta( $post->ID, '_team_option_meta', true );
          if($meta){
            $options = $meta['webnus_page_options'][0];
          }
        ?>
                 <div id="<?php echo 'conten_' . $cat->term_id . '_' . $i . '_' . $j; ?>" class="<?php if ($pId){if($pId == $post->ID){echo 'active';}} elseif($i==0 && $j==0){echo 'active';}?>">
                 <div class="row">
            <div class="main-profile-part">
              <div class="xol-xs-12 col-sm-5 col-md-5 col-lg-5">
              <?php if($options['ProfileBg']){ ?>
                <img src="<?php echo $options['ProfileBg']; ?>" alt="profile" class="img-responsive profile-img img-circle"> 
              <?php } ?>
              </div>
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                  <div class="team-profile-text"> 
                    <div class="team-profile-text-title">
                      <h4><?php the_title(); ?></h4>
                      
                    </div>
                  <div class="team-profile-sub-text">
                  <?php if($options['qualifications']){ ?>
                    <h4>Qualifications - <span><?php echo $options['qualifications']; ?></span></h4>
                    <?php } ?>
                    <?php if($options['languages']){ ?>
                    <h4>Languages Known -<span> <?php echo $options['languages']; ?></span></h4>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div> 
          </div>   
          <hr>
          <?php the_content(); ?>
                </div>
              <?php $j++; endwhile; ?>
              <?php  wp_reset_postdata(); ?>
              <?php $i++; endforeach; ?>
          </div>
        </div>
    </div>
</div>