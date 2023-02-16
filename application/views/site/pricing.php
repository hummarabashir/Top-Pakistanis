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
                            <h2>Pricing Plans</h2>
                        </div>
                        <!--<div class="jp_tittle_breadcrumb_main_wrapper">-->
                        <!--    <div class="jp_tittle_breadcrumb_wrapper">-->
                        <!--        <ul>-->
                        <!--            <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>-->
                        <!--            <li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>-->
                        <!--            <li>Pricing Plans</li>-->
                        <!--        </ul>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->


 <div class="jp_blog_cate_main_wrapper">
<div class="container">
    <div class="row">
        
        <div class="col-sm-12">
    <div class="panel panel-default sidenav" style="margin:0px;">
   <!--  <div class="panel-heading">
    <h2 class="panel-title">REPORT</h2>
    </div> -->
<div class="panel-body">
    <ul>
        <div class="col-md-2 col-xs-12">
      <li>
        <a href="<?php echo base_url().'users/recruiter_dashboard'?>"><span class="fa fa-home" style="font-size:30px;"></span><br/>Dashboard</a>
      </li>
  </div>
        <div class="col-md-2 col-xs-12">
      <li><a href="<?php echo base_url().'users/profilesaved'?>" class=""><span class="fa fa-tags" style="font-size:30px;"></span><br/>Saved Profiles</a>
      </li> 
  </div>
      <div class="col-md-2 col-xs-12">
      <li><a href="<?php echo base_url().'users/employer_pricing'?>" class="new_active"><span class="fa fa-money" style="font-size:30px;"></span><br/>Pricing Plans</a>
      </li> 
  </div>
     <div class="col-md-2 col-xs-12">
      <li><a href="<?php echo base_url().'users/view_companies'?>" class=""><span class="fa fa-building" style="font-size:30px;"></span><br/>Promote a Company</a>
      </li> 
  </div>
  <div class="col-md-2 col-xs-12">
        <li><a href="<?php echo base_url().'users/add_personalinfo/load_profile'?>" class=""><span class="fa fa-users" style="font-size:30px;"></span><br/>Personal Profile</a></li>
    </div>
    <div class="col-md-2 col-xs-12">
        <li><a href="#'?>" class=""><span class="fa fa-eye" style="font-size:30px;"></span><br/>Company Visits</a></li>
    </div>
    </ul>
  </div>
</div>

</div>
<div class="col-sm-12">



    <!-- jp pricing Wrapper Start -->
    <div class="jp_pricing_main_wrapper">
        <div class="">
            <div class="row">
         <!--        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="pricing_box1_wrapper pricing_border_box1_wrapper">
                        <div class="box1_heading_wrapper">
                            <h4>Basic Plan</h4>
                        </div>
                        <div class="price_box1_wrapper">
                            <div class="price_box1">
                                <h1>$<span>29</span></h1>
                            </div>
                        </div>
                        <div class="pricing_cont_wrapper">
                            <div class="pricing_cont">
                                <ul>
                                    <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;5 Jobs Posting</li>
                                    <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;2 Featured jobs</li>
                                    <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;1 Renew Jobs</li>
                                    <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;10 Days Duration</li>
                                    <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;Email Alert</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing_btn_wrapper">
                            <div class="pricing_btn1">
                                <ul>
                                    <li><a href="#"><i class="fa fa-plus-circle"></i> Get Started</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="jp_pricing_label_wrapper">
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div> -->
                <?php foreach($emp_packages as $row):?>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="pricing_box1_wrapper pricing_border_box2_wrapper">
                        <div class="box1_heading_wrapper box2_heading_wrapper">
                            <h4><?php echo $row['name'];?></h4>
                        </div>
                        <div class="price_box1_wrapper">
                            <div class="price_box2">
                                <h1>PKR<span><?php echo $row['price'];?></span></h1>
                            </div>
                        </div>
                        <div class="pricing_cont_wrapper">
                            <div class="pricing_cont">
                                <ul>
                         <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;<?php echo $row['profile_view_limit'];?> Profiles View</li>
                     <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;2 Days Company Promotion</li>
                                    <!--<li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;1 Renew Jobs</li>-->
                                    <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;<?php echo $row['promotion_limit'];?> Days Duration</li>
                                    <!--<li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;Email Alert</li>-->
                                </ul>
                            </div>
                        </div>
                        <div class="pricing_btn_wrapper">
                            <div class="pricing_btn2">
                                <ul>
                                    <li><a href="<?php echo base_url()?>users/job_payment/<?php echo $row['emp_id'];?>"><i class="fa fa-plus-circle"></i> Buy Now</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="jp_pricing_label_wrapper">
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
               


                <?php endforeach;?>

            </div>
        </div>
    </div>
    <!-- jp pricing Wrapper End -->
    <!-- jp pricing Info Start -->
    <!--<div class="jp_pricing_info_main_wrapper">-->
    <!--    <div class="">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
    <!--                <div class="jp_pricing_cont_heading">-->
    <!--                    <h2>Additional Information :</h2>-->
    <!--                </div>-->
    <!--                <div class="jp_pricing_cont_wrapper">-->
    <!--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus auctor lacinia pellentesque. Vivamus et tellus in urna faucibus porttitor. Sed auctor ut nunc in pulvinar. Fusce lacinia, velit vitae pharetra porttitor, nunc libero-->
    <!--                        itdin odio, quis iaculis tortor ligula feugiat ex. Nam ut cursus mi. Nullam eu erat in justo euismod ultrices ut id enim. Mrbi non tempor ante, eget molestie mauris. Cras gravida, lacus nec sollicitn euismod, ipsum nisl tempor-->
    <!--                        leo, in volutat sapien ex ac erat. In sit amet dolor ut erat fermentum tincidut. Maecenas sd pque ex.<br><br>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem-->
    <!--                        quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>-->
    <!--                </div>-->
    <!--                <div class="jp_pricing_form_wrapper">-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">-->
    <!--                            <div class="jp_pricing_inputs_wrapper">-->
    <!--                                <i class="fa fa-user"></i><input type="text" placeholder="Name*">-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">-->
    <!--                            <div class="jp_pricing_inputs_wrapper jp_pricing_inputs2_wrapper">-->
    <!--                                <i class="fa fa-envelope"></i><input type="text" placeholder="Email*">-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
    <!--                            <div class="jp_pricing_select_wrapper">-->
    <!--                                <i class="fa fa-usd first_icon"></i><select>-->
				<!--					<option>Select Plan</option>-->
				<!--					<option>Select Plan</option>-->
				<!--					<option>Select Plan</option>-->
				<!--					<option>Select Plan</option>-->
				<!--				</select><i class="fa fa-angle-down second_icon"></i>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
    <!--                            <div class="jp_pricing_form_btn_wrapper">-->
    <!--                                <ul>-->
    <!--                                    <li><a href="#"><i class="fa fa-plus-circle"></i>&nbsp; BUY NOW!</a></li>-->
    <!--                                </ul>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- jp pricing Info End -->





</div>
</div>
</div>
</div>
    <!-- jp downlord Wrapper Start -->
 <!--    <div class="jp_downlord_main_wrapper">
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