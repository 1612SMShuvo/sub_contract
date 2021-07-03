<?php

class List_of_Investor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('List_of_Investor_model');
        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }

    }

    public function list_of_all_investor()
    {
        $user_id = $this->session->userdata("user_id");
        $data['all_investor'] = $this->List_of_Investor_model->list_of_investors($user_id);
        $this->load->view('web/investor_list/list_of_investor_tpl',$data);
    }
}