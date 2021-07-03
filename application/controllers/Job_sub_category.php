<?php

class Job_sub_category extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Job_sub_category_model');

    }

    public function all_sub_category()
    {
        $config = array();
        $config["base_url"] = base_url() . "Job_sub_category/all_sub_category";
        $config["total_rows"] = $this->Job_sub_category_model->countAll();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['num_links'] = 2;
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["sub_categorys"] = $this->Job_sub_category_model->select_all_sub_category($config["per_page"], $page);
        if ($this->input->is_ajax_request()) {
            $this->load->view('admin/sub_category/per_page_sub_category', $data);
        } else {
            $this->load->view('admin/sub_category/sub_category_tpl', $data);
        }
    
       

    }

    public function load_add_sub_category_from(){
        $result['sub_category'] = $this->Main_model->getValue("status ='1'", 'master_category', '*', "ID DESC");
        $this->load->view('admin/sub_category/sub_category_form',$result);
    }

    public function create_sub_category(){
        $data = array(
            'sub_category_name' => $this->input->post('sub_category_name'),
            'category_id' => $this->input->post('category_id'),
            'status' => 1
        );
        $result_msg = $this->Main_model->insertData($data, 'master_sub_category');
        if ($result_msg) {
            echo "Sub Category Added Successfully";
        }
    }

    public function delete_sub_category($id)
    {
        $this->Main_model->deleteData("id = '$id'", "master_sub_category");
    }

    public function sub_category_active($id)
    {
        $data = array(
            'status' => 1
        );
        $result = $this->Main_model->updateData($data, "master_sub_category", "id='$id'");
        if ($result) {
            echo "1";
        }
    }

    public function sub_category_inactive($id)
    {
        $data = array(
            'status' => 0
        );
        $result = $this->Main_model->updateData($data, "master_sub_category", "id='$id'");
        if ($result) {
            echo "1";
        }
    }
}