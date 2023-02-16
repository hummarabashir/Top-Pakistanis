<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'libraries/Stripe/lib/Stripe.php');

class Payment extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        $this->load->model('stripe/paymentmodel', 'payment');
    }
	
	public function index(){
		$this->load->view('stripe/index');
	}
	
	public function process(){
        echo "i am here now";
        exit();
		try {
            Stripe::setApiKey('sk_test_ax8hOHlezDHpSG12y2gC3ZJu');
            $charge = Stripe_Charge::create(array(
                        "amount" => 450000,
                        "currency" => "PKR",
                        "card" => $this->input->post('access_token'),
                        "description" => "Stripe Payment"
            ));
            // this line will be reached if no error was thrown above
            $data = array(
                'payment_id' => $charge->id,
                'payment_status' => 'success',
                'total' => 450000,
                'description' => 'Stripe Payment',
                'first_name' => 'sk',
                'last_name' => 'zaman',
                'address' => '#1200',
                'zip' => '46000',
                'city' => 'Islamabad',
                'created_on' => date('Y-m-d H:i:s'),
                'updated_on' => date('Y-m-d H:i:s')
            );
            $response = $this->payment->insert($data);
            echo $response;
            echo "i am here";
            if ($response) {
                echo json_encode(array('status' => 200, 'success' => 'Payment successfully completed.'));
                //exit();
            } else {
                echo json_encode(array('status' => 500, 'error' => 'Something went wrong. Try after some time.'));
                //exit();
            }
        } catch (Stripe_CardError $e) {
            echo json_encode(array('status' => 500, 'error' => STRIPE_FAILED));
            //exit();
        } catch (Stripe_InvalidRequestError $e) {
            // Invalid parameters were supplied to Stripe's API
            echo json_encode(array('status' => 500, 'error' => $e->getMessage()));
            //exit();
        } catch (Stripe_AuthenticationError $e) {
            // Authentication with Stripe's API failed
            echo json_encode(array('status' => 500, 'error' => AUTHENTICATION_STRIPE_FAILED));
            //exit();
        } catch (Stripe_ApiConnectionError $e) {
            // Network communication with Stripe failed
            echo json_encode(array('status' => 500, 'error' => NETWORK_STRIPE_FAILED));
            //exit();
        } catch (Stripe_Error $e) {
            // Display a very generic error to the user, and maybe send
            echo json_encode(array('status' => 500, 'error' => STRIPE_FAILED));
            //exit();
        } catch (Exception $e) {
            // Something else happened, completely unrelated to Stripe
            echo json_encode(array('status' => 500, 'error' => STRIPE_FAILED));
            //exit();
        }
	}
	public function success(){
		$this->load->view('stripe/success');
	}
}
