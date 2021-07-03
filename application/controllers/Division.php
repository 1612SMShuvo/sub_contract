<?php

class Division extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Division_model');

    }

    public function index()
    {

    }

    public function all_division()
    {
        $this->config->load('pagination');
        $this->load->library("pagination");
        $config = array();
        $config["base_url"] = base_url() . "master/division/all_division";
        $config["total_rows"] = $this->Main_model->countAll('master_division');;
        $config['per_page'] = 10;
        $config['uri_segment'] = 4;
        $config['num_links'] = 2;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["division"] = $this->Division_model->select_all_division($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        if ($this->input->is_ajax_request()) {
            $this->load->view('admin/division/per_page_division', $data);
        } else {
            $this->load->view('admin/division/division_tpl', $data);
        }
    }

    public function load_add_division_from()
    {
        $this->load->view('admin/division/division_from');
    }

    public function create_division()
    {
        $data = array(
            'division_name' => $this->input->post('division_name')
        );
        $result_msg = $this->Main_model->insertData($data, 'master_division');
        if ($result_msg) {
            echo "Division Added Successfully";
        }
    }

    public function load_update_division_from($id)
    {
        $data['division'] = $this->Main_model->getValue("id = '$id'", 'master_division', '*', "ID DESC");
        $this->load->view('admin/division/update_division_from', $data);
    }

    public function update_division()
    {
        $id = $this->input->post('id');
        $data = array(
            'division_name' => $this->input->post('division_name')
        );
        $result_msg = $this->Main_model->updateData($data, "master_division", "id='$id'");
        if ($result_msg) {
            echo "Division Updated Successfully";
        }
    }

    public function delete_division($id)
    {
        $this->Main_model->deleteData("id = '$id'", "master_division");
    }


}

?>