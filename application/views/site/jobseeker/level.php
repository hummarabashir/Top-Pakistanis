<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Jobs360</title>

        <!-- CSS -->
        <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500"> -->


    </head>
      <?php
        $query=$this->db->get_where('tbl_clevel')->result_array();
        ?>

    <body>
     <?php include ('template/mainheader.php'); ?>
  <div class="row" style="height: 100%">
      <h1 class="text-default text-center">Select List</h1>
       <br><br>
       <form action ="<?php echo base_url().'index.php/users/submitlevel' ?>" method="post">
        <div class="col-md-8 col-md-offset-2" style="padding-right: 3px;">
        


<div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" id="sel1" name="level">
    <?php foreach ($query as $row) { ?>

    <option value="<?php echo $row['clevel_id'] ?>"><?php echo $row['clevel_name'] ?></option>


 <?php } ?>
  </select>
</div>

            </div>
    
        <div class="col-md-8 col-md-offset-2">
  <p id="eroor" style="color: red"></p>
                        <input style="float: right;background-color: #9ccb46;color: #fff;padding-right: 2%;padding-left: 2%;" type="submit" align="right" id="save_value" name="save_value" value="Finish" />
</div>
</form>

            </div>

        
 
        <?php include 'template/footer.php'; ?>