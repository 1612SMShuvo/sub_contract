<?php

class Job_post extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Job_post_model');
        $this->load->model('Frontend_model');
        $this->load->model('Job_view_model');
        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }


    }

    public function create_job_post()
    {
        $user_id = $this->session->userdata('user_id');
        $data['work_authority'] = $this->Main_model->getValue("status = '1'", 'master_work_authority', '*', "id desc");
        $data['all_category'] = $this->Job_post_model->get_all_area_of_work($user_id);
//        $data['category'] = $this->Main_model->getValue("status = '1'", 'master_category', '*', "id desc");
        $this->load->view('web/job/job_post/job_post_tpl', $data);
    }

    public function add_job()
    {
        $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
        $user_id = $this->session->userdata("user_id");
//        bidder part
        $need_bidder = $this->input->post('need_bidder');
        $work_type_bidder = $this->input->post('work_type_bidder');
        $spec = $this->input->post('spec');
        $catalog = $this->input->post('catalog');
        $time = $this->input->post('time');
        $workprocess = $this->input->post('workprocess');
        $manpower = $this->input->post('manpower');
        $quotation = $this->input->post('quotation');
        $tin_bidder = $this->input->post('tin_bidder');
        $bin_bidder = $this->input->post('bin_bidder');
        $nid_bidder = $this->input->post('nid_bidder');
        $taxreturn_bidder = $this->input->post('taxreturn_bidder');
        $trade_licence_bidder = $this->input->post('trade_licence_bidder');

        $similar_work_years_bidder = $this->input->post('similar_work_years_bidder');
        $similar_work_amount_bidder = $this->input->post('similar_work_amount_bidder');
        $similar_work_exp_type_bidder = $this->input->post('similar_work_exp_type_bidder');
        $work_order = $this->input->post('work_order');

        $taxreturn_bidder = $this->input->post('taxreturn_bidder');
        $trade_licence_bidder = $this->input->post('trade_licence_bidder');
        $audit_report_bidder = $this->input->post('audit_report_bidder');
        $audit_year_bidder = $this->input->post('audit_year_bidder');
        $similar_work_bidder = $this->input->post('similar_work_bidder');
        $general_work_bidder = $this->input->post('general_work_bidder');
        $security_bidder = $this->input->post('security_bidder');
        $payment_term_bidder = $this->input->post('payment_term_bidder');
        $bidder_installment_type = $this->input->post('bidder_installment_type');

        //        Investor part
        $need_investor = $this->input->post('need_investor');
        $work_type_investor = $this->input->post('work_type_investor');
        $tin_investor = $this->input->post('tin_investor');
        $bin_investor = $this->input->post('bin_investor');
        $nid_investor = $this->input->post('nid_investor');
        $taxreturn_investor = $this->input->post('taxreturn_investor');
        $trade_licence_investor = $this->input->post('trade_licence_investor');
        $audit_report_investor = $this->input->post('audit_report_investor');
        $audit_year_investor = $this->input->post('audit_year_investor');
        $similar_work_investor = $this->input->post('similar_work_investor');

        $similar_work_years_investor = $this->input->post('similar_work_years_investor');
        $similar_work_amount_investor = $this->input->post('similar_work_amount_investor');
        $similar_work_exp_type_investor = $this->input->post('similar_work_exp_type_investor');

        $general_work_investor = $this->input->post('general_work_investor');
        $investor_required = $this->input->post('investor_required');
        $investment_amount = $this->input->post('investment_amount');
        $profit_share = $this->input->post('profit_share');
        $security_investor = $this->input->post('security_investor');
        $invest_process_type = $this->input->post('invest_process_type');
        $invest_process = $this->input->post('invest_process');

//        common part
        $job_title = $this->input->post('job_title');
        $work_authority = $this->input->post('work_authority');
        $work_category_id = $this->input->post('work_category_id');
        $sub_category_id = $this->input->post('sub_category_id');
        $approximate_budget = $this->input->post('approximate_budget');
        $signup_date = $this->input->post('signup_date');
        $work_completion_date = $this->input->post('work_completion_date');
        $work_description = $this->input->post('work_description');
        $qualifications = $this->input->post('qualifications');
        $terms_condition = $this->input->post('terms_conditions');
        $publish_date = $this->input->post('publish_date');
        $submit_date = $this->input->post('submit_date');
        $priority_of_works = $this->input->post('priority_of_works');

        $data = array(
            'user_id' => $user_id,
            'job_title' => $job_title,
            'work_authority' => $work_authority,
            'work_category_id' => $work_category_id,
            'sub_category_id' => $sub_category_id,
            'approximate_budget' => $approximate_budget,
            'signup_date' => $signup_date,
            'work_completion_date' => $work_completion_date,
            'work_description' => $work_description,
            'qualifications' => $qualifications,
            'terms_condition' => $terms_condition,
            'publish_date' => $publish_date,
            'submit_date' => $submit_date,
            'priority_of_works' => $priority_of_works,
            'need_bidder' => $need_bidder,
            'work_type_bidder' => $work_type_bidder,
            'spec' => $spec,
            'catalog' => $catalog,
            'time' => $time,
            'workprocess' => $workprocess,
            'manpower' => $manpower,
            'quotation' => $quotation,
            'tin_bidder' => $tin_bidder,
            'bin_bidder' => $bin_bidder,
            'nid_bidder' => $nid_bidder,
            'taxreturn_bidder' => $taxreturn_bidder,
            'trade_licence_bidder' => $trade_licence_bidder,
            'audit_report_bidder' => $audit_report_bidder,
            'audit_year_bidder' => $audit_year_bidder,
            'similar_work_bidder' => $similar_work_bidder,
            'similar_work_years_bidder' => $similar_work_years_bidder,
            'similar_work_amount_bidder' => $similar_work_amount_bidder,
            'similar_work_exp_type_bidder'=> $similar_work_exp_type_bidder,
            'work_order' => $work_order,
            'general_work_bidder' => $general_work_bidder,
            'security_bidder' => $security_bidder,
            'need_investor' => $need_investor,
            'work_type_investor' => $work_type_investor,
            'tin_investor' => $tin_investor,
            'bin_investor' => $bin_investor,
            'nid_investor' => $nid_investor,
            'taxreturn_investor' => $taxreturn_investor,
            'trade_licence_investor' => $trade_licence_investor,
            'audit_report_investor' => $audit_report_investor,
            'audit_year_investor' => $audit_year_investor,
            'similar_work_investor' => $similar_work_investor,
            'similar_work_years_investor' => $similar_work_years_investor,
            'similar_work_amount_investor' => $similar_work_amount_investor,
            'similar_work_exp_type_investor'=> $similar_work_exp_type_investor,
            'general_work_investor' => $general_work_investor,
            'investor_required' => $investor_required,
            'investment_amount' => $investment_amount,
            'profit_share' => $profit_share,
            'security_investor' => $security_investor,
            'date_and_time' => $dt->format("d-m-Y, g:i a"),
            'remarks' => 'Add'
        );

        $data1 = array();
        $data2 = array();
        $data3 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/job_file';
            $config['allowed_types'] = 'docx|doc|pdf';
            $config['max_size'] = 10000000;
            $config['max_width'] = 10000024;
            $config['max_height'] = 10000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('work_description_file')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data1 = array(
                    'work_description_file' => $file
                );
            }

            $config['upload_path'] = 'public/job_file';
            $config['allowed_types'] = 'docx|doc|pdf';
            $config['max_size'] = 10000000;
            $config['max_width'] = 10000024;
            $config['max_height'] = 10000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('qualifications_file')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data2 = array(
                    'qualifications_file' => $file
                );
            }

            $config['upload_path'] = 'public/job_file';
            $config['allowed_types'] = 'docx|doc|pdf';
            $config['max_size'] = 10000000;
            $config['max_width'] = 10000024;
            $config['max_height'] = 10000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('terms_and_conditions_file')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data3 = array(
                    'terms_and_conditions_file' => $file
                );
            }
        }
        $result = array_merge($data, $data1, $data2, $data3);
        $last_id = $this->Job_post_model->insertData($result);

        for ($i = 0; $i < $payment_term_bidder; $i++) {
            $bidder_installment = array(
                'bidder_installment_type' => $bidder_installment_type[$i],
                'payment_term' => $payment_term_bidder,
                'user_id' => $user_id,
                'payment_sl' => $i,
                'type' => 1,
                'job_id' => $last_id
            );
            $this->Main_model->insertData($bidder_installment, 'post_installment_type');
        }

        for ($i = 0; $i < $invest_process_type; $i++) {
            $bidder_installment = array(
                'bidder_installment_type' => $invest_process[$i],
                'payment_term' => $invest_process_type,
                'user_id' => $user_id,
                'payment_sl' => $i,
                'type' => 2,
                'job_id' => $last_id
            );
            $this->Main_model->insertData($bidder_installment, 'post_installment_type');
        }

        if ($last_id) {
            redirect('my_job/all_my_job');
        }
    }

    public function check_bidder_installment_type()
    {
        $payment_term = $this->input->post('payment_term');
        for ($i = 1; $i <= $payment_term; $i++) {
            echo "<div class='bidder-single bidder-amount'>";
            echo "<label>" . $i . " Installment Percent(Only Number)</label>";
            echo "<input type='number' onblur='check_percent_bidder($i)' id='percent_partial1$i' placeholder='Only Enter Number' name='bidder_installment_type[]'";
            echo "</div>";
        }
    }

    public function check_investor_installment_type()
    {
        $invest_process = $this->input->post('invest_process');
        for ($i = 1; $i <= $invest_process; $i++) {
            echo "<div class='bidder-single bidder-amount'>";
            echo "<label>" . $i . " Installment Percent(Only Number)</label>";
            echo "<input onblur='check_percent_investor($i)' type='number' id='percent_partial$i'  placeholder='Only Enter Number' name='invest_process[]'";
            echo "</div>";
        }
    }

    public function select_sub_category()
    {
        $category_id = $this->input->post('category_id');
        $user_id = $this->session->userdata("user_id");
        $array = $this->Main_model->getValue("category_id = '$category_id'", 'master_sub_category', '*', "ID DESC");
        //$array2 = $this->Job_post_model->get_all_area_of_work($user_id);
        $str = "";
        $str .= '<select class="search-select" name="sub_category_id" id="sub_category_id">
				<option value="">Select One</option>';
        if (!empty($array)):
            foreach ($array as $row):
                $str .= '<option value="' . $row->id . '">' . $row->sub_category_name . '</option>';
            endforeach;
        endif;
        $str .= '</select>';
        echo $str;
    }

    public function dashboard()
    {

    }


}