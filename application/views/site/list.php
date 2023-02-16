

 <?php include('template/header.php'); ?>


    <!-- Header Wrapper End -->
        <?php        
 $user_id = $this->session->userdata('logged_id');
 if(isset($user_id)){
     if ($this->session->userdata('logged_jobseekar') == 1) {
     if($this->user->check_profile($user_id) == false){
?>
<div id="myModalonload" class="modal fade" role="dialog">
  <div class="modal-dialog" style="margin: 120px auto;">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background:#f6b33d -moz-linear-gradient(center top , #f6b33d 5%, #d29105 100%) repeat scroll 0 0;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color: #fff; font-weight: bold;">Welcome <?php echo $this->session->userdata('logged_name'); ?></h4>
      </div>
      <div class="modal-body text-center">
        <h1>Your Profile is Incomplete !!</h1>
        <br/>
        <p><?php echo $this->session->userdata('logged_name'); ?> complete your profile to list your resume for Best Matched Resume </p>
        <br/>
        <a class="btn btn-success" href="<?php echo base_url().'users/userdashboard'; ?>" style="padding: 15px;">Go to Dashboard</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php } } }?>
    <!-- Header Wrapper End -->
    <div class="jp_bottom_footer_Wrapper_header_img_wrapper">
        <div class="jp_slide_img_overlay"></div>
        <div class="jp_banner_heading_cont_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_job_heading_wrapper">
                            <div class="jp_job_heading">
                                <h1><span>3,000+</span> Browse Profiles</h1>
                                <p>Find Profiles, Employment & Career Opportunities</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="jp_header_form_wrapper">
                <form method="post" action="<?php echo base_url()?>users/search_jobs" enctype="multipart/form-data">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <input type="text" placeholder="Keyword e.g. (Title, Description, Tags)" name="keyword">
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                  <div class="jp_form_location_wrapper">
                    <i class="fa fa-dot-circle-o first_icon"></i>
                    <select name="city_id">
                      <optgroup>
                        <option value="">Select Location</option>
                      </optgroup>
                      <optgroup>
                        <?php foreach($cities as $city){ ?>
                    <option value="<?php echo $city['city_id']; ?>"><?php echo $city['city_name']; ?></option>
                        <?php } ?>
                      </optgroup>
                    </select>

                    <i class="fa fa-angle-down second_icon"></i>
                  </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                  <div class="jp_form_exper_wrapper">
                    <i class="fa fa-dot-circle-o first_icon"></i>
                    <select name="category_id">
                      <optgroup>
                        <option value="">Select Category</option>
                      </optgroup>
                      <optgroup>
                        <?php foreach($categories as $categorie){ ?>
                        <option value="<?php echo $categorie['cat_id']; ?>"><?php echo $categorie['cat_name']; ?></option>
                        <?php } ?>
                      </optgroup> 
                    </select>
                    <i class="fa fa-angle-down second_icon"></i>
                  </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                  <div class="jp_form_btn_wrapper">
                    <ul>
                      <li><button type="submit" class="a"><i class="fa fa-search"></i> Search</button></li>
                    </ul>
                  </div>
                </div>

              </form>
              </div>
            </div>
                <!--     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_banner_main_jobs_wrapper">
                            <div class="jp_banner_main_jobs">
                                <ul>
                                    <li><i class="fa fa-tags"></i> Trending Keywords :</li>
                                    <li><a href="#">ui designer,</a></li>
                                    <li><a href="#">developer,</a></li>
                                    <li><a href="#">senior</a></li>
                                    <li><a href="#">it company,</a></li>
                                    <li><a href="#">design,</a></li>
                                    <li><a href="#">call center</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    
    
    
  
    <!-- Header W rapper End -->
    <!-- jp listing sidebar Wrapper Start -->
    <div class="jp_listing_sidebar_main_wrapper">
        <div class="container">
            <div class="row">
              <!--    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_listing_heading_wrapper">
                        <h2>We found <span>357</span> Matches for you.</h2>
                    </div>
                </div>  -->

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="row">
                          <form  method="post" action="<?php echo base_url('users/search_sidebar'); ?>">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper">
                                <div class="jp_rightside_job_categories_heading">
                                    <h4>Profiles by Category</h4>
                                </div>
                                <div class="jp_rightside_job_categories_content">
                                    <div class="handyman_sec1_wrapper">
                                        <div class="content">
                                            <div class="box">
                                                <ul id="myList">
                                                  <?php foreach($categories as $categorie){ ?>
    <?php 
$this->db->where(
  array(
    'cat_id' => $categorie['cat_id'],
    )
  );
 $cat_count = $this->db->count_all_results('cv_contact_info');
    ?>
                                                <li><p>
                                                    <input type="checkbox" class="brands" name="cat_id" id="<?php echo $categorie['cat_name']; ?>" value="<?php echo $categorie['cat_id']; ?>"><label for="<?php echo $categorie['cat_name']; ?>"><?php echo $categorie['cat_name']; ?> <span>(<?php echo  $cat_count;  ?>)</span></label>
                                                </p></li>
                                                     <?php } ?>
                                                     <div id="loadMore"><i class="fa fa-plus-circle"></i> View More</div>
                                                     </ul>
                                            </div>
                                        </div>
                                        <!--<ul>-->
                                        <!--    <li><i class="fa fa-plus-circle"></i> <a href="#">SHOW MORE</a></li>-->
                                        <!--</ul>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper jp_job_location_wrapper">
                                <div class="jp_rightside_job_categories_heading">
                                    <h4>Profiles by Location</h4>
                                </div>
                                <div class="jp_rightside_job_categories_content">
                                    <div class="handyman_sec1_wrapper">
                                        <div class="content">
                                            <div class="box">
                                                <ul id="myList1">
                                                  <?php foreach($cities as $city){ ?>
   <?php 
$this->db->where(
  array(
    'city' => $city['city_id'],
    )
  );
 $city_count = $this->db->count_all_results('cv_contact_info');
    ?>
                                                <li><p>
                                                    <input type="checkbox" class="brands" name="city_id" id="<?php echo $city['city_name']; ?>" value="<?php echo $city['city_id']; ?>"><label for="<?php echo $city['city_name']; ?>"><?php echo $city['city_name']; ?> <span>(<?php echo $city_count; ?>)</span></label>
                                                </p></li>
                                                     <?php } ?>
   <div id="loadMore1"><i class="fa fa-plus-circle"></i> View More</div>
                                                     </ul>
                                            </div>
                                        </div>
                                        <!--<ul>-->
                                        <!--    <li><i class="fa fa-plus-circle"></i> <a href="#">SHOW MORE</a></li>-->
                                        <!--</ul>-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper jp_job_location_wrapper">
                                <div class="jp_rightside_job_categories_heading">
                                    <h4>Profiles By Types</h4>
                                </div>
                                <div class="jp_rightside_job_categories_content">
                                    <div class="handyman_sec1_wrapper">
                                        <div class="content">
                                            <div class="box">
                                                        <p>
                                                        <input type="checkbox" id="c34" name="cb" value="Part Time">
                                                        <label for="c34">Part-time <span>(   <?php 
                                                                $this->db->where(
                                                                  array(
                                                                    'type' => 'Part Time',
                                                                    )
                                                                  );
                                                                 echo $type_count = $this->db->count_all_results('cv_contact_info');
                                                                    ?>)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c35" name="cb" value="Contract">
                                                        <label for="c35">Contract <span>(<?php 
                                                                $this->db->where(
                                                                  array(
                                                                    'type' => 'Contract',
                                                                    )
                                                                  );
                                                                 echo $type_count = $this->db->count_all_results('cv_contact_info');
                                                                    ?>)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c36" name="cb" value="Freelance">
                                                        <label for="c36">Freelance  <span>(<?php 
                                                                $this->db->where(
                                                                  array(
                                                                    'type' => 'Freelance',
                                                                    )
                                                                  );
                                                                 echo $type_count = $this->db->count_all_results('cv_contact_info');
                                                                    ?>)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c37" name="cb" value="Full Time">
                                                        <label for="c37">Full Time   <span>(<?php 
                                                                $this->db->where(
                                                                  array(
                                                                    'type' => 'Full Time',
                                                                    )
                                                                  );
                                                                 echo $type_count = $this->db->count_all_results('cv_contact_info');
                                                                    ?>)</span></label>
                                                    </p>
                                            </div>
                                        </div>
                                        <!--<ul>-->
                                        <!--    <li><i class="fa fa-plus-circle"></i> <a href="#">SHOW MORE</a></li>-->
                                        <!--</ul>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_form_btn_wrapper" style="margin-top: 40px;">
                                    <ul style="width: 100%;">
                                        <li><button type="submit" class="a btn-block" style="border-radius: 0px;"><i class="fa fa-search"></i> Search</button></li>
                                    </ul>
                                </div>
                             
                        </div>
                    </form>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_listing_tabs_wrapper">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="gc_causes_select_box_wrapper">
                                        <div class="gc_causes_select_box" style="color: #fff;">
                                            <select>
												<option>Sort Default</option>
												<option>Sort ASC</option>
												<option>Sort DESC</option>
											</select><i class="fa fa-angle-down"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="gc_causes_view_tabs_wrapper">
                                        <div class="gc_causes_view_tabs">
                                            <ul class="nav nav-pills">
                                                <li class="active"><a data-toggle="pill" href="#grid"><i class="fa fa-th-large"></i></a></li>
                                                <li><a data-toggle="pill" href="#list"><i class="fa fa-list"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                    <div class="gc_causes_search_box_wrapper gc_causes_search_box_wrapper2">
                                        <div class="gc_causes_search_box">
                                            <p>You're Watching &nbsp;<span>01 to 10</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="tab-content">
                                <div id="grid" class="tab-pane fade in active">
                                    <div class="row">
    
             <?php  if(isset($message)){ ?>
    <div class="col-lg-12 job_section" >
        <div class="alert alert-success" role="alert">
          <strong>Sorry!</strong> <?php echo $message; ?>
        </div>
    </div>
        <?php }  ?>
    
    
    <?php  
if (count($users) > 0 ) { ?>
  <?php foreach($users as $basicdetail){
             ?>  
<?php        if($this->user->check_profile($basicdetail['user_id'])){
?>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="mportolio jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="<?php echo $basicdetail['picture_url']; ?>" alt="post_img" style="width:125px; height: 125px;"/>
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_job_post_grid_right_cont jp_cl_job_cont">
                                                                <h4 style="text-transform: capitalize;"><?php echo $basicdetail['first_name']; ?> <?php echo $basicdetail['last_name']; ?></h4>
                                                                <p><?php echo $basicdetail['cat_name']; ?></p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; <?php echo $basicdetail['city_name']; ?></li>
                                                                </ul>
																<div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper jp_cl_aply_btn">
																	<ul>
																		<li><a href="#"><?php echo $basicdetail['type']; ?></a></li>
																	</ul>
																</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper" style="min-height:90px;">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                                      <?php 
  $id = $basicdetail['user_id'];
        // $cvskill = $this->db->get_where('cv_skill', array('user_id' => $id))->result_array();
            $query = $this->db->select('*')
                ->from('cv_skill')
                ->where('user_id', $id)
                ->limit(4)
                ->get();

       $cvskill = $query->result_array();
?>
                                                         <?php  foreach($cvskill as $skill){?>
                                                        <li><a href="#"><?php echo $skill['name']; ?></a></li>
                                                        <?php } ?>
                                                       <!--  <li><a href="#">developer,</a></li> -->
                                                    </ul>
                                                </div>
                                                <a href="<?php echo base_url(); ?>users/profileview/<?php echo $basicdetail['user_id']; ?>" title=""><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>

                                        <?php  } } }else{?>
                                          <div class="col-lg-12 job_section" >
        <div class="alert alert-success" role="alert">
          <strong>Sorry!</strong> No data found.
        </div>
    </div>
                                        <?php } ?>
                                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                            <div class="pager_wrapper gc_blog_pagination">
                                             <?php echo $this->pagination->create_links(); ?>
                                            </div>
                                        </div>


               <!--                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                    <div class="row">
                                                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="<?php echo base_url() ?>vendor/images/content/job_post_img2.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_job_post_grid_right_cont jp_cl_job_cont">
                                                                <h4>Wordpress Developer</h4>
                                                                <p>MARKETING JOB</p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
																<div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper jp_cl_aply_btn">
																	<ul>
																		<li><a href="#">Part Time</a></li>
																	</ul>
																</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                    <div class="row">
                                                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="<?php echo base_url() ?>vendor/images/content/job_post_img3.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_job_post_grid_right_cont jp_cl_job_cont">
                                                                <h4>PHP Developer</h4>
                                                                <p>MARKETING JOB</p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
																<div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper jp_cl_aply_btn">
																	<ul>
																		<li><a href="#">Freelance</a></li>
																	</ul>
																</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                    <div class="row">
                                                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="<?php echo base_url() ?>vendor/images/content/job_post_img4.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_job_post_grid_right_cont jp_cl_job_cont">
                                                                <h4>Full Stack Developer</h4>
                                                                <p>MARKETING JOB</p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
																<div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper jp_cl_aply_btn">
																	<ul>
																		<li><a href="#">Contract</a></li>
																	</ul>
																</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                    <div class="row">
                                                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="<?php echo base_url() ?>vendor/images/content/job_post_img5.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_job_post_grid_right_cont jp_cl_job_cont">
                                                                <h4>Game Developer</h4>
                                                                <p>MARKETING JOB</p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
																<div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper jp_cl_aply_btn">
																	<ul>
																		<li><a href="#">Part Time</a></li>
																	</ul>
																</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                    <div class="row">
                                                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="<?php echo base_url() ?>vendor/images/content/job_post_img1.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_job_post_grid_right_cont jp_cl_job_cont">
                                                                <h4>Graphic Designer</h4>
                                                                <p>MARKETING JOB</p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
																  
																<div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper jp_cl_aply_btn">
																	<ul>
																		<li><a href="#">Full Time</a></li>
																	</ul>
																</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                    <div class="row">
                                                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="<?php echo base_url() ?>vendor/images/content/job_post_img2.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_job_post_grid_right_cont jp_cl_job_cont">
                                                                <h4>ERP Solutions</h4>
                                                                <p>MARKETING JOB</p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
																  
																<div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper jp_cl_aply_btn">
																	<ul>
																		<li><a href="#">Contract</a></li>
																	</ul>
																</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="<?php echo base_url() ?>vendor/images/content/job_post_img1.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_job_post_grid_right_cont jp_cl_job_cont">
                                                                <h4>HTML Developer</h4>
                                                                <p>MARKETING JOB</p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                                <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper jp_cl_aply_btn">
                                                                    <ul>
                                                                        <li><a href="#">Full Time</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                    <div class="row">
                                                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="<?php echo base_url() ?>vendor/images/content/job_post_img2.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_job_post_grid_right_cont jp_cl_job_cont">
                                                                <h4>Wordpress Developer</h4>
                                                                <p>MARKETING JOB</p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                                <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper jp_cl_aply_btn">
                                                                    <ul>
                                                                        <li><a href="#">Part Time</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                    <div class="row">
                                                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="<?php echo base_url() ?>vendor/images/content/job_post_img3.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_job_post_grid_right_cont jp_cl_job_cont">
                                                                <h4>PHP Developer</h4>
                                                                <p>MARKETING JOB</p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                                <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper jp_cl_aply_btn">
                                                                    <ul>
                                                                        <li><a href="#">Freelance</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                    <div class="row">
                                                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="<?php echo base_url() ?>vendor/images/content/job_post_img4.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_job_post_grid_right_cont jp_cl_job_cont">
                                                                <h4>Full Stack Developer</h4>
                                                                <p>MARKETING JOB</p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                                <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper jp_cl_aply_btn">
                                                                    <ul>
                                                                        <li><a href="#">Contract</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                    <div class="row">
                                                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="<?php echo base_url() ?>vendor/images/content/job_post_img5.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_job_post_grid_right_cont jp_cl_job_cont">
                                                                <h4>Game Developer</h4>
                                                                <p>MARKETING JOB</p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                                <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper jp_cl_aply_btn">
                                                                    <ul>
                                                                        <li><a href="#">Part Time</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                    <div class="row">
                                                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="<?php echo base_url() ?>vendor/images/content/job_post_img1.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_job_post_grid_right_cont jp_cl_job_cont">
                                                                <h4>Graphic Designer</h4>
                                                                <p>MARKETING JOB</p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                                  
                                                                <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper jp_cl_aply_btn">
                                                                    <ul>
                                                                        <li><a href="#">Full Time</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                    <div class="row">
                                                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="<?php echo base_url() ?>vendor/images/content/job_post_img2.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_job_post_grid_right_cont jp_cl_job_cont">
                                                                <h4>ERP Solutions</h4>
                                                                <p>MARKETING JOB</p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                                  
                                                                <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper jp_cl_aply_btn">
                                                                    <ul>
                                                                        <li><a href="#">Contract</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> -->
                                  <!--       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                            <div class="pager_wrapper gc_blog_pagination">
                                                <ul class="pagination">
                                                    <li><a href="#">Prev.</a></li>
                                                    <li><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li class="hidden-xs"><a href="#">4</a></li>
                                                    <li><a href="#">Next</a></li>
                                                </ul>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                    <div id="list" class="tab-pane fade">
                                    <div class="row">
                                        <?php if(count($users) > 0 ){  ?>
                                          <?php foreach($users as $basicdetail){
             ?>  
<?php        if($this->user->check_profile($basicdetail['user_id'])){
?>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="mportolio jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="<?php echo $basicdetail['picture_url']; ?>" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_cl_job_cont">
                                                               <h4 style="text-transform: capitalize;"><?php echo $basicdetail['first_name']; ?> <?php echo $basicdetail['last_name']; ?></h4>
                                                                <p><?php echo $basicdetail['cat_name']; ?></p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; <?php echo $basicdetail['city_name']; ?></li>
                                                                </ul>
																  
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="<?php echo base_url(); ?>users/profileview/<?php echo $basicdetail['user_id']; ?>"><?php echo $basicdetail['type']; ?></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                                             <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                                      <?php 
  $id = $basicdetail['user_id'];
        // $cvskill = $this->db->get_where('cv_skill', array('user_id' => $id))->result_array();
         $query = $this->db->select('*')
                ->from('cv_skill')
                ->where('user_id', $id)
                ->limit(4)
                ->get();

       $cvskill = $query->result_array();
?>
                                                         <?php  foreach($cvskill as $skill){?>
                                                        <li><a href="#"><?php echo $skill['name']; ?></a></li>
                                                        <?php } ?>
                                                       <!--  <li><a href="#">developer,</a></li> -->
                                                    </ul>
                                                </div>
                                                   <a href="<?php echo base_url(); ?>users/profileview/<?php echo $basicdetail['user_id']; ?>" title=""><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>

                                        <?php  } } } else{?>
                                                                              <div class="col-lg-12 job_section" >
        <div class="alert alert-success" role="alert">
          <strong>Sorry!</strong> No data found.
        </div>
    </div>
    <?php  } ?>
                                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                            <div class="pager_wrapper gc_blog_pagination">
                                             <?php echo $this->pagination->create_links(); ?>
                                            </div>
                                        </div>
                                        
                                <!--         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="<?php echo base_url() ?>vendor/images/content/job_post_img5.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_cl_job_cont">
                                                               <h4>PHP Developer</h4>
                                                                <p>MARKETING JOB</p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
																  
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#">Full Time</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="<?php echo base_url() ?>vendor/images/content/job_post_img1.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_cl_job_cont">
                                                               <h4>Front End Developer</h4>
                                                                <p>MARKETING JOB</p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
																  
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#">Freelance</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="<?php echo base_url() ?>vendor/images/content/job_post_img2.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_cl_job_cont">
                                                               <h4>Graphic Designer</h4>
                                                                <p>MARKETING JOB</p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
																  
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#">Full Time</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="<?php echo base_url() ?>vendor/images/content/job_post_img3.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_cl_job_cont">
                                                               <h4>Codeigniter</h4>
                                                                <p>MARKETING JOB</p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
																  
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#">Contract</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="<?php echo base_url() ?>vendor/images/content/job_post_img3.jpg" alt="post_img" />
                                                            </div>
                                                           <div class="jp_job_post_right_cont jp_cl_job_cont">
                                                               <h4>Java Developer</h4>
                                                                <p>MARKETING JOB</p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
																  
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#">Full Time</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="<?php echo base_url() ?>vendor/images/content/job_post_img4.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_cl_job_cont">
                                                               <h4>Wordpress Developer</h4>
                                                                <p>MARKETING JOB</p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
																  
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#">Freelance</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="<?php echo base_url() ?>vendor/images/content/job_post_img5.jpg" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_cl_job_cont">
                                                               <h4>HTML Developer</h4>
                                                                <p>MARKETING JOB</p>
                                                                <ul>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
																  
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#">Part Time</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> -->
                                 <!--        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                            <div class="pager_wrapper gc_blog_pagination">
                                                <ul class="pagination">
                                                    <li><a href="#">Prev.</a></li>
                                                    <li><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li class="hidden-xs"><a href="#">4</a></li>
                                                    <li><a href="#">Next</a></li>
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
    </div>
    <!-- jp listing sidebar Wrapper End -->
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

    <script type="text/javascript">
        $("input:checkbox").click(function() {
    if ($(this).is(":checked")) {
        var group = "input:checkbox[name='" + $(this).attr("name") + "']";
        $(group).prop("checked", false);
        $(this).prop("checked", true);
    } else {
        $(this).prop("checked", false);
    }
});
    </script>