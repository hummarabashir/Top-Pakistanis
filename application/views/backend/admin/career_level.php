             <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_level_add/');" 
            	class="btn btn-primary pull-right">
                <i class="entypo-plus-circled"></i>
            	<?php echo 'Add Career Level';?>
             </a> 
                <br><br>
               <table class="table table-bordered datatable" id="table_export">
                    <thead>
                        <tr>
                            <th width="80"><div><?php echo get_phrase('id');?></div></th>
                          
                            <th><div><?php echo get_phrase('name');?></div></th>
                            <th><div><?php echo get_phrase('Update'); ?></div></th>
                            <th><div><?php echo get_phrase('Delete'); ?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                               $i=0;
                               //var_dump($categories);
                                foreach($clevel as $row):?>
                   	<?php  //print_r($row);     ?>
                        
                        <tr>
                            <td><?php echo ++$i; ?></td>
                            <td><?php echo $row['clevel_name'];?></td>
                            <td><a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_level_edit/<?php echo $row['clevel_id']; ?>');"><i class="entypo-pencil"></i></a>
             				</td>
             				<td><a href="javascript:;" onclick="confirm_modal('<?php echo base_url();?>admin/level/do_delete/<?php echo $row['clevel_id']; ?>');"><i class="entypo-trash" style="color: #981B1B;"></i></a>
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

