<?php

class Agreement_form extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Agreement_form_model');

        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }

    }

    public function all_agreement_form()
    {
        $data['agreement'] = $this->Agreement_form_model->select_aggrement_form();
        $this->load->view('admin/agreement_form/agreement_form_view_tpl',$data);
    }
}