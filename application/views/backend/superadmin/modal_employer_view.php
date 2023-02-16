<style type="text/css">
    p {
        padding-top: 7px;
    }
    label {
        font-weight: bold;
    }
</style>
<?php 
/*echo $param2;
exit();*/

$edit_data = $this->db->get_where('users', array('users.id' => $param2) )->result_array();
foreach ( $edit_data as $row):
   /*print_r($row);
die();*/
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo 'Employer Profile';?>
            	</div>
            </div>
			<div class="panel-body">
                    <?php echo form_open(base_url() . 'index.php/superadmin/admin/do_update/' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
                    
                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Employer Name:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['first_name'].' '.$row['last_name'];?></p>
                            </div>
                        </div>

                       

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'City:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['city'];?></p>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Mobile No:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['mobile'];?></p>
                            </div>
                        </div>

                            <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Job Designation:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['job_designation'];?></p>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Gender:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['gender'];?></p>
                            </div>
                        </div>
                      <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Date of birth:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['date_ofbirth'];?></p>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Address:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['address'];?></p>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Email:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['email'];?></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Country:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['country'];?></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'City:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['city'];?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Phone:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['phone'];?></p>
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Profile Picture:';?></label>
                            <div class="col-sm-9">
                            <img src="<?php echo $row['picture_url'];?>" class="img-responsive" alt="">
                            </div>

                        </div>

                       

                                


                                  <?php echo form_close();?>
                       
            </div>
        </div>
    </div>
</div>



<?php
endforeach;
?>



