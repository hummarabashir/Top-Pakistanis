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
                            <h2>Employee Dashboard</h2>
                        </div>
                        <!--<div class="jp_tittle_breadcrumb_main_wrapper">-->
                        <!--    <div class="jp_tittle_breadcrumb_wrapper">-->
                        <!--        <ul>-->
                        <!--            <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>-->
                        <!--            <li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>-->
                        <!--            <li>Employee Dashboard</li>-->
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
        <a href="<?php echo base_url().'users/userdashboard'?>" class="new_active"><span class="fa fa-home" style="font-size:30px;"></span><br/>Dashboard</a>
      </li>
  </div>
  <div class="col-md-2 col-xs-12">
        <li><a href="<?php echo base_url().'users/profile'?>" class=""><span class="fa fa-user" style="font-size:30px;"></span><br/> My Profile</a></li>
    </div>
     <div class="col-md-2 col-xs-12">
        <li><a href="<?php echo base_url().'users/myprofileview'?>" class=""><span class="fa fa-users" style="font-size:30px;"></span><br/> View Profile </a></li>
    </div>
      <div class="col-md-2 col-xs-12">
        <li><a href="<?php echo base_url().'site/change_password'?>" class=""><span class="fa fa-pencil" style="font-size:30px;"></span><br/> Change Password </a></li>
    </div>
      <div class="col-md-2 col-xs-12">
      <li><a href="<?php echo base_url().'users/employee_pricing'?>" class=""><span class="fa fa-money" style="font-size:30px;"></span><br/> Become PRO</a>
      </li> 
  </div>
  <div class="col-md-2 col-xs-12">
        <li><a href="#" class=""><span class="fa fa-eye" style="font-size:30px;"></span><br/> No. of Views</a></li>
    </div>
    </ul>
  </div>
</div>

</div>
<div class="col-sm-12">

     <div class="cat-sec" style="padding-bottom:0px;">
         <?php 
         
         $user_id=$this->session->userdata('logged_id');
         if($this->user->check_profile($user_id)){?>
                                         <div class="alert alert-info">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong> Info! </strong> Your profile is COMPLETE.
</div>
                <?php } else{ ?>
                      <div class="alert alert-info">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong> Info! </strong> Your profile is INCOMPLETE. All Fields with * are mandatory <a href="#" style="background-color:#23c0e9; color:#fff; padding:10px; margin-left:20px;">Edit Now</a>
</div>
<?php  } ?>
          <!--           <div class="col-lg-6 col-md-6 col-sm-12">
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
                                            <i class="fa fa-graduation-cap"></i>
                                            <span>Pending Jobs</span>
                                            <p>(0)</p>
                                        </a>
                                    </div>
                                </div>
                                   <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="p-category">
                                        <a href="" title="" style="border-radius: 20px;">
                                            <i class="fa fa-graduation-cap"></i>
                                            <span>Approved Jobs</span>
                                            <p>(0)</p>
                                        </a>
                                    </div>
                                </div> -->
                                <!--   <div class="col-lg-6 col-md-6 col-sm-12">-->
                                <!--    <div class="p-category">-->
                                <!--        <a href="" title="" style="border-radius: 20px;">-->
                                <!--            <i class="fa fa-graduation-cap"></i>-->
                                <!--            <span>Packages</span>-->
                                <!--            <p>(0)</p>-->
                                <!--        </a>-->
                                <!--    </div>-->
                                <!--</div>-->
                </div>
                         
                         
                          <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_spotlight_main_wrapper">
                                <div class="spotlight_header_wrapper">
                                    <h4>Explore Companies</h4>
                                </div>
                                <div class="jp_spotlight_slider_wrapper">
                                    <div class="owl-carousel owl-theme">
                                           <?php foreach($companies as $basicdetail){ ?>
                                        <div class="item">
                                            <div class="jp_spotlight_slider_img_Wrapper">
                                                <img src="<?php echo $basicdetail['logo_url']; ?>" alt="spotlight_img" />
                                            </div>
                                            <div class="jp_spotlight_slider_cont_Wrapper">
                                                <h4><?php echo $basicdetail['comp_name']; ?></h4>
                                                <p><?php echo $basicdetail['industry']; ?></p>
                                                <ul>
                                                     <li><i class="fa fa-map-marker"></i>&nbsp; <?php echo $basicdetail['comp_city']; ?></li>
                                                    <li><i class="fa fa-building"></i>&nbsp; Ownership: <?php echo $basicdetail['ownership']; ?></li>
                                                   
                                                </ul>
                                            </div>
                                            <div class="jp_spotlight_slider_btn_wrapper">
                                                <div class="jp_spotlight_slider_btn">
                                                    <ul>
                                                        <li><a href="<?php echo base_url()?>users/single_company1/<?php echo $basicdetail['comp_id'];  ?>"><i class="fa fa-plus-circle"></i> &nbsp;View Company</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    <?php  } ?>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                        
                        
                          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_career_wrapper jp_blog_right_box">
                                <div class="jp_rightside_career_heading">
                                    <h4>Suggested Articles</h4>
                                </div>
                                    <!-- <div class="jp_rightside_career_main_content">-->
                                    <!--    <div class="jp_rightside_career_content_wrapper">-->
                                    <!--        <div class="jp_rightside_career_img">-->
                                    <!--            <img src="<?php echo base_url() ?>vendor/images/content/career_img1.jpg" alt="career_img" />-->
                                    <!--        </div>-->
                                    <!--        <div class="jp_rightside_career_img_cont">-->
                                    <!--            <h4>Job Seekeks OCT - 2017</h4>-->
                                    <!--            <p><i class="fa fa-calendar-o"></i> &nbsp;20 OCT, 2017</p>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="jp_rightside_career_content_wrapper">-->
                                    <!--        <div class="jp_rightside_career_img">-->
                                    <!--            <img src="<?php echo base_url() ?>vendor/images/content/career_img2.jpg" alt="career_img" />-->
                                    <!--        </div>-->
                                    <!--        <div class="jp_rightside_career_img_cont">-->
                                    <!--            <h4>Job Seekeks OCT - 2017</h4>-->
                                    <!--            <p><i class="fa fa-calendar-o"></i> &nbsp;20 OCT, 2017</p>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="jp_rightside_career_content_wrapper">-->
                                    <!--        <div class="jp_rightside_career_img">-->
                                    <!--            <img src="<?php echo base_url() ?>vendor/images/content/career_img3.jpg" alt="career_img" />-->
                                    <!--        </div>-->
                                    <!--        <div class="jp_rightside_career_img_cont">-->
                                    <!--            <h4>Job Seekeks OCT - 2017</h4>-->
                                    <!--            <p><i class="fa fa-calendar-o"></i> &nbsp;20 OCT, 2017</p>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="jp_rightside_career_btn">-->
                                    <!--        <a href="#"><i class="fa fa-plus-circle"></i> View All</a>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                 <div class="jp_rightside_career_main_content">
                                        <?php  foreach($limit as $row) { ?>
                                    <div class="jp_rightside_career_content_wrapper">
                                        <div class="jp_rightside_career_img">
                                            <img src="<?php echo base_url('uploads/category/').$row['blog_image'] ;?>" alt="career_img" width="100%"/>
                                        </div>
                                        <div class="jp_rightside_career_img_cont">
                                            <a href="<?php echo base_url()?>site/singleblog/<?php echo $row['blog_id']; ?>"> <h4><?php echo $row['blog_name']; ?></h4></a>
                                            <p><i class="fa fa-calendar-o"></i> &nbsp;<?php echo $row['date_posted']; ?></p>
                                        </div>
                                    </div>
                                    <?php  } ?>
                                    <div class="jp_rightside_career_btn">
                                        <a href="<?php echo base_url()?>site/blog"><i class="fa fa-plus-circle"></i> View All</a>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        
                        
                        
                         <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                             <div class="jp_rightside_career_wrapper">
                                    <div class="jp_rightside_career_heading">
                                        <h4>Career Advisor</h4>
                                    </div>
                                    <div class="jp_rightside_career_main_content">
                                         <?php  foreach($careeradvisor as $row) { ?>
                                        <div class="jp_rightside_career_content_wrapper">
                                            <div class="jp_rightside_career_img">
                                                <img src="<?php echo $row['logo_url']; ?>" alt="career_img" width="100%"/>
                                            </div>
                                            <div class="jp_rightside_career_img_cont">
                                                <a href="<?php echo base_url(); ?>site/singlecareeradvisor/<?php echo $row['ca_id']; ?>"> <h4><?php echo $row['ca_name']; ?></h4></a>
                                                <p><i class="fa fa-calendar-o"></i> &nbsp;<?php echo $row['ca_city']; ?></p>
                                            </div>
                                        </div>
                                        <?php  } ?>
                                        <!--<div class="jp_rightside_career_content_wrapper">-->
                                        <!--    <div class="jp_rightside_career_img">-->
                                        <!--        <img src="<?php echo base_url() ?>vendor/images/content/career_img2.jpg" alt="career_img" />-->
                                        <!--    </div>-->
                                        <!--    <div class="jp_rightside_career_img_cont">-->
                                        <!--        <h4>Job Seekeks OCT - 2017</h4>-->
                                        <!--        <p><i class="fa fa-calendar-o"></i> &nbsp;20 OCT, 2017</p>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="jp_rightside_career_content_wrapper">-->
                                        <!--    <div class="jp_rightside_career_img">-->
                                        <!--        <img src="<?php echo base_url() ?>vendor/images/content/career_img3.jpg" alt="career_img" />-->
                                        <!--    </div>-->
                                        <!--    <div class="jp_rightside_career_img_cont">-->
                                        <!--        <h4>Job Seekeks OCT - 2017</h4>-->
                                        <!--        <p><i class="fa fa-calendar-o"></i> &nbsp;20 OCT, 2017</p>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <div class="jp_rightside_career_btn">
                                            <a href="<?php echo base_url()?>site/careeradvisor"><i class="fa fa-plus-circle"></i> View All</a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        

    </div>
</div>
</div>
</div>










    <!-- jp register wrapper end -->

      <?php include('template/footer.php'); ?>