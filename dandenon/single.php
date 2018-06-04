<?php
use Roots\Sage\Wrapper;
?>
<section>
    <div class="container">
<div class="row">
      <div class="col-xs-12 col-md-8">
<?php get_template_part('templates/content-single', get_post_type()); ?>
      </div>
<div class="col-md-4">
<?php include Wrapper\sidebar_path(); ?>
</div>
</div>
<section>