          <!--    <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_blog_add/');" 
            	class="btn btn-primary pull-right">
                <i class="entypo-plus-circled"></i>
            	<?php echo get_phrase('Add Blog');?>
             </a>  -->
                <br><br>
               <table class="table table-bordered datatable" id="table_export">
                    <thead>
                        <tr>
                            <th width="80"><div><?php echo get_phrase('id');?></div></th>
                          <th><div><?php echo get_phrase('image');?></div></th>
                            <th><div><?php echo get_phrase('name');?></div></th>
                               <th><div><?php echo get_phrase('action');?></div></th>
                            <th><div><?php echo get_phrase('update'); ?></div></th>
                            <th><div><?php echo get_phrase('delete'); ?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                               $i=0;
                               //var_dump($categories);
                                foreach($blogs as $row):?>
                   	<?php  //print_r($row);     ?>
                        
                        <tr>
                            <td><?php echo ++$i; ?></td>
                            <td><img style="width: 50px;height: 50px;" src="<?php echo $row['logo_url'] ;?>" class="img-responsive" alt=""></td>
                            <td><?php echo $row['ca_name'];?></td>
                            <td>
                            	<?php if($row['ca_status'] == 0){ ?>
                            	<a href="javascript:;" onclick="acitvate_modal('<?php echo base_url();?>admin/careeradvisor/do_activate/<?php echo $row['ca_id']; ?>');">
             				<button  class="btn btn-primary">Activate</button></a>
             				<?php } else{ ?>
             				<a href="javascript:;" onclick="deacitvate_modal('<?php echo base_url();?>admin/careeradvisor/do_deactivate/<?php echo $row['ca_id']; ?>');">
             				<button  class="btn btn-primary">Deactivate</button></a>
             				<?php } ?>
             				</td>
                            <td><a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_careeradvice_edit/<?php echo $row['ca_id']; ?>');"><i class="entypo-pencil"></i></a>
             				</td>
             				<td><a href="javascript:;" onclick="confirm_modal('<?php echo base_url();?>admin/careeradvisor/do_delete/<?php echo $row['ca_id']; ?>');"><i class="entypo-trash" style="color: #981B1B;"></i></a>
             				</td>
                            
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>



<!-----  DATA TABLE EXPORT CONFIGURATIONS ---->                      
<script type="text/javascript">

	jQuery(document).ready(function($)
	{
		

		var datatable = $("#table_export").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
			"oTableTools": {
				"aButtons": [
					
					{
						"sExtends": "xls",
						"mColumns": [1,2]
					},
					{
						"sExtends": "pdf",
						"mColumns": [1,2]
					},
					{
						"sExtends": "print",
						"fnSetText"	   : "Press 'esc' to return",
						"fnClick": function (nButton, oConfig) {
							datatable.fnSetColumnVis(0, false);
							datatable.fnSetColumnVis(3, false);
							
							this.fnPrint( true, oConfig );
							
							window.print();
							
							$(window).keyup(function(e) {
								  if (e.which == 27) {
									  datatable.fnSetColumnVis(0, true);
									  datatable.fnSetColumnVis(3, true);
								  }
							});
						},
						
					},
				]
			},
			
		});
		
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
		
</script>

