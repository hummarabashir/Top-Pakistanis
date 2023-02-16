<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Crud_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

     //////////Count image////////
    function get_count() {

        $this->db->select('*');
        $this->db->from('users');
        $this->db->order_by('id', 'desc');
        $result = $this->db->get()->result();

        $last_id = $result[0]->id; //This is the last ID of the table
        return $last_id;
    }
     //////////Count image////////
    function get_count_company() {

        $this->db->select('*');
        $this->db->from('tbl_company');
        $this->db->order_by('comp_id', 'desc');
        $result = $this->db->get()->result();

        $last_id = $result[0]->comp_id; //This is the last ID of the table
        return $last_id;
    }

    function clear_cache() {
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }

    function get_type_name_by_id($type, $type_id = '', $field = 'name') {
     return $this->db->get_where($type, array($type . '_id' => $type_id))->row()->$field;
    }

/*get data against user id*/
function get_data_user_id($tablename, $user_id_column, $user_id)
{
    $this->db->where($user_id_column, $user_id);
    $query = $this->db->get($tablename);
    return $query->result_array();

}

function get_data_user_id_recruiter($user_id)
{
     $this->db->select('users.*, tbl_city.*');
      $this->db->from('users');
      $this->db->where('users.id', $user_id);
      $this->db->join('tbl_city','users.city=tbl_city.city_id', 'left');
    //   $this->db->order_by('cv_contact_info.user_id', desc);
    //   $this->db->limit(3);
      return $this->db->get()->result_array();

}
function add_careeradvisor($data){
    $this->db->insert('tbl_careeradvisor', $data);
        
        return $this->db->insert_id();
}

function get_packages($tablename,$id)
{   
    $this->db->where('emp_id',$id);
    $query = $this->db->get($tablename);
     return ($query->num_rows() > 0 ) ? $query->row() : false;
}

function get_default_package($tablename)
{   
    $this->db->where('default_package',1);
    $query = $this->db->get($tablename);
     return ($query->num_rows() > 0 ) ? $query->row() : false;
}


function get_packages_jbs($tablename,$id)
{   
    $this->db->where('jbs_id',$id);
    $query = $this->db->get($tablename);
     return ($query->num_rows() > 0 ) ? $query->row() : false;
}

function get_careeradvisor() {
        $query = $this->db->get('tbl_careeradvisor');
        return $query->result_array();
}


function check_remaining_credits($user_id) {
        $this->db->select('profile_view_limit');
      $this->db->from('emp_package_detail');
      $this->db->where('user_id', $user_id);
      $query = $this->db->get();
      return ($query->num_rows() > 0 ) ? $query->row() : false;
}



///////// CRUD FUNCTION //
function get_data($tablename)
{
    $query = $this->db->get($tablename);
    return $query->result_array();
}

function get_footer_data($tablename)
{
    $this->db->limit(21);
    $query = $this->db->get($tablename);
    return $query->result_array();
}
function get_data_latest($tablename)
{
      $this->db->select('tbl_cat.*, cv_contact_info.*');
      $this->db->join('tbl_cat','cv_contact_info.cat_id=tbl_cat.cat_id', 'left');
      $this->db->order_by('cv_contact_info.user_id', desc);
      $this->db->limit(3);
      $query = $this->db->get('cv_contact_info');
      return $query->result_array();
}

function get_trending_data($tablename)
{
      $this->db->select('tbl_cat.*, cv_contact_info.* ');
        // $this->db->where('jobseekar_payments.payment_status', 'active');
      $this->db->join('tbl_cat','cv_contact_info.cat_id=tbl_cat.cat_id', 'left');
       // $this->db->join('jobseekar_payments','cv_contact_info.user_id=jobseekar_payments.user_id', 'left');
      $this->db->order_by('cv_contact_info.user_id', desc);
      $this->db->limit(3);
      $query = $this->db->get('cv_contact_info');
      return $query->result_array();
}


function delete_data($tablename, $attr, $id)
{
    $this->db->where($attr, $id);
    $this->db->delete($tablename);
}
function create_data($tablename, $data)
{
    $this->db->insert($tablename, $data);
    return $this->db->insert_id();
}

function update_data($tablename, $attr, $data, $id)
{
    $this->db->where($attr ,$id);
    $this->db->update($tablename, $data);
    return true;
}

function insert_data($tablename, $data)
    {
    return $this->db->insert($tablename, $data);
  }

function get_cv_objective($id){
    $this->db->select('*');
    $this->db->from('cv_objective');
    $this->db->where('user_id', $id);
    return $this->db->get()->result_array();
}
function get_cv_contact_info($id){
 $this->db->select('*');
 $this->db->from('cv_contact_info');
 $this->db->where('user_id', $id);
 return $this->db->get()->result_array();
}
function update_data2($id, $data1)
{
  
     $data['picture_url'] 		= $data1;
        $this->db->where('id',$id);
        $this->db->update('users',$data);
}
function update_data3($id, $data1)
{
  
     $data['cv_url'] 		= $data1;
        $this->db->where('user_id',$id);
        $this->db->update('cv_contact_info',$data);
}
function update_data1($id)
{
   $data['first_name']      = $this->input->post('first_name');
        $data['last_name'] 		= $this->input->post('last_name');
          $data['city'] 		= $this->input->post('city');
            $data['phone'] 		= $this->input->post('mob_no');
              $data['email'] 		= $this->input->post('email');
     $data['address'] 		= $this->input->post('address');
     $data['gender'] 		= $this->input->post('gender');
        $this->db->where('id',$id);
        $this->db->update('users',$data);
}
///// CRUD FUNCTIONS ENDS ///

/// pagination query ///
 function pagination_data($column_id, $order_by, $table_name, $config_base_ulr , $per_page)
 {
     $page=0;
    $config = array();
    $config["base_url"] = $config_base_ulr;
    //$this->db->where(array('user_id' => $user_id));
    $total_row = $this->db->count_all_results($table_name);

$config["uri_segment"] = 3;
    
    $config["total_rows"] = $total_row;
    $config["per_page"] = $per_page;
    
    $config['use_page_numbers'] = TRUE;
    
    $config['num_links'] = 10;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = 'first';
    $config['last_link'] = 'last';
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
    //$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    
//    $this->db->order_by($column_id,$order_by);
  //  $this->db->limit($config["per_page"],$page);
    
      $query = 'SELECT * FROM '.$table_name.' ORDER BY '.$column_id.' '.$order_by.' LIMIT '.$config["per_page"].' OFFSET '.$this->db->escape($page);
      return $this->db->query($query)->result_array();

        //$this->db->order_by($column_id,$order_by);
        //$this->db->limit($config["per_page"],$this->db->escape($page)); 
        //return $this->db->get($table_name)->result_array();
    
 }
/// pagination query ends

//pagination controler use
    //pagination
            //$config_base_ulr = base_url() . "site/press";
            //$per_page = 20;
            //pagination_data($column_id, $order_by, $table_name, $config_base_ulr , $per_page)
            //$press = $this->Crud_model->pagination_data('date', 'desc', 'pressrealse',$config_base_ulr, $per_page);
            //if(count($press)>0){
              //  $data["press"] =$press;
            //$str_links = $this->pagination->create_links();
            //$data["links"] = explode('&nbsp;',$str_links );
    // pagination
//pagination cotroler use ends
/// pagination query ///
 function getpagination_catdashboard($column_id, $order_by, $table_name, $config_base_ulr , $per_page, $cat_id)
 {
     $page=0;
    $config = array();
    $config["base_url"] = $config_base_ulr;
    $this->db->where('active/deactive', 1);
        $this->db->where('job_status', 1);
    $this->db->where(array('cat_id' => $cat_id));
    $total_row = $this->db->count_all_results($table_name);

$config["uri_segment"] = 4;
    
    $config["total_rows"] = $total_row;
    $config["per_page"] = $per_page;
    
    $config['use_page_numbers'] = TRUE;
    
    $config['num_links'] = 5;
    
    /*$config[‘first_link’] = ‘First’;*/
/*$config['last_link'] = true;*/

    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = 'first';
    $config['last_link'] = 'last';
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
    if($this->uri->segment(4)){
          //$page = (($this->uri->segment(3))-1)*5 ;
        $page = ($this->uri->segment(4)-1)*10 ;
          //echo $page;
    }
    else{
          $page = 0;
    }

    //$this->db->where('tbl_job.job_status','0');
    //$this->db->join('tbl_cat','tbl_job.cat_id=tbl_cat.cat_id','left');
    $this->db->where('tbl_job.active/deactive', 1);
        $this->db->where('tbl_job.job_status', 1);
    $this->db->where('tbl_job.cat_id', $cat_id);
    $this->db->order_by('tbl_job.featured', desc);
      $this->db->join('tbl_cat', 'tbl_cat.cat_id = tbl_job.cat_id');
         $this->db->join('tbl_company', 'tbl_company.comp_id = tbl_job.comp_id');
          $this->db->join('tbl_subcat', 'tbl_subcat.subcat_id = tbl_job.subcat_id', 'left');
    $this->db->limit($config["per_page"],$this->db->escape($page)); 
    return $this->db->get($table_name)->result_array();
    
      //$query = 'SELECT * FROM '.$table_name.' ORDER BY '.$column_id.' '.$order_by.' LIMIT '.$config["per_page"].' OFFSET '.$this->db->escape($page);
    //return $this->db->query($query)->result_array();
 }
/// pagination query ends




 function getpagination_catdashboard1($column_id, $order_by, $table_name, $config_base_ulr , $per_page,$city_id)
 {
     $page=0;
    $config = array();
    $config["base_url"] = $config_base_ulr;
    $this->db->where('active/deactive', 1);
        $this->db->where('job_status', 1);
    $this->db->where(array('city_id' => $city_id));
    $total_row = $this->db->count_all_results($table_name);

$config["uri_segment"] = 4;
    
    $config["total_rows"] = $total_row;
    $config["per_page"] = $per_page;
    
    $config['use_page_numbers'] = TRUE;
    
    $config['num_links'] = 5;
    
    /*$config[‘first_link’] = ‘First’;*/
/*$config['last_link'] = true;*/

    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = 'first';
    $config['last_link'] = 'last';
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
    if($this->uri->segment(4)){
          //$page = (($this->uri->segment(3))-1)*5 ;
        $page = ($this->uri->segment(4)-1)*10 ;
          //echo $page;
    }
    else{
          $page = 0;
    }

    //$this->db->where('tbl_job.job_status','0');
    //$this->db->join('tbl_cat','tbl_job.cat_id=tbl_cat.cat_id','left');
    $this->db->where('active/deactive', 1);
        $this->db->where('job_status', 1);
    $this->db->where('city_id',$city_id);
      $this->db->join('tbl_cat', 'tbl_cat.cat_id = tbl_job.cat_id');
         $this->db->join('tbl_company', 'tbl_company.comp_id = tbl_job.comp_id');
          $this->db->join('tbl_subcat', 'tbl_subcat.subcat_id = tbl_job.subcat_id');
    $this->db->order_by('tbl_job.featured', desc);
    $this->db->limit($config["per_page"],$this->db->escape($page)); 
    return $this->db->get($table_name)->result_array();
    
      //$query = 'SELECT * FROM '.$table_name.' ORDER BY '.$column_id.' '.$order_by.' LIMIT '.$config["per_page"].' OFFSET '.$this->db->escape($page);
    //return $this->db->query($query)->result_array();
 }
/// pagination query ends





function getfiltered_search($data){
    //print_r($data);
    //die();
    $city=$this->input->post('city_id');
    $cat=$this->input->post('category_id');
    $keyword=$this->input->post('keyword');

    if(isset($data))
    {
        $this->db->select('*');
        $this->db->from('cv_contact_info');
              $this->db->join('tbl_cat','cv_contact_info.cat_id=tbl_cat.cat_id', 'left');
          $this->db->join('tbl_subcat','cv_contact_info.subcat_id=tbl_subcat.subcat_id', 'left');
             $this->db->join('tbl_city','cv_contact_info.city=tbl_city.city_id', 'left');
        $this->db->join('cv_workexperience', 'cv_contact_info.user_id = cv_workexperience.user_id');
        // $this->db->where("(city LIKE '$city' AND cat_id LIKE '$cat')");
        $this->db->where('cv_contact_info.city',$data['city_id']) 
                 ->or_where('cv_contact_info.cat_id',$data['category_id'])
                 ->or_where('cv_workexperience.designation like',"%$keyword%");
                 $this->db->order_by('cv_contact_info.id','desc');
        $rs = $this->db->get();
        return $rs->result_array();
    }

}




 /// pagination query ///
 function getpagination_search($column_id, $order_by, $table_name, $config_base_ulr , $per_page,$data)
 {

     $page=0;
    $config = array();
    $config["base_url"] = $config_base_ulr;
    if(isset($data['keywords']))
    {
    $this->db->like('job_title',$data['keywords']);

    }
    $this->db->where('active/deactive', 1);
        $this->db->where('job_status', 1);
   /* $this->db->where(array('cat_id' => $cat_id));*/
    $total_row = $this->db->count_all_results($table_name);

$config["uri_segment"] = 3;
    
    $config["total_rows"] = $total_row;
    $config["per_page"] = $per_page;
    
    $config['use_page_numbers'] = TRUE;
    
    $config['num_links'] = 5;
    
    /*$config[‘first_link’] = ‘First’;*/
/*$config['last_link'] = true;*/

    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = 'first';
    $config['last_link'] = 'last';
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

    if(isset($data['keywords']))
    {
    $this->db->like('job_title',$data['keywords']);

    }
    //$this->db->where('tbl_job.job_status','0');
    //$this->db->join('tbl_cat','tbl_job.cat_id=tbl_cat.cat_id','left');
    $this->db->where('active/deactive', 1);
        $this->db->where('job_status', 1);
    /*$this->db->where('cat_id',$cat_id);*/
    $this->db->order_by($column_id,$order_by);
    $this->db->limit($config["per_page"],$this->db->escape($page)); 
    return $this->db->get($table_name)->result_array();
    
      //$query = 'SELECT * FROM '.$table_name.' ORDER BY '.$column_id.' '.$order_by.' LIMIT '.$config["per_page"].' OFFSET '.$this->db->escape($page);
    //return $this->db->query($query)->result_array();
 }
/// pagination query ends



// approved payments pagination select query

 function pagination_aprovedpaymentsdata($column_id, $order_by, $table_name, $config_base_ulr , $per_page)
 {
     $page=0;
    $config = array();
    $config["base_url"] = $config_base_ulr;
    //$this->db->where(array('user_id' => $user_id));
    $this->db->where('payment_confirmation','1');
    $total_row = $this->db->count_all_results($table_name);

    $config["uri_segment"] = 3;
    
    $config["total_rows"] = $total_row;
    $config["per_page"] = $per_page;
    
    $config['use_page_numbers'] = TRUE;
    
    /*$config['num_links'] = $total_row;*/

    $config['num_links'] = 10;

    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = 'first';
    $config['last_link'] = 'last';
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
        $page = ($this->uri->segment(3)-1)*100 ;
          //echo $page;
    }
    else{
          $page = 0;
    }

    $this->db->where('payment_confirmation','1');
    $this->db->order_by($column_id,$order_by);
    $this->db->limit($config["per_page"],$this->db->escape($page)); 
    return $this->db->get($table_name)->result_array();

   /* $this->db->select('');
    $this->db->from('payments');
    $this->db->where('payments.payment_confirmation','0');
    $this->db->order_by($column_id,$order_by);
    $this->db->join('users', 'payments.user_id = users.id', 'left');
    return $this->db->get()->result_array(); */ 
 }
 // approved payments pagination select query ends

// pending payments pagination select query

 function pagination_pendingpaymentsdata($column_id, $order_by, $table_name, $config_base_ulr , $per_page)
 {
    $page=0;
    $config = array();
    $config["base_url"] = $config_base_ulr;
    //$this->db->where(array('user_id' => $user_id));
    $this->db->where('payment_confirmation','0');
    $total_row = $this->db->count_all_results($table_name);

    $config["uri_segment"] = 3;
    
    $config["total_rows"] = $total_row;
    $config["per_page"] = $per_page;
    
    $config['use_page_numbers'] = TRUE;
    
    /*$config['num_links'] = $total_row;*/

    $config['num_links'] = 10;

    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = 'first';
    $config['last_link'] = 'last';
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
        $page = ($this->uri->segment(3)-1)*100 ;
          //echo $page;
    }
    else{
          $page = 0;
    }

    $this->db->where('payment_confirmation','0');
    $this->db->order_by($column_id,$order_by);
    $this->db->limit($config["per_page"],$this->db->escape($page)); 
    return $this->db->get($table_name)->result_array();

   /* $this->db->select('');
    $this->db->from('payments');
    $this->db->where('payments.payment_confirmation','0');
    $this->db->order_by($column_id,$order_by);
    $this->db->join('users', 'payments.user_id = users.id', 'left');
    return $this->db->get()->result_array(); */ 
 }
 // pending payments pagination select query ends


// jobseekar pending payments pagination select query

 function pagination_jpendingpaymentsdata($column_id, $order_by, $table_name, $config_base_ulr , $per_page)
 {
    $page=0;
    $config = array();
    $config["base_url"] = $config_base_ulr;
    //$this->db->where(array('user_id' => $user_id));
    $this->db->where('payment_confirmation','0');
    $total_row = $this->db->count_all_results($table_name);

    $config["uri_segment"] = 3;
    
    $config["total_rows"] = $total_row;
    $config["per_page"] = $per_page;
    
    $config['use_page_numbers'] = TRUE;
    
    /*$config['num_links'] = $total_row;*/

    $config['num_links'] = 10;

    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = 'first';
    $config['last_link'] = 'last';
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
        $page = ($this->uri->segment(3)-1)*100 ;
          //echo $page;
    }
    else{
          $page = 0;
    }

    $this->db->join('users','jobseekar_payments.user_id=users.id','left');
    $this->db->where('payment_confirmation','0');
    $this->db->order_by($column_id,$order_by);
    $this->db->limit($config["per_page"],$this->db->escape($page)); 
    return $this->db->get($table_name)->result_array();
 }
 // jobseekar pending payments pagination select query ends



// jobseekar pending payments pagination select query

 function pagination_japprovedpaymentsdata($column_id, $order_by, $table_name, $config_base_ulr , $per_page)
 {
    $page=0;
    $config = array();
    $config["base_url"] = $config_base_ulr;
    //$this->db->where(array('user_id' => $user_id));
    $this->db->where('payment_confirmation','1');
    $total_row = $this->db->count_all_results($table_name);

    $config["uri_segment"] = 3;
    
    $config["total_rows"] = $total_row;
    $config["per_page"] = $per_page;
    
    $config['use_page_numbers'] = TRUE;
    
    /*$config['num_links'] = $total_row;*/

    $config['num_links'] = 10;

    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = 'first';
    $config['last_link'] = 'last';
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
        $page = ($this->uri->segment(3)-1)*100 ;
          //echo $page;
    }
    else{
          $page = 0;
    }

    $this->db->join('users','jobseekar_payments.user_id=users.id','left');
    $this->db->where('payment_confirmation','1');
    $this->db->order_by($column_id,$order_by);
    $this->db->limit($config["per_page"],$this->db->escape($page)); 
    return $this->db->get($table_name)->result_array();
 }
 // jobseekar approved payments pagination select query ends



// pending jobs pagination select query

 function pagination_pendingjobsdata($column_id, $order_by, $table_name, $config_base_ulr , $per_page)
 {
     $page=0;
    $config = array();
    $config["base_url"] = $config_base_ulr;
    //$this->db->where(array('user_id' => $user_id));
    $this->db->where('job_status','0');
    $total_row = $this->db->count_all_results($table_name);

    $config["uri_segment"] = 3;
    
    $config["total_rows"] = $total_row;
    $config["per_page"] = $per_page;
    
    $config['use_page_numbers'] = TRUE;
    
    /*$config['num_links'] = $total_row;*/

    $config['num_links'] = 10;

    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = 'first';
    $config['last_link'] = 'last';
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
    $this->db->where('tbl_job.job_status','0');
    $this->db->join('tbl_cat','tbl_job.cat_id=tbl_cat.cat_id','left');
    $this->db->order_by($column_id,$order_by);
    $this->db->limit($config["per_page"],$this->db->escape($page)); 
    return $this->db->get('tbl_job')->result_array();
    
 }
 // pending jobs pagination select query ends


 // approve jobs pagination select query

 function pagination_approvedjobsdata($column_id, $order_by, $table_name, $config_base_ulr , $per_page)
 {
     $page=0;
    $config = array();
    $config["base_url"] = $config_base_ulr;
    //$this->db->where(array('user_id' => $user_id));
    $this->db->where('job_status','1');
    $total_row = $this->db->count_all_results($table_name);

    $config["uri_segment"] = 3;
    
    $config["total_rows"] = $total_row;
    $config["per_page"] = $per_page;
    
    $config['use_page_numbers'] = TRUE;
    
    $config['num_links'] = 10;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = 'first';
    $config['last_link'] = 'last';
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
    $this->db->where('tbl_job.job_status','1');
    $this->db->join('tbl_cat','tbl_job.cat_id=tbl_cat.cat_id','left');
    $this->db->order_by($column_id,$order_by);
    $this->db->limit($config["per_page"],$this->db->escape($page)); 
    return $this->db->get('tbl_job')->result_array();
    
 }
 // approved jobs pagination select query ends

/// pending jobs jobsdashboar query ///
 function pending_jobdashboard($column_id, $order_by, $table_name,$user_id)
 {
    $this->db->where('active/deactive', 1);
        $this->db->where('job_status', 0);
    $this->db->where('user_id',$user_id);
    $this->db->order_by($column_id,$order_by);
    return $this->db->get($table_name)->result_array();
 }
/// pending jobs jobsdashboar query ends


 /// deactivated jobs jobsdashboar query ///
 function deactivated_jobdashboard($column_id, $order_by, $table_name,$user_id)
 {
    $this->db->where('active/deactive', 0);
    $this->db->where('user_id',$user_id);
    $this->db->order_by($column_id,$order_by);
    return $this->db->get($table_name)->result_array();
 }
/// deactivated jobs jobsdashboar query ends


/// approved jobs jobsdashboar query ///
 function approved_jobdashboard($column_id, $order_by, $table_name ,$user_id)
 {
    $this->db->where('active/deactive', 1);
        $this->db->where('job_status', 1);
    $this->db->where('user_id',$user_id);
    $this->db->order_by($column_id,$order_by); 
    return $this->db->get($table_name)->result_array();
 }
/// approved jobs jobsdashboar query ends

//////// CATEGORY /////////
/* ADD CATEGORY */
function add_category($data){
    $this->db->insert('tbl_cat', $data);
        
        return $this->db->insert_id();
}
function add_blog($data){
    $this->db->insert('tbl_blog', $data);
        
        return $this->db->insert_id();
}
function get_categories() {
        $query = $this->db->get('tbl_cat');
        return $query->result_array();
}
function get_blog() {
        $query = $this->db->get('tbl_blog');
        return $query->result_array();
}


 // userdashboard jobs pagination select query

 function pagination_userdashboardjobsdata($column_id, $order_by, $table_name, $table_name1, $table_name2, $config_base_ulr , $per_page)
 {
     $page=0;
    $config = array();
    $config["base_url"] = $config_base_ulr;
    //$this->db->where(array('user_id' => $user_id));
    $this->db->where('user_status', 1);
        $this->db->where('verify', 1);
        $this->db->where('method', 'normal');
    $total_row = $this->db->count_all_results($table_name);

    $config["uri_segment"] = 3;
    
    $config["total_rows"] = $total_row;
    $config["per_page"] = $per_page;
    
    $config['use_page_numbers'] = TRUE;
    
    $config['num_links'] = 10;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = 'first';
    $config['last_link'] = 'last';
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

    $this->db->select('users.*, cv_contact_info.*, tbl_cat.*, cv_skill.*');
    $this->db->from('users, cv_contact_info, cv_skill');
    $this->db->where('users.user_status', 1);
        $this->db->where('users.verify', 1);
        $this->db->where('users.method', 'normal');
        $this->db->join('tbl_cat', 'tbl_cat.cat_id = cv_contact_info.cat_id', 'left');
        // $this->db->join('tbl_city', 'tbl_city.city_id = cv_contact_info.city_id', 'left');
        // $this->db->join('tbl_subcat', 'tbl_subcat.subcat_id = cv_contact_info.subcat_id', 'left');
    $this->db->order_by('users.id',$order_by);
    $this->db->limit($config["per_page"],$this->db->escape($page));
    // $query =  $this->db->get('users')->result_array();
    // $query =  $this->db->get('cv_contact_info')->result_array();
    // return $query;
     $res=$this->db->get()->result_array();
        return $res;
    
 }
 //featuredjob filter
  function featured_job_filter($column_id, $order_by, $table_name, $table_name1 ,  $config_base_ulr , $per_page, $array)
 {
     $page=0;
    $config = array();
    $config["base_url"] = $config_base_ulr;
    //$this->db->where(array('user_id' => $user_id));
    $this->db->where('active/deactive', 1);
        $this->db->where('job_status', 1);
    $total_row = $this->db->count_all_results($table_name);

    $config["uri_segment"] = 3;
    
    $config["total_rows"] = $total_row;
    $config["per_page"] = $per_page;
    
    $config['use_page_numbers'] = TRUE;
    
    $config['num_links'] = 10;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = 'first';
    $config['last_link'] = 'last';
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
    $this->db->where('active/deactive', 1);
    $this->db->where('job_status', 1);
    $this->db->like('job_title',$array['keyword'], 'before');
    $this->db->or_like('job_title',$array['keyword'], 'after');
    $this->db->or_like('job_title',$array['keyword'], 'both');
    //$this->db->like('job_title', $array['keyword']);
    $this->db->like('job_location', $array['job_location'], 'before');
    $this->db->or_like('job_location', $array['job_location'], 'after');
    $this->db->or_like('job_location', $array['job_location'], 'both');
    
    if(!empty($array['BANKING']) || !empty($array['ACCOUNTS & FINANCE']) || !empty($array['ENGINEERING']) || !empty($array['SALES & MARKETING']) || !empty($array['HUMAN RESOURCE']) || !empty($array['EDUCATIONS']) || !empty($array['OFFICE MANAGEMENT']) || !empty($array['BUSINESS DEVELOPMENT']) || !empty($array['INFORMATION TECHNOLOGY']) || !empty($array['MEDIA'])  || !empty($array['SECURITY'])  || !empty($array['GOVERNMENT'])){
        $cat_id=array($array['BANKING'], $array['ACCOUNTS & FINANCE'], $array['ENGINEERING'], $array['SALES & MARKETING'], $array['HUMAN RESOURCE'], $array['EDUCATIONS'], $array['OFFICE MANAGEMENT'], $array['BUSINESS DEVELOPMENT'], $array['INFORMATION TECHNOLOGY'], $array['MEDIA'], $array['SECURITY'], $array['GOVERNMENT']);
    }else{
      $cat_id=array('18','19','20','21','22','24','26','31','32','33','8','11');  
    }
    $cat_id=array_filter($cat_id);
    if(!empty($array['choosetype33r']) || !empty($array['choosetypedsf']) || !empty($array['choosetypesdd']) || !empty($array['choosetypesadd']) || !empty($array['choosetypeassa']) || !empty($array['choosetypeghgf'])){
        $job_emptype=array($array['choosetype33r'], $array['choosetypedsf'], $array['choosetypesdd'], $array['choosetypesadd'], $array['choosetypeassa'], $array['choosetypeghgf']);
    }else{
      $job_emptype=array('full-time');  
    }
    $job_emp=array_filter($job_emptype);
    if(!empty($array['smplechk1']) || !empty($array['smplechk2']) || !empty($array['smplechk3']) || !empty($array['smplechk4']) || !empty($array['smplechk4']) || !empty($array['smplechk5'])){
            
            for($i=1; $i<6; $i++){
                $smplechk='smplechk'.$i;
            $salleryarray = explode(",",$array[$smplechk]);
            $min_sal[] = $salleryarray[0];
            $max_sal[] = $salleryarray[1];
            }
    }else{
        $min_sal = 1;
        $max_sal = 10000000;
    }
    $min_sal=array_filter($min_sal);
    $max_sal=array_filter($max_sal);
    if(!empty($array['smplechk7']) || !empty($array['smplechk8']) || !empty($array['smplechk71']) || !empty($array['smplechk81'])){
    $clevel_id=array($array['smplechk7'], $array['smplechk8'], $array['smplechk71'], $array['smplechk81']);
    }else{
      $clevel_id=array('1');  
    }
    $clevel_id=array_filter($clevel_id);
    if(!empty($array['smplechk9']) || !empty($array['smplechk10']) || !empty($array['smplechk11']) || !empty($array['smplechk12']) || !empty($array['smplechk13']) || !empty($array['smplechk14']) || !empty($array['smplechk15'])){
        $job_explevel=array($array['smplechk9'], $array['smplechk10'], $array['smplechk11'], $array['smplechk12'], $array['smplechk13'], $array['smplechk14'], $array['smplechk15']);
    }else{
      $job_explevel=array('< 1 Year', '1 Year', '2 Year', '3 Year', '4 Year', '5 Year', '> 5 Year');  
    }
    $job_explevel=array_filter($job_explevel);
    if(!empty($array['smplechk16']) && !empty($array['smplechk17'])){
        $job_gender=array($array['smplechk16'], $array['smplechk17']);
    }else if($array['smplechk16'] == '' && $array['smplechk17'] == ''){
        $job_gender=array('all', 'Male', 'Female');
    }else if(!empty($array['smplechk16']) ){
        $job_gender=array($array['smplechk16']);
    }else{
      $job_gender=array($array['smplechk17']);  
    }
    $job_gender=array_filter($job_gender);
    //print_r($clevel_id);
    //die();
    $this->db->where_in('cat_id', $cat_id);
    $this->db->where_in('job_emptype', $job_emp);
    $this->db->where_in('job_salery_min', $min_sal);
    $this->db->where_in('job_salery_max', $max_sal);
    //$this->db->where_in('clevel_id', $clevel_id);
    $this->db->where_in('job_explevel', $job_explevel);
    $this->db->where_in('job_gender', $job_gender);
    $this->db->order_by($column_id,$order_by);
    $this->db->limit($config["per_page"],$this->db->escape($page)); 
    return $this->db->get('tbl_job')->result_array();
    
 }
   function featured_job_filter_adv($column_id, $order_by, $table_name, $table_name1 ,  $config_base_ulr , $per_page, $array)
 {
     $page=0;
    $config = array();
    $config["base_url"] = $config_base_ulr;
    //$this->db->where(array('user_id' => $user_id));
    $this->db->where('active/deactive', 1);
        $this->db->where('job_status', 1);
    $total_row = $this->db->count_all_results($table_name);

    $config["uri_segment"] = 3;
    
    $config["total_rows"] = $total_row;
    $config["per_page"] = $per_page;
    
    $config['use_page_numbers'] = TRUE;
    
    $config['num_links'] = 10;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = 'first';
    $config['last_link'] = 'last';
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
    $this->db->where('active/deactive', 1);
    $this->db->where('job_status', 1);
    $this->db->like('job_title',$array['keyword'], 'before');
    $this->db->or_like('job_title',$array['keyword'], 'after');
    $this->db->or_like('job_title',$array['keyword'], 'both');
    //$this->db->like('job_title', $array['keyword']);
    $this->db->like('job_location', $array['job_location'], 'before');
    $this->db->or_like('job_location', $array['job_location'], 'after');
    $this->db->or_like('job_location', $array['job_location'], 'both');
    
    if(!empty($array['BANKING']) || !empty($array['ACCOUNTS & FINANCE']) || !empty($array['ENGINEERING']) || !empty($array['SALES & MARKETING']) || !empty($array['HUMAN RESOURCE']) || !empty($array['EDUCATIONS']) || !empty($array['OFFICE MANAGEMENT']) || !empty($array['BUSINESS DEVELOPMENT']) || !empty($array['INFORMATION TECHNOLOGY']) || !empty($array['MEDIA'])  || !empty($array['SECURITY'])  || !empty($array['GOVERNMENT'])){
        $cat_id=array($array['BANKING'], $array['ACCOUNTS & FINANCE'], $array['ENGINEERING'], $array['SALES & MARKETING'], $array['HUMAN RESOURCE'], $array['EDUCATIONS'], $array['OFFICE MANAGEMENT'], $array['BUSINESS DEVELOPMENT'], $array['INFORMATION TECHNOLOGY'], $array['MEDIA'], $array['SECURITY'], $array['GOVERNMENT']);
    }else{
      $cat_id=array('18','19','20','21','22','24','26','31','32','33','8','11');  
    }
    $cat_id=array_filter($cat_id);
    if(!empty($array['choosetype33r']) || !empty($array['choosetypedsf']) || !empty($array['choosetypesdd']) || !empty($array['choosetypesadd']) || !empty($array['choosetypeassa']) || !empty($array['choosetypeghgf'])){
        $job_emptype=array($array['choosetype33r'], $array['choosetypedsf'], $array['choosetypesdd'], $array['choosetypesadd'], $array['choosetypeassa'], $array['choosetypeghgf']);
    }else{
      $job_emptype=array('full-time');  
    }
    $job_emp=array_filter($job_emptype);
    if(!empty($array['smplechk1']) || !empty($array['smplechk2']) || !empty($array['smplechk3']) || !empty($array['smplechk4']) || !empty($array['smplechk4']) || !empty($array['smplechk5'])){
            
            for($i=1; $i<6; $i++){
                $smplechk='smplechk'.$i;
            $salleryarray = explode(",",$array[$smplechk]);
            $min_sal[] = $salleryarray[0];
            $max_sal[] = $salleryarray[1];
            }
    }else{
        $min_sal = 1;
        $max_sal = 10000000;
    }
    $min_sal=array_filter($min_sal);
    $max_sal=array_filter($max_sal);
    if(!empty($array['smplechk7']) || !empty($array['smplechk8']) || !empty($array['smplechk71']) || !empty($array['smplechk81'])){
    $clevel_id=array($array['smplechk7'], $array['smplechk8'], $array['smplechk71'], $array['smplechk81']);
    }else{
      $clevel_id=array('1');  
    }
    $clevel_id=array_filter($clevel_id);
    if(!empty($array['smplechk9']) || !empty($array['smplechk10']) || !empty($array['smplechk11']) || !empty($array['smplechk12']) || !empty($array['smplechk13']) || !empty($array['smplechk14']) || !empty($array['smplechk15'])){
        $job_explevel=array($array['smplechk9'], $array['smplechk10'], $array['smplechk11'], $array['smplechk12'], $array['smplechk13'], $array['smplechk14'], $array['smplechk15']);
    }else{
      $job_explevel=array('< 1 Year', '1 Year', '2 Year', '3 Year', '4 Year', '5 Year', '> 5 Year');  
    }
    $job_explevel=array_filter($job_explevel);
    if(!empty($array['smplechk16']) && !empty($array['smplechk17'])){
        $job_gender=array($array['smplechk16'], $array['smplechk17']);
    }else if($array['smplechk16'] == '' && $array['smplechk17'] == ''){
        $job_gender=array('all', 'Male', 'Female');
    }else if(!empty($array['smplechk16']) ){
        $job_gender=array($array['smplechk16']);
    }else{
      $job_gender=array($array['smplechk17']);  
    }
    $job_gender=array_filter($job_gender);
    //print_r($clevel_id);
    //die();
    $this->db->where_in('cat_id', $cat_id);
    $this->db->where_in('job_emptype', $job_emp);
    $this->db->where_in('job_salery_min', $min_sal);
    $this->db->where_in('job_salery_max', $max_sal);
    //$this->db->where_in('clevel_id', $clevel_id);
    $this->db->where_in('job_explevel', $job_explevel);
    $this->db->where_in('job_gender', $job_gender);
    $this->db->order_by($column_id,$order_by);
    $this->db->limit($config["per_page"],$this->db->escape($page)); 
    return $this->db->get('tbl_job')->result_array();
    
 }
  function featured_job_filter1_adv($column_id, $order_by, $table_name, $table_name1 ,  $config_base_ulr , $per_page, $array)
 {
     $page=0;
    $config = array();
    $config["base_url"] = $config_base_ulr;
    //$this->db->where(array('user_id' => $user_id));
    $this->db->where('active/deactive', 1);
        $this->db->where('job_status', 1);
    $total_row = $this->db->count_all_results($table_name);

    $config["uri_segment"] = 3;
    
    $config["total_rows"] = $total_row;
    $config["per_page"] = $per_page;
    
    $config['use_page_numbers'] = TRUE;
    
    $config['num_links'] = 10;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = 'first';
    $config['last_link'] = 'last';
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

    if(!empty($array['BANKING']) || !empty($array['ACCOUNTS & FINANCE']) || !empty($array['ENGINEERING']) || !empty($array['SALES & MARKETING']) || !empty($array['HUMAN RESOURCE']) || !empty($array['EDUCATIONS']) || !empty($array['OFFICE MANAGEMENT']) || !empty($array['BUSINESS DEVELOPMENT']) || !empty($array['INFORMATION TECHNOLOGY']) || !empty($array['MEDIA'])  || !empty($array['SECURITY'])  || !empty($array['GOVERNMENT'])){
        $cat_id=array($array['BANKING'], $array['ACCOUNTS & FINANCE'], $array['ENGINEERING'], $array['SALES & MARKETING'], $array['HUMAN RESOURCE'], $array['EDUCATIONS'], $array['OFFICE MANAGEMENT'], $array['BUSINESS DEVELOPMENT'], $array['INFORMATION TECHNOLOGY'], $array['MEDIA'], $array['SECURITY'], $array['GOVERNMENT']);
    }else{
      $cat_id=array('18','19','20','21','22','24','26','31','32','33','8','11');  
    }
    $cat_id=array_filter($cat_id);
    if(!empty($array['choosetype33r']) || !empty($array['choosetypedsf']) || !empty($array['choosetypesdd']) || !empty($array['choosetypesadd']) || !empty($array['choosetypeassa']) || !empty($array['choosetypeghgf'])){
        $job_emptype=array($array['choosetype33r'], $array['choosetypedsf'], $array['choosetypesdd'], $array['choosetypesadd'], $array['choosetypeassa'], $array['choosetypeghgf']);
    }else{
      $job_emptype=array('full-time');  
    }
    $job_emp=array_filter($job_emptype);
    if(!empty($array['smplechk1']) || !empty($array['smplechk2']) || !empty($array['smplechk3']) || !empty($array['smplechk4']) || !empty($array['smplechk4']) || !empty($array['smplechk5'])){
            
            for($i=1; $i<6; $i++){
                $smplechk='smplechk'.$i;
            $salleryarray = explode(",",$array[$smplechk]);
            $min_sal[] = $salleryarray[0];
            $max_sal[] = $salleryarray[1];
            }
    }else{
        $min_sal = 1;
        $max_sal = 10000000;
    }
    $min_sal=array_filter($min_sal);
    $max_sal=array_filter($max_sal);
    if(!empty($array['smplechk7']) || !empty($array['smplechk8']) || !empty($array['smplechk71']) || !empty($array['smplechk81'])){
    $clevel_id=array($array['smplechk7'], $array['smplechk8'], $array['smplechk71'], $array['smplechk81']);
    }else{
      $clevel_id=array('1');  
    }
    $clevel_id=array_filter($clevel_id);
    if(!empty($array['smplechk9']) || !empty($array['smplechk10']) || !empty($array['smplechk11']) || !empty($array['smplechk12']) || !empty($array['smplechk13']) || !empty($array['smplechk14']) || !empty($array['smplechk15'])){
        $job_explevel=array($array['smplechk9'], $array['smplechk10'], $array['smplechk11'], $array['smplechk12'], $array['smplechk13'], $array['smplechk14'], $array['smplechk15']);
    }else{
      $job_explevel=array('< 1 Year', '1 Year', '2 Year', '3 Year', '4 Year', '5 Year', '> 5 Year');  
    }
    $job_explevel=array_filter($job_explevel);
    if(!empty($array['smplechk16']) && !empty($array['smplechk17'])){
        $job_gender=array($array['smplechk16'], $array['smplechk17']);
    }else if($array['smplechk16'] == '' && $array['smplechk17'] == ''){
        $job_gender=array('all', 'Male', 'Female');
    }
    else if(!empty($array['smplechk16']) ){
        $job_gender=array($array['smplechk16']);
    }else{
      $job_gender=array($array['smplechk17']);  
    }
    $job_gender=array_filter($job_gender);
    $this->db->like('job_title',$array['keyword'], 'before');
    $this->db->or_like('job_title',$array['keyword'], 'after');
    $this->db->or_like('job_title',$array['keyword'], 'both');
    //$this->db->like('job_title', $array['keyword']);
    //$this->db->like('job_location', $array['job_location'], 'before');
    //$this->db->or_like('job_location', $array['job_location'], 'after');
    //$this->db->or_like('job_location', $array['job_location'], 'both');
    $this->db->where('active/deactive', 1);
    $this->db->where('job_status', 1);
    //print_r($clevel_id);
    //die();
    $this->db->where_in('cat_id', $cat_id);
    $this->db->where_in('job_emptype', $job_emp);
    $this->db->where_in('job_salery_min', $min_sal);
    $this->db->where_in('job_salery_max', $max_sal);
    //$this->db->where_in('clevel_id', $clevel_id);
    $this->db->where_in('job_explevel', $job_explevel);
    $this->db->where_in('job_gender', $job_gender);
    $this->db->order_by($column_id,$order_by);
    $this->db->limit($config["per_page"],$this->db->escape($page)); 
    return $this->db->get('tbl_job')->result_array();
 }
   function featured_job_filter1($column_id, $order_by, $table_name, $table_name1 ,  $config_base_ulr , $per_page, $array)
 {
     $page=0;
    $config = array();
    $config["base_url"] = $config_base_ulr;
    //$this->db->where(array('user_id' => $user_id));
    $this->db->where('active/deactive', 1);
        $this->db->where('job_status', 1);
    $total_row = $this->db->count_all_results($table_name);

    $config["uri_segment"] = 3;
    
    $config["total_rows"] = $total_row;
    $config["per_page"] = $per_page;
    
    $config['use_page_numbers'] = TRUE;
    
    $config['num_links'] = 10;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = 'first';
    $config['last_link'] = 'last';
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

    if(!empty($array['BANKING']) || !empty($array['ACCOUNTS & FINANCE']) || !empty($array['ENGINEERING']) || !empty($array['SALES & MARKETING']) || !empty($array['HUMAN RESOURCE']) || !empty($array['EDUCATIONS']) || !empty($array['OFFICE MANAGEMENT']) || !empty($array['BUSINESS DEVELOPMENT']) || !empty($array['INFORMATION TECHNOLOGY']) || !empty($array['MEDIA'])  || !empty($array['SECURITY'])  || !empty($array['GOVERNMENT'])){
        $cat_id=array($array['BANKING'], $array['ACCOUNTS & FINANCE'], $array['ENGINEERING'], $array['SALES & MARKETING'], $array['HUMAN RESOURCE'], $array['EDUCATIONS'], $array['OFFICE MANAGEMENT'], $array['BUSINESS DEVELOPMENT'], $array['INFORMATION TECHNOLOGY'], $array['MEDIA'], $array['SECURITY'], $array['GOVERNMENT']);
    }else{
      $cat_id=array('18','19','20','21','22','24','26','31','32','33','8','11');  
    }
    $cat_id=array_filter($cat_id);
    if(!empty($array['choosetype33r']) || !empty($array['choosetypedsf']) || !empty($array['choosetypesdd']) || !empty($array['choosetypesadd']) || !empty($array['choosetypeassa']) || !empty($array['choosetypeghgf'])){
        $job_emptype=array($array['choosetype33r'], $array['choosetypedsf'], $array['choosetypesdd'], $array['choosetypesadd'], $array['choosetypeassa'], $array['choosetypeghgf']);
    }else{
      $job_emptype=array('full-time');  
    }
    $job_emp=array_filter($job_emptype);
    if(!empty($array['smplechk1']) || !empty($array['smplechk2']) || !empty($array['smplechk3']) || !empty($array['smplechk4']) || !empty($array['smplechk4']) || !empty($array['smplechk5'])){
            
            for($i=1; $i<6; $i++){
                $smplechk='smplechk'.$i;
            $salleryarray = explode(",",$array[$smplechk]);
            $min_sal[] = $salleryarray[0];
            $max_sal[] = $salleryarray[1];
            }
    }else{
        $min_sal = 1;
        $max_sal = 10000000;
    }
    $min_sal=array_filter($min_sal);
    $max_sal=array_filter($max_sal);
    if(!empty($array['smplechk7']) || !empty($array['smplechk8']) || !empty($array['smplechk71']) || !empty($array['smplechk81'])){
    $clevel_id=array($array['smplechk7'], $array['smplechk8'], $array['smplechk71'], $array['smplechk81']);
    }else{
      $clevel_id=array('1');  
    }
    $clevel_id=array_filter($clevel_id);
    if(!empty($array['smplechk9']) || !empty($array['smplechk10']) || !empty($array['smplechk11']) || !empty($array['smplechk12']) || !empty($array['smplechk13']) || !empty($array['smplechk14']) || !empty($array['smplechk15'])){
        $job_explevel=array($array['smplechk9'], $array['smplechk10'], $array['smplechk11'], $array['smplechk12'], $array['smplechk13'], $array['smplechk14'], $array['smplechk15']);
    }else{
      $job_explevel=array('< 1 Year', '1 Year', '2 Year', '3 Year', '4 Year', '5 Year', '> 5 Year');  
    }
    $job_explevel=array_filter($job_explevel);
    if(!empty($array['smplechk16']) && !empty($array['smplechk17'])){
        $job_gender=array($array['smplechk16'], $array['smplechk17']);
    }else if($array['smplechk16'] == '' && $array['smplechk17'] == ''){
        $job_gender=array('all', 'Male', 'Female');
    }
    else if(!empty($array['smplechk16']) ){
        $job_gender=array($array['smplechk16']);
    }else{
      $job_gender=array($array['smplechk17']);  
    }
    $job_gender=array_filter($job_gender);
    $this->db->like('job_title',$array['keyword'], 'before');
    $this->db->or_like('job_title',$array['keyword'], 'after');
    $this->db->or_like('job_title',$array['keyword'], 'both');
    //$this->db->like('job_title', $array['keyword']);
    //$this->db->like('job_location', $array['job_location'], 'before');
    //$this->db->or_like('job_location', $array['job_location'], 'after');
    //$this->db->or_like('job_location', $array['job_location'], 'both');
    $this->db->where('active/deactive', 1);
    $this->db->where('job_status', 1);
    //print_r($clevel_id);
    //die();
    $this->db->where_in('cat_id', $cat_id);
    $this->db->where_in('job_emptype', $job_emp);
    $this->db->where_in('job_salery_min', $min_sal);
    $this->db->where_in('job_salery_max', $max_sal);
    //$this->db->where_in('clevel_id', $clevel_id);
    $this->db->where_in('job_explevel', $job_explevel);
    $this->db->where_in('job_gender', $job_gender);
    $this->db->order_by($column_id,$order_by);
    $this->db->limit($config["per_page"],$this->db->escape($page)); 
    return $this->db->get('tbl_job')->result_array();
 }
  function featured_job_filter2($column_id, $order_by, $table_name, $table_name1 ,  $config_base_ulr , $per_page, $array)
 {
     $page=0;
    $config = array();
    $config["base_url"] = $config_base_ulr;
    //$this->db->where(array('user_id' => $user_id));
    $this->db->where('active/deactive', 1);
        $this->db->where('job_status', 1);
    $total_row = $this->db->count_all_results($table_name);

    $config["uri_segment"] = 3;
    
    $config["total_rows"] = $total_row;
    $config["per_page"] = $per_page;
    
    $config['use_page_numbers'] = TRUE;
    
    $config['num_links'] = 10;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = 'first';
    $config['last_link'] = 'last';
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

    if(!empty($array['BANKING']) || !empty($array['ACCOUNTS & FINANCE']) || !empty($array['ENGINEERING']) || !empty($array['SALES & MARKETING']) || !empty($array['HUMAN RESOURCE']) || !empty($array['EDUCATIONS']) || !empty($array['OFFICE MANAGEMENT']) || !empty($array['BUSINESS DEVELOPMENT']) || !empty($array['INFORMATION TECHNOLOGY']) || !empty($array['MEDIA'])  || !empty($array['SECURITY'])  || !empty($array['GOVERNMENT'])){
        $cat_id=array($array['BANKING'], $array['ACCOUNTS & FINANCE'], $array['ENGINEERING'], $array['SALES & MARKETING'], $array['HUMAN RESOURCE'], $array['EDUCATIONS'], $array['OFFICE MANAGEMENT'], $array['BUSINESS DEVELOPMENT'], $array['INFORMATION TECHNOLOGY'], $array['MEDIA'], $array['SECURITY'], $array['GOVERNMENT']);
    }else{
      $cat_id=array('18','19','20','21','22','24','26','31','32','33','8','11');  
    }
    $cat_id=array_filter($cat_id);
    if(!empty($array['choosetype33r']) || !empty($array['choosetypedsf']) || !empty($array['choosetypesdd']) || !empty($array['choosetypesadd']) || !empty($array['choosetypeassa']) || !empty($array['choosetypeghgf'])){
        $job_emptype=array($array['choosetype33r'], $array['choosetypedsf'], $array['choosetypesdd'], $array['choosetypesadd'], $array['choosetypeassa'], $array['choosetypeghgf']);
    }else{
      $job_emptype=array('full-time');  
    }
    $job_emp=array_filter($job_emptype);
    if(!empty($array['smplechk1']) || !empty($array['smplechk2']) || !empty($array['smplechk3']) || !empty($array['smplechk4']) || !empty($array['smplechk4']) || !empty($array['smplechk5'])){
            
            for($i=1; $i<6; $i++){
                $smplechk='smplechk'.$i;
            $salleryarray = explode(",",$array[$smplechk]);
            $min_sal[] = $salleryarray[0];
            $max_sal[] = $salleryarray[1];
            }
    }else{
        $min_sal = 1;
        $max_sal = 10000000;
    }
    $min_sal=array_filter($min_sal);
    $max_sal=array_filter($max_sal);
    if(!empty($array['smplechk7']) || !empty($array['smplechk8']) || !empty($array['smplechk71']) || !empty($array['smplechk81'])){
    $clevel_id=array($array['smplechk7'], $array['smplechk8'], $array['smplechk71'], $array['smplechk81']);
    }else{
      $clevel_id=array('1');  
    }
    $clevel_id=array_filter($clevel_id);
    if(!empty($array['smplechk9']) || !empty($array['smplechk10']) || !empty($array['smplechk11']) || !empty($array['smplechk12']) || !empty($array['smplechk13']) || !empty($array['smplechk14']) || !empty($array['smplechk15'])){
        $job_explevel=array($array['smplechk9'], $array['smplechk10'], $array['smplechk11'], $array['smplechk12'], $array['smplechk13'], $array['smplechk14'], $array['smplechk15']);
    }else{
      $job_explevel=array('< 1 Year', '1 Year', '2 Year', '3 Year', '4 Year', '5 Year', '> 5 Year');  
    }
    $job_explevel=array_filter($job_explevel);
    if(!empty($array['smplechk16']) && !empty($array['smplechk17'])){
        $job_gender=array($array['smplechk16'], $array['smplechk17']);
    }else if($array['smplechk16'] == '' && $array['smplechk17'] == ''){
        $job_gender=array('all', 'Male', 'Female');
    }
    else if(!empty($array['smplechk16']) ){
        $job_gender=array($array['smplechk16']);
    }else{
      $job_gender=array($array['smplechk17']);  
    }
    $job_gender=array_filter($job_gender);
    //$this->db->like('job_title',$array['keyword'], 'before');
    //$this->db->or_like('job_title',$array['keyword'], 'after');
    //$this->db->or_like('job_title',$array['keyword'], 'both');
    $this->db->like('job_location', $array['job_location'], 'before');
    $this->db->or_like('job_location', $array['job_location'], 'after');
    $this->db->or_like('job_location', $array['job_location'], 'both');
    $this->db->where('active/deactive', 1);
    $this->db->where('job_status', 1);
    //print_r($clevel_id);
    //die();
    $this->db->where_in('cat_id', $cat_id);
    $this->db->where_in('job_emptype', $job_emp);
    $this->db->where_in('job_salery_min', $min_sal);
    $this->db->where_in('job_salery_max', $max_sal);
    //$this->db->where_in('clevel_id', $clevel_id);
    $this->db->where_in('job_explevel', $job_explevel);
    $this->db->where_in('job_gender', $job_gender);
    $this->db->order_by($column_id,$order_by);
    $this->db->limit($config["per_page"],$this->db->escape($page)); 
    return $this->db->get('tbl_job')->result_array();
 }
   function featured_job_filter2_adv($column_id, $order_by, $table_name, $table_name1 ,  $config_base_ulr , $per_page, $array)
 {
     $page=0;
    $config = array();
    $config["base_url"] = $config_base_ulr;
    //$this->db->where(array('user_id' => $user_id));
    $this->db->where('active/deactive', 1);
        $this->db->where('job_status', 1);
    $total_row = $this->db->count_all_results($table_name);

    $config["uri_segment"] = 3;
    
    $config["total_rows"] = $total_row;
    $config["per_page"] = $per_page;
    
    $config['use_page_numbers'] = TRUE;
    
    $config['num_links'] = 10;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = 'first';
    $config['last_link'] = 'last';
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

    if(!empty($array['BANKING']) || !empty($array['ACCOUNTS & FINANCE']) || !empty($array['ENGINEERING']) || !empty($array['SALES & MARKETING']) || !empty($array['HUMAN RESOURCE']) || !empty($array['EDUCATIONS']) || !empty($array['OFFICE MANAGEMENT']) || !empty($array['BUSINESS DEVELOPMENT']) || !empty($array['INFORMATION TECHNOLOGY']) || !empty($array['MEDIA'])  || !empty($array['SECURITY'])  || !empty($array['GOVERNMENT'])){
        $cat_id=array($array['BANKING'], $array['ACCOUNTS & FINANCE'], $array['ENGINEERING'], $array['SALES & MARKETING'], $array['HUMAN RESOURCE'], $array['EDUCATIONS'], $array['OFFICE MANAGEMENT'], $array['BUSINESS DEVELOPMENT'], $array['INFORMATION TECHNOLOGY'], $array['MEDIA'], $array['SECURITY'], $array['GOVERNMENT']);
    }else{
      $cat_id=array('18','19','20','21','22','24','26','31','32','33','8','11');  
    }
    $cat_id=array_filter($cat_id);
    if(!empty($array['choosetype33r']) || !empty($array['choosetypedsf']) || !empty($array['choosetypesdd']) || !empty($array['choosetypesadd']) || !empty($array['choosetypeassa']) || !empty($array['choosetypeghgf'])){
        $job_emptype=array($array['choosetype33r'], $array['choosetypedsf'], $array['choosetypesdd'], $array['choosetypesadd'], $array['choosetypeassa'], $array['choosetypeghgf']);
    }else{
      $job_emptype=array('full-time');  
    }
    $job_emp=array_filter($job_emptype);
    if(!empty($array['smplechk1']) || !empty($array['smplechk2']) || !empty($array['smplechk3']) || !empty($array['smplechk4']) || !empty($array['smplechk4']) || !empty($array['smplechk5'])){
            
            for($i=1; $i<6; $i++){
                $smplechk='smplechk'.$i;
            $salleryarray = explode(",",$array[$smplechk]);
            $min_sal[] = $salleryarray[0];
            $max_sal[] = $salleryarray[1];
            }
    }else{
        $min_sal = 1;
        $max_sal = 10000000;
    }
    $min_sal=array_filter($min_sal);
    $max_sal=array_filter($max_sal);
    if(!empty($array['smplechk7']) || !empty($array['smplechk8']) || !empty($array['smplechk71']) || !empty($array['smplechk81'])){
    $clevel_id=array($array['smplechk7'], $array['smplechk8'], $array['smplechk71'], $array['smplechk81']);
    }else{
      $clevel_id=array('1');  
    }
    $clevel_id=array_filter($clevel_id);
    if(!empty($array['smplechk9']) || !empty($array['smplechk10']) || !empty($array['smplechk11']) || !empty($array['smplechk12']) || !empty($array['smplechk13']) || !empty($array['smplechk14']) || !empty($array['smplechk15'])){
        $job_explevel=array($array['smplechk9'], $array['smplechk10'], $array['smplechk11'], $array['smplechk12'], $array['smplechk13'], $array['smplechk14'], $array['smplechk15']);
    }else{
      $job_explevel=array('< 1 Year', '1 Year', '2 Year', '3 Year', '4 Year', '5 Year', '> 5 Year');  
    }
    $job_explevel=array_filter($job_explevel);
    if(!empty($array['smplechk16']) && !empty($array['smplechk17'])){
        $job_gender=array($array['smplechk16'], $array['smplechk17']);
    }else if($array['smplechk16'] == '' && $array['smplechk17'] == ''){
        $job_gender=array('all', 'Male', 'Female');
    }
    else if(!empty($array['smplechk16']) ){
        $job_gender=array($array['smplechk16']);
    }else{
      $job_gender=array($array['smplechk17']);  
    }
    $job_gender=array_filter($job_gender);
    //$this->db->like('job_title',$array['keyword'], 'before');
    //$this->db->or_like('job_title',$array['keyword'], 'after');
    //$this->db->or_like('job_title',$array['keyword'], 'both');
    $this->db->like('job_location', $array['job_location'], 'before');
    $this->db->or_like('job_location', $array['job_location'], 'after');
    $this->db->or_like('job_location', $array['job_location'], 'both');
    $this->db->where('active/deactive', 1);
    $this->db->where('job_status', 1);
    //print_r($clevel_id);
    //die();
    $this->db->where_in('cat_id', $cat_id);
    $this->db->where_in('job_emptype', $job_emp);
    $this->db->where_in('job_salery_min', $min_sal);
    $this->db->where_in('job_salery_max', $max_sal);
    //$this->db->where_in('clevel_id', $clevel_id);
    $this->db->where_in('job_explevel', $job_explevel);
    $this->db->where_in('job_gender', $job_gender);
    $this->db->order_by($column_id,$order_by);
    $this->db->limit($config["per_page"],$this->db->escape($page)); 
    return $this->db->get('tbl_job')->result_array();
 }
  function featured_job_filter3($column_id, $order_by, $table_name, $table_name1 ,  $config_base_ulr , $per_page, $array)
 {
     $page=0;
    $config = array();
    $config["base_url"] = $config_base_ulr;
    //$this->db->where(array('user_id' => $user_id));
    $this->db->where('active/deactive', 1);
        $this->db->where('job_status', 1);
    $total_row = $this->db->count_all_results($table_name);

    $config["uri_segment"] = 3;
    
    $config["total_rows"] = $total_row;
    $config["per_page"] = $per_page;
    
    $config['use_page_numbers'] = TRUE;
    
    $config['num_links'] = 10;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = 'first';
    $config['last_link'] = 'last';
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

    if(!empty($array['BANKING']) || !empty($array['ACCOUNTS & FINANCE']) || !empty($array['ENGINEERING']) || !empty($array['SALES & MARKETING']) || !empty($array['HUMAN RESOURCE']) || !empty($array['EDUCATIONS']) || !empty($array['OFFICE MANAGEMENT']) || !empty($array['BUSINESS DEVELOPMENT']) || !empty($array['INFORMATION TECHNOLOGY']) || !empty($array['MEDIA'])  || !empty($array['SECURITY'])  || !empty($array['GOVERNMENT'])){
        $cat_id=array($array['BANKING'], $array['ACCOUNTS & FINANCE'], $array['ENGINEERING'], $array['SALES & MARKETING'], $array['HUMAN RESOURCE'], $array['EDUCATIONS'], $array['OFFICE MANAGEMENT'], $array['BUSINESS DEVELOPMENT'], $array['INFORMATION TECHNOLOGY'], $array['MEDIA'], $array['SECURITY'], $array['GOVERNMENT']);
    }else{
      $cat_id=array('18','19','20','21','22','24','26','31','32','33','8','11');  
    }
    $cat_id=array_filter($cat_id);
    if(!empty($array['choosetype33r']) || !empty($array['choosetypedsf']) || !empty($array['choosetypesdd']) || !empty($array['choosetypesadd']) || !empty($array['choosetypeassa']) || !empty($array['choosetypeghgf'])){
        $job_emptype=array($array['choosetype33r'], $array['choosetypedsf'], $array['choosetypesdd'], $array['choosetypesadd'], $array['choosetypeassa'], $array['choosetypeghgf']);
    }else{
      $job_emptype=array('full-time');  
    }
    $job_emp=array_filter($job_emptype);
    if(!empty($array['smplechk1']) || !empty($array['smplechk2']) || !empty($array['smplechk3']) || !empty($array['smplechk4']) || !empty($array['smplechk4']) || !empty($array['smplechk5'])){
            
            for($i=1; $i<6; $i++){
                $smplechk='smplechk'.$i;
            $salleryarray = explode(",",$array[$smplechk]);
            $min_sal[] = $salleryarray[0];
            $max_sal[] = $salleryarray[1];
            }
    }else{
        $min_sal = 1;
        $max_sal = 10000000;
    }
    $min_sal=array_filter($min_sal);
    $max_sal=array_filter($max_sal);
    if(!empty($array['smplechk7']) || !empty($array['smplechk8']) || !empty($array['smplechk71']) || !empty($array['smplechk81'])){
    $clevel_id=array($array['smplechk7'], $array['smplechk8'], $array['smplechk71'], $array['smplechk81']);
    }else{
      $clevel_id=array('1');  
    }
    $clevel_id=array_filter($clevel_id);
    if(!empty($array['smplechk9']) || !empty($array['smplechk10']) || !empty($array['smplechk11']) || !empty($array['smplechk12']) || !empty($array['smplechk13']) || !empty($array['smplechk14']) || !empty($array['smplechk15'])){
        $job_explevel=array($array['smplechk9'], $array['smplechk10'], $array['smplechk11'], $array['smplechk12'], $array['smplechk13'], $array['smplechk14'], $array['smplechk15']);
    }else{
      $job_explevel=array('< 1 Year', '1 Year', '2 Year', '3 Year', '4 Year', '5 Year', '> 5 Year');  
    }
    $job_explevel=array_filter($job_explevel);
    if(!empty($array['smplechk16']) && !empty($array['smplechk17'])){
        $job_gender=array($array['smplechk16'], $array['smplechk17']);
    }else if($array['smplechk16'] == '' && $array['smplechk17'] == ''){
        $job_gender=array('all', 'Male', 'Female');
    }
    else if(!empty($array['smplechk16']) ){
        $job_gender=array($array['smplechk16']);
    }else{
      $job_gender=array($array['smplechk17']);  
    }
    $job_gender=array_filter($job_gender);
    $this->db->where('active/deactive', 1);
    $this->db->where('job_status', 1);
    //print_r($clevel_id);
    //die();
    $this->db->where_in('cat_id', $cat_id);
    $this->db->where_in('job_emptype', $job_emp);
    $this->db->where_in('job_salery_min', $min_sal);
    $this->db->where_in('job_salery_max', $max_sal);
    //$this->db->where_in('clevel_id', $clevel_id);
    $this->db->where_in('job_explevel', $job_explevel);
    $this->db->where_in('job_gender', $job_gender);
    $this->db->order_by($column_id,$order_by);
    $this->db->limit($config["per_page"],$this->db->escape($page)); 
    return $this->db->get('tbl_job')->result_array();
 }
   function featured_job_filter3_adv($column_id, $order_by, $table_name, $table_name1 ,  $config_base_ulr , $per_page, $array)
 {
     $page=0;
    $config = array();
    $config["base_url"] = $config_base_ulr;
    //$this->db->where(array('user_id' => $user_id));
    $this->db->where('active/deactive', 1);
        $this->db->where('job_status', 1);
    $total_row = $this->db->count_all_results($table_name);

    $config["uri_segment"] = 3;
    
    $config["total_rows"] = $total_row;
    $config["per_page"] = $per_page;
    
    $config['use_page_numbers'] = TRUE;
    
    $config['num_links'] = 10;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = 'first';
    $config['last_link'] = 'last';
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

    if(!empty($array['BANKING']) || !empty($array['ACCOUNTS & FINANCE']) || !empty($array['ENGINEERING']) || !empty($array['SALES & MARKETING']) || !empty($array['HUMAN RESOURCE']) || !empty($array['EDUCATIONS']) || !empty($array['OFFICE MANAGEMENT']) || !empty($array['BUSINESS DEVELOPMENT']) || !empty($array['INFORMATION TECHNOLOGY']) || !empty($array['MEDIA'])  || !empty($array['SECURITY'])  || !empty($array['GOVERNMENT'])){
        $cat_id=array($array['BANKING'], $array['ACCOUNTS & FINANCE'], $array['ENGINEERING'], $array['SALES & MARKETING'], $array['HUMAN RESOURCE'], $array['EDUCATIONS'], $array['OFFICE MANAGEMENT'], $array['BUSINESS DEVELOPMENT'], $array['INFORMATION TECHNOLOGY'], $array['MEDIA'], $array['SECURITY'], $array['GOVERNMENT']);
    }else{
      $cat_id=array('18','19','20','21','22','24','26','31','32','33','8','11');  
    }
    $cat_id=array_filter($cat_id);
    if(!empty($array['choosetype33r']) || !empty($array['choosetypedsf']) || !empty($array['choosetypesdd']) || !empty($array['choosetypesadd']) || !empty($array['choosetypeassa']) || !empty($array['choosetypeghgf'])){
        $job_emptype=array($array['choosetype33r'], $array['choosetypedsf'], $array['choosetypesdd'], $array['choosetypesadd'], $array['choosetypeassa'], $array['choosetypeghgf']);
    }else{
      $job_emptype=array('full-time');  
    }
    $job_emp=array_filter($job_emptype);
    if(!empty($array['smplechk1']) || !empty($array['smplechk2']) || !empty($array['smplechk3']) || !empty($array['smplechk4']) || !empty($array['smplechk4']) || !empty($array['smplechk5'])){
            
            for($i=1; $i<6; $i++){
                $smplechk='smplechk'.$i;
            $salleryarray = explode(",",$array[$smplechk]);
            $min_sal[] = $salleryarray[0];
            $max_sal[] = $salleryarray[1];
            }
    }else{
        $min_sal = 1;
        $max_sal = 10000000;
    }
    $min_sal=array_filter($min_sal);
    $max_sal=array_filter($max_sal);
    if(!empty($array['smplechk7']) || !empty($array['smplechk8']) || !empty($array['smplechk71']) || !empty($array['smplechk81'])){
    $clevel_id=array($array['smplechk7'], $array['smplechk8'], $array['smplechk71'], $array['smplechk81']);
    }else{
      $clevel_id=array('1');  
    }
    $clevel_id=array_filter($clevel_id);
    if(!empty($array['smplechk9']) || !empty($array['smplechk10']) || !empty($array['smplechk11']) || !empty($array['smplechk12']) || !empty($array['smplechk13']) || !empty($array['smplechk14']) || !empty($array['smplechk15'])){
        $job_explevel=array($array['smplechk9'], $array['smplechk10'], $array['smplechk11'], $array['smplechk12'], $array['smplechk13'], $array['smplechk14'], $array['smplechk15']);
    }else{
      $job_explevel=array('< 1 Year', '1 Year', '2 Year', '3 Year', '4 Year', '5 Year', '> 5 Year');  
    }
    $job_explevel=array_filter($job_explevel);
    if(!empty($array['smplechk16']) && !empty($array['smplechk17'])){
        $job_gender=array($array['smplechk16'], $array['smplechk17']);
    }else if($array['smplechk16'] == '' && $array['smplechk17'] == ''){
        $job_gender=array('all', 'Male', 'Female');
    }
    else if(!empty($array['smplechk16']) ){
        $job_gender=array($array['smplechk16']);
    }else{
      $job_gender=array($array['smplechk17']);  
    }
    $job_gender=array_filter($job_gender);
    $this->db->where('active/deactive', 1);
    $this->db->where('job_status', 1);
    //print_r($clevel_id);
    //die();
    $this->db->where_in('cat_id', $cat_id);
    $this->db->where_in('job_emptype', $job_emp);
    $this->db->where_in('job_salery_min', $min_sal);
    $this->db->where_in('job_salery_max', $max_sal);
    //$this->db->where_in('clevel_id', $clevel_id);
    $this->db->where_in('job_explevel', $job_explevel);
    $this->db->where_in('job_gender', $job_gender);
    $this->db->order_by($column_id,$order_by);
    $this->db->limit($config["per_page"],$this->db->escape($page)); 
    return $this->db->get('tbl_job')->result_array();
 }

 //featuredjob filter
 // userdashboard jobs pagination select query ends

 function pagination_userdashboardjobsdata1($column_id, $order_by, $table_name, $table_name1 ,  $config_base_ulr , $per_page)
 {
     $page=0;
    $config = array();
    $config["base_url"] = $config_base_ulr;
    //$this->db->where(array('user_id' => $user_id));
    $this->db->where('tbl_job.active/deactive', 1);
        $this->db->where('tbl_job.job_status', 1);
        $this->db->where('tbl_job.featured', 1);
    $total_row = $this->db->count_all_results($table_name);

    $config["uri_segment"] = 3;
    
    $config["total_rows"] = $total_row;
    $config["per_page"] = $per_page;
    
    $config['use_page_numbers'] = TRUE;
    
    $config['num_links'] = 10;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = 'first';
    $config['last_link'] = 'last';
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
    $this->db->where('tbl_job.active/deactive', 1);
        $this->db->where('tbl_job.job_status', 1);
        $this->db->where('tbl_job.featured', 1);
   $this->db->join('tbl_cat', 'tbl_cat.cat_id = tbl_job.cat_id');
    $this->db->join('tbl_company', 'tbl_company.comp_id = tbl_job.comp_id');
    $this->db->order_by($column_id,$order_by);
    $this->db->limit(6); 
     
    return $this->db->get('tbl_job')->result_array();
    
 }
  function pagination_userdashboardjobsdata1_adv($column_id, $order_by, $table_name, $table_name1 ,  $config_base_ulr , $per_page)
 {
     $page=0;
    $config = array();
    $config["base_url"] = $config_base_ulr;
    //$this->db->where(array('user_id' => $user_id));
    $this->db->where('tbl_job.active/deactive', 1);
        $this->db->where('tbl_job.job_status', 1);
        $this->db->where('tbl_job.featured', 1);
    $total_row = $this->db->count_all_results($table_name);

    $config["uri_segment"] = 3;
    
    $config["total_rows"] = $total_row;
    $config["per_page"] = $per_page;
    
    $config['use_page_numbers'] = TRUE;
    
    $config['num_links'] = 10;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = 'first';
    $config['last_link'] = 'last';
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
    $this->db->where('tbl_job.active/deactive', 1);
        $this->db->where('tbl_job.job_status', 1);
   $this->db->join('tbl_cat', 'tbl_cat.cat_id = tbl_job.cat_id');
    $this->db->join('tbl_company', 'tbl_company.comp_id = tbl_job.comp_id');
    $this->db->order_by($column_id,$order_by);
    $this->db->limit(6); 
     
    return $this->db->get('tbl_job')->result_array();
    
 }


//////// CATEGORY /////////
/* categories ends */


 function pagination_blog($column_id, $order_by, $table_name ,  $config_base_ulr , $per_page)
 {
     $page=0;
    $config = array();
    $config["base_url"] = $config_base_ulr;
    //$this->db->where(array('user_id' => $user_id));
   
        $this->db->where('blog_status', 1);
    $total_row = $this->db->count_all_results($table_name);

    $config["uri_segment"] = 3;
    
    $config["total_rows"] = $total_row;
    $config["per_page"] = $per_page;
    
    $config['use_page_numbers'] = TRUE;
    
    $config['num_links'] = 10;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = 'first';
    $config['last_link'] = 'last';
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
    // $this->db->where('active/deactive', 1);
        $this->db->where('blog_status', 1);

    //     $this->db->select('tbl_company.*, tbl_job.*');
    // $this->db->from('tbl_job', 'tbl_company');
    // $this->db->join('tbl_company', 'tbl_company.comp_id = tbl_job.comp_id');

    $this->db->order_by($column_id,$order_by);
    $this->db->limit($config["per_page"],$this->db->escape($page)); 
    // $this->db->join('tbl_company', 'tbl_job.comp_id = tbl_company.comp_id');
    return $this->db->get('tbl_blog')->result_array();
    
 }




function pagination_blog_cat($cid)
 {
    
    // $this->db->where('active/deactive', 1);
        $this->db->where('blog_status', 1);
         $this->db->where('cat_id', $cid);

    return $this->db->get('tbl_blog')->result_array();
    
 }




//////// SUB CATEGORY /////////
/* SUB categories STARTS */
     

    function companylogo()
{
    $this->db->select('tbl_job.*,tbl_company.*');
    $this->db->from('tbl_job', 'tbl_company');
       $this->db->where('tbl_job.comp_id', 'tbl_company.comp_id');
    $this->db->join('tbl_company', 'tbl_company.comp_id = tbl_job.comp_id');
    $result = $this->db->get();
    return $result->result_array();
}
function company_logo($id)
{
    $this->db->select('*');
    $this->db->from('tbl_company');
       $this->db->where('comp_id', $id);
       $this->db->where('check_confidential', NULL);
    $result = $this->db->get();
    return $result->result_array();
}

function get_subcat()
{
    $this->db->select('tbl_subcat.*,tbl_cat.*');
    $this->db->from('tbl_subcat', 'tbl_cat');
    $this->db->join('tbl_cat', 'tbl_cat.cat_id = tbl_subcat.cat_id');
    $result = $this->db->get();
    return $result->result_array();
}

function get_skills()
{
    $this->db->select('tbl_skill.*,tbl_subcat.*,tbl_cat.*');
    $this->db->from('tbl_skill','tbl_subcat', 'tbl_cat');
    $this->db->join('tbl_cat', 'tbl_cat.cat_id = tbl_skill.cat_id');
    $this->db->join('tbl_subcat', 'tbl_subcat.subcat_id = tbl_skill.subcat_id');
    $result = $this->db->get();
    return $result->result_array();
}

//////// SUB CATEGORY /////////
/* SUB categories ENDS */


    ////////STUDENT/////////////
    function get_students($class_id) {
        $query = $this->db->get_where('student', array('class_id' => $class_id));
        return $query->result_array();
    }

    function get_student_info($student_id) {
        $query = $this->db->get_where('student', array('student_id' => $student_id));
        return $query->result_array();
    }

    /////////TEACHER/////////////
    function get_teachers() {
        $query = $this->db->get('teacher');
        return $query->result_array();
    }

    function get_teacher_name($teacher_id) {
        $query = $this->db->get_where('teacher', array('teacher_id' => $teacher_id));
        $res = $query->result_array();
        foreach ($res as $row)
            return $row['name'];
    }

    function get_teacher_info($teacher_id) {
        $query = $this->db->get_where('teacher', array('teacher_id' => $teacher_id));
        return $query->result_array();
    }

    //////////SUBJECT/////////////
    function get_subjects() {
        $query = $this->db->get('subject');
        return $query->result_array();
    }

    function get_subject_info($subject_id) {
        $query = $this->db->get_where('subject', array('subject_id' => $subject_id));
        return $query->result_array();
    }

    function get_subjects_by_class($class_id) {
        $query = $this->db->get_where('subject', array('class_id' => $class_id));
        return $query->result_array();
    }

    function get_subject_name_by_id($subject_id) {
        $query = $this->db->get_where('subject', array('subject_id' => $subject_id))->row();
        return $query->name;
    }

    ////////////CLASS///////////
    function get_class_name($class_id) {
        $query = $this->db->get_where('class', array('class_id' => $class_id));
        $res = $query->result_array();
        foreach ($res as $row)
            return $row['name'];
    }

    function get_class_name_numeric($class_id) {
        $query = $this->db->get_where('class', array('class_id' => $class_id));
        $res = $query->result_array();
        foreach ($res as $row)
            return $row['name_numeric'];
    }

    function get_classes() {
        $query = $this->db->get('class');
        return $query->result_array();
    }

    function get_class_info($class_id) {
        $query = $this->db->get_where('class', array('class_id' => $class_id));
        return $query->result_array();
    }

   

    //////////GRADES/////////////
    function get_grades() {
        $query = $this->db->get('grade');
        return $query->result_array();
    }

    function get_grade_info($grade_id) {
        $query = $this->db->get_where('grade', array('grade_id' => $grade_id));
        return $query->result_array();
    }

    function get_grade($mark_obtained) {
        $query = $this->db->get('grade');
        $grades = $query->result_array();
        foreach ($grades as $row) {
            if ($mark_obtained >= $row['mark_from'] && $mark_obtained <= $row['mark_upto'])
                return $row;
        }
    }

    function create_log($data) {
        $data['timestamp'] = strtotime(date('Y-m-d') . ' ' . date('H:i:s'));
        $data['ip'] = $_SERVER["REMOTE_ADDR"];
        $location = new SimpleXMLElement(file_get_contents('http://freegeoip.net/xml/' . $_SERVER["REMOTE_ADDR"]));
        $data['location'] = $location->City . ' , ' . $location->CountryName;
        $this->db->insert('log', $data);
    }

    function get_system_settings() {
        $query = $this->db->get('settings');
        return $query->result_array();
    }

    ////////BACKUP RESTORE/////////
    function create_backup($type) {
        $this->load->dbutil();


        $options = array(
            'format' => 'txt', // gzip, zip, txt
            'add_drop' => TRUE, // Whether to add DROP TABLE statements to backup file
            'add_insert' => TRUE, // Whether to add INSERT data to backup file
            'newline' => "\n"               // Newline character used in backup file
        );


        if ($type == 'all') {
            $tables = array('');
            $file_name = 'system_backup';
        } else {
            $tables = array('tables' => array($type));
            $file_name = 'backup_' . $type;
        }

        $backup = & $this->dbutil->backup(array_merge($options, $tables));


        $this->load->helper('download');
        force_download($file_name . '.sql', $backup);
    }

    /////////RESTORE TOTAL DB/ DB TABLE FROM UPLOADED BACKUP SQL FILE//////////
    function restore_backup() {
        move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/backup.sql');
        $this->load->dbutil();


        $prefs = array(
            'filepath' => 'uploads/backup.sql',
            'delete_after_upload' => TRUE,
            'delimiter' => ';'
        );
        $restore = & $this->dbutil->restore($prefs);
        unlink($prefs['filepath']);
    }

    /////////DELETE DATA FROM TABLES///////////////
    function truncate($type) {
        if ($type == 'all') {
            $this->db->truncate('student');
            $this->db->truncate('mark');
            $this->db->truncate('teacher');
            $this->db->truncate('subject');
            $this->db->truncate('class');
            $this->db->truncate('exam');
            $this->db->truncate('grade');
        } else {
            $this->db->truncate($type);
        }
    }

    ////////IMAGE URL//////////
    function get_image_url($type = '', $id = '') {
        if (file_exists('uploads/' . $type . '_image/' . $id . '.jpg'))
            $image_url = base_url() . 'uploads/' . $type . '_image/' . $id . '.jpg';
        else
            $image_url = base_url() . 'uploads/user.jpg';

        return $image_url;
    }

    ////////STUDY MATERIAL//////////
    function save_study_material_info()
    {
        $data['timestamp']      = strtotime($this->input->post('timestamp'));
        $data['title'] 		= $this->input->post('title');
        $data['description']    = $this->input->post('description');
        $data['file_name'] 	= $_FILES["file_name"]["name"];
        $data['file_type'] 	= $this->input->post('file_type');
        $data['class_id'] 	= $this->input->post('class_id');
        
        $this->db->insert('document',$data);
        
        $document_id            = $this->db->insert_id();
        move_uploaded_file($_FILES["file_name"]["tmp_name"], "uploads/document/" . $_FILES["file_name"]["name"]);
    }
    
    function select_study_material_info()
    {
        $this->db->order_by("timestamp", "desc");
        return $this->db->get('document')->result_array(); 
    }
    
    function select_study_material_info_for_student()
    {
        $student_id = $this->session->userdata('student_id');
        $class_id   = $this->db->get_where('student', array('student_id' => $student_id))->row()->class_id;
        $this->db->order_by("timestamp", "desc");
        return $this->db->get_where('document', array('class_id' => $class_id))->result_array();
    }
    
    function update_study_material_info($document_id)
    {
        $data['timestamp']      = strtotime($this->input->post('timestamp'));
        $data['title'] 		= $this->input->post('title');
        $data['description']    = $this->input->post('description');
        $data['class_id'] 	= $this->input->post('class_id');
        
        $this->db->where('document_id',$document_id);
        $this->db->update('document',$data);
    }
    
    function delete_study_material_info($document_id)
    {
        $this->db->where('document_id',$document_id);
        $this->db->delete('document');
    }
	//////////////////////////////private groupmessage
	function  groupchat(){
		
	}
	////////////////////////////////
    function send_group_private_message(){
	
		 $message    = $this->input->post('message');
        $timestamp  = strtotime(date("Y-m-d H:i:s"));

        $reciever   = $this->input->post('reciever');
		$senderid=$this->input->post('senderid');
		$role=$this->input->post('role');
		
//$this->db->from('studentgroup');
	//	 $this->db->where('group_id',$reciever);
     //   $data = $this->db->get();
	
	//	foreach($data->result() as $row){
			$data = array(
               'sender_id' => $senderid,
			   'role'=>$role,
			   'message'=>$message,
			   'time'=>$timestamp,
               
				'group_id' => $reciever
            );
			print_r($data);
			
			


$this->db->insert('goupchat', $data);
	
		//}
		return $reciever;
		
	}
    ////////private message//////
    function send_new_private_message() {
        $message    = $this->input->post('message');
        $timestamp  = strtotime(date("Y-m-d H:i:s"));

        $reciever   = $this->input->post('reciever');
        $sender     = $this->session->userdata('login_type') . '-' . $this->session->userdata('login_user_id');

        //check if the thread between those 2 users exists, if not create new thread
        $num1 = $this->db->get_where('message_thread', array('sender' => $sender, 'reciever' => $reciever))->num_rows();
        $num2 = $this->db->get_where('message_thread', array('sender' => $reciever, 'reciever' => $sender))->num_rows();

        if ($num1 == 0 && $num2 == 0) {
            $message_thread_code                        = substr(md5(rand(100000000, 20000000000)), 0, 15);
            $data_message_thread['message_thread_code'] = $message_thread_code;
            $data_message_thread['sender']              = $sender;
            $data_message_thread['reciever']            = $reciever;
            $this->db->insert('message_thread', $data_message_thread);
        }
        if ($num1 > 0)
            $message_thread_code = $this->db->get_where('message_thread', array('sender' => $sender, 'reciever' => $reciever))->row()->message_thread_code;
        if ($num2 > 0)
            $message_thread_code = $this->db->get_where('message_thread', array('sender' => $reciever, 'reciever' => $sender))->row()->message_thread_code;


        $data_message['message_thread_code']    = $message_thread_code;
        $data_message['message']                = $message;
        $data_message['sender']                 = $sender;
        $data_message['timestamp']              = $timestamp;
        $this->db->insert('message', $data_message);

        // notify email to email reciever
        //$this->email_model->notify_email('new_message_notification', $this->db->insert_id());

        return $message_thread_code;
    }
	function send_reply_groupmessage($groupid){
	$data['message']    = $this->input->post('message');
	$data['time']   = strtotime(date("Y-m-d H:i:s"));
	$data['group_id']	=$groupid;
		$data['sender_id']=$this->input->Post('session_id');
		$data['role']=$this->input->Post('role');
		
		 $this->db->insert('goupchat', $data);
		
	}

     function package_detail($user_id)
 {
    $this->db->select('ep.*');
    $this->db->from('emp_packages as ep');
     $this->db->where('epd.user_id',$user_id);
    $this->db->join('emp_package_detail as epd', 'ep.emp_id = epd.package_id');
    $result = $this->db->get();
    return $result->result_array();
    //$this->db->where('user_id',$user_id);
    //return $this->db->get($table_name)->result_array();
 }
/// User Package detail query ends


 /// User Package detail starts ///
 function count_posted_jobs($table_name,$user_id)
 {
    $this->db->where('user_id',$user_id);
    $data = $this->db->count_all_results($table_name);
        return $data;
 }
/// User Package detail query ends
    

    function send_reply_message($message_thread_code) {
        $message    = $this->input->post('message');
		
        $timestamp  = strtotime(date("Y-m-d H:i:s"));
        $sender     = $this->session->userdata('login_type') . '-' . $this->session->userdata('login_user_id');


        $data_message['message_thread_code']    = $message_thread_code;
        $data_message['message']                = $message;
        $data_message['sender']                 = $sender;
        $data_message['timestamp']              = $timestamp;
        $this->db->insert('message', $data_message);

        // notify email to email reciever
        //$this->email_model->notify_email('new_message_notification', $this->db->insert_id());
    }

    function mark_thread_messages_read($message_thread_code) {
        // mark read only the oponnent messages of this thread, not currently logged in user's sent messages
        $current_user = $this->session->userdata('login_type') . '-' . $this->session->userdata('login_user_id');
        $this->db->where('sender !=', $current_user);
        $this->db->where('message_thread_code', $message_thread_code);
        $this->db->update('message', array('read_status' => 1));
    }


    function count_unread_message_of_thread($message_thread_code) {
        $unread_message_counter = 0;
        $current_user = $this->session->userdata('login_type') . '-' . $this->session->userdata('login_user_id');
        $messages = $this->db->get_where('message', array('message_thread_code' => $message_thread_code))->result_array();
        foreach ($messages as $row) {
            if ($row['sender'] != $current_user && $row['read_status'] == '0')
                $unread_message_counter++;
        }
        return $unread_message_counter;
    }
    public function search_home_basic1($column_id, $order_by, $table_name, $table_name1 ,  $config_base_ulr , $per_page, $dat){
                    $page=0;
            $config = array();
            $config["base_url"] = $config_base_ulr;
            $this->db->where('active/deactive', 1);
            $this->db->where('job_status', 1);
            $total_row = $this->db->count_all_results($table_name);
            $config["uri_segment"] = 3;
            $config["total_rows"] = $total_row;
            $config["per_page"] = $per_page;
            $config['use_page_numbers'] = TRUE;
            $config['num_links'] = 10;
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['first_link'] = 'first';
            $config['last_link'] = 'last';
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
                $page = ($this->uri->segment(3)-1)*10 ;
            }
            else{
                  $page = 0;
            } 
                $salleryarray = explode(",",$dat['job_sallery']);
                 $min_sal = $salleryarray[0];
                 $max_sal = $salleryarray[1];
                 //print_r($dat);
            $this->db->like('job_title',$dat['keyword'], 'before');
            $this->db->or_like('job_title',$dat['keyword'], 'after');
            $this->db->or_like('job_title',$dat['keyword'], 'both');
            $this->db->where('active/deactive', 1);
            $this->db->where('job_status', 1);
            //$this->db->where('cat_id', $dat['cat_id']);
            //$this->db->where('job_salery_min >=', $min_sal);
            //$this->db->where('job_salery_max <=', $max_sal);
            //$this->db->where('skill_id', $dat['skill_id']);
            //$this->db->where('job_explevel', $dat['job_explevel']);
            $this->db->like('job_location', $dat['job_location'], 'before');
            $this->db->or_like('job_location', $dat['job_location'], 'after');
            $this->db->or_like('job_location', $dat['job_location'], 'both');
            //$this->db->where('job_emptype', $dat['job_emptype']);
             $this->db->join('tbl_company', 'tbl_company.comp_id = tbl_job.comp_id');
            $this->db->order_by($column_id,$order_by);
            $this->db->limit($config["per_page"],$this->db->escape($page)); 
            $res=$this->db->get('tbl_job')->result_array();
            return $res;
    }
    public function search_home_basic2($column_id, $order_by, $table_name, $table_name1 ,  $config_base_ulr , $per_page, $dat){
            $page=0;
            $config = array();
            $config["base_url"] = $config_base_ulr;
            $this->db->where('active/deactive', 1);
            $this->db->where('job_status', 1);
            $total_row = $this->db->count_all_results($table_name);
            $config["uri_segment"] = 3;
            $config["total_rows"] = $total_row;
            $config["per_page"] = $per_page;
            $config['use_page_numbers'] = TRUE;
            $config['num_links'] = 10;
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['first_link'] = 'first';
            $config['last_link'] = 'last';
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
                $page = ($this->uri->segment(3)-1)*10 ;
            }
            else{
                  $page = 0;
            } 
                $salleryarray = explode(",",$dat['job_sallery']);
                 $min_sal = $salleryarray[0];
                 $max_sal = $salleryarray[1];
                 //print_r($dat);
            $this->db->like('job_title',$dat['keyword'], 'before');
            $this->db->or_like('job_title',$dat['keyword'], 'after');
            $this->db->or_like('job_title',$dat['keyword'], 'both');
            $this->db->where('active/deactive', 1);
            $this->db->where('job_status', 1);
            //$this->db->where('cat_id', $dat['cat_id']);
            //$this->db->where('job_salery_min >=', $min_sal);
            //$this->db->where('job_salery_max <=', $max_sal);
            //$this->db->where('skill_id', $dat['skill_id']);
            //$this->db->where('job_explevel', $dat['job_explevel']);
            //$this->db->like('job_location', $dat['job_location'], 'before');
            //$this->db->or_like('job_location', $dat['job_location'], 'after');
            //$this->db->or_like('job_location', $dat['job_location'], 'both');
            //$this->db->where('job_emptype', $dat['job_emptype']);
             $this->db->join('tbl_company', 'tbl_company.comp_id = tbl_job.comp_id');
            $this->db->order_by($column_id,$order_by);
            $this->db->limit($config["per_page"],$this->db->escape($page)); 
            $res=$this->db->get('tbl_job')->result_array();
            return $res;
    }
    public function search_home_basic3($column_id, $order_by, $table_name, $table_name1 ,  $config_base_ulr , $per_page, $dat){
            $page=0;
            $config = array();
            $config["base_url"] = $config_base_ulr;
            $this->db->where('active/deactive', 1);
            $this->db->where('job_status', 1);
            $total_row = $this->db->count_all_results($table_name);
            $config["uri_segment"] = 3;
            $config["total_rows"] = $total_row;
            $config["per_page"] = $per_page;
            $config['use_page_numbers'] = TRUE;
            $config['num_links'] = 10;
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['first_link'] = 'first';
            $config['last_link'] = 'last';
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
                $page = ($this->uri->segment(3)-1)*10 ;
            }
            else{
                  $page = 0;
            } 
                $salleryarray = explode(",",$dat['job_sallery']);
                 $min_sal = $salleryarray[0];
                 $max_sal = $salleryarray[1];
                 //print_r($dat);
            //$this->db->like('job_title',$dat['keyword'], 'before');
            //$this->db->or_like('job_title',$dat['keyword'], 'after');
            //$this->db->or_like('job_title',$dat['keyword'], 'both');
            $this->db->where('active/deactive', 1);
            $this->db->where('job_status', 1);
            //$this->db->where('cat_id', $dat['cat_id']);
            //$this->db->where('job_salery_min >=', $min_sal);
            //$this->db->where('job_salery_max <=', $max_sal);
            //$this->db->where('skill_id', $dat['skill_id']);
            //$this->db->where('job_explevel', $dat['job_explevel']);
            $this->db->like('job_location', $dat['job_location'], 'before');
            $this->db->or_like('job_location', $dat['job_location'], 'after');
            $this->db->or_like('job_location', $dat['job_location'], 'both');
            //$this->db->where('job_emptype', $dat['job_emptype']);
             $this->db->join('tbl_company', 'tbl_company.comp_id = tbl_job.comp_id');
            $this->db->order_by($column_id,$order_by);
            $this->db->limit($config["per_page"],$this->db->escape($page)); 
            $res=$this->db->get('tbl_job')->result_array();
            return $res;
    }
        public function search_home_basic4($column_id, $order_by, $table_name, $table_name1 ,  $config_base_ulr , $per_page, $dat){
            $page=0;
            $config = array();
            $config["base_url"] = $config_base_ulr;
            $this->db->where('active/deactive', 1);
            $this->db->where('job_status', 1);
            $total_row = $this->db->count_all_results($table_name);
            $config["uri_segment"] = 3;
            $config["total_rows"] = $total_row;
            $config["per_page"] = $per_page;
            $config['use_page_numbers'] = TRUE;
            $config['num_links'] = 10;
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['first_link'] = 'first';
            $config['last_link'] = 'last';
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
                $page = ($this->uri->segment(3)-1)*10 ;
            }
            else{
                  $page = 0;
            } 
                $salleryarray = explode(",",$dat['job_sallery']);
                 $min_sal = $salleryarray[0];
                 $max_sal = $salleryarray[1];
                 //print_r($dat);
            $this->db->like('job_title',$dat['keyword'], 'before');
            $this->db->or_like('job_title',$dat['keyword'], 'after');
            $this->db->or_like('job_title',$dat['keyword'], 'both');
            $this->db->where('active/deactive', 1);
            $this->db->where('job_status', 1);
            $this->db->where('cat_id', $dat['cat_id']);
            //$this->db->where('job_salery_min >=', $min_sal);
            //$this->db->where('job_salery_max <=', $max_sal);
            //$this->db->where('skill_id', $dat['skill_id']);
            //$this->db->where('job_explevel', $dat['job_explevel']);
           // $this->db->like('job_location', $dat['job_location'], 'before');
            //$this->db->or_like('job_location', $dat['job_location'], 'after');
            //$this->db->or_like('job_location', $dat['job_location'], 'both');
            //$this->db->where('job_emptype', $dat['job_emptype']);
             $this->db->join('tbl_company', 'tbl_company.comp_id = tbl_job.comp_id');
            $this->db->order_by($column_id,$order_by);
            $this->db->limit($config["per_page"],$this->db->escape($page)); 
            $res=$this->db->get('tbl_job')->result_array();
            return $res;
    }
    public function search_home_basic5($column_id, $order_by, $table_name, $table_name1 ,  $config_base_ulr , $per_page, $dat){
            $page=0;
            $config = array();
            $config["base_url"] = $config_base_ulr;
            $this->db->where('active/deactive', 1);
            $this->db->where('job_status', 1);
            $total_row = $this->db->count_all_results($table_name);
            $config["uri_segment"] = 3;
            $config["total_rows"] = $total_row;
            $config["per_page"] = $per_page;
            $config['use_page_numbers'] = TRUE;
            $config['num_links'] = 10;
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['first_link'] = 'first';
            $config['last_link'] = 'last';
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
                $page = ($this->uri->segment(3)-1)*10 ;
            }
            else{
                  $page = 0;
            } 
                $salleryarray = explode(",",$dat['job_sallery']);
                 $min_sal = $salleryarray[0];
                 $max_sal = $salleryarray[1];
                 //print_r($dat);
            //$this->db->like('job_title',$dat['keyword'], 'before');
            //$this->db->or_like('job_title',$dat['keyword'], 'after');
            //$this->db->or_like('job_title',$dat['keyword'], 'both');
            $this->db->where('active/deactive', 1);
            $this->db->where('job_status', 1);
            $this->db->where('cat_id', $dat['cat_id']);
            //$this->db->where('job_salery_min >=', $min_sal);
            //$this->db->where('job_salery_max <=', $max_sal);
            //$this->db->where('skill_id', $dat['skill_id']);
            //$this->db->where('job_explevel', $dat['job_explevel']);
            //$this->db->like('job_location', $dat['job_location'], 'before');
            //$this->db->or_like('job_location', $dat['job_location'], 'after');
            //$this->db->or_like('job_location', $dat['job_location'], 'both');
            //$this->db->where('job_emptype', $dat['job_emptype']);
             $this->db->join('tbl_company', 'tbl_company.comp_id = tbl_job.comp_id');
            $this->db->order_by($column_id,$order_by);
            $this->db->limit($config["per_page"],$this->db->escape($page)); 
            $res=$this->db->get('tbl_job')->result_array();
            return $res;
    }
        public function search_home_basic6($column_id, $order_by, $table_name, $table_name1 ,  $config_base_ulr , $per_page, $dat){
            $page=0;
            $config = array();
            $config["base_url"] = $config_base_ulr;
            $this->db->where('active/deactive', 1);
            $this->db->where('job_status', 1);
            $total_row = $this->db->count_all_results($table_name);
            $config["uri_segment"] = 3;
            $config["total_rows"] = $total_row;
            $config["per_page"] = $per_page;
            $config['use_page_numbers'] = TRUE;
            $config['num_links'] = 10;
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['first_link'] = 'first';
            $config['last_link'] = 'last';
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
                $page = ($this->uri->segment(3)-1)*10 ;
            }
            else{
                  $page = 0;
            } 
                $salleryarray = explode(",",$dat['job_sallery']);
                 $min_sal = $salleryarray[0];
                 $max_sal = $salleryarray[1];
                 //print_r($dat);
            //$this->db->like('job_title',$dat['keyword'], 'before');
            //$this->db->or_like('job_title',$dat['keyword'], 'after');
            //$this->db->or_like('job_title',$dat['keyword'], 'both');
            $this->db->where('active/deactive', 1);
            $this->db->where('job_status', 1);
            $this->db->where('cat_id', $dat['cat_id']);
            //$this->db->or_where('job_salery_min >=', $min_sal);
            //$this->db->or_where('job_salery_max <=', $max_sal);
            //$this->db->or_where('skill_id', $dat['skill_id']);
            //$this->db->or_where('job_explevel', $dat['job_explevel']);
            //$this->db->or_where('job_emptype', $dat['job_emptype']);
            $this->db->like('job_location', $dat['job_location'], 'before');
            $this->db->or_like('job_location', $dat['job_location'], 'after');
            $this->db->or_like('job_location', $dat['job_location'], 'both');
             $this->db->join('tbl_company', 'tbl_company.comp_id = tbl_job.comp_id');
            $this->db->order_by($column_id,$order_by);
            $this->db->limit($config["per_page"],$this->db->escape($page)); 
            $res=$this->db->get('tbl_job')->result_array();
            return $res;
    }
    public function search_home_basic7($column_id, $order_by, $table_name, $table_name1 ,  $config_base_ulr , $per_page, $dat){
            $page=0;
            $config = array();
            $config["base_url"] = $config_base_ulr;
            $this->db->where('active/deactive', 1);
            $this->db->where('job_status', 1);
            $total_row = $this->db->count_all_results($table_name);
            $config["uri_segment"] = 3;
            $config["total_rows"] = $total_row;
            $config["per_page"] = $per_page;
            $config['use_page_numbers'] = TRUE;
            $config['num_links'] = 10;
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['first_link'] = 'first';
            $config['last_link'] = 'last';
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
                $page = ($this->uri->segment(3)-1)*10 ;
            }
            else{
                  $page = 0;
            } 
                $salleryarray = explode(",",$dat['job_sallery']);
                 $min_sal = $salleryarray[0];
                 $max_sal = $salleryarray[1];
            $this->db->where('active/deactive', 1);
            $this->db->where('job_status', 1);
             $this->db->join('tbl_company', 'tbl_company.comp_id = tbl_job.comp_id');
            $this->db->order_by($column_id,$order_by);
            $this->db->limit($config["per_page"],$this->db->escape($page)); 
            $res=$this->db->get('tbl_job')->result_array();
            return $res;
    }
    public function search_home_basic($column_id, $order_by, $table_name, $table_name1 ,  $config_base_ulr , $per_page, $dat){
                    $page=0;
            $config = array();
            $config["base_url"] = $config_base_ulr;
            $this->db->where('active/deactive', 1);
            $this->db->where('job_status', 1);
            $total_row = $this->db->count_all_results($table_name);
            $config["uri_segment"] = 3;
            $config["total_rows"] = $total_row;
            $config["per_page"] = $per_page;
            $config['use_page_numbers'] = TRUE;
            $config['num_links'] = 10;
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['first_link'] = 'first';
            $config['last_link'] = 'last';
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
                $page = ($this->uri->segment(3)-1)*10 ;
            }
            else{
                  $page = 0;
            } 
                $salleryarray = explode(",",$dat['job_sallery']);
                 $min_sal = $salleryarray[0];
                 $max_sal = $salleryarray[1];
                 //print_r($dat);
            $this->db->like('job_title',$dat['keyword'], 'before');
            $this->db->or_like('job_title',$dat['keyword'], 'after');
            $this->db->or_like('job_title',$dat['keyword'], 'both');
            $this->db->where('active/deactive', 1);
            $this->db->where('job_status', 1);
            $this->db->where('cat_id', $dat['cat_id']);
            //$this->db->where('job_salery_min >=', $min_sal);
            //$this->db->where('job_salery_max <=', $max_sal);
            //$this->db->where('skill_id', $dat['skill_id']);
            //$this->db->where('job_explevel', $dat['job_explevel']);
            $this->db->like('job_location', $dat['job_location'], 'before');
            $this->db->or_like('job_location', $dat['job_location'], 'after');
            $this->db->or_like('job_location', $dat['job_location'], 'both');
            //$this->db->where('job_emptype', $dat['job_emptype']);
             $this->db->join('tbl_company', 'tbl_company.comp_id = tbl_job.comp_id');
            $this->db->order_by($column_id,$order_by);
            $this->db->limit($config["per_page"],$this->db->escape($page)); 
            $res=$this->db->get('tbl_job')->result_array();
            return $res;
    }
    public function search_home($column_id, $order_by, $table_name, $table_name1 ,  $config_base_ulr , $per_page, $dat){
        if($dat['keyword'] != ''){
            $page=0;
            $config = array();
            $config["base_url"] = $config_base_ulr;
            $this->db->where('active/deactive', 1);
            $this->db->where('job_status', 1);
            $total_row = $this->db->count_all_results($table_name);
            $config["uri_segment"] = 3;
            $config["total_rows"] = $total_row;
            $config["per_page"] = $per_page;
            $config['use_page_numbers'] = TRUE;
            $config['num_links'] = 10;
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['first_link'] = 'first';
            $config['last_link'] = 'last';
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
                $page = ($this->uri->segment(3)-1)*10 ;
            }
            else{
                  $page = 0;
            } 
                $salleryarray = explode(",",$dat['job_sallery']);
                 $min_sal = $salleryarray[0];
                 $max_sal = $salleryarray[1];
                 //print_r($dat);
            $this->db->like('job_title',$dat['keyword'], 'before');
            $this->db->or_like('job_title',$dat['keyword'], 'after');
            $this->db->or_like('job_title',$dat['keyword'], 'both');
            $this->db->where('active/deactive', 1);
            $this->db->where('job_status', 1);
            $this->db->where('cat_id', $dat['cat_id']);
            $this->db->where('job_salery_min >=', $min_sal);
            $this->db->where('job_salery_max <=', $max_sal);
            $this->db->where('skill_id', $dat['skill_id']);
            $this->db->where('job_explevel', $dat['job_explevel']);
            $this->db->like('job_location', $dat['job_location'], 'before');
            $this->db->or_like('job_location', $dat['job_location'], 'after');
            $this->db->or_like('job_location', $dat['job_location'], 'both');
            $this->db->where('job_emptype', $dat['job_emptype']);
             $this->db->join('tbl_company', 'tbl_company.comp_id = tbl_job.comp_id');
            $this->db->order_by($column_id,$order_by);
            $this->db->limit($config["per_page"],$this->db->escape($page)); 
            $res=$this->db->get('tbl_job')->result_array();
            return $res;
        }else{
           
            $page=0;
            $config = array();
            $config["base_url"] = $config_base_ulr;
            $this->db->where('active/deactive', 1);
            $this->db->where('job_status', 1);
            $total_row = $this->db->count_all_results($table_name);
            $config["uri_segment"] = 3;
            $config["total_rows"] = $total_row;
            $config["per_page"] = $per_page;
            $config['use_page_numbers'] = TRUE;
            $config['num_links'] = 10;
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['first_link'] = 'first';
            $config['last_link'] = 'last';
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
                $page = ($this->uri->segment(3)-1)*10 ;
            }
            else{
                  $page = 0;
            } 
                $salleryarray = explode(",",$dat['job_sallery']);
                 $min_sal = $salleryarray[0];
                 $max_sal = $salleryarray[1];
                 //print_r($dat);
            $this->db->where('active/deactive', 1);
            $this->db->where('job_status', 1);
            $this->db->where('cat_id', $dat['cat_id']);
            $this->db->where('job_salery_min >=', $min_sal);
            $this->db->where('job_salery_max <=', $max_sal);
            $this->db->where('skill_id', $dat['skill_id']);
            $this->db->where('job_explevel', $dat['job_explevel']);
            $this->db->like('job_location', $dat['job_location'], 'before');
            $this->db->or_like('job_location', $dat['job_location'], 'after');
            $this->db->or_like('job_location', $dat['job_location'], 'both');
            $this->db->where('job_emptype', $dat['job_emptype']);
             $this->db->join('tbl_company', 'tbl_company.comp_id = tbl_job.comp_id');
            $this->db->order_by($column_id,$order_by);
            $this->db->limit($config["per_page"],$this->db->escape($page)); 
            $res=$this->db->get('tbl_job')->result_array();
            return $res;
        }
    }





}
