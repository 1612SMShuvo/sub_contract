<?php

class View_investor_job extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('View_investor_job_model');
        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }

    }

    public function all_investor_job()
        
    {
        $user_id = $this->session->userdata("user_id");
        $data['my_invest'] = $this->View_investor_job_model->select_all_my_invest($user_id);
        $this->load->view('web/job/investor/view_investor_job_tpl',$data);
    }

    public function investor_job_details($id)
    {
        $user_id = $this->session->userdata("user_id");
        $data['my_invest_details'] = $this->View_investor_job_model->select_my_invest_details($id,$user_id);
        $this->load->view('web/job/investor/view_investor_job_details_tpl',$data);
    }



}