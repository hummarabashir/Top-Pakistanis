<?php defined('BASEPATH') OR exit('No direct script access allowed');
class User_Authenticationg extends CI_Controller
{
    function __construct() {
		parent::__construct();
		// Load user model
		$this->load->model('user');
		$this->load->model('Crud_model');
		
    }
    
    public function index(){
        	$userData = array();
        		$data = array();
		// Include the google api php libraries
		include_once APPPATH."libraries/google-api-php-client/Google_Client.php";
		include_once APPPATH."libraries/google-api-php-client/contrib/Google_Oauth2Service.php";
		
		// Google Project API Credentials
		$clientId = '630754598591-b62g91hup8r6oel2p26sb1ufsclma14m.apps.googleusercontent.com';
        $clientSecret = '_Fa_pRLoWnNpUIHiSyu47qTT';
        $redirectUrl = base_url().'user_authenticationg';
		
		// Google Client Configuration
        $gClient = new Google_Client();
        $gClient->setApplicationName('jobs360');
        $gClient->setClientId($clientId);
        $gClient->setClientSecret($clientSecret);
        $gClient->setRedirectUri($redirectUrl);
        $google_oauthV2 = new Google_Oauth2Service($gClient);

        if (isset($_REQUEST['code'])) {
            $gClient->authenticate();
            $this->session->set_userdata('token', $gClient->getAccessToken());
            redirect($redirectUrl);
        }

        $token = $this->session->userdata('token');
        if (!empty($token)) {
            $gClient->setAccessToken($token);
        }

        if ($gClient->getAccessToken()) {
            $userProfile = $google_oauthV2->userinfo->get();
            // Preparing data for database insertion
            $userData['oauth_provider'] = 'google';
            $userData['oauth_uid'] = $userProfile['id'];
            $userData['first_name'] = $userProfile['given_name'];
            $userData['last_name'] = $userProfile['family_name'];
            $userData['email'] = $userProfile['email'];
            $userData['gender'] = 'male';
             $userData['method'] = 'normal';
            $userData['locale'] = $userProfile['locale'];
            $userData['profile_url'] = $userProfile['link'];
            $userData['picture_url'] = $userProfile['picture'];
            // Insert or update user data
            $userID = $this->user->checkUser($userData);
         
                   if($userID==FALSE){
                $data['userData'] = $userData;

                $last_id = $this->db->insert_id();

        
$logged_name = $userProfile['given_name'].' '.$userProfile['family_name'];
	   	        $this->session->set_userdata("logged_name", $logged_name);
	   	        
        $this->session->set_userdata("logged_jobseekar","1");
        $this->session->set_userdata("logged_user","1");
        $this->session->set_userdata("login",TRUE);
        $this->session->set_userdata("logged_id", $last_id);
                $this->session->set_userdata('userData',$userData);
                  $this->session->set_userdata('google',TRUE);
        
       
        
        
            } else {

$logged_name = $userProfile['given_name'].' '.$userProfile['family_name'];
	   	        $this->session->set_userdata("logged_name", $logged_name);
	   	        
        $this->session->set_userdata("logged_jobseekar","1");
        $this->session->set_userdata("logged_user","1");
        $this->session->set_userdata("login",TRUE);
        $this->session->set_userdata("logged_id", $userID);
         $this->session->set_userdata('google',TRUE);
              
            }
            
        } else {
            $data['authUrl'] = $gClient->createAuthUrl();
        }
	


    
    $user_id = $this->session->userdata('logged_id');
  //echo $user_id;
  $this->db->where('user_id',$user_id);
  $num_rows = $this->db->count_all_results('tbl_user_cat');
  //echo $num_rows;

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
		$this->session->unset_userdata('token');
		$this->session->unset_userdata('userData');
        $this->session->sess_destroy();
		redirect('/login');
    }
}
