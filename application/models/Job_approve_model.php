<?php

class Job_approve_model extends CI_Model
{
    public function all_job_applyer($post_id)
    {
        $this->db->select('job_apply.post_id,job_apply.id,job_apply.status,job_apply.job_type,basic.organization_name,basic.office_address,basic.official_contact,job_post.job_title');
        $this->db->where('job_apply.post_id', $post_id);
        $this->db->join('basic', 'basic.user_id = job_apply.user_id', 'left');
        $this->db->join('job_post', 'job_post.id = job_apply.post_id', 'left');
        $query_result = $this->db->get('job_apply');
        $result = $query_result->result();
        return $result;
    }

    public function all_job_shortlister($post_id)
    {
        $this->db->select('job_apply.post_id,job_apply.id,job_apply.status,basic.organization_name,basic.office_address,basic.official_contact,job_post.job_title');
        $this->db->where('job_apply.post_id', $post_id);
        $this->db->where('job_apply.status', 1);
        $this->db->join('basic', 'basic.user_id = job_apply.user_id', 'left');
        $this->db->join('job_post', 'job_post.id = job_apply.post_id', 'left');
        $query_result = $this->db->get('job_apply');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_confirmed_job($post_id)
    {
        $this->db->select('job_apply.post_id,job_apply.id,job_apply.status,basic.organization_name,basic.office_address,basic.official_contact,job_post.job_title');
        $this->db->where('job_apply.post_id', $post_id);
        $this->db->where('job_apply.status', 3);
        $this->db->join('basic', 'basic.user_id = job_apply.user_id', 'left');
        $this->db->join('job_post', 'job_post.id = job_apply.post_id', 'left');
        $query_result = $this->db->get('job_apply');
        $result = $query_result->result();
        return $result;
    }


    function job_details($id)
    {
        $this->db->select('job_post.*,basic.organization_name');
        $this->db->where('job_post.id', $id);
        $this->db->join('basic', 'basic.user_id = job_post.user_id');
        $this->db->order_by('id', "desc");
        $query_result = $this->db->get('job_post');
        $result = $query_result->result();
        return $result;
    }

    function check_bidder_apply($id)
    {
        $this->db->select('count(id) total');
        $this->db->where('post_id', $id);
        $query_result = $this->db->get('job_apply');
        $result = $query_result->row();
        return $result;
    }

    function check_investor_apply($id)
    {
        $this->db->select('count(id) total');
        $this->db->where('post_id', $id);
        $query_result = $this->db->get('job_apply');
        $result = $query_result->row();
        return $result;
    }

    public function countAll()
    {
        $this->db->select('count(id) total_rows');
        $query_result = $this->db->get('job_post');
        $result = $query_result->row();
        return $result;
    }

    public function select_all_job_post($limit, $start)
    {
        $this->db->limit($limit, $start);
        $this->db->select('*');
        $this->db->order_by('id', "desc");
        $query_result = $this->db->get('job_post');
        $result = $query_result->result();
        return $result;
    }
    public function select_all_details_job($id){
        $this->db->select('*');
        $this->db->where('job_apply.id', $id);
        $query_result = $this->db->get('job_apply');
        $result = $query_result->row();
        return $result;
    }


}