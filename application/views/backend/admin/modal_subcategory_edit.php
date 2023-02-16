<?php 
//echo $param2;
$edit_data = $this->db->get_where('tbl_subcat', array('subcat_id' => $param2) )->result_array();
//print_r($edit_data);
foreach ( $edit_data as $row2):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('edit_subcategory');?>
            	</div>
            </div>
			<div class="panel-body">
                    <?php echo form_open(base_url() . 'admin/subcategory/do_update/' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
                        		<input type="hidden" name="subcat_id" value="<?php echo $row2['subcat_id']; ?>">
                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('SubCategory Name');?></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="subcat_name" value="<?php echo $row2['subcat_name']; ?>" required="" />
                            </div>
                        </div>  

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Select Category');?></label>
                            <div class="col-sm-5">
                            
                                <select class="form-control" name="cat_id" required="">
                                <?php $categories = $this->db->get('tbl_cat')->result_array();
                                 foreach ($categories as $row):?>
                                    <option value="<?php echo $row['cat_id']; ?>" <?php if ($row['cat_id'] == $row2['cat_id']) {
                                       echo "selected";
                                    } ?>><?php echo $row['cat_name']; ?></option>
                                <?php endforeach; ?>
                                </select>
                            </div>
                        </div>  
                            
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">
                                <button type="submit" class="btn btn-info"><?php echo get_phrase('edit_subcategory');?></button>
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