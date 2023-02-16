<?php

class DB_Functions {

    private $db;

    //put your code here
    // constructor
    function __construct() {
        require_once 'DB_Connect.php';
        // connecting to database
        $this->db = new DB_Connect();
        $this->db->connect();
    }

    // destructor
    function __destruct() {
        
    }


    /**
     * Random string which is sent by mail to reset password
     */

public function random_string()
{
    $character_set_array = array();
    $character_set_array[] = array('count' => 7, 'characters' => 'abcdefghijklmnopqrstuvwxyz');
    $character_set_array[] = array('count' => 1, 'characters' => '0123456789');
    $temp_array = array();
    foreach ($character_set_array as $character_set) {
        for ($i = 0; $i < $character_set['count']; $i++) {
            $temp_array[] = $character_set['characters'][rand(0, strlen($character_set['characters']) - 1)];
        }
    }
    shuffle($temp_array);
    return implode('', $temp_array);
}


public function forgotpassword($forgotpass, $newpassword){
$newpassword=md5($newpassword);
	$result = mysql_query("UPDATE  `users` SET PASSWORD =  '$newpassword' WHERE  `user_email` ='$forgotpass'");

if ($result) {
 
return true;

}
else
{
return false;
}

}
/**
     * Adding new user to mysql database
     * returns user details
     */

    public function storeUser($username, $email,  $password) {
     $password=md5($password);
     $role="users";
        $result = mysql_query("INSERT INTO  users(user_name, user_email,user_pass,role) VALUES('$username', '$email',  '$password','$role')");
        // check for successful store
        if ($result) {
            // get user details 
            $uid = mysql_insert_id(); // last inserted id
            $result = mysql_query("SELECT * FROM users WHERE user_id = $uid");
            // return user details
            return mysql_fetch_array($result);
        } else {
            return false;
        }
    }

	
	
	
	
	
	//// lawyerstore function end here ////////////

    /**
     * Verifies user by email and password
     */
    public function getUserByEmailAndpassword($email, $password) {
 $password=md5($password);
 //$role="users";
        $result = mysql_query("SELECT * FROM job360_registration WHERE email = '$email' AND password ='$password' ") or die(mysql_error());
        // check for result 
        $no_of_rows = mysql_num_rows($result);
        if ($no_of_rows > 0) {
            $result = mysql_fetch_array($result);
       
                return $result;
           
        } else {
            // user not found
            return false;
        }
    }

 

 
 /**
     * Check user is existed or not
     */
    public function isUserExisted($email) {
  //  echo "balti";
  //  echo $email;
        $result = mysql_query("SELECT user_email from users WHERE user_email = '$email'");
        $no_of_rows = mysql_num_rows($result);
        
        if ($no_of_rows > 0) {
            // user existed 
            return true;
        } else {
            // user not existed
            return false;
        }
    }

  public function getcategory(){
$result = mysql_query("SELECT * FROM tbl_cat");
return $result;
}

public function getsubcategory($cat_id){
$result = mysql_query("SELECT * FROM tbl_cat");
   $no_of_rows = mysql_num_rows($result);
 $result = mysql_fetch_array($result);
 // printf($result);

return $result;
}












}

?>