<!-- Footer -->



            <footer id="footer">



                <div class="container">



                    <div class="row">



                        <div class="col col_3_of_12">



      <?php
      if (has_nav_menu('secondary_navigation')) :
        wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'secondary_menu clearfix']);
      endif;
      ?>



                        </div>



                        <div class="col col_6_of_12">



                           <?php
      if (has_nav_menu('category_navigation')) :
        wp_nav_menu(['theme_location' => 'category_navigation', 'menu_class' => 'category_menu clearfix']);
      endif;
      ?>



                        </div>



                        <div class="col col_3_of_12">



                            <?php dynamic_sidebar('sidebar-photo'); ?>



                        </div>



                    </div>



                </div>



            </footer>



            



            <!-- Copyright -->



            <div id="copyright">



                <div class="container">



                    &copy; Copyright 2015 DBgujarat. All rights reserved.



                </div>



            </div>