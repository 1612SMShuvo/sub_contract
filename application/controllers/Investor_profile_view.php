<?php

class Investor_profile_view extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Investor_profile_view_model');
        $this->load->model('View_profile_publisher_model');

        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }

    }

    public function investor_profile($user_id)
    {
        $data['profile_details_investor'] = $this->Investor_profile_view_model->profile_details_investor($user_id);
        $this->load->view('web/job/investor_profile_view/investor_profile_view_tpl',$data);

    }


}

?>