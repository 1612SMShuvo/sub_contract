<?php

class Job_view extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Job_view_model');
        $this->load->model('Frontend_model');

        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }

    }

    public function all_job()
    {
        $this->config->load('pagination');
        $this->load->library("pagination");
        $config = array();
        $config["base_url"] = base_url() . "job_view/all_job";
        $sub_category_id = $this->input->post('sub_category_id');
        $search_data = $this->input->post('search_data');
        $user_id = $this->session->userdata('user_id');
        $data['user_id'] = $user_id;
        $data['all_category'] = $this->Job_view_model->get_all_area_of_work($user_id);
        if ($sub_category_id) {
            $result = $this->Job_view_model->countAllByCategory($sub_category_id);
            $config["total_rows"] = $result->total_rows;
        } else if ($search_data) {
            $tenderid = $this->Job_view_model->countAllByTenderId($search_data, $user_id);
            if ($tenderid) {
                $config["total_rows"] = $tenderid->total_rows;
            } else {
                $jobtitle = $this->Job_view_model->countAllByJobTitle($search_data, $user_id);
                if ($jobtitle) {
                    $config["total_rows"] = $jobtitle->total_rows;
                } else {
                    $category = $this->Job_view_model->countAllByCategoryName($search_data, $user_id);
                    if ($category) {
                        $config["total_rows"] = $category->total_rows;
                    } else {
                        $subcategory = $this->Job_view_model->countAllBySubCategory($search_data, $user_id);
                        if ($subcategory) {
                            $config["total_rows"] = $subcategory->total_rows;
                        } else {
                            $config["total_rows"] = '';
                        }
                    }
                }
            }
        } else {
            $result = $this->Job_view_model->countAll();
            $config["total_rows"] = $result->total_rows;
        }
        $config['per_page'] = 5;
        $config['uri_segment'] = 3;
        $config['num_links'] = 2;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        if ($sub_category_id) {
            $data['all_jobs'] = $this->Job_view_model->select_all_active_category_wise_job($config["per_page"], $page, $sub_category_id);
        } else if ($search_data) {
            $tender_id = $this->Job_view_model->select_all_job_by_tender_id($config["per_page"], $page, $search_data, $user_id);
            if ($tender_id) {
                $data['all_jobs'] = $tender_id;
            } else {
                $title = $this->Job_view_model->select_all_job_by_job_title($config["per_page"], $page, $search_data, $user_id);
                if ($title) {
                    $data['all_jobs'] = $title;
                } else {
                    $category_name = $this->Job_view_model->select_all_job_by_category_name($config["per_page"], $page, $search_data, $user_id);
                    if ($category_name) {
                        $data['all_jobs'] = $category_name;
                    } else {
                        $sub_category_name = $this->Job_view_model->select_all_job_by_sub_category_name($config["per_page"], $page, $search_data, $user_id);
                        if ($sub_category_name) {
                            $data['all_jobs'] = $sub_category_name;
                        } else {
                            $data['all_jobs'] = "";
                        }
                    }
                }
            }
        } else {
            $data["all_jobs"] = $this->Job_view_model->select_all_active_job($config["per_page"], $page, $user_id);
        }
        $data["links"] = $this->pagination->create_links();
        if ($this->input->is_ajax_request()) {
            $this->load->view('web/job/view_job/per_page_job_view', $data);
        } else {
            $this->load->view('web/job/view_job/view_job_tpl', $data);
        }
    }
}