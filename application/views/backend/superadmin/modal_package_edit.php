<?php 
//echo $param2;
$edit_data = $this->db->get_where('emp_packages', array('emp_id' => $param2) )->result_array();
//print_r($edit_data);
foreach ( $edit_data as $row2):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('edit_package');?>
            	</div>
            </div>
			<div class="panel-body">
                    <?php echo form_open(base_url() . 'superadmin/emp_packages/do_update/' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
                        <input type="hidden" name="emp_id" value="<?php echo $row2['emp_id']; ?>">
                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase(' Package Name');?></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="name" value="<?php echo $row2['name']; ?>" required="" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase(' Package Price');?></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="price" value="<?php echo $row2['price']; ?>" required="" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Profile view limit');?></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="profile_view_limit" value="<?php echo $row2['profile_view_limit']; ?>" required="" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Promotion limit');?></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="promotion_limit" value="<?php echo $row2['promotion_limit']; ?>" required="" />
                            </div>
                        </div>
                            
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">
                                <button type="submit" class="btn btn-info"><?php echo get_phrase('edit_package');?></button>
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