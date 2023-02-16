<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Top Pakistanis" />
    <meta name="keywords" content="Top Pakistanis" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--srart theme style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css/owl.theme.default.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css/style_II.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css/responsive2.css" />
    <link href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>vendor/images/content/logo-pk.png" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
</head>
<body>
    <!-- Header Wrapper End -->
	  <!-- jp Tittle Wrapper Start -->
 
    <!-- jp Tittle Wrapper End -->

  <?php foreach($basicdetails as $basicdetail){
            } ?>  
    <!-- jp profile Wrapper Start -->
	<div class="">
    <h2 style="text-transform: uppercase; text-align: center; text-decoration: underline; padding-bottom: 30px;">Top Pakistanis Profile</h2>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12">
					<div class="jp_cp_left_side_wrapper">
						<div class="jp_cp_left_pro_wallpaper">
							<img src="<?php echo $basicdetail['picture_url']; ?>" alt="profile_img" style="height:200px;">
							<h2 style="text-transform: capitalize;"><?php echo $basicdetail['first_name'].' '.$basicdetail['last_name']; ?></h2>
							<p><?php echo $basicdetail['cat_name']; ?> - <?php echo $basicdetail['type']; ?></p>
            
              <?php foreach($maxreview as $max){
                  } ?>  
                                <?php 
                                $this->db->where('profile_id', $basicdetail['user_id']);
                                $this->db->where('rating', $max['rating']);
                                $totalreviews = $this->db->count_all_results('tbl_profile_review');
                                ?>
                                                <p>
                                                    <?php for($i=1; $i<=$max['rating']; $i++):  ?>
                                                    <span class="fa" style="color: yellow;">&#xf005;</span>
                                                   <?php endfor; ?>
                                                    <?php for($i=$max['rating']; $i<5; $i++):  ?>
                                                    <span class="fa">&#xf006;</span>
                                                   <?php endfor; ?>
                                                 
                                                 </p>
                                <p><?php if(isset($max['rating'])){echo $max['rating'];}else echo "0"; ?> out of 5 </p>
                                <p>Based on the opinion of <?php echo $totalreviews; ?>  people</p>
						<!-- 	<ul>
								<li><a href="<?php echo $basicdetail['fb']; ?>"><i class="fa">&#xf09a;</i></a></li>
								<li><a href="<?php echo $basicdetail['twitter']; ?>"><i class="fa">&#xf081;</i></a></li>
								<li><a href="<?php echo $basicdetail['linkedin']; ?>"><i class="fa">&#xf0e1;</i></a></li>
                                    <li><a href="<?php echo $basicdetail['google']; ?>"><i class="fa">&#xf0d4;</i></a></li>
							</ul> -->
						</div>
					</div>        
				</div>
	<div class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
    <div class="">
        <div class="">
            <div class="row">
                <div class="board">
                    <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                     <div class="tab-content">
                      <div class="tab-pane fade in active" id="home">
                           <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                            <div class="jp_cp_right_side_wrapper">
                        <div class="jp_cp_right_side_inner_wrapper">
                            <br/>
                            <h2>PERSONAL DETAILS</h2>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="td-w25">Full Name</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?php echo $basicdetail['first_name'].' '.$basicdetail['last_name']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-w25">Email Address</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?php echo $basicdetail['email']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-w25">Address</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?php echo $basicdetail['address']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-w25">City</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?php echo $basicdetail['city_name']; ?> </td>
                                    </tr>
                                     <tr>
                                        <td class="td-w25">Gender</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?php echo $basicdetail['gender']; ?> </td>
                                    </tr>
                                     <tr>
                                        <td class="td-w25">Age</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?php echo $basicdetail['age']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td class="td-w25">Phone</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?php echo $basicdetail['mob_no']; ?></td>
                                    </tr>
                                      <tr>
                                        <td class="td-w25">Category</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?php echo $basicdetail['cat_name']; ?></td>
                                    </tr>
                                      <tr>
                                        <td class="td-w25">Subcategory</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?php echo $basicdetail['subcat_name']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-w25">Education Level</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?php echo $basicdetail['edulevel']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-w25">Type</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?php echo $basicdetail['type']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                                <div class="jp_cp_accor_heading_wrapper">
                                    <br/>
                                    <br/>
                                <h2>Description</h2>
                               
                                <p style="padding: 0px; margin: 0px;"><?php echo $basicdetail['description']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




           <div class="tab-pane fade" id="doner">
              <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="jp_cp_accor_heading_wrapper">
                        <h2>Professional Skills</h2>
                      <br/> 
                      <br/>
                        <div class="progress-sec" id="skills">
                             <?php foreach($skills as $skill){?>
                            <div class="progress-sec">
                        <span style="padding-top: 25px;"><?php  echo $skill['name']; ?></span>
                        <div class="progressbar"> <div class="progress" style="width: <?php echo $skill['rating'].'%'; ?>; height: 10px;"><span><?php echo $skill['rating'].'%'; ?></span></div> </div>
                      </div>
                      <?php  }  ?>
                    </div>
                </div>
            </div>
          </div>

                  



<div class="tab-pane fade" id="profile">
              <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="jp_cp_accor_heading_wrapper">
                        <h2>Education</h2>
                      <br/>
                      <br/>
  <table class="table table-bordered" border="1">
    <thead>
      <tr style="background: #39b54a;">
        <th style="color: #fff; width: 25%;">Institute</th>
        <th style="color: #fff; width: 10%;">Started On</th>
        <th style="color: #fff; width: 10%;">Ending</th>
        <th style="color: #fff; width: 10%;">Subject</th>
        <th style="color: #fff; width: 10%;">Grade</th>
        <th style="color: #fff; width: 30%;">Description</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($educations as $education){?>
      <tr>  
        <td><i style="font-size:24px" class="fa">&#xf19d;</i> <?php echo $education['board']; ?></td>
        <td><?php echo $education['starting_date']; ?></td>
        <td><?php echo $education['ending_date']; ?></td>
        <td><?php echo $education['subject']; ?></td>
        <td><?php echo $education['grade']; ?></td>
        <td><?php echo $education['description']; ?></td>
      </tr>
       <?php  }  ?>
    </tbody>
  </table>    
    </div>
  </div>         
</div>








<div class="tab-pane fade" id="messages">
               <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="jp_cp_accor_heading_wrapper">
                    <h2>Experience</h2>
                        <br/>
                        <br/>
   <table class="table table-bordered" border="1">
    <thead>
      <tr style="background: #39b54a;">
        <th style="color: #fff; width: 25%;">Designation</th>
        <th style="color: #fff; width: 10%;">Started On</th>
        <th style="color: #fff; width: 10%;">Ending</th>
        <th style="color: #fff; width: 10%;">Organization</th>
        <!-- <th style="color: #fff;">Grade</th> -->
        <th style="color: #fff; width: 30%;">Description</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($works as $work){?>
      <tr>    
        <td><i style="font-size:24px" class="fa">&#xf0eb;</i> <?php echo $work['designation']; ?></td>
        <td><?php echo $work['from_date']; ?></td>
        <td><?php echo $work['to_date']; ?></td>
        <td><?php echo $work['organization_name']; ?></td>
        <!-- <td><?php echo $education['grade']; ?></td> -->
        <td><?php echo $work['description']; ?></td>
         
      </tr>
       <?php  }  ?>
    </tbody>
  </table>
      </div>
    </div>
</div>




           








<div class="tab-pane fade" id="settings">
              <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="jp_cp_accor_heading_wrapper">
                        <h2>Portfolio</h2>
                        <br/>
                        <br/>
    <table class="table table-bordered" border="1">
    <thead>
      <tr style="background: #39b54a;">
        <th style="color: #fff; width: 20%;">Portfolio</th>
        <th style="color: #fff; width: 20%;">Title</th>
           <!-- <th style="color: #fff; width: 10%;">Link</th> -->
        <th style="color: #fff; width: 30%;">Description</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($portfolios as $portfolio){?>
      <tr>
            <td><img src="<?php echo $portfolio['picture_url']; ?>" height="100"></td> 
        <td><?php echo $portfolio['title']; ?></td>
          <!-- <td><?php echo $portfolio['link']; ?></td> -->
        <td><?php echo $portfolio['description']; ?></td>
      </tr>
       <?php  }  ?>
    </tbody>
  </table>
        </div>
    </div>
</div>






<div class="clearfix"></div>
</div>
</div>
</div>
</div>
</div>
				</div>
			</div>
		</div>
	</div>
    <!-- jp profile Wrapper End -->
	<!-- jp downlord Wrapper Start -->


     <div class="footer-bottom" style="margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="footer-bottom-contents">
                    <ul class="right col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                          <li>2019 Top Pakistanis, All Rights Reserved.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url() ?>vendor/js/jquery_min.js"></script>
    <script src="<?php echo base_url() ?>vendor/js/bootstrap.js"></script>
    <script src="<?php echo base_url() ?>vendor/js/jquery.menu-aim.js"></script>
    <script src="<?php echo base_url() ?>vendor/js/jquery.countTo.js"></script>
    <script src="<?php echo base_url() ?>vendor/js/jquery.inview.min.js"></script>
    <script src="<?php echo base_url() ?>vendor/js/owl.carousel.js"></script>
    <script src="<?php echo base_url() ?>vendor/js/modernizr.js"></script>
    <script src="<?php echo base_url() ?>vendor/js/custom.js"></script>
    <!--main js file end-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    </body>
    </html>

