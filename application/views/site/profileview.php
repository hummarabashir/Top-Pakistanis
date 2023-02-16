

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
                        <!--<div class="jp_tittle_breadcrumb_main_wrapper">-->
                        <!--    <div class="jp_tittle_breadcrumb_wrapper">-->
                        <!--        <ul>-->
                        <!--            <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>-->
                        <!--            <li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>-->
                        <!--            <li>Employee-Profile</li>-->
                        <!--        </ul>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->

  <?php foreach($basicdetails as $basicdetail){
            } ?>  





    <!-- jp profile Wrapper Start -->
	<div class="jp_cp_profile_main_wrapper">
      <!--   <?php foreach($basicdetails as $basicdetail){
            } ?>   --> 
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="jp_cp_left_side_wrapper">
						<div class="jp_cp_left_pro_wallpaper">
							<img src="<?php echo $basicdetail['picture_url']; ?>" alt="profile_img" style="width: 100%; border: 2px solid #eee;">
							<h2 style="text-transform: capitalize;"><?php if(($this->session->userdata("logged_id")) == ($basicdetail['user_id']) ){ echo $basicdetail['first_name'].' '.$basicdetail['last_name']; }else{ 
							 echo $basicdetail['first_name'].'  '.'**********';
							}?></h2>
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
                                                    <span class="fa fa-star" style="color: #ffd800;"></span>
                                                   <?php endfor; ?>
                                                    <?php for($i=$max['rating']; $i<5; $i++):  ?>
                                                    <span class="fa fa-star"></span>
                                                   <?php endfor; ?>
                                                 
                                                 </p>
                                <p><?php if(isset($max['rating'])){echo $max['rating'];}else echo "0"; ?> out of 5 </p>
                                <p>Based on the opinion of <?php echo $totalreviews; ?>  people</p>
							<ul>
								<li><a href="<?php echo $basicdetail['fb']; ?>"><i class="fa fa-facebook"></i></a></li>
								<li><a href="<?php echo $basicdetail['twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
								<li><a href="<?php echo $basicdetail['linkedin']; ?>"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="<?php echo $basicdetail['google']; ?>"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
						<div class="jp_cp_rd_wrapper">
							<ul>
                <?php 
                //echo "hereeeeeeeeeeeeeeee";
                //print_r($credit_limit->profile_view_limit);
                if ($credit_limit->profile_view_limit>0) {
                ?>
               <!--  <li><a href="<?php echo base_url()?>users/download_resume"><i class="fa fa-download"></i> &nbsp;Download Resume</a></li> -->
                <li><a href="<?php echo base_url()?>site/profileviewreport/<?php echo $basicdetail['user_id'] ?>"><i class="fa fa-download"></i> &nbsp;Download Resume</a></li>
							<!-- 	<li><a href="<?php echo $basicdetail['cv_url']; ?>"><i class="fa fa-download"></i> &nbsp;Download Resume</a></li> -->
								<!-- <li><a href="#"><i class="fa fa-phone"></i> &nbsp;Contact candidate</a></li> -->
              <?php }else{ ?>
                <p style="color: red;">*Please upgrade your package to download cv !</p>
              <?php } ?>
							</ul>
						</div>
					</div>
                    <div class="jp_add_resume_wrapper jp_job_location_wrapper jp_cp_left_ad_res">
                        <div class="jp_add_resume_img_overlay"></div>
                        <div class="jp_add_resume_cont">
                            <img src="<?php echo base_url() ?>vendor/images/content/logo-pk.png" alt="logo" width="100%" />
                              <h4>(Optional) You can add your detailed Resume document here. Add Resume NOW!</h4>
                                        <ul>
                                     

                                          
                                            <li><a ><i class="fa fa-plus-circle"></i> &nbsp;ADD RESUME</a></li>
                                           
                                           <!--   <input type="file" id="fileLoader" name="cv" title="Load File" style="display:none;" /> -->
                                         
                                        </ul>
                        </div>
                    </div>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                    <div class="">
        <div class="">
            <div class="row">
                <div class="board">
                  
           <!--         <div class="board-inner">-->
           <!--         <ul class="nav nav-tabs navtabs" id="myTab">-->
           <!--         <div class="liner"></div>-->
           <!--          <li class="active">-->
           <!--          <a href="#home" data-toggle="tab" title="Personal Information">-->
           <!--             <p>Basic</p>-->
           <!--           <span class="round-tabs one">-->
           <!--                   <i class="glyphicon glyphicon-home"></i>-->
           <!--           </span> -->
           <!--       </a></li>-->

           <!--       <li><a href="#profile" data-toggle="tab" title="Education">-->
           <!--         <p>Education</p>-->
           <!--          <span class="round-tabs two">-->
           <!--              <i class="glyphicon glyphicon-education"></i>-->
           <!--          </span> -->
           <!--</a>-->
           <!--      </li>-->
           <!--      <li><a href="#messages" data-toggle="tab" title="Experience">-->
           <!--         <p>Experience</p>-->
           <!--          <span class="round-tabs three">-->
           <!--               <i class="glyphicon glyphicon-gift"></i>-->
           <!--          </span> </a>-->
           <!--          </li>-->

           <!--          <li><a href="#settings" data-toggle="tab" title="Portfolio">-->
           <!--             <p>Portfolio</p>-->
           <!--              <span class="round-tabs four">-->
           <!--                   <i class="glyphicon glyphicon-folder-close"></i>-->
           <!--              </span> -->
           <!--          </a></li>-->

           <!--          <li><a href="#doner" data-toggle="tab" title="Professional Skills">-->
           <!--             <p>Skills</p>-->
           <!--              <span class="round-tabs five">-->
           <!--                   <i class="glyphicon glyphicon-user"></i>-->
           <!--              </span> </a>-->
           <!--          </li>-->


           <!--          <li><a href="#reviews" data-toggle="tab" title="Reviews">-->
           <!--             <p>Reviews</p>-->
           <!--              <span class="round-tabs six">-->
           <!--                   <i class="glyphicon glyphicon-star"></i>-->
           <!--              </span> </a>-->
           <!--          </li>-->
                     
           <!--          </ul></div>-->

                     <div class="tab-content">
                      <div class="tab-pane fade in active" id="home" style="padding-top: 0px;">
                           <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                            <div class="jp_cp_right_side_wrapper">
                        <div class="jp_cp_right_side_inner_wrapper">
                            <br/>
                            <h2>PERSONAL DETAILS</h2>
             
                         
                                <div style="padding-top: 40px;">
                                  <div class="col-sm-6">
                                    <div class="form-group" style="margin-bottom: 25px;">
                                        <span style="font-size: 18px; font-weight: bold;">Full Name: </span>
                                        <!-- <td class="td-w10">:</td> -->
                                        <span style="font-size: 18px;"><?php 
                                        if(($this->session->userdata("logged_id")) == ($basicdetail['user_id']) ){      echo                                 $basicdetail['first_name'].' '.$basicdetail['last_name']; }else{
                                        echo $basicdetail['first_name'].' '.'*******'; } ?></span>
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="form-group" style="margin-bottom: 25px;">
                                        <span style="font-size: 18px; font-weight: bold;">Email: </span>
                                        <!-- <td class="td-w10">:</td> -->
                                        <span style="font-size: 18px;"><?php if(($this->session->userdata("logged_id")) == ($basicdetail['user_id']) ){  echo $basicdetail['email']; }else{
                                        echo '**********.com';
                                        }?></span>
                                    </div>
                                  </div>
                                      <div class="col-sm-6" >
                                    <div class="form-group" style="margin-bottom: 25px;">
                                        <span style="font-size: 17px; font-weight: bold;">Address: </span>
                                        <!-- <td class="td-w10">:</td> -->
                                         <span><?php echo $basicdetail['address']; ?></span>
                                    </div>
                                  </div>
                                    <div class="col-sm-6">
                                    <div class="form-group" style="margin-bottom: 25px;">
                                       <span style="font-size: 18px; font-weight: bold;">City: </span>
                              <span style="font-size: 18px;"><?php echo $basicdetail['city_name']; ?> </span>
                                    </div>
                                  </div>
                                     <div class="col-sm-6">
                                    <div class="form-group" style="margin-bottom: 25px;">
                                        <span style="font-size: 18px; font-weight: bold;">Gender: </span>
                                         <span style="font-size: 18px;"><?php echo $basicdetail['gender']; ?> </span>
                                   </div>
                                 </div>
                                       <div class="col-sm-6">
                                    <div class="form-group" style="margin-bottom: 25px;">
                                         <span style="font-size: 18px; font-weight: bold;">Age: </span>
                                        <span style="font-size: 18px;"><?php echo $basicdetail['age']; ?></span>
                                  </div>
                                </div>
                                     <div class="col-sm-6">
                                    <div class="form-group" style="margin-bottom: 25px;">
                                   <span style="font-size: 18px; font-weight: bold;">Phone: </span>
                                         <span style="font-size: 18px;"><?php if(($this->session->userdata("logged_id")) == ($basicdetail['user_id']) ){ echo $basicdetail['mob_no'];} else{
                                        echo '***********';
                                        }?></span>
                                </div>
                              </div>
                      
                                   <div class="col-sm-6">
                                    <div class="form-group" style="margin-bottom: 25px;">
                                       <span style="font-size: 18px; font-weight: bold;">Education: </span>
                                        <span style="font-size: 18px;"><?php echo $basicdetail['edulevel']; ?></span>
                                 </div>
                               </div>
                                  <div class="col-sm-6">
                                    <div class="form-group" style="margin-bottom: 25px;">
                                      <span style="font-size: 18px; font-weight: bold;">Type: </span>
                                       <span style="font-size: 18px;"><?php echo $basicdetail['type']; ?></span>
                              </div>
                            </div>

                                </div>
                       
                                <div class="jp_cp_accor_heading_wrapper">
                              
                                    <br/>
                                <h2>Description</h2>
                               
                                <p><?php echo $basicdetail['description']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                      </div>
                      <div class="tab-pane fade in active" id="profile">
                    
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
                          <h3 style="text-transform:capitalize;"><?php echo $education['board']; ?></h3>
                           <i><?php echo date("d-m-Y", strtotime($education['starting_date'])).' - '.date("d-m-Y", strtotime($education['ending_date'])); ?></i>
                          <span>Main Subject <i style="text-transform:capitalize;"><?php echo $education['subject']; ?></i></span>
                          <p style="padding: 0px;">Grades <b><?php echo $education['grade']; ?></b> </p>
                         <?php echo $education['description']; ?>
                        </div>
                      </div>
                      <?php  }  ?>
                    </div>
                </div>
            </div>
                          
                      </div>
                      <div class="tab-pane fade in active" id="messages">
                    


               <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="jp_cp_accor_heading_wrapper">
                        <h2>Experience</h2>
               <br/>
                        <br/>
                    <div class="edu-history-sec" id="experience">
                         <?php foreach($works as $work){?>
                            <div class="edu-history style2">
                        <i></i>
                        <div class="edu-hisinfo">
                          <h3 style="text-transform:capitalize;"><?php echo $work['designation']; ?> <span><?php if(($this->session->userdata("logged_id")) == ($basicdetail['user_id']) ){ echo $work['organization_name'];}else{
                          echo '**********';
                          }?></span></h3>
                           <?php if($work['check_present'] == ''){ ?>
                                            <i><?php echo date("d-m-Y", strtotime($work['from_date'])).' - '.date("d-m-Y", strtotime($work['to_date'])); ?></i>
                                            <?php }else{ ?>
                                              <i><?php echo date("d-m-Y", strtotime($work['from_date'])).' - '. 'Present'; ?></i>
                                              <?php  } ?>
                        <?php echo $work['description']; ?>
                        </div>
                      </div>

                      <?php } ?>
                    </div>
                </div>
            </div>
                      </div>
                      <div class="tab-pane fade in active" id="settings">
                         <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="jp_cp_accor_heading_wrapper">
                        <h2>Portfolio</h2>
                        <br/>
                <br/>
                        
                            <div class="mini-portfolio">
                                 
                                          <?php foreach($portfolios as $portfolio){?>
                                             <div class="row">
                                        <div class="mp-col">
                                            <div class="mportolio"><img src="<?php echo $portfolio['picture_url']; ?>" alt="" height="120"><a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/newpopup/modal_portfolio/<?php echo $portfolio['id']; ?>','Portfolio');" title=""><i class="fa fa-search"></i></a>

                                            </div>
                                        </div>
                                         <div class="mp-col" style="width: 75%;">
                                                 <p style="font-weight: bold; padding-bottom: 0px; text-transform:capitalize;"><?php echo $portfolio['title']; ?></p>
                                                  <p style="padding-bottom: 10px;"><?php echo word_limiter($portfolio['description'], 15); ?></p>
                                            </div>
                                       
                                     
                                    </div>
                                     <?php  } ?>
                                </div>
                        
                        </div>
                        </div>

                      </div>
                      <div class="tab-pane fade in active" id="doner">

                              <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="jp_cp_accor_heading_wrapper">
                        <h2>Professional Skills</h2>
                      <br/> 
               <br/>
                        <div class="progress-sec" id="skills">
                             <?php foreach($skills as $skill){?>
                            <div class="progress-sec">
                        <span style="padding-top: 25px;"><?php  echo $skill['name']; ?></span>
                        <div class="progressbar"> <div class="progress" style="width: <?php echo $skill['rating'].'%'; ?>;"><span><?php echo $skill['rating'].'%'; ?></span></div> </div>
                      </div>
                      <?php  }  ?>
                        </div>
                </div>
            </div>

                    </div>




                                    <div class="tab-pane fade in active" id="reviews">

                              <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="padding: 0px; margin-top: 40px;">
                <div class="jp_cp_accor_heading_wrapper">
                        <!-- <h2>Reviews & Ratings</h2> -->
               


          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <?php 
                                $this->db->where('profile_id', $basicdetail['user_id']);
                                $totalreviews = $this->db->count_all_results('tbl_profile_review');
                                ?>
           
                  <div class="jp_blog_single_comment_main_wrapper">
                        <div class="jp_blog_single_comment_main">
                               
                                <h2>Reviews & Ratings (<?php echo $totalreviews; ?>)</h2>
                        </div>
                           <?php if($totalreviews > 0){  ?>
                      <div class="jp_blog_single_comment_box_wrapper">
                              <div class="row">
                                  <?php foreach($review as $row) { ?>                             
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 50px;">
                                            <div class="jp_blog_comment_main_section_wrapper">
                                                <div class="jp_blog_sin_com_img_wrapper">
                                                    <img src="<?php echo $row['picture_url']; ?>" alt="blog_img" width="100%" style="height:90px;"/>
                                                </div>
                                                <div class="jp_blog_sin_com_cont_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-user"></i>&nbsp;&nbsp; <a href="#" style="text-transform:capitalize;"> <?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></a></li>
                                                        <li><i class="fa fa-calendar"></i>&nbsp;&nbsp; <a href="#"><?php echo $row['date_posted']; ?></a></li>
                                                            <?php 
                                                        $user_id = $this->session->userdata('logged_id');
                                                        if($row['id'] == $user_id){
                                                     ?>
                                                      <li>&nbsp;&nbsp; <a href="<?php echo base_url().'site/delete_review/'?><?php echo $row['review_id']; ?>/<?php echo $row['profile_id']; ?>" title=""> <i class="fa fa-trash"></i></a></li> 
                                                      <?php } ?>
                                                    </ul> 
                                                    <p style="padding: 0px;">
                                                    <?php for($i=1; $i<=$row['rating']; $i++):  ?>
                                                    <span class="fa fa-star" style="color: #ffd800;"></span>
                                                   <?php endfor; ?>
                                                    <?php for($i=$row['rating']; $i<5; $i++):  ?>
                                                    <span class="fa fa-star"></span>
                                                   <?php endfor; ?>
                                                   (<?php echo $row['rating']; ?> Star Rating)
                                                 </p>
                                                 
                                                    <p><?php echo $row['desc']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <?php  }else{ ?>
                                <br/>
                                <br/>
                                <br/>
                                                                     <div class="col-lg-12 job_section" >
        <div class="alert alert-success" role="alert">
          <strong>Sorry!</strong> No Reviews Yet.
        </div>
    </div>
                                
                                <?php } ?>
                            </div>
                            
                        </div>




<?php
if(($this->session->userdata("logged_id")) == ($basicdetail['user_id']) ){
}else{
?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="comments">
                      <div class="jp_blog_single_form_main_wrapper" style="margin-top: 30px;">
                                <div class="jp_blog_single_form_heading">
                                    <h2>Leave A Review</h2>
                                </div>
                                      <?php
                                        $user_id = $this->session->userdata('logged_id');
                                        if(isset($user_id)){
                                      ?>
                          <form role="form"  id="form1" action="<?php echo base_url().'site/addreview/add_new'?>" method="post">
                                <div class="jp_contact_form_box">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_contact_inputs_wrapper jp_contact_inputs2_wrapper">

                                            <input type="hidden" name="rating" id="rating-input" min="1" max="5" />
                                               <div class="rating" role="optgroup">
                                                <label style="font-size: 20px;">Ratings:</label>
                                                      <i class="fa fa-star-o fa-2x rating-star" id="rating-1" data-rating="1" tabindex="0" aria-label="Rate as one out of 5 stars" role="radio"></i>
                                                      <i class="fa fa-star-o fa-2x rating-star" id="rating-2" data-rating="2" tabindex="0" aria-label="Rate as two out of 5 stars" role="radio"></i>
                                                      <i class="fa fa-star-o fa-2x rating-star" id="rating-3" data-rating="3" tabindex="0" aria-label="Rate as three out of 5 stars" role="radio"></i>
                                                      <i class="fa fa-star-o fa-2x rating-star" id="rating-4" data-rating="4" tabindex="0" aria-label="Rate as four out of 5 stars" role="radio"></i>
                                                      <i class="fa fa-star-o fa-2x rating-star" id="rating-5" data-rating="5" tabindex="0" aria-label="Rate as five out of 5 stars" role="radio"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="profile_id" value="<?php echo $basicdetail['user_id']; ?>">
                                            <?php
                                            $user_id = $this->session->userdata('logged_id');
                                            ?>
                                            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_contact_inputs_wrapper jp_contact_inputs4_wrapper">
                                                <i class="fa fa-text-height"></i><textarea rows="6" name="description" placeholder="Type Your Comment *" style="background-color:#e1e1e1; color:#000;"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_contact_form_btn_wrapper">
                                                <ul>
                                                    <li><button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-plus-circle"></i>&nbsp; SUBMIT</button></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <?php }else{ ?>
                               <div class="jp_contact_form_box">
                                <div class="">
                                            <a class="btn btn-primary btn-lg" href="<?php echo base_url(); ?>site/loginaccount" style="float: left; padding: 10px 50px;">Login</a>
                                        </div>
                                    </div>
                                        <?php  } ?>
                            </div>
                        </div>
<?php  } ?>


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
<!-- 				<div class="col-sm-2">
				    <div class="board">
				          <div class="board-inner">
                    <ul class="nav nav-tabs navtabs" id="myTab">
                     <li class="active">
                     <a href="#home" data-toggle="tab" title="Personal Information">
                        <p>Basic</p>
                      <span class="round-tabs one">
                              <i class="glyphicon glyphicon-home"></i>
                      </span> 
                  </a></li>

                  <li><a href="#profile" data-toggle="tab" title="Education">
                    <p>Education</p>
                     <span class="round-tabs two">
                         <i class="glyphicon glyphicon-education"></i>
                     </span> 
           </a>
                 </li>
                 <li><a href="#messages" data-toggle="tab" title="Experience">
                    <p>Experience</p>
                     <span class="round-tabs three">
                          <i class="glyphicon glyphicon-gift"></i>
                     </span> </a>
                     </li>

                     <li><a href="#settings" data-toggle="tab" title="Portfolio">
                        <p>Portfolio</p>
                         <span class="round-tabs four">
                              <i class="glyphicon glyphicon-folder-close"></i>
                         </span> 
                     </a></li>

                     <li><a href="#doner" data-toggle="tab" title="Professional Skills">
                        <p>Skills</p>
                         <span class="round-tabs five">
                              <i class="glyphicon glyphicon-user"></i>
                         </span> </a>
                     </li>


                     <li><a href="#reviews" data-toggle="tab" title="Reviews">
                        <p>Reviews</p>
                         <span class="round-tabs six">
                              <i class="glyphicon glyphicon-star"></i>
                         </span> </a>
                     </li>
                     
                     </ul></div>
				    </div>
				</div> -->
			</div>
		</div>
	</div>
    <!-- jp profile Wrapper End -->
	<!-- jp downlord Wrapper Start -->


<?php include 'jobseeker/template/modal.php'; ?>
  <?php include('template/footer.php'); ?>

  <script type="text/javascript">
      $(function(){
$('a[title]').tooltip();
});

  </script>