<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('add_career_level');?>
            	</div>
            </div>
            
            <br><br>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'admin/level/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo 'Career Level Name';?></label>
						<div class="col-sm-5">
							<div class="pf-field">
							<input type="text" class="form-control" name="clevel_name" />
						</div>
						</div>
					</div>
					
					
					<br>
					
                    <div class="form-group">
                    	<div class="col-sm-offset-3 col-sm-2">
							<button type="submit" class="btn btn-primary btn-block"><?php echo get_phrase('Save');?></button>
						</div>
						<div class="col-sm-2">
							<button type="button" onclick="history.back(-1)" class="btn btn-danger btn-block"><?php echo get_phrase('Back');?></button>
						</div>
					</div>
					<br>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>