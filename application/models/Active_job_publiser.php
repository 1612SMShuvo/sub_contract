<?php

class Active_job_publiser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Active_job_publiser_model');
        $this->load->model('Job_view_model');
        $this->load->model('my_work_model');
        $this->load->model('View_profile_publisher_model');

        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }

    }

    public function all_active_job_publiser()
    {
        $user_id = $this->session->userdata('user_id');
        $data['active_job'] = $this->Active_job_publiser_model->view_all_active_job($user_id);
        $this->load->view('web/job/active_job_publiser/active_job_publiser_tpl', $data);
    }

    public function details_active_job_publiser($id)
    {
        $user_id = $this->session->userdata("user_id");
        $data = array(
            'notification_status' => 0
        );
        $this->Main_model->updateData($data, "publisher_agreement", "user_id='$user_id' and post_id='$id'");
        $data['details_active_job'] = $this->Active_job_publiser_model->view_details_active_job($id);
        $data['payment_term'] = $this->Active_job_publiser_model->select_all_payment_term($id);
        $data['requirement'] =$this->Active_job_publiser_model->select_specification_requirement($id);
        $this->load->view('web/job/active_job_publiser/active_job_publisher_details_tpl', $data);
    }


    public function payment_approve_active($id)
    {
        $data = array(
            'status' => 2
        );
        $result = $this->Main_model->updateData($data, "publisher_agreement_payment", "id='$id'");
        if ($result) {
            echo "1";
        }
    }

    public function payment_processing_active($id)
    {
        $data = array(
            'status' => 3
        );
        $result = $this->Main_model->updateData($data, "publisher_agreement_payment", "id='$id'");

        if ($result) {
            echo "1";
        }

    }

    public function payment_paid_active_bidder($id)
    {
        $data = array(
            'status' => 4
        );
        $result = $this->Main_model->updateData($data, "publisher_agreement_payment", "id='$id'");
        if ($result) {
            echo "1";
        }
    }


//=========================================Investor Information=====================================================================================

    public function all_active_job_publiser_investor()
    {
        $user_id = $this->session->userdata('user_id');
        $data['active_job_investor'] = $this->Active_job_publiser_model->view_all_active_job_investor($user_id);
        $this->load->view('web/job/active_job_publiser/active_job_investor_tpl', $data);
    }

    public function details_active_job_publiser_investor($id)
    {
        $data['details_job_investor'] = $this->Active_job_publiser_model->view_details_active_job_investor($id);
        $data['payment_term_investor'] = $this->Active_job_publiser_model->select_all_payment_term_investor($id);
        $data['requirement_details_investor_publiser'] = $this->Active_job_publiser_model->select_my_requirement_details_investor_publiser($id);
        $this->load->view('web/job/active_job_publiser/active_job_investor_details_tpl', $data);
    }

    public function payment_request_investor($id)
    {
        $data = array(
            'status' => 2
        );
        $result = $this->Main_model->updateData($data, "publisher_investor_agreement_payment", "id='$id'");
        if ($result) {
            echo "1";
        }
    }

    public function payment_approve_active_investor($id)
    {
        $data = array(
            'status' => 3
        );
        $result = $this->Main_model->updateData($data, "publisher_investor_agreement_payment", "id='$id'");
        if ($result) {
            echo "1";
        }
    }

    public function payment_processing_active_investor($id)
    {
        $data = array(
            'status' => 4
        );
        $result = $this->Main_model->updateData($data, "publisher_investor_agreement_payment", "id='$id'");
        if ($result) {
            echo "1";
        }
    }

    public function payment_paid_active($id)
    {
        $data = array(
            'status' => 5
        );
        $result = $this->Main_model->updateData($data, "publisher_investor_agreement_payment", "id='$id'");
        if ($result) {
            echo "1";
        }
    }


}