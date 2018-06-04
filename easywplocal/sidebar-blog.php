<?php
/**
 * Right Sidebar displayed on post and blog templates.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>
        <div class="span4 fr">
            <div class="sidebar-nav">
                <ul>
<?php
                if (function_exists('dynamic_sidebar')) {
                    dynamic_sidebar("primary-widget-area");
                } ?>
</ul>
            </div><!--/.well .sidebar-nav -->
        </div><!-- /.span4 -->