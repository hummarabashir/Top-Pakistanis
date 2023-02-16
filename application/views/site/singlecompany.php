

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
                            <h2>Company Detail</h2>
                        </div>
                        <!--<div class="jp_tittle_breadcrumb_main_wrapper">-->
                        <!--    <div class="jp_tittle_breadcrumb_wrapper">-->
                        <!--        <ul>-->
                        <!--            <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>-->
                        <!--            <li><a href="#">Company</a> <i class="fa fa-angle-right"></i></li>-->
                                    <!-- <li><a href="#">IT</a> <i class="fa fa-angle-right"></i></li> -->
                        <!--            <li>Company Detail</li>-->
                        <!--        </ul>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
			
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
    <!-- jp listing Single cont Wrapper Start -->
     <?php foreach($users as $basicdetail){
             }?>
  


 <div class="jp_listing_single_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper jp_rightside_listing_single_wrapper">
                                <div class="jp_rightside_job_categories_heading" style="margin-bottom: 50px;">
                                    <h4 style="text-align: center;

                                    font-size: 30px;

                                    font-weight: bold;

                                    text-transform: uppercase;">Company Overview</h4>
                                </div>
                                    <div class="col-lg-6 col-sm-6">

            <div class="card hovercard">
                <div class="cardheader" style=" background: url(<?php echo $basicdetail['logo_url']; ?>);">

                </div>
                <div class="avatar">
                    <img alt="" src="<?php echo $basicdetail['picture_url']; ?>">
                </div>
                <div class="info">
                    <div class="title">
                        <a target="_blank" href=""><?php echo $basicdetail['comp_name']; ?></a>
                    </div>
                           <div class="jp_job_post_right_overview_btn_wrapper" style="padding-bottom: 0px;">
                                    <div class="jp_job_post_right_overview_btn">
                                        <ul>
                                            <li><a href="#"><?php echo $basicdetail['industry']; ?></a></li>
                                        </ul>
                                    </div>
                                </div>
                    <div class="desc"><?php echo $basicdetail['email']; ?></div>
                    <div class="desc"><?php echo $basicdetail['phone_no']; ?></div>
                    <div class="desc">Tech geek</div>
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
                    <span class="glyphicon glyphicon-envelope"></span> <span><b>Head Name</b>- <?php echo $basicdetail['head_name']; ?></span>
                </a>    
                </div>
                </li>
                 <li>
            <div class="row  no-gutter row-eq">              
                <a href="listado.html" class="col-md-12  btnie  col-eq">
                    <span class="glyphicon glyphicon-search"></span> <span><b>Head CNIC</b>- <?php echo $basicdetail['head_cnic']; ?></span>
                </a> 
                </div>
                </li>
                 <li>
            <div class="row  no-gutter row-eq">                  
                <a href="listado.html" class="col-md-12  col-eq btnie ">
                    <span class="glyphicon glyphicon-map-marker"></span><span><b>Address</b>- <?php echo $basicdetail['comp_address']; ?></span>
                </a>              
            </div>
          </li>
                     <li>
            <div class="row  no-gutter row-eq">                  
                <a href="listado.html" class="col-md-12  col-eq btnie ">
                    <span class="glyphicon glyphicon-globe"></span><span><b>City</b>- <?php echo $basicdetail['comp_city']; ?></span>
                </a>              
            </div>
          </li>
                     <li>
            <div class="row  no-gutter row-eq">                  
                <a href="listado.html" class="col-md-12  col-eq btnie ">
                    <span class="glyphicon glyphicon-print"></span><span><b>Ownership</b>- <?php echo $basicdetail['ownership']; ?></span>
                </a>              
            </div>
          </li>
                     <li>
            <div class="row  no-gutter row-eq">                  
                <a href="listado.html" class="col-md-12  col-eq btnie ">
                    <span class="glyphicon glyphicon-user"></span><span><b>Total Employees</b>- <?php echo $basicdetail['no_employee']; ?></span>
                </a>              
            </div>
          </li>
                     <li>
            <div class="row  no-gutter row-eq">                  
                <a href="listado.html" class="col-md-12  col-eq btnie ">
                    <span class="glyphicon glyphicon-print"></span><span><b>Fax</b>- <?php echo $basicdetail['fax']; ?></span>
                </a>              
            </div>
          </li>
         
      </ul>
        </div>



<div class="col-sm-12">
    <div class="aboutcompany" style="padding-top: 30px; padding-bottom: 50px;">
        <h3 style="font-weight: bold;">About Company</h3>
        <br>
        <p><?php echo $basicdetail['description']; ?></p>
    </div>
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

   