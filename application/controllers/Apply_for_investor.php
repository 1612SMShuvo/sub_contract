<?php

class Apply_for_investor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Apply_for_investor_model');
        $this->load->model('Apply_for_bidder_model');
        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }

    }

    public function apply_investor($post_id = null)
    {
        $user_id = $this->session->userdata('user_id');
        $data['post_id'] = $post_id;
        $check = $this->Apply_for_bidder_model->check_job_apply($post_id, $user_id);
        if ($check) {
            $data['check'] = $check->user_id;
        } else {
            $data['check'] = "";
        }
        $this->load->view('web/job/apply_for_investor/apply_for_investor_tpl', $data);
    }

    public function create_investor()
    {
        $user_id = $this->session->userdata('user_id');
        $user_name = $this->session->userdata('user_name');
        $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
        $data = array(
            'cover_letter' => $this->input->post('cover_letter'),
            'interested_investment' => $this->input->post('interested_investment'),
            'user_id' => $user_id,
            'post_id' => $this->input->post('post_id'),
            'job_type' => 2,
            'remarks' => 'Add',
            'created_by' => $user_name, 'date_and_time' => $dt->format("d-m-Y, g:i a")
        );
        $result_msg = $this->Main_model->insertData($data, 'job_apply');
        if ($result_msg) {
            redirect('apply_for_investor/investor_success');
        }


    }

    public function check_tin()
    {
        $user_id = $this->session->userdata('user_id');
        $result = $this->Apply_for_investor_model->check_tin($user_id);
        if ($result->tin) {
            echo "1";
        } else {
            echo "";
        }
    }

    public function check_bin(){
        $user_id = $this->session->userdata('user_id');
        $result = $this->Apply_for_investor_model->check_bin($user_id);
        if ($result->bin) {
            echo "1";
        } else {
            echo "";
        }
    }

    public function check_nid(){
        $user_id = $this->session->userdata('user_id');
        $result = $this->Apply_for_investor_model->check_nid($user_id);
        if ($result->nid) {
            echo "1";
        } else {
            echo "";
        }
    }

    public function check_liquid_money(){
        $user_id = $this->session->userdata('user_id');
        $result = $this->Apply_for_investor_model->check_liquid_money($user_id);
        if ($result->liquid_money) {
            echo "1";
        } else {
            echo "";
        }
    }

    public function check_bank_statement(){
        $user_id = $this->session->userdata('user_id');
        $result = $this->Apply_for_investor_model->check_bank_statement($user_id);
        if ($result->bank_statement) {
            echo "1";
        } else {
            echo "";
        }
    }
    public function check_audit_report(){
        $user_id = $this->session->userdata('user_id');
        $result = $this->Apply_for_investor_model->check_audit_report($user_id);
        if ($result->audit_report) {
            echo "1";
        } else {
            echo "";
        }
    }

    public function investor_success()
    {
        $this->load->view('web/job/apply_for_investor/successful_message_investor_tpl');
    }
}