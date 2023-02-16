<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Model{
	function __construct() {

		$this->tableName = 'users';
		$this->primaryKey = 'id';
	}
	
	function searchone($city, $cat, $type){
	   $this->db->group_start();
      $this->db->where('city', $city)
            ->where('cat_id', $cat)
            ->where('type', $type)
            ->join('tbl_city','cv_contact_info.city=tbl_city.city_id', 'left');
             $this->db->group_end();
              $query  =   $this->db->get('cv_contact_info');
        return $query->result_array();
}

function searchtwo($cat){
      $this->db->where('cat_id', $cat);
      $this->db->join('tbl_city','cv_contact_info.city=tbl_city.city_id', 'left');
              $query  =   $this->db->get('cv_contact_info');
        return $query->result_array();
}
function searchthree($city){
      $this->db->where('city', $city);
            $this->db->join('tbl_city','cv_contact_info.city=tbl_city.city_id', 'left');
              $query  =   $this->db->get('cv_contact_info');
        return $query->result_array();
}
function searchfour($type){
      $this->db->where('type', $type);
            $this->db->join('tbl_city','cv_contact_info.city=tbl_city.city_id', 'left');
              $query  =   $this->db->get('cv_contact_info');
        return $query->result_array();
}
function searchfive($cat, $city){
      $this->db->where('cat_id', $cat)
      ->where('city', $city);
            $this->db->join('tbl_city','cv_contact_info.city=tbl_city.city_id', 'left');
              $query  =   $this->db->get('cv_contact_info');
        return $query->result_array();
}	
function searchsix($cat, $type){
      $this->db->where('cat_id', $cat)
      ->where('type', $type);
            $this->db->join('tbl_city','cv_contact_info.city=tbl_city.city_id', 'left');
              $query  =   $this->db->get('cv_contact_info');
        return $query->result_array();
}	
function searchseven($type, $city){
      $this->db->where('type', $type)
      ->where('city', $city);
            $this->db->join('tbl_city','cv_contact_info.city=tbl_city.city_id', 'left');
              $query  =   $this->db->get('cv_contact_info');
        return $query->result_array();
}
	/*job seekar payment check*/
	function js_pay_status($user_id)
	{
	    $this->db->order_by('jp_id','desc');
		$query = $this->db->get_where('jobseekar_payments', array('user_id' => $user_id));
		return $query->result_array();
	}
	/* ***** job seekar payment check ends ***** */
	   function search_awein($searchterm)
    {
    	
         foreach ($searchterm as $keyword) {
    	  return $this->db->like('first_name', $keyword)
                     ->or_like('last_name', $keyword)
                     ->or_like('type', $keyword);
                 }
            
                   $query  =   $this->db->get('cv_contact_info');
        return $query->result();
                     // ->get('cv_contact_info')->result();

    // 	if (!empty($keyword)) {
    //         $this->db->group_start();
    //     foreach ($keyword as $loc) {
    //         $this->db->or_like('cv_contact_info.first_name', $loc, 'both')
    //         ->or_like('cv_contact_info.last_name', $loc, 'both')
    //         ->or_like('cv_contact_info.city', $loc, 'both')
    //         ->or_like('cv_contact_info.type', $loc, 'both')
    //         ->or_like('cv_contact_info.gender', $loc, 'both');
    //     }
    //         $this->db->group_end();
    // }
    
    //     $query  =   $this->db->get('cv_contact_info');
    //     return $query->result();
    }
      public function getskills($post){
       
        $this->db->select('bte.*');
        $this->db->from('tbl_skills as bte');
        $this->db->where('bte.cat_id', $post['cat_id']);
        $rs = $this->db->get();
        $response = $rs->result();
        return $response;
}
    function c_pre($user_id)
	{
		$this->db->order_by('jp_id','desc');
		$query = $this->db->get_where('jobseekar_payments', array('user_id' => $user_id));
		return $query->result_array();
	}
	public function user_cv_basic_info($id){
	    $this->db->select('cv_contact_info.*, cv_contact_info.cat_id as catie, cv_contact_info.subcat_id as subcatie, tbl_cat.*,  tbl_subcat.*, tbl_city.*');
	    $this->db->from('cv_contact_info');
	      $this->db->join('tbl_cat','cv_contact_info.cat_id=tbl_cat.cat_id', 'left');
	      $this->db->join('tbl_subcat','cv_contact_info.subcat_id=tbl_subcat.subcat_id', 'left');
	         $this->db->join('tbl_city','cv_contact_info.city=tbl_city.city_id', 'left');
	    $this->db->where('cv_contact_info.user_id', $id);
	    $res=$this->db->get()->result_array();
	    return $res;
	}
		public function user_info($id){
	    $this->db->select('*');
	    $this->db->from('users');
	    $this->db->where('id', $id);
	    $res=$this->db->get()->result_array();
	    return $res;
	}
	public function education($id){
	    $this->db->select('*');
	    $this->db->from('cv_education');
	    $this->db->where('user_id', $id);
	      $this->db->order_by('starting_date', desc);
	    $res=$this->db->get()->result_array();
	    return $res;
	}
	public function work_experience($id){
	    $this->db->select('*');
	    $this->db->from('cv_workexperience');
	    $this->db->where('user_id', $id);
	     $this->db->order_by('check_present desc, from_date desc');
	       // $this->db->order_by('from_date', desc);
	        
	    $res=$this->db->get()->result_array();
	    return $res;
	}
	public function work_experience_s($id){
	    $limit=1;
	    $this->db->select('*');
	    $this->db->from('cv_workexperience');
	    $this->db->where('user_id', $id);
	    $this->db->order_by('id', 'DESC');
	    $this->db->limit($limit);
	    $res=$this->db->get()->result_array();
	    return $res;
	}
	public function skills($id){
	    $this->db->select('*');
	    $this->db->from('cv_skill');
	    $this->db->where('user_id', $id);
	    $res=$this->db->get()->result_array();
	    return $res;
	}
	public function objectives($id){
	    $this->db->select('*');
	    $this->db->from('cv_objective');
	    $this->db->where('user_id', $id);
	    $res=$this->db->get()->result_array();
	    return $res;
	}
		public function portfolio($id){
	    $this->db->select('*');
	    $this->db->from('cv_portfolio');
	    $this->db->where('user_id', $id);
	    $res=$this->db->get()->result_array();
	    return $res;
	}





	public function user_cv_basic_info1(){
	    $this->db->select('*');
	    $this->db->from('cv_contact_info');
	      $this->db->join('tbl_cat','cv_contact_info.cat_id=tbl_cat.cat_id', 'left');
	      $this->db->join('tbl_subcat','cv_contact_info.subcat_id=tbl_subcat.subcat_id', 'left');
	    $res=$this->db->get()->result_array();
	    return $res;
	}



     function count_date_diff()
 {

               

    $this->db->select('$now- DATE_FORMAT(emp_package_detail.updated_on,"%Y %m %d") as updated_on');
    $this->db->from('emp_package_detail');
    $query = $this->db->get();
    return ($query->num_rows() > 0 ) ? $query->row() : false;
    //$this->db->where('user_id',$user_id);
    //return $this->db->get($table_name)->result_array();
 }




    // public function companies_info(){
            //$count_date_diff = $this->Crud_model->count_date_diff();
            //echo "at model";
            //print_r($count_date_diff);
            //die();

    //     $this->db->select('comp.*,epd.promotion_limit,epd.updated_on');
    //     $this->db->from('tbl_company as comp');
    //     $this->db->join('emp_package_detail as epd','comp.owner_id = epd.user_id');
    //     $res=$this->db->get()->result_array();
    //     return $res;
    // }


		public function companies_info(){
	    $query = $this->db->select('*')
                ->from('tbl_company')
                ->where('status', '1')    
                ->limit(8) 
                ->get();
        		return $query->result_array();
	}
    
	           public function careeradvisor_info(){
        $query = $this->db->select('*')
                ->from('tbl_careeradvisor')
                ->where('ca_status', '1')    
                ->limit(3) 
                ->get();
                return $query->result_array();
    }
    	           public function careeradvisor_info_all(){
        $query = $this->db->select('*')
                ->from('tbl_careeradvisor')
                ->where('ca_status', '1')    
                ->get();
                return $query->result_array();
    }

    	public function getcityid($user_id){
	    $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $user_id);
        $result = $this->db->get()->result();

        $city = $result[0]->city; //This is the last ID of the table
        return $city;
	}


	public function profiles_info($city_id){
	    $query = $this->db->select('*')
                ->from('cv_contact_info')
                ->where('city', $city_id) 
                ->join('tbl_cat','cv_contact_info.cat_id=tbl_cat.cat_id', 'left')
                ->join('tbl_city','cv_contact_info.city=tbl_city.city_id', 'left')
                ->limit(3) 
                ->get();
        		return $query->result_array();
	}



		public function user_info111(){
	    $this->db->select('users.*, cv_contact_info.*, tbl_cat.*, tbl_city.*');
	    $this->db->from('users');
	    // $this->db->where('users.id', 'cv_contact_info.user_id');
	    $this->db->where('users.verify', 1);
	    $this->db->where('users.method', 'normal');
	      $this->db->join('cv_contact_info','cv_contact_info.user_id=users.id', 'left');
	       // $this->db->join('cv_skill','cv_skill.user_id=users.id', 'left');
	      $this->db->join('tbl_cat','cv_contact_info.cat_id=tbl_cat.cat_id', 'left');
	       $this->db->join('tbl_city','cv_contact_info.city=tbl_city.city_id', 'left');
	      $this->db->order_by('cv_contact_info.id', desc);
	      $this->db->limit(5);
	    $res=$this->db->get()->result_array();
	    return $res;
	 //     $query = $this->db->get();
		// return $query->result();
	}
		public function user_info111_freelance(){
	    $this->db->select('users.*, cv_contact_info.*, tbl_cat.*, tbl_city.*');
	    $this->db->from('users');
	    // $this->db->where('users.id', 'cv_contact_info.user_id');
	    $this->db->where('users.verify', 1);
	    $this->db->where('users.method', 'normal');
	    $this->db->where('cv_contact_info.type', 'Freelance');
	      $this->db->join('cv_contact_info','cv_contact_info.user_id=users.id', 'left');
	       // $this->db->join('cv_skill','cv_skill.user_id=users.id', 'left');
	      $this->db->join('tbl_cat','cv_contact_info.cat_id=tbl_cat.cat_id', 'left');
	       $this->db->join('tbl_city','cv_contact_info.city=tbl_city.city_id', 'left');
	       $this->db->order_by('cv_contact_info.id', desc);
	      $this->db->limit(5);
	    $res=$this->db->get()->result_array();
	    return $res;
	}

			public function user_info111_parttime(){
	    $this->db->select('users.*, cv_contact_info.*, tbl_cat.*, tbl_city.*');
	    $this->db->from('users');
	    // $this->db->where('users.id', 'cv_contact_info.user_id');
	    $this->db->where('users.verify', 1);
	    $this->db->where('users.method', 'normal');
	    $this->db->where('cv_contact_info.type', 'Part Time');
	      $this->db->join('cv_contact_info','cv_contact_info.user_id=users.id', 'left');
	       // $this->db->join('cv_skill','cv_skill.user_id=users.id', 'left');
	      $this->db->join('tbl_cat','cv_contact_info.cat_id=tbl_cat.cat_id', 'left');
	       $this->db->join('tbl_city','cv_contact_info.city=tbl_city.city_id', 'left');
	       $this->db->order_by('cv_contact_info.id', desc);
	      $this->db->limit(5);
	    $res=$this->db->get()->result_array();
	    return $res;
	}

			public function user_info111_fulltime(){
	    $this->db->select('users.*, cv_contact_info.*, tbl_cat.*, tbl_city.*');
	    $this->db->from('users');
	    // $this->db->where('users.id', 'cv_contact_info.user_id');
	    $this->db->where('users.verify', 1);
	    $this->db->where('users.method', 'normal');
	    $this->db->where('cv_contact_info.type', 'Full Time');
	      $this->db->join('cv_contact_info','cv_contact_info.user_id=users.id', 'left');
	       // $this->db->join('cv_skill','cv_skill.user_id=users.id', 'left');
	      $this->db->join('tbl_cat','cv_contact_info.cat_id=tbl_cat.cat_id', 'left');
	       $this->db->join('tbl_city','cv_contact_info.city=tbl_city.city_id', 'left');
	       $this->db->order_by('cv_contact_info.id', desc);
	      $this->db->limit(5);
	    $res=$this->db->get()->result_array();
	    return $res;
	}


  // $this->db->where('tbl_save_jobs.user_id',$user_id);
  //   $this->db->join('tbl_save_jobs', 'tbl_job.jobs_id= tbl_save_jobs.job_id');
  //     $this->db->join('tbl_company', 'tbl_company.comp_id = tbl_job.comp_id');
  //   $this->db->order_by('tbl_job.jobs_id','desc');
  //   $this->db->limit($config["per_page"],$this->db->escape($page)); 
  //   return $this->db->get('tbl_job')->result_array();


public function savedlist($limit,$offset) {
	 $id = $this->session->userdata('logged_id');
        $query = $this->db->select('cv_contact_info.*, tbl_cat.*, tbl_city.*')
                ->from('cv_contact_info')
                ->where('tbl_save_jobs.user_id', $id)
                ->join('tbl_save_jobs','tbl_save_jobs.job_id= cv_contact_info.user_id', 'left')
                ->join('tbl_cat','cv_contact_info.cat_id=tbl_cat.cat_id', 'left')
                ->join('tbl_city','cv_contact_info.city=tbl_city.city_id', 'left')
                ->limit($limit,$offset)
                ->get();

        return $query->result_array();
    }



//BLOGS LIST
    public function bloglist($limit,$offset) {
        		$query = $this->db->select('tbl_blog.*, tbl_cat.*')
                ->from('tbl_blog')
                ->where('tbl_blog.blog_status', 1)
                ->join('tbl_cat','tbl_blog.cat_id=tbl_cat.cat_id', 'left')
                ->limit($limit,$offset)
                ->get();
        		return $query->result_array();
    }
    public function num_blogs()
    {
        		$query = $this->db->select('*')
                ->from('tbl_blog')
                ->where('tbl_blog.blog_status', 1)           
                ->get();
        		return $query->num_rows();
    }




//BLOGS WITH CATEGORY
    public function bloglistcat($bc, $limit,$offset) {
        		 $query = $this->db->select('tbl_blog.*, tbl_cat.*')
                ->from('tbl_blog')
                ->where('tbl_blog.blog_status', 1)
                ->where('tbl_blog.cat_id', $bc)
                ->join('tbl_cat','tbl_blog.cat_id=tbl_cat.cat_id', 'left')
                ->limit($limit,$offset)
                ->get();
        		return $query->result_array();
    }
    public function num_blogs_cat($bc)
    {
                $query = $this->db->select('*')
                ->from('tbl_blog')
                ->where('tbl_blog.blog_status', 1) 
                ->where('tbl_blog.cat_id', $bc)            
                ->get();
        		return $query->num_rows();
    }





//FIND A PROFILE
		public function seekerlist($limit,$offset) {
        		$query = $this->db->select('users.*, cv_contact_info.*, tbl_cat.*, tbl_city.*')
                ->from('users')
                ->where('users.verify', 1)
                ->where('users.method', 'normal')
                ->join('cv_contact_info','cv_contact_info.user_id=users.id', 'left')
                ->join('tbl_cat','cv_contact_info.cat_id=tbl_cat.cat_id', 'left')
                ->join('tbl_city','cv_contact_info.city=tbl_city.city_id', 'left')
                ->limit($limit,$offset)
                ->order_by('users.id', desc)
                ->get();
        		return $query->result_array();
    		}
    public function num_rows()
    {
        		$query = $this->db->select('*')
                ->from('users')
                ->where('users.verify', 1)
                ->where('users.method', 'normal')               
                ->get();
        		return $query->num_rows();
    }






//FIND A PROFILE BY CATEGORY
    public function seekerlistcat($id, $limit, $offset) {
        		$query = $this->db->select('users.*, cv_contact_info.*, tbl_cat.*, tbl_city.*')
                ->from('users')
                ->where('users.verify', 1)
                ->where('users.method', 'normal')
                ->where('cv_contact_info.cat_id', $id)
                ->join('cv_contact_info','cv_contact_info.user_id=users.id', 'left')
                ->join('tbl_cat','cv_contact_info.cat_id=tbl_cat.cat_id', 'left')
                ->join('tbl_city','cv_contact_info.city=tbl_city.city_id', 'left')
                ->limit($limit,$offset)
                ->get();
        		return $query->result_array();
    }
    public function num_rowscat($id){
        		$query = $this->db->select('*')
                ->from('users, cv_contact_info')
                ->where('users.verify', 1)
                ->where('users.method', 'normal')   
                ->where('cv_contact_info.cat_id', $id)              
                ->get();
        		return $query->num_rows();
    }





//FIND A PROFILE BY CITY
     public function seekerlistcity($id, $limit, $offset) {
        		$query = $this->db->select('users.*, cv_contact_info.*, tbl_cat.*, tbl_city.*')
                ->from('users')
                ->where('users.verify', 1)
                ->where('users.method', 'normal')
                ->where('cv_contact_info.city', $id)
                ->join('cv_contact_info','cv_contact_info.user_id=users.id', 'left')
                ->join('tbl_cat','cv_contact_info.cat_id=tbl_cat.cat_id', 'left')
                ->join('tbl_city','cv_contact_info.city=tbl_city.city_id', 'left')
                ->limit($limit,$offset)
                ->get();
        		return $query->result_array();
    }
    public function num_rowscity($id){
        		$query = $this->db->select('*')
                ->from('users, cv_contact_info')
                ->where('users.verify', 1)
                ->where('users.method', 'normal')   
                ->where('cv_contact_info.city', $id)              
                ->get();
        		return $query->num_rows();
    }






public function search_list($limit,$offset, $dat) {
        $query = $this->db->select('users.*, cv_contact_info.*, tbl_cat.*')
                ->from('users')
             
                ->where('users.verify', 1)
                ->where('users.method', 'normal')
                -> like('cv_contact_info.city', $dat['city_id'], 'before')
                -> or_like('cv_contact_info.city', $dat['city_id'], 'after')
                -> or_like('cv_contact_info.city', $dat['city_id'], 'both')
                ->join('cv_contact_info','cv_contact_info.user_id=users.id', 'left')
                ->join('tbl_cat','cv_contact_info.cat_id=tbl_cat.cat_id', 'left')
             
                ->limit($limit,$offset)
                ->get();

        return $query->result_array();
    }







	/*mew data start*/
   function get_catdashboard($param1)
	{
		
		$this->db->where('cat_id',$param1);
		$this->db->where('active/deactive', 1);
		$this->db->where('job_status', 1);
        $query = $this->db->get('tbl_job');
		return $query->result_array();
	}

	function job_name($jobs_id)
	{
		$this->db->select('job_title');
		$query = $this->db->get_where('tbl_job', array('jobs_id' => $jobs_id));
		return $query->result_array();
	}
	
	function email_qry($user_id)
	{
	    $this->db->select('email');
		$query = $this->db->get_where('users', array('id' => $user_id));
		return $query->result_array();
	}

	function payment_u_f($payment_id)
	{
		$this->db->select('credits');
	    return $this->db->get_where('payments', array('id' => $payment_id))->result_array();
	}

	  function get_filter_front($data,$id)
	{

		if(isset($data['keywords']))
		{
		$this->db->like('job_title',$data['keywords']);

		}
			if(isset($data['location']))
		{
		$this->db->like('job_location',$data['location']);
			
		}
			if(isset($data['salary'])&&$data['salary']!=='salary')
		{
		$salary[]='';
		$salary=explode(",",$data['salary']);
		$this->db->where('job_salery_min',$salary[0]);
		$this->db->where('job_salery_max',$salary[1]);
		log_message('error', 'entered in filter function  ' .$salary[0]);
		log_message('error', 'entered in filter function  ' .$salary[1] );
		}

			if(isset($data['checkbox_value'])&&$data['checkbox_value']!=='job')
		{
			
		$this->db->where('job_emptype',$data['checkbox_value']);
		}
		$this->db->where('cat_id',$id);
		$this->db->where('active/deactive', 1);
		$this->db->where('job_status', 1);
        $query = $this->db->get('tbl_job');
		return $query->result_array();
	}
/* new data ends */


  function get_filter_front_index($data)
	{

		if(isset($data['keywords']))
		{
		$this->db->like('job_title',$data['keywords']);

		}
			if(isset($data['location']))
		{
		$this->db->like('job_location',$data['location']);
			
		}
			if(isset($data['salary'])&&$data['salary']!=='salary')
		{
		$salary[]='';
		$salary=explode(",",$data['salary']);
		$this->db->where('job_salery_min',$salary[0]);
		$this->db->where('job_salery_max',$salary[1]);
		log_message('error', 'entered in filter function  ' .$salary[0]);
		log_message('error', 'entered in filter function  ' .$salary[1] );
		}

			if(isset($data['checkbox_value'])&&$data['checkbox_value']!=='job')
		{
			
		$this->db->where('job_emptype',$data['checkbox_value']);
		}
		$this->db->where('active/deactive', 1);
		$this->db->where('job_status', 1);
        $query = $this->db->get('tbl_job');
		return $query->result_array();
	}
/* new data ends */


function get_application()
	{
		  $user_id=$this->session->userdata('logged_id');

		  // pagination 
	$page=0;
    $config = array();
    $config["base_url"] = base_url() . "users/applications/";
    //$this->db->where(array('user_id' => $user_id));
    $this->db->where('job_apply.user_id',$user_id);
    $this->db->join('job_apply', 'tbl_job.jobs_id= job_apply.job_id');
    $total_row = $this->db->count_all_results('tbl_job');

    $config["uri_segment"] = 3;
    
    $config["total_rows"] = $total_row;
    $config["per_page"] = 10;
    
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

    $this->db->where('job_apply.user_id',$user_id);
    $this->db->join('job_apply', 'tbl_job.jobs_id= job_apply.job_id');
     $this->db->join('tbl_company', 'tbl_company.comp_id = tbl_job.comp_id');
    $this->db->order_by('tbl_job.jobs_id','desc');
    $this->db->limit($config["per_page"],$this->db->escape($page)); 
    return $this->db->get('tbl_job')->result_array();
		  // pagination

	}




	function getapplication($jid)
	{
	 $this->db->select('job_apply.job_id, job_apply.user_id, job_apply.apply_description, job_apply.job_apply_id, job_apply.shortlist, job_apply.rejected, users.*')
         ->from('job_apply')
         ->where('job_apply.job_id', $jid)
         ->join('users', 'job_apply.user_id=users.id');
     return $this->db->get()->result_array();

	}





function contact_info($param1)
{
 $this->db->select('')
         ->from('cv_contact_info')
         ->where('cv_contact_info.user_id',$param1)
         ->join('tbl_user_cat', 'cv_contact_info.user_id=tbl_user_cat.user_id')
         ->join('cv_objective', 'cv_contact_info.user_id=cv_objective.user_id');
     return $this->db->get()->result_array();
}





function get_resume_search($data)
	{
		$this->db->select();
$this->db->from('cv_contact_info');

if(isset($data['skill'])&&(!$data['skill']=='')){
$this->db->join('cv_skill','cv_contact_info.user_id=cv_skill.user_id');

}
$this->db->join('cv_objective', 'cv_contact_info.user_id = cv_objective.user_id','left');
		if(isset($data['skill'])&&(!$data['skill']==''))
		{
		$this->db->like('cv_skill.name',$data['skill']);

		}
			if(isset($data['location'])&&(!$data['location']==''))
		{
			$loc[]='';
		$loc=explode(",",$data['location']);
		$this->db->like('cv_contact_info.city',$loc[0]);
			
		}
			if(isset($data['gender'])&&(!$data['gender']==''))
		{
		
		$this->db->where('cv_contact_info.gender',$data['gender']);
		
		}

			if(isset($data['search'])&&(!$data['search']==''))
		{
			
		$this->db->like('first_name',$data['search']);
		$this->db->or_like('last_name',$data['search']);

		}

			if(isset($data['experience'])&&(!$data['experience']==''))
		{
			
		$this->db->where('experience',$data['experience']);


		}

		
        $query = $this->db->get();
		return $query->result_array();
	}





//jobseeker detail on apply to recruiter
function get_applied($param1)
{
	 $user_id = $this->session->userdata('logged_id');
 $this->db->select('')
         ->from('cv_contact_info')
         ->join('job_apply', 'job_apply.user_id = cv_contact_info.user_id')
        ->join('cv_objective','job_apply.user_id=cv_objective.user_id','left')
         ->where('job_apply.job_id',$param1);
     return $this->db->get()->result_array();

}




function get_shortlist($param1)
{
	 $user_id = $this->session->userdata('logged_id');
 	$this->db->select('')
         ->from('cv_contact_info')
         ->join('job_apply', 'job_apply.user_id = cv_contact_info.user_id')
          ->join('cv_objective', 'job_apply.user_id = cv_objective.user_id','left')

         ->where('job_apply.job_id',$param1)
         ->where('job_apply.shortlist',1);
     return $this->db->get()->result_array();

}

function get_rejected($param1)
{
	 $user_id = $this->session->userdata('logged_id');
 	 $this->db->select('')
         ->from('cv_contact_info')
         ->join('job_apply', 'job_apply.user_id = cv_contact_info.user_id')
          ->join('cv_objective', 'job_apply.user_id = cv_objective.user_id','left')

         ->where('job_apply.job_id',$param1)
         ->where('job_apply.rejected',1);
     return $this->db->get()->result_array();

}

function get_screened($param1)
{
	 $user_id = $this->session->userdata('logged_id');
 	 $this->db->select('')
         ->from('cv_contact_info')
         ->join('job_apply', 'job_apply.user_id = cv_contact_info.user_id')
          ->join('cv_objective', 'job_apply.user_id = cv_objective.user_id','left')

         ->where('job_apply.job_id',$param1)
         ->where('job_apply.review',1);
     return $this->db->get()->result_array();

}

function employer_recommended($job_id)
{

        $this->db->select('cat_id');
        $result=[];
        $this->db->from('tbl_job');
        $this->db->where('jobs_id', $job_id);
        $q = $this->db->get();
        $subcat = $q->row_array();
        $subcats[] = [];
        $subcat_id = $subcat['cat_id'];
        $subcats = explode(',', $subcat_id);

        foreach ($subcats as $ids) {
          //print_r($ids);
         log_message('error',$ids);
          $this->db->from('cv_contact_info')
        ->join('tbl_user_cat','cv_contact_info.user_id=tbl_user_cat.user_id','left')
        
        ->join('cv_objective','cv_contact_info.user_id=cv_objective.user_id','left')
->like('tbl_user_cat.cat_id',$ids);
          $d = $this->db->get()->result_array();
        $result = array_merge($result, $d);
}
return $result;


}


	//get user detail
	   function get_user_detail()
	{

		  $user_id=$this->session->userdata('logged_id');

		$this->db->where('user_id', $user_id);
	
        $query = $this->db->get('cv_contact_info');
		return $query->result_array();
	}
	
	// get comapny detail
	
		function get_company_detail($job_id)
	{

        $this->db->select();
        $this->db->from('tbl_job');
        $this->db->join('tbl_company','tbl_job.comp_id=tbl_company.comp_id');
        $this->db->where('tbl_job.jobs_id',$job_id);
        return $this->db->get()->row_array();
	}
			function get_company_detail1($column_id)
	{

        $this->db->select();
        $this->db->from('tbl_job');
        $this->db->join('tbl_company','tbl_job.comp_id=tbl_company.comp_id');
        $this->db->where('tbl_job.jobs_id',$column_id);
        return $this->db->get()->row_array();
	}


//get cv objective
	   function get_cv_objective()
	{

		  $user_id=$this->session->userdata('logged_id');

		$this->db->where('user_id', $user_id);
	
        $query = $this->db->get('cv_objective');
		return $query->result_array();
	}

//get cv workexperience
	   function get_cv_workexperience()
	{

		  $user_id=$this->session->userdata('logged_id');

		$this->db->where('user_id', $user_id);
	
        $query = $this->db->get('cv_workexperience');
		return $query->result_array();
	}


//get cv education
	   function get_cv_education()
	{

		  $user_id=$this->session->userdata('logged_id');

		$this->db->where('user_id', $user_id);
	
        $query = $this->db->get('cv_education');
		return $query->result_array();
	}



//get cv skill
	   function get_cv_skill()
	{

		  $user_id=$this->session->userdata('logged_id');

		$this->db->where('user_id', $user_id);
	
        $query = $this->db->get('cv_skill');
		return $query->result_array();
	}



	   function get_filter($data)
	{

		if(isset($data['keywords']))
		{
		$this->db->like('job_title',$data['keywords']);

		}
			if(isset($data['location']))
		{
		$this->db->like('job_location',$data['location']);
			
		}
			if(isset($data['salary'])&&$data['salary']!=='salary')
		{
		$salary[]='';
		$salary=explode(",",$data['salary']);
		$this->db->where('job_salery_min',$salary[0]);
		$this->db->where('job_salery_max',$salary[1]);
		log_message('error', 'entered in filter function  ' .$salary[0]);
		log_message('error', 'entered in filter function  ' .$salary[1] );
		}

			if(isset($data['checkbox_value'])&&$data['checkbox_value']!=='job')
		{
			
		$this->db->where('job_emptype',$data['checkbox_value']);
		}

		$this->db->where('active/deactive', 1);
		$this->db->where('job_status', 1);
        $query = $this->db->get('tbl_job');
		return $query->result_array();
	}


//save job
	function apply($id, $cid)
    {
    	

		  $user_id = $this->session->userdata('logged_id');

    $this->db->where('user_id',$user_id);
        $this->db->where('job_id',$id);
         $this->db->where('comp_id',$cid);
    $query = $this->db->get('job_apply');
    if ($query->num_rows() > 0){
        return false;
    }
    else {
   	$data = array(

   'job_id'=>$id,
    	'user_id'=>$user_id,
    	 'comp_id'=>$cid,
    	'job_apply_date'=>date("Y-m-d")
);
	$this->db->insert('job_apply', $data);
	return true;
    }

 
	}
	   function apply_job($job_id)
	{
		$data[]='';
		  $user_id=$this->session->userdata('logged_id');
		$this->db->where('jobs_id',$job_id);
        $job = $this->db->get('tbl_job')->row_array();

$this->db->where('user_id',$user_id);
        $user = $this->db->get('cv_contact_info')->row_array();
	if($job['filter_gender']=='on')
	{
			if(isset($user['gender'])&&isset($job['job_gender']))
			{
				if($user['gender']==$job['job_gender'])
					{
				$data['gender']=1; //success

					}
					else{
				$data['gender']=0;//fail

					}

			}
	

	}else{	
				$data['gender']=2;//success
			}
	if($job['filter_experience']=='on')
	{

				if(isset($user['experience'])&&isset($job['job_explevel']))
			{
				if($user['experience']==$job['job_explevel'])
					{
				$data['experience']=1;

					}
					else{
				$data['experience']=0;

					}

			}

	}else{	
				$data['experience']=2;
			}
	if($job['filter_age']=='on')
	{
				if(isset($user['age'])&&isset($job['job_age']))
			{
				if($user['age']==$job['job_age'])
					{
				$data['age']=1;

					}
					else{
				$data['age']=0;

					}

			}
	}else{	
				$data['age']=2;
			}
	if($job['filter_city']=='on')
	{

				if(isset($user['city'])&&isset($job['job_location']))
			{
				if($user['city']==$job['job_location'])
					{
				$data['city']=1; 

					}
					else{
				$data['city']=0;

					}

			}

	}else{	
				$data['city']=2;
			}
	// if($job['filter_city']==0 && $job['filter_gender'] && $job['filter_age'] && $job['filter_experience']){

	// 	$data
	// }
	return $data;

}




function check_profile($user_id){

		  // $user_id = $this->session->userdata('logged_id');
$this->db->where('user_id',$user_id);
 $contact=$this->db->get('cv_contact_info')->row_array();
if(count($contact)==0){
return false;
}
		 
$this->db->where('user_id',$user_id);
$we= $this->db->get('cv_workexperience')->row_array();
if(count($we)==0){
return false;
}

$this->db->where('user_id',$user_id);
$edu= $this->db->get('cv_education')->result_array();
if(count($edu)==0){
return false;
}

$this->db->where('user_id',$user_id);
$skill= $this->db->get('cv_skill')->result_array();
if(count($skill)==0){
return false;
}



return true;
}


function check_employerprofile(){
$user_id = $this->session->userdata('logged_id');
$this->db->where('id',$user_id);
 $contact=$this->db->get('users')->row_array();
 
if((!$contact['gender'])){
    return 0;
}
if((!$contact['date_ofbirth'])){
    return 0;
}
if((!$contact['address'])){
    return 0;
}
if((!$contact['country'])){
    return 0;
}
if((!$contact['city'])){
    return 0;
}
if((!$contact['phone'])){
    return 0;
}
if((!$contact['mobile'])){
    return 0;
}
if((!$contact['first_name'])){
    return 0;
}

    return true;;

}


	
	public function checkUser($data = array()){
		$this->db->select($this->primaryKey);
		$this->db->from($this->tableName);
		$this->db->where(array('oauth_provider'=>$data['oauth_provider'],'oauth_uid'=>$data['oauth_uid']));
		$prevQuery = $this->db->get();
		$prevCheck = $prevQuery->num_rows();
		
		if($prevCheck > 0){
			$prevResult = $prevQuery->row_array();
			$data['modified'] = date("Y-m-d H:i:s");
			$update = $this->db->update($this->tableName,$data,array('id'=>$prevResult['id']));
			$userID = $prevResult['id'];
		}else{
			$data['created'] = date("Y-m-d H:i:s");
			$data['modified'] = date("Y-m-d H:i:s");
			$insert = $this->db->insert($this->tableName,$data);
			$userID = $this->db->insert_id();
		}
		return $userID?$userID:FALSE;
    }
    function get_user($email, $pwd)
	{
		$this->db->where('email', $email);
		$this->db->where('password', $pwd);
        $query = $this->db->get('users');
		return $query->row();
	}
	  function getcompany($uid)
	{
		 $this->db->select('job.comp_id');
        $this->db->from('tbl_company as job');
        $this->db->where('job.owner_id', $uid);
          // $this->db->where('job.cat_id', $id);
         $rs = $this->db->get();
        return $rs->result();
		// $this->db->where('owner_id', $uid);
		// $this->db->where('password', $pwd);
        // $query = $this->db->get('tbl_company');
		// return $query->row();
	}
	
	function get_user_jbs($email, $pwd)
	{
	    $this->db->where('method','normal');
	    $this->db->where('user_status','1');
		$this->db->where('email', $email);
		$this->db->where('password', $pwd);
        $query = $this->db->get('users');
		return $query->row();
	}
	
	function get_user_emp($email, $pwd)
	{
		$this->db->where('email', $email);
		$this->db->where('method','recruiter');
		$this->db->where('password', $pwd);
        $query = $this->db->get('users');
		return $query->row();
	}

	
	function get_user_by_email($email)
	{
		$this->db->where('email', $email);
        $query = $this->db->get('users');
		return $query->row();
	}

	
	// get user
	function get_user_by_id($id)
	{
		$this->db->where('id', $id);
        $query = $this->db->get('user');
		return $query->result();
	}

		// get job detail
	function get_job_detail($id)
	{
		$this->db->where('tbl_job.jobs_id', $id);
		 $this->db->join('tbl_cat', 'tbl_job.cat_id= tbl_cat.cat_id','left');
        $query = $this->db->get('tbl_job');
		return $query->result_array();
	}
	
		function get_blog_detail($bid)
	{
		$this->db->where('blog_id', $bid);
		  $this->db->join('tbl_cat', 'tbl_blog.cat_id= tbl_cat.cat_id', 'left');
        $query = $this->db->get('tbl_blog');
		return $query->result_array();
	}
		function get_blog_limit()
	{
		// $this->db->where('blog_id', $bid);
		  // $this->db->join('tbl_cat', 'tbl_blog.cat_id= tbl_cat.cat_id');
		$this->db->limit(3);
        $query = $this->db->get('tbl_blog');
		return $query->result_array();
	}
			function get_blogcomment_detail($bid)
	{
		 $this->db->select('tbl_blog_comment.*, tbl_blog_comment.description as desc, cv_contact_info.picture_url as pic, users.*');
		$this->db->where('tbl_blog_comment.blog_id', $bid);
		  // $this->db->join('tbl_user', 'tbl_blog_comment.user_id= tbl_user.id');
		$this->db->join('users', 'tbl_blog_comment.user_id = users.id', 'left');
		$this->db->join('cv_contact_info', 'tbl_blog_comment.user_id = cv_contact_info.user_id ', 'left');
        $query = $this->db->get('tbl_blog_comment');
		return $query->result_array();
	}



			function get_profilereview_detail($bid)
	{
		 $this->db->select('tbl_profile_review.*, tbl_profile_review.description as desc, users.*');
		$this->db->where('tbl_profile_review.profile_id', $bid);
 		$this->db->join('users', 'tbl_profile_review.user_id = users.id ', left);
 		$this->db->join('cv_contact_info', 'tbl_profile_review.user_id = cv_contact_info.user_id ', left);
 	 $this->db->order_by('tbl_profile_review.review_id', desc);
        $query = $this->db->get('tbl_profile_review');
		return $query->result_array();
	}


	function maxreviews($bid){


$this->db->select_max('rating');
$this->db->from('tbl_profile_review');
$this->db->where('profile_id', $bid);
$query=$this->db->get();
return $query->result_array();


	}




	function getcategory($id){
		 $this->db->select('job.cat_id, job.cat_id');
        $this->db->from('tbl_job as job');
        $this->db->where('job.jobs_id', $id);
          $this->db->where('job.cat_id', $id);
         $rs = $this->db->get();
        return $rs->result();
	}

	function relatedcat($job, $cat){
		// $this->db->select('cat_id');
        // $this->db->from('tbl_job');
        $this->db->where('tbl_job.cat_id', $cat);
        $this->db->where('tbl_job.jobs_id !=', $job);
        	$this->db->join('tbl_cat', 'tbl_job.cat_id = tbl_cat.cat_id ');
        	$this->db->join('tbl_subcat', 'tbl_job.subcat_id = tbl_subcat.subcat_id ');
        	$this->db->join('tbl_company', 'tbl_job.comp_id = tbl_company.comp_id ');
        	 $this->db->order_by('tbl_job.featured', desc);
        $query = $this->db->get('tbl_job');
		return $query->result();
	}
		
		function relatedcat1($cid){
		// $this->db->select('cat_id');
        // $this->db->from('tbl_job');
        $this->db->where('tbl_job.comp_id', $cid);
        	$this->db->join('tbl_cat', 'tbl_job.cat_id = tbl_cat.cat_id ');
        	$this->db->join('tbl_subcat', 'tbl_job.subcat_id = tbl_subcat.subcat_id ');
        	$this->db->join('tbl_company', 'tbl_job.comp_id = tbl_company.comp_id ');
        	 $this->db->order_by('tbl_job.featured', desc);
        $query = $this->db->get('tbl_job');
		return $query->result();
	}
	// insert
	function insert_user($data)
    {
		return $this->db->insert('user', $data);
	}


	//save job
	function save_job($id)
    {
    	

		  $user_id = $this->session->userdata('logged_id');

    $this->db->where('user_id',$user_id);
        $this->db->where('job_id',$id);
    $query = $this->db->get('tbl_save_jobs');
    if ($query->num_rows() > 0){
        return false;
    }
    else {
   	$data = array(

   'job_id'=>$id,
    	'user_id'=>$user_id
);
	$this->db->insert('tbl_save_jobs', $data);
	return true;
    }

 
	}

//dashboard
	   function get_dashboard()
	{
		$this->db->where('active/deactive', 1);
		$this->db->where('job_status', 1);
        $query = $this->db->get('tbl_job');
		return $query->result_array();
	}

//
	function payment_employerjob($emp_id)
	{
		$this->db->limit(1);
		$this->db->where('user_id',$emp_id);
  		$this->db->order_by('id','desc');
  		$query = $this->db->get('payments');
  		return $query->result_array();
	}
//

	//
	function payment_jobstatus($jobs_id)
	{
		$this->db->select('job_pstatus');
		$this->db->where('jobs_id',$jobs_id);
  		$query = $this->db->get('tbl_job');
  		return $query->result_array();
	}
	//


//get saved jobs
	   function get_saved()
	{
		  $user_id=$this->session->userdata('logged_id');

		  	  // pagination 
	$page=0;
    $config = array();
    $config["base_url"] = base_url() . "users/savedjobs/";
    //$this->db->where(array('user_id' => $user_id));
   $this->db->where('tbl_save_jobs.user_id',$user_id);
    $this->db->join('tbl_save_jobs', 'tbl_job.jobs_id= tbl_save_jobs.job_id');
    $total_row = $this->db->count_all_results('tbl_job');

    $config["uri_segment"] = 3;
    
    $config["total_rows"] = $total_row;
    $config["per_page"] = 10;
    
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

    $this->db->where('tbl_save_jobs.user_id',$user_id);
    $this->db->join('tbl_save_jobs', 'tbl_job.jobs_id= tbl_save_jobs.job_id');
      $this->db->join('tbl_company', 'tbl_company.comp_id = tbl_job.comp_id');
    $this->db->order_by('tbl_job.jobs_id','desc');
    $this->db->limit($config["per_page"],$this->db->escape($page)); 
    return $this->db->get('tbl_job')->result_array();
		  // pagination

		 /*$this->db->select()
                ->from('tbl_job')
                ->join('tbl_save_jobs', 'tbl_job.jobs_id= tbl_save_jobs.job_id')
            ->where('tbl_save_jobs.user_id',$user_id)
          ;

                return $this->db->get()->result_array();*/
	}
	
	   function getcomp()
	{

		  $user_id=$this->session->userdata('logged_id');

		$this->db->where('owner_id', $user_id);
	
        $query = $this->db->get('tbl_company');
		return $query->result_array();
	}


}
