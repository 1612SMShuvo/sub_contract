<?php

class Job_details extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Job_details_model');
        $this->load->model('Job_view_model');
        $this->load->model('Frontend_model');
        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }

    }

    public function view_job_details_for_investor($job_id = null, $status = null)
    {
        $user_id = $this->session->userdata('user_id');
        $check_result = $this->Job_details_model->check_investor_info($user_id);
        if ($check_result) {
            $data['investor'] = 1;
        } else {
            if ($status == 1) {
                $data['investor'] = 1;
            } else {
                $data['investor'] = 0;
            }
        }
        $data['job_id'] = $job_id;
        $data['status'] = $status;
        $data['job_post'] = $this->Job_details_model->select_job_by_post_id($job_id);
        $data['view_job_details_investor'] = $this->Job_details_model->job_details_view_investor($job_id);
        $this->load->view('web/job/job_details/job_details_tpl_for_investor',$data);
    }

    public function view_job_details_for_bidder($job_id = null, $status = null)
    {
        $user_id = $this->session->userdata('user_id');
        $check_result = $this->Job_details_model->check_bidder_info($user_id);
        if ($check_result) {
            $data['bidder'] = 1;
        } else {
            if ($status == 1) {
                $data['bidder'] = 1;
            } else {
                $data['bidder'] = 0;
            }
        }
        $data['job_id'] = $job_id;
        $data['status'] = $status;
        $data['job_post'] = $this->Job_details_model->select_job_by_post_id($job_id);
        $data['view_job_details'] = $this->Job_details_model->job_details_view($job_id);
        $this->load->view('web/job/job_details/job_details_tpl_for_bidder', $data);
    }
}