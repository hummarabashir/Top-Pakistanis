<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo 'Settings';?>
            	</div>
            </div>
			<div class="panel-body">
                    <?php echo form_open(base_url() . 'superadmin/back_account/create/' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
                    <?php $superadmin_id = $this->session->userdata('superadmin_id'); ?>
                        		<input type="hidden" name="superadmin_id" value="<?php echo $superadmin_id; ?>">
                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Bank Name';?></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="bank_name" value="<?php echo $settings_data[0]['bank_name']; ?>" required="" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Branch Code';?></label>
                            <div class="col-sm-5">
                                <input type="number" class="form-control" name="branch_code" value="<?php echo $settings_data[0]['branch_code']; ?>" required="" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Account No.';?></label>
                            <div class="col-sm-5">
                                <input type="number" class="form-control" name="account_no" value="<?php echo $settings_data[0]['account_no']; ?>" required="" />
                            </div>
                        </div>  
  
                            
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-2">
                                <button type="submit" class="btn btn-primary btn-block"><?php echo 'Save';?></button>
                            </div>
                            <div class="col-sm-2">
                            <button type="button" onclick="history.back(-1)" class="btn btn-danger btn-block"><?php echo get_phrase('Back');?></button>
                        </div>
                        </div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>