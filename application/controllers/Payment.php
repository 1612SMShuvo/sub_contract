<?php

class Payment extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Payment_model');
        $this->load->library('Sslcommerz');
        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }

    }
    
    public function payment_page()
    {
        $this->load->view('web/payment/payment_form_page');

    }
    
    public function request_api_hosted()
    {
        if($this->input->get_post('placeorder'))
        {
            $post_data = array();
            $post_data['total_amount'] = $this->input->post('amount');
            $post_data['currency'] = "USD";
            $post_data['tran_id'] = "SSLC".uniqid();
            $post_data['success_url'] = base_url()."success";
            $post_data['fail_url'] = base_url()."fail";
            $post_data['cancel_url'] = base_url()."cancel";
            $post_data['ipn_url'] = base_url()."ipn";
            # $post_data['multi_card_name'] = "mastercard,visacard,amexcard";  # DISABLE TO DISPLAY ALL AVAILABLE

            # EMI INFO
            // $post_data['emi_option'] = "1";
            // $post_data['emi_max_inst_option'] = "9";
            // $post_data['emi_selected_inst'] = "9";

            # CUSTOMER INFORMATION
            $post_data['cus_name'] = $this->input->post('fname')." ".$this->input->post('fname');
            $post_data['cus_email'] = $this->input->post('cus_email');
            $post_data['cus_add1'] = $this->input->post('add1');
            $post_data['cus_city'] = $this->input->post('state');
            $post_data['cus_state'] = $this->input->post('state');
            $post_data['cus_postcode'] = $this->input->post('postcode');
            $post_data['cus_country'] = $this->input->post('country');
            $post_data['cus_phone'] = $this->input->post('cus_phone');

            # SHIPMENT INFORMATION
            $post_data['ship_name'] = $this->input->post('fname')." ".$this->input->post('fname');
            $post_data['ship_add1'] = $this->input->post('add1');
            $post_data['ship_city'] = $this->input->post('state');
            $post_data['ship_state'] = $this->input->post('state');
            $post_data['ship_postcode'] = $this->input->post('postcode');
            $post_data['ship_country'] = $this->input->post('country');

            # OPTIONAL PARAMETERS
            $post_data['value_a'] = "ref001";
            $post_data['value_b'] = "ref002";
            $post_data['value_c'] = "ref003";
            $post_data['value_d'] = "ref004";

            $post_data['product_profile'] = "physical-goods";
            $post_data['shipping_method'] = "YES";
            $post_data['num_of_item'] = "3";
            $post_data['product_name'] = "Computer,Speaker";
            $post_data['product_category'] = "Ecommerce";

            $this->load->library('session');

            $session = array(
                'tran_id' => $post_data['tran_id'],
                'amount' => $post_data['total_amount'],
                'currency' => $post_data['currency']
            );
            $this->session->set_userdata('tarndata', $session);

            echo "<pre>";
            print_r($post_data);
            if($this->sslcommerz->RequestToSSLC($post_data, 'enlis60d9938553241', 'enlis60d9938553241@ssl'))
            {
                echo "Pending";
                /***************************************
                # Change your database status to Pending.
                ****************************************/
            }
        }
    }

    public function create_payment()
    {
        $user_id = $this->session->userdata("user_id");
        $data = array(
            'account_no' => $this->input->post('account_no'),
            'txn_id' => $this->input->post('txn_id'),
            'amount' => $this->input->post('amount'),
            'user_id' => $user_id,
        );
        $result_msg = $this->Main_model->insertData($data, 'subscription_payment');
        if ($result_msg) {
            echo "Payment Added Successfully";
        }
    }

    public function create_boost_payment()
    {
        return $this->load->view('web/payment/boost_form_page');
    }



    public function store_boost_payment()
    {
        $user_id = $this->session->userdata("user_id");
        $data = array(
            'user_id' => $user_id,
            'post_id' => $this->input->post('post_id'),
            'account_no' => $this->input->post('account_no'),
            'txn_id' => $this->input->post('txn_id'),
            'amount' => $this->input->post('amount'),
            'user_id' => $user_id,
        );
        $result_msg = $this->Main_model->insertData($data, 'job_boost_payment');
        if ($result_msg) {
            echo "Payment Added Successfully";
        }
    }
}