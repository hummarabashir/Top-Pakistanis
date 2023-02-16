<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class WebServices extends CI_Controller {

function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Webservice_model');
        $this->load->library('session');
         $this->load->library('email');
        $this->load->model('Crud_model');
        /* cache control */
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 2010 05:00:00 GMT");
    }
		
		/*http://localhost/job360pknauman/WebServices/signin?email=user2@gmail.com&password=1234*/
    function signin(){
    	
    $email = $_REQUEST['email'];
    $password = md5($_REQUEST['password']);
    /*echo $email;
    echo "<br>";
    echo $password;*/
    $result = $this->Webservice_model->verify_credentials($email,$password);
    echo json_encode($result);
    }





// http://localhost/job360pknauman/webServices/register?first_name=shahid&last_name=zaman&email=skzaman630@gmail.com&mobile=03128336622&gender=male&date_ofbirth=08/02/1990&password=abcd&picture_url=skimage.jpg
   function register(){
     $data = array(
        'first_name' => $_REQUEST['first_name'],
        'last_name' => $_REQUEST['last_name'],
        'email' =>  $_REQUEST['email'],
        'mobile'=> $_REQUEST['mobile'], 
        'gender' =>$_REQUEST['gender'],  
        'date_ofbirth' =>$_REQUEST['date_ofbirth'],  
        'password' =>  md5($_REQUEST['password']),
        'created' => date("Y-m-d h:i:s"),
        'method' => 'normal'
       //'picture_url'=>base_url('uploads/').date("d-m-Y-h-i-s").'.png'
        
        );

        
 $result = $this->Webservice_model->register_user($data);

  
if($result){

 
if($_REQUEST['picture_url']){
$dataURL=$_REQUEST['picture_url'];
// $dataURL = $_POST["imageData"]; this should send to the hell cause spend long time
$dataURL = str_replace('data:image/png;base64,', '', $dataURL);
$dataURL = str_replace(' ', '+', $dataURL);
$image = base64_decode($dataURL);
$filename =date("d-m-Y-h-i-s").'.png';


$image1 = array('picture_url' => base_url('uploads/users_profile_pic/'.$filename) );



$this->db->where('email', $_REQUEST['email']);
$this->db->update('users',$image1);
 
file_put_contents(APPPATH . '../uploads/users_profile_pic/'. $filename, $image); 
}
$this->db->where('email', $_REQUEST['email']);
$user_id=$this->db->get('users')->row_array();
$datas = array(
        'first_name' => $_REQUEST['first_name'],
        'last_name' => $_REQUEST['last_name'],
        'email' =>  $_REQUEST['email'],
        'mob_no'=> $_REQUEST['mobile'], 
        'gender' =>$_REQUEST['gender'],
        'user_id'=>$user_id['id'],
        'picture_url'=>base_url('uploads/users_profile_pic/'.$filename)
        
        );

$this->db->insert('cv_contact_info',$datas);


$id = array('user_id' => $user_id['id'] );
$result['id']= $id;


 $from_email = "ebmacs@jobs360.com.pk"; 
         $to_email =$_REQUEST['email']; 
   
    
      //config email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://b3.core.hostnext.net';
        $config['smtp_port'] = '465';
        $config['smtp_user'] ='ebmacs@jobs360.com.pk';
        $config['smtp_pass'] = 'abc123!@#';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = 'TRUE';
        $config['newline'] = "\r\n"; 
        
        $this->load->library('email', $config);
        $this->email->initialize($config);


  $message = 'Dear User,<br><br> Thank you for registering at jobs360.com.pk. Your account is created and must be activated before you can use it. To activate the account verify email below:<br><br>
        <a  href="http://www.jobs360.com.pk/WebServices/email_verify/'.$to_email.'">Verify Email</a><br><br>Thanks';

         $this->email->from($from_email, 'Jobs360'); 
         $this->email->to($to_email);
         $this->email->subject('Verify email address'); 
         $this->email->message($message); 

    
         //Send mail 
         $this->email->send();

 




}

        echo json_encode($result);
    }





public function email_verify($email){
 
 $data = array('verify' => 1 );
  $this->db->update('users',$data,array('email'=>$email));
           
 $this->session->set_flashdata('flash_message', 'your email verified please login');  
        $this->load->view('site/login'); 
}



 /*http://localhost/job360pknoor/WebServices/password_reset?user_id=90&password=update*/

   function password_reset(){

$data = array(

'id'=>$_REQUEST['user_id'],
'password'=>md5($_REQUEST['password'])

 );  
  
    $result['result']['status'] = $this->Webservice_model->password_reset($data);
    echo json_encode($result);
    }




function search_by_category(){
        
    $subcat_id = $_REQUEST['subcat_id'];
    $result['search'] = $this->Webservice_model->search_by_category($subcat_id);

   echo json_encode($result);
    }


// http://jobs360.com.pk/webServices/social?oauth_uid=23123&oauth_provider=facebook&first_name=nouman&last_name=malik&email=mail@gmail.com&picture_url=urlpicture

function social(){

$data = array('oauth_uid' => $_REQUEST['oauth_uid'],

'oauth_provider'=>$_REQUEST['oauth_provider'],


 );  
  
  if(isset($_REQUEST['first_name']))

{
    $data['first_name']=$_REQUEST['first_name'];
}
  if(isset($_REQUEST['last_name']))

{
    $data['last_name']=$_REQUEST['last_name'];
}
  if(isset($_REQUEST['email']))

{
    $data['email']=$_REQUEST['email'];
}

  if(isset($_REQUEST['picture_url']))

{
    $data['picture_url']=$_REQUEST['picture_url'];
}



       $result = $this->Webservice_model->checkUser($data);
if($result)
{
    //true first time data insert

    $this->db->where('oauth_uid',$data['oauth_uid']);
    $q=$this->db->get('users')->row_array();
    $final['user_id']=$q['id'];
    $final['user_already_exist']='false';

}else{

   $this->db->where('oauth_uid',$data['oauth_uid']);
    $q=$this->db->get('users')->row_array();
 $final['user_id']=$q['id'];
    $final['user_already_exist']='true';


}
   $detail['login']=$final;
    echo json_encode($detail);
}






    function dashboard(){

    $result['dashboard'] = $this->Webservice_model->get_dashboard();

    echo json_encode($result);
    }

    function profile(){
        
    $user_id = $_REQUEST['user_id'];

   $data['get_user_detail'] = $this->Webservice_model->get_user_detail($user_id);
    $data['get_cv_objective'] = $this->Webservice_model->get_cv_objective($user_id);
    $data['get_cv_workexperience'] = $this->Webservice_model->get_cv_workexperience($user_id);
   $data['get_cv_education']= $this->Webservice_model->get_cv_education($user_id);
    $data['get_cv_skill'] = $this->Webservice_model->get_cv_skill($user_id);

    echo json_encode($data);
    }




 /*http://localhost/job360pknoor/WebServices/categories*/
    function categories(){

    $result['categories'] = $this->Webservice_model->get_categories();
    echo json_encode($result);
    }



   /*http://localhost/job360pknoor/WebServices/sub_categories?cat_id=1 */
    function sub_categories(){

    //$cat_id = $_REQUEST['cat_id'];
     $cats = [];
        $cat_id = $_REQUEST['cat_id'];
        $cats = explode(',', $cat_id);
  
    $result['sub_categories'] = $this->Webservice_model->get_subcategories($cats);
    echo json_encode($result);
    }



   /*http://localhost/job360pknoor/WebServices/user_cat?cat_id=1,2&subcat_id=7,9,3&user_id=51 */
    function user_cat(){

$data = array('cat_id' => $_REQUEST['cat_id'],

'user_id'=>$_REQUEST['user_id'],
'subcat_id'=>$_REQUEST['subcat_id']

 );  
  $data1 = array(
'user_cat'=>$this->Webservice_model->save_user_cat($data)

 );  
    $result['result'] = $data1;
    echo json_encode($result);
    }


        /*http://localhost/job360pknoor/WebServices/search?keyword=php */
    function search(){
        
    $keyword = $_REQUEST['keyword'];
    $result['search'] = $this->Webservice_model->get_search($keyword);

// echo "<pre>";
// print_r($result) ;
// echo "</pre>";

 if(count($result['search'])==0){

    $result['status']="0";
 }
 else{
    $result['status']="1";

 }
   echo json_encode($result);
    }


    function job_detail(){
        
    $job_id = $_REQUEST['job_id'];
    $result['job_detail'] = $this->Webservice_model->get_job_detail($job_id);


    echo json_encode($result);
    }


        //http://localhost/job360pknoor/WebServices/city?location=lahore
    function city(){
        
    $location = $_REQUEST['location'];
    $result['city'] = $this->Webservice_model->get_city($location);
 if(count($result['city'])==0){

    $result['status']="0";
 }
 else{
    $result['status']="1";

 }


echo json_encode($result);
    }


        //http://localhost/job360pknoor/WebServices/gender?type=male
    function gender(){
        
    $gender = $_REQUEST['type'];
    $result['gender'] = $this->Webservice_model->get_gender($gender);


 if(count($result['gender'])==0){

    $result['status']="0";
 }
 else{
    $result['status']="1";

 }
echo json_encode($result);
    }


        function applied(){
        
    $user_id = $_REQUEST['user_id'];
    

    $result['applied'] = $this->Webservice_model->get_applied($user_id);
 if(count($result['applied'])==0){

    $result['status']="0";
 }
 else{
    $result['status']="1";

 }
    echo json_encode($result);
    }

        //http://localhost/job360pknoor/WebServices/salary?min=0&max=5000
    function salary(){
        
    $min = $_REQUEST['min'];
    $max = $_REQUEST['max'];

    $result['salary'] = $this->Webservice_model->get_salary($min,$max);
 if(count($result['salary'])==0){

    $result['status']="0";
 }
 else{
    $result['status']="1";

 }
    /*echo "<pre>";
    print_r($result);
    echo"</pre>";*/
    echo json_encode($result);
    }


  
  function apply_job(){
         $user_id = $_REQUEST['user_id'];
          $job_id = $_REQUEST['job_id'];

          if(!$this->Webservice_model->check_profile($user_id))
        {
          
          $status = array('message' => 'Please complete your profile first',
            'status' => 0, );
        $data['status']=$status;
            
        }
        else{
            $result = $this->Webservice_model->apply_job($job_id,$user_id);
            if($result['gender']==0)
            {
          $status = array('message' => 'Your gender is not applicable for this job',
            'status' => 0, );
        $data['status']=$status;
            

            }
            else if($result['age']==0)
            {
          $status = array('message' => 'Your age is not applicable for this job',
            'status' => 0, );
        $data['status']=$status;

            }
            else if($result['city']==0)
            {
          $status = array('message' => 'Your city is not applicable for this job',
            'status' => 0, );
        $data['status']=$status;

            }
            else if($result['experience']==0)
            {



            $status = array('message' => 'Your experience is not applicable for this job',
            'status' => 0, );
        $data['status']=$status;

            }

             
        else{
        $submit= $this->Webservice_model->apply($job_id,$user_id);
            if($submit)
            {
              
              $add = array('apply_description' => $_REQUEST['description'] );
              $this->db->where('user_id',$user_id);
              $this->db->where('job_id',$job_id);
              $this->db->update('job_apply',$add);


            $status = array('message' => 'JOB Applied Successfully',
            'status' => 1, );
        $data['status']=$status;
         

        }else
        {   
            $status = array('message' => 'JOB already Applied',
            'status' => 0, );
        $data['status']=$status;



          }
         

        }

        }
        echo json_encode($data);

              }


        /*http://localhost/job360pknoor/WebServices/recommended?user_id=32 */
    function recommended(){
        
    $user_id = $_REQUEST['user_id'];
    

    $result['recommended'] = $this->Webservice_model->get_recommended($user_id);
    if(count($result['recommended'])==0){

    $result['status']="0";
    }
     else{
         $result['status']="1";

    }

    /*echo "<pre>";
    print_r($result);
    echo "</pre>";*/
    echo json_encode($result);
    }
        function forgotpasword(){
      $email=$this->input->post('email');
     $result=$this->emailforgotvarification($email);
     if($result=="success"){
          $from_email = "ebmacs@jobs360.com.pk"; 
         $to_email =$email; 
   //$x=$rand();
   $x=rand(1000,9000);
   $data['password']=md5($x);
   $this->db->where('email',$email);
   $this->db->update('users',$data);
    
      //config email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://b3.core.hostnext.net';
        $config['smtp_port'] = '465';
        $config['smtp_user'] ='ebmacs@jobs360.com.pk';
        $config['smtp_pass'] = 'abc123!@#';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = 'TRUE';
        $config['newline'] = "\r\n"; 
        
        $this->load->library('email', $config);
        $this->email->initialize($config);


  $message = 'Dear User,<br><br> Your New Paswword is :'.$x.'<br><br><br><br>Thanks';

         $this->email->from($from_email, 'Jobs360'); 
         $this->email->to($to_email);
         $this->email->subject('Forgot Password'); 
         $this->email->message($message); 

    
         //Send mail 
         $this->email->send();

 
         $results['status']="1";
         $results['status']="Email Send on Your Email.Kindly Check it";
         
     }
     else{
         $results['status']="0";
         $results['status']="Email Cannot Exist Kind Check Your Email";
     }
    echo json_encode($results);    
    }
    
    function emailforgotvarification($email){
        $credential = array('email' => $email);


      
$query = $this->db->get_where('users', $credential);
        if ($query->num_rows() > 0) {
      
     return 'success'; 
        }
return 'invalid';
    }
    
    
    

}