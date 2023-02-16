
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
                            <h2>Career Advisor</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
    
    
    
    
    
        <!-- jp career Wrapper Start -->
    <div class="jp_career_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_hiring_slider_main_wrapper">
                        <!--<div class="jp_career_slider_heading_wrapper">-->
                        <!--    <h2>Career advisors</h2>-->
                        <!--</div>-->
                        <div class="row">
                            <div>
                                                 <?php  
if (count($careeradvisor) > 0 ) { ?>
                                 <?php foreach($careeradvisor as $basicdetail){ ?>
                            <div class="col-sm-3">
                                <div class="mportolio item jp_recent_main">
                                    <div class="jp_career_main_box_wrapper">
                                        <div class="jp_career_img_wrapper">
                                            <img src="<?php echo $basicdetail['logo_url']; ?>" alt="career_img" width="100%" height="200"/>
                                        </div>
                                        <div class="jp_career_cont_wrapper">
                                            <p><i class="fa fa-globe"></i>&nbsp;&nbsp; <a href="#"><?php echo $basicdetail['ca_city']; ?></a></p>
                                            <h3><a href="#"><?php echo $basicdetail['ca_name']; ?></a></h3>
                                            <p><?php echo word_limiter( $basicdetail['ca_description'], 10); ?></p>
                                        </div>
                                    </div>
                                    <a href="<?php echo base_url(); ?>users/findaprofile" title=""><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <?php } }else { ?>
                             <div class="col-lg-12 job_section" >
        <div class="alert alert-success" role="alert">
          <strong>Sorry!</strong> No data found.
        </div>
    </div>
    <?php } ?>
                            <!--<div class="col-sm-3">-->
                            <!--    <div class="item jp_recent_main">-->
                            <!--        <div class="jp_career_main_box_wrapper">-->
                            <!--            <div class="jp_career_img_wrapper">-->
                            <!--                <img src="<?php echo base_url() ?>vendor/images/content/car_img2.jpg" alt="career_img" width="100%"/>-->
                            <!--            </div>-->
                            <!--            <div class="jp_career_cont_wrapper">-->
                            <!--                <p><i class="fa fa-calendar"></i>&nbsp;&nbsp; <a href="#">20 OCT, 2017</a></p>-->
                            <!--                <h3><a href="#">Hey Seeker, It’s Time</a></h3>-->
                            <!--                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.</p>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp career Wrapper End -->
    
    
    
    
    
    
    
    
    
    <!-- jp downlord Wrapper Start -->
    <?php include('template/footer.php'); ?>