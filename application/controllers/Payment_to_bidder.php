<?php

class Payment_to_bidder extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('My_work_model');
        $this->load->model('Job_view_model');
        $this->load->model('View_profile_publisher_model');

        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }

    }
    public function payment_to_bidder()
    {
        $this->load->view('web/job/publish_payment/payment_for_bidder_tpl');
    }

}