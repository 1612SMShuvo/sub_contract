<?php

class Agreements extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Agreement_list_model');

    }

    public function all_agreements_list()
    {
        $data['agreement'] = $this->Main_model->getValue("", 'company_agreements', '*', "ID DESC");
        $this->load->view('admin/agreements/agreement_list_tpl', $data);
    }

    public function add_agreements_form()
    {
        $this->load->view('admin/agreements/add_agreements_form');
    }

    public function create_agreements_pdf()
    {
        $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
        $title = $this->input->post('title');
        $short_description = $this->input->post('short_description');

        $data = array(
            'title' => $title,
            'short_description' => $short_description,
            'date' => $dt->format("d-m-Y, g:i a"),
            'status' => 1,
        );
        $data1 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/job_file';
            $config['allowed_types'] = 'doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('aggrement_file')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data1 = array(
                    'aggrement_file' => $file
                );
            }
        }

        $result = array_merge($data, $data1);
        $result_msg = $this->Main_model->insertData($result, 'company_agreements');
        if ($result_msg) {
            echo "1";
        }
    }
}

       
