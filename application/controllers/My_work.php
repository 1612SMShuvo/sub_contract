<?php

class My_work extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('My_work_model');
        $this->load->model('Job_view_model');
        $this->load->model('View_profile_publisher_model');

        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }

    }

    public function all_my_work()
    {
        $user_id = $this->session->userdata("user_id");
        $data['my_bid'] = $this->My_work_model->select_all_my_bid($user_id);
        $this->load->view('web/job/my_work/my_work_tpl', $data);
    }

    public function my_work_details($id)
    {
        $user_id = $this->session->userdata("user_id");
        $data = array(
            'notification_status' => 0
        );
        $this->Main_model->updateData($data, "publisher_investor_agreement", "user_id='$user_id' and post_id='$id'");
        $data['payment_term'] = $this->My_work_model->select_all_payment_term($id, $user_id);
        $data['my_bid_details'] = $this->My_work_model->select_my_bid_details($id, $user_id);
        $data['requirement_details'] = $this->My_work_model->select_my_requirement_details($id);
        $this->load->view('web/job/my_work/my_work_details_tpl', $data);
    }

    public function payment_request($id)
    {
        $data['id'] = $id;
        $this->load->view('web/job/my_work/payment_request_form', $data);
    }

    public function create_payment_request()
    {
        $id = $this->input->post('id');
        $data = array(
            'payment_date' => date('Y-m-d'),
            'work_process' => $this->input->post('work_process'),
            'request_money' => $this->input->post('request_money'),
        );
        $data1 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('attachment')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data1 = array(
                    'attachment' => $file
                );
            }
        }

        $all_data = array_merge($data, $data1);
        $result_msg = $this->Main_model->updateData($all_data, "publisher_agreement_payment", "id='$id'");
        if ($result_msg) {
            echo "1";
        }
    }


    public function my_work_all()
    {
        $user_id = $this->session->userdata("user_id");
        $data['my_bid'] = $this->My_work_model->select_my_bid_all($user_id);
        $this->load->view('web/job/my_work/my_work_all_tpl', $data);
    }

    public function my_work_pending()
    {
        $user_id = $this->session->userdata("user_id");
        $data['my_bid'] = $this->My_work_model->select_my_bid_pending($user_id);
        $this->load->view('web/job/my_work/my_work_pending_tpl', $data);
    }

    public function my_work_pending_details($id)
    {
        $user_id = $this->session->userdata("user_id");
        $data = array(
            'notification_status' => 0
        );
        $this->Main_model->updateData($data, "publisher_agreement", "user_id='$user_id' and post_id='$id'");
        $data['post_id'] = $id;
        $data['bidder_pending_job'] = $this->My_work_model->pending_job_detail_view_bidder($id);
        $data['payment_term'] = $this->My_work_model->select_all_payment_term($id, $user_id);
        $data['proposal_details'] = $this->My_work_model->proposal_details($id,$user_id);
        $this->load->view('web/job/my_work/my_pending_details_tpl', $data);
    }

    public function bidder_active($id)
    {
        $user_id = $this->session->userdata("user_id");
        $data = array(
            'status' => 6
        );
        //$result1 = $this->Main_model->updateData($data, 'job_post', "id='$id' and user_id='$user_id'");
        $result =$this->Main_model->updateData($data, 'job_apply', "post_id='$id' and user_id='$user_id'");

        if ($result) {
            echo "1";
        }

    }


    public function bidder_inactive($id)
    {
        $user_id = $this->session->userdata("user_id");
        $data = array(
            'status' => 0
        );
        $result = $this->Main_model->updateData($data, 'job_apply', "post_id='$id' and user_id='$user_id'");
//        $result = $this->Main_model->updateData($data, 'job_post', "id='$id' and user_id='$user_id'");
        if ($result) {
            echo "1";
        }

    }

//=========================================Investor Information================================================================================
    public function all_invest_work()
    {
        $user_id = $this->session->userdata("user_id");
        $data['my_invest'] = $this->My_work_model->select_all_my_invest($user_id);
        $this->load->view('web/job/my_work/my_invest_work_tpl', $data);
    }

    public function my_invest_pending()
    {
        $user_id = $this->session->userdata("user_id");
        $data['my_invest'] = $this->My_work_model->select_my_invest_pending($user_id);
        $this->load->view('web/job/my_work/my_invest_pending_tpl', $data);

    }

    public function all_active_invest_work()
    {
        $user_id = $this->session->userdata("user_id");
        $data['my_invest'] = $this->My_work_model->select_my_invest_active($user_id);
        $this->load->view('web/job/my_work/my_invest_active_tpl', $data);
    }

    public function my_invest_details($id)
    {
        $user_id = $this->session->userdata("user_id");
        $data['post_id'] = $id;
        $data['payment_term1'] = $this->My_work_model->select_all_payment_term_investor($id, $user_id);
        $data['my_investor_details'] = $this->My_work_model->select_my_investor_details($id, $user_id);
        $data['requirement_details_investor'] = $this->My_work_model->select_my_requirement_details_investor($id);
        $this->load->view('web/job/my_work/my_invest_details_tpl', $data);
    }

    public function my_investor_approve($id){
        $user_id = $this->session->userdata("user_id");
        $data = array(
            'notification_status' => 0
        );
        $this->Main_model->updateData($data, "publisher_investor_agreement", "user_id='$user_id' and post_id='$id'");
        $data['post_id'] = $id;
        $data['investor_pending_job'] = $this->My_work_model->select_my_investor_details($id,$user_id);
        $data['payment_term_investor'] = $this->My_work_model->select_all_payment_term_investor($id, $user_id);
        $data['proposal_details_investor'] = $this->My_work_model->proposal_details_investor($id);
        $this->load->view('web/job/my_work/my_invest_approve_tpl', $data);
        
    }
    
    
    
    
    public function payment_approve_active($id){
        $data = array(
            'status' =>3
        );

        $result = $this->Main_model->updateData($data, "publisher_investor_agreement_payment", "id='$id'");
        if ($result) {
            echo "1";
        }
    }

    public function payment_processing_active($id){
        $data = array(
            'status' =>4
        );

        $result = $this->Main_model->updateData($data, "publisher_investor_agreement_payment", "id='$id'");
        if ($result) {
            echo "1";
        }
    }

    public function payment_paid_active($id){
        $data = array(
            'status' =>5
        );

        $result = $this->Main_model->updateData($data, "publisher_investor_agreement_payment", "id='$id'");
        if ($result) {
            echo "1";
        }
    }


    public function investor_active_job($id)
    {
        $user_id = $this->session->userdata("user_id");
        $data = array(
            'status' =>11
        );
        $result = $this->Main_model->updateData($data, 'job_apply', "post_id='$id' and user_id='$user_id'");
        if ($result) {
            echo "1";
        }

    }

    public function investor_inactive_job($id)
    {
        $user_id = $this->session->userdata("user_id");
        $data = array(
            'status' =>0
        );
        $result = $this->Main_model->updateData($data, 'job_apply', "post_id='$id' and user_id='$user_id'");
        if ($result) {
            echo "1";
        }

    }


}