
<?php

$edit_data=$this->db->get_where('cv_skill', array(
                'cv_skill_id' => $param2
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
			<div class="tab-pane box active" id="list" style="padding: 5px; background: transparent;">
                <div class="box-content">
				
                        <?php echo form_open(base_url() . 'index.php/users/update_skill' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top' , 'enctype' => 'multipart/form-data'));?>
                            <br>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('Skill');?></label>
                                <div class="col-sm-5">
                                    <input type="type" class="form-control" name="skill" value="<?php echo $edit_data[0]['name'];?>" required="required" />
                                </div>
                            </div>
<br>
  <input type="hidden" name="id" value="<?php echo $param2;?>">


                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('Rating');?></label>
                                <div class="col-sm-5">
                                    <input type="range" id="slider" value="<?php echo $edit_data[0]['rating'];?>" name="rating" min="0" max="100" step="1" />
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



