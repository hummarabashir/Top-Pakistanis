<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'libraries/Stripe/lib/Stripe.php');

class Payment extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('stripe/Paymentmodel', 'payment');
        $this->load->database();
        $this->load->model('Crud_model');
        $this->load->model('user');
        $this->load->library('session');

        if ($this->session->userdata('login') != 1)
      redirect(base_url().'site/login');
    }
    
    public function index(){
        $this->load->view('stripe/index');
    }



    
    public function process(){
        try {
            if ($this->session->userdata('logged_recruiter') != 1)
            redirect(base_url().'site/login', 'refresh');

            date_default_timezone_set("Asia/Karachi");
            
            $user_id = $this->session->userdata('logged_id');

            $user_data = $this->crud_model->get_data_user_id('users','id',$user_id);
            
        
            $f_name = $user_data[0]['first_name'];
            $l_name = $user_data[0]['last_name'];
            $city = $user_data[0]['city'];
            $address = $user_data[0]['address'];

            $packages = $this->input->post('packages');
            $amount =$this->input->post('amount');
            $final_amount = 100*$amount;
            Stripe::setApiKey('sk_test_ax8hOHlezDHpSG12y2gC3ZJu');
            $charge = Stripe_Charge::create(array(
                        "amount" => $final_amount,
                        "currency" => "PKR",
                        "card" => $this->input->post('access_token'),
                        "description" => "Stripe Payment",
                        
            ));
            // this line will be reached if no error was thrown above

            $end_data = NULL;
            $credits = '';
            if ($packages == 'basic') {
                $credits = '1';
            }
            if ($packages == 'group_of_five') {
                $credits = '5';
            }
            if ($packages == 'yearly') {
                $end_data = date('Y-m-d', strtotime('+1 years'));
                $credits = 'unlimited';
            }
            if ($packages == 'monthly') {
                $credits = 'unlimited';
                $end_data = date('Y-m-d', strtotime('+1 months'));
            }
            //$end = date('Y-m-d', strtotime('+5 years'));
            $data = array(
                'user_id' => $user_id,
                'payment_id' => $charge->id,
                'payment_confirmation' => 0,
                'payment_status' => 'success',
                'total' => $amount,
                'description' => 'Stripe Payment',
                'first_name' => $f_name,
                'last_name' => $l_name,
                'address' => $address,
                'city' => $city,
                'created_on' => date('Y-m-d H:i:s'),
                'updated_on' => date('Y-m-d H:i:s'),
                'package_name'=> $packages,
                'credits'=> $credits,
                'credits_status' => 'valid',
                'start_date' => date('Y-m-d'),
                'expiry_date' => $end_data
            );
            
            $response = $this->payment->insert($data);
            
            
             // emial send code
             $email_qry = $this->user->email_qry($user_id);
             $emp_email = $email_qry[0]['email'];
             $from_email = "ebmacs@jobs360.com.pk"; 
             $to_email = $emp_email;
             
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
                                                            Message: Message here:
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
         $this->email->to($to_email);
         $this->email->subject('Job Post'); 
         $this->email->message($message);
         $this->email->send();
         // email send ends
            
            
            if ($response) {

                echo json_encode(array('status' => 200, 'success' => 'Payment successfully completed.'));
               exit();
               
            } else {
                echo json_encode(array('status' => 500, 'error' => 'Something went wrong. Try after some time.'));
                exit();
            }
        } catch (Stripe_CardError $e) {
            echo json_encode(array('status' => 500, 'error' => STRIPE_FAILED));
            exit();
        } catch (Stripe_InvalidRequestError $e) {
            // Invalid parameters were supplied to Stripe's API
            echo json_encode(array('status' => 500, 'error' => $e->getMessage()));
            exit();
        } catch (Stripe_AuthenticationError $e) {
            // Authentication with Stripe's API failed
            echo json_encode(array('status' => 500, 'error' => AUTHENTICATION_STRIPE_FAILED));
            exit();
        } catch (Stripe_ApiConnectionError $e) {
            // Network communication with Stripe failed
            echo json_encode(array('status' => 500, 'error' => NETWORK_STRIPE_FAILED));
            exit();
        } catch (Stripe_Error $e) {
            // Display a very generic error to the user, and maybe send
            echo json_encode(array('status' => 500, 'error' => STRIPE_FAILED));
            exit();
        } catch (Exception $e) {
            // Something else happened, completely unrelated to Stripe
            echo json_encode(array('status' => 500, 'error' => STRIPE_FAILED));
            exit();
        }
    }

    


    public function success(){
        $this->load->view('stripe/success');
    }




    

    public function bank_pay($package_id)
    {
        
        if ($this->session->userdata('logged_recruiter') != 1)
            redirect(base_url().'site/login', 'refresh');
         
         date_default_timezone_set("Asia/Karachi");

        $user_id = $this->session->userdata('logged_id');
        $user_data = $this->crud_model->get_data_user_id('users','id',$user_id);
        $f_name = $user_data[0]['first_name'];
        $l_name = $user_data[0]['last_name'];
        $city   = $user_data[0]['city'];
        $address= $user_data[0]['address'];

            $rand_name = date('YmdHis');
            //print_r($rand_name);
            $user_count = $rand_name;
            $config = array(
            'upload_path'=> './uploads/receipt_image/',
            'allowed_types' => "gif|jpg|png",
            'overwrite' => TRUE,
            'file_name' => 'bankr_'.$rand_name
            //'max_size' => "100480", //Can be set to particular file size,here it is 2 MB(2048 Kb)
              );
            
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            

            if(!$this->upload->do_upload('userfile'))
            {
              $error = array('error' => $this->upload->display_errors());
              $this->session->set_flashdata('fail', $this->upload->display_errors());
        

            }
             
            $data['emp_packages'] = $this->crud_model->get_packages('emp_packages',$package_id);
            $packages = $data['emp_packages']->name;
            $amount = $data['emp_packages']->price;
            $credits = $data['emp_packages']->post_limit;
            $end_data = NULL;
              $data = array(
                'user_id' => $user_id,
                'payment_status' => 'success',
                'payment_confirmation' => 0,
                'total' => $amount,
                'description' => 'Bank Payment',
                'first_name' => $f_name,
                'last_name' => $l_name,
                'address' => $address,
                'city' => $city,
                'created_on' => date('Y-m-d H:i:s'),
                'updated_on' => date('Y-m-d H:i:s'),
                'package_name'=> $packages,
                'credits'=> $credits,
                'credits_status' => 'valid',
                'start_date' => date('Y-m-d'),
                'expiry_date' => $end_data
                );
          /*
             $credits = '';
            if ($packages == 'basic') {
                $credits = '1';
            }
            if ($packages == 'group_of_five') {
                $credits = '5';
            }
            if ($packages == 'yearly') {
                $end_data = date('Y-m-d', strtotime('+1 years'));
                $credits = 'unlimited';
            }
            if ($packages == 'monthly') {
                $credits = 'unlimited';
                $end_data = date('Y-m-d', strtotime('+1 months'));
            }
          */   
           
       


            if (isset($_FILES['userfile']['name']) && !empty($_FILES['userfile']['name'])) {
                $data['receipt_url'] = base_url()."uploads/receipt_image/" .$this->upload->data('file_name');
                    }
              $response = $this->payment->insert($data);
              
              
               // emial send code
             $email_qry = $this->user->email_qry($user_id);
             $emp_email = $email_qry[0]['email'];
             $from_email = "ebmacs@jobs360.com.pk"; 
             $to_email = $emp_email;
             
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
                                                            Message: Message here:
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
         $this->email->to($to_email);
         $this->email->subject('Job Post'); 
         $this->email->message($message);
         $this->email->send();
         // email send ends
         
            if ($response) {
                json_encode(array('status' => 200, 'success' => 'Payment successfully completed'));
                $this->session->set_flashdata('flash_message' , 'Recipt uploaded successfully');
                redirect(base_url().'Stripe/payment/success','refresh');
               exit();

            } else {
                echo json_encode(array('status' => 500, 'error' => 'Something went wrong. Try after some time.'));
                exit();
            }

    }











    public function recruiter_bank_pay($package_id)
    {
        if ($this->session->userdata('logged_recruiter') != 1)
            redirect(base_url().'site/login', 'refresh');    
         date_default_timezone_set("Asia/Karachi");
        $user_id = $this->session->userdata('logged_id');
        $user_data = $this->crud_model->get_data_user_id('users','id',$user_id);
      
        $f_name = $user_data[0]['first_name'];
        $l_name = $user_data[0]['last_name'];
        $city   = $user_data[0]['city'];
        $address= $user_data[0]['address'];
            
            $rand_name = date('YmdHis');
            //print_r($rand_name);
            $user_count = $rand_name;
            $config = array(
            'upload_path'=> './uploads/receipt_image/',
            'allowed_types' => "gif|jpg|png",
            'overwrite' => TRUE,
            'file_name' => 'bankr_'.$rand_name
            //'max_size' => "100480", //Can be set to particular file size,here it is 2 MB(2048 Kb)
              );
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('userfile'))
            {
              $error = array('error' => $this->upload->display_errors());
              $this->session->set_flashdata('fail', $this->upload->display_errors());
            }
         
            $data['emp_packages'] = $this->crud_model->get_packages('emp_packages',$package_id);
            //echo "<pre>";
            //print_r($data['emp_packages']);
            //die();
            $packages = $data['emp_packages']->name;
            $package_id = $data['emp_packages']->emp_id;
            $amount = $data['emp_packages']->price;
            $credits = $data['emp_packages']->profile_view_limit;
            $promotion_limit = $data['emp_packages']->promotion_limit;

            $end_data = NULL;
              $data = array(
                'user_id' => $user_id,
                'payment_status' => 'success',
                'payment_confirmation' => 0,
                'total' => $amount,
                'description' => 'Bank Payment',
                'first_name' => $f_name,
                'last_name' => $l_name,
                'address' => $address,
                'city' => $city,
                'created_on'  => date('Y-m-d H:i:s'),
                'updated_on'  => date('Y-m-d H:i:s'),
                'package_name'=>$packages,
                'package_id'=>  $package_id,
                'credits'=>     $credits,
                'promotion_limit'=> $promotion_limit,
                'credits_status' => 'valid',
                'start_date' => date('Y-m-d'),
                'expiry_date' => $end_data
                );
          /*
             $credits = '';
            if ($packages == 'basic') {
                $credits = '1';
            }
            if ($packages == 'group_of_five') {
                $credits = '5';
            }
            if ($packages == 'yearly') {
                $end_data = date('Y-m-d', strtotime('+1 years'));
                $credits = 'unlimited';
            }
            if ($packages == 'monthly') {
                $credits = 'unlimited';
                $end_data = date('Y-m-d', strtotime('+1 months'));
            }
          */   
           
       


            if (isset($_FILES['userfile']['name']) && !empty($_FILES['userfile']['name'])) {
                $data['receipt_url'] = base_url()."uploads/receipt_image/" .$this->upload->data('file_name');
                    }
              $response = $this->payment->insert($data);
              
              
               // emial send code
             $email_qry = $this->user->email_qry($user_id);
             $emp_email = $email_qry[0]['email'];
             $from_email = "info@toppakistanis.com"; 
             $to_email = $emp_email;
             
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
                                                       <td align="left" valign="middle" style="padding:0;margin:0;font-size:0;line-height:0"><a href="http://toppakistanis.com/" target="_blank"><img src="http://toppakistanis.com/vendor/images/content/logo-pk.png" alt="Top Pakistanis" ></a></td>
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
                                                            Message: Message here: You have successfully purchased the package.. Your package will be activated within 24 hours then you will Enjoy the features !!!
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
                                                          <div style="color:#a3a3a3;font-size:12px;line-height:12px;padding:0;margin:0">&copy; 2019 Top Pakistanis.</div>
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
        
        $this->email->from($from_email, 'Top Pakistanis'); 
         $this->email->to($to_email);
         $this->email->subject('Top Pakistanis Package'); 
         $this->email->message($message);
         $this->email->send();
         // email send ends
         
            if ($response) {
                json_encode(array('status' => 200, 'success' => 'Payment successfully completed'));
                $this->session->set_flashdata('flash_message' , 'Recipt uploaded successfully');
                redirect(base_url().'Stripe/payment/success','refresh');
               exit();

            } else {
                echo json_encode(array('status' => 500, 'error' => 'Something went wrong. Try after some time.'));
                exit();
            }

    }


























    public function jbs_bank_pay($package_id)
    {
        if ($this->session->userdata('logged_jobseekar') != 1)
            redirect(base_url().'site/login', 'refresh');    
         date_default_timezone_set("Asia/Karachi");
        $user_id = $this->session->userdata('logged_id');
        $user_data = $this->crud_model->get_data_user_id('users','id',$user_id);
      
        $f_name = $user_data[0]['first_name'];
        $l_name = $user_data[0]['last_name'];
        $city   = $user_data[0]['city'];
        $address= $user_data[0]['address'];
            
            $rand_name = date('YmdHis');
            //print_r($rand_name);
            $user_count = $rand_name;
            $config = array(
            'upload_path'=> './uploads/receipt_image/',
            'allowed_types' => "gif|jpg|png",
            'overwrite' => TRUE,
            'file_name' => 'bankr_'.$rand_name
            //'max_size' => "100480", //Can be set to particular file size,here it is 2 MB(2048 Kb)
              );
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('userfile'))
            {
              $error = array('error' => $this->upload->display_errors());
              $this->session->set_flashdata('fail', $this->upload->display_errors());
            }
         
            $data['jbs_packages'] = $this->crud_model->get_packages_jbs('jbs_packages',$package_id);
            //echo "<pre>";
            //print_r($data['emp_packages']);
            //die();
            $packages = $data['jbs_packages']->name;
            $package_id = $data['jbs_packages']->jbs_id;
            $amount = $data['jbs_packages']->price;
            $duration = $data['jbs_packages']->duration;

            $end_data = NULL;
              $data = array(
                'user_id' => $user_id,
                'payment_status' => 'success',
                'payment_confirmation' => 0,
                'total' => $amount,
                'description' => 'Bank Payment',
                'first_name' => $f_name,
                'last_name' => $l_name,
                'address' => $address,
                'city' => $city,
                // 'created_on'  => date('Y-m-d H:i:s'),
                // 'updated_on'  => date('Y-m-d H:i:s'),
                'package_name'=>$packages,
                'package_id'=>  $package_id,
                // 'credits'=>     $credits,
                // 'promotion_limit'=> $promotion_limit,
                'credits_status' => 'valid',
                'start_date' => date('Y-m-d'),
                'end_date' => date('Y-m-d')
                );
          /*
             $credits = '';
            if ($packages == 'basic') {
                $credits = '1';
            }
            if ($packages == 'group_of_five') {
                $credits = '5';
            }
            if ($packages == 'yearly') {
                $end_data = date('Y-m-d', strtotime('+1 years'));
                $credits = 'unlimited';
            }
            if ($packages == 'monthly') {
                $credits = 'unlimited';
                $end_data = date('Y-m-d', strtotime('+1 months'));
            }
          */   
           
       


            if (isset($_FILES['userfile']['name']) && !empty($_FILES['userfile']['name'])) {
                $data['receipt_url'] = base_url()."uploads/receipt_image/" .$this->upload->data('file_name');
                    }
              $response = $this->payment->insert_jobseekar($data);
              
              
               // emial send code
             $email_qry = $this->user->email_qry($user_id);
             $emp_email = $email_qry[0]['email'];
             $from_email = "info@toppakistanis.com"; 
             $to_email = $emp_email;
             
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
                                                        <td align="left" valign="middle" style="padding:0;margin:0;font-size:0;line-height:0"><a href="http://toppakistanis.com/" target="_blank"><img src="http://toppakistanis.com/vendor/images/content/logo-pk.png" alt="Top Pakistanis" ></a></td>
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
                                                            Message: Message here: You have successfully purchased the package.. Your package will be activated within 24 hours then you will Enjoy the features !!!
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
                                                          <div style="color:#a3a3a3;font-size:12px;line-height:12px;padding:0;margin:0">&copy; 2019 Top Pakistanis.</div>
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
        
        $this->email->from($from_email, 'Top Pakistanis'); 
         $this->email->to($to_email);
         $this->email->subject('Top Pakistanis Package'); 
         $this->email->message($message);
         $this->email->send();
         // email send ends
         
            if ($response) {
                json_encode(array('status' => 200, 'success' => 'Payment successfully completed'));
                $this->session->set_flashdata('flash_message' , 'Recipt uploaded successfully');
                redirect(base_url().'Stripe/payment/success','refresh');
               exit();

            } else {
                echo json_encode(array('status' => 500, 'error' => 'Something went wrong. Try after some time.'));
                exit();
            }

    }



























}
