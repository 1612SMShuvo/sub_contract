<?php

class Bidder extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bidder_model');

        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }

    }

    public function all_user()
    {
        $this->config->load('pagination');
        $this->load->library("pagination");
        $config = array();
        $config["base_url"] = base_url() . "bidder/all_bidder";
        $total = $this->Bidder_model->countAll();
        $config["total_rows"] = $total->total_rows;
        $config['per_page'] = 50;
        $config['uri_segment'] = 3;
        $config['num_links'] = 2;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["bidder"] = $this->Bidder_model->select_all_user($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        if ($this->input->is_ajax_request()) {
            $this->load->view('admin/bidder/per_page_register_user', $data);
        } else {
            $this->load->view('admin/bidder/register_user_tpl', $data);
        }
    }

    public function bidder_active($id)
    {
        $data = array(
            'status' => 1
        );
        $result = $this->Main_model->updateData($data, "master_user", "id='$id'");
        if ($result) {
            echo "1";
        }
    }

    public function bidder_inactive($id)
    {
        $data = array(
            'status' => 0
        );
        $result = $this->Main_model->updateData($data, "master_user", "id='$id'");
        if ($result) {
            echo "1";
        }
    }
    
    
    public function load_view_bidder_from($id){
        $data['user_profile'] = $this->Bidder_model->user_profile_details($id);
        $data['management_team'] = $this->Bidder_model->select_management_team($id);
        $data['nominee'] = $this->Bidder_model->select_nominee($id);
        $data['official_contract_person'] = $this->Bidder_model->select_official_contract_person($id);
        $data['experience'] = $this->Bidder_model->select_experience($id);
        $data['area_of_work'] = $this->Bidder_model->select_area_of_work($id);
        $data['legal'] = $this->Bidder_model->select_legal_papers($id);
        $data['financial'] = $this->Bidder_model->select_financial($id);
        $data['award_certification'] = $this->Bidder_model->select_award_certification($id);
        $data['portfolio_link'] = $this->Bidder_model->select_portfolio_link($id);
        $this->load->view('admin/bidder/bidder_details_tpl',$data);
    }
        


}

?>