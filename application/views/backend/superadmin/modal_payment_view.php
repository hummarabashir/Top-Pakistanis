<style type="text/css">
    p {
        padding-top: 7px;
    }
    label {
        font-weight: bold;
    }
</style>
<?php 
//echo $param2;
//exit();
$this->db->join('users','payments.user_id=users.id','left');
$edit_data = $this->db->get_where('payments', array('payments.id' => $param2) )->result_array();
foreach ( $edit_data as $row):
   // print_r($row);
//die();
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo 'Payment View';?>
            	</div>
            </div>
			<div class="panel-body">
                    <?php echo form_open(base_url() . 'index.php/superadmin/admin/do_update/' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
                    
                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Employeer Name:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['first_name'].' '.$row['last_name'];?></p>
                            </div>
                        </div>

                       

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Payment Method:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['description'];?></p>
                            </div>
                        </div>

                        <?php if ($row['description'] == 'Stripe Payment') { ?>
                          <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Payment Id:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['payment_id'];?></p>
                            </div>
                        </div>
                        <?php } ?>

                        <?php if ($row['description'] == 'Bank Payment') { ?>
                          <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Receipt Image:';?></label>
                            <div class="col-sm-9">
                            <img src="<?php echo $row['receipt_url'];?>" class="img-responsive" alt="">
                            </div>

                        </div>
                        <?php } ?>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Total Amount:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['total'];?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Package:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['package_name'];?></p>
                            </div>
                        </div>

                       <?php if ($row['package_name'] == 'yearly' || $row['package_name'] == 'montly') { ?>
                          <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Expiry Date:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['expiry_date'];?></p>
                            </div>
                        </div>
                        <?php } ?>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Credits:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['credits'];?></p>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Payment Date/Time:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['created_on'];?></p>
                            </div>
                        </div>


                         <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Address:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['address'];?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'City:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['city'];?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Email:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['email'];?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Phone:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['phone'];?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo 'Mobile:';?></label>
                            <div class="col-sm-5">
                               <p><?php echo $row['mobile'];?></p>
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



