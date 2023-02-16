             <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_comanies_add/');" 
            	class="btn btn-primary pull-right">
                <i class="entypo-plus-circlced"></i>
            	<?php echo 'Add Company';?>
             </a> 
                <br><br>
               <table class="table table-bordered datatable" id="table_export">
                    <thead>
                        <tr>
                            <th width="80"><div><?php echo get_phrase('id');?></div></th>
                          <th><div><?php echo get_phrase('image');?></div></th>
                            <th><div><?php echo get_phrase('name');?></div></th>
                            <th><div><?php echo get_phrase('update'); ?></div></th>
                            <th><div><?php echo get_phrase('delete'); ?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                               $i=0;
                               //var_dump($categories);
                                foreach($categories as $row):?>
                   	<?php  //print_r($row);     ?>
                        
                        <tr>
                            <td><?php echo ++$i; ?></td>
                            <td><img style="width: 50px;height: 50px;" src="<?php echo base_url('uploads/comapnies/').$row['compimages_image'] ;?>" class="img-responsive" alt=""></td>
                            <td><?php echo $row['compimages_name'];?></td>
                            <td><a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_comapnies_edit/<?php echo $row['compimages_id']; ?>');"><i class="entypo-pencil"></i></a>
             				</td>
             				<td><a href="javascript:;" onclick="confirm_modal('<?php echo base_url();?>admin/comapnies/do_delete/<?php echo $row['compimages_id'].'/'.$row['compimages_image']; ?>');"><i class="entypo-trash" style="color: #981B1B;"></i></a>
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

