<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profile_model');
        $user_name = $this->session->userdata('user_name');
        if ($user_name) {
            redirect('Main');
        }
    }

    public function index()
    {

    }

    public function create_basic_profile()
    {
        echo "aklsdfl;sda";
        exit();
        
        $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
        $user_name = $this->session->userdata("user_name");
        $you_are_a = $this->input->post('you_are_a');
        $business_type = $this->input->post('business_type');
        $organization_name = $this->input->post('organization_name');
        $office_address = $this->input->post('office_address');
        $web_address = $this->input->post('web_address');
        $official_contact = $this->input->post('official_contact');
        $established = $this->input->post('established');
        $number_of_employees = $this->input->post('number_of_employees');
        $years_of_experiences = $this->input->post('years_of_experiences');
        $data = array(
            'you_are_a' => $you_are_a,
            'user_id' => $user_name,
            'business_type' => $business_type,
            'organization_name' => $organization_name,
            'office_address' => $office_address,
            'web_address' => $web_address,
            'official_contact' => $official_contact,
            'established' => $established,
            'number_of_employees' => $number_of_employees,
            'years_of_experiences' => $years_of_experiences,
            'created_by' => $user_name,
            'date_and_time' => $dt->format("d-m-Y, g:i a"),
            'remarks' => 'Add'
        );
        $result = $this->Main_model->insertData($data, 'basic');
        echo $this->db->last_query();
        exit();
        if ($result) {
            $msg['load_success_message'] = "Basic information successfully added.";
            $this->load->view('messages/success_message', $msg);
        }
    }
}
