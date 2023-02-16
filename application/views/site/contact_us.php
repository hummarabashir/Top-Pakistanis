 <?php include('template/header.php'); ?>
    <!-- Header Wrapper End -->
    <!-- jp Tittle Wrapper Start -->
    <div class="jp_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2>Contact Us</h2>
                        </div>
                  <!--       <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>
                                    <li>Contact Us</li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
    <!-- jp Contact heading Wrapper Start -->
    <div class="jp_contact_heading_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_contact_heading_wrapper">
                        <h2>Our Helpline 24x7 Available</h2>
                        <p>Call us at <span>+92 000 0000</span> or Email us at <a href="#">support@toppakistanis.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="jp_contact_map_wrapper">-->
    <!--    <div id="map" style="width:100%; float:left; height:600px;"></div>-->
    <!--    <div class="jp_map_cont_label">-->
    <!--        <h3>You can Find us..</h3>-->
    <!--        <p>Lorem Ipsum Dolor set amit, Lorem Ipsum</p>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- jp Contact heading Wrapper End -->
    <!-- jp Contact form Wrapper Start -->
    <div class="jp_contact_form_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_contact_form_heading_wrapper">
                        <h2>Leave A Message</h2>
                    </div>
                </div>
                 <form action="<?php echo base_url('users/contact_us/send_email'); ?>" method="post">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="jp_contact_form_box">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="jp_contact_inputs_wrapper">
                                <i class="fa fa-user"></i><input type="text" placeholder="Name *" name="name" id="name" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="jp_contact_inputs_wrapper jp_contact_inputs2_wrapper">
                                <i class="fa fa-envelope"></i><input type="text" placeholder="Email *" name="from_emial" id="email" required>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">
                                <i class="fa fa-pencil-square-o"></i><input type="text" placeholder="Subject" id="subject" name="subject">
                            </div>
                        </div>
                        <input type="hidden" name="toemial" value="info@toppakistanis.com">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_contact_inputs_wrapper jp_contact_inputs4_wrapper">
                                <i class="fa fa-text-height"></i><textarea name="message" id="message" rows="6" placeholder="Type Your Message *"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_contact_form_btn_wrapper">
                                <ul>
                                    <li><button type="submit" class="a">Send</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="jp_contact_right_box_wrapper">
                        <div class="jp_contact_form_add_heading_wrapper">
                            <h2>Contact Info</h2>
                        </div>
                        <div class="jp_form_add_wrapper gc_map_add_wrapper1">
                            <div class="jp_map_location_icon_wrapper">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="gc_map_location_icon_cont_wrapper">
                                <h3>Lorem Ipsum Dolor set amit, Lorem Ipsum Dolor set amit</h3>
                            </div>
                        </div>
                        <div class="jp_form_add_wrapper gc_map_add_wrapper2">
                            <div class="jp_map_location_icon_wrapper">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="gc_map_location_icon_cont_wrapper gc_map_location_icon_cont_wrapper2">
                                <h3> +92 000 0000</h3>
                            </div>
                        </div>
                        <div class="jp_form_add_wrapper gc_map_add_wrapper2">
                            <div class="jp_map_location_icon_wrapper">
                                <i class="fa fa-fax"></i>
                            </div>
                            <div class="gc_map_location_icon_cont_wrapper gc_map_location_icon_cont_wrapper3">
                                <h3> +92 000 0000</h3>
                            </div>
                        </div>
                        <div class="jp_form_add_wrapper gc_map_add_wrapper3">
                            <div class="jp_map_location_icon_wrapper">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="gc_map_location_icon_cont_wrapper gc_map_location_icon_cont_wrapper4">
                                <h3> <a href="#">info@toppakistanis.com</a></h3>
                            </div>
                        </div>
                        <div class="jp_contact_form_social_icon">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="hidden-xs"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="hidden-xs"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Contact form Wrapper End -->
    <!-- jp downlord Wrapper Start -->
<!--     <div class="jp_downlord_main_wrapper">
        <div class="jp_downlord_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                    <div class="jp_down_mob_img_wrapper">
                        <img src="images/content/mobail.png" alt="mobail_img" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="ss_download_wrapper_details">
                        <h1><span>Download</span><br>Job Portal App Now!</h1>
                        <p>Fast, Simple & Delightful. All it takes is 30 seconds to Download.</p>
                        <a href="#" class="ss_appstore"><span><i class="fa fa-apple" aria-hidden="true"></i></span> App Store</a>
                        <a href="#" class="ss_playstore"><span><i class="fa fa-android" aria-hidden="true"></i></span> Play Store</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 visible-sm visible-xs">
                    <div class="jp_down_mob_img_wrapper">
                        <img src="images/content/mobail.png" class="img-responsive" alt="mobail_img" />
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- jp downlord Wrapper End -->
    <!-- jp Newsletter Wrapper Start -->
   

 <?php include('template/footer.php'); ?>


   