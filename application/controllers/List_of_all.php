<?php

class List_of_all extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('List_of_all_model');
        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }

    }

    public function list_of_investor()
    {
        $user_id = $this->session->userdata("user_id");
        $data['all_investor'] = $this->List_of_all_model->list_of_investors($user_id);
        $data['all_bidder'] = $this->List_of_all_model->list_of_bidder($user_id);
        $this->load->view('web/profile_list/list_of_all_tpl', $data);
    }

    public function list_of_bidder()
    {
        $user_id = $this->session->userdata("user_id");
        $data['all_investor'] = $this->List_of_all_model->list_of_investors($user_id);
        $data['all_bidder'] = $this->List_of_all_model->list_of_bidder($user_id);
        $this->load->view('web/profile_list/list_of_bidder_tpl', $data);
    }
}