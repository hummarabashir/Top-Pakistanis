         
                <br><br>


<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('Add Category');?>
            	</div>
            </div>
            
            <br><br>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'admin/city/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo 'City Name';?></label>
						<div class="col-sm-5">
							<div class="pf-field">
							<input type="text" class="form-control" name="city_name" />
						</div>
						</div>
					</div>
					
					
					<br>
					
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info btn-block"><?php echo get_phrase('Save');?></button>
						</div>
					</div>
					<br>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>



     <!--            <div class="row">
	<div class="col-md-12">
		
		<form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url().'admin/city/create/' ?>">
			
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo 'City Name';?></label>
						<div class="col-sm-5">
							<div class="pf-field">
							<input type="text" class="form-control" name="city_name" />
						</div>
						</div>
					</div>
					<br>
					
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info btn-lg">Submit</button>
						</div>
					</div>
					<br>
		</form>

    </div>
</div> -->



          



<!-----  DATA TABLE EXPORT CONFIGURATIONS ---->                      
