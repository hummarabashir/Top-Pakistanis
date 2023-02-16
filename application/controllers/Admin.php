<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*	
 *	@author 	: Joyonto Roy
 *	date		: 27 september, 2014
 *	Ekattor School Management System Pro
 *	http://codecanyon.net/user/Creativeitem
 *	support@creativeitem.com
 */

class Admin extends CI_Controller
{
    
    
	function __construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->library('session');

        $this->load->model('Crud_model');
		
       /*cache control*/
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		//date_default_timezone_set("Asia/Karachi");
		
		
    }
    
    /***default functin, redirects to login page if no admin logged in yet***/
    public function index()
    {

        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'login', 'refresh');
        if ($this->session->userdata('admin_login') == 1)
            redirect(base_url() . 'admin/dashboard', 'refresh');
    }
    
    /***ADMIN DASHBOARD***/
    function dashboard()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url().'login', 'refresh');
       
        $page_data['page_name']  = 'dashboard';
        $page_data['page_title'] = get_phrase('admin_dashboard');
        $this->load->view('backend/index', $page_data);
    }
    
    /* jobs */

function pending_jobs($param1 = '', $param2 = '', $param3 = '')
{
    if ($this->session->userdata('admin_login') != 1)
            redirect(base_url().'login', 'refresh');
        if ($param1 == 'do_activate') 
        {
            $id = $param2;
            //update_data($tablename, $attr, $data, $id)
            //echo $id;
            $data = array(
                'job_status' => '1'
                );
            $resut = $this->Crud_model->update_data('tbl_job', 'jobs_id', $data, $id);
            $this->session->set_flashdata('flash_message' , get_phrase('job_acitvated_successfully'));

            redirect(base_url() . 'admin/pending_jobs/', 'refresh');
        } 
        //pagination
        $config_base_ulr = base_url() . "admin/pending_jobs";
        $per_page = 10;
        //pagination_data($column_id, $order_by, $table_name, $config_base_ulr , $per_page)
        $press = $this->Crud_model->pagination_pendingjobsdata('jobs_id', 'desc', 'tbl_job',$config_base_ulr, $per_page);
            $page_data['categories'] =$press;
        $str_links = $this->pagination->create_links();
        $page_data["links"] = explode('&nbsp;',$str_links );
        // pagination

         //print_r($page_data);;
        $page_data['page_name']  = 'pending_jobs';
        $page_data['page_title'] = 'Manage Pending Jobs';
        $this->load->view('backend/index', $page_data);
}

function approved_jobs($param1 = '', $param2 = '', $param3 = '')
{
    if ($this->session->userdata('admin_login') != 1)
            redirect(base_url().'login', 'refresh');
        
        //pagination
        $config_base_ulr = base_url() . "radmin/approved_jobs";
        $per_page = 10;
        //pagination_data($column_id, $order_by, $table_name, $config_base_ulr , $per_page)
        $press = $this->Crud_model->pagination_approvedjobsdata('jobs_id', 'desc', 'tbl_job',$config_base_ulr, $per_page);
            $page_data['categories'] =$press;
        $str_links = $this->pagination->create_links();
        $page_data["links"] = explode('&nbsp;',$str_links );
        // pagination

         //print_r($page_data);;
        $page_data['page_name']  = 'approved_jobs';
        $page_data['page_title'] = 'Manage Pending Jobs';
        $this->load->view('backend/index', $page_data);
}


function featured_jobs($param1 = '', $param2 = '', $param3 = '')
{
    if ($this->session->userdata('admin_login') != 1)
            redirect(base_url().'login', 'refresh');
        if ($param1 == 'do_activate') 
        {
            $id = $param2;
            //update_data($tablename, $attr, $data, $id)
            //echo $id;
            $data = array(
                'featured' => '1'
                );
            $resut = $this->Crud_model->update_data('tbl_job', 'jobs_id', $data, $id);
            $this->session->set_flashdata('flash_message' , get_phrase('job_featured_successfully'));

            redirect(base_url() . 'admin/featured_jobs/', 'refresh');
        } 
         if ($param1 == 'do_deactivate') 
        {
            $id = $param2;
            //update_data($tablename, $attr, $data, $id)
            //echo $id;
            $data = array(
                'featured' => '0'
                );
            $resut = $this->Crud_model->update_data('tbl_job', 'jobs_id', $data, $id);
            $this->session->set_flashdata('flash_message' , get_phrase('job_unfeatured_successfully'));

            redirect(base_url() . 'admin/featured_jobs/', 'refresh');
        } 
        //pagination
        $config_base_ulr = base_url() . "admin/featured_jobs";
        $per_page = 10;
        //pagination_data($column_id, $order_by, $table_name, $config_base_ulr , $per_page)
        $press = $this->Crud_model->pagination_approvedjobsdata('jobs_id', 'desc', 'tbl_job',$config_base_ulr, $per_page);
            $page_data['categories'] =$press;
        $str_links = $this->pagination->create_links();
        $page_data["links"] = explode('&nbsp;',$str_links );
        // pagination

         //print_r($page_data);;
        $page_data['page_name']  = 'featured_jobs';
        $page_data['page_title'] = 'Manage Featured Jobs';
        $this->load->view('backend/index', $page_data);
}




/* jobs */
    
    /****MANAGE STUDENTS CLASSWISE*****/
function jobseekars()
{
    if ($this->session->userdata('admin_login') != 1)
            redirect(base_url().'login', 'refresh');
        
        //pagination
        $config_base_ulr = base_url() . "admin/jobseekars";
        $per_page = 10;
        $page=0;
        $config = array();
        $config["base_url"] = $config_base_ulr;
        //$this->db->where(array('user_id' => $user_id));
        $this->db->where('method','normal');
        $total_row = $this->db->count_all_results('users');

        $config["uri_segment"] = 3;
        
        $config["total_rows"] = $total_row;
        $config["per_page"] = $per_page;
        
        $config['use_page_numbers'] = TRUE;
        
        $config['num_links'] = $total_row;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        if($this->uri->segment(3)){
              //$page = (($this->uri->segment(3))-1)*5 ;
            $page = ($this->uri->segment(3)-1)*10 ;
              //echo $page;
        }
        else{
              $page = 0;
        }
        $this->db->where('method','normal');
        $this->db->order_by('id','desc');
        $this->db->limit($config["per_page"],$this->db->escape($page)); 
        $page_data['categories'] = $this->db->get('users')->result_array();
         $str_links = $this->pagination->create_links();
        $page_data["links"] = explode('&nbsp;',$str_links );
        // pagination

         //print_r($page_data);;
        $page_data['page_name']  = 'jobseekars';
        $page_data['page_title'] = 'Manage Jobseekars';
        $this->load->view('backend/index', $page_data);
}

function employers()
{
      if ($this->session->userdata('admin_login') != 1)
            redirect(base_url().'login', 'refresh');
        
        //pagination
        $config_base_ulr = base_url() . "admin/employers";
        $per_page = 10;
        $page=0;
        $config = array();
        $config["base_url"] = $config_base_ulr;
        //$this->db->where(array('user_id' => $user_id));
        $this->db->where('method','recruiter');
        $total_row = $this->db->count_all_results('users');

        $config["uri_segment"] = 3;
        
        $config["total_rows"] = $total_row;
        $config["per_page"] = $per_page;
        
        $config['use_page_numbers'] = TRUE;
        
        $config['num_links'] = $total_row;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        if($this->uri->segment(3)){
              //$page = (($this->uri->segment(3))-1)*5 ;
            $page = ($this->uri->segment(3)-1)*10 ;
              //echo $page;
        }
        else{
              $page = 0;
        }
        $this->db->where('method','recruiter');
        $this->db->order_by('id','desc');
        $this->db->limit($config["per_page"],$this->db->escape($page)); 
        $page_data['categories'] = $this->db->get('users')->result_array();
         $str_links = $this->pagination->create_links();
        $page_data["links"] = explode('&nbsp;',$str_links );
        // pagination
    
         //print_r($page_data);;
        $page_data['page_name']  = 'employers';
        $page_data['page_title'] = 'Manage Employers';
        $this->load->view('backend/index', $page_data);
}

function category($param1 = '', $param2 = '', $param3 = '')
{
   if ($this->session->userdata('admin_login') != 1)
            redirect(base_url().'login', 'refresh');
        if ($param1 == 'create') {
            $data = array(
                    'cat_name'   => $this->input->post('cat_name')
                );
                //print_r($data); exit;
        $lastid = $this->Crud_model->add_category($data);
        
        /* file upload */
            if ($_FILES["userfile"]['name']) {
                $image = $lastid.'_'.$_FILES["userfile"]['name'];
                $final_image = $newString = str_replace(" ","",$image);
                $config['upload_path']          = './uploads/category/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|jpeg';
                $config['file_name'] = $final_image;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                $success1 = $this->upload->do_upload('userfile');
                //echo $success1;
               //echo $image;
                   $data_u = array(
                    'cat_image' => $final_image
                    );
               //function update_data($tablename, $attr, $data, $id)
               $update = $this->crud_model->update_data('tbl_cat', 'cat_id', $data_u, $lastid);
               //echo $update;
            } 
            //die();
        /*file upload */
        $this->session->set_flashdata('flash_message' , get_phrase('category_added_successfully'));
        redirect(base_url() . 'admin/category/', 'refresh');
        } else if ($param1 == 'do_update') 
        {
            $data = array(
                'cat_name' => $this->input->post('cat_name')
                );
            $id = $this->input->post('cat_id');
            $lastid = $this->Crud_model->update_data('tbl_cat', 'cat_id', $data, $id);
            $this->session->set_flashdata('flash_message' , get_phrase('category_updated_successfully'));

            /* file upload */
            if ($_FILES["userfile"]['name']) {
                
                if (!empty($this->input->post('cat_image'))) {
                    //echo "nor empty";
                   $final_image = $this->input->post('cat_image');
                } else {
                    //echo 'empty';
                    $image = $id.'_'.$_FILES["userfile"]['name'];
                    $final_image = $newString = str_replace(" ","",$image);
                }
                //die();
                //echo $final_image;
                $config['upload_path']          = './uploads/category/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|jpeg';
                $config['file_name'] = $final_image;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->overwrite = true;

                $success1 = $this->upload->do_upload('userfile');
                //echo $success1;
               //echo $image;
                   $data_u = array(
                    'cat_image' => $final_image
                    );
               //function update_data($tablename, $attr, $data, $id)
               $update = $this->crud_model->update_data('tbl_cat', 'cat_id', $data_u, $id);
               //echo $update;
            } 
            //die();
        /*file upload */

            redirect(base_url() . 'admin/category/', 'refresh');
        } else if ($param1 == 'do_delete') 
        {
            $id = $param2;
            $resut = $this->Crud_model->delete_data('tbl_cat', 'cat_id', $id);
            $this->session->set_flashdata('flash_message' , get_phrase('category_deleted_successfully'));

            redirect(base_url() . 'admin/category/', 'refresh');
        }
        $page_data['categories']    = $this->Crud_model->get_categories();
         //print_r($page_data);;
        $page_data['page_name']  = 'category';
        $page_data['page_title'] = get_phrase('manage_categories');
        $this->load->view('backend/index', $page_data);
}

   function categoryadd(){
if ($this->session->userdata('admin_login') != 1)
            redirect(base_url().'login', 'refresh');
       
        $page_data['page_name']  = 'modal_teacher_add';
        $page_data['page_title'] = get_phrase('manage_categories');
        $this->load->view('backend/index', $page_data);
}



function blog($param1 = '', $param2 = '', $param3 = '')
{
   if ($this->session->userdata('admin_login') != 1)
            redirect(base_url().'login', 'refresh');
           if ($param1 == 'do_activate') 
        {
            $id = $param2;
            //update_data($tablename, $attr, $data, $id)
            //echo $id;
            $data = array(
                'blog_status' => '1'
                );
            $resut = $this->Crud_model->update_data('tbl_blog', 'blog_id', $data, $id);
            $this->session->set_flashdata('flash_message' , get_phrase('blog_acitvated_successfully'));

            redirect(base_url() . 'admin/blog/', 'refresh');
        } 
               if ($param1 == 'do_deactivate') 
        {
            $id = $param2;
            //update_data($tablename, $attr, $data, $id)
            //echo $id;
            $data = array(
                'blog_status' => '0'
                );
            $resut = $this->Crud_model->update_data('tbl_blog', 'blog_id', $data, $id);
            $this->session->set_flashdata('flash_message' , get_phrase('blog_deacitvated_successfully'));

            redirect(base_url() . 'admin/blog/', 'refresh');
        } 
        if ($param1 == 'create') {
            $data = array(
                    'blog_name'   => $this->input->post('blog_name'),
                    'description'   => $this->input->post('description'),
                    'cat_id'   => $this->input->post('cat_id')
                );
                //print_r($data); exit;
        $lastid = $this->Crud_model->add_blog($data);
        
        /* file upload */
            if ($_FILES["userfile"]['name']) {
                $image = $lastid.'_'.$_FILES["userfile"]['name'];
                $final_image = $newString = str_replace(" ","",$image);
                $config['upload_path']          = './uploads/category/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|jpeg';
                $config['file_name'] = $final_image;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                $success1 = $this->upload->do_upload('userfile');
                //echo $success1;
               //echo $image;
                   $data_u = array(
                    'blog_image' => $final_image
                    );
               //function update_data($tablename, $attr, $data, $id)
               $update = $this->crud_model->update_data('tbl_blog', 'blog_id', $data_u, $lastid);
               //echo $update;
            } 
            //die();
        /*file upload */
        $this->session->set_flashdata('flash_message' , get_phrase('blog_added_successfully'));
        redirect(base_url() . 'admin/blog/', 'refresh');
        } else if ($param1 == 'do_update') 
        {
            $data = array(
                'blog_name'   => $this->input->post('blog_name'),
                    'description'   => $this->input->post('description'),
                    'cat_id'   => $this->input->post('cat_id')
                );
            $id = $this->input->post('blog_id');
            $lastid = $this->Crud_model->update_data('tbl_blog', 'blog_id', $data, $id);
            $this->session->set_flashdata('flash_message' , get_phrase('blog_updated_successfully'));

            /* file upload */
            if ($_FILES["userfile"]['name']) {
                
                if (!empty($this->input->post('blog_image'))) {
                    //echo "nor empty";
                   $final_image = $this->input->post('blog_image');
                } else {
                    //echo 'empty';
                    $image = $id.'_'.$_FILES["userfile"]['name'];
                    $final_image = $newString = str_replace(" ","",$image);
                }
                //die();
                //echo $final_image;
                $config['upload_path']          = './uploads/category/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|jpeg';
                $config['file_name'] = $final_image;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->overwrite = true;

                $success1 = $this->upload->do_upload('userfile');
                //echo $success1;
               //echo $image;
                   $data_u = array(
                    'blog_image' => $final_image
                    );
               //function update_data($tablename, $attr, $data, $id)
               $update = $this->crud_model->update_data('tbl_blog', 'blog_id', $data_u, $id);
               //echo $update;
            } 
            //die();
        /*file upload */

            redirect(base_url() . 'admin/blog/', 'refresh');
        } else if ($param1 == 'do_delete') 
        {
            $id = $param2;
            $resut = $this->Crud_model->delete_data('tbl_blog', 'blog_id', $id);
            $this->session->set_flashdata('flash_message' , get_phrase('blog_deleted_successfully'));

            redirect(base_url() . 'admin/blog/', 'refresh');
        }
        $page_data['blogs']    = $this->Crud_model->get_blog();
         //print_r($page_data);;
        $page_data['page_name']  = 'blog';
        $page_data['page_title'] = get_phrase('manage_blog');
        $this->load->view('backend/index', $page_data);
}




   function blogadd(){
if ($this->session->userdata('admin_login') != 1)
            redirect(base_url().'login', 'refresh');
        $page_data['category'] = $this->crud_model->get_data('tbl_cat');
        $page_data['page_name']  = 'modal_blog_add';
        $page_data['page_title'] = get_phrase('manage_blog');
        $this->load->view('backend/index', $page_data);
}


function city($param1 = '', $param2 = '', $param3 = '')
{
    if ($this->session->userdata('admin_login') != 1)
            redirect(base_url().'login', 'refresh');
        if ($param1 == 'create') {
            $data = array(
                    'city_name'   => $this->input->post('city_name')
                );
                //print_r($data); exit;
        $lastid = $this->Crud_model->create_data('tbl_city',$data);
        
        $this->session->set_flashdata('flash_message' , get_phrase('city_added_successfully'));
        redirect(base_url() . 'admin/city/', 'refresh');
        } else if ($param1 == 'do_update') 
        {
            $data = array(
                'city_name' => $this->input->post('city_name')
                );
            $id = $this->input->post('city_id');
            $lastid = $this->Crud_model->update_data('tbl_city', 'city_id', $data, $id);
            $this->session->set_flashdata('flash_message' , get_phrase('city_updated_successfully'));
            redirect(base_url() . 'admin/city/', 'refresh');
        } else if ($param1 == 'do_delete') 
        {
            $id = $param2;
            $resut = $this->Crud_model->delete_data('tbl_city', 'city_id', $id);
            $this->session->set_flashdata('flash_message' , get_phrase('city_deleted_successfully'));

            redirect(base_url() . 'admin/city/', 'refresh');
        }
        $page_data['cities']  = $this->Crud_model->get_data('tbl_city');
         //print_r($page_data);;
        $page_data['page_name']  = 'city';
        $page_data['page_title'] = get_phrase('manage_cities');
        $this->load->view('backend/index', $page_data);
}

function cityadd(){
if ($this->session->userdata('admin_login') != 1)
            redirect(base_url().'login', 'refresh');
       
        $page_data['page_name']  = 'city_add';
        $page_data['page_title'] = get_phrase('City');
        $this->load->view('backend/index', $page_data);
}


/* CAREER ADVISOR  */

function careeradvisor($param1 = '', $param2 = '', $param3 = '')
{
   if ($this->session->userdata('admin_login') != 1)
            redirect(base_url().'login', 'refresh');
           if ($param1 == 'do_activate') 
        {
            $id = $param2;
            //update_data($tablename, $attr, $data, $id)
            //echo $id;
            $data = array(
                'ca_status' => '1'
                );
            $resut = $this->Crud_model->update_data('tbl_careeradvisor', 'ca_id', $data, $id);
            $this->session->set_flashdata('flash_message' , get_phrase('careeradvisor_activated_successfully'));

            redirect(base_url() . 'admin/careeradvisor/', 'refresh');
        } 
               if ($param1 == 'do_deactivate') 
        {
            $id = $param2;
            //update_data($tablename, $attr, $data, $id)
            //echo $id;
            $data = array(
                'ca_status' => '0'
                );
            $resut = $this->Crud_model->update_data('tbl_careeradvisor', 'ca_id', $data, $id);
            $this->session->set_flashdata('flash_message' , get_phrase('careeradvisor_deacitvated_successfully'));

            redirect(base_url() . 'admin/careeradvisor/', 'refresh');
        } 
        if ($param1 == 'create') {
            $data = array(
                    'ca_name'   => $this->input->post('ca_name'),
                    'ca_comp'   => $this->input->post('ca_comp'),
                    'ca_email'   => $this->input->post('ca_email'),
                    'ca_phone'   => $this->input->post('ca_phone'),
                    'ca_city'   => $this->input->post('ca_city'),
                    'ca_country'   => $this->input->post('ca_country'),
                      'ca_address'   => $this->input->post('ca_address'),
                    'ca_description'   => $this->input->post('ca_description')
                );
                //print_r($data); exit;
        $lastid = $this->Crud_model->add_careeradvisor($data);
        
        /* file upload */
            if ($_FILES["userfile"]['name']) {
                $image = $lastid.'_'.$_FILES["userfile"]['name'];
                $final_image = $newString = str_replace(" ","",$image);
                $config['upload_path']          = './uploads/company_logo/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|jpeg';
                $config['file_name'] = $final_image;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                $success1 = $this->upload->do_upload('userfile');
                //echo $success1;
               //echo $image;
                   $data_u = array(

                    'logo_url' => base_url() . "uploads/company_logo/" .$this->upload->data('file_name')
                    );
               //function update_data($tablename, $attr, $data, $id)
               $update = $this->crud_model->update_data('tbl_careeradvisor', 'ca_id', $data_u, $lastid);
               //echo $update;
            } 
            //die();
        /*file upload */
        $this->session->set_flashdata('flash_message' , get_phrase('careeradvisor_added_successfully'));
        redirect(base_url() . 'admin/careeradvisor/', 'refresh');
        } else if ($param1 == 'do_update') 
        {
            $data = array(
                   'ca_name'   => $this->input->post('ca_name'),
                    'ca_comp'   => $this->input->post('ca_comp'),
                    'ca_email'   => $this->input->post('ca_email'),
                    'ca_phone'   => $this->input->post('ca_phone'),
                    'ca_city'   => $this->input->post('ca_city'),
                    'ca_country'   => $this->input->post('ca_country'),
                      'ca_address'   => $this->input->post('ca_address'),
                    'ca_description'   => $this->input->post('ca_description')
                );
            $id = $this->input->post('ca_id');
            $lastid = $this->Crud_model->update_data('tbl_careeradvisor', 'ca_id', $data, $id);
            $this->session->set_flashdata('flash_message' , get_phrase('careeradvisor_updated_successfully'));

            /* file upload */
            if ($_FILES["userfile"]['name']) {
                
                if (!empty($this->input->post('logo_url'))) {
                    //echo "nor empty";
                   $final_image = $this->input->post('logo_url');
                } else {
                    //echo 'empty';
                    $image = $id.'_'.$_FILES["userfile"]['name'];
                    $final_image = $newString = str_replace(" ","",$image);
                }
                //die();
                //echo $final_image;
                $config['upload_path']          = './uploads/company_logo/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|jpeg';
                $config['file_name'] = $final_image;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->overwrite = true;

                $success1 = $this->upload->do_upload('userfile');
                //echo $success1;
               //echo $image;
                   $data_u = array(
                    'ca_image' => base_url() . "uploads/company_logo/" .$this->upload->data('file_name')
                    );
               //function update_data($tablename, $attr, $data, $id)
               $update = $this->crud_model->update_data('tbl_careeradvisor', 'ca_id', $data_u, $id);
               //echo $update;
            } 
            //die();
        /*file upload */

            redirect(base_url() . 'admin/careeradvisor/', 'refresh');
        } else if ($param1 == 'do_delete') 
        {
            $id = $param2;
            $resut = $this->Crud_model->delete_data('tbl_careeradvisor', 'ca_id', $id);
            $this->session->set_flashdata('flash_message' , get_phrase('careeradvisor_deleted_successfully'));

            redirect(base_url() . 'admin/careeradvisor/', 'refresh');
        }
        $page_data['blogs']    = $this->Crud_model->get_careeradvisor();
         //print_r($page_data);;
        $page_data['page_name']  = 'careeradvisor';
        $page_data['page_title'] = get_phrase('manage_careeradvisor');
        $this->load->view('backend/index', $page_data);
}




   function careeradviceadd(){
if ($this->session->userdata('admin_login') != 1)
            redirect(base_url().'login', 'refresh');
        $page_data['page_name']  = 'modal_careeradvice_add';
        $page_data['page_title'] = get_phrase('manage_careeradvisor');
        $this->load->view('backend/index', $page_data);
}










/* companies */
function comapnies($param1 = '', $param2 = '', $param3 = '')
{
    if ($this->session->userdata('admin_login') != 1)
            redirect(base_url().'login', 'refresh');
        if ($param1 == 'create') {
            $data = array(
                    'compimages_name'   => $this->input->post('compimages_name')
                );
                //print_r($data); exit;
        $lastid = $this->Crud_model->create_data('tbl_compimages',$data);
        
        /* file upload */
            if ($_FILES["userfile"]['name']) {
                $image = $lastid.'_'.$_FILES["userfile"]['name'];
                $final_image = $newString = str_replace(" ","",$image);
                $config['upload_path']          = './uploads/comapnies/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|jpeg';
                $config['file_name'] = $final_image;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                $success1 = $this->upload->do_upload('userfile');
                //echo $success1;
               //echo $image;
                   $data_u = array(
                    'compimages_image' => $final_image
                    );
               //function update_data($tablename, $attr, $data, $id)
               $update = $this->crud_model->update_data('tbl_compimages', 'compimages_id', $data_u, $lastid);
               //echo $update;
            } 
            //die();
        /*file upload */
        $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
        redirect(base_url() . 'admin/comapnies/', 'refresh');
        } else if ($param1 == 'do_update') 
        {
            $data = array(
                'compimages_name' => $this->input->post('compimages_name')
                );
            $id = $this->input->post('cat_id');
            $lastid = $this->Crud_model->update_data('tbl_compimages', 'compimages_id', $data, $id);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated_successfully'));

            /* file upload */
            if ($_FILES["userfile"]['name']) {
                
                if (!empty($this->input->post('compimages_image'))) {
                    //echo "nor empty";
                   $final_image = $this->input->post('compimages_image');
                } else {
                    //echo 'empty';
                    $image = $id.'_'.$_FILES["userfile"]['name'];
                    $final_image = $newString = str_replace(" ","",$image);
                }
                //die();
                //echo $final_image;
                $config['upload_path']          = './uploads/comapnies/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|jpeg';
                $config['file_name'] = $final_image;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->overwrite = true;

                $success1 = $this->upload->do_upload('userfile');
                //echo $success1;
               //echo $image;
                   $data_u = array(
                    'compimages_name' => $final_image
                    );
               //function update_data($tablename, $attr, $data, $id)
               $update = $this->crud_model->update_data('tbl_compimages', 'compimages_id', $data_u, $id);
               //echo $update;
            } 
            //die();
        /*file upload */

            redirect(base_url() . 'admin/comapnies/', 'refresh');
        } else if ($param1 == 'do_delete') 
        {
            $id = $param2;
            $resut = $this->Crud_model->delete_data('tbl_compimages', 'compimages_id', $id);
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted_successfully'));

            unlink(getcwd().'/uploads/comapnies/'.$param3);

            redirect(base_url() . 'admin/comapnies/', 'refresh');
        }
        $page_data['categories']    = $this->Crud_model->get_data('tbl_compimages');
         //print_r($page_data);;
        $page_data['page_name']  = 'comapnies';
        $page_data['page_title'] = get_phrase('manage_comapnies');
        $this->load->view('backend/index', $page_data);
}

    function companyadd(){
if ($this->session->userdata('admin_login') != 1)
            redirect(base_url().'login', 'refresh');
       
        $page_data['page_name']  = 'modal_comanies_add';
        $page_data['page_title'] = get_phrase('manage_comapnies');
        $this->load->view('backend/index', $page_data);
}



/* comapnies ends*/


function level($param1 = '', $param2 = '', $param3 = '')
{
    if ($this->session->userdata('admin_login') != 1)
            redirect(base_url().'login', 'refresh');
        if ($param1 == 'create') {
            $data = array(
                    'clevel_name'   => $this->input->post('clevel_name')
                );
                //print_r($data); exit;
        $lastid = $this->Crud_model->create_data('tbl_clevel',$data);
        
        $this->session->set_flashdata('flash_message' , get_phrase('careerlevel_added_successfully'));
        redirect(base_url() . 'admin/level/', 'refresh');
        } else if ($param1 == 'do_update') 
        {
            $data = array(
                'clevel_name' => $this->input->post('clevel_name')
                );
            $id = $this->input->post('clevel_id');
            $lastid = $this->Crud_model->update_data('tbl_clevel', 'clevel_id', $data, $id);
            $this->session->set_flashdata('flash_message' , get_phrase('careerlevel_updated_successfully'));
            redirect(base_url() . 'admin/level/', 'refresh');
        } else if ($param1 == 'do_delete') 
        {
            $id = $param2;
            $resut = $this->Crud_model->delete_data('tbl_clevel', 'clevel_id', $id);
            $this->session->set_flashdata('flash_message' , get_phrase('careerlevel_deleted_successfully'));

            redirect(base_url() . 'admin/level/', 'refresh');
        }
        $page_data['clevel']  = $this->Crud_model->get_data('tbl_clevel');
         //print_r($page_data);;
        $page_data['page_name']  = 'career_level';
        $page_data['page_title'] = get_phrase('manage_career_level');
        $this->load->view('backend/index', $page_data);
}
    function leveladd(){
if ($this->session->userdata('admin_login') != 1)
            redirect(base_url().'login', 'refresh');
       
        $page_data['page_name']  = 'modal_level_add';
        $page_data['page_title'] = get_phrase('manage_career_level');
        $this->load->view('backend/index', $page_data);
}


function benefits($param1 = '', $param2 = '', $param3 = '')
{
    if ($this->session->userdata('admin_login') != 1)
            redirect(base_url().'login', 'refresh');
        if ($param1 == 'create') {
            $data = array(
                    'benefit_name'   => $this->input->post('benefit_name')
                );
                //print_r($data); exit;
        $lastid = $this->Crud_model->create_data('tbl_benefit',$data);
        
        $this->session->set_flashdata('flash_message' , get_phrase('benefit_added_successfully'));
        redirect(base_url() . 'admin/benefits/', 'refresh');
        } else if ($param1 == 'do_update') 
        {
            $data = array(
                'benefit_name' => $this->input->post('benefit_name')
                );
            
            $id = $this->input->post('benefit_id');
            //print_r($data);
            //echo $id;
            //exit();
            $lastid = $this->Crud_model->update_data('tbl_benefit', 'benefit_id', $data, $id);
            $this->session->set_flashdata('flash_message' , get_phrase('benefit_updated_successfully'));
            redirect(base_url() . 'admin/benefits/', 'refresh');
        } else if ($param1 == 'do_delete') 
        {
            $id = $param2;
            $resut = $this->Crud_model->delete_data('tbl_benefit', 'benefit_id', $id);
            $this->session->set_flashdata('flash_message' , get_phrase('benefit_deleted_successfully'));

            redirect(base_url() . 'admin/benefits/', 'refresh');
        }
        $page_data['benefit']  = $this->Crud_model->get_data('tbl_benefit');
         //print_r($page_data);;
        $page_data['page_name']  = 'benifits';
        $page_data['page_title'] = get_phrase('manage_benefits');
        $this->load->view('backend/index', $page_data);
}

    function benefitsadd(){
if ($this->session->userdata('admin_login') != 1)
            redirect(base_url().'login', 'refresh');
       
        $page_data['page_name']  = 'modal_benifit_add';
        $page_data['page_title'] = get_phrase('manage_benefits');
        $this->load->view('backend/index', $page_data);
}



function subcategory($param1 = '', $param2 = '', $param3 = '')
{

    if ($this->session->userdata('admin_login') != 1)
            redirect(base_url().'login', 'refresh');
    if($param1 == 'create')
    {
        $data = array(
            'cat_id' => $this->input->post('cat_id'),
            'subcat_name' => $this->input->post('subcat_name')
            );
        $lastid = $this->Crud_model->create_data('tbl_subcat', $data);
        $this->session->set_flashdata('flash_message' , get_phrase('subcategory_added_successfully'));
        
        redirect(base_url() . 'admin/subcategory/', 'refresh');
    } else if($param1 == 'do_delete')
    {
            $id = $param2;
            $resut = $this->Crud_model->delete_data('tbl_subcat', 'subcat_id', $id);
            $this->session->set_flashdata('flash_message' , get_phrase('subcategory_deleted_successfully'));

            redirect(base_url() . 'admin/subcategory/', 'refresh');
    } else if ($param1 == 'do_update')
    {
        $data = array(
            'subcat_name' => $this->input->post('subcat_name'),
            'cat_id' => $this->input->post('cat_id') 
            );
        $id = $this->input->post('subcat_id');
        //print_r($data);
        //echo $id;
        //exit();
        $result = $this->Crud_model->update_data('tbl_subcat', 'subcat_id', $data, $id);
        //echo $lastid;
        //exit();
        $this->session->set_flashdata('flash_message' , get_phrase('category_updated_successfully'));
        redirect(base_url() . 'admin/subcategory/', 'refresh');
    }
    $page_data['subcategory'] = $this->Crud_model->get_subcat();
    $page_data['page_name']  = 'subcategory';
    $page_data['page_title'] = get_phrase('manage_subcategories');
    $this->load->view('backend/index', $page_data);
}
    
    function subcategoryadd(){
if ($this->session->userdata('admin_login') != 1)
            redirect(base_url().'login', 'refresh');
       
        $page_data['page_name']  = 'modal_subcat_add';
        $page_data['page_title'] = get_phrase('manage_subcategories');
        $this->load->view('backend/index', $page_data);
}
    
    
    	    function skillsadd(){
if ($this->session->userdata('admin_login') != 1)
            redirect(base_url().'login', 'refresh');
       
        $page_data['page_name']  = 'modal_skills_add';
        $page_data['page_title'] = get_phrase('manage_skills');
        $this->load->view('backend/index', $page_data);
}



function skills($param1 = '', $param2 = '', $param3 = '')
{

    if ($this->session->userdata('admin_login') != 1)
            redirect(base_url().'login', 'refresh');
    if($param1 == 'create')
    {
        $data = array(
            'cat_id' => $this->input->post('cat_id'),
            'skill_name' => $this->input->post('skill_name')
            );
        $lastid = $this->Crud_model->create_data('tbl_skills', $data);
        $this->session->set_flashdata('flash_message' , get_phrase('skills_added_successfully'));
        
        redirect(base_url() . 'admin/skills/', 'refresh');
    } else if($param1 == 'do_delete')
    {
            $id = $param2;
            $resut = $this->Crud_model->delete_data('tbl_skills', 'skill_id', $id);
            $this->session->set_flashdata('flash_message' , get_phrase('skills_deleted_successfully'));

            redirect(base_url() . 'admin/skills/', 'refresh');
    } else if ($param1 == 'do_update')
    {
        $data = array(
            'skill_name' => $this->input->post('subcat_name'),
            'cat_id' => $this->input->post('cat_id') 
            );
        $id = $this->input->post('skill_id');
        //print_r($data);
        //echo $id;
        //exit();
        $result = $this->Crud_model->update_data('tbl_skills', 'skill_id', $data, $id);
        //echo $lastid;
        //exit();
        $this->session->set_flashdata('flash_message' , get_phrase('skills_updated_successfully'));
        redirect(base_url() . 'admin/skills/', 'refresh');
    }
    $page_data['subcategory'] = $this->Crud_model->get_subcat();
    $page_data['page_name']  = 'skills';
    $page_data['page_title'] = get_phrase('manage_skills');
    $this->load->view('backend/index', $page_data);
}




    
    /****MANAGE TEACHERS*****/
    function clientemail($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['name']        = $this->input->post('name');
            $data['birthday']    = $this->input->post('birthday');
            $data['sex']         = $this->input->post('sex');
            $data['address']     = $this->input->post('address');
            $data['phone']       = $this->input->post('phone');
            $data['email']       = $this->input->post('email');
            $data['password']    = $this->input->post('password');
            $this->db->insert('teacher', $data);
            $teacher_id = $this->db->insert_id();
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/teacher_image/' . $teacher_id . '.jpg');
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            $this->email_model->account_opening_email('teacher', $data['email']); //SEND EMAIL ACCOUNT OPENING EMAIL
            redirect(base_url() . 'admin/teacher/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']        = $this->input->post('name');
            $data['birthday']    = $this->input->post('birthday');
            $data['sex']         = $this->input->post('sex');
            $data['address']     = $this->input->post('address');
            $data['phone']       = $this->input->post('phone');
            $data['email']       = $this->input->post('email');
            
            $this->db->where('teacher_id', $param2);
            $this->db->update('teacher', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/teacher_image/' . $param2 . '.jpg');
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'admin/teacher/', 'refresh');
        } else if ($param1 == 'personal_profile') {
            $page_data['personal_profile']   = true;
            $page_data['current_teacher_id'] = $param2;
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('teacher', array(
                'teacher_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('teacher_id', $param2);
            $this->db->delete('teacher');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'admin/teacher/', 'refresh');
        }
         $this->db->select('email,city');
$this->db->from('customer_feedback');

$page_data['teachers']   =$this->db->get()->result_array(); 
        $page_data['page_name']  = 'teacher';
        $page_data['page_title'] = get_phrase('manage_teacher');
        $this->load->view('backend/index', $page_data);
    }
    
    /****MANAGE SUBJECTS*****/
    function subject($param1 = '', $param2 = '' , $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['name']       = $this->input->post('name');
            $data['class_id']   = $this->input->post('class_id');
            $data['teacher_id'] = $this->input->post('teacher_id');
            $this->db->insert('subject', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'admin/subject/'.$data['class_id'], 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']       = $this->input->post('name');
            $data['class_id']   = $this->input->post('class_id');
            $data['teacher_id'] = $this->input->post('teacher_id');
            
            $this->db->where('subject_id', $param2);
            $this->db->update('subject', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'admin/subject/'.$data['class_id'], 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('subject', array(
                'subject_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('subject_id', $param2);
            $this->db->delete('subject');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'admin/subject/'.$param3, 'refresh');
        }
		 $page_data['class_id']   = $param1;
        $page_data['subjects']   = $this->db->get_where('subject' , array('class_id' => $param1))->result_array();
        $page_data['page_name']  = 'subject';
        $page_data['page_title'] = get_phrase('manage_subject');
        $this->load->view('backend/index', $page_data);
    }
    
    /****MANAGE CLASSES*****/
    function classes($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['name']         = $this->input->post('name');
            $data['name_numeric'] = $this->input->post('name_numeric');
            $data['teacher_id']   = $this->input->post('teacher_id');
            $this->db->insert('class', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'admin/classes/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']         = $this->input->post('name');
            $data['name_numeric'] = $this->input->post('name_numeric');
            $data['teacher_id']   = $this->input->post('teacher_id');
            
            $this->db->where('class_id', $param2);
            $this->db->update('class', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'admin/classes/', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('class', array(
                'class_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('class_id', $param2);
            $this->db->delete('class');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'admin/classes/', 'refresh');
        }
        $page_data['classes']    = $this->db->get('class')->result_array();
        $page_data['page_name']  = 'class';
        $page_data['page_title'] = get_phrase('manage_class');
        $this->load->view('backend/index', $page_data);
    }

    /****MANAGE SECTIONS*****/
    function section($class_id = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        // detect the first class
        if ($class_id == '')
            $class_id           =   $this->db->get('class')->first_row()->class_id;

        $page_data['page_name']  = 'section';
        $page_data['page_title'] = get_phrase('manage_sections');
        $page_data['class_id']   = $class_id;
        $this->load->view('backend/index', $page_data);    
    }

    function sections($param1 = '' , $param2 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['name']       =   $this->input->post('name');
            $data['nick_name']  =   $this->input->post('nick_name');
            $data['class_id']   =   $this->input->post('class_id');
            $data['teacher_id'] =   $this->input->post('teacher_id');
            $this->db->insert('section' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'admin/section/' . $data['class_id'] , 'refresh');
        }

        if ($param1 == 'edit') {
            $data['name']       =   $this->input->post('name');
            $data['nick_name']  =   $this->input->post('nick_name');
            $data['class_id']   =   $this->input->post('class_id');
            $data['teacher_id'] =   $this->input->post('teacher_id');
            $this->db->where('section_id' , $param2);
            $this->db->update('section' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'admin/section/' . $data['class_id'] , 'refresh');
        }

        if ($param1 == 'delete') {
            $this->db->where('section_id' , $param2);
            $this->db->delete('section');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'admin/section' , 'refresh');
        }
    }

    function get_class_section($class_id)
    {
        $sections = $this->db->get_where('section' , array(
            'class_id' => $class_id
        ))->result_array();
        foreach ($sections as $row) {
            echo '<option value="' . $row['section_id'] . '">' . $row['name'] . '</option>';
        }
    }

    function get_class_subject($class_id)
    {
        $subjects = $this->db->get_where('subject' , array(
            'class_id' => $class_id
        ))->result_array();
        foreach ($subjects as $row) {
            echo '<option value="' . $row['subject_id'] . '">' . $row['name'] . '</option>';
        }
    }

    /****MANAGE EXAMS*****/
    function exam($param1 = '', $param2 = '' , $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['name']    = $this->input->post('name');
            $data['date']    = $this->input->post('date');
            $data['comment'] = $this->input->post('comment');
            $this->db->insert('exam', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'admin/exam/', 'refresh');
        }
        if ($param1 == 'edit' && $param2 == 'do_update') {
            $data['name']    = $this->input->post('name');
            $data['date']    = $this->input->post('date');
            $data['comment'] = $this->input->post('comment');
            
            $this->db->where('exam_id', $param3);
            $this->db->update('exam', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'admin/exam/', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('exam', array(
                'exam_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('exam_id', $param2);
            $this->db->delete('exam');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'admin/exam/', 'refresh');
        }
        $page_data['exams']      = $this->db->get('exam')->result_array();
        $page_data['page_name']  = 'exam';
        $page_data['page_title'] = get_phrase('manage_exam');
        $this->load->view('backend/index', $page_data);
    }

    /****** SEND EXAM MARKS VIA SMS ********/
    function exam_marks_sms($param1 = '' , $param2 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        if ($param1 == 'send_sms') {

            $exam_id    =   $this->input->post('exam_id');
            $class_id   =   $this->input->post('class_id');
            $receiver   =   $this->input->post('receiver');

            // get all the students of the selected class
            $students = $this->db->get_where('student' , array(
                'class_id' => $class_id
            ))->result_array();
            // get the marks of the student for selected exam
            foreach ($students as $row) {
                if ($receiver == 'student')
                    $receiver_phone = $row['phone'];
                if ($receiver == 'parent' && $row['parent_id'] != '') 
                    $receiver_phone = $this->db->get_where('parent' , array('parent_id' => $row['parent_id']))->row()->phone;
                

                $this->db->where('exam_id' , $exam_id);
                $this->db->where('student_id' , $row['student_id']);
                $marks = $this->db->get('mark')->result_array();
                $message = '';
                foreach ($marks as $row2) {
                    $subject       = $this->db->get_where('subject' , array('subject_id' => $row2['subject_id']))->row()->name;
                    $mark_obtained = $row2['mark_obtained'];  
                    $message      .= $row2['student_id'] . $subject . ' : ' . $mark_obtained . ' , ';
                    
                }
                // send sms
                $this->sms_model->send_sms( $message , $receiver_phone );
            }
            $this->session->set_flashdata('flash_message' , get_phrase('message_sent'));
            redirect(base_url() . 'admin/exam_marks_sms' , 'refresh');
        }
                
        $page_data['page_name']  = 'exam_marks_sms';
        $page_data['page_title'] = get_phrase('send_marks_by_sms');
        $this->load->view('backend/index', $page_data);
    }

    /****MANAGE EXAM MARKS*****/
    function marks($exam_id = '', $class_id = '', $subject_id = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        
        if ($this->input->post('operation') == 'selection') {
            $page_data['exam_id']    = $this->input->post('exam_id');
            $page_data['class_id']   = $this->input->post('class_id');
            $page_data['subject_id'] = $this->input->post('subject_id');
            
            if ($page_data['exam_id'] > 0 && $page_data['class_id'] > 0 && $page_data['subject_id'] > 0) {
                redirect(base_url() . 'admin/marks/' . $page_data['exam_id'] . '/' . $page_data['class_id'] . '/' . $page_data['subject_id'], 'refresh');
            } else {
                $this->session->set_flashdata('mark_message', 'Choose exam, class and subject');
                redirect(base_url() . 'admin/marks/', 'refresh');
            }
        }
        if ($this->input->post('operation') == 'update') {
            $data['mark_obtained'] = $this->input->post('mark_obtained');
            $data['comment']       = $this->input->post('comment');
            
            $this->db->where('mark_id', $this->input->post('mark_id'));
            $this->db->update('mark', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'admin/marks/' . $this->input->post('exam_id') . '/' . $this->input->post('class_id') . '/' . $this->input->post('subject_id'), 'refresh');
        }
        $page_data['exam_id']    = $exam_id;
        $page_data['class_id']   = $class_id;
        $page_data['subject_id'] = $subject_id;
        
        $page_data['page_info'] = 'Exam marks';
        
        $page_data['page_name']  = 'marks';
        $page_data['page_title'] = get_phrase('manage_exam_marks');
        $this->load->view('backend/index', $page_data);
    }
    
    
    /****MANAGE GRADES*****/
    function grade($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['name']        = $this->input->post('name');
            $data['grade_point'] = $this->input->post('grade_point');
            $data['mark_from']   = $this->input->post('mark_from');
            $data['mark_upto']   = $this->input->post('mark_upto');
            $data['comment']     = $this->input->post('comment');
            $this->db->insert('grade', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'admin/grade/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']        = $this->input->post('name');
            $data['grade_point'] = $this->input->post('grade_point');
            $data['mark_from']   = $this->input->post('mark_from');
            $data['mark_upto']   = $this->input->post('mark_upto');
            $data['comment']     = $this->input->post('comment');
            
            $this->db->where('grade_id', $param2);
            $this->db->update('grade', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'admin/grade/', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('grade', array(
                'grade_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('grade_id', $param2);
            $this->db->delete('grade');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'admin/grade/', 'refresh');
        }
        $page_data['grades']     = $this->db->get('grade')->result_array();
        $page_data['page_name']  = 'grade';
        $page_data['page_title'] = get_phrase('manage_grade');
        $this->load->view('backend/index', $page_data);
    }
    
    /**********MANAGING CLASS ROUTINE******************/
    function class_routine($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
             $data['class_id']   = $this->input->post('class_id');
            $data['subject_id'] = $this->input->post('subject_id');
			  $data['day'] = $this->input->post('day');
            $data['time_start'] = $this->input->post('time_start') + (12 * ($this->input->post('starting_ampm') - 1));
			$data['time_startmint'] = $this->input->post('starting_mint') ;
            $data['time_end']   = $this->input->post('time_end') + (12 * ($this->input->post('ending_ampm') - 1));
            $data['time_endmint']   = $this->input->post('end_mint');			
            $this->db->insert('class_routine', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'admin/class_routine/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['class_id']   = $this->input->post('class_id');
            $data['subject_id'] = $this->input->post('subject_id');
            $data['time_start'] = $this->input->post('time_start') + (12 * ($this->input->post('starting_ampm') - 1));
			$data['time_startmint'] = $this->input->post('starting_mint') ;
            $data['time_end']   = $this->input->post('time_end') + (12 * ($this->input->post('ending_ampm') - 1));
            $data['time_endmint']   = $this->input->post('end_mint');

			$data['day']        = $this->input->post('day');
            
            $this->db->where('class_routine_id', $param2);
            $this->db->update('class_routine', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'admin/class_routine/', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('class_routine', array(
                'class_routine_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('class_routine_id', $param2);
            $this->db->delete('class_routine');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'admin/class_routine/', 'refresh');
        }
        $page_data['page_name']  = 'class_routine';
        $page_data['page_title'] = get_phrase('manage_class_routine');
        $this->load->view('backend/index', $page_data);
    }
	
	/****** DAILY ATTENDANCE *****************/
	function manage_attendance($date='',$month='',$year='',$class_id='')
	{
		if($this->session->userdata('admin_login')!=1)redirect('login' , 'refresh');
		
		if($_POST)
		{
			// Loop all the students of $class_id
            $students   =   $this->db->get_where('student', array('class_id' => $class_id))->result_array();
            foreach ($students as $row)
            {
                $attendance_status  =   $this->input->post('status_' . $row['student_id']);

                $this->db->where('student_id' , $row['student_id']);
                $this->db->where('date' , $this->input->post('date'));

                $this->db->update('attendance' , array('status' => $attendance_status));
            }

			$this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
			redirect(base_url() . 'admin/manage_attendance/'.$date.'/'.$month.'/'.$year.'/'.$class_id , 'refresh');
		}
        $page_data['date']     =	$date;
        $page_data['month']    =	$month;
        $page_data['year']     =	$year;
        $page_data['class_id'] =	$class_id;
		
        $page_data['page_name']  =	'manage_attendance';
        $page_data['page_title'] =	get_phrase('manage_daily_attendance');
		$this->load->view('backend/index', $page_data);
	}
	function attendance_selector()
	{
		redirect(base_url() . 'admin/manage_attendance/'.$this->input->post('date').'/'.
					$this->input->post('month').'/'.
						$this->input->post('year').'/'.
							$this->input->post('class_id') , 'refresh');
	}
    /******MANAGE BILLING / INVOICES WITH STATUS*****/
    function invoice($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        
        if ($param1 == 'create') {
            $data['student_id']         = $this->input->post('student_id');
            $data['title']              = $this->input->post('title');
            $data['description']        = $this->input->post('description');
            $data['amount']             = $this->input->post('amount');
            $data['amount_paid']        = $this->input->post('amount_paid');
            $data['due']                = $data['amount'] - $data['amount_paid'];
            $data['status']             = $this->input->post('status');
            $data['creation_timestamp'] = strtotime($this->input->post('date'));
            
            $this->db->insert('invoice', $data);
            $invoice_id = $this->db->insert_id();

            $data2['invoice_id']        =   $invoice_id;
            $data2['student_id']        =   $this->input->post('student_id');
            $data2['title']             =   $this->input->post('title');
            $data2['description']       =   $this->input->post('description');
            $data2['payment_type']      =  'income';
            $data2['method']            =   $this->input->post('method');
            $data2['amount']            =   $this->input->post('amount_paid');
            $data2['timestamp']         =   strtotime($this->input->post('date'));

            $this->db->insert('payment' , $data2);

            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'admin/invoice', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['student_id']         = $this->input->post('student_id');
            $data['title']              = $this->input->post('title');
            $data['description']        = $this->input->post('description');
            $data['amount']             = $this->input->post('amount');
            $data['status']             = $this->input->post('status');
            $data['creation_timestamp'] = strtotime($this->input->post('date'));
            
            $this->db->where('invoice_id', $param2);
            $this->db->update('invoice', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'admin/invoice', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('invoice', array(
                'invoice_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'take_payment') {
            $data['invoice_id']   =   $this->input->post('invoice_id');
            $data['student_id']   =   $this->input->post('student_id');
            $data['title']        =   $this->input->post('title');
            $data['description']  =   $this->input->post('description');
            $data['payment_type'] =   'income';
            $data['method']       =   $this->input->post('method');
            $data['amount']       =   $this->input->post('amount');
            $data['timestamp']    =   strtotime($this->input->post('timestamp'));
            $this->db->insert('payment' , $data);

            $data2['amount_paid']   =   $this->input->post('amount');
            $this->db->where('invoice_id' , $param2);
            $this->db->set('amount_paid', 'amount_paid + ' . $data2['amount_paid'], FALSE);
            $this->db->set('due', 'due - ' . $data2['amount_paid'], FALSE);
            $this->db->update('invoice');

            $this->session->set_flashdata('flash_message' , get_phrase('payment_successfull'));
            redirect(base_url() . 'admin/invoice', 'refresh');
        }

        if ($param1 == 'delete') {
            $this->db->where('invoice_id', $param2);
            $this->db->delete('invoice');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'admin/invoice', 'refresh');
        }
        $page_data['page_name']  = 'invoice';
        $page_data['page_title'] = get_phrase('manage_invoice/payment');
        $this->db->order_by('creation_timestamp', 'desc');
        $page_data['invoices'] = $this->db->get('invoice')->result_array();
        $this->load->view('backend/index', $page_data);
    }

    /**********ACCOUNTING********************/
    function income($param1 = '' , $param2 = '')
    {
       if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        $page_data['page_name']  = 'income';
        $page_data['page_title'] = get_phrase('incomes');
        $this->db->order_by('creation_timestamp', 'desc');
        $page_data['invoices'] = $this->db->get('invoice')->result_array();
        $this->load->view('backend/index', $page_data); 
    }

    function expense($param1 = '' , $param2 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['title']               =   $this->input->post('title');
            $data['expense_category_id'] =   $this->input->post('expense_category_id');
            $data['description']         =   $this->input->post('description');
            $data['payment_type']        =   'expense';
            $data['method']              =   $this->input->post('method');
            $data['amount']              =   $this->input->post('amount');
            $data['timestamp']           =   strtotime($this->input->post('timestamp'));
            $this->db->insert('payment' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'admin/expense', 'refresh');
        }

        if ($param1 == 'edit') {
            $data['title']               =   $this->input->post('title');
            $data['expense_category_id'] =   $this->input->post('expense_category_id');
            $data['description']         =   $this->input->post('description');
            $data['payment_type']        =   'expense';
            $data['method']              =   $this->input->post('method');
            $data['amount']              =   $this->input->post('amount');
            $data['timestamp']           =   strtotime($this->input->post('timestamp'));
            $this->db->where('payment_id' , $param2);
            $this->db->update('payment' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'admin/expense', 'refresh');
        }

        if ($param1 == 'delete') {
            $this->db->where('payment_id' , $param2);
            $this->db->delete('payment');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'admin/expense', 'refresh');
        }

        $page_data['page_name']  = 'expense';
        $page_data['page_title'] = get_phrase('expenses');
        $this->load->view('backend/index', $page_data); 
    }

    function expense_category($param1 = '' , $param2 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['name']   =   $this->input->post('name');
            $this->db->insert('expense_category' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'admin/expense_category');
        }
        if ($param1 == 'edit') {
            $data['name']   =   $this->input->post('name');
            $this->db->where('expense_category_id' , $param2);
            $this->db->update('expense_category' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'admin/expense_category');
        }
        if ($param1 == 'delete') {
            $this->db->where('expense_category_id' , $param2);
            $this->db->delete('expense_category');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'admin/expense_category');
        }

        $page_data['page_name']  = 'expense_category';
        $page_data['page_title'] = get_phrase('expense_category');
        $this->load->view('backend/index', $page_data);
    }

    /**********MANAGE LIBRARY / BOOKS********************/
    function book($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['name']        = $this->input->post('name');
            $data['description'] = $this->input->post('description');
            $data['price']       = $this->input->post('price');
            $data['author']      = $this->input->post('author');
            $data['class_id']    = $this->input->post('class_id');
            $data['status']      = $this->input->post('status');
            $this->db->insert('book', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'admin/book', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']        = $this->input->post('name');
            $data['description'] = $this->input->post('description');
            $data['price']       = $this->input->post('price');
            $data['author']      = $this->input->post('author');
            $data['class_id']    = $this->input->post('class_id');
            $data['status']      = $this->input->post('status');
            
            $this->db->where('book_id', $param2);
            $this->db->update('book', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'admin/book', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('book', array(
                'book_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('book_id', $param2);
            $this->db->delete('book');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'admin/book', 'refresh');
        }
        $page_data['books']      = $this->db->get('book')->result_array();
        $page_data['page_name']  = 'book';
        $page_data['page_title'] = get_phrase('manage_library_books');
        $this->load->view('backend/index', $page_data);
        
    }
    /**********MANAGE TRANSPORT / VEHICLES / ROUTES********************/
    function transport($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['route_name']        = $this->input->post('route_name');
            $data['number_of_vehicle'] = $this->input->post('number_of_vehicle');
            $data['description']       = $this->input->post('description');
            $data['route_fare']        = $this->input->post('route_fare');
            $this->db->insert('transport', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'admin/transport', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['route_name']        = $this->input->post('route_name');
            $data['number_of_vehicle'] = $this->input->post('number_of_vehicle');
            $data['description']       = $this->input->post('description');
            $data['route_fare']        = $this->input->post('route_fare');
            
            $this->db->where('transport_id', $param2);
            $this->db->update('transport', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'admin/transport', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('transport', array(
                'transport_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('transport_id', $param2);
            $this->db->delete('transport');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'admin/transport', 'refresh');
        }
        $page_data['transports'] = $this->db->get('transport')->result_array();
        $page_data['page_name']  = 'transport';
        $page_data['page_title'] = get_phrase('manage_transport');
        $this->load->view('backend/index', $page_data);
        
    }
    /**********MANAGE DORMITORY / HOSTELS / ROOMS ********************/
    function dormitory($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['name']           = $this->input->post('name');
            $data['number_of_room'] = $this->input->post('number_of_room');
            $data['description']    = $this->input->post('description');
            $this->db->insert('dormitory', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'admin/dormitory', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']           = $this->input->post('name');
            $data['number_of_room'] = $this->input->post('number_of_room');
            $data['description']    = $this->input->post('description');
            
            $this->db->where('dormitory_id', $param2);
            $this->db->update('dormitory', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'admin/dormitory', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('dormitory', array(
                'dormitory_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('dormitory_id', $param2);
            $this->db->delete('dormitory');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'admin/dormitory', 'refresh');
        }
        $page_data['dormitories'] = $this->db->get('dormitory')->result_array();
        $page_data['page_name']   = 'dormitory';
        $page_data['page_title']  = get_phrase('manage_dormitory');
        $this->load->view('backend/index', $page_data);
        
    }
    
    /***MANAGE EVENT / NOTICEBOARD, WILL BE SEEN BY ALL ACCOUNTS DASHBOARD**/
    function noticeboard($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        
        if ($param1 == 'create') {
            $data['notice_title']     = $this->input->post('notice_title');
            $data['notice']           = $this->input->post('notice');
            $data['create_timestamp'] = strtotime($this->input->post('create_timestamp'));
            $this->db->insert('noticeboard', $data);

            $check_sms_send = $this->input->post('check_sms');

            if ($check_sms_send == 1) {
                // sms sending configurations

                $parents  = $this->db->get('parent')->result_array();
                $students = $this->db->get('student')->result_array();
                $teachers = $this->db->get('teacher')->result_array();
                $date     = $this->input->post('create_timestamp');
                $message  = $data['notice_title'] . ' ';
                $message .= get_phrase('on') . ' ' . $date;
                foreach($parents as $row) {
                    $reciever_phone = $row['phone'];
                    $this->sms_model->send_sms($message , $reciever_phone);
                }
                foreach($students as $row) {
                    $reciever_phone = $row['phone'];
                    $this->sms_model->send_sms($message , $reciever_phone);
                }
                foreach($teachers as $row) {
                    $reciever_phone = $row['phone'];
                    $this->sms_model->send_sms($message , $reciever_phone);
                }
            }

            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'admin/noticeboard/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['notice_title']     = $this->input->post('notice_title');
            $data['notice']           = $this->input->post('notice');
            $data['create_timestamp'] = strtotime($this->input->post('create_timestamp'));
            $this->db->where('notice_id', $param2);
            $this->db->update('noticeboard', $data);

            $check_sms_send = $this->input->post('check_sms');

            if ($check_sms_send == 1) {
                // sms sending configurations

                $parents  = $this->db->get('parent')->result_array();
                $students = $this->db->get('student')->result_array();
                $teachers = $this->db->get('teacher')->result_array();
                $date     = $this->input->post('create_timestamp');
                $message  = $data['notice_title'] . ' ';
                $message .= get_phrase('on') . ' ' . $date;
                foreach($parents as $row) {
                    $reciever_phone = $row['phone'];
                    $this->sms_model->send_sms($message , $reciever_phone);
                }
                foreach($students as $row) {
                    $reciever_phone = $row['phone'];
                    $this->sms_model->send_sms($message , $reciever_phone);
                }
                foreach($teachers as $row) {
                    $reciever_phone = $row['phone'];
                    $this->sms_model->send_sms($message , $reciever_phone);
                }
            }

            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'admin/noticeboard/', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('noticeboard', array(
                'notice_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('notice_id', $param2);
            $this->db->delete('noticeboard');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'admin/noticeboard/', 'refresh');
        }
        $page_data['page_name']  = 'noticeboard';
        $page_data['page_title'] = get_phrase('manage_noticeboard');
        $page_data['notices']    = $this->db->get('noticeboard')->result_array();
        $this->load->view('backend/index', $page_data);
    }
    
    /* private messaging */

    function message($param1 = 'message_home', $param2 = '', $param3 = '') {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        if ($param1 == 'send_new') {
            $message_thread_code = $this->crud_model->send_new_private_message();
            $this->session->set_flashdata('flash_message', get_phrase('message_sent!'));
            redirect(base_url() . 'admin/message/message_read/' . $message_thread_code, 'refresh');
        }

        if ($param1 == 'send_reply') {
            $this->crud_model->send_reply_message($param2);  //$param2 = message_thread_code
            $this->session->set_flashdata('flash_message', get_phrase('message_sent!'));
            redirect(base_url() . 'admin/message/message_read/' . $param2, 'refresh');
        }

        if ($param1 == 'message_read') {
            $page_data['current_message_thread_code'] = $param2;  // $param2 = message_thread_code
            $this->crud_model->mark_thread_messages_read($param2);
        }

        $page_data['message_inner_page_name']   = $param1;
        $page_data['page_name']                 = 'message';
        $page_data['page_title']                = get_phrase('private_messaging');
        $this->load->view('backend/index', $page_data);
    }
    
    /*****SITE/SYSTEM SETTINGS*********/
    function system_settings($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'login', 'refresh');
        
        if ($param1 == 'do_update') {
			 
            $data['description'] = $this->input->post('system_name');
            $this->db->where('type' , 'system_name');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('system_title');
            $this->db->where('type' , 'system_title');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('address');
            $this->db->where('type' , 'address');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('phone');
            $this->db->where('type' , 'phone');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('paypal_email');
            $this->db->where('type' , 'paypal_email');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('currency');
            $this->db->where('type' , 'currency');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('system_email');
            $this->db->where('type' , 'system_email');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('system_name');
            $this->db->where('type' , 'system_name');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('language');
            $this->db->where('type' , 'language');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('text_align');
            $this->db->where('type' , 'text_align');
            $this->db->update('settings' , $data);
			
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated')); 
            redirect(base_url() . 'admin/system_settings/', 'refresh');
        }
        if ($param1 == 'upload_logo') {
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/logo.png');
            $this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
            redirect(base_url() . 'admin/system_settings/', 'refresh');
        }
        if ($param1 == 'change_skin') {
            $data['description'] = $param2;
            $this->db->where('type' , 'skin_colour');
            $this->db->update('settings' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('theme_selected')); 
            redirect(base_url() . 'admin/system_settings/', 'refresh'); 
        }
        $page_data['page_name']  = 'system_settings';
        $page_data['page_title'] = get_phrase('system_settings');
        $page_data['settings']   = $this->db->get('settings')->result_array();
        $this->load->view('backend/index', $page_data);
    }

    /*****SMS SETTINGS*********/
    function sms_settings($param1 = '' , $param2 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'login', 'refresh');
        if ($param1 == 'clickatell') {

            $data['description'] = $this->input->post('clickatell_user');
            $this->db->where('type' , 'clickatell_user');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('clickatell_password');
            $this->db->where('type' , 'clickatell_password');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('clickatell_api_id');
            $this->db->where('type' , 'clickatell_api_id');
            $this->db->update('settings' , $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'admin/sms_settings/', 'refresh');
        }

        if ($param1 == 'twilio') {

            $data['description'] = $this->input->post('twilio_account_sid');
            $this->db->where('type' , 'twilio_account_sid');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('twilio_auth_token');
            $this->db->where('type' , 'twilio_auth_token');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('twilio_sender_phone_number');
            $this->db->where('type' , 'twilio_sender_phone_number');
            $this->db->update('settings' , $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'admin/sms_settings/', 'refresh');
        }

        if ($param1 == 'active_service') {

            $data['description'] = $this->input->post('active_sms_service');
            $this->db->where('type' , 'active_sms_service');
            $this->db->update('settings' , $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'admin/sms_settings/', 'refresh');
        }

        $page_data['page_name']  = 'sms_settings';
        $page_data['page_title'] = get_phrase('sms_settings');
        $page_data['settings']   = $this->db->get('settings')->result_array();
        $this->load->view('backend/index', $page_data);
    }
    
    /*****LANGUAGE SETTINGS*********/
    function manage_language($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'login', 'refresh');
		
		if ($param1 == 'edit_phrase') {
			$page_data['edit_profile'] 	= $param2;	
		}
		if ($param1 == 'update_phrase') {
			$language	=	$param2;
			$total_phrase	=	$this->input->post('total_phrase');
			for($i = 1 ; $i < $total_phrase ; $i++)
			{
				//$data[$language]	=	$this->input->post('phrase').$i;
				$this->db->where('phrase_id' , $i);
				$this->db->update('language' , array($language => $this->input->post('phrase'.$i)));
			}
			redirect(base_url() . 'admin/manage_language/edit_phrase/'.$language, 'refresh');
		}
		if ($param1 == 'do_update') {
			$language        = $this->input->post('language');
			$data[$language] = $this->input->post('phrase');
			$this->db->where('phrase_id', $param2);
			$this->db->update('language', $data);
			$this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
			redirect(base_url() . 'admin/manage_language/', 'refresh');
		}
		if ($param1 == 'add_phrase') {
			$data['phrase'] = $this->input->post('phrase');
			$this->db->insert('language', $data);
			$this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
			redirect(base_url() . 'admin/manage_language/', 'refresh');
		}
		if ($param1 == 'add_language') {
			$language = $this->input->post('language');
			$this->load->dbforge();
			$fields = array(
				$language => array(
					'type' => 'LONGTEXT'
				)
			);
			$this->dbforge->add_column('language', $fields);
			
			$this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
			redirect(base_url() . 'admin/manage_language/', 'refresh');
		}
		if ($param1 == 'delete_language') {
			$language = $param2;
			$this->load->dbforge();
			$this->dbforge->drop_column('language', $language);
			$this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
			
			redirect(base_url() . 'admin/manage_language/', 'refresh');
		}
		$page_data['page_name']        = 'manage_language';
		$page_data['page_title']       = get_phrase('manage_language');
		//$page_data['language_phrases'] = $this->db->get('language')->result_array();
		$this->load->view('backend/index', $page_data);	
    }
    
    /*****BACKUP / RESTORE / DELETE DATA PAGE**********/
    function backup_restore($operation = '', $type = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        
        if ($operation == 'create') {
            $this->crud_model->create_backup($type);
        }
        if ($operation == 'restore') {
            $this->crud_model->restore_backup();
            $this->session->set_flashdata('backup_message', 'Backup Restored');
            redirect(base_url() . 'admin/backup_restore/', 'refresh');
        }
        if ($operation == 'delete') {
            $this->crud_model->truncate($type);
            $this->session->set_flashdata('backup_message', 'Data removed');
            redirect(base_url() . 'admin/backup_restore/', 'refresh');
        }
        
        $page_data['page_info']  = 'Create backup / restore from backup';
        $page_data['page_name']  = 'backup_restore';
        $page_data['page_title'] = get_phrase('manage_backup_restore');
        $this->load->view('backend/index', $page_data);
    }
    
    /******MANAGE OWN PROFILE AND CHANGE PASSWORD***/
    function manage_profile($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'login', 'refresh');
        if ($param1 == 'update_profile_info') {
            $data['name']  = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            
            $this->db->where('admin_id', $this->session->userdata('admin_id'));
            $this->db->update('admin', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/admin_image/' . $this->session->userdata('admin_id') . '.jpg');
            $this->session->set_flashdata('flash_message', get_phrase('account_updated'));
            redirect(base_url() . 'admin/manage_profile/', 'refresh');
        }
        if ($param1 == 'change_password') {
            $data['password']             = md5($this->input->post('password'));
            $data['new_password']         = md5($this->input->post('new_password'));
            $data['confirm_new_password'] = md5($this->input->post('confirm_new_password'));
            //print_r($data);
            //exit();
            $current_password = $this->db->get_where('admin', array(
                'admin_id' => $this->session->userdata('admin_id')
            ))->row()->password;
            if ($current_password == $data['password'] && $data['new_password'] == $data['confirm_new_password']) {
                $this->db->where('admin_id', $this->session->userdata('admin_id'));
                $this->db->update('admin', array(
                    'password' => $data['new_password']
                ));
                $this->session->set_flashdata('flash_message', get_phrase('password_updated'));
            } else {
                $this->session->set_flashdata('flash_message', get_phrase('password_mismatch'));
            }
            redirect(base_url() . 'admin/manage_profile/', 'refresh');
        }
        $page_data['page_name']  = 'manage_profile';
        $page_data['page_title'] = get_phrase('manage_profile');
        $page_data['edit_data']  = $this->db->get_where('admin', array(
            'admin_id' => $this->session->userdata('admin_id')
        ))->result_array();
        $this->load->view('backend/index', $page_data);
    }
    
}