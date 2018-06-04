<?php
/**
 * Template Name: Front Template
 */

 GLOBAL $webnus_options;
 $blogTitle = $webnus_options->webnus_blog_title();
 $blogDesc = $webnus_options->webnus_blog_desc();
 $testimonialssTitle = $webnus_options->webnus_testimonialss_title();


?>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="bg-mind">
        <h2><?php echo $testimonialssTitle; ?></h2>
        <div class="btn-1">
            <div class="btn-main">        
                  <span class="carbon-wrap-1">
                  <a href="?page_id=54&pId=353" class="carbon-text" rel="noopener">
                      Be Well </a>
                  </span>  
              </div>
        </div>
        <div class="btn-2">
            <div class="btn-main">        
              <span class="carbon-wrap-2">
                    <a href="?page_id=54&pId=351" class="carbon-text btn-fourth-text" rel="noopener">
                      EEG</a>
                  </span>              
              </div>
        </div>
        <div class="btn-3">
            <div class="btn-main">        
                  <span class="carbon-wrap-3">
                  <a href="?page_id=54&pId=350" class="carbon-text"  rel="noopener">
                      Alternative Medicine </a>
                  </span>
              </div>  
        </div>
        <div class="btn-4">                
          <div class="btn-main">        
                <span class="carbon-wrap-4">
                <a href="?page_id=54&pId=352" class="carbon-text" rel="noopener">
                    Nerve Conduction Studies / EMG </a>
                </span>
            </div>
        </div>
        <div class="btn-5">
          <div class="btn-main">        
                <span class="carbon-wrap-5">
                <a href="?page_id=54&pId=349" class="carbon-text"  rel="noopener">
                  Injection Treatment</a>
                </span>
            </div>
      </div>
        <div class="btn-6">
            <div class="btn-main">        
                  <span class="carbon-wrap-6">
                  <a href="?page_id=54&pId=348" class="carbon-text"  rel="noopener">
                      Psychotherapy</a>
                  </span>
              </div>
        </div>
        <div class="btn-7">
          <div class="btn-main main-secound">        
              <span class="carbon-wrap-7">
                <a href="?page_id=54&pId=347" class="carbon-text" rel="noopener">
                  Speech Therapy</a>
                </span>
          </div>
        </div>
        <div class="btn-8">
            <div class="btn-main">                        
                  <span class="carbon-wrap-8">           
                  <a href="?page_id=54&pId=346" class="carbon-text" rel="noopener">
                      Psychiatric Services</a>
                  </span>              
              </div>
        </div>
        <div class="btn-9">
            <div class="btn-main">                       
                  <span class="carbon-wrap-9">        
                  <a href="?page_id=54&pId=345" class="carbon-text" rel="noopener">
                      Neuropschology Assessment</a>
                  </span>          
              </div>
        </div>
        <div class="btn-10">
            <div class="btn-main">        
                  <span class="carbon-wrap-10">
                               <a href="?page_id=54&pId=344" class="carbon-text" rel="noopener">
                      Geriatric Services</a>
                  </span>
              </div>
        </div>
        <div class="btn-11">  
          <div class="btn-main">         
              <span class="carbon-wrap-11">    
              <a href="?page_id=54&pId=388" class="carbon-text" rel="noopener">
                  Neurological
                  Consultation</a>
              </span>     
          </div>
          
      </div>
    </div>
  </div>
</div>
</div>



<div class="meet-team">
    <div class="container">
        <div class="title-team">
          <h2><?php echo $blogTitle; ?></h2>
        </div>
        <div class="arrow-down"></div>
      <div class="row">
        <div class="col-sm-12">
          <p><?php echo $blogDesc; ?></p>
        </div>
      </div>
    </div>
  </div>
<div class="home-team">
  <div class="container">
  <?php $posts = new WP_Query( array('post_type' => 'team')); ?>

  <div class="main-box">
    <div class="row">

    <?php $i=1; while($posts->have_posts()) : $posts->the_post();  $terms = get_the_terms( $post->ID, 'types');
		$meta = get_post_meta( $post->ID, '_team_option_meta', true );
          if($meta){
            $options = $meta['webnus_page_options'][0];
          }
		?>
      <div class="col-sm-4">
        <div class="box center-block <?php if ($i == 2 || $i == 5) { echo 'box-2';} elseif ($i == 3 || $i == 6) { echo 'box-3';} ?>">
<?php if($options['ProfileBg']){ ?>
              <img class="center-block img-circle img-responsive" src="<?php echo $options['ProfileBg'] ?>">
              <?php } else { ?>
                <img class="center-block img-circle img-responsive" src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/office.png" alt="img">
              <?php } ?>
          <h4><?php the_title(); ?></h4>
			<?php if($options['qualifications']){ ?>
          <p><?php echo $options['qualifications']; ?></p>
			<?php } ?>
			<?php if($options['languages']){ ?>
          <p><?php echo $options['languages']; ?></p>
			<?php } ?>
          <a href="?page_id=52&cId=<?php echo $terms[0]->term_id; ?>&pId=<?php echo $post->ID ?>" class="btn bg-read">Read More</a>  
        </div>
      </div>
      <?php if ($i%3 == 0) { echo '</div></div><div class="main-box-two"><div class="row">';} ?>
      <?php $i++; endwhile; ?>
     
    </div>
  </div>
</div>