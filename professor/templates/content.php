<?php $thumUrl =  wp_get_attachment_url( get_post_thumbnail_id()); ?>
<div class="row lstrow">
  <?php if ( $thumUrl ) { ?>
  <div class="col-md-2 col-sm-2 col-xs-12 lstthumb">
    <img src="<?php echo $thumUrl; ?>">  
  </div>
  <div class="col-md-10 col-sm-10 col-xs-12 ">
  <?php } else { ?>
    <div class="col-md-112 col-sm-12 col-xs-12 ">
  <?php } ?>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php echo substr(strip_tags($post->post_content), 0, 320);?></p>
      <div class="readmore-btninr"><a href="<?php the_permalink(); ?>">Read More +</a></div>   
    </div>
</div>