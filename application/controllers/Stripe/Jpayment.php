<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'libraries/Stripe/lib/Stripe.php');

class Jpayment extends CI_Controller {
    
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
              if ($this->session->userdata('logged_jobseekar') != 1)
            redirect(base_url().'site/login', 'refresh');

            date_default_timezone_set("Asia/Karachi");
            
            $user_id = $this->session->userdata('logged_id');
          

            
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

             $end_data = date('Y-m-d', strtotime('+3 months'));
                $data = array(
                'user_id' => $user_id,
                'payment_id' => $charge->id,
                'payment_confirmation' => 0,
                'payment_status' => 'success',
                'total' => $amount,
                'description' => 'Stripe Payment',
                'start_date' => date('Y-m-d'),
                'end_date' => $end_data
            );

            $response = $this->payment->insert_jobseekar($data);
            
            
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
        $this->load->view('site/success');
    }

    public function bank_pay()
    {
        
        if ($this->session->userdata('logged_jobseekar') != 1)
            redirect(base_url().'site/login', 'refresh');
         
         date_default_timezone_set("Asia/Karachi");

        $user_id = $this->session->userdata('logged_id');
     

            $rand_name = date('YmdHis');
            //print_r($rand_name);
            $user_count = $rand_name;
            $config = array(
            'upload_path'=> './uploads/receipt_image/jobseekar',
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
        
            $amount =$this->input->post('amount');

 $end_data = date('Y-m-d', strtotime('+3 months'));
        $data = array(
                'user_id' => $user_id,
                'payment_status' => 'success',
                'payment_confirmation' => 0,
                'total' => $amount,
                'description' => 'Bank Payment',
                'start_date' => date('Y-m-d'),
                'end_date' => $end_data
                );

       


            if (isset($_FILES['userfile']['name']) && !empty($_FILES['userfile']['name'])) {
                $data['receipt_url'] = base_url()."uploads/receipt_image/jobseekar/" .$this->upload->data('file_name');
                    }
              $response = $this->payment->insert_jobseekar($data);
            if ($response) {
                json_encode(array('status' => 200, 'success' => 'Payment successfully completed'));
                $this->session->set_flashdata('flash_message' , 'Recipt uploaded successfully');
                redirect(base_url().'Stripe/jpayment/success','refresh');
               exit();

            } else {
                echo json_encode(array('status' => 500, 'error' => 'Something went wrong. Try after some time.'));
                exit();
            }

    }
}
