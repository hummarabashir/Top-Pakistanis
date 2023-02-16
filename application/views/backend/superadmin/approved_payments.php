
                <br><br>
               <table class="table table-bordered datatable" id="table_export">
                    <thead>
                        <tr>
                            <th width="80"><div><?php echo get_phrase('id');?></div></th>
                          
                            <th><div><?php echo 'Employeer Name';?></div></th>
                            <th><div><?php echo 'Package';?></div></th>
                            <th><div><?php echo 'Amount';?></div></th>
                            <th><div><?php echo 'Payment Method';?></div></th>
                            <th><div><?php echo get_phrase('Actions'); ?></div></th>
                            <!-- <th><div><?php echo get_phrase('Action'); ?></div></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                               $i=0;
                               //var_dump($categories);
                                foreach($categories as $row):?>
                   	<?php  
                   /*	echo "<pre>";
                   	print_r($row);     
                   	echo "</pre>";*/
                   	?>
                        
                        <tr>
                            <td><?php echo ++$i; ?></td>
                            <td><?php echo $row['first_name'].' '.$row['last_name'];?></td>
                            <td><?php echo $row['package_name'];?></td>

                            <td><?php echo $row['total'].' PKR';?></td>

                            <td><?php echo $row['description'];?></td>

             				<td>
             				
             				<a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_payment_view/<?php echo $row['id']; ?>');" class="btn btn-info btn-sm btn-icon icon-left"> <i class="entypo-info"></i>
							View
							</a>


							<?php if($row['package_update_status'] == 0 ){?>
							<a href="<?php echo base_url()?>superadmin/upgrade_package/<?php echo $row['id']?>/<?php echo $row['user_id']?>/<?php echo $row['package_id']?>/<?php echo $row['package_name']?>/<?php echo $row['credits']?>/<?php echo $row['promotion_limit']?>" class="btn btn-success btn-sm btn-icon icon-left"> <i class="entypo-brush"></i>
							Upgrade Package
							</a>
						<?php } ?>

							
							

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

