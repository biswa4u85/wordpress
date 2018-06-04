     <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="contact-box text-center">
                            <div class="con-box-inner">
                            <span class="pe-7s-map-marker"></span>
                            <?php echo ot_get_option('all_media_contact_location'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="contact-box text-center">
                            <div class="con-box-inner">
                            <span class="pe-7s-call"></span>
                            <?php echo ot_get_option('all_media_contact_call_us'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="contact-box text-center">
                            <div class="con-box-inner">
                            <span class="pe-7s-mail-open-file"></span>
                            <?php echo ot_get_option('all_media_contact_message'); ?>
                            </div>
                        </div>
                    </div>
                </div>
<?php the_content(); ?>
            </div>
        </section>