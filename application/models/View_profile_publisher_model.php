<?php

class View_profile_publisher_model extends CI_Model
{
    function profile_details($user_id)
    {
        $this->db->select('basic.organization_name,basic.office_address,basic.company_logo,basic.nid_card,basic.tin,basic.bin,basic.years_of_experiences,job_apply.*,job_post.approximate_budget,job_apply_time.work_description,job_apply_time.time,');
        $this->db->where('basic.user_id', $user_id);
        $this->db->join('job_apply', 'job_apply.user_id = basic.user_id');
        $this->db->join('job_post', 'job_post.id = job_apply.post_id');
        $this->db->join('job_apply_time', 'job_apply_time.apply_id = job_apply.id');
        $query_result = $this->db->get('basic');
        $result = $query_result->result();
        return $result;
    }

    public function select_category_id($id)
    {
        $this->db->select('category_id');
        $this->db->where('id', $id);
        $query_result = $this->db->get('job_apply');
        $result = $query_result->row();
        return $result;
    }

    public function count_related_work($category_id)
    {
        $this->db->select('count(id) total');
        $this->db->where('category_id', $category_id);
        $this->db->where('status', 6);
        $query_result = $this->db->get('job_apply');
        $result = $query_result->row();
        return $result;
    }

    public function select_general_work($id)
    {
        $this->db->select('user_id');
        $this->db->where('id', $id);
        $query_result = $this->db->get('job_apply');
        $result = $query_result->row();
        return $result;

    }

    public function count_all_work($user_id)
    {
        $this->db->select('count(id) total');
        $this->db->where('user_id', $user_id);
        $this->db->where('status', 6);
        $query_result = $this->db->get('job_apply');
        $result = $query_result->row();
        return $result;
    }

    public function select_all_published_job($user_id)
    {
        $this->db->select('user_id');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('job_post');
        $result = $query_result->row();
        return $result;
    }

    public function count_all_publisher($user_id)
    {
        $this->db->select('count(user_id) total');
        $this->db->where('user_id', $user_id);
        $this->db->where('status', 2);
        $query_result = $this->db->get('job_post');
        $result = $query_result->row();
        return $result;
    }


    public function select_all_bid_job($user_id)
    {
        $this->db->select('user_id');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('job_apply');
        $result = $query_result->row();
        return $result;
    }

    public function count_all_bid($user_id)
    {
        $this->db->select('count(user_id) total');
        $this->db->where('user_id', $user_id);
        $this->db->where('status', 6);
        $this->db->where('job_type', 1);
        $query_result = $this->db->get('job_apply');
        $result = $query_result->row();
        return $result;
    }

    public function select_all_file($job_apply_id)
    {
        $this->db->select('catalog');
        $this->db->where('job_apply_id', $job_apply_id);
        $query_result = $this->db->get('job_apply_catalog');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_work_schedule($apply_id)
    {
        $this->db->select('job_apply_time.work_description,job_apply_time.time');
        $this->db->where('apply_id', $apply_id);
        $query_result = $this->db->get('job_apply_time');
        $result = $query_result->result();
        return $result;
    }
    public function select_all_invest_job($user_id)
    {
        $this->db->select('user_id');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('job_apply');
        $result = $query_result->row();
        return $result;
    }

    public function count_all_invest($user_id)
    {
        $this->db->select('count(user_id) total');
        $this->db->where('user_id', $user_id);
        $this->db->where('status',11);
        $this->db->where('job_type', 2);
        $query_result = $this->db->get('job_apply');
        $result = $query_result->row();
        return $result;
    }



}

