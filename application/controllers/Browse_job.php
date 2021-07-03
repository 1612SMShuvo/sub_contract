<?php

class Browse_job extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Browse_job_model');
        $this->load->model('Job_view_model');

    }

    public function browse_job_all()
    {
        $this->config->load('pagination');
        $this->load->library("pagination");
        $config = array();
        $config["base_url"] = base_url() . "browse_job/browse_job_all";
        $sub_category_id = $this->input->post('sub_category_id');
        $search_data = $this->input->post('search_data');
        $data['all_category'] = $this->Main_model->getValue("", 'master_category', '*', "id desc");
        if ($sub_category_id) {
            $result = $this->Browse_job_model->countAllByCategory($sub_category_id);
            $config["total_rows"] = $result->total_rows;
        } else if ($search_data) {
            $tenderid = $this->Browse_job_model->countAllByTenderId($search_data);
            if ($tenderid) {
                $config["total_rows"] = $tenderid->total_rows;
            } else {
                $jobtitle = $this->Browse_job_model->countAllByJobTitle($search_data);
                if ($jobtitle) {
                    $config["total_rows"] = $jobtitle->total_rows;
                } else {
                    $category = $this->Browse_job_model->countAllByCategoryName($search_data);
                    if ($category) {
                        $config["total_rows"] = $category->total_rows;
                    } else {
                        $subcategory = $this->Browse_job_model->countAllBySubCategory($search_data);
                        if ($subcategory) {
                            $config["total_rows"] = $subcategory->total_rows;
                        } else {
                            $config["total_rows"] = '';
                        }
                    }
                }
            }
        } else {
            $result = $this->Browse_job_model->countAll();
            $config["total_rows"] = $result->total_rows;
        }
        $config['per_page'] = 5;
        $config['uri_segment'] = 3;
        $config['num_links'] = 2;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        if ($sub_category_id) {
            $data['all_jobs'] = $this->Browse_job_model->select_all_active_category_wise_job($config["per_page"], $page, $sub_category_id);
        } else if ($search_data) {
            $tender_id = $this->Browse_job_model->select_all_job_by_tender_id($config["per_page"], $page, $search_data);
            if ($tender_id) {
                $data['all_jobs'] = $tender_id;
            } else {
                $title = $this->Browse_job_model->select_all_job_by_job_title($config["per_page"], $page, $search_data);
                if ($title) {
                    $data['all_jobs'] = $title;
                } else {
                    $category_name = $this->Browse_job_model->select_all_job_by_category_name($config["per_page"], $page, $search_data);
                    if ($category_name) {
                        $data['all_jobs'] = $category_name;
                    } else {
                        $sub_category_name = $this->Browse_job_model->select_all_job_by_sub_category_name($config["per_page"], $page, $search_data);
                        if ($sub_category_name) {
                            $data['all_jobs'] = $sub_category_name;
                        } else {
                            $data['all_jobs'] = "";
                        }
                    }
                }
            }
        } else {
            $data["all_jobs"] = $this->Browse_job_model->browse_active_job($config["per_page"], $page);
        }
        $data["links"] = $this->pagination->create_links();
        if ($this->input->is_ajax_request()) {
            $this->load->view('web/browse-job/per_page_browse_job', $data);
        } else {
            $this->load->view('web/browse-job/browse_job_tpl', $data);
        }
    }



    public function browse_all_boost_jobs()
    {
        $data['all_jobs'] = $this->Browse_job_model->browse_all_boost_job();
        $data['links'] = "";
        $this->load->view('web/job/hot_jobs/hot_jobs_tpl',$data);
    }

}