<?php

class Investor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Investor_model');
        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }

    }

    public function all_investor()
    {
        $this->config->load('pagination');
        $this->load->library("pagination");
        $config = array();
        $config["base_url"] = base_url() . "investor/all_investor";
        $total = $this->Investor_model->countAll();
        $config["total_rows"] = $total->total_rows;
        $config['per_page'] = 50;
        $config['uri_segment'] = 3;
        $config['num_links'] = 2;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["investor"] = $this->Investor_model->select_all_bidder($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        if ($this->input->is_ajax_request()) {
            $this->load->view('admin/investor/per_page_investor', $data);
        } else {
            $this->load->view('admin/investor/investor_tpl', $data);
        }
    }


    public function investor_active($id)
    {
        $data = array(
            'status' => 1
        );
        $result = $this->Main_model->updateData($data, "master_user", "id='$id'");
        if ($result) {
            echo "1";
        }
    }

    public function investor_inactive($id)
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