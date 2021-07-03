<?php

class View_job_details_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('View_job_details_admin_model');

    }

    public function view_job_details_admin($id)
    {
        $result['job_details_admin'] = $this->View_job_details_admin_model->job_details($id);
        $this->load->view('admin/view_job_details/view_job_details_tpl',$result);
    }


}