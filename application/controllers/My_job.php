<?php

class My_job extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('My_job_model');
        $this->load->model('Job_view_model');
        $this->load->model('Pending_job_model');

        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }
    }

    public function all_my_job()
    {
        $user_id = $this->session->userdata("user_id");
        $data['my_job'] = $this->My_job_model->select_all_my_job($user_id);
        $this->load->view('web/job/my_job/my_job_tpl', $data);
    }

    public function my_job_details($id)
    {

        $data['view_job'] = $this->My_job_model->job_detail_view($id);
        $data['interest_bidder'] = $this->My_job_model->select_interest_bidder($id);
        $data['interest_investor'] = $this->Pending_job_model->select_interest_investor($id);
        $data['shortlist_bidder'] = $this->My_job_model->select_shortlist_bidder($id);
        $data['shortlist_investor'] = $this->Pending_job_model->select_shortlist_investor($id);
        //$data['hire_bidder'] = $this->My_job_model->select_hire_bidder($id);
        //$data['hire_investor'] = $this->My_job_model->select_hire_investor($id);
        $this->load->view('web/job/my_job/my_job_details_tpl', $data);
    }


}