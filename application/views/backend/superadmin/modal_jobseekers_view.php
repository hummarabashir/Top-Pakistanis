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

$this->db->where('cv_contact_info.user_id',$param2);
$this->db->join('tbl_user_cat','cv_contact_info.user_id=tbl_user_cat.user_id','left');
$edit_data = $this->db->get('cv_contact_info')->result_array();
/*echo "<pre>";
print_r($edit_data);
echo "</pre>";*/
//$this->db->join('cv_contact_info','jobseekar_payments.user_id=cv_contact_info.user_id','left');


//$edit_data = $this->db->get_where('jobseekar_payments', array('jobseekar_payments.jp_id' => $param2) )->result_array();
foreach ( $edit_data as $row):
 /*   print_r($row);
die();*/
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo 'Seeker Profile View';?>
            	</div>
            </div>
			<div class="panel-body">
                    <?php echo form_open(base_url() . 'index.php/superadmin/admin/do_update/' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
                    
                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Seeker Name:';?></label>
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
                               <p><?php echo $row['mob_no'];?></p>
                            </div>
                        </div>

                     


                         

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Phone:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['alternate_mobile_no'];?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Email:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['email'];?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Profile Picture:';?></label>
                            <div class="col-sm-9">
                            <img src="<?php echo $row['picture_url'];?>" class="img-responsive" alt="">
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Gender:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['gender'];?></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Age:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['age'];?></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Experience:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['experience'];?></p>
                            </div>
                        </div>
                        
                        
                     <!--   <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'category id:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['cat_id'];?></p>
                            </div>
                        </div>
                          <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Subcategory id:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['subcat_id'];?></p>
                            </div>
                        </div>
                          <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Experience Level:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['level'];?></p>
                            </div>
                        </div>-->
                        
                         <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Location:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['location'];?></p>
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



