
<?php

$edit_data=$this->db->get_where('cv_education', array(
                'cv_education_id' => $param2
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
				
                        <?php echo form_open(base_url() . 'index.php/users/update_eduation' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top' , 'enctype' => 'multipart/form-data'));?>
                            <br>
                            
                             <div class="form-group">
                                <label class="col-sm-4 control-label"><?php echo ('From Date');?></label>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" value="<?php echo $edit_data[0]['ending_date'];?>" name="from_date" />
                                </div>
                            </div>
                            
                            
                            <div class="form-group">
                                <label class="col-sm-4 control-label">To Date</label>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" name="to_date" value="<?php echo $edit_data[0]['starting_date'];?>" required="required" />
                                </div>
                            </div>

  <input type="hidden" name="id" value="<?php echo $param2;?>">

                           
                            <div class="form-group">
                                <label class="col-sm-4 control-label"><?php echo ('Degree');?></label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="subject" value="<?php echo $edit_data[0]['subject'];?>" required="required" />
                                </div>
                            </div>

                         >
                             <div class="form-group">
                                <label class="col-sm-4 control-label"><?php echo ('Board/University');?></label>
                                <div class="col-sm-7">

                                    <input type="text" class="form-control" name="board"
                                    value="<?php echo $edit_data[0]['board'];?>" required="required"/>
                                </div>
                            </div>

                                <div class="form-group">
                                <label class="col-sm-4 control-label"><?php echo ('Grade/CGPA');?></label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="grade"value="<?php echo $edit_data[0]['grade'];?>"
                         required="required" />
                                </div>
                            </div>
                         
                                <div class="form-group">
                                <label class="col-sm-4 control-label"><?php echo ('Description');?></label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" name="description"><?php echo $edit_data[0]['description'];?></textarea>
                         
                                </div>
                            </div>
                             <br>

                           
                            <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-5">
                                  <button type="submit" class="btn btn-info btn-block"><?php echo ('Save');?></button>
                              </div>
								</div>
                        </form>
                </div>
			</div>
            <!----EDITING FORM ENDS-->
            
		</div>
	</div>
</div>

