<?php 
//echo $param2;
//exit();
$edit_data = $this->db->get_where('tbl_benefit', array('benefit_id' => $param2) )->result_array();
foreach ( $edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('edit_benefit');?>
            	</div>
            </div>
			<div class="panel-body">
                    <?php echo form_open(base_url() . 'index.php/admin/benefits/do_update/' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
                        		<input type="hidden" name="benefit_id" value="<?php echo $row['benefit_id']; ?>">
                          <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('benefit_name');?></label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="benefit_name" value="<?php echo $row['benefit_name']; ?>" />
                        </div>
                    </div>      
                            
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">
                                <button type="submit" class="btn btn-info"><?php echo get_phrase('edit_benefit');?></button>
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