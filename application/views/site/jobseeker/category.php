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
if(!empty($this->session->userdata['authUrl'])) {
  // echo '<a href="'.$authUrl.'"><img src="'.base_url().'assests/images/flogin.png" alt=""/></a>';
  header("Location: $authUrl"); 

  // file_get_contents($authUrl);
}
?>  
<?php

$data=$this->db->select('cat_id')->get_where('tbl_user_cat' , array('user_id' => $this->session->userdata("logged_id")))->result_array();
// print_r($data);
$people = array();
$pos=0;
if(count($data)>0){
foreach ($data as $key ) {
    $cat=$key['cat_id'];
    $catdat=explode(",",$cat);
    for ($i=0; $i <count($catdat) ; $i++) { 
        # code...
$people[$pos]=$catdat[$i];
$pos++;
    }

}
}
//print_r($people);
 ?>
    <body>
                
     <?php include ('template/mainheader.php'); ?>
        <!-- Top content -->

        
        <div class="top-content">
            
            <div class="inner-bg">
                <!-- test -->
                <div class="container">
                    <h1 class="text-default text-center">Please Select Category</h1>
                    <div class="row">
                        <div class="form-group">
                            <div class="searchable-container">
                               <?php foreach ($edit_data as $key ) { 
                           ?>
                                    <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3" style="margin-bottom: 3%;">
                                        <div class="info-block block-info clearfix">
                                            <div class="square-box pull-left">
                                                <span class="glyphicon glyphicon-plus glyphicon-lg"></span>
                                            </div>
                                            <div data-toggle="buttons" class="btn-group bizmoduleselect">
                                            <?php 
                                                    if (in_array($key['cat_id'], $people)) { ?>

                                               <label class="btn btn-default active">
                                                    <?php }else{?>
        
                                                <label class="btn btn-default">    
                                                    <?php  } ?>
                                                    <div class="bizcontent">
                                                    <!--
                                                        <input type="checkbox" style="width: 10px;" name="var_id[]" autocomplete="off" value="<?php echo $key['cat_id']; ?>">

-->
<input  value="<?php echo $key['cat_id'] ?>"   id="ad_Checkbox1" class="ads_Checkbox" style="width: 10px;" type="checkbox" <?php 
if (in_array($key['cat_id'], $people)) {echo "checked";}
?>

>




                                                        <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                        <h5><?php echo strtoupper($key['cat_name']); ?></h5>
                                                        <br>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>


                    </div>
                        <p id="eroor" style="color: red"></p>
                        <input type="button" align="right" id="save_value" name="save_value" value="Next Step" style="float: right;background-color: #9ccb46;color: #fff;padding-right: 2%;padding-left: 2%;margin-right: 3.5%;" />

                </div>
                <!-- test -->
            </div>
            
        </div>

        <!-- Footer -->
        

       
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
<?php include 'template/footer.php'; ?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    var selectedvalue="";
    $("#save_value").click(function(){
         selectedvalue="";
        $("#eroor").text("");

      var val = [];
        $(':checkbox:checked').each(function(i){
          val[i] = $(this).val();
        });
if(val.length>0){
for (var i = 0; i< val.length; i++) {
    if(i==val.length-1){
selectedvalue=selectedvalue+val[i];     
    }
    else{
        selectedvalue=selectedvalue+val[i]+",";
    }







}
console.log(selectedvalue);
    senddata();
}else{

$("#eroor").text("Please select subcategory");

}




    });

function senddata(){

var dataString = 'category='+selectedvalue ;
console.log("seleted data");
console.log(dataString);
$.ajax({
type: "POST",
url: "<?php echo base_url().'index.php/users/selected_catgory' ?>",
data: dataString,
cache: false,
success: function(result){
console.log(result);
if(result=="sucess"){
console.log("i love you");


1
window.location.href = "<?php echo base_url().'index.php/users/subctegory'; ?>";
}else{


}
}
});




}

});
</script>

</html>