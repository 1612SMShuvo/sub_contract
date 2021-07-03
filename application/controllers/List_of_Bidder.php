<?php

class List_of_Bidder extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('List_of_Bidder_model');
        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }

    }

    public function list_of_all_bidder()
    {
        $user_id = $this->session->userdata("user_id");
        $data['all_investor'] = $this->List_of_Bidder_model->list_of_bidders($user_id);
        $this->load->view('web/bidder_list/list_of_bidder_tpl');
    }
}