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

    <body>
     <?php include ('template/mainheader.php'); ?>
        <!-- Top content -->
<?php

foreach ($category as $key ) {?>
<?php 
$pos=0; 
$npos=0;
$people = array();
$selectedsubcat=array();
$cat=$key['cat_id'];
    $catdat=explode(",",$cat);
    $subcatdat=explode(",",$key['subcat_id']);

    for ($i=0; $i <count($catdat) ; $i++) { 
        # code...
$people[$pos]=$catdat[$i];
$pos++;
    }

  for ($i=0; $i <count($subcatdat) ; $i++) { 
        # code...
$selectedsubcat[$npos]=$subcatdat[$i];
$npos++;
    }


?>   

<?php }

 ?>
        
        <div class="top-content">
            
            <div class="inner-bg">
                <!-- test -->
                <?php
for ($i=0; $i <count($people) ; $i++) { 
    ?>
                <div class="container">
                    <h1 class="text-default text-center">Please Select SubCategory</h1>
                    <div class="row">
                        <div class="form-group">
                            <div class="searchable-container">
                               <?php
                                 $this->db->select('cat_name');
                                    $this->db->where('tbl_cat.cat_id',$people[$i]);
                                    $this->db->from('tbl_cat');
                               //     $this->db->join('tbl_subcat', 'tbl_cat.cat_id = tbl_subcat.cat_id');

                                $catname=$this->db->get()->result_array();
 ?>

<h4><?php echo $catname[0]['cat_name']; ?></h4>

                                <?php 
                                    $this->db->select('*');
                                    $this->db->where('tbl_subcat.cat_id',$people[$i]);
                                    $this->db->from('tbl_subcat');
                               //     $this->db->join('tbl_subcat', 'tbl_cat.cat_id = tbl_subcat.cat_id');

                                $subcat=$this->db->get()->result_array();
                                if(count($subcat)>0){
                                foreach ($subcat as $row) { ?>
                                    <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                                        


                                        <div class="info-block block-info clearfix">
                                        
                                            <div class="square-box pull-left">
                                                <span class="glyphicon glyphicon-plus glyphicon-lg"></span>
                                            </div>
                                            <div data-toggle="buttons" class="btn-group bizmoduleselect">
                                             
                                             <?php 
                                                    if (in_array($row['subcat_id'], $selectedsubcat)) { ?>

                                               <label class="btn btn-default active">
                                                    <?php }else{?>
        
                                                <label class="btn btn-default">    
                                                    <?php  } ?>
                                             


                                                    <div class="bizcontent">
                                                       
                        <input  value="<?php echo $row['subcat_id'] ?>"   id="ad_Checkbox1" class="ads_Checkbox" style="width: 10px;" type="checkbox" <?php 
if (in_array($key['subcat_id'], $selectedsubcat)) {echo "checked";}
?>

> 


                                                        <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                        <h5><?php echo strtoupper($row['subcat_name']); ?></h5>
                                                        <br>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                <?php }}else{
                                    echo 'NO Subcategory Defined';

                                    } ?>
                            </div>
                        </div>
                    </div>
                </div>




                <?php } ?>
            
                <!-- test -->
            <p id="eroor" style="color: red"></p>
                        <input style="float: right;background-color: #9ccb46;color: #fff;padding-right: 2%;padding-left: 2%;margin-right: 3.5%;" type="button" align="right" id="save_value" name="save_value" value="Next Step" />
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
//console.log(selectedvalue);
    senddata();
}else{

$("#eroor").text("please select subcategory");

}




    });

function senddata(){

var dataString = 'subcategory='+selectedvalue ;
//console.log("seleted data");
//console.log(dataString);
$.ajax({
type: "POST",
url: "<?php echo base_url().'index.php/users/selected_subcatgory' ?>",
data: dataString,
cache: false,
success: function(result){
console.log(result);
if(result=="sucess"){
//console.log("i love you");


window.location.href = "<?php echo base_url().'index.php/users/location'; ?>";
}else{


}
}
});




}

});
</script>

</html>