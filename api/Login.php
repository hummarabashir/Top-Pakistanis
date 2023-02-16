<?php
$servername = "localhost";
$username = "ebmacsne_ss_d65e";
$password = "Cma2gz3qvifB";
$database= "ebmacsne_feedback";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}

$name =$_POST['username'];
$status=$_POST['log'];



$sql = "INSERT INTO logstatus(status, name) VALUES ('$status','$name ')";


 if(mysqli_query($conn,$sql)){
 

                    echo 'success';
} else {
      echo 'failed';            

}



	


mysqli_close($conn);

?>