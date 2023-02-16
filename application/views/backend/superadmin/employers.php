
               <table class="table table-bordered datatable" id="table_export">
                    <thead>
                        <tr>
                            <th width="80"><div><?php echo get_phrase('id');?></div></th>
                          
                            <th><div><?php echo get_phrase('name');?></div></th>
                            <th><div><?php echo 'Email';?></div></th>
                            <th><div><?php echo 'Posted Jobs';?></div></th>
                            <th><div><?php echo 'Action';?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $i=0;   
                               //var_dump($categories);
                                foreach($categories as $row):?>
                   	<?php  //print_r($row); 
                   		$this->db->where('user_id',$row['id']);
            			$count = $this->db->count_all_results('tbl_job');
                   	?>
                        
                        <tr>
                            <td><?php echo ++$i; ?></td>
                            <td><?php echo $row['first_name'].' '.$row['last_name'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $count; ?></td>
                              <td>
                                <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_employer_view/<?php echo $row['id']; ?>');" class="btn btn-info btn-sm btn-icon icon-left"> <i class="entypo-info"></i>
							View
							</a>

							<?php $user_status = $row['user_status']; 
if($user_status == '1'){ ?>
							<a href="javascript:;" onclick="deacitvate_modal('<?php echo base_url();?>superadmin/employers/do_deactivate/<?php echo $row['id']; ?>');" class="btn btn-danger btn-sm btn-icon icon-left"> <i class="entypo-brush"></i>
							Deactivate
							</a>
<?php } if($user_status == '0') { ?>
			<a href="javascript:;" onclick="acitvate_modal('<?php echo base_url();?>superadmin/employers/do_activate/<?php echo $row['id']; ?>');" class="btn btn-primary btn-sm btn-icon icon-left"> <i class="entypo-brush"></i>
							Activate
							</a>
<?php } ?>
                            </td>
                            
                            </td>
                            
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
<div class="container">
	<div class="row text-center">
		<?php foreach ($links as $links) {
			echo $links;
		} ?>
	</div>
</div>


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

