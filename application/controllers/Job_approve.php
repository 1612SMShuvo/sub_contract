<?php

class Job_approve extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Job_approve_model');

        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }

    }

    public function all_job_approve()
    {
        $this->config->load('pagination');
        $this->load->library("pagination");
        $config = array();
        $config["base_url"] = base_url() . "job_approve/all_job_approve";
        $total = $this->Job_approve_model->countAll();
        $config["total_rows"] = $total->total_rows;
        $config['per_page'] = 50;
        $config['uri_segment'] = 3;
        $config['num_links'] = 2;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["all_job"] = $this->Job_approve_model->select_all_job_post($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        if ($this->input->is_ajax_request()) {
            $this->load->view('admin/job_approve/per_page_job_approve', $data);
        } else {
            $this->load->view('admin/job_approve/job_approve_tpl', $data);
        }
    }

    public function load_cancel_job_approve_from()
    {
        $data['id'] = $this->input->post('id');
        $this->load->view('admin/job_approve/cancel_reason_form', $data);
    }

    public function create_reason()
    {
        $reason = $this->input->post('reason');
        $job_id = $this->input->post('job_id');
        $data = array(
            'reason' => $reason,
            'job_id' => $job_id
        );
        $result_msg = $this->Main_model->insertData($data, 'job_post_message');
        if ($result_msg) {
            echo "Reason Send Successfully";
        }


    }

    public function job_approve_active($id)
    {
        $data = array(
            'status' => 2
        );
        $result = $this->Main_model->updateData($data, "job_post", "id='$id'");
        if ($result) {
            echo "1";
        }
    }

    public function job_approve_inactive($id)
    {
        $data = array(
            'status' => 0
        );
        $result = $this->Main_model->updateData($data, "job_post", "id='$id'");
        if ($result) {
            echo "1";
        }
    }


//    =================================Application View============================================================
    public function all_job_applyer($id)
    {

        $data['all_applyer'] = $this->Job_approve_model->all_job_applyer($id);
        $this->load->view('admin/job_approve/view_all_applyer_form', $data);
    }

    public function select_applyer_for_job($id)
    {
        $data = array(
            'status' => 1
        );
        $result = $this->Main_model->updateData($data, "job_apply", "id='$id'");
        if ($result) {
            echo "1";
        }
    }

    public function job_confirmed($id)
    {
        $data = array(
            'status' => 3
        );
        $result = $this->Main_model->updateData($data, "job_apply", "id='$id'");
        if ($result) {
            echo "1";
        }
    }

//============================================Aplication Shortlist==================================================

    public function all_job_short_lister($id)
    {
        $data['all_shortlister'] = $this->Job_approve_model->all_job_shortlister($id);
        $this->load->view('admin/job_approve/view_all_shortlister_form', $data);
    }

    public function view_job_details_admin()
    {
        $id = $this->input->post('id');
        $result['job_details_admin'] = $this->Job_approve_model->job_details($id);
        $this->load->view('admin/view_job_details/view_job_details_home', $result);
    }

    public function select_all_confirmed_job($id)
    {


        exit();
        $data['confirmed_job'] = $this->Job_approve_model->select_all_confirmed_job($id);
        $this->load->view('admin/job_approve/view_all_confirmed_job', $data);
    }

    public function job_applyer_details($id)
    {
        $data['details_job_apply'] = $this->Job_approve_model->select_all_details_job($id);
        $this->load->view('admin/job_approve/job_applyer_details_tpl',$data);
    }
}

?>