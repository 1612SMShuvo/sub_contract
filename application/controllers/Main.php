<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Welcome_model');
        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }
    }

    public function index()
    {
        $data['job_posts'] = $this->Main_model->get_all_job_posts();
        $data['job_count'] = $this->Main_model->count_all_job_posts();
        $data['new_job_count'] = $this->Main_model->count_all_new_job_posts();
        $data['pending_job_count'] = $this->Main_model->count_all_pending_job_posts();
        $this->load->view('admin/admin_tpl',$data);
    }

    public function logout()
    {
        $this->session->unset_userdata('profile_name');
        $this->session->unset_userdata('user_name');
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('powered_by');
        $this->session->unset_userdata('copy_write');
        $success_mas['msg'] = "<h5 style='color:green;'>Your are successfully logout.</h5>";
        $this->session->set_userdata($success_mas);
        redirect('welcome');
    }
}
