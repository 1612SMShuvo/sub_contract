<?php

class Job_details_model extends CI_Model
{
    public function check_bidder_info($user_id)
    {
        $this->db->select('id');
        $this->db->where('user_id', $user_id);
        $this->db->where('bidder', 3);
        $query_result = $this->db->get('basic');
        $result = $query_result->row();
        return $result;
    }

    public function select_job_by_post_id($job_id)
    {
        $this->db->select('*');
        $this->db->where('id', $job_id);
        $get_result = $this->db->get('job_post');
        $result = $get_result->result();
        return $result;
    }

    function insertData($data)
    {
        $this->db->insert('job_post', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    
    public function job_details_view($job_id){
        $this->db->select('job_post.*,basic.organization_name,master_category.category_name,basic.company_logo, master_sub_category.sub_category_name,master_work_authority.work_authority_name');
        $this->db->join('basic', 'basic.user_id = job_post.user_id');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority');
        $this->db->where('job_post.id', $job_id);
        $query_result = $this->db->get('job_post');
        $result = $query_result->row();
        return $result;
    }

    public function check_investor_info($user_id)
    {
        $this->db->select('id');
        $this->db->where('user_id', $user_id);
        $this->db->where('investor', 2);
        $query_result = $this->db->get('basic');
        $result = $query_result->row();
        return $result;
    }

    public function job_details_view_investor($job_id){
        $this->db->select('job_post.*,basic.organization_name,master_category.category_name, basic.company_logo, master_sub_category.sub_category_name,master_work_authority.work_authority_name');
        $this->db->join('basic', 'basic.user_id = job_post.user_id');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority');
        $this->db->where('job_post.id', $job_id);
        $query_result = $this->db->get('job_post');
        $result = $query_result->row();
        return $result;
    }

    public function select_all_investor($id){
        $this->db->select('count(id) total');
        $this->db->where('post_id', $id);
        $this->db->where('job_type', 1);
        $query_result = $this->db->get('job_apply');
        $result = $query_result->row();
        return $result;
    }
    
    public function select_all_bidder($id){
        $this->db->select('count(id) total');
        $this->db->where('post_id', $id);
        $this->db->where('job_type', 1);
        $query_result = $this->db->get('job_apply');
        $result = $query_result->row();
        return $result;
    }
    
}