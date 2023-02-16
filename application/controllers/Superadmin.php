<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*  
 *  @author     : Joyonto Roy
 *  date        : 27 september, 2014
 *  Ekattor School Management System Pro
 *  http://codecanyon.net/user/Creativeitem
 *  support@creativeitem.com
 */

class Superadmin extends CI_Controller
{
    
    
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');

        $this->load->model('Crud_model');
       // date_default_timezone_set("Asia/Karachi");
        define('CFG_TIME_ZONE', 'Asia/Karachi');
       /*cache control*/
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        
    }
    
    /***default functin, redirects to login page if no admin logged in yet***/
    public function index()
    {
        if ($this->session->userdata('superadmin_login') != 1)
            redirect(base_url() . 'login', 'refresh');
        if ($this->session->userdata('superadmin_login') == 1)
            redirect(base_url() . 'admin/dashboard', 'refresh');
    }
    
    /***ADMIN DASHBOARD***/
    function dashboard()
    {
        if ($this->session->userdata('superadmin_login') != 1)
        redirect(base_url().'login', 'refresh');
        
        $page_data['page_name']  = 'dashboard';
        $page_data['page_title'] = 'Superadmin Dashboard';
        $this->load->view('backend/index', $page_data);
    }

    /* account settings */
    function back_account($param1 = '')
    {
        if ($this->session->userdata('superadmin_login') != 1)
        redirect(base_url().'login', 'refresh');

        if ($param1 == 'create') {
            $superadmin_id = $this->input->post('superadmin_id');
            $check_admin = $this->db->get_where('sadmin_account_settings', array('sadmin_account_id' => $superadmin_id))->result_array();
            $count = count($check_admin);
            if ($count == 0) {
                $data = array(
                    'sadmin_account_id' => $superadmin_id,
                    'bank_name' => $this->input->post('bank_name'),
                    'branch_code' => $this->input->post('branch_code'),
                    'account_no' => $this->input->post('account_no')
                    );
                $insert_id = $this->crud_model->create_data('sadmin_account_settings', $data);
                $this->session->set_flashdata('flash_message' , get_phrase('settings_inserterd_successfully'));
                redirect(base_url() . 'superadmin/back_account/', 'refresh');
                
            } else if ($count > 0){
                $data = array(
                    'sadmin_account_id' => $superadmin_id,
                    'bank_name' => $this->input->post('bank_name'),
                    'branch_code' => $this->input->post('branch_code'),
                    'account_no' => $this->input->post('account_no')
                    );
                $insert_id = $this->crud_model->update_data('sadmin_account_settings', 'sadmin_account_id', $data, $superadmin_id);
                $this->session->set_flashdata('flash_message' , get_phrase('settings_updated_successfully'));
                redirect(base_url() . 'superadmin/back_account/', 'refresh');
            }
            //echo $superadmin_id;
            
        }
        $page_data['settings_data'] = $this->db->get_where('sadmin_account_settings', array('sadmin_account_id' => $this->session->userdata('superadmin_id')))->result_array();
        $page_data['page_name']  = 'back_account_settings';
        $page_data['page_title'] = 'Manage Bank Account Settings';
        $this->load->view('backend/index', $page_data);
    }
    /* account settings ends*/    


    /* employeer packages settings */
    // function emp_packages($param1 = '')
    // {
    //     if ($this->session->userdata('superadmin_login') != 1)
    //     redirect(base_url().'login', 'refresh');

    //     if ($param1 == 'create') {
    //         $superadmin_id = $this->input->post('superadmin_id');
    //          $count = $this->db->count_all_results('emp_packages');
    //         //die(); 
    //         if ($count == 0) {
    //             $data = array(
    //                 'emp_basic' => $this->input->post('emp_basic'),
    //                 'emp_gof' => $this->input->post('emp_gof'),
    //                 'emp_y' => $this->input->post('emp_y'),
    //                 'emp_m' => $this->input->post('emp_m')
    //                 );
    //             $insert_id = $this->crud_model->create_data('emp_packages', $data);
    //             $this->session->set_flashdata('flash_message' , get_phrase('data_inserterd_successfully'));
    //             redirect(base_url() . 'superadmin/emp_packages/', 'refresh');
                
    //         } else if ($count > 0){
    //             $emp_id = $this->input->post('emp_id');
             
    //             $data = array(
    //                 'emp_basic' => $this->input->post('emp_basic'),
    //                 'emp_gof' => $this->input->post('emp_gof'),
    //                 'emp_y' => $this->input->post('emp_y'),
    //                 'emp_m' => $this->input->post('emp_m')
    //                 );
    //             $insert_id = $this->crud_model->update_data('emp_packages', 'emp_id', $data, $emp_id);
    //             $this->session->set_flashdata('flash_message' , get_phrase('data_updated_successfully'));
    //             redirect(base_url() . 'superadmin/emp_packages/', 'refresh');
    //         }
    //         //echo $superadmin_id;
            
    //     }
    //     $page_data['settings_data'] = $this->crud_model->get_data('emp_packages');
    //     $page_data['page_name']  = 'emp_packages';
    //     $page_data['page_title'] = 'Manage Employeer Payment Packages';
    //     $this->load->view('backend/index', $page_data);
    // }
    /* employeer packages settings ends*/


        /* jobseekar packages settings */
    function jbs_packages_old($param1 = '')
    {
        if ($this->session->userdata('superadmin_login') != 1)
        redirect(base_url().'login', 'refresh');

        if ($param1 == 'create') {
           
             $count = $this->db->count_all_results('jbs_packages');
            //die(); 
            if ($count == 0) {
                $data = array(
                    'jbs_premium' => $this->input->post('jbs_premium')
                    );
                $insert_id = $this->crud_model->create_data('jbs_packages', $data);
                $this->session->set_flashdata('flash_message' , get_phrase('data_inserterd_successfully'));
                redirect(base_url() . 'superadmin/jbs_packages/', 'refresh');
                
            } else if ($count > 0){
                $jbs_id = $this->input->post('jbs_id');
               
                $data = array(
                    'jbs_premium' => $this->input->post('jbs_premium')
                    );
                $insert_id = $this->crud_model->update_data('jbs_packages', 'jbs_id', $data, $jbs_id);
                $this->session->set_flashdata('flash_message' , get_phrase('data_updated_successfully'));
                redirect(base_url() . 'superadmin/jbs_packages/', 'refresh');
            }
            //echo $superadmin_id;
            
        }
        $page_data['settings_data'] = $this->crud_model->get_data('jbs_packages');
        $page_data['page_name']  = 'jbs_packages';
        $page_data['page_title'] = 'Manage Employeer Payment Packages';
        $this->load->view('backend/index', $page_data);
    }
    /* jobseekar packages settings ends*/    
    
    /****jobseeakrs starts*****/
function jobseekars($param1 = '',$param2 = '', $param3 = '')
{
    if ($this->session->userdata('superadmin_login') != 1)
            redirect(base_url().'login', 'refresh');

        if ($param1 == 'do_deactivate') {
            //echo $param2;

            $data = array(
                'user_status' => '0'
                );
            $resut = $this->Crud_model->update_data('users', 'id', $data, $param2);
            $this->session->set_flashdata('flash_message' , get_phrase('data_deactivated_successfully'));
            redirect(base_url().'superadmin/jobseekars', 'refresh');
        }

        if ($param1 == 'do_activate') {
            //echo $param2;

            $data = array(
                'user_status' => '1'
                );
            $resut = $this->Crud_model->update_data('users', 'id', $data, $param2);
            $this->session->set_flashdata('flash_message' , get_phrase('data_deactivated_successfully'));
            redirect(base_url().'superadmin/jobseekars', 'refresh');
        }
        
        //pagination
        $config_base_ulr = base_url() . "superadmin/jobseekars";
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
// jobseekar ends

function employers($param1 = '',$param2 = '', $param3 = '')
{
    if ($this->session->userdata('superadmin_login') != 1)
            redirect(base_url().'login', 'refresh');
        

        if ($param1 == 'do_deactivate') {
     /*       echo $param2;
die();*/
            $data = array(
                'user_status' => '0'
                );
            $resut = $this->Crud_model->update_data('users', 'id', $data, $param2);
            $this->session->set_flashdata('flash_message' , get_phrase('data_deactivated_successfully'));
            redirect(base_url().'superadmin/employers', 'refresh');
        }

        if ($param1 == 'do_activate') {
            //echo $param2;

            $data = array(
                'user_status' => '1'
                );
            $resut = $this->Crud_model->update_data('users', 'id', $data, $param2);
            $this->session->set_flashdata('flash_message' , get_phrase('data_deactivated_successfully'));
            redirect(base_url().'superadmin/employers', 'refresh');
        }

        //pagination
        $config_base_ulr = base_url() . "superadmin/employers";
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
    if ($this->session->userdata('superadmin_login') != 1)
            redirect(base_url().'login', 'refresh');
            
        if ($param1 == 'create') {
            
            $data = array(
                    'cat_name'   => $this->input->post('cat_name')
                );
                //print_r($data); exit;
        $lastid = $this->Crud_model->create_data('tbl_cat',$data);
        
        $this->session->set_flashdata('flash_message' , get_phrase('category_added_successfully'));
        redirect(base_url() . 'superadmin/category/', 'refresh');
        
        } else if ($param1 == 'do_update') 
        {
            $data = array(
                'cat_name' => $this->input->post('cat_name')
                );
            $id = $this->input->post('cat_id');
            $lastid = $this->Crud_model->update_data('tbl_cat', 'cat_id', $data, $id);
            $this->session->set_flashdata('flash_message' , get_phrase('category_updated_successfully'));
            redirect(base_url() . 'superadmin/category/', 'refresh');
        } else if ($param1 == 'do_delete') 
        {
            $id = $param2;
            $resut = $this->Crud_model->delete_data('tbl_cat', 'cat_id', $id);
            $this->session->set_flashdata('flash_message' , get_phrase('category_deleted_successfully'));

            redirect(base_url() . 'superadmin/category/', 'refresh');
        }
        $page_data['categories']    = $this->Crud_model->get_categories();
         //print_r($page_data);;
        $page_data['page_name']  = 'category';
        $page_data['page_title'] = get_phrase('manage_categories');
        $this->load->view('backend/index', $page_data);
}
 function categoryadd()
    {
        if ($this->session->userdata('superadmin_login') != 1)
        redirect(base_url().'login', 'refresh');
        
        $page_data['page_name']  = 'modal_teacher_add';
        $page_data['page_title'] = 'manage_categories';
        $this->load->view('backend/index', $page_data);
    }

function admin($param1 = '', $param2 = '', $param3 = '')
{
    if ($this->session->userdata('superadmin_login') != 1)
            redirect(base_url().'login', 'refresh');
        if ($param1 == 'create') {
            $this->db->where('email',$this->input->post('email'));
            $count = $this->db->count_all_results('admin');
            //echo $count;
            //die();
            if($count > 0){
                $this->session->set_flashdata('flash_message' , 'Email has already taken');
            } else {
                $data = array(
                    'name'   => $this->input->post('name'),
                    'email'   => $this->input->post('email'),
                    'password'   => md5($this->input->post('pass')),
                    'level' => '1'
                );
            $lastid = $this->Crud_model->create_data('admin',$data);         
            $this->session->set_flashdata('flash_message' , get_phrase('admin_added_successfully'));
            }
            
                //print_r($data); exit;
        
        redirect(base_url() . 'superadmin/admin/', 'refresh');
        } else if ($param1 == 'do_update') 
        {

            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email')
                );
            //print_r($data);
            //die();
            $id = $this->input->post('admin_id');
            $lastid = $this->Crud_model->update_data('admin', 'admin_id', $data, $id);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated_successfully'));
            redirect(base_url() . 'superadmin/admin/', 'refresh');
        } else if ($param1 == 'do_delete') 
        {
            $id = $param2;
            $resut = $this->Crud_model->delete_data('admin', 'admin_id', $id);
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted_successfully'));

            redirect(base_url() . 'superadmin/admin/', 'refresh');
        }
        //pagination
        $config_base_ulr = base_url() . "superadmin/admin";
        $per_page = 10;
        //pagination_data($column_id, $order_by, $table_name, $config_base_ulr , $per_page)
        $press = $this->Crud_model->pagination_data('admin_id', 'desc', 'admin',$config_base_ulr, $per_page);
        $page_data['categories'] =$press;
        $str_links = $this->pagination->create_links();
        $page_data["links"] = explode('&nbsp;',$str_links );
        // pagination

         //print_r($page_data);;
        $page_data['page_name']  = 'admin';
        $page_data['page_title'] = get_phrase('manage_admin');
        $this->load->view('backend/index', $page_data);
}
 function adminadd()
    {
        if ($this->session->userdata('superadmin_login') != 1)
        redirect(base_url().'login', 'refresh');
        
        $page_data['page_name']  = 'modal_admin_add';
        $page_data['page_title'] = 'manage_admin';
        $this->load->view('backend/index', $page_data);
    }

/* payments */

function pending_payments($param1 = '', $param2 = '', $param3 = '')
{
    if ($this->session->userdata('superadmin_login') != 1)
            redirect(base_url().'login', 'refresh');
        if ($param1 == 'do_activate') 
        {
            $id = $param2;
            //update_data($tablename, $attr, $data, $id)
            //echo $id;
             // emial send code
            $this->load->model('user');
             $email_qry = $this->user->email_qry($param3);
             $emp_email = $email_qry[0]['email'];
             //die();
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
                                                            Message: Message here
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
         
            $data = array(
                'payment_confirmation' => '1'
                );
            $resut = $this->Crud_model->update_data('payments', 'id', $data, $id);
            $this->session->set_flashdata('flash_message' , get_phrase('data_acitvated_successfully'));

            redirect(base_url() . 'superadmin/pending_payments/', 'refresh');
        }
        //pagination
        $config_base_ulr = base_url() . "superadmin/pending_payments";
        $per_page = 100;
        //pagination_data($column_id, $order_by, $table_name, $config_base_ulr , $per_page)
        $press = $this->Crud_model->pagination_pendingpaymentsdata('id', 'desc', 'payments',$config_base_ulr, $per_page);
            $page_data['categories'] =$press;
        $str_links = $this->pagination->create_links();
        $page_data["links"] = explode('&nbsp;',$str_links );
        // pagination

         //print_r($page_data);;
        $page_data['page_name']  = 'pending_payments';
        $page_data['page_title'] = 'Manage Pending Payments';
        $this->load->view('backend/index', $page_data);
}

function approved_payments($param1 = '', $param2 = '', $param3 = '')
{
    if ($this->session->userdata('superadmin_login') != 1)
            redirect(base_url().'login', 'refresh');
            
       

        //pagination
        $config_base_ulr = base_url() . "superadmin/pending_payments";
        $per_page = 100;
        //pagination_data($column_id, $order_by, $table_name, $config_base_ulr , $per_page)
        $press = $this->Crud_model->pagination_aprovedpaymentsdata('id', 'desc', 'payments',$config_base_ulr, $per_page);
            $page_data['categories'] =$press;
        $str_links = $this->pagination->create_links();
        $page_data["links"] = explode('&nbsp;',$str_links );
        // pagination

         //print_r($page_data);;
        $page_data['page_name']  = 'approved_payments';
        $page_data['page_title'] = 'Manage Approved Payments';
        $this->load->view('backend/index', $page_data);
}
/* payments */



/* jobseekar payments */

function jpending_payments($param1 = '', $param2 = '', $param3 = '')
{
    if ($this->session->userdata('superadmin_login') != 1)
            redirect(base_url().'login', 'refresh');
        if ($param1 == 'do_activate') 
        {
            $id = $param2;
            //update_data($tablename, $attr, $data, $id)
            //echo $id;
            $data = array(
                'payment_confirmation' => '1'
                );
            $resut = $this->Crud_model->update_data('jobseekar_payments', 'jp_id', $data, $id);
            $this->session->set_flashdata('flash_message' , get_phrase('data_acitvated_successfully'));

            redirect(base_url() . 'superadmin/jpending_payments/', 'refresh');
        }
        //pagination
        $config_base_ulr = base_url() . "superadmin/jpending_payments";
        $per_page = 100;
        //pagination_data($column_id, $order_by, $table_name, $config_base_ulr , $per_page)
        $press = $this->Crud_model->pagination_jpendingpaymentsdata('jobseekar_payments.jp_id', 'desc', 'jobseekar_payments',$config_base_ulr, $per_page);
            $page_data['categories'] =$press;
        $str_links = $this->pagination->create_links();
        $page_data["links"] = explode('&nbsp;',$str_links );
        // pagination

         //print_r($page_data);;
        $page_data['page_name']  = 'jpending_payments';
        $page_data['page_title'] = 'Manage Pending Payments';
        $this->load->view('backend/index', $page_data);
}

function japproved_payments($param1 = '', $param2 = '', $param3 = '')
{
    if ($this->session->userdata('superadmin_login') != 1)
            redirect(base_url().'login', 'refresh');
        if ($param1 == 'do_activate') 
        {
            $id = $param2;
            //update_data($tablename, $attr, $data, $id)
            //echo $id;
            $data = array(
                'payment_confirmation' => '1'
                );
            $resut = $this->Crud_model->update_data('jobseekar_payments', 'jp_id', $data, $id);
            $this->session->set_flashdata('flash_message' , get_phrase('data_acitvated_successfully'));

            redirect(base_url() . 'superadmin/jpending_payments/', 'refresh');
        }
        //pagination
        $config_base_ulr = base_url() . "superadmin/jpending_payments";
        $per_page = 100;
        //pagination_data($column_id, $order_by, $table_name, $config_base_ulr , $per_page)
        $press = $this->Crud_model->pagination_japprovedpaymentsdata('jobseekar_payments.jp_id', 'desc', 'jobseekar_payments',$config_base_ulr, $per_page);
            $page_data['categories'] =$press;
        $str_links = $this->pagination->create_links();
        $page_data["links"] = explode('&nbsp;',$str_links );
        // pagination

         //print_r($page_data);;
        $page_data['page_name']  = 'japproved_payments';
        $page_data['page_title'] = 'Manage Pending Payments';
        $this->load->view('backend/index', $page_data);
}


/* jobseeekar payments */




/* jobs */

function pending_jobs($param1 = '', $param2 = '', $param3 = '')
{
    if ($this->session->userdata('superadmin_login') != 1)
            redirect(base_url().'login', 'refresh');
             if ($param1 == 'do_delete'){
                  $id = $param2;
            $resut = $this->Crud_model->delete_data('tbl_job', 'jobs_id', $id);
            $this->session->set_flashdata('flash_message' , get_phrase('Job_deleted_successfully'));

            redirect(base_url() . 'superadmin/pending_jobs/', 'refresh');
             }
        elseif ($param1 == 'do_activate') 
        {
            $id = $param2;
            //update_data($tablename, $attr, $data, $id)
             
               
                //echo 'test';
                //echo $param3;
             
            
            // emial send code
            $this->load->model('user');
             $email_qry = $this->user->email_qry($param3);
             $emp_email = $email_qry[0]['email'];
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
                                                            Message: Message here
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
            //die();
            
            $data = array(
                'job_status' => '1'
                );
            $resut = $this->Crud_model->update_data('tbl_job', 'jobs_id', $data, $id);

/* send email for job notificaton to registered user */
  $job_row = $this->db->get_where('tbl_job',array('jobs_id'=>$id))->result_array();

$cat_id = $job_row[0]['cat_id'];

$job_title = $job_row[0]['job_title'];

     //die();           
    //$this->db->select('cat_id');
    $this->db->select('users.email,users.first_name');
    $this->db->join('users','users.id=tbl_user_cat.user_id','left');
    $this->db->where('tbl_user_cat.cat_id',$cat_id);
    $tbl_user_cat = $this->db->get('tbl_user_cat')->result_array();
//print_r($tbl_user_cat);
    foreach ($tbl_user_cat as $row) {
     $email = $row['email'];
     $user_name = $row['first_name'];
    //ie();
       if (!empty($email)) {
 $notify_email = $email;

            /* email code */

           

$notify_message = '<div style="font-family:HelveticaNeue-Light,Arial,sans-serif;background-color:#eeeeee">
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
                        <p style="color:#404040;font-size:16px;line-height:24px;font-weight:lighter;padding:0;padding-left:30px;margin:0">Hi  '.$user_name.', 
                         
                        </p>
                    </td>
              </tr>

              <tr>
                <td colspan="4" align="left"><h2 style="font-size:16px; color:#1565B7; margin-left:30px;">Your Job Alert</h2></td>
            </tr>

            <tr><td colspan="5" align="left">
                        <p style="color:#404040;font-size:16px;line-height:24px;font-weight:lighter;padding:0;padding-left:30px;margin:0">Based on your preferences here are the Job </p>
                    </td>
              </tr>
              <hr/>

               </tbody>
            </table>
             
    <tr>
    <td colspan="4">
        <div style="width:100%;text-align:left;margin:30px 30px">
            <table align="left" cellpadding="0" cellspacing="0" style="font-family:HelveticaNeue-Light,Arial,sans-serif;margin:0 auto;padding:0">
            <tbody>

                <tr>
                <td colspan="4" align="left"><h2 style="font-size:16px; color:#9CCB46;">'.$job_title.'</h2></td>
                </tr>

                <tr>
                    <td align="center" style="margin:0;text-align:left"><a href="http://www.jobs360.com.pk/users/job_detail/'.$id.'" style="font-size:14px;line-height:14px;text-decoration:none;color:#ffffff;font-weight:bold;border-radius:2px;background-color:#0096d3;padding:14px 12px;display:block;letter-spacing:1.2px" target="_blank">Apply Now</a></td>
                </tr>
            </tbody>
            </table>
        </div>
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
                                  <div style="color:#a3a3a3;font-size:12px;line-height:12px;padding:0;margin:0">&copy; 2017 JOBS360.</div>
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
         $this->email->to($notify_email);
         $this->email->subject('Job Alert'); 
         $this->email->message($notify_message);
         $this->email->send();
         $this->email->send();
          
         
            /* **** EMAIL CODE ****** */
           
       }
       
    }      
/* ****** EMAIL NOTIFICATON **************** */
//die();
            $this->session->set_flashdata('flash_message' , get_phrase('job_acitvated_successfully'));

            redirect(base_url() . 'superadmin/pending_jobs/', 'refresh');
        }
        //pagination
        $config_base_ulr = base_url() . "superadmin/pending_jobs";
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
    if ($this->session->userdata('superadmin_login') != 1)
            redirect(base_url().'login', 'refresh');
        
             if ($param1 == 'do_activate') 
        {
          $id = $param2;
            $data = array(
                'job_status' => '0'
                );
            $resut = $this->Crud_model->update_data('tbl_job', 'jobs_id', $data, $id);
            $this->session->set_flashdata('flash_message' , get_phrase('job_deacitvated_successfully'));

            redirect(base_url() . 'superadmin/approved_jobs/', 'refresh');
        
        }
        //pagination
        $config_base_ulr = base_url() . "superadmin/approved_jobs";
        $per_page = 10;
        //pagination_data($column_id, $order_by, $table_name, $config_base_ulr , $per_page)
        $press = $this->Crud_model->pagination_approvedjobsdata('jobs_id', 'desc', 'tbl_job',$config_base_ulr, $per_page);
            $page_data['categories'] =$press;
        $str_links = $this->pagination->create_links();
        $page_data["links"] = explode('&nbsp;',$str_links );
        // pagination

         //print_r($page_data);;
        $page_data['page_name']  = 'approved_jobs';
        $page_data['page_title'] = 'Manage Approved Jobs';
        $this->load->view('backend/index', $page_data);
}

/* jobs */


function subcategory($param1 = '', $param2 = '', $param3 = '')
{

    if ($this->session->userdata('superadmin_login') != 1)
            redirect(base_url().'login', 'refresh');
            
    if($param1 == 'create')
    {
        $data = array(
            'cat_id' => $this->input->post('cat_id'),
            'subcat_name' => $this->input->post('subcat_name')
            );
        $lastid = $this->Crud_model->create_data('tbl_subcat', $data);
        $this->session->set_flashdata('flash_message' , get_phrase('subcategory_added_successfully'));
        
        redirect(base_url() . 'superadmin/subcategory/', 'refresh');
    } else if($param1 == 'do_delete')
    {
            $id = $param2;
            $resut = $this->Crud_model->delete_data('tbl_subcat', 'subcat_id', $id);
            $this->session->set_flashdata('flash_message' , get_phrase('subcategory_deleted_successfully'));

            redirect(base_url() . 'superadmin/subcategory/', 'refresh');
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
        redirect(base_url() . 'superadmin/subcategory/', 'refresh');
    }
    $page_data['subcategory'] = $this->Crud_model->get_subcat();
    $page_data['page_name']  = 'subcategory';
    $page_data['page_title'] = get_phrase('manage_subcategories');
    $this->load->view('backend/index', $page_data);
}
     function subcategoryadd()
    {
        if ($this->session->userdata('superadmin_login') != 1)
        redirect(base_url().'login', 'refresh');
        
        $page_data['page_name']  = 'modal_subcat_add';
        $page_data['page_title'] = 'manage_subcategories';
        $this->load->view('backend/index', $page_data);
    }
    
    
    
        
    
    /****MANAGE TEACHERS*****/
    function clientemail($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('superadmin_login') != 1)
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


    /*****SITE/SYSTEM SETTINGS*********/
    function system_settings($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('superadmin_login') != 1)
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
        if ($this->session->userdata('superadmin_login') != 1)
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
        if ($this->session->userdata('superadmin_login') != 1)
            redirect(base_url() . 'login', 'refresh');
        
        if ($param1 == 'edit_phrase') {
            $page_data['edit_profile']  = $param2;  
        }
        if ($param1 == 'update_phrase') {
            $language   =   $param2;
            $total_phrase   =   $this->input->post('total_phrase');
            for($i = 1 ; $i < $total_phrase ; $i++)
            {
                //$data[$language]  =   $this->input->post('phrase').$i;
                $this->db->where('phrase_id' , $i);
                $this->db->update('language' , array($language => $this->input->post('phrase'.$i)));
            }
            redirect(base_url() . 'superadmin/manage_language/edit_phrase/'.$language, 'refresh');
        }
        if ($param1 == 'do_update') {
            $language        = $this->input->post('language');
            $data[$language] = $this->input->post('phrase');
            $this->db->where('phrase_id', $param2);
            $this->db->update('language', $data);
            $this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
            redirect(base_url() . 'superadmin/manage_language/', 'refresh');
        }
        if ($param1 == 'add_phrase') {
            $data['phrase'] = $this->input->post('phrase');
            $this->db->insert('language', $data);
            $this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
            redirect(base_url() . 'superadmin/manage_language/', 'refresh');
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
            redirect(base_url() . 'superadmin/manage_language/', 'refresh');
        }
        if ($param1 == 'delete_language') {
            $language = $param2;
            $this->load->dbforge();
            $this->dbforge->drop_column('language', $language);
            $this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
            
            redirect(base_url() . 'superadmin/manage_language/', 'refresh');
        }
        $page_data['page_name']        = 'manage_language';
        $page_data['page_title']       = get_phrase('manage_language');
        //$page_data['language_phrases'] = $this->db->get('language')->result_array();
        $this->load->view('backend/index', $page_data); 
    }
    
    /*****BACKUP / RESTORE / DELETE DATA PAGE**********/
    function backup_restore($operation = '', $type = '')
    {
        if ($this->session->userdata('superadmin_login') != 1)
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
        if ($this->session->userdata('superadmin_login') != 1)
            redirect(base_url() . 'login', 'refresh');
        if ($param1 == 'update_profile_info') {
            $data['name']  = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            /*print_r($data);
            die();*/
            
            $this->db->where('superadmin_id', $this->session->userdata('superadmin_id'));
            $this->db->update('superadmin', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/admin_image/' . $this->session->userdata('superadmin_id') . '.jpg');
            $this->session->set_flashdata('flash_message', get_phrase('account_updated'));
            redirect(base_url() . 'superadmin/manage_profile/', 'refresh');
        }
        if ($param1 == 'change_password') {
            $data['password']             = md5($this->input->post('password'));
           
            $data['new_password']         = md5($this->input->post('new_password'));
            $data['confirm_new_password'] = md5($this->input->post('confirm_new_password'));
            //print_r($data);
            //exit();
            $current_password = $this->db->get_where('superadmin', array(
                'superadmin_id' => $this->session->userdata('superadmin_id')
            ))->row()->password;
            if ($current_password == $data['password'] && $data['new_password'] == $data['confirm_new_password']) {
                $this->db->where('superadmin_id', $this->session->userdata('superadmin_id'));
                $this->db->update('superadmin', array(
                    'password' => $data['new_password']
                ));
                $this->session->set_flashdata('flash_message', get_phrase('password_updated'));
            } else {
                $this->session->set_flashdata('flash_message', get_phrase('password_mismatch'));
            }
            redirect(base_url() . 'superadmin/manage_profile/', 'refresh');
        }
        $page_data['page_name']  = 'manage_profile';
        $page_data['page_title'] = get_phrase('manage_profile');
        $page_data['edit_data']  = $this->db->get_where('superadmin', array(
            'superadmin_id' => $this->session->userdata('superadmin_id')
        ))->result_array();
        $this->load->view('backend/index', $page_data);
    }




   function jbs_packages($param1 = '', $param2 = '', $param3 = '')
{

    if ($this->session->userdata('superadmin_login') != 1)
            redirect(base_url().'login', 'refresh');
            
    if($param1 == 'create')
    {
        $data = array(
            'name' => $this->input->post('name'),
            'price' => $this->input->post('price'),
            'duration' => $this->input->post('duration')
            );
        $lastid = $this->Crud_model->create_data('jbs_packages', $data);
        $this->session->set_flashdata('flash_message' , get_phrase('package_added_successfully'));
        
        redirect(base_url() . 'superadmin/jbs_packages/', 'refresh');
    } else if($param1 == 'do_delete')
    {
            $id = $param2;
            $resut = $this->Crud_model->delete_data('jbs_packages', 'jbs_id', $id);
            $this->session->set_flashdata('flash_message' , get_phrase('package_deleted_successfully'));
            redirect(base_url() . 'superadmin/jbs_packages/', 'refresh');
    } else if ($param1 == 'do_update')
    {
        $data = array(
            //'emp_id' => $this->input->post('emp_id'),
            'name' => $this->input->post('name'),
            'price' => $this->input->post('price'),
            'duration' => $this->input->post('duration')
            );
        $id = $this->input->post('jbs_id');
        //print_r($data);
        //echo $id;
        //exit();
        $result = $this->Crud_model->update_data('jbs_packages', 'jbs_id', $data, $id);
        //echo $lastid;
        //exit();
        $this->session->set_flashdata('flash_message' , get_phrase('package_updated_successfully'));
        redirect(base_url() . 'superadmin/jbs_packages/', 'refresh');
    }
    $page_data['packages'] = $this->crud_model->get_data('jbs_packages');
    $page_data['page_name']  = 'jbs_packages';
    $page_data['page_title'] = 'Manage Employee Payment Packages';
    $this->load->view('backend/index', $page_data);
}






    function emp_packages($param1 = '', $param2 = '', $param3 = '')
{

    if ($this->session->userdata('superadmin_login') != 1)
            redirect(base_url().'login', 'refresh');
            
    if($param1 == 'create')
    {
        $data = array(
            'name' => $this->input->post('name'),
            'price' => $this->input->post('price'),
            'profile_view_limit' => $this->input->post('profile_view_limit'),
            'promotion_limit' => $this->input->post('promotion_limit')
            );
        $lastid = $this->Crud_model->create_data('emp_packages', $data);
        $this->session->set_flashdata('flash_message' , get_phrase('package_added_successfully'));
        
        redirect(base_url() . 'superadmin/emp_packages/', 'refresh');
    } else if($param1 == 'do_delete')
    {
            $id = $param2;
            $resut = $this->Crud_model->delete_data('emp_packages', 'emp_id', $id);
            $this->session->set_flashdata('flash_message' , get_phrase('package_deleted_successfully'));
            redirect(base_url() . 'superadmin/emp_packages/', 'refresh');
    } else if ($param1 == 'do_update')
    {
        $data = array(
            //'emp_id' => $this->input->post('emp_id'),
            'name' => $this->input->post('name'),
            'price' => $this->input->post('price'),
            'profile_view_limit' => $this->input->post('profile_view_limit'),
            'promotion_limit' => $this->input->post('promotion_limit')
            );
        $id = $this->input->post('emp_id');
        //print_r($data);
        //echo $id;
        //exit();
        $result = $this->Crud_model->update_data('emp_packages', 'emp_id', $data, $id);
        //echo $lastid;
        //exit();
        $this->session->set_flashdata('flash_message' , get_phrase('package_updated_successfully'));
        redirect(base_url() . 'superadmin/emp_packages/', 'refresh');
    }
    $page_data['packages'] = $this->crud_model->get_data('emp_packages');
    $page_data['page_name']  = 'emp_packages';
    $page_data['page_title'] = 'Manage Employeer Payment Packages';
    $this->load->view('backend/index', $page_data);
}



function upgrade_package($id,$user_id,$package_id,$package_name,$profile_view_limit,$promotion_limit){
    $current_time = date('Y-m-d H:i:s');
    $data = array(
            'package_id' => $package_id,
            'name' => $package_name,
            'profile_view_limit' => $profile_view_limit,
            'promotion_limit'=> $promotion_limit,
            'updated_on' =>$current_time
            );
    $this->Crud_model->update_data('emp_package_detail', 'user_id', $data, $user_id);
      // $this->Crud_model->insert_data('emp_package_detail',  $data);
    $data2 = array(
                'package_update_status' => '1'
                );
    $this->Crud_model->update_data('payments', 'id', $data2, $id);

    redirect(base_url() . 'superadmin/approved_payments/', 'refresh');
}





    
}