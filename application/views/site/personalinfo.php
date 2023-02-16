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
                            <h2> Personal Profile </h2>
                        </div>
                        <!--<div class="jp_tittle_breadcrumb_main_wrapper">-->
                        <!--    <div class="jp_tittle_breadcrumb_wrapper">-->
                        <!--        <ul>-->
                        <!--            <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>-->
                        <!--            <li>Personal Profile</li>-->
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
      <li><a href="<?php echo base_url().'users/employer_pricing'?>" class=""><span class="fa fa-money" style="font-size:30px;"></span><br/>Pricing Plans</a>
      </li> 
  </div>
     <div class="col-md-2 col-xs-12">
      <li><a href="<?php echo base_url().'users/view_companies'?>" class=""><span class="fa fa-building" style="font-size:30px;"></span><br/>Promote a Company</a>
      </li> 
  </div>
  <div class="col-md-2 col-xs-12">
        <li><a href="<?php echo base_url().'users/add_personalinfo/load_profile'?>" class="new_active"><span class="fa fa-users" style="font-size:30px;"></span><br/>Personal Profile</a></li>
    </div>
    <div class="col-md-2 col-xs-12">
        <li><a href="#'?>" class=""><span class="fa fa-eye" style="font-size:30px;"></span><br/>Company Visits</a></li>
    </div>
    </ul>
  </div>
</div>

</div>
<div class="col-sm-12">
<?php 
foreach ($edit_profile_data as $profile_row) {
}?>
    <!-- jp ad post Wrapper Start -->
	<div class="jp_adp_main_section_wrapper">
		<div class="">
			<div class="row">
                 <form class="form-horizontal" role="form" method="post" enctype='multipart/form-data' action="<?php echo base_url().'users/add_personalinfo/edit_profile/'?> " >
      <input type="hidden" name="edit_id" value="<?php echo $profile_row['id']?>">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_adp_form_heading_wrapper">
                        <h2>Personal Information </h2>
                      <!-- <?php echo $this->session->flashdata('flash_message');  ?> -->
                    </div>
                </div>
  <div class="col-lg-5 col-sm-12 col-lg-offset-3">
      <div class="jp_adp_form_wrapper" style="text-align: center;">
                    <label>Profile Image</label>
          <div class="form-group">
                  <div class="input-group">
                <input id="fakeUploadLogo" class="form-control fake-shadow" placeholder="Choose File" disabled="disabled" style="height: auto; border-radius: 0px;">
                <div class="input-group-btn">
                  <div class="fileUpload btn btn-danger fake-shadow">
                    <span><i class="glyphicon glyphicon-upload"></i> Upload Logo</span>
                    <input id="logo-id" name="userfile" type="file" class="attachment_upload">
                  </div>
                </div>
              </div>
              <div class="main-img-preview">
                <img class="thumbnail img-preview" src="<?php if(!empty($profile_row['picture_url'])){echo $profile_row['picture_url'];}else{echo base_url() ?>vendor/images/dummy.png <?php }?>" title="Preview Logo" style="width: 100%; height: 250px;">
              </div>
          </div>
    </div>
</div>

		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">  
					<div class="jp_adp_form_wrapper">
              <label>Full Name <span style="color: red;">*</span></label>
						  <input type="text" placeholder="Full Name" name="fullname" value="<?php echo $profile_row['first_name'].' '.$profile_row['last_name']?>" required readonly>
					</div>
                   
					<div class="jp_adp_form_wrapper">
                <label>Gender <span style="color: red;">*</span></label>
						    <select id="" class="form-control" name="gender" required>
                  <option value="">Select Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <?php if($profile_row['gender'] == 'Male'){?>
                  <option value="<?php echo $profile_row['gender'];?>" <?php echo 'selected'?> ><?php echo $profile_row['gender'];?>
                  </option>
                  <?php }else{?>
                  <option value="<?php echo $profile_row['gender'];?>" <?php echo 'selected';?> >
                  <?php echo $profile_row['gender'];?></option>
                  <?php }?>
              </select>
					</div>
		</div>

				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bottom_line_Wrapper">
            <div class="jp_adp_form_wrapper">
                        <label>Company Name <span style="color: red;">*</span></label>
                        <input type="text" placeholder="Company Name" name="job_designation" value="<?php echo $profile_row['job_designation'];?>" required>
            </div>
            <div class="jp_adp_form_wrapper">
                        <label>Date of Birth <span style="color: red;">*</span></label>
                        <input type="date" placeholder="Date of Birth" name="dateofbirth" value="<?php echo $profile_row['date_ofbirth'];?>" required>
            </div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="jp_adp_textarea_main_wrapper">
                        <label>Description</label>
						            <textarea name="description" id="editor2" rows="10" cols="80"><?php echo $profile_row['cv'];?></textarea>
					</div>
				</div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top: 40px;">
            <div class="jp_adp_form_heading_wrapper">
                      <h2>Contact Information </h2>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="jp_adp_form_wrapper">
                      <label>Email Address <span style="color: red;">*</span></label>
                      <input type="text" placeholder="Email Address" name="email" value="<?php echo $profile_row['email'];?>" readonly>
            </div>
            <div class="jp_adp_form_wrapper">
                      <label>Country <span style="color: red;">*</span></label>
                      <input class="form-control" type="text" name="country" value="<?php echo $profile_row['country'];?>"  required>
            </div>   
            <div class="jp_adp_form_wrapper">
                      <label>City <span style="color: red;">*</span></label>
                      <!--<input class="form-control" type="text" name="city" value="<?php echo $profile_row['city']?>" required>-->
                        <select data-placeholder="Please Select city" name="city" required>
                                                    <optgroup label="pre-selected">
                                                    <option value="<?php echo $profile_row['city']; ?>"><?php echo $profile_row['city_name']; ?></option>
                                                    </optgroup>
                                                    <optgroup label="select-new">
                                                        <?php $cities=$this->Crud_model->get_data('tbl_city'); foreach($cities as $citie){?>
                                                        <option value="<?php echo $citie['city_id']; ?>"><?php echo $citie['city_name']; ?></option>
                                                        <?php } ?>
                                                    </optgroup>
                                                </select>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bottom_line_Wrapper">
            <div class="jp_adp_form_wrapper">
                        <label>Phone Number <span style="color: red;">*</span></label>
                        <input type="text" placeholder="Phone Number" name="phone" value="<?php echo $profile_row['phone']?>" required >
            </div>
            <div class="jp_adp_form_wrapper">
                        <label>Address <span style="color: red;">*</span></label>
                        <input type="text" placeholder="Address" name="address" value="<?php echo $profile_row['address'];?>" required>
            </div>    
            <div class="jp_adp_form_wrapper">
                        <label>Mobile <span style="color: red;">*</span></label>
                        <input type="text" placeholder="Mobile Number" name="cell" value="<?php echo $profile_row['mobile'];?>" required>
            </div>
        </div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="jp_adp_choose_resume_bottom_btn_post">
						<ul>
							<li><button type="submit" class="btn btn-primary btn-block btn-lg"><i class="fa fa-plus-circle"></i>&nbsp; Save</button></li>
						</ul>
					</div>
				</div>
      </form>
			</div>
		</div>
	</div>
    <!-- jp ad post Wrapper End -->
</div>
</div>
</div>
</div>

       <?php include('template/footer.php'); ?>