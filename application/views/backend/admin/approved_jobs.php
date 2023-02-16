                <br><br>
               <table class="table table-bordered datatable" id="table_export">
                    <thead>
                        <tr>
                            <th width="80"><div><?php echo get_phrase('id');?></div></th>
                          
                            <th><div><?php echo 'Title';?></div></th>
                            <th><div><?php echo 'Category';?></div></th>
                            <th><div><?php echo get_phrase('View'); ?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                               $i=0;
                               //var_dump($categories);
                                foreach($categories as $row):?>
                   	<?php  
                   	/*echo "<pre>";
                   	print_r($row);     
                   	echo "</pre>";*/
                   	?>
                        
                        <tr>
                            <td><?php echo ++$i; ?></td>
                            <td><?php echo $row['job_title'];?></td>
                            <td><?php echo $row['cat_name'];?></td>
                            <td><a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_job_view/<?php echo $row['jobs_id']; ?>');"><i class="entypo-eye"></i></a>
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

