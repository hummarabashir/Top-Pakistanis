<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
* 
*/
class Site extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('user');
		$this->load->model('Crud_model');
        $this->load->library('session');
        $this->load->helper('text');
	}


    
    function profileviewreport($uid)
    {
      // var_dump(PHP_VERSION); die;

        ini_set('memory_limit', '900M');
        // load library
        $this->load->library('pdf');
        $pdf = $this->pdf->load();
        // retrieve data from model
        //$data['news'] = $this->mpdf_model->get_news();
        // $data['title'] = "items";
       // /$data = $this->Get->invoice($id);
         // $data['pp'] = $this->Get->invoice($id);
        // boost the memory limit if it's low ;)
      
    $data['users'] = $this->user->user_info($uid);
    $data['basicdetails'] = $this->user->user_cv_basic_info($uid);
    $data['educations'] = $this->user->education($uid);
    $data['works'] = $this->user->work_experience($uid);
    $data['worksingles'] = $this->user->work_experience_s($uid);
    $data['skills'] = $this->user->skills($uid);
    $data['objectives'] = $this->user->objectives($uid);
    $data['portfolios'] = $this->user->portfolio($uid);
    $data['review'] = $this->user->get_profilereview_detail($uid);
    $data['maxreview'] = $this->user->maxreviews($uid);
        $html = $this->load->view('site/profileviewreport', $data, true);
 $pdf->SetWatermarkText('Top Pakistanis', 0.1);
$pdf->showWatermarkText = true;

// $stylesheet = file_get_contents('http://localhost/toppakistanis/vendor/css/style.css'); // external css
// $pdf->WriteHTML($stylesheet,1);




   $pdf->defaultheaderfontsize = 10; 
   $pdf->defaultheaderfontstyle = B; 
   $pdf->defaultheaderline = 1;  
   $pdf->SetDisplayMode('fullpage');
 $pdf->SetHeader('{DATE j-m-Y}|{PAGENO}/{nb}|Top Pakistanis');

// $header = '<table width="100%" style="border-bottom: 1px solid #000000; vertical-align: bottom; font-family:serif; font-size: 9pt; color: #000088;"><tr><td width="33%">Left header p <span style="font-size:14pt;">{PAGENO}</span></td><td width="33%" align="center"><img src="sunset.jpg" width="126px" /></td><td width="33%" style="text-align: right;"><span style="font-weight: bold;">Right header</span></td></tr></table>';
// $pdf->SetHTMLHeader($header);



        // render the view into HTML
        $pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822));
        $pdf->WriteHTML('.fa { font-family: fontawesome;}',1);
          $pdf->allow_charset_conversion = true;
     //$mpdf -> debug = true;
     $stylesheet = file_get_contents(base_url() . 'vendor/css/style_II.css');
      // $stylesheet = file_get_contents(base_url() . 'vendor/css/bootstrap.css');
     $pdf->WriteHTML($stylesheet, 1);
        $pdf->WriteHTML($html, 2);
        // write the HTML into the PDF
        $output = 'profile' . date('Y_m_d_H_i_s') . '_.pdf';
        $pdf->Output("$output", 'I');
        // save to file because we can exit();
        // - See more at: http://webeasystep.com/blog/view_article/codeigniter_tutorial_pdf_to_create_your_reports#sthash.QFCyVGLu.dpuf
    }

    
    function about_us(){
    $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
    $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
    $data['careeradvisor'] = $this->user->careeradvisor_info_all();
    $this->load->view('site/about',$data);
    }
    
    function careeradvisor(){
    $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
    $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
    $data['careeradvisor'] = $this->user->careeradvisor_info_all();
    $this->load->view('site/careeradvisor',$data);
    }
    
    function singlecareeradvisor($cid){
    $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
    $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
    $this->db->where('tbl_careeradvisor.ca_id',$cid);
    $this->db->select('tbl_careeradvisor.*');
    $this->db->from('tbl_careeradvisor');
    $data['careeradvisor'] = $this->db->get()->result_array();
    $this->load->view('site/singlecareeradvisor', $data);
    }
  
    function terms_and_conditions(){
    $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
    $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
    $this->load->view('site/terms&conditions',$data);
    }


	function review(){
	$data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
    $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
	$this->load->view('site/reviewbill', $data);
	}
	
	
	function checkout(){
	$data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
    $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
	$this->load->view('site/checkout', $data);
	}
		
	function freview(){
    $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
    $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
	$this->load->view('site/freviewbill', $data);
	}
	
	function fcheckout($pkg_id){
	$data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
    $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
        $data['emp_packages'] = $this->crud_model->get_data('jbs_packages');
    $user_id = $this->session->userdata('logged_id');
    $data['user'] = $this->crud_model->get_data_user_id('users','id',$user_id);
	$this->load->view('site/fcheckout', $data);
	}
	
	function blog(){
	$data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
    $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
    $config = [
            'base_url' => base_url('site/blog'),
            'per_page' => 10,
            'total_rows' => $this->user->num_blogs(),
        ];
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tagl_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tagl_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item disabled">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tagl_close'] = '</a></li>';
        $config['attributes'] = array('class' => 'page-link');
        $this->pagination->initialize($config); // model function
        $data['users'] = $this->user->bloglist($config['per_page'], $this->uri->segment(3)); // list of seeker
        // print_r($data['users']);
        // die();
        $this->load->view('site/blog', $data);
    }

	function singleblog($bid){
		$data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
        $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
		$data['users'] = $this->user->get_blog_detail($bid);
		$data['limit'] = $this->user->get_blog_limit();
		// print_r($data['limit']);
		// die();
		$data['comment'] = $this->user->get_blogcomment_detail($bid);
		// print_r($data['comment']);
		// die();
		$data['categories'] = $this->crud_model->get_data('tbl_cat');
		$this->load->view('site/blog_single', $data);
	}




		function blogcat($bc){
		$data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
        $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
        $config = [
            'base_url' => base_url('site/blogcat'),
            'per_page' => 10,
            'total_rows' => $this->user->num_blogs_cat($bc),
        ];
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tagl_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tagl_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item disabled">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tagl_close'] = '</a></li>';
        $config['attributes'] = array('class' => 'page-link');
        $this->pagination->initialize($config); // model function
        $data['users'] = $this->user->bloglistcat($bc, $config['per_page'], $this->uri->segment(4)); // list of seeker
        // print_r($data['users']);
        // die();
        $this->load->view('site/blog', $data);
    }




	function addcomment($param1 = '', $param2='' , $param3 = ''){
	if ($param1 == 'add_new') {
    $data = array(
            'blog_id' => $this->input->post('blog_id'),
            'user_id' => $this->input->post('user_id'),
            'description' => $this->input->post('description'),
            );
    $blog_id = $this->input->post('blog_id');
    $insert_id = $this->crud_model->create_data('tbl_blog_comment', $data);
    $this->session->set_flashdata('flash_message' , 'Comment_posted_successfully');
    redirect(base_url().'site/singleblog/'.$blog_id);
        }
	}

  
  function delete_comment($cid, $bid){
    $this->db->delete('tbl_blog_comment', array('comment_id' => $cid)); 
    $this->session->set_flashdata('flash_message' , 'Comment is successfully deleted ');
    redirect(base_url().'site/singleblog/'.$bid);
  }


	function addreview($param1 = '', $param2='' , $param3 = ''){
		if ($param1 == 'add_new') {
          $data = array(
            'profile_id' => $this->input->post('profile_id'),
            'user_id' => $this->input->post('user_id'),
             'rating' => $this->input->post('rating'),
            'description' => $this->input->post('description'),
            );
        $profile_id = $this->input->post('profile_id');
        $insert_id = $this->crud_model->create_data('tbl_profile_review', $data);
        $this->session->set_flashdata('flash_message' , 'Review_posted_successfully');
            redirect(base_url().'users/profileview/'.$profile_id);
        }
	}

  
  function delete_review($cid, $bid){
    $this->db->delete('tbl_profile_review', array('review_id' => $cid)); 
    $this->session->set_flashdata('flash_message' , 'Review is successfully deleted ');
    redirect(base_url().'users/profileview/'.$bid);
    }



	function index()
	{

  //$data['detail'] = $this->user->get_dashboard();
		//echo "string";
	$data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
    $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
	$data["categories"] = $this->Crud_model->get_data('tbl_cat');
    $data["cities"] = $this->Crud_model->get_data('tbl_city');
    $data["skills"] = $this->Crud_model->get_data('tbl_skill');
    $data["profiles"] = $this->Crud_model->get_data_latest('cv_contact_info');
     $data["tprofiles"] = $this->Crud_model->get_trending_data('cv_contact_info');
    $data['careeradvisor'] = $this->user->careeradvisor_info();
    $data['companies'] = $this->user->companies_info();
    $data['users'] = $this->user->user_info111();
    $data['users_freelance'] = $this->user->user_info111_freelance();
    $data['users_parttime'] = $this->user->user_info111_parttime();
    $data['users_fulltime'] = $this->user->user_info111_fulltime();
    // 		print_r($data['companies']);
    // 		die();
	$data['page'] = "home";

   // echo "<pre>";
   // print_r($data['companies']);
   // die();
    $this->load->view('site/index', $data);
	}
	

    function signup_employer(){
	if ($this->session->userdata('logged_jobseekar') == 1)
	redirect(base_url().'site/userdashboard');
	if ($this->session->userdata('logged_recruiter') == 1)
	redirect(base_url().'users/recruiter_dashboard');
	$data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
    $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
	$this->load->view('site/register', $data);
	}
	

    function register_recruiter(){
    	$password = $this->input->post('password');
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        
        /*if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
       
         echo "<div class='alert alert-danger-alt alert-dismissable'>
            <span class='glyphicon glyphicon-certificate'></span>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
                ×</button>Password must contain a capital letter a number and a small letter and the length of the password should be greater then 8.</div>";
          
          
        }*/

	$data['first_name']=$this->input->post('first_name');
	$data['last_name']=$this->input->post('last_name');
	$data['email']=$this->input->post('email');
	$data['password']= md5($this->input->post('password'));
	$data['method']="recruiter";

	$email = $this->input->post('email');
	$this->load->model('user');
	$count_result = $this->user->get_user_by_email($email); 
	$count = count($count_result);
	if ($count > 0) {
			// echo "<div class='alert alert-danger-alt alert-dismissable'>
   //          <span class='glyphicon glyphicon-certificate'></span>
   //          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
   //              ×</button>Email address already taken.</div>";
		 $this->session->set_flashdata('fail', 'Email address already taken.');
		 redirect('site/signup_employer');
	} else {
		
		$this->db->insert('users',$data);
	    $last_id = $this->db->insert_id();

     /*$data2 = array(
            'user_id' => $last_id,
            'name' => 'basic',
            'package_id' => '0',
             'profile_view_limit' => '0',
            'promotion_limit' => '0',
            'updated_on' => '2019-01-01'
            );
        $insert_id = $this->crud_model->create_data('emp_package_detail', $data2);*/
        

	    
	    // email send
	               $from_email = "info@toppakistanis.com"; 
             $to_email = $this->input->post('email'); 
      //config email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://saturn.customerdnsservers.com';
        $config['smtp_port'] = '465';
        $config['smtp_user'] ='info@toppakistanis.com';
        $config['smtp_pass'] = 'info@top';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = 'TRUE';
        $config['newline'] = "\r\n"; 
        
        $this->load->library('email', $config);
        $this->email->initialize($config);


        $message = 'Dear User,<br><br>Thank you for becoming a member of toppakistanis.com<br> Your account has been created,please verify your account by clicking the link below to proceed further:<br><br>
         <a  href="http://toppakistanis.com/site/email_verify_em/'.$last_id.'">Verify Email</a><br><br>Sincerely<br>Top Pakistanis<br>support team<br><br>For further queries Email at support@toppakistanis.com or visit the website toppakistanis.com';

         
         $this->email->from($from_email, 'TopPakistanis'); 
         $this->email->to($to_email);
         $this->email->subject('Verify email address'); 
         $this->email->message($message); 
         $this->email->send();
	    // email send ends
	    
	          // echo "<div class='alert alert-success-alt alert-dismissable'>
           //  <span class='glyphicon glyphicon-certificate'></span>
           //  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
           //      ×</button>Please verify your email to login.</div>";
          $this->session->set_flashdata('flash_message', 'Please verify your email to login.');
		 redirect('site/signup_employer');
				//$this->load->view('site/signup_recruiter',$data);
	
	}

}
/* ***** signu up recuiter ends */
    function register(){
    $password = $this->input->post('password');
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $data['first_name']=$this->input->post('first_name');
	$data['last_name']=$this->input->post('last_name');
	$data['email']=$this->input->post('email');
	$data['password']= md5($this->input->post('password'));
	$data['method']="normal";
	$email = $this->input->post('email');
	$this->load->model('user');
	$count_result = $this->user->get_user_by_email($email); 
	//echo "<pre>";
	//print_r($count_result);
	//echo "</pre>";
	$count = count($count_result);
	//echo $count;
	if ($count > 0) {
			// echo "<div class='alert alert-danger-alt alert-dismissable'>
   //          <span class='glyphicon glyphicon-certificate'></span>
   //          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
   //              ×</button>Email address already taken.</div>";
		  $this->session->set_flashdata('fail', 'Email address already taken.');
		 redirect('site/signup_employer');
	} else {
		//echo "else";
		//exit();
		$this->db->insert('users',$data);
	$last_id = $this->db->insert_id();
        
         // email send
	         $from_email = "info@toppakistanis.com"; 
             $to_email = $this->input->post('email'); 
      //config email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://saturn.customerdnsservers.com';
        $config['smtp_port'] = '465';
        $config['smtp_user'] ='info@toppakistanis.com';
        $config['smtp_pass'] = 'info@top';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = 'TRUE';
        $config['newline'] = "\r\n"; 
        
        $this->load->library('email', $config);
        $this->email->initialize($config);


        $message = 'Dear User,<br><br>Thank you for becoming a member of toppakistanis.com<br> Your account has been created,please verify your account by clicking the link below to proceed further:<br><br>
        <a  href="http://toppakistanis.com/site/email_verify_jbs/'.$last_id.'">Verify Email</a><br><br>Sincerely<br>toppakistanis<br>support team<br><br>For further queries Email at support@toppakistanis.com or visit the website toppakistanis.com';

         $this->email->from($from_email, 'TopPakistanis'); 
         $this->email->to($to_email);
         $this->email->subject('Verify email address'); 
         $this->email->message($message); 
         $this->email->send();
	    // email send ends
	    
	           // echo "<div class='alert alert-success-alt alert-dismissable'>
            // <span class='glyphicon glyphicon-certificate'></span>
            // <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
            //     ×</button>Please verify your email to login.</div>";
         $this->session->set_flashdata('flash_message', 'Please verify your email to login.');
		  redirect('site/signup_employer');
	
	}
   
}
/* ***** signu up jobseekar ends */
	function login($param1=''){
		if ($this->session->userdata('logged_jobseekar') == 1)
			redirect(base_url().'users/userdashboard');
		if ($this->session->userdata('logged_recruiter') == 1)
			redirect(base_url().'users/recruiter_dashboard');
		//login
		if ($param1 == 'login_jbs') {
			$email = $this->input->post("email");
            $password = md5($this->input->post("password"));

		   $this->form_validation->set_rules("email", "Email-ID", "trim|required|xss_clean");
		   $this->form_validation->set_rules("password", "Password", "trim|required|xss_clean");
			if ($this->form_validation->run() == FALSE)
	        {
	        	
				$data['error']="Invalid Email and Password";
				$this->load->view('site/login',$data);		
			}
			else
			{
				
				$uresult = $this->user->get_user_jbs($email, $password);
				if (count($uresult) > 0)
				{
				    $verify = $uresult->verify;
    				
					    if($verify == 1){
						$logged_name = $uresult->first_name.' '.$uresult->last_name;
					
						$this->session->set_userdata("logged_user","1");
						$this->session->set_userdata("login",TRUE);
						$this->session->set_userdata("logged_id",  $uresult->id);
						$this->session->set_userdata("logged_name", $logged_name);

						
							$this->session->set_userdata("logged_jobseekar","1");
								redirect("users/userdashboard");	
							//echo "normal";
							//exit();
							
							// $cat_data=$this->db->get_where('tbl_user_cat', array(
	      //                       'user_id' => $this->session->userdata('logged_id')
	      //                   ))->result_array(); 
							// if(count($cat_data)>0){
	      //               	redirect("users/userdashboard");			
	      //               		}
	                    			// else{
	                    			// redirect("users/profilecv");
	                    			// 	}
							
						
					    } else {
					        $data['error']="Please verify your email.";
						    $this->load->view('site/login',$data);
					    }
				}
				else{
					$data['error']="Invalid Email and Password";
					$this->load->view('site/login',$data);

						}
		    	}	
		} else {
		    $this->load->view('site/login');
		}
		//login ends

		
	}
	
	
	function login_emp($param1=''){
		if ($this->session->userdata('logged_jobseekar') == 1)
			redirect(base_url().'users/userdashboard');
		if ($this->session->userdata('logged_recruiter') == 1)
			redirect(base_url().'users/recruiter_dashboard');

		//login
		if ($param1 == 'login_em') {
			$email = $this->input->post("email");
            $password = md5($this->input->post("password"));

		   $this->form_validation->set_rules("email", "Email-ID", "trim|required|xss_clean");
		   $this->form_validation->set_rules("password", "Password", "trim|required|xss_clean");
			if ($this->form_validation->run() == FALSE)
	        {
	        	
				$data['error']="Invalid Email and Password";
				$this->load->view('site/login',$data);		
			}
			else
			{
				
				$uresult = $this->user->get_user_emp($email, $password);
				
				
				if (count($uresult) > 0)
				{
				    $verify = $uresult->verify;
    				
				    if($verify == 1){
    				    
    					$logged_name = $uresult->first_name.' '.$uresult->last_name;
    					
    					$this->session->set_userdata("logged_user","1");
    					$this->session->set_userdata("login",TRUE);
    					$this->session->set_userdata("logged_id",  $uresult->id);
    					$this->session->set_userdata("logged_name", $logged_name);
    
    					$check_user = $uresult->method;
    					if ($check_user == 'normal') {
    						$this->session->set_userdata("logged_jobseekar","1");
    						//echo "normal";
    						//exit();
    						redirect("users/userdashboard");
    					} elseif ($check_user == 'recruiter') {
    						$this->session->set_userdata("logged_recruiter","1");
    						//echo "recruiter";
    						//exit();
    						redirect("users/recruiter_dashboard");
    					}
				    } else {
				        $data['error']="Please verify your email.";
					    $this->load->view('site/login',$data);
				    }
				        
			
								
				}
				else{
					$data['error']="Invalid Email and Password";
					$this->load->view('site/login',$data);

						}
		    	}	
		} else {
		    $this->load->view('site/login');
		}
		//login ends

		
	}



function change_password(){
    $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
    $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
	$this->load->view('site/change_password',$data);	
}
function change_password_form(){
	 // $pass=$this->input->post('old_password');
    $password=$this->input->post('password');
    $confirm_password=$this->input->post('confirm_password');
    // if($npass!=$rpass){
    //     return "false";
    // }else{
  
      $this->form_validation->set_rules('password', 'Password', 'required');
$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
if ($this->form_validation->run() == TRUE)
	    {
	$uid = $this->session->userdata('logged_id'); 
    $data['password'] = md5($this->input->post("password"));
 // $data['password'] = $this->input->post("password");
     // print_r($password1);
     // die();        
  	 // $data = array(
    //           'password'=> $password1
    //           );
           $res = $this->crud_model->update_data('users','id',$data,$uid);
           if($res == true){

      $this->session->set_flashdata('flash_message', 'Password Changed !!!');
  }
}
  else{
  	$this->session->set_flashdata('fail', 'Password Donot Match !!!');
  }
  
		  redirect('site/change_password');
  
	
}




	
	function fb_test()
	{
	    
        $this->load->view('site/fbshare');
	}
	
	function tw_test()
	{
	    
        $this->load->view('site/twittershare');
	}




	function forgot($param1 = ''){
		if ($this->session->userdata('logged_jobseekar') == 1)
			redirect(base_url().'users/userdashboard');
		if ($this->session->userdata('logged_recruiter') == 1)
			redirect(base_url().'users/recruiter_dashboard');
		 $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
              $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
        
        if($param1 == 'reset'){
            $email = $this->input->post('email');
            $this->db->where('email', $email);
             $count = $this->db->count_all_results('users');
            if($count > 0 ){
            $pass = substr(md5(uniqid(mt_rand(), true)) , 0, 8);
                
                $u_data = array(
                    'password' => $pass
                    );
                    
                $resut = $this->Crud_model->update_data('users', 'email',$u_data, $email);
               
                // email send
    	         $from_email = "info@toppakistanis.com"; 
                 $to_email = $this->input->post('email'); 
                  //config email settings
                    $config['protocol'] = 'smtp';
                    $config['smtp_host'] = 'ssl://saturn.customerdnsservers.com';
                    $config['smtp_port'] = '465';
                    $config['smtp_user'] ='info@toppakistanis.com';
                    $config['smtp_pass'] = 'info@top';  //sender's password
                    $config['mailtype'] = 'html';
                    $config['charset'] = 'iso-8859-1';
                    $config['wordwrap'] = 'TRUE';
                    $config['newline'] = "\r\n"; 
                    
                    $this->load->library('email', $config);
                    $this->email->initialize($config);
            
            
                    $message = 'Dear User,<br><br> We got a request to reset your toppakistanis password.To start the process, please click the following link:<br><br>
                    <a  href="http://toppakistanis.com/site/resest_password/'.$pass.'">Reset Password</a><br><br>Thanks';
            
                     $this->email->from($from_email, 'Top Pakistanis'); 
                     $this->email->to($to_email);
                     $this->email->subject('Reset Password'); 
                     $this->email->message($message); 
                     $this->email->send();
            	    // email send ends
	    
                $data['success'] = 'Account Reset password Instructions emailed please visit to your inbox and follow the instructions.';
                $this->load->view('site/forgot',$data);
            } else {
                $data['error'] = 'You have entered an invalid email.';
                $this->load->view('site/forgot',$data);
            }
        } else {
            $this->load->view('site/forgot');
        }

		
	}
	
	function resest_password($param1 = ''){
		if ($this->session->userdata('logged_jobseekar') == 1)
			redirect(base_url().'users/userdashboard');
		if ($this->session->userdata('logged_recruiter') == 1)
			redirect(base_url().'users/recruiter_dashboard');
		 $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
              $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
			
			if($param1 == 'change') {
			    
			    $reset_password = $this->input->post('reset_password');
                $this->db->where('password', $reset_password);
                $count = $this->db->count_all_results('users');
                
                if($count > 0 ){
                $password = md5($this->input->post('password'));
                    
                    $u_data = array(
                        'password' => $password
                        );
                        
                    $resut = $this->Crud_model->update_data('users', 'password',$u_data, $reset_password);
                   
                    $data['success'] = 'Password changed successfully! login with your new Password.';
                    $this->load->view('site/forgot2',$data);
                } else {
                    $data['error'] = 'Please use the correct link.';
                    $this->load->view('site/forgot2',$data);
                }
			    
			} else {
			    $this->load->view('site/resest_password');
			}
		
	}
	

	// function signup(){
	// 	if ($this->session->userdata('logged_jobseekar') == 1)
	// 		redirect(base_url().'users/userdashboard');
	// 	if ($this->session->userdata('logged_recruiter') == 1)
	// 		redirect(base_url().'users/recruiter_dashboard');
	// 	$this->load->view('site/beforesignup');
	// }

	function loginaccount(){
		 $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
              $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
		$this->load->view('site/login', $data);
	}

	function signup(){
		if ($this->session->userdata('logged_jobseekar') == 1)
			redirect(base_url().'users/userdashboard');
		if ($this->session->userdata('logged_recruiter') == 1)
			redirect(base_url().'users/recruiter_dashboard');
		$this->load->view('site/signupaccount');
	}


	function signup_emp(){
		if ($this->session->userdata('logged_jobseekar') == 1)
			redirect(base_url().'users/userdashboard');
		if ($this->session->userdata('logged_recruiter') == 1)
			redirect(base_url().'users/recruiter_dashboard');
		$this->load->view('site/beforesignup_rec');
	}

	function signup_jobseekar(){
		if ($this->session->userdata('logged_jobseekar') == 1)
			redirect(base_url().'site/userdashboard');
		if ($this->session->userdata('logged_recruiter') == 1)
			redirect(base_url().'users/recruiter_dashboard');
		$this->load->view('site/signup');
	}



/* ***** signu up recuiter starts */

public function email_verify_em($id){
 
 $data = array('verify' => 1 );
  $this->db->update('users',$data,array('id'=>$id));
           
 $this->session->set_flashdata('flash_message', 'Your Account has been created and verified successfully!. Now you can login to your toppakistanis Account.'
 );  
        $this->load->view('site/login'); 
}

public function email_verify_jbs($id){
 
 $data = array('verify' => 1 );
  $this->db->update('users',$data,array('id'=>$id));
           
 $this->session->set_flashdata('flash_message', 'Your Account has been created and verified successfully!. Now you can login to your toppakistanis Account.'
 );  
        $this->load->view('site/login'); 
       
}

	




/* ***** signu up jobseekar starts */






/*signin starts*/
	function signin(){
// get form input
		if ($this->session->userdata('logged_jobseekar') == 1)
			redirect(base_url().'site/userdashboard');
		if ($this->session->userdata('logged_recruiter') == 1)
			redirect(base_url().'users/recruiter_dashboard');
			
		$email = $this->input->post("email");
        $password = md5($this->input->post("password"));
        
		$this->form_validation->set_rules("email", "Email-ID", "trim|required|xss_clean");
		$this->form_validation->set_rules("password", "Password", "trim|required|xss_clean");
		
		if ($this->form_validation->run() == FALSE)
        {
			$data['error']="Invalid Email and Password";
			$this->load->view('site/login',$data);		
		}
		else
		{
			$uresult = $this->user->get_user($email, $password);
			if (count($uresult) > 0)
			{
				$logged_name = $uresult->first_name.' '.$uresult->last_name;
				
				$this->session->set_userdata("logged_user","1");
				$this->session->set_userdata("login",TRUE);
				$this->session->set_userdata("logged_id",  $uresult->id);
				$this->session->set_userdata("logged_name", $logged_name);

				$check_user = $uresult->method;
				if ($check_user == 'normal') {
					$this->session->set_userdata("logged_jobseekar","1");
					//echo "normal";
					//exit();
					redirect("users/userdashboard");
				} elseif ($check_user == 'recruiter') {
					$this->session->set_userdata("logged_recruiter","1");
					//echo "recruiter";
					//exit();
					redirect("users/recruiter_dashboard");
				} 
							
			}
			else{
				$data['error']="Invalid Email and Password";
				$this->load->view('site/login',$data);

					}
		    	}
	}
/*signin ends*/





/*     * *****LOGOUT FUNCTION ****** */

    function logout() {
        $this->session->sess_destroy();
        //$this->session->set_flashdata('logout_notification', 'logged_out');
        redirect(base_url().'site', 'refresh');
    }
}


?>