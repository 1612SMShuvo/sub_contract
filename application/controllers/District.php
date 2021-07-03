<?php

class District extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('district_model');
       
    }

    public function index()
    {

    }

    public function all_district()
    {
        $this->config->load('pagination');
        $this->load->library("pagination");
        $config = array();

        $district_name = $this->input->post('district_name');
        $division_id = $this->input->post('division_id');
 
        $config["base_url"] = base_url() . "district/all_district";

        if ($district_name) {
            $config["total_rows"] = $this->Main_model->countByLikeCondition("district_name", $district_name, "master_district");
        } else if ($division_id) {
            $config["total_rows"] = $this->Main_model->countByWhereCondition("division_id = '$division_id'", "master_district");;
        } else {
            $config["total_rows"] = $this->Main_model->countAll('master_district');
        }

        $config['per_page'] = 20;
        $config['uri_segment'] = 3;
        $config['num_links'] = 2;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        if ($district_name) {
            $data["district"] = $this->district_model->select_all_district_by_name($config["per_page"], $page, $district_name);
        } else if ($division_id) {
            $data["district"] = $this->district_model->select_all_district_by_division_id($config["per_page"], $page, $division_id);
        } else {
            $data["district"] = $this->district_model->select_all_district($config["per_page"], $page);
        }


        $data["links"] = $this->pagination->create_links();
        if ($this->input->is_ajax_request()) {
            $this->load->view('admin/district/per_page_district', $data);
        } else {
            $data['division'] = $this->Main_model->getValue("", 'master_division', '*', "ID DESC");
            $this->load->view('admin/district/district_tpl', $data);
        }
    }

    public function load_add_district_from()
    {
        $data['division'] = $this->Main_model->getValue("", 'master_division', '*', "ID DESC");
        $this->load->view('admin/district/district_from', $data);
    }

    public function create_district()
    {
        $data = array(
            'division_id' => $this->input->post('division_id'),
            'district_name' => $this->input->post('district_name')
        );
        $result_msg = $this->Main_model->insertData($data, 'master_district');
        if ($result_msg) {
            echo "District Added Successfully";
        }
    }

    public function delete_district($id)
    {
        $this->Main_model->deleteData("id = '$id'", "master_district");
    }
    

    public function load_update_district_from($id)
    {
        $data['division'] = $this->Main_model->getValue("", 'master_division', '*', "ID DESC");
        $data['district'] = $this->Main_model->getValue("id = '$id'", 'master_district', '*', "ID DESC");
        $this->load->view('admin/district/update_district_from', $data);
    }

    public function update_district()
    {
        $id = $this->input->post('id');
        $data = array(
            'division_id' => $this->input->post('division_id'),
            'district_name' => $this->input->post('district_name')
        );
        $result_msg = $this->Main_model->updateData($data, "master_district", "id='$id'");
        if ($result_msg) {
            echo "District Updated Successfully";
        }
    }

    public function check_duplicate_data($district_name = null)
    {
        $set_data = urldecode($district_name);
        $result = $this->district_model->check_duplicate_data($set_data);
        if ($result) {
            echo "<p style='color: red; font-size: 16px;'>This district name already exit !!!</p>";
        } else {
            echo "";
        }
    }

}

?>