<?php

class Module extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Module_model');

    }

    public function index()
    {

    }

    public function all_module()
    {
        $this->config->load('pagination');
        $this->load->library("pagination");
        $config = array();
        $config["base_url"] = base_url() . "module/all_module";
        $config["total_rows"] = $this->Main_model->countAll('master_module');;
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['num_links'] = 9;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["module"] = $this->Module_model->select_all_module($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        if ($this->input->is_ajax_request()) {
            $this->load->view('admin/module/per_page_module', $data);
        } else {
            $data['module'] = $this->Main_model->getValue("", 'master_module', '*', "ID DESC");
            $this->load->view('admin/module/module_tpl', $data);
        }
    }

    public function load_add_module_from()
    {
        $this->load->view('admin/module/module_from');
    }

    public function load_update_module_from($id)
    {
        $data['module'] = $this->Main_model->getValue("id = '$id'", 'master_module', '*', "ID DESC");
        $this->load->view('admin/module/update_module_from', $data);
    }

    public function create_module()
    {
        $data = array(
            'module_name' => $this->input->post('module_name'),
            'module_url' => $this->input->post('module_url'),
            'module_icon' => $this->input->post('module_icon'),
            'menu_level' => $this->input->post('module_type'),
            'sort' => $this->input->post('sort'),
            'menu_check' => 1,
            'status' => 1
        );
        $result_msg = $this->Main_model->insertData($data, 'master_module');
        if ($result_msg) {
            echo "Module Add Successfully";
        }
    }

    public function delete_module($id)
    {
        $this->Main_model->deleteData("id = '$id'", "master_module");
    }

    public function module_active($id)
    {
        $data = array(
            'status' => 1
        );
        $result = $this->Main_model->updateData($data, "master_module", "id='$id'");
        if ($result) {
            echo "1";
        }
    }

    public function module_inactive($id)
    {
        $data = array(
            'status' => 0
        );
        $result = $this->Main_model->updateData($data, "master_module", "id='$id'");
        if ($result) {
            echo "1";
        }
    }


    public function update_module()
    {
        $id = $this->input->post('id');
        $data = array(
            'module_name' => $this->input->post('module_name'),
            'module_url' => $this->input->post('module_url'),
            'module_icon' => $this->input->post('module_icon'),
            'sort' => $this->input->post('sort'),
            'status' => $this->input->post('status'),
            'menu_check' => 1
        );
        $result_msg = $this->Main_model->updateData($data, "master_module", "id='$id'");
        if ($result_msg) {
            echo "Module Update Successfully";
        }
    }

    public function check_duplicate_data($module_name = null)
    {
        $result = $this->Module_model->check_duplicate_data($module_name);
        if ($result) {
            echo "<p style='color: red; font-size: 16px;'>This menu name already exit !!!</p>";
        } else {
            echo "";
        }
    }
}

?>