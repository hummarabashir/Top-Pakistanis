<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('Add Package');?>
            	</div>
            </div>
            
            <br><br>
			<div class="panel-body">
		<?php echo form_open(base_url() . 'superadmin/jbs_packages/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
    
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Package Name');?></label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="name" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Package Price');?></label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="price" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Profile Duration limit');?></label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="duration" />
                        </div>
                    </div>
                    <br>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-info"><?php echo get_phrase('Save');?></button>
                        </div>
                    </div>
                    <br>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>