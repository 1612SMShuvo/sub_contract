<?php

class Pending_job extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pending_job_model');
        $this->load->model('My_job_model');
        $this->load->model('Job_view_model');
        $this->load->model('View_profile_publisher_model');
        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }


    }

    public function all_pending_job()
    {
        $user_id = $this->session->userdata("user_id");
        $data['pending_job'] = $this->Pending_job_model->select_all_pending_job($user_id);
        $this->load->view('web/job/pending_job_publisher/pending_job_tpl', $data);
    }

    public function pending_job_details($id)
    {
        $data['interest_bidder'] = $this->My_job_model->select_interest_bidder($id);
        $data['interest_investor'] = $this->Pending_job_model->select_interest_investor($id);
        $data['shortlist_bidder'] = $this->My_job_model->select_shortlist_bidder($id);
        $data['shortlist_investor'] = $this->Pending_job_model->select_shortlist_investor($id);
        $data['hire_bidder'] = $this->My_job_model->select_hire_bidder($id);
        $data['hire_investor'] = $this->My_job_model->select_hire_investor($id);
        $data['post_id'] = $id;
        $data['view_pending_job'] = $this->Pending_job_model->pending_job_detail_view($id);
        $this->load->view('web/job/pending_job_publisher/pending_job_details_tpl', $data);
    }

    public function load_add_agreement_from()
    {
        $post_id = $this->input->post('post_id');
        $data['user_id'] = $this->input->post('user_id');
        $data['aggrement_job'] = $this->Pending_job_model->agreement_job_detail_view($post_id);
        $this->load->view('web/job/pending_job_publisher/aggrement_form_tpl', $data);
    }



    public function add_agreement_from()
    {
        $total = $this->input->post('total_num_of_fields');
        $description = $this->input->post('description');
        $time = $this->input->post('time');
        $budget = $this->input->post('budget');
        $work_description = $this->input->post('work_description');
        $amount = $this->input->post('amount');
        $post_id = $this->input->post('post_id');
        $user_id = $this->input->post('user_id');
        $data = array(
            'post_id' => $post_id,
            'user_id' => $user_id,
            'description' => $description,
            'time' => $time,
            'budget' => $budget,
        );
        $last_id = $this->Pending_job_model->insertData($data);
        for ($i = 0; $i < $total; $i++) {
            $data1 = array(
                'agreement_id' => $last_id,
                'work_description' => $work_description[$i],
                'amount' => $amount[$i],
            );
            $result = $this->Main_model->insertData($data1, 'publisher_agreement_payment');
            if ($result) {
                echo "1";
            }
        }
    }

    public function load_investor_add_agreement_from()
    {
        $post_id = $this->input->post('post_id');
        $data['user_id'] = $this->input->post('user_id');
        $data['aggrement_job'] = $this->Pending_job_model->agreement_job_detail_view($post_id);
        $this->load->view('web/job/pending_job_publisher/investor_agreement_form_tpl', $data);
    }
    public function add_investor_agreement_from()
    {
        $total = $this->input->post('total_num_of_fields');
        $description = $this->input->post('description');
        $time = $this->input->post('time');
        $budget = $this->input->post('budget');
        $invest_amount = $this->input->post('invest_amount');
        $work_description = $this->input->post('work_description');
        $amount = $this->input->post('amount');

        $profit_share = $this->input->post('profit_share');
        $total_benifit_amount = $this->input->post('total_benifit_amount');

        $post_id = $this->input->post('post_id');
        $user_id = $this->input->post('user_id');
        $data = array(
            'post_id' => $post_id,
            'user_id' => $user_id,
            'description' => $description,
            'time' => $time,
            'budget' => $budget,
            'invest_amount' => $invest_amount,

            'profit_share' => $profit_share,
            'total_benifit_amount' => $total_benifit_amount,
        );
        $last_id = $this->Pending_job_model->insertInvestData($data);
        for ($i = 0; $i < $total; $i++) {
            $data1 = array(
                'agreement_id' => $last_id,
                'work_description' => $work_description[$i],
                'amount' => $amount[$i],
            );
            $result = $this->Main_model->insertData($data1, 'publisher_investor_agreement_payment');
            if ($result) {
                echo "1";
            }
        }
    }

    public function shortlister_active($id){
        $data = array(
            'status' => 4
        );
        $result = $this->Main_model->updateData($data, "job_apply", "id='$id'");
        if ($result) {
            echo "1";
        }
    }
    public function shortlister_investor_active($id){
        $data = array(
            'status' => 5
        );
        $result = $this->Main_model->updateData($data, "job_apply", "id='$id'");
        if ($result) {
            echo "1";
        }
    }

    public function decline_investor_active($id){
        $data = array(
            'status' =>0
        );
        $result = $this->Main_model->updateData($data, "job_apply", "id='$id'");
        if ($result) {
            echo "1";
        }
    }
    public function decline_bidder_active($id){
        $data = array(
            'status' =>0
        );
        $result = $this->Main_model->updateData($data, "job_apply", "id='$id'");
        if ($result) {
            echo "1";
        }
    }
  

    public function hire_investor_active($id){
        $data = array(
            'status' =>9
        );

        $result = $this->Main_model->updateData($data, "job_apply", "post_id='$id'");
        if ($result) {
            echo "1";
        }
    }
    public function hire_bidder_active($id){
        $data = array(
            'status' =>8
        );

        $result = $this->Main_model->updateData($data, "job_apply", "post_id='$id'");
        if ($result) {
            echo "1";
        }
    }
    public function tern_pending_job_active($id)
    {
        $data = array(
            'status' =>6
        );

        $result = $this->Main_model->updateData($data, "job_post", "id='$id'");
        if ($result) { 
            redirect('/active_job_publiser/all_active_job_publiser', 'refresh');
        }
    }


}