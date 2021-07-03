<?php

class Payment_as_publisher extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Payment_as_publisher_model');
        
        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }
    }

    public function all_payment_as_publisher()
    {
        $user_id = $this->session->userdata("user_id");
        $data['payment_terms'] = $this->Payment_as_publisher_model->select_all_payment_term_as_publisher($user_id);
        $data['total_budget'] = $this->Payment_as_publisher_model->select_all_budget_as_publisher($user_id);
        $data['total'] = $this->Payment_as_publisher_model->select_all_payterm_as_publisher($user_id);
        $this->load->view('web/payment_as_publisher/payment_as_publisher_tpl',$data);
    }

    public function all_payment_as_investor()
    {
        $user_id = $this->session->userdata("user_id");
        $data['payment_terms'] = $this->Payment_as_publisher_model->select_all_payment_term_as_investor($user_id);
        $data['total_budget'] = $this->Payment_as_publisher_model->select_all_budget_as_investor($user_id);
        $data['total'] = $this->Payment_as_publisher_model->select_all_payterm_as_investor($user_id);
        // echo "<pre>"; print_r($data['payment_terms']);exit();
        $this->load->view('web/payment_as_publisher/payment_as_investor_tpl',$data);
    }
}