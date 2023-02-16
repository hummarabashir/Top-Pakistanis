<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('Add Skills');?>
            	</div>
            </div>
            
            <br><br>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'admin/skills/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Skill Name');?></label>
						<div class="col-sm-5">
							<div class="pf-field">
							<input type="text" class="form-control" name="skill_name" required="" />
						</div>
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Select Category');?></label>
						<div class="col-sm-5">
						<div class="pf-field">
							<select class="form-control" name="cat_id" required="">
							<?php $categories = $this->db->get('tbl_cat')->result_array();
							 foreach ($categories as $row):?>
								<option value="<?php echo $row['cat_id']; ?>"><?php echo $row['cat_name']; ?></option>
							<?php endforeach; ?>
							</select>
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