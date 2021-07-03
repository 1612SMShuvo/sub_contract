<?php

class Shortlist_job extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Job_shortlist_model');
        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }

    }

    public function all_shortlist_job()
    {
       
        $this->load->view('admin/job_shortlist/job_shortlist_tpl');

    }


}

?>