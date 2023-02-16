<?php 
//echo $param2;

?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('delete_blog');?>
            	</div>
            </div>
			<div class="panel-body">
                    <?php echo form_open(base_url() . 'admin/blog/do_delete/' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
                        		<input type="hidden" name="blog_id" value="<?php echo $param2; ?>">
                          <div class="form-group">
                        
                        <div class="alert alert-danger" role="alert">
                          <strong>Delete!</strong> <?php echo get_phrase('Are you sure you want to delete this?');?>
                        </div>
                        
                    </div>      
                            
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">
                                <button type="submit" class="btn btn-danger"><?php echo get_phrase('delete_blog');?></button>
                            </div>
                        </div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
