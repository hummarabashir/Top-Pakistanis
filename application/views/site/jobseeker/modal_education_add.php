




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
    <br><br>
    	
	
		<div class="tab-content">
        	<!----EDITING FORM STARTS---->
			<div class="tab-pane box active" id="list" style="padding: 5px; background-color: transparent;">
                <div class="box-content">
				
                        <?php //echo form_open(base_url() . 'users/add_eduation' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top' , 'enctype' => 'multipart/form-data'));?>
                        <form method="post" action="<?php echo base_url('users/add_eduation'); ?>" enctype='multipart/form-data'>
                            <br>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Starting Date</label>
                                <div class="col-sm-5">
                                    <input type="date" class="form-control" name="to_date" required="required" />
                                </div>
                            </div>
<br>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('End Date');?></label>
                                <div class="col-sm-5">
                                    <input type="date" class="form-control" name="from_date" />
                                </div>
                            </div>
<br>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('Degree');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="subject" required="required" />
                                </div>
                            </div>

                            <br>
                             <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('Board/University');?></label>
                                <div class="col-sm-5">

                                    <input type="text" class="form-control" name="board" required="required"/>
                                </div>
                            </div>

<br>
                                <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('Grade/CGPA');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="grade" required="required" />
                                </div>
                            </div>
                            <br>
                                <div class="form-group">
                                <label class="col-sm-3 control-label">Short Description</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="description" required="required" size="10" />
                                </div>
                            </div>
                            <br>

                             <br>

                           
                            <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-5">
                                  <input type="submit" name="submit" class="btn btn-info" value="Add Education">
                              </div>
								</div>
                        </form>
                </div>
			</div>
            <!----EDITING FORM ENDS-->
            
		</div>
	</div>
</div>

