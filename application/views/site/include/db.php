<?php

$servername = "localhost";
$username = "ebmacsne_ss_d65e";
$password = "Cma2gz3qvifB";
$database= "ebmacsne_feedback";


//$con = mysqli_connect("localhost","ebmacsne_ss_d65e","Cma2gz3qvifB","ebmacsne_feedback");

// Create connection
$con = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>