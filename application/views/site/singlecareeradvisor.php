

 <?php include('template/header.php'); ?>



    <!-- Header Wrapper End -->
    <!-- jp Tittle Wrapper Start -->
    <div class="jp_tittle_main_wrapper jp_cs_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2>Career Advisor Detail</h2>
                        </div>
                    </div>
                </div>
			
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
    <!-- jp listing Single cont Wrapper Start -->
     <?php foreach($careeradvisor as $basicdetail){
             }?>
    <div class="jp_listing_single_main_wrapper">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper jp_rightside_listing_single_wrapper">
                                <div class="jp_rightside_job_categories_heading">
                                    <h4 style="text-align: center;

font-size: 30px;

font-weight: bold;

text-transform: uppercase;">Career Advisor Overview</h4>
                                </div>



<div style="margin-top: 120px;">

                                                          <div class="col-lg-6 col-sm-6">

            <div class="card hovercard">
                <div class="cardheader" style=" background: url(<?php echo $basicdetail['logo_url']; ?>);">

                </div>
              <!--   <div class="avatar">
                    <img alt="" src="<?php echo $basicdetail['picture_url']; ?>">
                </div> -->
                <div class="info">
                    <div class="title">
                        <a target="_blank" href=""><?php echo $basicdetail['ca_name']; ?></a>
                    </div>
                           <div class="jp_job_post_right_overview_btn_wrapper" style="padding-bottom: 0px;">
                                    <div class="jp_job_post_right_overview_btn">
                                        <ul>
                                            <li><a href="#"><?php echo $basicdetail['ca_comp']; ?></a></li>
                                        </ul>
                                    </div>
                                </div>
            
               
                </div>
                <div class="bottom">
                    <a class="btn btncard btn-primary btn-twitter btn-sm" href="">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btncard btn-danger btn-sm" rel="publisher"
                       href="">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="btn btncard btn-primary btn-sm" rel="publisher"
                       href="">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btncard btn-warning btn-sm" rel="publisher" href="">
                        <i class="fa fa-behance"></i>
                    </a>
                </div>
            </div>

        </div>
        <div class="col-sm-6">
             <ul class="list-group list-unstyled list-icons">
             <li>
            <div class="row  no-gutter row-eq">              
                <a href="listado.html" class="col-md-12  btnie  col-eq">
                    <span class="glyphicon glyphicon-search"></span> <span><b>Email Address</b>- ********** </span>
                </a> 
                </div>
                </li>
                <br/>
                 <li>
            <div class="row  no-gutter row-eq">              
                <a href="listado.html" class="col-md-12  btnie  col-eq">
                    <span class="glyphicon glyphicon-search"></span> <span><b>Country</b>- <?php echo $basicdetail['ca_country']; ?></span>
                </a> 
                </div>
                </li>
                <br/>
                 <li>
            <div class="row  no-gutter row-eq">                  
                <a href="listado.html" class="col-md-12  col-eq btnie ">
                    <span class="glyphicon glyphicon-map-marker"></span><span><b>Address</b>- ********** </span>
                </a>              
            </div>
          </li>
          <br/>
                     <li>
            <div class="row  no-gutter row-eq">                  
                <a href="listado.html" class="col-md-12  col-eq btnie ">
                    <span class="glyphicon glyphicon-globe"></span><span><b>City</b>- <?php echo $basicdetail['ca_city']; ?></span>
                </a>              
            </div>
          </li>
      
         
      </ul>
        </div>



<div class="col-sm-12">
    <div class="aboutcompany" style="padding-top: 30px; padding-bottom: 50px;">
        <h3 style="font-weight: bold;">About Career Advisor</h3>
        <br>
        <p><?php echo $basicdetail['ca_description']; ?></p>
    </div>
</div>

</div>




                              <!--   <div class="jp_jop_overview_img_wrapper">
                                    <div class="jp_jop_overview_img">
                                        <img src="<?php echo $basicdetail['logo_url']; ?>" alt="post_img" width="100%" height="150"/>
                                    </div>
                                </div>
                                <div class="jp_job_listing_single_post_right_cont">
                                    <div class="jp_job_listing_single_post_right_cont_wrapper">
                                        <h4 style="text-align: center; font-size: 30px; font-weight: bold; text-transform: uppercase;"><?php echo $basicdetail['ca_name']; ?></h4>
                                    </div>
                                </div>
                                <div class="jp_job_post_right_overview_btn_wrapper">
                                    <div class="jp_job_post_right_overview_btn">
                                        <ul>
                                            <li><a href="#"><?php echo $basicdetail['ca_city']; ?></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="jp_listing_overview_list_outside_main_wrapper">
                                       <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-globe"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Career Advisor Description:</li>
                                                <li><?php echo $basicdetail['ca_description']; ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Country:</li>
                                                <li><?php echo $basicdetail['ca_country']; ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                  
                                       <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-globe"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Address:</li>
                                                <li><?php 
                                                echo '**********'; ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                     <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-th-large"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Email:</li>
                                                <li><?php 
                                                echo '**********'; ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Phone No:</li>
                                                <li><?php 
                                                echo '**********'; ?></li>
                                            </ul>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp listing Single cont Wrapper End -->
    <!-- jp downlord Wrapper Start -->



     <?php include('template/footer.php'); ?>

   