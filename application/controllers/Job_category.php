<?php

class Job_category extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Job_category_model');

    }

    public function all_job_category()
    {
        $result['job_category'] = $this->Main_model->getValue("", 'master_category', '*', "id desc");
        $this->load->view('admin/job_category/job_category_tpl',$result);

    }

    public function load_add_category_from(){
        $this->load->view('admin/job_category/job_category_form');
    }

    public function create_category(){
        $data = array(
            'category_name' => $this->input->post('category_name'),
            'status' => 1
        );
        $result_msg = $this->Main_model->insertData($data, 'master_category');
        if ($result_msg) {
            echo "Job Category Added Successfully";
        }
    }

    public function delete_category($id)
    {
        $this->Main_model->deleteData("id = '$id'", "master_category");
    }

    public function category_active($id)
    {
        $data = array(
            'status' => 1
        );
        $result = $this->Main_model->updateData($data, "master_category", "id='$id'");
        if ($result) {
            echo "1";
        }
    }

    public function category_inactive($id)
    {
        $data = array(
            'status' => 0
        );
        $result = $this->Main_model->updateData($data, "master_category", "id='$id'");
        if ($result) {
            echo "1";
        }
    }
}