<?php

class Work_authority extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Work_authority_model');

    }

    public function all_work_authority()
    {
        $result['work_authority'] = $this->Main_model->getValue("", 'master_work_authority', '*', "id desc");
        $this->load->view('admin/work_authority/work_authority_tpl',$result);

    }

    public function load_add_work_authority_from(){
        $this->load->view('admin/work_authority/work_authority_form');
    }

    public function create_work_authority(){
        $data = array(
            'work_authority_name' => $this->input->post('work_authority_name'),
            'status' => 1
        );
        $result_msg = $this->Main_model->insertData($data, 'master_work_authority');
        if ($result_msg) {
            echo "Work Authority Added Successfully";
        }
    }

    public function delete_work_authority($id)
    {
        $this->Main_model->deleteData("id = '$id'", "master_work_authority");
    }

    public function work_authority_active($id)
    {
        $data = array(
            'status' => 1
        );
        $result = $this->Main_model->updateData($data, "master_work_authority", "id='$id'");
        if ($result) {
            echo "1";
        }
    }

    public function work_authority_inactive($id)
    {
        $data = array(
            'status' => 0
        );
        $result = $this->Main_model->updateData($data, "master_work_authority", "id='$id'");
        if ($result) {
            echo "1";
        }
    }
}