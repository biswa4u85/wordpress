<!-- Main content -->
                    <div class="col col_8_of_12 main_content">
                        <!-- Breadcrumb -->
                        <div class="breadcrumb">
                            <ul class="clearfix">
                                <li><a href="index.html">Home</a></li>
                                <li>Post standard</li>
                            </ul>
                        </div>
                        <!-- Article -->
                        <article class="post">
                            <!-- Post header -->
                            <header class="post_header">
                                <h1><?php get_template_part('templates/page', 'header'); ?></h1>
                            </header>
                            <!-- Main content -->
                            <div class="post_main_container">
                                <!-- Post content -->
                                <?php the_content(); ?>
								<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
                            </div>
                            
                        </article>
                    </div>
                    <!-- Sidebar area -->