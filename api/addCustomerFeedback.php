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

$user_id = $_POST['user_id'];
$title = $_POST['title'];
$first_name= $_POST['first_name'];
$last_name= $_POST['last_name'];
$email = $_POST['email'];
$mobile_number = $_POST['mobile_number'];
$city = $_POST['city'];
$date_of_birth = $_POST['date_of_birth'];
$notification = $_POST['notification'];
$hear_about_us = $_POST['hear_about_us'];
$segment_of_KTE = $_POST['segment_of_KTE'];
$rate_us_ambience = $_POST['rate_us_ambience'];
$rate_us_quality = $_POST['rate_us_quality'];
$rate_us_variety = $_POST['rate_us_variety'];
$rate_us_pricing  = $_POST['rate_us_pricing'];
$rate_us_hygiene = $_POST['rate_us_hygiene'];
$rate_us_safety = $_POST['rate_us_safety'];
$rate_us_customer_care = $_POST['rate_us_customer_care'];
$insert_date=date("Y/m/d");
$date_time = $_POST['date_time'];



$sql = "INSERT INTO customer_feedback(user_id , title, first_name, last_name, email, mobile_number, city, date_of_birth, notification, hear_about_us, segment_of_KTE, rate_us_ambience, rate_us_quality, rate_us_variety, rate_us_pricing, rate_us_hygiene, rate_us_safety, rate_us_customer_care,insert_date,date_time) VALUES ('$user_id ','$title', '$first_name', '$last_name', '$email', '$mobile_number','$city', '$date_of_birth', '$notification', '$hear_about_us', '$segment_of_KTE', '$rate_us_ambience', '$rate_us_quality', '$rate_us_variety', '$rate_us_pricing', '$rate_us_hygiene', '$rate_us_safety', '$rate_us_customer_care','$insert_date','$date_time')";


 if(mysqli_query($conn,$sql)){
 
 $success = "true";
            
            $emparray['result']['value'] = $success;
            
            $emparray['result']['message'] = "Successfully data store";

            echo json_encode($emparray);
} else {
$success = "false";
            
            $emparray['result']['value'] = $success;
            $emparray['result']['message'] = "Server error try again";
            echo json_encode($emparray);
}



	


mysqli_close($conn);

?>