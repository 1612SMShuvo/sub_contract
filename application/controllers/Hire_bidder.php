<?php

class Hire_bidder extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Hire_bidder_model');

        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }

    }

    public function hire_for_bidder_agree()
    {

        $this->load->view('web/job/hire_for_bidder/hire_bidder_tpl');

    }


}

?>