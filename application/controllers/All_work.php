<?php

class All_work extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('All_work_model');

        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }

    }

    public function All_work()
    {
        
        $this->load->view('web/job/all_work/all_work_tpl');
    }


}