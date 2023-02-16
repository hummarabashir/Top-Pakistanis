<?php

$edit_data=$this->db->get_where('cv_contact_info', array(
                'user_id' => $this->session->userdata("logged_id")
            ))->result_array();

if(count($edit_data)>0){


}else{

$edit_data=$this->db->get_where('users', array(
                'id' => $this->session->userdata("logged_id")
            ))->result_array();

}


?>


<style type="text/css">
    
    .form-horizontal .form-group {
 
    color: black !important;
}
 label::before {
        content: none !important;
      }
</style>

<div class="row">
	<div class="col-md-12">
    
    	
	
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
                                            <span class="pf-title">Short Description <span style="color: red;">*</span></span>
                                            <div class="pf-field">
                                                <textarea name="description" class="form-control" size="150" maxlength="150" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                             <button type="submit" class="btn btn-primary btn-block btn-lg" name="submit">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
			<!-- 		<?php 
                    foreach($edit_data as $row):
                        ?>
                        <?php echo form_open(base_url() . 'index.php/users/update_contact_info' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top' , 'enctype' => 'multipart/form-data'));?>
                            
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('First Name');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="first_name" value="<?php echo $row['first_name'];?>"/>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('Last Name');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="last_name" value="<?php echo $row['last_name'];?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('email');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>"/>
                                </div>
                            </div>
            <div class="form-group">

             <div class="form-group"> <label class="col-sm-3 control-label">Select Experience Level</label>
        <div class="col-sm-5">
                               <select name="experience" class="form-control" >
                               <?php if(isset($row['experience']))
                               {?>
<option value="<?php echo $row['experience'] ?>"><?php echo $row['experience'] ?></option>

                                <?php } ?>
                                      <option value="">Select Experience Level</option>
                                            <option value="< 1 Year"> < 1 Year </option>
                                            <option value="1 Year"> 1 Year </option>
                                            <option value="2 Year"> 2 Year </option>
                                            <option value="3 Year"> 3 Year </option>
                                            <option value="4 Year"> 4 Year </option>
                                            <option value="5 Year"> 5 Year </option>
                                            <option value="> 5 Year"> > 5 Year </option>
                              
                                                </select>
                                            </div>

                                            </div>
                 
                            </div>
            <div class="form-group">
            <label class="col-sm-3 control-label"><?php echo get_phrase('age');?></label>
           <div class="col-sm-5">
                    <input type="text" class="form-control" name="age" value="<?php if(isset($row['age'])){echo $row['age'];} ?>"/>
                                </div>
                            </div>

     <div class="form-group"> <label class="col-sm-3 control-label">Gender</label>
        <div class="col-sm-5">
                               <select name="gender" class="form-control" >
                                            <option value="male">male</option>
                                           <option value="female">female</option>
                              
                                                </select>
                                            </div>

                                            </div>


            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('email');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="email" value="<?php if(isset($row['email'])){echo $row['email'];}?>"/>
                                </div>
                            </div>

                              <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('Mobile No');?></label>
                                <div class="col-sm-5">

                                    <input type="text" class="form-control" name="mob_no" value="<?php if(isset($row['mob_no'])){echo $row['mob_no'];} ?>"/>
                                </div>
                            </div>

                              <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('Alternate Mobile No');?></label>
                                <div class="col-sm-5">
                           <input type="text" class="form-control" name="alternate_mobile_no" value="<?php if(isset($row['alternate_mobile_no'])) {echo $row['alternate_mobile_no'];} ?>" />
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('photo');?></label>
                                
                                    <div class="col-sm-5">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
                                    <img src="<?php if(isset($row['experience'])){ echo  $row['picture_url']; } ?>" alt="...">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                                    <div>
                                            <span class="btn btn-white btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="userfile" accept="image/*">
                                            </span>
                                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-5">
                                  <button type="submit" class="btn btn-info"><?php echo ('Save Contact Info');?></button>
                              </div>
								</div>
                        </form>
						<?php
                    endforeach;
                    ?> -->
                </div>
			</div>
            <!----EDITING FORM ENDS-->
            
		</div>
	</div>
</div>

