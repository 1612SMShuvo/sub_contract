<?php

class Apply_for_bidder extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Apply_for_bidder_model');
        $this->load->model('Frontend_model');
        $this->load->model('Job_details_model');
        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }
    }

    public function apply_bidder($post_id = null)
    {
        $user_id = $this->session->userdata('user_id');
        $data['post_id'] = $post_id;
        $check = $this->Apply_for_bidder_model->check_job_apply($post_id, $user_id);
        if ($check) {
            $data['check'] = $check->user_id;
        } else {
            $data['check'] = "";
        }
        $data['job_applys'] = $this->Apply_for_bidder_model->job_apply_view($post_id);
        $this->load->view('web/job/apply_for_bidder/apply_for_bidder_tpl', $data);
    }

    public function create_bidder()
    {
        $user_id = $this->session->userdata('user_id');
        $user_name = $this->session->userdata('user_name');
        $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
        $data = array(
            'user_id' => $user_id,
            'post_id' => $this->input->post('post_id'),
            'category_id' => $this->input->post('category_id'),
            'cover_letter' => $this->input->post('cover_letter'),
            'specification' => $this->input->post('specification'),
            'work_process' => $this->input->post('work_process'),
            'budget' => $this->input->post('budget'),
            'manpower' => $this->input->post('manpower'),
            'quotation_price_for_bidder' => $this->input->post('quotation_price_for_bidder'),
            'job_type' => 1,
            'remarks' => 'Add',
            'created_by' => $user_name,
            'date_and_time' => $dt->format("d-m-Y, g:i a")
        );
        $data1 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('cover_letter_file')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data1 = array(
                    'cover_letter_file' => $file
                );
            }
        }

        $data2 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('specification_file')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data2 = array(
                    'specification_file' => $file
                );
            }
        }

        $data3 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('work_process_file')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data3 = array(
                    'work_process_file' => $file
                );
            }
        }
        $data4 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('budget_file')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data4 = array(
                    'budget_file' => $file
                );
            }
        }

        $data5 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('manpower_file')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data5 = array(
                    'manpower_file' => $file
                );
            }
        }

        $data6 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('similar_work_experience')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data6 = array(
                    'similar_work_experience' => $file
                );
            }
        }
        $all_data = array_merge($data, $data1, $data2, $data3, $data4, $data5, $data6);
        $last_id = $this->Apply_for_bidder_model->insertData($all_data);
        $total_fields = $this->input->post('total_num_of_fields');
        $work_description = $this->input->post('work_description');
        $time = $this->input->post('time');
        for ($i = 0; $i < $total_fields; $i++) {
            $data7 = array(
                'work_description' => $work_description[$i],
                'time' => $time[$i],
                'apply_id ' => $last_id
            );
            $this->Main_model->insertData($data7, 'job_apply_time');
        }

        $total_fields1 = $this->input->post('total_num_of_fields1');
        $j = 0;
        for ($i = 0; $i < $total_fields1; $i++) {
            $j++;
            $catalog = 'catalog_file' . $j;
            $data8 = array();
            if (!empty($_FILES)) {
                $config['upload_path'] = 'public/user_profile';
                $config['allowed_types'] = 'docx|doc|pdf';
                $config['max_size'] = 1000000000;
                $config['max_width'] = 100000024;
                $config['max_height'] = 100000000;
                $config['file_name'] = date('d-m-Y') . '_' . time();
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload($catalog)) {
                    echo $this->upload->display_errors();
                } else {
                    $recipe_file = $this->upload->data();
                    $file = $recipe_file['file_name'];
                    $data8 = array(
                        'catalog' => $file
                    );
                }
            }
            $data9 = array(
                'job_apply_id' => $last_id,
            );
            $catalog_data = array_merge($data8, $data9);
            $this->Main_model->insertData($catalog_data, 'job_apply_catalog');
        }
        redirect('apply_for_bidder/bid_success');
    }

    public function check_tin()
    {
        $user_id = $this->session->userdata('user_id');
        $result = $this->Apply_for_bidder_model->check_tin($user_id);
        if ($result->tin) {
            echo "1";
        } else {
            echo "";
        }
    }

    public function check_bin()
    {
        $user_id = $this->session->userdata('user_id');
        $result = $this->Apply_for_bidder_model->check_bin($user_id);
        if ($result->bin) {
            echo "1";
        } else {
            echo "";
        }
    }

    public function check_nid()
    {
        $user_id = $this->session->userdata('user_id');
        $result = $this->Apply_for_bidder_model->check_nid($user_id);
        if ($result->nid) {
            echo "1";
        } else {
            echo "";
        }
    }

    public function check_tax_return()
    {
        $user_id = $this->session->userdata('user_id');
        $result = $this->Apply_for_bidder_model->check_tax_return($user_id);
        if ($result->income_tax) {
            echo "1";
        } else {
            echo "";
        }
    }

    public function check_audit_report()
    {
        $user_id = $this->session->userdata('user_id');
        $result = $this->Apply_for_bidder_model->check_audit_report($user_id);
        if ($result->audit_report) {
            echo "1";
        } else {
            echo "";
        }
    }

    public function bid_success()
    {
        $this->load->view('web/job/apply_for_bidder/successful_message_tpl');
    }


    public function check_user($post_id)
    {
        $data['post_id'] = $post_id;
        $user_id = $this->session->userdata('user_id');
        $result = $this->Apply_for_bidder_model->check_user($user_id, $post_id);
        if ($result->user_id) {
            echo "1";
        } else {
            echo "";
        }
    }
}