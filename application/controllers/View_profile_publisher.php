<?php

class View_profile_publisher extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('View_profile_publisher_model');
        $this->load->model('Job_view_model');

        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }

    }

    public function view_profile_publisher_all($user_id)
    {
        $data['profile_details_publisher'] = $this->View_profile_publisher_model->profile_details($user_id);

        $this->load->view('web/job/view_profile_publisher/view_profile_publisher_tpl',$data);
    }


}