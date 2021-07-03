<?php

class Bank extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bank_model');

    }

    public function index()
    {

    }

    public function all_bank()
    {
        $this->config->load('pagination');
        $this->load->library("pagination");
        $config = array();
        $config["base_url"] = base_url() . "bank/all_bank";
        $config["total_rows"] = $this->Main_model->countAll('master_bank');;
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['num_links'] = 2;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["bank"] = $this->Bank_model->select_all_bank($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        if ($this->input->is_ajax_request()) {
            $this->load->view('admin/bank/per_page_bank', $data);
        } else {
            $this->load->view('admin/bank/bank_tpl', $data);
        }
    }

    public function load_add_bank_from()
    {
        $this->load->view('admin/bank/bank_from');
    }

    public function create_bank()
    {
        $data = array(
            'bank_name' => $this->input->post('bank_name')
        );
        $result_msg = $this->Main_model->insertData($data, 'master_bank');
        if ($result_msg) {
            echo "Bank Added Successfully";
        }
    }

    public function load_update_bank_from($id)
    {
        $data['bank'] = $this->Main_model->getValue("id = '$id'", 'master_bank', '*', "ID DESC");
        $this->load->view('admin/bank/update_bank_from', $data);
    }

    public function update_bank()
    {
        $id = $this->input->post('id');
        $data = array(
            'bank_name' => $this->input->post('bank_name')
        );
        $result_msg = $this->Main_model->updateData($data, "master_bank", "id='$id'");
        if ($result_msg) {
            echo "Bank Updated Successfully";
        }
    }

    public function delete_bank($id)
    {
        $this->Main_model->deleteData("id = '$id'", "master_bank");
    }


}

?>