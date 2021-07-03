<?php

class Publisher extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Publisher_model');

        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }

    }

    public function all_publisher()
    {
        $this->config->load('pagination');
        $this->load->library("pagination");
        $config = array();
        $config["base_url"] = base_url() . "publisher/all_publisher";
        $total = $this->Publisher_model->countAll();
        $config["total_rows"] = $total->total_rows;
        $config['per_page'] = 50;
        $config['uri_segment'] = 3;
        $config['num_links'] = 2;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["publisher"] = $this->Publisher_model->select_all_publisher($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        if ($this->input->is_ajax_request()) {
            $this->load->view('admin/publisher/per_page_publisher', $data);
        } else {
            $this->load->view('admin/publisher/publisher_tpl', $data);
        }
    }
    
    public function publisher_active($id)
    {
        $data = array(
            'status' => 1
        );
        $result = $this->Main_model->updateData($data, "master_user", "id='$id'");
        if ($result) {
            echo "1";
        }
    }

    public function publisher_inactive($id)
    {
        $data = array(
            'status' => 0
        );
        $result = $this->Main_model->updateData($data, "master_user", "id='$id'");
        if ($result) {
            echo "1";
        }
    }
}

?>