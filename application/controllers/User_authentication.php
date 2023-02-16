<?php defined('BASEPATH') OR exit('No direct script access allowed');
class User_Authentication extends CI_Controller
{
    function __construct() {
		parent::__construct();
		
		// Load facebook library
		$this->load->library('facebook');
		
		//Load user model
		$this->load->model('user');
		$this->load->model('Crud_model');
    }
    
    public function index(){
		$userData = array();
			$data = array();
		// Check if user is logged in
		if($this->facebook->is_authenticated()){
			// Get user facebook profile details
			$userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,locale,picture');

            // Preparing data for database insertion
            $userData['oauth_provider'] = 'facebook';
            $userData['oauth_uid'] = $userProfile['id'];
            $userData['first_name'] = $userProfile['first_name'];
            $userData['last_name'] = $userProfile['last_name'];
            $userData['email'] = $userProfile['email'];
            
            $userData['method'] = 'normal';
            
            
            $userData['gender'] = $userProfile['gender'];
            $userData['locale'] = $userProfile['locale'];
            $userData['profile_url'] = 'https://www.facebook.com/'.$userProfile['id'];
            $userData['picture_url'] = $userProfile['picture']['data']['url'];
			
            // Insert or update user data
            $userID = $this->user->checkUser($userData);
			
			// Check user data insert or update status
            if($userID==FALSE){
                $data['userData'] = $userData;

                $last_id = $this->db->insert_id();
                $logged_name = $userProfile['first_name'].' '.$userProfile['last_name'];
	   	        $this->session->set_userdata("logged_name", $logged_name);
                
                
                $this->session->set_userdata("logged_jobseekar","1");
                
                
                
        		
        		$this->session->set_userdata("logged_user","1");
        		$this->session->set_userdata("login",TRUE);
        		$this->session->set_userdata("logged_id", $last_id);
		
                $this->session->set_userdata('userData',$userData);
              
                  $this->session->set_userdata('fb',TRUE);
 	
                   
            } else {

        $logged_name = $userProfile['first_name'].' '.$userProfile['last_name'];
		$this->session->set_userdata("logged_name", $logged_name);
		
        $this->session->set_userdata("logged_jobseekar","1");
                
		
		$this->session->set_userdata("logged_user","1");
	    	$this->session->set_userdata("login",TRUE);
		 $this->session->set_userdata("logged_id", $userID);
		 $this->session->set_userdata('fb',TRUE);
		 
              
            }
			
			// Get logout URL
			$data['logoutUrl'] = $this->facebook->logout_url();
		}else{
            $fbuser = '';
			
			// Get login URL
            $data['authUrl'] =  $this->facebook->login_url();
           
        }
	

// 		$data['page'] = "dashboard";
// 		$data['detail'] = $this->user->get_dashboard();
//     $this->load->view('site/userdashboard',$data);

  $user_id = $this->session->userdata('logged_id');
  //echo $user_id;
  $this->db->where('user_id',$user_id);
  $num_rows = $this->db->count_all_results('tbl_user_cat');
    
     //pagination
        $config_base_ulr = base_url() . "users/userdashboard/";
        $per_page = 10;
        //pagination_userdashboardjobsdata($column_id, $order_by, $table_name, $config_base_ulr , $per_page)  
        $data["detail"] = $this->Crud_model->pagination_userdashboardjobsdata('jobs_id', 'desc', 'tbl_job',$config_base_ulr, $per_page);
        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;',$str_links );
    // pagination
    
  $data['page'] = "dashboard";
  //$data['detail'] = $this->user->get_dashboard();
  
  
  $this->load->view('site/userdashboard',$data);
    }

	public function logout() {
		// Remove local Facebook session
		$this->facebook->destroy_session();
		// Remove user data from session
		       $this->session->sess_destroy();
		//$this->session->unset_userdata('userData');
		// Redirect to login page
        redirect('/login');
    }
}
