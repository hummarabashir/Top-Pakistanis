<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo 'Add Admin';?>
            	</div>
            </div>
            
            <br><br>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'superadmin/admin/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo 'Name';?></label>
						<div class="col-sm-5">
							<div class="pf-field">
							<input type="text" class="form-control" name="name" />
						</div>
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo 'Email';?></label>
						<div class="col-sm-5">
							<div class="pf-field">
							<input type="email" class="form-control" name="email" />
						</div>
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo 'Pasword';?></label>
						<div class="col-sm-5">
							<div class="pf-field">
							<input type="password" class="form-control" name="pass" />
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