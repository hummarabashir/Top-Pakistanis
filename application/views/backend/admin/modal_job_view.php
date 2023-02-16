<style type="text/css">
    p {
        padding-top: 7px;
    }
    label {
        font-weight: bold;
    }
</style>
<?php 
//echo $param2;
//exit();
$this->db->join('users','tbl_job.user_id=users.id','left');
$this->db->join('tbl_clevel','tbl_job.clevel_id=tbl_clevel.clevel_id','left');
$this->db->join('tbl_cat','tbl_job.cat_id=tbl_cat.cat_id','left');
$this->db->join('tbl_subcat','tbl_job.subcat_id=tbl_subcat.subcat_id','left');
$edit_data = $this->db->get_where('tbl_job', array('jobs_id' => $param2) )->result_array();
foreach ( $edit_data as $row):
   /* print_r($row);*/
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo 'Job View';?>
            	</div>
            </div>
			<div class="panel-body">
                    <?php echo form_open(base_url() . 'index.php/superadmin/admin/do_update/' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
                    
                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Employeer Name:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['first_name'].' '.$row['last_name'];?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Title:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['job_title'];?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Category:';?></label>
                            <div class="col-sm-5">
                                <p><?php echo $row['cat_name'];?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'SubCategory:';?></label>
                            <div class="col-sm-5">
                                <p><?php echo $row['subcat_name'];?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Career Level:';?></label>
                            <div class="col-sm-5">
                                <p><?php echo $row['clevel_name'];?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Employment Type:';?></label>
                            <div class="col-sm-5">
                                <p><?php echo $row['job_emptype'];?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'No. of Vacancies:';?></label>
                            <div class="col-sm-5">
                                <p><?php echo $row['job_vacancies'];?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Start Date:';?></label>
                            <div class="col-sm-5">
                                <p><?php echo $row['job_sdate'];?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'End Date:';?></label>
                            <div class="col-sm-5">
                                <p><?php echo $row['job_edate'];?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Experience Level:';?></label>
                            <div class="col-sm-5">
                                <p><?php echo $row['job_explevel'];?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Job Status:';?></label>
                            <div class="col-sm-5">
                                <p><?php echo $row['job_edatestatus'];?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Shift:';?></label>
                            <div class="col-sm-5">
                                <p><?php echo $row['job_shift'];?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Gender:';?></label>
                            <div class="col-sm-5">
                                <p><?php echo $row['job_gender'];?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Age:';?></label>
                            <div class="col-sm-5">
                                <p><?php echo $row['job_age'];?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Sallery Range:';?></label>
                            <div class="col-sm-5">
                                <p><?php echo $row['job_salery_min'].' - '.$row['job_salery_max'];?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Location:';?></label>
                            <div class="col-sm-5">
                                <p><?php echo $row['job_location'];?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Job Description:';?></label>
                            <div class="col-sm-5">
                                <p><?php echo $row['job_description'];?></p>
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