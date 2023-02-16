




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
                                            <span class="pf-title">To Date <span style="color: red;">*</span></span>
                                            <div class="pf-field">
                                                <input placeholder="06.11.2012" name="to_date" type="date" class="form-control datepicker" required>
                                            </div>
                                        </div>
                                       
                                        <div class="col-lg-12">
                                            <span class="pf-title">Company <span style="color: red;">*</span></span>
                                            <div class="pf-field">
                                                <input type="text" name="organization_name" class="form-control" required>
                                            </div>
                                        </div>
                                            <div class="col-lg-12">
                                            <span class="pf-title">Short Description <span style="color: red;">*</span></span>
                                            <div class="pf-field">
                                                <textarea name="description" class="form-control"  required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                             <button type="submit" class="btn btn-primary btn-block btn-lg" >Save</button>
                                        </div>
                                    </div>
                                </div>
				
                 <!--        <?php echo form_open(base_url() . 'index.php/users/add_workexperience' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top' , 'enctype' => 'multipart/form-data'));?>
                            <br>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('Starting Date');?></label>
                                <div class="col-sm-5">
                                    <input type="date" class="form-control" name="from_date" required="required" />
                                </div>
                            </div>
<br>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('End Date');?></label>
                                <div class="col-sm-5">
                                    <input type="date" class="form-control" name="to_date" />
                                </div>
                            </div>
<br>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('Designation');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="designation" required="required" />
                                </div>
                            </div>
<br>
                              <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('Organization');?></label>
                                <div class="col-sm-5">

                                    <input type="text" class="form-control" name="organization_name" required="required"/>
                                </div>
                            </div>

<br><br>

                           
                            <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-5">
                                  <button type="submit" class="btn btn-info"><?php echo ('Save Experience');?></button>
                              </div>
								</div>
                        </form> -->
                </div>
			</div>
            <!----EDITING FORM ENDS-->
            
		</div>
	</div>
</div>

