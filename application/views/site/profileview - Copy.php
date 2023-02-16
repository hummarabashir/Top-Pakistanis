

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
                            <h2>Employee-Profile</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>
                                    <li>Employee-Profile</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->

  <?php foreach($basicdetails as $basicdetail){
            } ?>  

<div class="jp_cp_profile_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="board">
                    <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                    <div class="board-inner">
                    <ul class="nav nav-tabs" id="myTab">
                    <div class="liner"></div>
                     <li class="active">
                     <a href="#home" data-toggle="tab" title="Personal Information">
                      <span class="round-tabs one">
                              <i class="glyphicon glyphicon-home"></i>
                      </span> 
                  </a></li>

                  <li><a href="#profile" data-toggle="tab" title="Education">
                     <span class="round-tabs two">
                         <i class="glyphicon glyphicon-user"></i>
                     </span> 
           </a>
                 </li>
                 <li><a href="#messages" data-toggle="tab" title="Experience">
                     <span class="round-tabs three">
                          <i class="glyphicon glyphicon-gift"></i>
                     </span> </a>
                     </li>

                     <li><a href="#settings" data-toggle="tab" title="Portfolio">
                         <span class="round-tabs four">
                              <i class="glyphicon glyphicon-comment"></i>
                         </span> 
                     </a></li>

                     <li><a href="#doner" data-toggle="tab" title="Professional Skills">
                         <span class="round-tabs five">
                              <i class="glyphicon glyphicon-ok"></i>
                         </span> </a>
                     </li>
                     
                     </ul></div>

                     <div class="tab-content">
                      <div class="tab-pane fade in active" id="home">
                            <div class="jp_cp_right_side_wrapper">
                        <div class="jp_cp_right_side_inner_wrapper">
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
                                        <td class="td-w65"><?php echo $basicdetail['city']; ?> </td>
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
                                <h2>Description</h2>
                                <br/>
                                <p><?php echo $basicdetail['description']; ?></p>
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
                        <div class="edu-history-sec" id="education">
                              <?php foreach($educations as $education){?>
                    <div class="edu-history">
                        <i class="fa fa-graduation-cap"></i>
                        <div class="edu-hisinfo">
                          <h3><?php echo $education['board']; ?></h3>
                          <i><?php echo $education['starting_date'].' - '.$education['ending_date']; ?></i>
                          <span>Main Subject <i><?php echo $education['subject']; ?></i></span>
                          <p style="padding: 0px;">Grades <b><?php echo $education['grade']; ?></b> </p>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                        </div>
                      </div>
                      <?php  }  ?>
                    </div>
                </div>
            </div>
                          
                      </div>
                      <div class="tab-pane fade" id="messages">
                    


               <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="jp_cp_accor_heading_wrapper">
                        <h2>Experience</h2>
                        <br>
                        <br/>
                    <div class="edu-history-sec" id="experience">
                         <?php foreach($works as $work){?>
                            <div class="edu-history style2">
                        <i></i>
                        <div class="edu-hisinfo">
                          <h3><?php echo $work['designation']; ?> <span><?php echo $work['organization_name']; ?></span></h3>
                          <i><?php echo $work['from_date'].' - '.$work['to_date']; ?></i>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                        </div>
                      </div>

                      <?php } ?>
                    </div>
                </div>
            </div>
                      </div>
                      <div class="tab-pane fade" id="settings">
                         <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="jp_cp_accor_heading_wrapper">
                        <h2>Portfolio</h2>
                        <br>
                        <br/>
                        
                            <div class="mini-portfolio">
                                    <div class="mp-row">
                                          <?php foreach($portfolios as $portfolio){?>
                                        <div class="mp-col">
                                            <div class="mportolio"><img src="<?php echo $portfolio['picture_url']; ?>" alt=""><a href="<?php echo $portfolio['link']; ?>" title=""><i class="fa fa-search"></i></a></div>
                                       
                                        </div>
                                        <?php  } ?>
                                     
                                    </div>
                                </div>
                        
                        </div>
                        </div>

                      </div>
                      <div class="tab-pane fade" id="doner">

                              <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="jp_cp_accor_heading_wrapper">
                        <h2>Professional Skills</h2>
                        <br>
                        <br/>
                        <div class="progress-sec" id="skills">
                             <?php foreach($skills as $skill){?>
                            <div class="progress-sec">
                        <span>Codeigniter</span>
                        <div class="progressbar"> <div class="progress" style="width: <?php echo $skill['rating'].'%'; ?>;"><span><?php echo $skill['rating'].'%'; ?></span></div> </div>
                      </div>
                      <?php  }  ?>
                        </div>
                </div>
            </div>

                    </div>
<div class="clearfix"></div>
</div>

</div>
</div>
</div>
</div>



    <!-- jp profile Wrapper Start -->
	<div class="jp_cp_profile_main_wrapper">
      <!--   <?php foreach($basicdetails as $basicdetail){
            } ?>   --> 
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="jp_cp_left_side_wrapper">
						<div class="jp_cp_left_pro_wallpaper">
							<img src="<?php echo $basicdetail['picture_url']; ?>" alt="profile_img">
							<h2 style="text-transform: capitalize;"><?php echo $basicdetail['first_name'].' '.$basicdetail['last_name']; ?></h2>
							<p><?php echo $basicdetail['cat_name']; ?> - <?php echo $basicdetail['type']; ?></p>
							<ul>
								<li><a href="<?php echo $basicdetail['fb']; ?>"><i class="fa fa-facebook"></i></a></li>
								<li><a href="<?php echo $basicdetail['twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
								<li><a href="<?php echo $basicdetail['linkedin']; ?>"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="<?php echo $basicdetail['google']; ?>"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
						<div class="jp_cp_rd_wrapper">
							<ul>
								<li><a href="<?php echo $basicdetail['cv_url']; ?>"><i class="fa fa-download"></i> &nbsp;Download Resume</a></li>
								<li><a href="#"><i class="fa fa-phone"></i> &nbsp;Contact candidate</a></li>
							</ul>
						</div>
					</div>
                    <div class="jp_add_resume_wrapper jp_job_location_wrapper jp_cp_left_ad_res">
                        <div class="jp_add_resume_img_overlay"></div>
                        <div class="jp_add_resume_cont">
                            <img src="<?php echo base_url() ?>vendor/images/content/logo-pk.png" alt="logo" width="100%" />
                              <h4>(Optional) You can add your detailed Resume document here. Add Resume NOW!</h4>
                                        <ul>
                                          <?php  if(isset($basicdetail['cv_url'])) {?>
                                            <li><a href="<?php echo $basicdetail['cv_url']; ?>"><i class="fa fa-plus-circle"></i> &nbsp;PREVIEW</a>
                                                <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/newpopup/modal_resume_add/','Edit Resume');" style="width: 21px; height: 20px; line-height: 17px; background: red; margin: 3px;"><i class="fa fa-pencil"></i></a>
                                            </li>

                                            <?php  }else{ ?>
                                            <li><a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/newpopup/modal_resume_add/','Add Resume');"><i class="fa fa-plus-circle"></i> &nbsp;ADD RESUME</a></li>
                                            <?php  } ?>
                                           <!--   <input type="file" id="fileLoader" name="cv" title="Load File" style="display:none;" /> -->
                                         
                                        </ul>
                        </div>
                    </div>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<!-- 	<div class="jp_cp_right_side_wrapper">
						<div class="jp_cp_right_side_inner_wrapper">
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
                                        <td class="td-w65"><?php echo $basicdetail['city']; ?> </td>
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
						</div>
					</div> -->
					<div class="row">
					<!-- 	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
							<div class="jp_cp_accor_heading_wrapper">
								<h2>Description</h2>
								<br/>
								<p><?php echo $basicdetail['description']; ?></p>
							</div>
						</div> -->
      <!--       <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="jp_cp_accor_heading_wrapper">
                        <h2>Education</h2>
                        <br/>
                        <br/>
                        <div class="edu-history-sec" id="education">
                              <?php foreach($educations as $education){?>
                    <div class="edu-history">
                        <i class="fa fa-graduation-cap"></i>
                        <div class="edu-hisinfo">
                          <h3><?php echo $education['board']; ?></h3>
                          <i><?php echo $education['starting_date'].' - '.$education['ending_date']; ?></i>
                          <span>Main Subject <i><?php echo $education['subject']; ?></i></span>
                          <p style="padding: 0px;">Grades <b><?php echo $education['grade']; ?></b> </p>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                        </div>
                      </div>
                      <?php  }  ?>
                    </div>
                </div>
            </div> -->
<!-- 


               <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="jp_cp_accor_heading_wrapper">
                        <h2>Experience</h2>
                        <br>
                        <br/>
                    <div class="edu-history-sec" id="experience">
                         <?php foreach($works as $work){?>
                            <div class="edu-history style2">
                        <i></i>
                        <div class="edu-hisinfo">
                          <h3><?php echo $work['designation']; ?> <span><?php echo $work['organization_name']; ?></span></h3>
                          <i><?php echo $work['from_date'].' - '.$work['to_date']; ?></i>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                        </div>
                      </div>

                      <?php } ?>
                    </div>
                </div>
            </div> -->



    <!--      <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="jp_cp_accor_heading_wrapper">
                        <h2>Portfolio</h2>
                        <br>
                        <br/>
                        
                            <div class="mini-portfolio">
                                    <div class="mp-row">
                                          <?php foreach($portfolios as $portfolio){?>
                                        <div class="mp-col">
                                            <div class="mportolio"><img src="<?php echo $portfolio['picture_url']; ?>" alt=""><a href="<?php echo $portfolio['link']; ?>" title=""><i class="fa fa-search"></i></a></div>
                                       
                                        </div>
                                        <?php  } ?>
                                     
                                    </div>
                                </div>
                        
                        </div>
                        </div> -->
                        





        <!--       <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="jp_cp_accor_heading_wrapper">
                        <h2>Professional Skills</h2>
                        <br>
                        <br/>
                        <div class="progress-sec" id="skills">
                             <?php foreach($skills as $skill){?>
                            <div class="progress-sec">
                        <span>Codeigniter</span>
                        <div class="progressbar"> <div class="progress" style="width: <?php echo $skill['rating'].'%'; ?>;"><span><?php echo $skill['rating'].'%'; ?></span></div> </div>
                      </div>
                      <?php  }  ?>
                        </div>
                </div>
            </div> -->

						<!-- <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
							<div class="accordion_wrapper abt_page_2_wrapper">
								<div class="panel-group" id="accordion_threeLeft">
									<div class="panel panel-default">
										<div class="panel-heading bell">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion_threeLeft" href="#collapseTwentyLeftThree" aria-expanded="false">
										DIPLOMA IN COMPUTER 
									  </a>
											</h4>
										</div>
										<div id="collapseTwentyLeftThree" class="panel-collapse collapse" aria-expanded="false" role="tablist">
											<div class="panel-body">
												Praesent in nisl egestas mauris aliquam luctus. Ut auctor faucibus orci, nec semper purus ultrices idorbi nec lorem risus orbi vitae felis gravida Pellentesque id eros quis massa convallis feugiat eu quis urna.
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading bell">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion_threeLeft" href="#collapseTwentyLeftThree2" aria-expanded="false">
										HIGHER SECONDRY EDUCATION 
									  </a>
											</h4>
										</div>
										<div id="collapseTwentyLeftThree2" class="panel-collapse collapse" aria-expanded="false" role="tablist">
											<div class="panel-body">
												Praesent in nisl egestas mauris aliquam luctus. Ut auctor faucibus orci, nec semper purus ultrices idorbi nec lorem risus orbi vitae felis gravida Pellentesque id eros quis massa convallis feugiat eu quis urna.
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading bell">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion_threeLeft" href="#collapseTwentyLeftThree3" aria-expanded="false">
										HIGH SCHOOL DEGREE
									  </a>
											</h4>
										</div>
										<div id="collapseTwentyLeftThree3" class="panel-collapse collapse" aria-expanded="false" role="tablist">
											<div class="panel-body">
												Praesent in nisl egestas mauris aliquam luctus. Ut auctor faucibus orci, nec semper purus ultrices idorbi nec lorem risus orbi vitae felis gravida Pellentesque id eros quis massa convallis feugiat eu quis urna.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- jp profile Wrapper End -->
	<!-- jp downlord Wrapper Start -->



  <?php include('template/footer.php'); ?>

  <script type="text/javascript">
      $(function(){
$('a[title]').tooltip();
});

  </script>