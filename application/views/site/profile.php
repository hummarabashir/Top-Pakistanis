

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
                            <h2> Profile </h2>
                        </div>
                    
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
        <a href="<?php echo base_url().'users/userdashboard'?>" ><span class="fa fa-home" style="font-size:30px;"></span><br/>Dashboard</a>
      </li>
  </div>
  <div class="col-md-2 col-xs-12">
        <li><a href="<?php echo base_url().'users/profile'?>" class="new_active"><span class="fa fa-user" style="font-size:30px;"></span><br/> My Profile</a></li>
    </div>
      <div class="col-md-2 col-xs-12">
        <li><a href="<?php echo base_url().'users/myprofileview'?>" class=""><span class="fa fa-users" style="font-size:30px;"></span><br/> View Profile </a></li>
    </div>
      <div class="col-md-2 col-xs-12">
        <li><a href="<?php echo base_url().'site/change_password'?>"><span class="fa fa-pencil" style="font-size:30px;"></span><br/> Change Password </a></li>
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
</div>
<br/>
<br/>
<br/>
<div class="row">
        <div class="col-sm-4">

 <?php foreach($basicdetails as $basicdetail){
            } ?> 
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_add_resume_wrapper">
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

</div>
<div class="col-sm-8">
    <!-- jp ad post Wrapper Start -->
	<div class="jp_adp_main_section_wrapper">
		<div class="">
			<div class="row">
 <?php foreach($basicdetails as $basicdetail){
            } ?> 
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_adp_form_heading_wrapper">
                        <h2>Personal Information <?php if($this->user->check_profile($basicdetail['user_id'])){?>
                          <!-- <span style="color: red;">Completed</span> -->
                <?php } else{ ?>
                <span style="color: red;">( Complete your profile !! )</span>
                <?php  } ?></h2>
                <div class="alert alert-info">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong> Info! </strong> Your profile will only be shown in the list if your profile is completed. All Fields with * are mandatory
</div>
                       <!--  <p style="float: left;">Your profile will only be shown in the list if your profile is completed. All Fields with * are mandatory</p> -->
                    </div>
                </div>
              


<!--  <form method="post" action="<?php echo base_url('users/checkbox'); ?>" role="form" enctype="multipart/form-data"  id="form1">
           <div class="jp_adp_form_wrapper1">
                        <label>Skills</label>       
                         
                                  <?php foreach ($skill as $skills_row){?>
                                 <input type="checkbox" name="skills[]" value="<?php echo $skills_row['skill_name'];?>"><?php echo $skills_row['skill_name'];?> <br/>
                                 <?php }?>
                              
                          <button type="submit" class="btn btn-primary" name="submit"></button>
                     </div>
</form>
 -->
                 <form method="post" action="<?php echo base_url('users/profile'); ?>" role="form" enctype="multipart/form-data"  id="form1">
    <div class="col-lg-5 col-sm-12 col-lg-offset-3">
                  <div class="jp_adp_form_wrapper" style="text-align: center;">
                    <label>Profile Image <span style="color:red;">*</span></label>
               <div class="form-group">
                  <div class="input-group">
                <input id="fakeUploadLogo" class="form-control fake-shadow" placeholder="Choose File" disabled="disabled" style="height: auto; border-radius: 0px;">
                <div class="input-group-btn">
                  <div class="fileUpload btn btn-danger fake-shadow">
                    <span><i class="glyphicon glyphicon-upload"></i> Upload Logo</span>
                    <input id="logo-id" name="picture_url" type="file" class="attachment_upload">
                  </div>
                </div>
              </div>
              <div class="main-img-preview">
                <img class="thumbnail img-preview" src="<?php echo $basicdetail['picture_url']; ?>" title="Preview Logo">
              </div>
            </div>
        </div>
    </div>

				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<!-- <div class="jp_adp_form_heading_wrapper">
						<h2>Personal Information </h2>
					</div> -->
					<div class="jp_adp_form_wrapper">
                        <label>First Name <span style="color:red;">*</span></label>
						<input type="text" placeholder="First Name" name="first_name" value="<?php echo $users[0]['first_name']; ?>">
					</div>
                     <div class="jp_adp_form_wrapper">
                        <label>Experience <span style="color:red;">*</span></label>
                        <input type="text" placeholder="Experience" name="experience" value="<?php echo $basicdetail['experience']; ?>" required>
                    </div>
                   
					<div class="jp_adp_form_wrapper">
                        <label>Gender <span style="color:red;">*</span></label>
					  <select data-placeholder="Please Select Gender" name="gender" required>
                                                    <optgroup label="pre-selected">
                                                    <option><?php echo $basicdetail['gender']; ?></option>
                                                    </optgroup>
                                                    <optgroup label="select-new">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                   
                                                    </optgroup>
                                                </select>
					</div>
                        <div class="jp_adp_form_wrapper">
                        <label>Category <span style="color:red;">*</span></label>
                                <select name="cat_id" class="form-control" id="category" required data-live-search="true">
                                   <optgroup label="pre-selected">
                                                    <option value="<?php echo $basicdetail['catie']; ?>"><?php echo $basicdetail['cat_name']; ?></option>
                                                    </optgroup>
                                                     <optgroup label="select-new">
                                                     <?php foreach ($category as $row_cat) { ?>
                                    <option value="<?php echo $row_cat['cat_id']; ?>" 
                                    <?php if($row_cat['cat_id'] == $edit_data[0]['cat_id']){
                                        echo 'selected';
                                        } ?> >
                                    <?php  echo $row_cat['cat_name']; ?></option>
                                        <?php }
                                        ?>
                                                  </optgroup>
                                                </select>
                                 <!--    <option value="" >Category</option>
                                    <?php foreach ($category as $row_cat) { ?>
                                    <option value="<?php echo $row_cat['cat_id']; ?>" 
                                    <?php if($row_cat['cat_id'] == $edit_data[0]['cat_id']){
                                        echo 'selected';
                                        } ?> >
                                    <?php  echo $row_cat['cat_name']; ?></option>
                                        <?php }
                                        ?>
                                </select> -->
                            </div>

                                  <div class="jp_adp_form_wrapper">
                        <label>Type <span style="color:red;">*</span></label>
                           <select data-placeholder="Please Select Type" name="type" required>
                                                    <optgroup label="pre-selected">
                                                    <option><?php echo $basicdetail['type']; ?></option>
                                                    </optgroup>
                                                    <optgroup label="select-new">
                                                    <option>Full Time</option>
                                                    <option>Part Time</option>
                                                    <option>Freelance</option>
                                                    <option>Contract</option>
                                                  
                                                    </optgroup>
                                                </select>
                    </div>



                     <!--    <div class="jp_adp_form_wrapper">
                        <label>Skills</label>
                                <select name="skill_id" class="form-control skill_id" id="skill_id" required="" data-live-search="true"  >
                                    <option value="" >Please select category first</option>
                                    <?php foreach ($skill as $skills_row) { ?>
                                    <option value="<?php echo $skills_row['skill_id']; ?>" 
                                    <?php if($skills_row['skill_id'] == $edit_data[0]['skill_id']){
                                        echo 'selected';
                                        } ?> >
                                    <?php  echo $skills_row['skill_name']; ?></option>
                                        <?php }
                                        ?>
                                </select>
                            </div> -->
                   <!--         <div class="jp_adp_form_wrapper1">
                        <label>Skills</label>       
                          <select id="skill_id dates-field2 " class="skill_id multiselect-ui form-control"  name="skill_id" multiple="multiple">
                                 <option selected disabled >Please Select Category First</option>
                                  <?php foreach ($skill as $skills_row){?>
                                 <option value="<?php echo $skills_row['skill_id'];?>"
                                 <?php if($skills_row['skill_id'] == $edit_data[0]['skill_id']){
                                    echo 'selected';}?> >
                                 <?php echo $skills_row['skill_name'];?>
                                     
                                 </option>
                                 <?php }?>
                            </select>
                     </div> -->
                <!--              <div class="jp_adp_form_wrapper1">
                        <label>Skills</label>       
                         
                               <div id="skill_id" class="skill_id"  name="skill_id">
                                  <?php foreach ($skill as $skills_row){?>
                                 <input type="checkbox" name="skills[]" value="<?php echo $skills_row['skill_name'];?>"><?php echo $skills_row['skill_name'];?> <br/>
                                 <?php }?>
                               </div>
                          
                     </div> -->
                   
				<!-- 	<div class="row">
						<div class="col-lg-6 col-md-6 col-md-6 col-xs-12">
							<div class="jp_adp_form_wrapper">
								<input type="text" placeholder="Salary Min">
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-md-6 col-xs-12">
							<div class="jp_adp_form_wrapper">
								<input type="text" placeholder="Salary Max">
							</div>
						</div>
					</div>
					<div class="jp_adp_form_wrapper">
						<input type="text" placeholder="Notic Period">
					</div> -->
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bottom_line_Wrapper">
				<!-- 	<div class="jp_adp_form_heading_wrapper">
						<p>Fields with * are mandatory</p>
					</div> -->
                     <div class="jp_adp_form_wrapper">
                        <label>Last Name <span style="color:red;">*</span></label>
                        <input type="text" placeholder="Last Name" name="last_name"  value="<?php echo $users[0]['last_name']; ?>">
                    </div>
                     <div class="jp_adp_form_wrapper">
                        <label>Age <span style="color:red;">*</span></label>
                        <input type="text" placeholder="Age" name="age" value="<?php echo $basicdetail['age'] ?>" required>
                    </div>
					<div class="jp_adp_form_wrapper">
                        <label>Education Level <span style="color:red;">*</span></label>
					      <select data-placeholder="Please Select Specialism" name="edulevel" required>
                                                    <optgroup label="pre-selected">
                                               <option><?php echo $basicdetail['edulevel']; ?></option>
                                                    </optgroup>
                                                    <optgroup label="select-new">
                                                    <option>Diploma</option>
                                                    <option>Inter</option>
                                                    <option>Bachelor</option>
                                                    <option>Graduate</option>
                                                    <option>Masters</option>
                                                    <option>MPHIL</option>
                                                    <option>PHD</option>
                                                    </optgroup>
                                                </select>
					</div>
                          <div class="jp_adp_form_wrapper">
                        <label>SubCategory (Optional)</label>
                                         <select class="form-control subcat_id" id="subcat_id" name="subcat_id">
                                          <optgroup label="pre-selected">
                                                    <option value="<?php echo $basicdetail['subcatie']; ?>"><?php echo $basicdetail['subcat_name']; ?></option>
                                                    </optgroup>
                                                     <optgroup label="select-new">
                                 <!-- <option>Please select category first</option> -->
                                 <?php foreach ($subcategory as $subcat_row){?>
                                 <option value="<?php echo $subcat_row['subcat_id'];?>"
                                 <?php if($subcat_row['subcat_id'] == $edit_data[0]['subcat_id']){
                                    echo 'selected';}?> >
                                 <?php echo $subcat_row['subcat_name'];?>
                                     
                                 </option>
                                 <?php }?>
                               </optgroup>
                                </select>
                    </div>
			
					<!-- <div class="jp_adp_form_wrapper">
						<input type="text" placeholder="Skills required">
					</div>
					<div class="jp_adp_form_wrapper">
						<input type="text" placeholder="Joining facilities">
					</div> -->
				</div>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="jp_adp_textarea_main_wrapper">
                        <br>
                        <br>
                        <label>Description</label>
						<!-- <textarea rows="7" placeholder="Description"></textarea> -->
                         <textarea name="description" id="editor1" rows="10" cols="80"> <?php echo $basicdetail['description']; ?></textarea>
					</div>
				</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 manage-jobs-sec">

                                <!--<div class="border-title"><h3>Education <span style="color:red;">*</span></h3><a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/newpopup/modal_basicinfo_add/','Add Education');" title=""><i class="fa fa-plus"></i> Add Education</a></div>-->
                                <div class="border-title"><h3>Education <span style="color:red;">*</span></h3><a data-toggle="modal" data-target="#modalAddBrand1" ><i class="fa fa-plus"></i> Add Education</a></div>
                                <div class="edu-history-sec">
                                     <?php foreach($educations as $education){?>
                                    <div class="edu-history">
                                        <i class="fa fa-graduation-cap"></i>
                                        <div class="edu-hisinfo">
                                          <h3 style="text-transform:capitalize;"><?php echo $education['board']; ?></h3>
                                          <i><?php echo date("d-m-Y", strtotime($education['starting_date'])).' - '.date("d-m-Y", strtotime($education['ending_date'])); ?></i>
                                          <span>Main Subject <i style="text-transform:capitalize;"><?php echo $education['subject']; ?></i></span>
                                          <p>Grades <b><?php echo $education['grade']; ?></b> </p>
                                          <?php echo word_limiter($education['description'],30); ?>
                                        </div>
                                        <ul class="action_job">
                                              <li style="padding-right: 5px;"> <a class="editaction" href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/newpopup/modal_education_edit/<?php echo $education['cv_education_id'];?>','Update education');" ><i class="fa fa-pencil"></i></a></li>
                                            <li><span>Delete</span><a href="javascript:;" onclick="confirm_modal('<?php echo base_url('users/delete_edu/'.$education['cv_education_id']); ?>');"   title=""><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </div>  
                                    <?php } ?>                                
                                </div>
                                <!--<div class="border-title"><h3>Work Experience <span style="color:red;">*</span></h3><a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/newpopup/modal_workexperience_add/','Add Work Experience');" title=""><i class="fa fa-plus"></i> Add Experience</a></div>-->
                                
                                 <div class="border-title"><h3>Work Experience <span style="color:red;">*</span></h3><a data-toggle="modal" data-target="#modalAddBrand" ><i class="fa fa-plus"></i> Add Experience</a></div>
                                
                                
                                <div class="edu-history-sec">
                                        <?php foreach($works as $work){?>
                                        <div class="edu-history style2">
                                        <i></i>
                                        <div class="edu-hisinfo">
                                            <h3 style="text-transform:capitalize;"><?php echo $work['designation']; ?> <span style="text-transform:capitalize;"><?php echo $work['organization_name']; ?></span></h3>
                                             <?php if($work['check_present'] == ''){ ?>
                                            <i><?php echo date("d-m-Y", strtotime($work['from_date'])).' - '.date("d-m-Y", strtotime($work['to_date'])); ?></i>
                                            <?php }else{ ?>
                                              <i><?php echo date("d-m-Y", strtotime($work['from_date'])).' - '. 'Present'; ?></i>
                                              <?php  } ?>
                                <?php echo word_limiter($work['description'],30); ?>
                                        </div>
                                        <ul class="action_job">
                                             <li style="padding-right: 5px;">     <a class="editaction" href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/newpopup/modal_workexperience_edit/<?php echo $work['id'];?>','Update work experience');" >
                                                    <i class="fa fa-pencil"></i></a></li> 
                                            <li><span>Delete</span><a href="javascript:;" onclick="confirm_modal('<?php echo base_url('users/delete_work/'.$work['id']); ?>');"   title=""><i class="fa fa-trash-o"></i></a></li>
                                        </ul>
                                    </div>
                                    <?php } ?>

                                </div>
                                <div class="border-title"><h3>Portfolio <span style="color:red;">*</span></h3><a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/newpopup/modal_portfolio_add/','Add Portfolio');" title=""><i class="fa fa-plus"></i> Add Portfolio</a></div>
                                <div class="mini-portfolio">
                                    <div class="mp-row">
                                       <?php foreach($portfolios as $portfolio){?>
                                        <div class="mp-col">
                                            <div class="mportolio"><img src="<?php echo $portfolio['picture_url']; ?>" alt="" style="width: 100%; height:150px;"
                                              ><a href="<?php echo $portfolio['link']; ?>" title=""><i class="fa fa-search"></i></a>
                                                <p style="text-align: center; font-weight: bold;"><?php echo $portfolio['title']; ?></p>
                                            </div>
                                            <ul class="action_job">
                                            <!-- <li><span>Edit</span><a href="#" title=""><i class="fa fa-pencil"></i></a></li> -->
                                              <li>     <a class="editaction" href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/newpopup/modal_portfolio_edit/<?php echo $portfolio['id'];?>','Update Portfolio');" >
                                                    <i class="fa fa-pencil"></i></a></li>
                                            <li><span>Delete</span><a href="javascript:;" onclick="confirm_modal('<?php echo base_url('users/delete_portfolio/'.$portfolio['id']); ?>');"  title=""><i class="fa fa-trash-o"></i></a></li>
                                        </ul>
                                        </div>
                                        <?php  } ?>
                                     
                                    </div>
                                </div>
                                <div class="border-title"><h3>Professional Skills <span style="color:red;">*</span></h3><a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/newpopup/modal_skill_add/','Add Skills');" title=""><i class="fa fa-plus"></i> Add Skills</a></div>
                                     <div class="progress-sec">
                                    <?php foreach($skills as $skill){?>
                                    <div class="progress-sec with-edit">
                                        <span><?php echo $skill['name']; ?></span>
                                        <div class="progressbar"> <div class="progress" style="width: <?php echo $skill['rating'].'%'; ?>;"><span><?php echo $skill['rating'].'%'; ?></span></div> 
                                         </div>
                                    </div>
                                        <ul class="action_job">
                                             <li style="padding-right: 5px;">  <a class="editaction"  href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/newpopup/modal_skill_edit/<?php echo $skill['cv_skill_id'];?>','Update skill');" ><i class="fa fa-pencil"></i></a></li>
                                            <li><span>Delete</span><a href="javascript:;" onclick="confirm_modal('<?php echo base_url('users/delete_skill/'.$skill['cv_skill_id']); ?>');"  title=""><i class="fa fa-trash-o"></i></a></li>
                                        </ul>

                                    <?php } ?>
                                </div>
                    
                            </div>
			<!-- 	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="jp_adp_choose_resume">
						<p>Company Post</p>
						<div class="custom-input">
						  <span><i class="fa fa-upload"></i> &nbsp;Upload Job Post</span>
						  <input type="file" name="resume" id="resume" />
						</div>
					</div>
				</div> -->


                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="jp_adp_form_heading_wrapper">
                        <h2>Contact Information </h2>
                    </div>
                    <div class="jp_adp_form_wrapper">
                        <label>Email Address <span style="color:red;">*</span></label>
                        <input type="text" placeholder="Email Address" name="email" value="<?php echo $users[0]['email']; ?>" readonly>
                    </div>
                  
                   
                    <div class="jp_adp_form_wrapper">
                        <label>City <span style="color:red;">*</span></label>
                          <select data-placeholder="Please Select city" name="city" required>
                                                    <optgroup label="pre-selected">
                                                    <option value="<?php echo $basicdetail['city']; ?>"><?php echo $basicdetail['city_name']; ?></option>
                                                    </optgroup>
                                                    <optgroup label="select-new">
                                                        <?php $cities=$this->Crud_model->get_data('tbl_city'); foreach($cities as $citie){?>
                                                        <option value="<?php echo $citie['city_id']; ?>"><?php echo $citie['city_name']; ?></option>
                                                        <?php } ?>
                                                    </optgroup>
                                                </select>
                    </div>
                       <div class="jp_adp_form_wrapper">
                        <label>Facebook</label>
                        <input type="text" placeholder="Facebook" name="fb" value="<?php echo $basicdetail['fb']; ?>">
                    </div>
                        <div class="jp_adp_form_wrapper">
                        <label>Google</label>
                        <input type="text" placeholder="Google" name="google" value="<?php echo $basicdetail['google']; ?>">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bottom_line_Wrapper">
                    <div class="jp_adp_form_heading_wrapper">
                        <p>Fields with * are mandatory</p>
                    </div>
                     <div class="jp_adp_form_wrapper">
                        <label>Phone Number <span style="color:red;">*</span></label>
                        <input type="text" placeholder="Phone Number" name="mob_no" value="<?php echo $basicdetail['mob_no']; ?>" required >
                    </div>
                     <div class="jp_adp_form_wrapper">
                        <label>Address <span style="color:red;">*</span></label>
                        <input type="text" placeholder="Address" name="address" value="<?php echo $basicdetail['address']; ?>" required>
                    </div>
                  
               <div class="jp_adp_form_wrapper">
                        <label>Twitter</label>
                        <input type="text" placeholder="Twitter" name="twitter" value="<?php echo $basicdetail['twitter']; ?>">
                    </div>
                     <div class="jp_adp_form_wrapper">
                        <label>Linkedin</label>
                        <input type="text" placeholder="Facebook" name="linkedin" value="<?php echo $basicdetail['linkedin']; ?>">
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

<!--                     <div class="col-lg-12 col-sm-12">
                       <form method="post" action="<?php echo base_url('users/cv'); ?>" enctype="multipart/form-data">
                        <div class="col-sm-10">
                  <div class="jp_adp_form_wrapper" style="text-align: center;">
                    <label>Resume</label>
               <div class="form-group">
                  <div class="input-group">
                <input id="fakeUploadLogo1" class="form-control fake-shadow" placeholder="Choose File" disabled="disabled" style="height: auto; border-radius: 0px;">
                <div class="input-group-btn">
                  <div class="fileUpload btn btn-danger fake-shadow">
                    <span><i class="glyphicon glyphicon-upload"></i> Upload CV</span>
                    <input id="logo-id1" name="cv" type="file" class="attachment_upload">
                  </div>
                </div>
              </div>
              <div class="main-img-preview">
                <span class="preview"><i><?php echo $basicdetail['cv_url']; ?></i></span>
              </div>
            </div>
        </div>
      </div>
      <div class="col-sm-2">
        <button type="submit" name="Upload" class="btn btn-primary btn-block btn-lg"></button>
      </div>
      </form>
    </div> -->
			</div>
		</div>
	</div>
    <!-- jp ad post Wrapper End -->



</div>
</div>
</div>
</div>

<!-- <button type="button" data-toggle="modal" data-target="#modalAddBrand">Launch modal</button> -->
<div class="modal fade" id="modalAddBrand" tabindex="-1" role="dialog" aria-labelledby="modalAddBrandLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title" id="modalAddBrandLabel">Add Work Experience</h4>

            </div>
            <div class="modal-body">
              <div class="tab-content">
          <!----EDITING FORM STARTS---->
      <div class="tab-pane box active" id="list" style="padding: 5px; background-color: transparent;">
                <div class="box-content">
                    <form method="post" action="<?php echo base_url('users/add_workexperience'); ?>" enctype='multipart/form-data'>
                            <div class="resumeadd-form">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span class="pf-title">Designation <span style="color: red;">*</span></span>
                                            <div class="pf-field">
                                                <input placeholder="designation.." type="text" name="designation" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <span class="pf-title">From Date <span style="color: red;">*</span></span>
                                            <div class="pf-field">
                                                <input placeholder="06.11.2007" name="from_date" type="date" class="form-control datepicker" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <span class="pf-title">To Date</span>
                                            <div class="pf-field">
                                                <input placeholder="06.11.2012" name="to_date" type="date" class="form-control datepicker">
                                            </div>
                                        </div>
                                           <div class="col-lg-12">
                                             <span class="pf-title">Present</span>
                                            <div class="pf-field">
                <input type="checkbox" name="check_present" id="cc" value="1"> <label for="cc">  If currently working, check the Present box: </label>
                                        </div>
                                      </div>
                                       
                                        <div class="col-lg-12">
                                            <span class="pf-title">Company <span style="color: red;">*</span></span>
                                            <div class="pf-field">
                                                <input type="text" name="organization_name" class="form-control" required>
                                            </div>
                                        </div>
                                            <div class="col-lg-12">
                                            <span class="pf-title">Short Description</span>
                                            <div class="pf-field">
                                                <textarea name="description" class="form-control" id="editor12" name="editor12" required></textarea>
                         
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                             <button type="submit" class="btn btn-primary btn-block btn-lg" >Save</button>
                                        </div>
                                    </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <!-- <button id="AddBrandButton" type="button" class="btn btn-primary">Save</button> -->
            </div>
        </div>
    </div>
</div>













<!-- EDUCATION MODAL  -->
<!-- <button type="button" data-toggle="modal" data-target="#modalAddBrand">Launch modal</button> -->
<div class="modal fade" id="modalAddBrand1" tabindex="-1" role="dialog" aria-labelledby="modalAddBrandLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title" id="modalAddBrandLabel">Add Education</h4>

            </div>
            <div class="modal-body">
   	<div class="tab-content">
        	<!----EDITING FORM STARTS---->
			<div class="tab-pane box active" id="list" style="padding: 5px; background-color: transparent;">
                <div class="box-content">
                        <form method="post" action="<?php echo base_url('users/add_eduation'); ?>" enctype='multipart/form-data'>
                                <div class="resumeadd-form">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span class="pf-title">From Date <span style="color: red;">*</span></span>
                                            <div class="pf-field">
                                                <input placeholder="06.11.2007" name="to_date" type="date" class="form-control datepicker" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <span class="pf-title">To Date <span style="color: red;">*</span></span>
                                            <div class="pf-field">
                                                <input placeholder="06.11.2012" name="from_date" type="date" class="form-control datepicker" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <span class="pf-title">Degree <span style="color: red;">*</span></span>
                                            <div class="pf-field">
                                                <input placeholder="Enter Degree Title" type="text" name="subject" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <span class="pf-title">Institute <span style="color: red;">*</span></span>
                                            <div class="pf-field">
                                                <input type="text" placeholder="Enter Institue" name="board" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <span class="pf-title">Grade <span style="color: red;">*</span></span>
                                            <div class="pf-field">
                                                <input type="text" placeholder="Enter Grade e.g 3.5/4.0" name="grade" class="form-control" required>
                                            </div>
                                        </div>
                                           <div class="col-lg-12">
                                            <span class="pf-title">Short Description</span>
                                            <div class="pf-field">
                                                 <textarea name="description" class="form-control" id="editor13" name="editor13" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                             <button type="submit" class="btn btn-primary btn-block btn-lg" name="submit">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                            </div>
                            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <!-- <button id="AddBrandButton" type="button" class="btn btn-primary">Save</button> -->
            </div>
        </div>
    </div>
</div>

<?php include 'jobseeker/template/modal.php'; ?>
  <?php include('template/footer.php'); ?>