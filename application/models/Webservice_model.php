<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Webservice_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function clear_cache() {
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }

    function verify_credentials($email, $password) {

    $user_row = $this->db->get_where('users', array(
                'email' => $email
            ));
           // print_r($user_row->num_rows());

    if($user_row->num_rows() == 0){
            
            $result_array['login']['value'] = "0";
            $result_array['login']['message'] = "Email does not exists";
            return $result_array;	
    } else {
    	$customer_password = $user_row->row()->password;
        $verify = $user_row->row()->verify;
    	if($password == $customer_password && $verify==1 ){
            $result_array['login']['value'] = "1";
            $result_array['login']['message'] = $user_row->row();
        $row = $user_row->row();
        
        $user_id=$row->id;
       
            $profile_row = $this->db->get_where('cv_contact_info', array(
                'user_id' => $user_id
            ));
            
            $result_array['login']['profile'] = $profile_row->row();
            
            
            
            
            return $result_array;	    		
    	} else{
    		$result_array['login']['value'] = "2";
            $result_array['login']['message'] = "Password is incorrect OR VERIFY your email";
            return $result_array;
    	}
    }

    }



    function register_user($data) {
    
    $user_row = $this->db->get_where('users', array(
                'email' => $data['email']
            ));

    if($user_row->num_rows() == 0){
            $this->db->insert('users', $data);
             $enter = $this->db->get_where('users', array(
                'email' => $data['email']
            ));
            $result_array['signup']['value'] = "true";
             $result_array['signup']['message'] = $enter->row();
            return $result_array;   
    } else {
            $result_array['signup']['value'] = "false";
            $result_array['signup']['message'] = "Email already exist";
            return $result_array;               
    }

    }




public function password_reset($data){
 
 return $this->db->update('users',$data,array('id'=>$data['id']));
           

}



//dashboard
       function get_dashboard()
    {
        
        
        $this->db->select('');
         $this->db->from('tbl_job');
         $this->db->join('tbl_company', 'tbl_company.comp_id = tbl_job.comp_id');
    $this->db->join('tbl_clevel', 'tbl_job.clevel_id = tbl_clevel.clevel_id');
        
     
        return $this->db->get()->result_array();
        

    }


//social media
public function checkUser($data = array()){
        $this->db->select('id');
        $this->db->from('users');
        $this->db->where(array('oauth_uid'=>$data['oauth_uid']));
        $prevQuery = $this->db->get();
        $prevCheck = $prevQuery->num_rows();
        
        if($prevCheck > 0){
            $prevResult = $prevQuery->row_array();
            $data['modified'] = date("Y-m-d H:i:s");
            $update = $this->db->update('users',$data,array('id'=>$prevResult['id']));
           return false;
        }else{
            $data['created'] = date("Y-m-d H:i:s");
            $data['modified'] = date("Y-m-d H:i:s");
            $insert = $this->db->insert('users',$data);
            $userID = $this->db->insert_id();
               return true;
        }
     
    }



function check_profile($user_id){

         
$this->db->where('user_id',$user_id);
 $contact=$this->db->get('cv_contact_info')->row_array();
if(count($contact)==0){
return false;
}
         
$this->db->where('user_id',$user_id);
$obj= $this->db->get('cv_objective')->row_array();
if(count($obj)==0){
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




     function get_categories()
    {

        
        $query = $this->db->get('tbl_cat');
        return $query->result_array();
    }


     function get_subcategories($ids)
    {
   $result= [];
foreach ($ids as $id) {
     $this->db->where('cat_id', $id);
        
        $query = $this->db->get('tbl_subcat')->result_array();


        $result = array_merge($result, $query);
 
}

      
        return $result;
    }


 function save_user_cat($data){


$query=$this->db->insert('tbl_user_cat',$data);
 
 if($query){return $result['message']='success';}
 else{return $result['message']='fail';}       
    } 
    
    
       function get_search($keyword)
    {

 $this->db->select('');
         $this->db->from('tbl_job');
         $this->db->join('tbl_company', 'tbl_company.comp_id = tbl_job.comp_id');
        $this->db->like('job_title',$keyword);
        $this->db->where('active/deactive', 1);
        $this->db->where('job_status', 1);
     
        return $this->db->get()->result_array();
    }





       function get_job_detail($job_id)
    {



        $this->db->select('');
         $this->db->from('tbl_job');
         $this->db->join('tbl_company', 'tbl_company.comp_id = tbl_job.comp_id');
    $this->db->join('tbl_clevel', 'tbl_job.clevel_id = tbl_clevel.clevel_id');
        $this->db->where('tbl_job.jobs_id', $job_id);

     
        return $this->db->get()->result_array();
    }

       function get_city($location)
    {
        $this->db->from('tbl_job');
 $this->db->join('tbl_company', 'tbl_company.comp_id = tbl_job.comp_id');
        $this->db->like('job_location',$location);
        $this->db->where('active/deactive', 1);
        $this->db->where('job_status', 1);
        $query = $this->db->get('');
        return $query->result_array();
    }



       function get_gender($gender)
    {
$this->db->from('tbl_job');
         $this->db->join('tbl_company', 'tbl_company.comp_id = tbl_job.comp_id');
        $this->db->where('job_gender',$gender);
        $this->db->or_where('job_gender','all');
        $this->db->where('active/deactive', 1);
        $this->db->where('job_status', 1);
        $query = $this->db->get('');
        return $query->result_array();
    }


       function get_salary($min,$max)
    {
$this->db->from('tbl_job');
         $this->db->join('tbl_company', 'tbl_company.comp_id = tbl_job.comp_id');
    
       $this->db->where('job_salery_min',$min);
        $this->db->where('job_salery_max',$max);
       // $this->db->where('active/deactive', 1);
       // $this->db->where('job_status', 1);
        $query = $this->db->get('');
        return $query->result_array();
    }
    
     function apply_job($job_id,$user_id)
    {
        $data[]='';
  
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

    //  $data
    // }
    return $data;

}



       function search_by_category($subcat)
    {

        $this->db->select();
     
         $result=[];
        $subcats[] = [];
        
        $subcats = explode(',', $subcat);

        foreach ($subcats as $ids) {
          //print_r($ids);
                    $this->db->from('tbl_job');
 $this->db->join('tbl_company', 'tbl_company.comp_id = tbl_job.comp_id');
      $this->db->where('subcat_id',$ids);
        $this->db->where('active/deactive', 1);
    $this->db->where('job_status', 1);
      $d = $this->db->get()->result_array();
    $result = array_merge($result, $d);

}
return $result;

}






// profile


    //get user detail
       function get_user_detail($user_id)
    {

          

        $this->db->where('user_id', $user_id);
    
        $query = $this->db->get('cv_contact_info');
        return $query->result_array();
    }


//get cv objective
    function get_cv_objective($user_id)
    {

$this->db->where('user_id', $user_id);
        $this->db->where('user_id', $user_id);
    
        $query = $this->db->get('cv_objective');
        return $query->result_array();
    }


//get cv workexperience
       function get_cv_workexperience($user_id)
    {

          

        $this->db->where('user_id', $user_id);
    
        $query = $this->db->get('cv_workexperience');
        return $query->result_array();
    }


//get cv education
       function get_cv_education($user_id)
    {

          

        $this->db->where('user_id', $user_id);
    
        $query = $this->db->get('cv_education');
        return $query->result_array();
    }



//get cv skill
       function get_cv_skill($user_id)
    {

         

        $this->db->where('user_id', $user_id);
    
        $query = $this->db->get('cv_skill');
        return $query->result_array();
    }








//save job
    function apply($id,$user_id)
    {
        

     

    $this->db->where('user_id',$user_id);
        $this->db->where('job_id',$id);
    $query = $this->db->get('job_apply');
    if ($query->num_rows() > 0){
        return false;
    }
    else {
    $data = array(

   'job_id'=>$id,
        'user_id'=>$user_id,
        'job_apply_date'=>date("Y-m-d")
);
    $this->db->insert('job_apply', $data);
    return true;
    }

 
    }


    
    
    
           function get_applied($user_id)
    {

$this->db->select('');
         $this->db->from('tbl_job');
         $this->db->join('tbl_company', 'tbl_company.comp_id = tbl_job.comp_id');
            $this->db->join('job_apply', 'job_apply.job_id = tbl_job.jobs_id');
        $this->db->where('job_apply.user_id', $user_id);
   
        $this->db->where('active/deactive', 1);
        $this->db->where('job_status', 1);
     
        return $this->db->get()->result_array();

}


       function get_recommended($user_id)
    {

  $this->db->select('subcat_id');
        $result=[];
        $this->db->from('tbl_user_cat');
        $this->db->where('user_id', $user_id);
        $q = $this->db->get();
        $subcat = $q->row_array();
        $subcats[] = [];
        $subcat_id = $subcat['subcat_id'];
        $subcats = explode(',', $subcat_id);

    foreach ($subcats as $ids) {
      //print_r($ids);
       $this->db->from('tbl_job');
 $this->db->join('tbl_company', 'tbl_company.comp_id = tbl_job.comp_id');
      $this->db->where('subcat_id',$ids);
        $this->db->where('active/deactive', 1);
    $this->db->where('job_status', 1);
      $d = $this->db->get()->result_array();
    $result = array_merge($result, $d);


   
}
return $result;

}


}