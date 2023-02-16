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
                            <h2>Employer Dashboard</h2>
                        </div>
                        <!--<div class="jp_tittle_breadcrumb_main_wrapper">-->
                        <!--    <div class="jp_tittle_breadcrumb_wrapper">-->
                        <!--        <ul>-->
                        <!--            <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>-->
                        <!--            <li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>-->
                        <!--            <li>Employer Dashboard</li>-->
                        <!--        </ul>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->

    <!-- jp register wrapper start -->
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
        <a href="<?php echo base_url().'users/recruiter_dashboard'?>" class="new_active"><span class="fa fa-home" style="font-size:30px;"></span><br/>Dashboard</a>
      </li>
  </div>
        <div class="col-md-2 col-xs-12">
      <li><a href="<?php echo base_url().'users/profilesaved'?>" class=""><span class="fa fa-tags" style="font-size:30px;"></span><br/>Saved Profiles</a>
      </li> 
  </div>
      <div class="col-md-2 col-xs-12">
      <li><a href="<?php echo base_url().'users/employer_pricing'?>" class=""><span class="fa fa-money" style="font-size:30px;"></span><br/>Pricing Plans</a>
      </li> 
  </div>
     <div class="col-md-2 col-xs-12">
      <li><a href="<?php echo base_url().'users/view_companies'?>" class="" ><span class="fa fa-building" style="font-size:30px;"></span><br/>Promote a Company</a>
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

     <div class="cat-sec" style="padding-bottom:0px;">
         
<div class="alert alert-info">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong> Info! </strong> Your Remaining Profile View are 3. <a href="<?php echo base_url() ?>users/employer_pricing" style="background-color:#23c0e9; color:#fff; padding:10px; margin-left:20px;">Buy More</a>
</div>
         
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                             <div class="jp_rightside_career_wrapper">
                                    <div class="jp_rightside_career_heading">
                                        <h4>Suggested Profiles</h4>
                                    </div>
                                    
                                    <div class="jp_rightside_career_main_content">
                                        <?php if(!empty($profiles)){ ?>
                                         <?php  foreach($profiles as $row) { ?>
                                        <div class="jp_rightside_career_content_wrapper">
                                            <div class="jp_rightside_career_img">
                                                <img src="<?php echo $row['picture_url']; ?>" alt="career_img" style="width:100%;" />
                                            </div>
                                            <div class="jp_rightside_career_img_cont">
                                                <h4 style="text-transform:uppercase;"><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></h4>
                                                <p><i class="fa fa-calendar-o"></i> &nbsp;<?php echo $row['city_name']; ?></p>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <div class="jp_rightside_career_btn">
                                            <a href="<?php echo base_url() ?>users/findaprofile"><i class="fa fa-plus-circle"></i> View All</a>
                                        </div>
                                        <?php  }else{ ?>
                                        <div class="jp_rightside_career_btn" style="text-align:center; font-weight:bold;">
                                            <a> Complete Your Profile First !!</a>
                                        </div>
                                        <?php }  ?>
                                    </div>
                                </div>
                        </div> 
         
         
             <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                             <div class="jp_rightside_career_wrapper">
                                    <div class="jp_rightside_career_heading">
                                        <h4>Recent Reviews</h4>
                                    </div>
                                    <div class="jp_rightside_career_main_content">
                                        <div class="jp_rightside_career_content_wrapper">
                                            <div class="jp_rightside_career_img">
                                                <img src="<?php echo base_url() ?>vendor/images/content/career_img1.jpg" alt="career_img" />
                                            </div>
                                            <div class="jp_rightside_career_img_cont">
                                                <h4>Job Seekeks OCT - 2017</h4>
                                                <p><i class="fa fa-calendar-o"></i> &nbsp;20 OCT, 2017</p>
                                            </div>
                                        </div>
                                        <div class="jp_rightside_career_content_wrapper">
                                            <div class="jp_rightside_career_img">
                                                <img src="<?php echo base_url() ?>vendor/images/content/career_img2.jpg" alt="career_img" />
                                            </div>
                                            <div class="jp_rightside_career_img_cont">
                                                <h4>Job Seekeks OCT - 2017</h4>
                                                <p><i class="fa fa-calendar-o"></i> &nbsp;20 OCT, 2017</p>
                                            </div>
                                        </div>
                                        <div class="jp_rightside_career_content_wrapper">
                                            <div class="jp_rightside_career_img">
                                                <img src="<?php echo base_url() ?>vendor/images/content/career_img3.jpg" alt="career_img" />
                                            </div>
                                            <div class="jp_rightside_career_img_cont">
                                                <h4>Job Seekeks OCT - 2017</h4>
                                                <p><i class="fa fa-calendar-o"></i> &nbsp;20 OCT, 2017</p>
                                            </div>
                                        </div>
                                        <div class="jp_rightside_career_btn">
                                            <a href="#"><i class="fa fa-plus-circle"></i> View All</a>
                                        </div>
                                    </div>
                                </div>
                        </div>
         
         
         
         
         <div class="col-lg-4 col-lg-offset-4" style="padding:30px;">
             <a href="<?php echo base_url().'users/view_companies'?>" class="btn btn-success btn-block btn-lg" style="background-color:#39b54a;">PROMOTE A COMPANY</a>
         </div>
         
         
         
         
         
         
         
         
                <!--     <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="p-category">
                                        <a href="" title="" style="border-radius: 20px;">
                                            <i class="fa fa-graduation-cap"></i>
                                            <span>Total Job Posts</span>
                                            <p>(0)</p>
                                        </a>
                                    </div>
                                </div>
                                   <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="p-category">
                                        <a href="" title="" style="border-radius: 20px;">
                                            <i class="fa fa-spinner"></i>
                                            <span>Pending Jobs</span>
                                            <p>(0)</p>
                                        </a>
                                    </div>
                                </div>
                                   <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="p-category">
                                        <a href="" title="" style="border-radius: 20px;">
                                            <i class="fa fa-check"></i>
                                            <span>Approved Jobs</span>
                                            <p>(0)</p>
                                        </a>
                                    </div>
                                </div> -->
                              
                                <!--   <div class="col-lg-6 col-md-6 col-sm-12">-->
                                <!--    <div class="p-category">-->
                                <!--        <a href="" title="" style="border-radius: 20px;">-->
                                <!--            <i class="fa fa-money"></i>-->
                                <!--            <span>Packages</span>-->
                                <!--            <p>(0)</p>-->
                                <!--        </a>-->
                                <!--    </div>-->
                                <!--</div>-->
                                
                </div>

    </div>
</div>
</div>

</div>























    <!-- jp register wrapper end -->

   <?php include('template/footer.php'); ?>