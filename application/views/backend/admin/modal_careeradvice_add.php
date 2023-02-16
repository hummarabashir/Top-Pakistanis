<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('Add Career Advice');?>
            	</div>
            </div>
            
            <br><br>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'admin/careeradvisor/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Career Advisor_name');?></label>
						<div class="col-sm-5">
              <div class="pf-field">
							<input type="text" class="form-control" name="ca_name" />
            </div>
						</div>
					</div>
            <div class="form-group">
            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Company_name');?></label>
            <div class="col-sm-5">
              <div class="pf-field">
              <input type="text" class="form-control" name="ca_comp" />
            </div>
            </div>
          </div>
            <div class="form-group">
            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('description');?></label>
            <div class="col-sm-5">
              <div class="pf-field">
              <textarea class="form-control" name="ca_description"  id="editor2" rows="10" cols="80" required></textarea>
              <!--<textarea name="preffered_skills" id="editor2" rows="10" cols="80" required></textarea>-->
            </div>
            </div>
          </div>
            <div class="form-group">
            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Email Address');?></label>
            <div class="col-sm-5">
              <div class="pf-field">
              <input type="text" class="form-control" name="ca_email" />
            </div>
            </div>
          </div>
            <div class="form-group">
            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Phone');?></label>
            <div class="col-sm-5">
              <div class="pf-field">
              <input type="text" class="form-control" name="ca_phone" />
            </div>
            </div>
          </div>
            <div class="form-group">
            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Country');?></label>
            <div class="col-sm-5">
              <div class="pf-field">
              <input type="text" class="form-control" name="ca_country" />
            </div>
            </div>
          </div>
            <div class="form-group">
            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('City');?></label>
            <div class="col-sm-5">
              <div class="pf-field">
              <input type="text" class="form-control" name="ca_city" />
            </div>
            </div>
          </div>
            <div class="form-group">
            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Address');?></label>
            <div class="col-sm-5">
              <div class="pf-field">
              <input type="text" class="form-control" name="ca_address" />
            </div>
            </div>
          </div>
   



					<!-- photo -->
					 <div class="form-group">
            <label for="field-1" class="col-sm-3 control-label"><?php echo ('Feature Image ');?></label>
              <div class="form-group">
                              <div class="fileinput fileinput-new" data-provides="fileinput">
                                  <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
                                      <img src="http://via.placeholder.com/150x150" alt="...">
                                  </div>
                                  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                                  <div>
                                      <span class="btn btn-success btn-file">
                                          <span class="fileinput-new">Select Image</span>
                                          <span class="fileinput-exists">Change</span>
                                          <input type="file" required="" name="userfile" accept="image/*">
                                      </span>
                                      <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                  </div>
                              </div>
                          </div>
               </div> 
					<!-- ... photo .... -->
					
					
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