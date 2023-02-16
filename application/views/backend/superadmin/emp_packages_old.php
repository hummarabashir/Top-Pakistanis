<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo 'Packages';?>
            	</div>
            </div>
			<div class="panel-body">
                    <?php echo form_open(base_url() . 'superadmin/emp_packages/create/' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>

                    <input type="hidden" name="emp_id" value="<?php if(isset($settings_data[0]['emp_id']))echo $settings_data[0]['emp_id']; ?>">
                        		
                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Basic';?></label>
                            <div class="col-sm-5">
                                <input type="number" class="form-control" name="emp_basic" value="<?php if(isset($settings_data[0]['emp_basic']))echo $settings_data[0]['emp_basic']; ?>" required="" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Group of five';?></label>
                            <div class="col-sm-5">
                                <input type="number" class="form-control" name="emp_gof" value="<?php if(isset($settings_data[0]['emp_gof'])) echo $settings_data[0]['emp_gof']; ?>" required="" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Yearly';?></label>
                            <div class="col-sm-5">
                                <input type="number" class="form-control" name="emp_y" value="<?php if(isset($settings_data[0]['emp_y'])) echo $settings_data[0]['emp_y']; ?>" required="" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Monthly';?></label>
                            <div class="col-sm-5">
                                <input type="number" class="form-control" name="emp_m" value="<?php if(isset($settings_data[0]['emp_m'])) echo $settings_data[0]['emp_m']; ?>" required="" />
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