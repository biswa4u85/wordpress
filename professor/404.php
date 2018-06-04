<div class="col-md-9 pgshdow">
  <?php get_template_part('templates/page', 'header'); ?>
<div class="alert alert-warning">
          <?php echo esc_html($webnus_options->webnus_404_text()); ?> 
</div>
 <form class="navbar-form"id="searchform" method="get" action="<?= esc_url(home_url('/')); ?>">
  <div class="form-group">
    <input type="text" name="s" id="s" class="form-control search-box" placeholder="Search">
  </div>
  <button type="submit" class="btn btn-default btn-search">Search</i></button>
</form>
</div>