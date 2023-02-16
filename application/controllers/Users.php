<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
* 
*/
class Users extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Crud_model');
		$this->load->model('user');
		$this->load->library('email');
    $this->load->library('session');
//date_default_timezone_set("Asia/Karachi");
    /*if ($this->session->userdata('login') != 1)
      redirect(base_url().'site/login');*/
	}

  /* **** recruiter ****** */
  function recruiter_dashboard(){
    if ($this->session->userdata('logged_recruiter') != 1)
            redirect(base_url() . 'site/login', 'refresh');
              $user_id = $this->session->userdata('logged_id');
           $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
              $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
              $city_id = $this->user->getcityid($user_id);
             
           $data['profiles'] = $this->user->profiles_info($city_id);
            //  print_r($data['profiles']);
            //   die();
              // $data['company'] = $this->user->getcomp();
              // $data["package_detail"] = $this->Crud_model->package_detail($user_id);
              // $data["count_posted_jobs"] = $this->Crud_model->count_posted_jobs('tbl_job',$user_id);
              $data['page_name'] = 'overview';
    $this->load->view('site/dashboard', $data);
  }


  function userdashboard(){
    if ($this->session->userdata('logged_jobseekar') != 1)
          redirect(base_url().'site/login', 'refresh');
            $user_id = $this->session->userdata('logged_id');
           $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
              $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
               $data['companies'] = $this->user->companies_info();
              $data['careeradvisor'] = $this->user->careeradvisor_info();
              	$data['limit'] = $this->user->get_blog_limit();
            $data['page'] = "dashboard";
            $this->load->view('site/fdashboard',$data);
}

 function add_personalinfo($param11='',$param12='',$param13='')
  {
    if ($this->session->userdata('logged_recruiter') != 1)
        redirect(base_url().'site/login', 'refresh');
       $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
              $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
          $user_id = $this->session->userdata('logged_id');
          if($param11 == 'load_profile')
          {
            $data['edit_profile_data'] = $this->crud_model->get_data_user_id_recruiter($user_id);
            $data['page_name'] = 'profile';
            $this->load->view('site/personalinfo', $data);
          }
          if($param11 == 'edit_profile')
          {
            $user_id=$this->session->userdata('logged_id');
            $user_count = $this->Crud_model->get_count();
            //print_r($user_count);
            $user_count = $user_count + 1;
            // $config = array(
            // 'upload_path'=> './uploads/user_image/',
            //   'allowed_types' => "gif|jpg|png",
            //   'overwrite' => TRUE,
            //   'file_name' => 'user_'.$user_count,
            //   );
            $cat_iname = $_FILES["userfile"]["name"] ;
			$config['upload_path'] = './uploads/user_image/';
            $config['allowed_types'] = '*';
			$config['max_size']    = '102400';
			$config['file_name'] = $cat_iname;
                 $this->upload->initialize($config);
                 $this->load->library('upload', $config);
            if(!$this->upload->do_upload())
            {
              $error = array('error' => $this->upload->display_errors());
              $this->session->set_flashdata('fail', $this->upload->display_errors());   
            }
            $name = $this->input->post('fullname');
            $name_sep = explode(' ', $name);
            $firstname = $name_sep[0];
            $lastname = $name_sep[1];
            $data = array(
              'first_name'=>$firstname,
              'last_name'=>$lastname,
              'job_designation'=>$this->input->post('job_designation'),
              'gender'=>$this->input->post('gender'),
              'cv'=>$this->input->post('description'),
              'date_ofbirth'=>$this->input->post('dateofbirth'),
              'email'=>$this->input->post('email'),
              'address'=>$this->input->post('address'),
              'country'=>$this->input->post('country'),
              'city'=>$this->input->post('city'),
              'phone'=>$this->input->post('phone'),
              'mobile'=>$this->input->post('cell')
              );
            // if (isset($_FILES['userfile']['name']) && !empty($_FILES['userfile']['name'])) {
            //     $data['picture_url'] = base_url() . "uploads/user_image/" .$this->upload->data('file_name'); 
            // }
               	if($this->upload->do_upload('userfile'))
			{	
				$test=$this->upload->data();
				$picture=$test['orig_name'];
				$data['picture_url']=base_url().'uploads/user_image/'.$picture;
			
			}
            $id = $this->input->post('edit_id');
            $lastid = $this->crud_model->update_data('users','id',$data,$id);
            $this->session->set_flashdata('flash_message' , 'Profile updated successfully');
            redirect(base_url()."users/add_personalinfo/load_profile", 'refresh');
            }     
  }




/*
function packages()
{ 
  if ($this->session->userdata('logged_recruiter') != 1)
            redirect(base_url().'site/login', 'refresh');
    $data['emp_packages'] = $this->crud_model->get_data('emp_packages');
    $this->load->view('site/packages',$data);
}
*/


function job_payment($pkg_id)
{ 
  if ($this->session->userdata('logged_recruiter') != 1)
            redirect(base_url().'site/login', 'refresh');
    $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
    $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
    $data['emp_packages'] = $this->crud_model->get_data('emp_packages');
    $user_id = $this->session->userdata('logged_id');
    $data['user'] = $this->crud_model->get_data_user_id('users','id',$user_id);
    //echo "<pre>";
    //print_r($use);
    //die();
    $this->load->view('site/employer_payment',$data);
}
function job_payment_jbs($pkg_id)
{ 
  if ($this->session->userdata('logged_jobseekar') != 1)
            redirect(base_url().'site/login', 'refresh');
    $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
    $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
    $data['emp_packages'] = $this->crud_model->get_data('jbs_packages');
    $user_id = $this->session->userdata('logged_id');
    $data['user'] = $this->crud_model->get_data_user_id('users','id',$user_id);
    //echo "<pre>";
    //print_r($use);
    //die();
    $this->load->view('site/employee_payment',$data);
}

  function employer_pricing()
  {
     if ($this->session->userdata('logged_recruiter') != 1)
        redirect(base_url().'site/login', 'refresh');
        $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
        $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
        $data['emp_packages'] = $this->crud_model->get_data('emp_packages');
        $data['page_name'] = 'pricing';
       // echo "<pre>";
        //print_r($data['emp_packages']);
        //die();
        $this->load->view('site/pricing',$data);
  }



  function employee_pricing()
  {

     if ($this->session->userdata('logged_jobseekar') != 1)
          redirect(base_url().'site/login', 'refresh');
        $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
              $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
                $data['emp_packages'] = $this->crud_model->get_data('jbs_packages');
            $data['page_name'] = 'pricing';
      $this->load->view('site/fplan',$data);
  }


function search(){
    
        
 /* $data['detail'] = $this->user->get_catdashboard($param1);*/
//pagination
        $config_base_ulr = base_url() . "users/search/";
        $per_page = 10;
            //pagination_data($column_id, $order_by, $table_name, $config_base_ulr , $per_page)
        $data = [];
        if(isset($_POST['keywords'])){
          $data['keywords'] = $_POST['keywords'];
        }
        
        $press = $this->Crud_model->getpagination_search('jobs_id', 'desc', 'tbl_job',$config_base_ulr, $per_page,$data);
      
        $data["detail"] =$press;
            //echo print_r($data);
            //die();
        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;',$str_links );
          
    // pagination

  $this->load->view('site/view_catjobs2.php',$data);
}




function search_jobs(){
    $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
    $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
    $data["categories"] = $this->Crud_model->get_data('tbl_cat');
    $data["cities"] = $this->Crud_model->get_data('tbl_city');
    $data["skills"] = $this->Crud_model->get_data('tbl_skill');
      $records = $this->input->post();
      $data["users"] = $this->Crud_model->getfiltered_search($records);
       // echo "<pre>";
       // print_r($data['users']);
       //  die();
      $this->load->view('site/list.php', $data);
}




  function cv(){
      $user_id=$this->session->userdata('logged_id');
            $user_count = $this->Crud_model->get_count();
            //print_r($user_count);
            $user_count = $user_count + 1;
            $cat_iname = $_FILES["cv"]["name"] ;
            $config['upload_path'] = './uploads/user_image/';
            $config['allowed_types'] = 'pdf|csv|doc|docx';
            $config['overwrite']=TRUE;
            $config['max_size']    = '102400';
            $config['file_name'] = $cat_iname;
            $this->upload->initialize($config);
      //print_r($cat_iname);
            $this->load->library('upload',$config); 
      if($this->upload->do_upload('cv'))
      { 
        $test=$this->upload->data();
        $cv=$test['orig_name'];
        $cv_url=base_url().'uploads/user_image/'.$cv;
        $this->Crud_model->update_data3($user_id, $cv_url);
        $this->session->set_flashdata('flash_message' , 'CV updated successfully');
        redirect(base_url()."users/profile", 'refresh');
      }
      else{
        $error = array('error' => $this->upload->display_errors());
      }

  } 




function profile(){
      if ($this->session->userdata('logged_jobseekar') != 1)
        redirect(base_url().'site/login', 'refresh');
       $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
              $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
            $uid=$this->session->userdata('logged_id');
            $data['category'] = $this->crud_model->get_data('tbl_cat');
            $data['subcategory'] = $this->crud_model->get_data('tbl_subcat');
            $data['skill'] = $this->crud_model->get_data('tbl_skills');
            $data['users'] = $this->user->user_info($uid);
            $data['basicdetails'] = $this->user->user_cv_basic_info($uid);
            $data['educations'] = $this->user->education($uid);
            $data['works'] = $this->user->work_experience($uid);
            $data['worksingles'] = $this->user->work_experience_s($uid);
            $data['skills'] = $this->user->skills($uid);
            $data['objectives'] = $this->user->objectives($uid);
            $data['portfolios'] = $this->user->portfolio($uid);
            $data['page'] = "profile";
    $this->load->view('site/profile',$data);
     $user_count = $this->Crud_model->get_count_company();
            //print_r($user_count);
    $this->form_validation->set_rules('first_name', 'first_name', 'required');
    $this->form_validation->set_rules('last_name', 'last_name', 'required');
  //$this->form_validation->set_rules('subordinate_id', 'Subordinate is required', 'required');
  //$this->form_validation->set_rules('type_of_case', 'Type of Case is required', 'required');
  //$this->form_validation->set_rules('court_id', 'Court is required', 'required');
  //$this->form_validation->set_rules('status', 'Status is required', 'required');
          $user_count = $this->Crud_model->get_count_company();
        //print_r($user_count);
          $user_count = $user_count + 1;
          $user_count1 = $this->Crud_model->get_count();
            //print_r($user_count);
          $user_count1 = $this->Crud_model->get_count();
            //print_r($user_count);
          $user_count1 = $user_count1 + 1;
          $cat_iname = $_FILES["picture_url"]["name"] ;
      $config['upload_path'] = './uploads/user_image/';
      $config['allowed_types'] = '*';
      $config['max_size']    = '102400';
      $config['file_name'] = $cat_iname;
      $this->upload->initialize($config);
      //print_r($cat_iname);
          $this->load->library('upload',$config); 
            // if(!$this->upload->do_upload())
            // {
            //   $error = array('error' => $this->upload->display_errors());
            //   $this->session->set_flashdata('fail', $this->upload->display_errors());   

            // }

  if($this->form_validation->run() == True){


 $data = array(
              'first_name'=>$this->input->post('first_name'),
              'last_name'=>$this->input->post('last_name'),
              'address'=>$this->input->post('address'),
              'city'=>$this->input->post('city'),
              'phone'=>$this->input->post('mob_no'),
              'gender'=>$this->input->post('gender')
              );
   $uid=$this->session->userdata('logged_id');
            $res = $this->crud_model->update_data('users','id',$data,$uid);






    $array=$this->input->post();
     $skill_id = $this->input->post('skills');
        if($this->upload->do_upload('picture_url'))
      { 
        $test=$this->upload->data();
        $picture=$test['orig_name'];
        $array['picture_url'] = base_url().'uploads/user_image/'.$picture;
      }
    $cvres=$this->Crud_model->get_cv_objective($uid);
    if(!empty($cvres)){
        $tablename='cv_objective';
        $attr='user_id';
        $obj=array('objective_detail'=>$array['objective']);
        $res=$this->Crud_model->update_data($tablename, $attr, $obj, $uid);
    }else{
        $tablename='cv_objective';
        $attr='user_id';
        $obj['user_id']=$uid;
        $obj['objective_detail']=$array['objective'];
        $res=$this->Crud_model->create_data($tablename, $obj);
    }
    //$res2=$this->Crud_model->update_data11($uid);
    $result=$this->Crud_model->get_cv_contact_info($uid);
    if(!empty($result)){
        $tablename='cv_contact_info';
        $attr='user_id';
        unset($array['objective']);
        unset($array['submit']);
        $res1=$this->Crud_model->update_data($tablename, $attr, $array, $uid);
        if(!empty($res1)){
            $this->session->set_flashdata('success','Data Updated');
          redirect('users/profile', 'refresh');
        }else{
            $this->session->set_flashdata('error', 'An Error Occured!');
              redirect('users/profile', 'refresh');
        }

    }

    else{
        $tablename='cv_contact_info';
        $array['user_id']=$uid;
        $array['alternate_mobile_no']=$array['mob_no'];
        unset($array['objective']);
        unset($array['submit']);
        $res1=$this->Crud_model->create_data($tablename, $array);
        if(!empty($res1)){
            $this->session->set_flashdata('success','Data Added');
          redirect('users/profile', 'refresh');
        }else{
            $this->session->set_flashdata('error', 'An Error Occured!');
              redirect('users/profile', 'refresh');
        }
    }

  }
    else{
      //echo validation_errors();
        $this->session->set_flashdata('error', validation_errors());
      //redirect('users/profile', 'refresh');
    } 
}





function addcareeradvisor($param1 = '')
  {
      

               $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
              $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');

        if ($param1 == 'add_new') {
          $user_count = $this->Crud_model->get_count_company();
            //print_r($user_count);
            $user_count = $user_count + 1;
            $config = array(
            'upload_path'=> './uploads/company_logo/',
              'allowed_types' => "gif|jpg|png",
              'overwrite' => TRUE,
              'file_name' => 'company_'.$user_count,
              'max_size' => "3072", //Can be set to particular file size,here it is 2 MB(2048 Kb)
              );
                 $this->upload->initialize($config);
                 $this->load->library('upload', $config);
            if(!$this->upload->do_upload())
            {
              $error = array('error' => $this->upload->display_errors());
              $this->session->set_flashdata('fail', $this->upload->display_errors());   

            }


          $comp_date = ("Y-m-d");
          $data = array(
            'ca_comp' => $this->input->post('ca_comp'),
            'ca_name' => $this->input->post('ca_name'),
            'ca_description' => $this->input->post('ca_description'),
            'ca_address' => $this->input->post('ca_address'),
            'ca_country' => $this->input->post('ca_country'),
            'ca_city' => $this->input->post('ca_city'),
            'ca_email' => $this->input->post('ca_email'),
            'ca_phone' => $this->input->post('ca_phone'),
            );

          if (isset($_FILES['userfile']['name']) && !empty($_FILES['userfile']['name'])) {
                $data['logo_url'] = base_url() . "uploads/company_logo/" .$this->upload->data('file_name');
                //print_r($data);
                 
            }

          $insert_id = $this->crud_model->create_data('tbl_careeradvisor', $data);
            $this->session->set_flashdata('flash_message' , 'Thankyou for showing interest in becoming a Career Advisor!! We have received your information, Once Approved from Admin your information will be listed in Career Advisory Section');
            redirect(base_url().'site/index', 'refresh');
  }
}





  public function delete_edu($id){
      $tablename='cv_education';
      $attr='cv_education_id';
      $res=$this->Crud_model->delete_data($tablename, $attr, $id);
      $this->session->set_flashdata('flash_message', get_phrase('data_deleted'));
      redirect(base_url() . 'index.php/users/profile');
  }


public function delete_work($id){
      $tablename='cv_workexperience';
      $attr='id';
      $res=$this->Crud_model->delete_data($tablename, $attr, $id);
      $this->session->set_flashdata('flash_message', get_phrase('data_deleted'));
      redirect(base_url() . 'index.php/users/profile');
  }


  public function delete_portfolio($id){
      $tablename='cv_portfolio';
      $attr='id';
      $res=$this->Crud_model->delete_data($tablename, $attr, $id);
      $this->session->set_flashdata('flash_message', get_phrase('data_deleted'));
      redirect(base_url() . 'index.php/users/profile');
  }


  public function delete_skill($id){
      $tablename='cv_skill';
      $attr='cv_skill_id';
      $this->Crud_model->delete_data($tablename, $attr, $id);
      $this->session->set_flashdata('flash_message', get_phrase('data_deleted'));
      redirect(base_url() . 'index.php/users/profile');
  }



    function delete_profile($table,$field,$value){
      $this->db->delete($table, array($field => $value)); 
      $this->session->set_flashdata('flash_message' , 'Successfully Delete ');
      redirect('users/profile');
  }


    function update_objective(){
      $user_id=$this->session->userdata('logged_id');
      $this->db->where('user_id', $user_id);
      $result=$this->db->get('cv_objective')->num_rows();
      $data['objective_detail']  = $this->input->post('objective');
            if($result>0)
            {
              $this->db->where('user_id', $this->session->userdata('logged_id'));
              $this->db->update('cv_objective', $data);
            }
            else{
              $data['user_id']  = $this->session->userdata('logged_id');
              $this->db->insert('cv_objective', $data); 
            }
      $this->session->set_flashdata('flash_message','update successfully');   
      redirect(base_url() . 'index.php/users/profile/');

}



function update_workexperience(){
    $id  =$this->input->post('id');
              $data['to_date']  = $this->input->post('to_date');
              $data['from_date'] = $this->input->post('from_date');
               $data['check_present'] = $this->input->post('check_present');
              $data['designation'] = $this->input->post('designation');
              $data['organization_name']  = $this->input->post('organization_name');
              $data['description']  = $this->input->post('description');
              $this->db->where('id',$id);
              $this->db->update('cv_workexperience',$data);
              $this->session->set_flashdata('flash_message','update successfully');   
            redirect(base_url() . 'index.php/users/profile/');
}

function update_portfolio(){

       $user_count = $this->Crud_model->get_count();
            //print_r($user_count);
            $user_count = $user_count + 1;
             $cat_iname = $_FILES["userfile"]["name"] ;
            $config = array(
            'upload_path'=> './uploads/user_image/',
              'allowed_types' => "gif|jpg|png",
              'overwrite' => TRUE,
              'file_name' => $cat_iname
              //'max_size' => "100480", //Can be set to particular file size,here it is 2 MB(2048 Kb)
              );
                 $this->upload->initialize($config);
                 $this->load->library('upload', $config);
            if(!$this->upload->do_upload())
            {
              $error = array('error' => $this->upload->display_errors());
              $this->session->set_flashdata('fail', $this->upload->display_errors());   
            }
          
    $id  =$this->input->post('id');
              $data['title']  = $this->input->post('title');
              $data['description'] = $this->input->post('description');
              $data['link'] = $this->input->post('link');
              $data['picture_url']  = $this->input->post('userfile');
                  if (isset($_FILES['userfile']['name']) && !empty($_FILES['userfile']['name'])) {
                $data['picture_url'] = base_url() . "uploads/user_image/" .$this->upload->data('file_name');    
            }
              $this->db->where('id',$id);
              $this->db->update('cv_portfolio',$data);
              $this->session->set_flashdata('flash_message','update successfully');   
            redirect(base_url() . 'index.php/users/profile/');
}

function update_eduation(){
    $id  =$this->input->post('id');
              $data['starting_date']  = $this->input->post('to_date');
              $data['ending_date'] = $this->input->post('from_date');
              $data['subject'] = $this->input->post('subject');
              $data['board']  = $this->input->post('board');
              $data['grade']  = $this->input->post('grade');
              $this->db->where('cv_education_id',$id);
              $this->db->update('cv_education',$data);
              $this->session->set_flashdata('flash_message','update successfully');     
            redirect(base_url() . 'index.php/users/profile/');
}



function update_skill(){
    $id  =$this->input->post('id');
          $data['name']  = $this->input->post('skill');
          $data['rating']  = $this->input->post('rating');
          $this->db->where('cv_skill_id',$id);
          $this->db->update('cv_skill',$data);
          $this->session->set_flashdata('flash_message','update successfully');   
          redirect(base_url() . 'index.php/users/profile/');
}


// cv add new detail
function add_portfolio(){
            $user_count = $this->Crud_model->get_count();
            //print_r($user_count);
            $user_count = $user_count + 1;
            // $config = array(
            // 'upload_path'=> './uploads/user_image/',
            //   'allowed_types' => "gif|jpg|png",
            //   'overwrite' => TRUE,
            //   'file_name' => 'user_'.$user_count,
            //   );
              $cat_iname = $_FILES["userfile"]["name"] ;
			$config['upload_path'] = './uploads/user_image/';
            $config['allowed_types'] = '*';
			$config['max_size']    = '102400';
			$config['file_name'] = $cat_iname;
                 $this->upload->initialize($config);
                 $this->load->library('upload', $config);
            if(!$this->upload->do_upload())
            {
              $error = array('error' => $this->upload->display_errors());
              $this->session->set_flashdata('fail', $this->upload->display_errors());   
            }
            $data['title']  = $this->input->post('title');
            $data['link'] = $this->input->post('link');
            $data['description'] = $this->input->post('description');
            $data['user_id']=$this->session->userdata('logged_id');
            //   if (isset($_FILES['userfile']['name']) && !empty($_FILES['userfile']['name'])) {
            //     $data['picture_url'] = base_url() . "uploads/user_image/" .$this->upload->data('file_name');    
            // }
            	if($this->upload->do_upload('userfile'))
			{	
				$test=$this->upload->data();
				$picture=$test['orig_name'];
				$data['picture_url']=base_url().'uploads/user_image/'.$picture;
			
			}
            
            
            
            
              $this->db->insert('cv_portfolio',$data);
              $this->session->set_flashdata('flash_message', get_phrase('data_updated'));
            redirect(base_url() . 'index.php/users/profile');
}



function add_workexperience(){
              $data['to_date']  = $this->input->post('to_date');
              $data['from_date'] = $this->input->post('from_date');
               $data['check_present'] = $this->input->post('check_present');
              $data['designation'] = $this->input->post('designation');
              $data['organization_name']  = $this->input->post('organization_name');
               $data['description']  = $this->input->post('description');
              $data['user_id']=$this->session->userdata('logged_id');
              $this->db->insert('cv_workexperience',$data);
              $this->session->set_flashdata('flash_message', get_phrase('data_updated'));
            redirect(base_url() . 'index.php/users/profile');
}


function add_eduation(){
              $data['starting_date']  = $this->input->post('to_date');
              $data['ending_date'] = $this->input->post('from_date');
              $data['subject'] = $this->input->post('subject');
              $data['board']  = $this->input->post('board');
              $data['grade']  = $this->input->post('grade');
               $data['description']  = $this->input->post('description');
              $data['user_id']=$this->session->userdata('logged_id');
              $this->db->insert('cv_education',$data);
              $this->session->set_flashdata('flash_message', get_phrase('data_updated'));
            redirect(base_url() . 'index.php/users/profile');
}


function add_skill(){
              $data['name']  = $this->input->post('skill');
              $data['rating']  = $this->input->post('rating');
              $data['user_id']=$this->session->userdata('logged_id');
              $this->db->insert('cv_skill',$data);
              $this->session->set_flashdata('flash_message', get_phrase('data_updated'));
            redirect(base_url() . 'index.php/users/profile');

}


 function fetchSubCategories(){
        $id = $this->input->post('id');
        $query = $this->db->get_where('tbl_subcat', array('cat_id' => $id))->result_array();
        if(count($query)>0){
        echo '<option slected value="">'."Select SubCategory".'</option>';
        foreach ($query as $key) {
        echo '<option value="'.$key['subcat_id'].'">'.$key['subcat_name'].'</option>';
      }
    }
  }



    function fetchSkills1(){
        $id = $this->input->post('id');
        $query = $this->db->get_where('tbl_skills', array('cat_id' => $id))->result_array();
        if(count($query)>0){
        // echo '<option slected value="">'."Select Multiple Skills".'</option>';
        foreach ($query as $key) {
        echo '<input type="checkbox" value="'.$key['skill_name'].'">'.$key['skill_name'].'<br/>';
            }
        }
  }


public function getskills(){ 
    // POST data 
    $postData =$this->input->post();
    // get data 
    $data = $this->user->getskills($postData);
    echo json_encode($data); 
  }



  function fetchskills(){
        $id = $this->input->post('id');
        $query = $this->db->get_where('tbl_skill', array('subcat_id' => $id))->result_array();
       if(count($query)>0){
            echo '
          <hr>
            <div class="col-lg-12" style="padding-left: 0px; padding-right: 0px; padding-bottom: 2%;">
          <span class="label label-default">Select Skills</span>
          </div>';
                 foreach ($query as $benefit_row) { 
                  echo '<div class="col-md-4 col-sm-6">
                        <input required type="checkbox" value="'.$benefit_row['skill_id'].'" name="skill_id[]" id="'.$benefit_row['skill_name'].'"/>
                        <label for="'.$benefit_row['skill_name'].'">'.$benefit_row['skill_name'].'</label>
          </div>';
                  }
            echo '<div class="col-md-12"><hr></div>';
        }
  }
  /* **** recruiter ends ****** */


function myprofileview(){
     $uid = $this->session->userdata('logged_id');
    $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
    $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
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
   
    $data['page'] = "profile";
    $this->load->view('site/myprofileview', $data);
}







function profileview($uid){
  $user_id = $this->session->userdata('logged_id'); 
    $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
    $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
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
     $data['credit_limit'] = $this->crud_model->check_remaining_credits($user_id);
      //echo "<pre>";
     //print_r($data['credit_limit']);
     //die();
    $data['page'] = "profile";
    $this->load->view('site/profileview', $data);
}


function download_resume(){
    $user_id = $this->session->userdata('logged_id'); 
    $data['credit_limit'] = $this->crud_model->check_remaining_credits($user_id);  
     $remaining = $data['credit_limit']->profile_view_limit;
    $data = array(
                'profile_view_limit' => $remaining-1
                );
    $this->Crud_model->update_data('emp_package_detail', 'user_id', $data, $user_id);
    redirect(base_url().'users/findaprofile', 'refresh');
}



function profileview111(){
    $data["categories"] = $this->Crud_model->get_data('tbl_cat');
    $data["cities"] = $this->Crud_model->get_data('tbl_city');
    $data["skills"] = $this->Crud_model->get_data('tbl_skill');
    $data['users'] = $this->user->user_info111();
    // print_r($data['users']);
    // die();
    // $data['basicdetails'] = $this->user->user_cv_basic_info1();
    // $data['educations'] = $this->user->education1();
    // $data['works'] = $this->user->work_experience1();
    // $data['cvskills'] = $this->user->skills1();
    // $data['objectives'] = $this->user->objectives1();
    // $data['portfolios'] = $this->user->portfolio1();
    $data['page'] = "profile";
    $this->load->view('site/list', $data);
 
}

function search_awein(){
  $keyword    =   $this->input->post('keyword');
   $city    =   $this->input->post('job_location');
    $cat    =   $this->input->post('cat_id');
    if ((!empty($keyword)) AND ((!empty($city)) AND (!empty($cat)))) {
      $this->db->where('city', $city);
                  $this->db->where('cat_id', $cat);
$searchterm = explode(' ',$keyword);
 $this->db->group_start();
 foreach ($searchterm as $keyword1) {
 
         $this->db->like('first_name', $keyword1)
                     ->or_like('last_name', $keyword1)
                     ->or_like('type', $keyword1);
                   }  
                    $this->db->group_end();         
                 
                    // $this->db->or_where('city', $city);
                    //  $this->db->or_where('cat_id', $cat);
                 
                }
                   elseif ((!isset($cat) AND (!isset($city))) OR (!empty($keyword))) {
        $searchterm = explode(' ',$keyword);
         foreach ($searchterm as $keyword1) {
         $this->db->like('first_name', $keyword1);
                     $this->db->or_like('last_name', $keyword1);
                     $this->db->or_like('type', $keyword1);
                   }         
                }
                           elseif ((!isset($keyword) AND (!isset($cat))) OR (!empty($city))) {
      $this->db->where('city', $city);       
                }
                                   elseif ((!isset($keyword) AND (!isset($city))) OR (!empty($cat))) {
      $this->db->where('cat_id', $cat);       
                }

                    elseif ((!empty($keyword) AND (!empty($city))) OR (!($cat))) {
       
                  $this->db->where('city', $city);
                   // $this->db->or_where('cat_id', $cat);
$searchterm = explode(' ',$keyword);
 $this->db->group_start();
 foreach ($searchterm as $keyword1) {
 
         $this->db->like('first_name', $keyword1)
                     ->or_like('last_name', $keyword1)
                     ->or_like('type', $keyword1);
                   }  
                    $this->db->group_end();         
                 
                    // $this->db->or_where('city', $city);
                
                }
                  // $this->db->or_where('cat_id', $cat);
                   $query  =   $this->db->get('cv_contact_info');
        $data['users'] =  $query->result_array();
//    if ($query = $this->user->search_awein($searchterm))
//    {
//        $search['searches'] = $query;
//    }
// $data['users'] = $search;
         print_r($data['users']);
        die();
      
        $this->load->view('site/list',$data);

}


function search_sidebar(){
     $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
              $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
    $data["categories"] = $this->Crud_model->get_data('tbl_cat');
    $data["cities"] = $this->Crud_model->get_data('tbl_city');
  $city    =   $this->input->post('city_id');
   $cat    =   $this->input->post('cat_id');
    $type    =   $this->input->post('cb');
    // print_r($city);
    // die();
        if ((!empty($type)) AND ((!empty($city))) AND (!empty($cat))) {
           $data["users"] = $this->user->searchone($city, $cat, $type);
    }
      elseif ((!isset($type) AND (!isset($city))) AND (!empty($cat))) {
             $data["users"] = $this->user->searchtwo($cat);
                }  
                elseif ((!isset($type) AND (!isset($cat))) AND (!empty($city))) {
                      $data["users"] = $this->user->searchthree($city);
                }   
                    elseif ((!isset($cat) AND (!isset($city))) AND (!empty($type))) {
                          $data["users"] = $this->user->searchfour($type);
                }  
                    elseif ((!empty($cat) AND (!empty($city))) OR (!($type))) {
                      $data["users"] = $this->user->searchfive($cat, $city);
                 
                  }
                      elseif ((!empty($cat) AND (!empty($type))) OR (!($city))) {
                      $data["users"] = $this->user->searchsix($cat, $type);
                 
                  }
                      elseif ((!empty($type) AND (!empty($city))) OR (!($cat))) {
                      $data["users"] = $this->user->searchseven($type, $city);
                 
                  }
                if(empty($data["users"])){
                   $query  =   $this->db->join('tbl_city','cv_contact_info.city=tbl_city.city_id', 'left')
                                        ->get('cv_contact_info');
        $data['users'] =  $query->result_array();
        $data['message'] = "No Search Found";
                }
        // $query  =   $this->db->get('cv_contact_info');
        // $data['users'] =  $query->result_array();
        // print_r($data['users']);
        // die();
      
        $this->load->view('site/list',$data);

}



function findaprofile(){
   $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
              $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
    $data["categories"] = $this->Crud_model->get_data('tbl_cat');
    $data["cities"] = $this->Crud_model->get_data('tbl_city');
    $data["skills"] = $this->Crud_model->get_data('tbl_skill');
  $config = [
            'base_url' => base_url('users/findaprofile'),
            'per_page' => 10,
            'total_rows' => $this->user->num_rows(),
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
        $data['users'] = $this->user->seekerlist($config['per_page'], $this->uri->segment(3)); // list of seeker
        $this->load->view('site/list', $data);
}


function profileviewcat($id){
   $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
              $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
    $data["categories"] = $this->Crud_model->get_data('tbl_cat');
    $data["cities"] = $this->Crud_model->get_data('tbl_city');
    $data["skills"] = $this->Crud_model->get_data('tbl_skill');
  $config = [
            'base_url' => base_url('users/profileviewcat'),
            'per_page' => 10,
            'total_rows' => $this->user->num_rowscat($id),
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
        $this->pagination->initialize($config); 
        $data['users'] = $this->user->seekerlistcat($id, $config['per_page'], $this->uri->segment(4)); 


  // $query = $this->db->select('users.*, cv_contact_info.*, tbl_cat.*')
  //               ->from('users')
  //               ->where('users.verify', 1)
  //               ->where('users.method', 'normal')
  //               ->where('cv_contact_info.cat_id', $id)
  //               ->join('cv_contact_info','cv_contact_info.user_id=users.id', 'left')
  //               ->join('tbl_cat','cv_contact_info.cat_id=tbl_cat.cat_id', 'left')
  //               ->limit($limit,$offset)
  //               ->get();

  //       $data['users'] =  $query->result_array();


        // print_r($data['users']);
        // die();
        $this->load->view('site/list', $data);
}



function profileviewcity($id){
   $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
              $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
    $data["categories"] = $this->Crud_model->get_data('tbl_cat');
    $data["cities"] = $this->Crud_model->get_data('tbl_city');
    $data["skills"] = $this->Crud_model->get_data('tbl_skill');
  $config = [
            'base_url' => base_url('users/profileviewcity'),
            'per_page' => 10,
            'total_rows' => $this->user->num_rowscity($id),
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
        $this->pagination->initialize($config); 
        $data['users'] = $this->user->seekerlistcity($id, $config['per_page'], $this->uri->segment(4)); 


  // $query = $this->db->select('users.*, cv_contact_info.*, tbl_cat.*')
  //               ->from('users')
  //               ->where('users.verify', 1)
  //               ->where('users.method', 'normal')
  //               ->where('cv_contact_info.cat_id', $id)
  //               ->join('cv_contact_info','cv_contact_info.user_id=users.id', 'left')
  //               ->join('tbl_cat','cv_contact_info.cat_id=tbl_cat.cat_id', 'left')
  //               ->limit($limit,$offset)
  //               ->get();

  //       $data['users'] =  $query->result_array();


        // print_r($data['users']);
        // die();
        $this->load->view('site/list', $data);
}




function profilesaved(){
    $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
              $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
  
  $config = [
            'base_url' => base_url('users/profilesaved'),
            'per_page' => 10,
            'total_rows' => $this->user->num_rows(),
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
        $data['users'] = $this->user->savedlist($config['per_page'], $this->uri->segment(3)); // list of seeker
        // print_r($data['users']);
        // die();
        $this->load->view('site/saved_profiles', $data);
}





public function search_list(){
    $dat=$this->input->post();
    $page_data["users"] = '';
      $config = [
            'base_url' => base_url('users/search_list'),
            'per_page' => 10,
            'total_rows' => $this->user->num_rows(),
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
        $this->pagination->initialize($config); 
   if($dat['keyword'] && $dat['cat_id'] != '11'  && $dat['city_id'] != '11' ){
    $page_data["users"]=$this->user->search_list($config['per_page'], $this->uri->segment(3), $dat);
    }
    if($dat['cat_id'] != '11' && $dat['city_id'] != '11'){
    $page_data["users"]=$this->user->search_list($config['per_page'], $this->uri->segment(3), $dat);
    }
    if($dat['keyword'] && $dat['cat_id'] != '11'  && $dat['city_id'] == '11'){
        $page_data["users"]=$this->Crud_model->search_home_basic('jobs_id', 'desc', 'tbl_job', 'tbl_company' ,$config_base_ulr, $per_page, $dat);
    }
    if($dat['keyword'] && $dat['cat_id'] == '11' &&  $dat['city_id'] == '11'){
        $page_data["users"]=$this->Crud_model->search_home_basic1('jobs_id', 'desc', 'tbl_job', 'tbl_company' ,$config_base_ulr, $per_page, $dat);
    }
    if($dat['keyword'] && $dat['cat_id'] == '11'  && $dat['city_id'] == '11'){
        $page_data["users"]=$this->Crud_model->search_home_basic2('jobs_id', 'desc', 'tbl_job', 'tbl_company' ,$config_base_ulr, $per_page, $dat);
    }
    if($dat['keyword'] == '' && $dat['cat_id'] == '11'  && $dat['city_id'] == '11'){
        $page_data["users"]=$this->Crud_model->search_home_basic3('jobs_id', 'desc', 'tbl_job', 'tbl_company' ,$config_base_ulr, $per_page, $dat);
    }
    if($dat['keyword'] && $dat['cat_id'] != '11'  && $dat['city_id'] == '11'){
        $page_data["users"]=$this->Crud_model->search_home_basic4('jobs_id', 'desc', 'tbl_job', 'tbl_company' ,$config_base_ulr, $per_page, $dat);
    }
    if($dat['keyword'] == '' && $dat['cat_id'] != '11'  && $dat['city_id'] == '11'){
        $page_data["users"]=$this->Crud_model->search_home_basic5('jobs_id', 'desc', 'tbl_job', 'tbl_company' ,$config_base_ulr, $per_page, $dat);
    }
    if($dat['keyword'] == '' && $dat['cat_id'] != '11'  && $dat['city_id'] == '11'){
        $page_data["users"]=$this->Crud_model->search_home_basic6('jobs_id', 'desc', 'tbl_job', 'tbl_company' ,$config_base_ulr, $per_page, $dat);
    }
    if($dat['keyword'] == '' && $dat['cat_id'] == '11'  && $dat['city_id'] == '11' ){
        $page_data["users"]=$this->Crud_model->search_home_basic7('jobs_id', 'desc', 'tbl_job', 'tbl_company' ,$config_base_ulr, $per_page, $dat);
    }

   print_r($page_data["users"]);
    die();

    if($page_data["users"] == ''){
        $page_data["links"] = '';
    }
    $page_data['page'] = "List";
    $this->load->view('site/list', $page_data);
}


  function addcompany()
  {
      if ($this->session->userdata('logged_recruiter') != 1)
            redirect(base_url().'site/login_emp', 'refresh');
 $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
              $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
    $this->load->view('site/companies', $data);
      
       
  }





  function single_company()
  {
    if ($this->session->userdata('logged_recruiter') != 1)
            redirect(base_url().'site/login', 'refresh');
             $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
              $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
    $user_id = $this->session->userdata('logged_id'); 
    $this->db->where('tbl_company.owner_id',$user_id);
    $this->db->order_by('tbl_company.comp_id', 'desc');
    $this->db->select('tbl_company.owner_id,tbl_company.comp_id,tbl_company.comp_name,tbl_company.group_name,tbl_company.head_name,tbl_company.head_hrdepartment,tbl_company.head_cnic,tbl_company.job_designation,tbl_company.industry,tbl_company.product_service,tbl_company.ownership,tbl_company.comp_address,tbl_company.comp_country,tbl_company.comp_city,tbl_company.description,tbl_company.email,tbl_company.contact_person,tbl_company.comp_url,tbl_company.phone_no,tbl_company.fax,tbl_company.no_employee,tbl_company.logo_url,tbl_company.status,users.first_name,users.last_name');
    $this->db->from('tbl_company', 'users');
    $this->db->join('users', 'users.id = tbl_company.owner_id');
    $data['users'] = $this->db->get()->result_array();
   
    
     $this->db->where('owner_id',$user_id);
     $data['company_count'] = $this->db->count_all_results('tbl_company');
     if($data['company_count'] < 1){
      redirect('users/addcompany');
     }
    $data['page_name'] = 'companies';
    $this->load->view('site/singlecompany', $data);


  }



    function single_company1($cid)
  {
    // if ($this->session->userdata('logged_recruiter') != 1)
    //         redirect(base_url().'site/login', 'refresh');
     $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
              $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
    $user_id = $this->session->userdata('logged_id'); 
    $this->db->where('tbl_company.comp_id',$cid);
    $this->db->order_by('tbl_company.comp_id', 'desc');
    $this->db->select('tbl_company.owner_id,tbl_company.comp_id,tbl_company.comp_name,tbl_company.group_name,tbl_company.head_name,tbl_company.head_hrdepartment,tbl_company.head_cnic,tbl_company.job_designation,tbl_company.industry,tbl_company.product_service,tbl_company.ownership,tbl_company.comp_address,tbl_company.comp_country,tbl_company.comp_city,tbl_company.description,tbl_company.email,tbl_company.contact_person,tbl_company.comp_url,tbl_company.phone_no,tbl_company.fax,tbl_company.no_employee,tbl_company.logo_url,tbl_company.status,users.first_name,users.last_name, users.picture_url');
    $this->db->from('tbl_company', 'users');
    $this->db->join('users', 'users.id = tbl_company.owner_id');
    $data['users'] = $this->db->get()->result_array();
    // print_r($data['users']);
    // die();
  
    
    
    //  $data['company_count'] = $this->db->count_all_results('tbl_company');
    //  if($data['company_count'] < 1){
    //   redirect('users/addcompany');
    //  }
    // $data['page_name'] = 'companies';
    $this->load->view('site/singlecompany', $data);


  }






























function contact_us($param1 = '')
{
   
    if($param1 == 'send_email')
    {
        //echo '123';
        $form_from_email = $this->input->post('from_emial');
        //echo $message = $this->input->post('message');
       $name = $this->input->post('name');
       
       // die();
        
          $from_email = "info@toppakistanis.com"; 
         //$to_email = 'noormuhammad112@gmail.com'; 
         $to_email = $this->input->post('toemial');
         $form_message = $this->input->post('message');
          $subject = $this->input->post('subject');
   //exit();
    
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
        

/*  $message = 'Dear User,<br><br> Thank you for registering at jobs360.com.pk. Your account is created and must be activated before you can use it. To activate the account verify email below:<br><br>
        <a  href="http://www.jobs360.com.pk/WebServices/email_verify/'.$to_email.'">Verify Email</a><br><br>Thanks';*/
        
        $message = '<div style="font-family:HelveticaNeue-Light,Arial,sans-serif;background-color:#eeeeee">
  <table align="left" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee">
    <tbody>
        <tr>
          <td>
                <table align="left" width="750px" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee" style="width:750px!important">
                <tbody>
                  <tr>
                      <td>
                      <table width="690" align="left" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee">
                            <tbody>
                              <tr>
                                    <td colspan="3" height="80" align="left" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee" style="padding:0;margin:0;font-size:0;line-height:0">
                                        <table width="690" align="left" border="0" cellspacing="0" cellpadding="0">
                                        <tbody>
                                          <tr>
                                              <td width="30"></td>
                                                <td align="left" valign="middle" style="padding:0;margin:0;font-size:0;line-height:0"><a href="http://toppakistanis.com/" target="_blank"><img src="http://toppakistanis.com/vendor/images/content/logo-pk.png" alt="TopPakistanis" ></a></td>
                                                <td width="30"></td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </td>
                          </tr>
                                <tr>
                                    <td colspan="3" align="left">
                                        <table width="630" align="left" border="0" cellspacing="0" cellpadding="0">
                                        <tbody>
                                          <tr>
                                              <td colspan="3" height="30"></td></tr>
                                              <tr><td colspan="5" align="left">
                                                    <p style="color:#404040;font-size:16px;line-height:24px;font-weight:lighter;padding:0;padding-left:30px;margin:0">From  '.$form_from_email.' / '.$name.',<br/>
                                                    Subject: '.$subject.', <br/>
                                                    Message: '.$form_message.'
                                                    </p>
                                                </td>
                                          </tr>
                                          
                                          <tr>
                                              <td colspan="3" height="30"></td>
                                          </tr>
                                      
                                  </tbody>
                                    </table>
                              </td>
                        </tr>
                        
                        </tr>
                                <tr>
                                    <td colspan="3" align="left">
                                        <table width="630" align="left" border="0" cellspacing="0" cellpadding="0">
                                        <tbody>
                                          <tr>
                                              <td colspan="3" height="30"></td></tr>
                                              <tr><td colspan="5" align="left">
                                                    <p style="color:#404040;font-size:16px;line-height:24px;font-weight:lighter;padding:0;padding-left:30px;margin:0">From  '.$form_from_email.' / '.$name.',<br/>
                                                    Subject: '.$subject.', <br/>
                                                    Message: '.$form_message.'
                                                    </p>
                                                </td>
                                          </tr>
                                          
                                          <tr>
                                              <td colspan="3" height="30"></td>
                                          </tr>
                                      
                                  </tbody>
                                    </table>
                              </td>
                        </tr>
                            
                            
                           
                        
                      </td>
                  </tr>
                </tbody>
                </table>




                <table align="center" width="750px" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee" style="width:750px!important">
                            <tbody>
                              <tr>
                                  <td>
                                        <table width="630" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee">
                                        <tbody>
                                          <tr><td colspan="2" height="30"></td></tr>
                                            <tr>
                                              <td width="360" valign="top">
                                                  <div style="color:#a3a3a3;font-size:12px;line-height:12px;padding:0;margin:0">&copy; 2019 JOBS360.</div>
                                                  <div style="line-height:5px;padding:0;margin:0">&nbsp;</div>
                                            </td>
                                                <td align="right" valign="top">
                                                  <span style="line-height:20px;font-size:10px"><a href="https://www.facebook.com/" target="_blank"><img src="http://i.imgbox.com/BggPYqAh.png" alt="fb"></a>&nbsp;</span>
                                                    <span style="line-height:20px;font-size:10px"><a href="https://twitter.com/" target="_blank"><img src="http://i.imgbox.com/j3NsGLak.png" alt="twit"></a>&nbsp;</span>
                                                    <span style="line-height:20px;font-size:10px"><a href="https://google.com/" target="_blank"><img src="http://i.imgbox.com/wFyxXQyf.png" alt="g"></a>&nbsp;</span>
                                                </td>
                                            </tr>
                                            <tr><td colspan="2" height="5"></td></tr>
                                           
                                        </tbody>
                                        </table>
                                    </td>
                          </tr>
                            </tbody>
                            </table>




            </td>
    </tr>
  </tbody>
    </table>
</div>';

         $this->email->from($from_email, 'TopPakistanis'); 
         $this->email->to($to_email);
         $this->email->subject('contact_us'); 
         $this->email->message($message); 

    
         //Send mail 
         if($this->email->send())
         {
          $this->session->set_flashdata('flash_message', 'Thanks for the contact! Your message has been send successfully');
                         
       // redirect(base_url().'users/contact_us', 'refresh');
             
                
         } else {
         
               //  redirect(base_url().'users/contact_us', 'refresh');
             
                $this->session->set_flashdata('fail', 'please try again later');
         
         }
    }
     $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
              $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
  $this->load->view('site/contact_us.php', $data);
}
























function error_page()
{
     $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
              $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
  $this->load->view('site/404page.php', $data);
}



  
  function companylogo(){
      $user_id=$this->session->userdata('logged_id');
            $user_count = $this->Crud_model->get_count();
            //print_r($user_count);
            $user_count = $user_count + 1;
            $cat_iname = $_FILES["picture_url"]["name"] ;
			$config['upload_path'] = './uploads/user_image/';
            $config['allowed_types'] = '*';
			$config['max_size']    = '102400';
			$config['file_name'] = $cat_iname;
			$this->upload->initialize($config);
			//print_r($cat_iname);
        	$this->load->library('upload',$config); 
			if($this->upload->do_upload('picture_url'))
			{	
				$test=$this->upload->data();
				$picture=$test['orig_name'];
				$picture_url=base_url().'uploads/user_image/'.$picture;
				$this->Crud_model->update_data2($user_id, $picture_url);
				$this->session->set_flashdata('flash_message' , 'Profile image updated successfully');
                redirect(base_url()."users/profile", 'refresh');
			}else{
                $error = array('error' => $this->upload->display_errors());
			}

        }  
        
        

        
     function checkbox(){
    
   $data['id']=$this->session->userdata('logged_id');
    $skill_id = $this->input->post('skills');
     foreach($skill_id as $food) {
    $data= array(
        'id' => $this->session->userdata('logged_id'),
        'skill_id' => $food
    );

    // $data['skill_id']=array(
    // 'skill_id'=>json_encode(implode(",", $skill_id)),);
    $this->db->insert('tbl_emp_skills', $data);

    }
     }    




  function delete_save_job($id){


 $this->db->delete('tbl_save_jobs', array('job_id' => $id)); 
    $this->session->set_flashdata('flash_message', 'Saved Profile is successfully deleted');


 redirect('users/profilesaved');


  }


  function save($id,$page){

    if ($this->session->userdata('logged_recruiter') != 1)
            redirect(base_url().'site/login', 'refresh');
$submit= $this->user->save_job($id);
    if($submit)
    {
    $this->session->set_flashdata('flash_message', 'Profile is successfully saved ');
       //$this->session->set_flashdata('success','your vote submitted successfully');

}else
{   

  $this->session->set_flashdata('fail', 'You already save this Profile ');
  }
if($page=='dashboard'){
 redirect('users/userdashboard');

}
else{
  redirect('site/');
  // redirect('users/job_detail/'.$id);
}


    
  }



/* preview cv*/
 function preview($param1 = '',$user_id = ''){
  //echo $user_id;
  if($this->session->userdata('logged_recruiter') != 1)
  redirect(base_url().'site/login', 'refresh');
  //get_data_user_id($tablename, $user_id_column, $user_id)
$current_data = date('Y-m-d');
//$current_data;
$jobs_id = $param1;
$emp_id = $this->session->userdata('logged_id');

$count = $this->db->where('id',$emp_id);
$count = $this->db->count_all_results('users');

    
$this->db->where('jobs_id', $jobs_id);
$this->db->where('active/deactive', 1);
$this->db->where('job_status', 1);
$count2 = $this->db->count_all_results('tbl_job');
  
  //payment checks
  $job_pstatus_qry = $this->user->payment_jobstatus($jobs_id);
  $job_pstatus = $job_pstatus_qry[0]['job_pstatus'];
  if ($job_pstatus == 0) {
      // payment check 
     $payment_count = $this->user->payment_employerjob($emp_id);
      
     $package_name = $payment_count[0]['package_name'];
     //basic || group of five
     if ($package_name == 'basic' || $package_name == 'group_of_five') {
        $credits = $payment_count[0]['credits'];
        $credits_status = $payment_count[0]['credits_status'];
        $payment_confirmation = $payment_count[0]['payment_confirmation'];
          if ($credits > 0 && $credits_status == 'valid') {
             if ($payment_confirmation == 0) {
               $page_data['payment_status'] = 'pending';
             } elseif ($payment_confirmation == 1) {
                //update_data($tablename, $attr, $data, $id)
                $credit_id = $payment_count[0]['id'];
                echo $updated_credits = $credits-1;
                $data_credit = array(
                  'credits' => $updated_credits
                  );
               $payment_id = $this->crud_model->update_data('payments','id',$data_credit,$credit_id);
//get_data_user_id($tablename, $user_id_column, $user_id)
               echo $payment_id;
               $p_id = $payment_count[0]['id'];
               $payment_u_f = $this->user->payment_u_f($p_id);
               $updated_credis_fetch = $payment_u_f[0]['credits'];

                $data_ujob = array(
                  'job_pstatus' => 1
                  );
               $jobs_updated_id = $this->crud_model->update_data('tbl_job','jobs_id',$data_ujob,$jobs_id);
               
               $payment_id;
               if ($updated_credis_fetch == 0) {
                $data_credits_status = array(
                  'credits_status' => 'expired'
                  );
                
                $this->crud_model->update_data('payments','id',$data_credits_status,$p_id);
                  $this->session->set_flashdata('flash_message','Your credits has finished');  
                }

                $this->session->set_flashdata('flash_message','Thank you for using our services.');

               redirect($this->uri->uri_string());
             }
          } else {
            $page_data['payment_status'] = 'fail';
          }
     // **** basic || group of five

          //  monthly || yearly
     } elseif ($package_name == 'monthly' || $package_name == 'yearly') {
      
       $expiry_date = $payment_count[0]['expiry_date'];
       
        $credits_status = $payment_count[0]['credits_status'];
        $payment_confirmation = $payment_count[0]['payment_confirmation'];

          if ($expiry_date >= $current_data && $credits_status == 'valid') {
           
             if ($payment_confirmation == 0) {
               $page_data['payment_status'] = 'pending';
             } elseif ($payment_confirmation == 1) {
               
                //update_data($tablename, $attr, $data, $id)
                
                
                
//get_data_user_id($tablename, $user_id_column, $user_id)
               
               $updated_credis_fetch = $payment_u_f[0]['credits'];

                $data_ujob = array(
                  'job_pstatus' => 1
                  );
               $jobs_updated_id = $this->crud_model->update_data('tbl_job','jobs_id',$data_ujob,$jobs_id);

                $this->session->set_flashdata('flash_message','Thank you for using our services.');
               
               redirect($this->uri->uri_string());
             }
          } else {
           $page_data['payment_status'] = 'fail';
          }
     // **** early || monthly
       }
  } elseif ($job_pstatus == 1) {
    $page_data['payment_status'] = 'success';
  }
/*  echo "<pre>";
  print_r($job_pstatus_qry);
  echo "</pre>";

 
    // payments checks ends
die();*/

 

  $page_data['contact_info'] = $this->user->contact_info($user_id);
  $page_data['education'] = $this->crud_model->get_data_user_id('cv_education','user_id',$user_id);
  $page_data['skills'] = $this->crud_model->get_data_user_id('cv_skill','user_id',$user_id);
  $page_data['exp'] = $this->crud_model->get_data_user_id('cv_workexperience','user_id',$user_id);

if ($count > 0 && $count2 > 0) {
  $this->load->view('site/preview1' , $page_data);
} else {
  redirect(base_url('users/error_page'),'refresh');
}
  
  }
  /* preview cv ends*/


//shortlist and reject



	function category(){
	 $page_data['edit_data'] = $this->db->get_where('tbl_cat')->result_array();
		//print_r($data);
		$this->load->view('site/jobseeker/category', $page_data);
	}
	




   function view_companies()
  {
      	 
    if ($this->session->userdata('logged_recruiter') != 1)
            redirect(base_url().'site/login', 'refresh');
            $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
              $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
    $user_id = $this->session->userdata('logged_id');
    // $data = $this->user->check_employerprofile();
    // print_r($data);
    // die();
      if($this->user->check_employerprofile() == 0)

      {
            $this->session->set_flashdata('fail' , 'Please complete your profile first');
          redirect(base_url()."users/add_personalinfo/load_profile", 'refresh');
        
   
      }
   elseif($this->user->check_employerprofile() == 1){
    $this->db->where('tbl_company.owner_id',$user_id);
    $this->db->order_by('tbl_company.comp_id', 'desc');
    $this->db->select('tbl_company.owner_id,tbl_company.comp_id,tbl_company.comp_name,tbl_company.group_name,tbl_company.head_name,tbl_company.head_hrdepartment,tbl_company.head_cnic,tbl_company.job_designation,tbl_company.industry,tbl_company.product_service,tbl_company.ownership,tbl_company.comp_address,tbl_company.comp_country,tbl_company.comp_city,tbl_company.description,tbl_company.email,tbl_company.contact_person,tbl_company.comp_url,tbl_company.phone_no,tbl_company.fax,tbl_company.no_employee,tbl_company.logo_url,tbl_company.status,users.first_name,users.last_name');
    $this->db->from('tbl_company', 'users');
    $this->db->join('users', 'users.id = tbl_company.owner_id');
    $data['users'] = $this->db->get()->result_array();
   
    
     $this->db->where('owner_id',$user_id);
     $data['company_count'] = $this->db->count_all_results('tbl_company');
     if($data['company_count'] < 1){
      redirect('users/addcompany');
     }
      
    /*echo "<pre>";
    print_r($data);
    echo "</pre>";*/
    // 
  //   $count_result = $this->user->get_user_by_email($email); 
  // $data['count'] = count($count_result);
    $data['page_name'] = 'companies';
    $this->load->view('site/mycompanies', $data);
}

  }





  function addcompanies($param1 = '', $param2='' , $param3 = '')
  {
      
    if ($this->session->userdata('logged_recruiter') != 1)
            redirect(base_url().'site/login', 'refresh');
            	 $data["fcategories"] = $this->Crud_model->get_footer_data('tbl_cat');
              $data["fcities"] = $this->Crud_model->get_footer_data('tbl_city');
          if($param1 == 'company_status')
          {
            $data = array(
              'status'=>1,
              );
            $updated_id = $this->crud_model->update_data('tbl_company','comp_id',$data,$param2);
            $this->session->set_flashdata('flash_message' , 'Company Activated successfully');
            redirect(base_url().'users/view_companies', 'refresh');
          }
          if($param1 == 'company_status1')
          {
            $data = array(
              'status'=>0,
              );
            $updated_id = $this->crud_model->update_data('tbl_company','comp_id',$data,$param2);
            $this->session->set_flashdata('flash_message' , 'Company Deactivated successfully');
            redirect(base_url().'users/view_companies', 'refresh');
          }
          $user_id = $this->session->userdata('logged_id');
          if($param1=='edit_comp'){

          $data['edit_company'] = $this->crud_model->get_data_user_id('tbl_company','comp_id', $param2);
          $this->load->view('site/edit_company', $data);
        }

        if($param1 == 'update_comp')
        {
          $user_count = $this->Crud_model->get_count_company();
            $user_count = $user_count + 1;
            $config = array(
            'upload_path'=> './uploads/company_logo/',
              'allowed_types' => "gif|jpg|png",
              'overwrite' => TRUE,
              'file_name' => 'company_'.$user_count,
              'max_size' => "3072", 
              );
                 $this->upload->initialize($config);
                 $this->load->library('upload', $config);
            if(!$this->upload->do_upload())
            {
              $error = array('error' => $this->upload->display_errors());
              $this->session->set_flashdata('fail', $this->upload->display_errors());   

            }


          $data = array(
            'owner_id' => $user_id,
            'comp_name' => $this->input->post('comp_title'),
            'group_name' => $this->input->post('group_name'),
            'head_name' => $this->input->post('ceo'),
            'head_hrdepartment' => $this->input->post('head_hr'),
            'head_cnic' => $this->input->post('head_cnic'),
            'job_designation' => $this->input->post('Job_designation'),
            'industry' => $this->input->post('industry'),
            'product_service' => $this->input->post('product'),
            'ownership' => $this->input->post('ownership_type'),
            'comp_address' => $this->input->post('comp_address'),
            'comp_country' => $this->input->post('country_name'),
            'comp_city' => $this->input->post('city'),
            'description' => $this->input->post('comp_description'),
            'email' => $this->input->post('email'),
            'contact_person' => $this->input->post('contact_person'),
            'comp_url' => $this->input->post('comp_url'),
            'phone_no' => $this->input->post('phone_no'),
            'fax' => $this->input->post('fax'),
            'check_confidential' => $this->input->post('check_confidential'),
            'no_employee' => $this->input->post('no_employee'),
            );
          if (isset($_FILES['userfile']['name']) && !empty($_FILES['userfile']['name'])) {
                $data['logo_url'] = base_url() . "uploads/company_logo/" .$this->upload->data('file_name');
                //print_r($data);
                 
            }
              $id = $this->input->post('comp_id');
            $updated_id = $this->crud_model->update_data('tbl_company','comp_id',$data,$id);
            $this->session->set_flashdata('flash_message' , 'company Profile updated successfully');
            redirect(base_url().'users/view_companies', 'refresh');
        }
        if ($param1 == 'add_new') {
          $user_count = $this->Crud_model->get_count_company();
            //print_r($user_count);
            $user_count = $user_count + 1;
            $config = array(
            'upload_path'=> './uploads/company_logo/',
              'allowed_types' => "gif|jpg|png",
              'overwrite' => TRUE,
              'file_name' => 'company_'.$user_count,
              'max_size' => "3072", //Can be set to particular file size,here it is 2 MB(2048 Kb)
              );
                 $this->upload->initialize($config);
                 $this->load->library('upload', $config);
            if(!$this->upload->do_upload())
            {
              $error = array('error' => $this->upload->display_errors());
              $this->session->set_flashdata('fail', $this->upload->display_errors());   

            }


          $comp_date = ("Y-m-d");
          $data = array(
            'owner_id' => $user_id,
            'comp_name' => $this->input->post('comp_title'),
            'group_name' => $this->input->post('group_name'),
            'head_name' => $this->input->post('ceo'),
            'head_hrdepartment' => $this->input->post('head_hr'),
            'head_cnic' => $this->input->post('head_cnic'),
            'job_designation' => $this->input->post('Job_designation'),
            'industry' => $this->input->post('industry'),
            'product_service' => $this->input->post('product'),
            'ownership' => $this->input->post('ownership_type'),
            'comp_address' => $this->input->post('comp_address'),
            'comp_country' => $this->input->post('country_name'),
            'comp_city' => $this->input->post('city'),
            'description' => $this->input->post('comp_description'),
            'email' => $this->input->post('email'),
            'contact_person' => $this->input->post('contact_person'),
            'comp_url' => $this->input->post('comp_url'),
            'phone_no' => $this->input->post('phone_no'),
             'check_confidential' => $this->input->post('check_confidential'),
            'fax' => $this->input->post('fax'),
            
            'no_employee' => $this->input->post('no_employee'),
            );

          if (isset($_FILES['userfile']['name']) && !empty($_FILES['userfile']['name'])) {
                $data['logo_url'] = base_url() . "uploads/company_logo/" .$this->upload->data('file_name');
                //print_r($data);
                 
            }

          $insert_id = $this->crud_model->create_data('tbl_company', $data);
            $this->session->set_flashdata('flash_message' , 'Company_added_successfully');
            redirect(base_url().'users/view_companies', 'refresh');
  }
}








  
  
  
  
  
  function job_post($param1 = '', $param2 = '', $param3 = ''){
    
    if ($this->session->userdata('logged_recruiter') != 1)
            redirect(base_url().'site/login_emp', 'refresh');

           $user_id = $this->session->userdata('logged_id');
$this->db->where('owner_id',$user_id);
     $data['company_count1'] = $this->db->count_all_results('tbl_company');
     if($data['company_count1'] < 1){
      redirect('users/addcompany');
     }


        if ($param1 == 'create') {
            
          $user_id = $this->session->userdata('logged_id');
          
          $email_qry = $this->user->email_qry($user_id);
          
         $emp_email = $email_qry[0]['email'];
          //die();
            
             $salleryvalue = $this->input->post('job_sallery');
             $salleryarray = explode(",",$salleryvalue);
             $min_sal = $salleryarray[0];
             $max_sal = $salleryarray[1];
            
          if(!empty($this->input->post('benefit_id')))
          {
        $selectdvalue = array();
        $i = 0;
        foreach($this->input->post('benefit_id') as $selected) {
          $selectdvalue[$i]=$selected;
          $i++;
        }
        $benefit_id = implode(",",$selectdvalue); 
      }else
      {
        $benefit_id = "NULL";
      }
        if(!empty($this->input->post('skill_id')))
        {
        $skill_selected = array();
        $j=0;
        
        foreach ($this->input->post('skill_id') as $selected) {
          $skill_selected[$j]= $selected;
          $j++;
        }
        $skill_id = implode(",", $skill_selected);
      }else
      {
        $skill_id = "NULL";
      }
      

        $job_sdate = date("Y-m-d");
            $data = array(
              'job_title' => $this->input->post('job_title'),
              'user_id' => $user_id,
              'clevel_id' => $this->input->post('clevel_id'),
              'comp_id' => $this->input->post('comp_id'),
              'cat_id' => $this->input->post('cat_id'),
               'city_id' => $this->input->post('city_id'),
              'subcat_id' => $this->input->post('subcat_id'),
              'skill_id' => $skill_id,
              'job_emptype' => $this->input->post('job_emptype'),
              'job_vacancies' => $this->input->post('job_vacancies'),
              'job_sdate' => $job_sdate,
              'job_edate' => $this->input->post('job_edate'),
              'job_explevel' => $this->input->post('job_explevel'),
              'job_edulevel' => $this->input->post('job_edulevel'),
              'job_edatestatus' => $this->input->post('job_edatestatus'),
              'job_shift' => $this->input->post('job_shift'),
              'job_gender'=> $this->input->post('job_gender'),
              'job_age' => $this->input->post('job_age'),
              'checkbox_value' => $this->input->post('check_val'),
              'job_salery_min' => $min_sal,
              'job_salery_max' => $max_sal,
              'job_sallery_currency' => $this->input->post('job_sallery_currency'),
              'benefit_id' => $benefit_id,
              'filter_gender'=> $this->input->post('pre_gender'),
              'filter_experience'=> $this->input->post('pre_exp'),
              'filter_age'=> $this->input->post('pre_age'),
              'filter_city'=> $this->input->post('pre_city'),
              'job_description' => $this->input->post('job_description'),
              'preffered_skills' => $this->input->post('preffered_skills'),
              'preferred_degree' => $this->input->post('preferred_degree'),
              'job_location' => $this->input->post('job_location'),
              );
            
            //exit();
            
            $insert_id = $this->crud_model->create_data('tbl_job', $data);
           
            // emial send code
            
             $from_email = "info@jobs360.com.pk"; 
             $to_email = $emp_email;
             
            //config email settings
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://b3.core.hostnext.net';
            $config['smtp_port'] = '465';
            $config['smtp_user'] ='info@jobs360.com.pk';
            $config['smtp_pass'] = 'info_jobs_360';  //sender's password
            $config['mailtype'] = 'html';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = 'TRUE';
            $config['newline'] = "\r\n"; 
            
            $this->load->library('email', $config);
            $this->email->initialize($config);
            
            $message = '<div style="font-family:HelveticaNeue-Light,Arial,sans-serif;background-color:#eeeeee">
          <table align="left" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee">
            <tbody>
                <tr>
                  <td>
                        <table align="left" width="750px" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee" style="width:750px!important">
                        <tbody>
                          <tr>
                              <td>
                              <table width="690" align="left" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee">
                                    <tbody>
                                      <tr>
                                            <td colspan="3" height="80" align="left" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee" style="padding:0;margin:0;font-size:0;line-height:0">
                                                <table width="690" align="left" border="0" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                  <tr>
                                                      <td width="30"></td>
                                                        <td align="left" valign="middle" style="padding:0;margin:0;font-size:0;line-height:0"><a href="http://www.jobs360.com.pk/" target="_blank"><img src="http://www.jobs360.com.pk/img/home/logofooter.png" alt="job360" ></a></td>
                                                        <td width="30"></td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                            </td>
                                  </tr>
                                        <tr>
                                            <td colspan="3" align="left">
                                                <table width="630" align="left" border="0" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                  <tr>
                                                      <td colspan="3" height="30"></td></tr>
                                                      <tr><td colspan="5" align="left">
                                                            <p style="color:#404040;font-size:16px;line-height:24px;font-weight:lighter;padding:0;padding-left:30px;margin:0">From  '.$from_email.',<br/>
                                                            Message: Message here: Your Job has been successfully posted !!
                                                            </p>
                                                        </td>
                                                  </tr>
                                                  
                                                  <tr>
                                                      <td colspan="3" height="30"></td>
                                                  </tr>
                                              
                                          </tbody>
                                            </table>
                                      </td>
                                </tr>
                                    
                                    
                                   
                                
                              </td>
                          </tr>
                        </tbody>
                        </table>
        
        
        
        
                        <table align="center" width="750px" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee" style="width:750px!important">
                                    <tbody>
                                      <tr>
                                          <td>
                                                <table width="630" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee">
                                                <tbody>
                                                  <tr><td colspan="2" height="30"></td></tr>
                                                    <tr>
                                                      <td width="360" valign="top">
                                                          <div style="color:#a3a3a3;font-size:12px;line-height:12px;padding:0;margin:0">&copy; 2019 JOBS360.</div>
                                                          <div style="line-height:5px;padding:0;margin:0">&nbsp;</div>
                                                    </td>
                                                        <td align="right" valign="top">
                                                          <span style="line-height:20px;font-size:10px"><a href="https://www.facebook.com/" target="_blank"><img src="http://i.imgbox.com/BggPYqAh.png" alt="fb"></a>&nbsp;</span>
                                                            <span style="line-height:20px;font-size:10px"><a href="https://twitter.com/" target="_blank"><img src="http://i.imgbox.com/j3NsGLak.png" alt="twit"></a>&nbsp;</span>
                                                            <span style="line-height:20px;font-size:10px"><a href="https://plus.google.com/" target="_blank"><img src="http://i.imgbox.com/wFyxXQyf.png" alt="g"></a>&nbsp;</span>
                                                        </td>
                                                    </tr>
                                                    <tr><td colspan="2" height="5"></td></tr>
                                                   
                                                </tbody>
                                                </table>
                                            </td>
                                  </tr>
                                    </tbody>
                                    </table>
        
        
        
        
                    </td>
            </tr>
          </tbody>
            </table>
        </div>';
        
        $this->email->from($from_email, 'Jobs360'); 
         $this->email->to($to_email);
         $this->email->subject('Job Post'); 
         $this->email->message($message);
         $this->email->send();
         // email send ends
               $this->session->set_flashdata('flash_message' , 'job_added_successfully');
          
            redirect(base_url().'users/jobs', 'refresh');
          //exit();
        }
        if ($param1 == 'update') {
          $data['category'] = $this->crud_model->get_data('tbl_cat');
          $data['subcategory'] = $this->crud_model->get_data('tbl_subcat');
          $data['clevel'] = $this->crud_model->get_data('tbl_clevel');
           $data['skill'] = $this->crud_model->get_data('tbl_skill');
          $data['benefit'] = $this->crud_model->get_data('tbl_benefit');
            $data['city'] = $this->crud_model->get_data('tbl_city');
          $data['page_name'] = 'job_post';
          $jobs_id = $param2;
          $data['edit_data'] = $this->crud_model->get_data_user_id('tbl_job','jobs_id', $jobs_id);
          $this->load->view('site/job_update', $data);
     }if ($param1 == 'modify') {
        $selectdvalue=array();
        $i=0;
        foreach($this->input->post('benefit_id') as $selected) {
          $selectdvalue[$i]=$selected;
          $i++;
        }
        $benefit_id = implode(",",$selectdvalue);
             
          $data = array(
             
              'job_title' => $this->input->post('job_title'),
              'clevel_id' => $this->input->post('clevel_id'),
              'cat_id' => $this->input->post('cat_id'),
              'city_id' => $this->input->post('city_id'),
              'comp_id' => $this->input->post('comp_id'),
              'subcat_id' => $this->input->post('subcat_id'),
              'job_emptype' => $this->input->post('job_emptype'),
              'job_vacancies' => $this->input->post('job_vacancies'),
              'job_edate' => $this->input->post('job_edate'),
              'job_explevel' => $this->input->post('job_explevel'),
              'job_edulevel' => $this->input->post('job_edulevel'),
              'job_edatestatus' => $this->input->post('job_edatestatus'),
              'job_shift' => $this->input->post('job_shift'),
              'checkbox_value' => $this->input->post('sal_chk'),
              'job_salery_min' => $this->input->post('job_salery_min'),
              'job_salery_max' => $this->input->post('job_salery_max'),
              'job_sallery_currency' => $this->input->post('job_sallery_currency'),
              'benefit_id' => $benefit_id,
              'filter_gender'=> $this->input->post('pre_gender'),
              'filter_experience'=> $this->input->post('pre_exp'),
              'filter_age'=> $this->input->post('pre_age'),
              'filter_city'=> $this->input->post('pre_city'),
              'job_description' => $this->input->post('job_description'),
              'preffered_skills' => $this->input->post('preffered_skills'),
              'job_age' => $this->input->post('job_age'),
              'job_gender' => $this->input->post('job_gender'),
              'job_location' => $this->input->post('job_location')
        );
      
    // print_r($data);
    // die();
      $id = $this->input->post('edit_id');
      //print_r($id);
      
      $inserted_id = $this->crud_model->update_data('tbl_job','jobs_id',$data,$id);
            $this->session->set_flashdata('flash_message' , 'job_updated_successfully');
            redirect(base_url().'users/jobs', 'refresh');

      
    }
        
    if($param1 == 'job_status'){
      $data = array(
      'active/deactive' => 0);
      $inserted = $this->crud_model->update_data('tbl_job','jobs_id',$data, $param2);
      // print_r($inserted);
      // die();
            $this->session->set_flashdata('flash_message' , 'Job Deactivated Successfully');
            redirect(base_url().'users/jobs', 'refresh');
    }
    /*if($parma1 = "addcompany"){
      $data = array(
        ''=>
        );
    }*/
     else {
    

// Model TO view. $data in line number 156 is important to pass
        $data['category'] = $this->crud_model->get_data('tbl_cat');
        $data['clevel'] = $this->crud_model->get_data('tbl_clevel');
        $data['benefit'] = $this->crud_model->get_data('tbl_benefit');
         $data['city'] = $this->crud_model->get_data('tbl_city');
        $data['page_name'] = 'job_post';
         $user_id = $this->session->userdata('logged_id');
        $data['cid'] = $this->user->getcompany($user_id);
        // print_r($data['cid']);
        // die();
     $this->load->view('site/job_post', $data);
  }
}

  
 


   function selected_catgory(){
        $cat['cat_id']=$this->input->post('category');
        $cat['user_id']=$this->session->userdata("logged_id");
        $data=$this->db->get_where('tbl_user_cat' , array('user_id' => $this->session->userdata("logged_id")))->result_array();
        if(count($data)>0){
        $this->db->where('user_id',$this->session->userdata("logged_id"));
        $this->db->update('tbl_user_cat',$cat);
        echo "sucess";

        }else{
        $this->db->insert('tbl_user_cat',$cat);
        echo "sucess";
        }
    }


   function selected_subcatgory(){
      $cat['subcat_id']=$this->input->post('subcategory');
      $cat['user_id']=$this->session->userdata("logged_id");
      $data=$this->db->get_where('tbl_user_cat' , array('user_id' => $this->session->userdata("logged_id")))->result_array();
      if(count($data)>0){
      $this->db->where('user_id',$this->session->userdata("logged_id"));
      $this->db->update('tbl_user_cat',$cat);
      echo "sucess";

      }else{
      $this->db->insert('tbl_user_cat',$cat);
      echo "sucess";
      }
    }




function subctegory(){
$data['category']=$this->db->get_where('tbl_user_cat' , array('user_id' => $this->session->userdata("logged_id")))->result_array();
$this->load->view('site/jobseeker/subcategory', $data);

}


function location(){

$this->load->view('site/jobseeker/location');

}





 

function update_contact_info(){

      $data['first_name']  = $this->input->post('first_name');
            $data['last_name'] = $this->input->post('last_name');
              $data['email'] = $this->input->post('email');
              $data['mob_no']  = $this->input->post('mob_no');
                $data['gender'] = $this->input->post('gender');
                $data['age'] = $this->input->post('age');

              $data['city'] = $this->input->post('city');
              $data['experience']  = $this->input->post('experience');
              $data['user_id']=$this->session->userdata('logged_id');
            $data['alternate_mobile_no'] = $this->input->post('alternate_mobile_no');
            
          
           $cvdata=$this->db->get_where('cv_contact_info' , array('user_id' => $this->session->userdata("logged_id")))->result_array();
           if(count($cvdata)>0){
           $this->db->where('user_id', $this->session->userdata('logged_id'));
            $this->db->update('cv_contact_info', $data);

           }else{
          
               
               if(!isset($_FILES['userfile']) || $_FILES['file_upload']['error'] == UPLOAD_ERR_NO_FILE) {
                   
               }
        else{
            $data['picture_url'] = base_url().'uploads/user_image/'.$this->session->userdata("logged_id").'.jpg';
        }

             $this->db->insert('cv_contact_info', $data);


           }
            
            
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/user_image/' . $this->session->userdata('logged_id') . '.jpg');
            $this->session->set_flashdata('flash_message', get_phrase('account_updated'));
            redirect(base_url() . 'index.php/users/profile/');

}

//

function cv_upload() {
      $user_id=$this->session->userdata('logged_id');

   $config = array(
    'upload_path'=> './uploads/cv/',
      'allowed_types' => "pdf|doc|docx|rtf",
      'overwrite' => TRUE,
      'file_name' =>$user_id,
      'max_size' => "100480", //Can be set to particular file size,here it is 2 MB(2048 Kb)
      );
$this->upload->initialize($config);
    $this->load->library('upload', $config);
    if(!$this->upload->do_upload())
    {
    $error = array('error' => $this->upload->display_errors());
      $this->session->set_flashdata('fail', $this->upload->display_errors());   

    }


    else
    {

      //insert user details into db
      $data = array(
        'user_id' => $user_id,
       
        'path' => base_url()."uploads/cv/".$this->upload->data('file_name'),
        
        'upload_date' => date('y-m-d'),

      
      );

   $this->db->where('user_id', $user_id);
            $result=$this->db->get('cv_upload')->num_rows();

            if($result>0)
            {

           $this->db->where('user_id', $user_id);
            $this->db->update('cv_upload', $data);


            }
            else{

            $this->db->insert('cv_upload', $data); 
            }
      $this->session->set_flashdata('flash_message','Resume upload successfully');   

           }
            redirect(base_url() . 'index.php/users/profile/');

    }






function job_application($jid){
    $uid=$this->session->userdata('logged_id');
    $data['detail'] = $this->user->getapplication($jid);
    // print_r($data['detail']);
    // die();
    $this->load->view('site/jobapplication', $data);

}



function profilecv($userid){
    $uid=$this->session->userdata('logged_id');
    $data['users'] = $this->user->user_info($uid);
    $data['basicdetails'] = $this->user->user_cv_basic_info($uid);
    $data['educations'] = $this->user->education($uid);
    $data['works'] = $this->user->work_experience($uid);
    $data['worksingles'] = $this->user->work_experience_s($uid);
    $data['skills'] = $this->user->skills($uid);
    $data['objectives'] = $this->user->objectives($uid);
    //print_r($data['skills']);
    //die();
  $data['page'] = "profile";
  $this->load->view('site/profilecv', $data);
}




 function shortlisted($comp_id){
    if ($this->session->userdata('logged_recruiter') != 1)
            redirect(base_url() . 'site/login', 'refresh');
          //echo $this->session->userdata('logged_recruiter');
          //echo "string";
        $user_id = $this->session->userdata('logged_id');   
    $this->db->select('job_apply.*, tbl_job.*, users.*, tbl_company.*');
    $this->db->from('job_apply');
$this->db->where('job_apply.comp_id',$comp_id);
 $this->db->where('job_apply.shortlist', 1);
  $this->db->join('tbl_job', 'job_apply.job_id= tbl_job.jobs_id');
   $this->db->join('users', 'job_apply.user_id= users.id');
   $this->db->join('tbl_company', 'job_apply.comp_id= tbl_company.comp_id');
    $data['companies'] = $this->db->get()->result_array();
        $data['page_name'] = 'overview';
    $this->load->view('site/shortlisted', $data);
  }


 function rejected($comp_id){
    if ($this->session->userdata('logged_recruiter') != 1)
            redirect(base_url() . 'site/login', 'refresh');
          //echo $this->session->userdata('logged_recruiter');
          //echo "string";
        $user_id = $this->session->userdata('logged_id');   
    $this->db->select('job_apply.*, tbl_job.*, tbl_company.*');
    $this->db->from('job_apply');
$this->db->where('job_apply.comp_id',$comp_id);
 $this->db->where('job_apply.rejected', 1);
  $this->db->join('tbl_job', 'job_apply.job_id= tbl_job.jobs_id');
  $this->db->join('tbl_company', 'job_apply.comp_id= tbl_company.comp_id');
    $data['companies'] = $this->db->get()->result_array();
        $data['page_name'] = 'overview';
    $this->load->view('site/rejected', $data);
  }











//    function response($comp_id){

//         $user_id = $this->session->userdata('logged_id');
//  $this->db->select('job_apply.*, tbl_job.*, tbl_company.*');
//     $this->db->from('job_apply');
// $this->db->where('job_apply.user_id',$user_id);
//   $this->db->join('tbl_job', 'job_apply.job_id= tbl_job.jobs_id');
//     $this->db->join('tbl_company', 'tbl_company.comp_id = tbl_job.comp_id');
//     $data['companies'] = $this->db->get()->result_array();
//         $data['page_name'] = 'response';
//     $this->load->view('site/response', $data);
//   }






}
?>
