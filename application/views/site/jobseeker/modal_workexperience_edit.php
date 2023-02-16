
<?php

$edit_data=$this->db->get_where('cv_workexperience', array(
                'id' => $param2
            ))->result_array();



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
    <br><br>
    	
	
		<div class="tab-content">
        	<!----EDITING FORM STARTS---->
			<div class="tab-pane box active" id="list" style="padding: 5px; background-color: transparent;">
                <div class="box-content">
				
                        <?php echo form_open(base_url() . 'index.php/users/update_workexperience' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top' , 'enctype' => 'multipart/form-data'));?>
                            
                            
                            
                             <div class="form-group">
                                <label class="col-sm-4 control-label"><?php echo ('From Date');?></label>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" name="from_date" value="<?php echo $edit_data[0]['from_date'];?>"  />
                                </div>
                            </div>
                            
                            
                            <div class="form-group">
                                <label class="col-sm-4 control-label"><?php echo ('To Date');?></label>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" name="to_date" value="<?php echo $edit_data[0]['to_date'];?>" required="required"  />
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-4 control-label"><?php echo ('Present');?></label>
                                <div class="col-sm-7">
                                    	<p class="flchek"><input type="checkbox" name="check_present" id="cc" value="1" <?php if($edit_data[0]['check_present']==1){echo 'checked';}?>> <label for="cc"> If currently working, check present box</label></p>
                                </div>
                            </div>

  <input type="hidden" name="id" value="<?php echo $param2;?>">

                           

                            <div class="form-group">
                                <label class="col-sm-4 control-label"><?php echo ('Designation');?></label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="designation" value="<?php echo $edit_data[0]['designation'];?>" required="required" />
                                </div>
                            </div>

                              <div class="form-group">
                                <label class="col-sm-4 control-label"><?php echo get_phrase('Company');?></label>
                                <div class="col-sm-7">

                                    <input type="text" class="form-control" name="organization_name" 
                                   value="<?php echo $edit_data[0]['organization_name'];?>" required="required"/>
                                </div>
                            </div>
                            
                            
                              <div class="form-group">
                                <label class="col-sm-4 control-label"><?php echo get_phrase('Description');?></label>
                                <div class="col-sm-7">

                                    <textarea class="form-control" name="description"><?php echo $edit_data[0]['description'];?></textarea>
                                  
                                </div>
                            </div>
                            

<br><br>

                           
                           
                            <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-5">
                                  <button type="submit" class="btn btn-info btn-block"><?php echo ('Save ');?></button>
                              </div>
								</div>
                        </form>
                </div>
			</div>
            <!----EDITING FORM ENDS-->
            
		</div>
	</div>
</div>

