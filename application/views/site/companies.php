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
                            <h2> Company Add</h2>
                        </div>
                        <!--<div class="jp_tittle_breadcrumb_main_wrapper">-->
                        <!--    <div class="jp_tittle_breadcrumb_wrapper">-->
                        <!--        <ul>-->
                        <!--            <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>-->
                        <!--            <li>Company Add</li>-->
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
      <li><a href="<?php echo base_url().'users/view_companies'?>" class="new_active" style="padding: 15px 5px;"><span class="fa fa-building" style="font-size:30px;"></span><br/>Promote a Company</a>
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

    <!-- jp ad post Wrapper Start -->
	<div class="jp_adp_main_section_wrapper">
		<div class="">
			<div class="row">
                 <form class="form-horizontal" role="form" method="post" enctype='multipart/form-data' action="<?php echo base_url().'users/addcompanies/add_new'?>" >
      <input type="hidden" name="edit_id" value="<?php echo $profile_row['id']?>">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_adp_form_heading_wrapper">
                        <h2>Company Information </h2>
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
                <img class="thumbnail img-preview" src="<?php if(!empty($profile_row['picture_url'])){echo $profile_row['picture_url'];}
                else{ echo base_url() ?>vendor/images/dummy.png <?php }?>" title="Preview Logo" style="width:100%; height: 250px;">
              </div>
          </div>
    </div>
</div>

		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">  
					<div class="jp_adp_form_wrapper">
              <label>Company Name <span style="color: red;">*</span></label>
						  <input type="text" placeholder="Company Name" name="comp_title" required>
					</div>
           <div class="jp_adp_form_wrapper">
                        <label>Head CNIC <span style="color: red;">*</span></label>
                        <input type="text" placeholder="Head CNIC" name="head_cnic" required>
            </div>
           <div class="jp_adp_form_wrapper">
                        <label>Total Employees <span style="color: red;">*</span></label>
                           <select name="no_employee" class="form-control" required  data-live-search="true">
              <option value="">No Of Employee</option>
              <option>1-10</option>
              <option>10-20</option>
              <option>20-30</option>
              <option>30-40</option>
              <option>40-50</option>
              <option>50-100</option>
              <option>100-200</option>
              <option>200+</option>

              </select>
                       
            </div>
                   
		</div>

				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="jp_adp_form_wrapper">
              <label>Head/CEO Name <span style="color: red;">*</span></label>
              <input type="text" placeholder="Head/CEO Name" name="ceo" required>
          </div>
           
            <div class="jp_adp_form_wrapper">
                          <div class="jp_adp_form_wrapper">
                <label>Select Industry <span style="color: red;">*</span></label>
                <select id="" class="form-control" name="industry" required>
                 <option value="">Select Industry</option>
              <option value="Telecom">Telecom</option>
              <option value="IT Software">IT Software</option>
              <option value="Businees">Businees</option>
              </select>
          </div>
            </div>
                <div class="jp_adp_form_wrapper">
                          <div class="jp_adp_form_wrapper">
                <label>Select Ownership <span style="color: red;">*</span></label>
                <select id="" class="form-control" name="ownership_type" required>
               <option value="">Select Ownership</option>
              <option>Public</option>
              <option>Private</option>
              <option>NGO</option>
              </select>
          </div>
            </div>
				</div>
       <!--      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
           
        
        </div> -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="jp_adp_textarea_main_wrapper">
                        <label>Description</label>
						            <textarea name="comp_description" id="editor2" rows="10" cols="80"></textarea>
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
                      <input type="text" placeholder="Contact Email" name="email" >
            </div>
            <div class="jp_adp_form_wrapper">
                      <label>Country <span style="color: red;">*</span></label>
                      <input class="form-control" type="text" name="country_name" required>
            </div>   
            <div class="jp_adp_form_wrapper">
                      <label>City <span style="color: red;">*</span></label>
                      <input class="form-control" type="text" name="city" required>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bottom_line_Wrapper">
            <div class="jp_adp_form_wrapper">
                        <label>Phone Number <span style="color: red;">*</span></label>
                        <input type="text" placeholder="Phone Number" name="phone_no"  required >
            </div>
            <div class="jp_adp_form_wrapper">
                        <label>Address <span style="color: red;">*</span></label>
                        <input type="text" placeholder="Company Address" name="comp_address" required>
            </div>    
            <div class="jp_adp_form_wrapper">
                        <label>Fax <span style="color: red;">*</span></label>
                        <input type="text" placeholder="Fax Number" name="fax"  required>
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