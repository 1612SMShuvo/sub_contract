<?php

class Pending_job_model extends CI_Model
{
    public function select_all_pending_job($user_id)
    {
        $this->db->select('job_post.*,basic.organization_name,master_category.category_name, master_sub_category.sub_category_name,master_work_authority.work_authority_name');
        $this->db->where('job_post.user_id', $user_id);
        $this->db->where('job_post.status',2);
        $this->db->join('basic', 'basic.user_id = job_post.user_id');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority');
        $this->db->order_by('job_post.id', "desc");
        $query_result = $this->db->get('job_post');
        $result = $query_result->result();
        return $result;
    }

    public function pending_job_detail_view($id)
    {
        $this->db->select('job_post.*,basic.organization_name,master_category.category_name, master_sub_category.sub_category_name,master_work_authority.work_authority_name');
        $this->db->where('job_post.id', $id);
        $this->db->join('basic', 'basic.user_id = job_post.user_id');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority');
        $this->db->order_by('job_post.id', "desc");
        $query_result = $this->db->get('job_post');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_job_apply_bidder($id)
    {
        $this->db->select('count(id) total');
        $this->db->where('post_id', $id);
        $this->db->where('job_type', 1);
        $query_result = $this->db->get('job_apply');
        $result = $query_result->row();
        return $result;
    }

    public function select_all_job_apply_investor($id)
    {
        $this->db->select('count(id) total');
        $this->db->where('post_id', $id);
        $this->db->where('job_type', 2);
        $query_result = $this->db->get('job_apply');
        $result = $query_result->row();
        return $result;
    }

    public function agreement_job_detail_view($id)
    {
        $this->db->select('job_post.*,basic.organization_name,master_category.category_name, master_sub_category.sub_category_name,master_work_authority.work_authority_name');
        $this->db->where('job_post.id', $id);
        $this->db->join('basic', 'basic.user_id = job_post.user_id');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority');
        $this->db->order_by('job_post.id', "desc");
        $query_result = $this->db->get('job_post');
        $result = $query_result->result();
        return $result;
    }

    function insertData($data)
    {
        $this->db->insert('publisher_agreement', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    function insertInvestData($data)
    {
        $this->db->insert('publisher_investor_agreement', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    public function select_interest_investor($id)
    {
        $this->db->select('job_apply.*,basic.company_logo,basic.organization_name,job_post.work_completion_date,job_post.profit_share');
        $this->db->where('post_id', $id);
        $this->db->where('job_apply.job_type', 2);
        $this->db->where('job_apply.status', 3);
        $this->db->join('basic', 'basic.user_id = job_apply.user_id');
        $this->db->join('job_post', 'job_post.id = job_apply.post_id');
        $query_result = $this->db->get('job_apply');
        $result = $query_result->result();
        return $result;
    }


    public function select_shortlist_investor($id)
    {
        $this->db->select('job_apply.*,basic.company_logo,basic.organization_name,job_post.work_completion_date,job_post.profit_share');
        $this->db->where('post_id', $id);
        $this->db->where('job_apply.status',5);
        $this->db->join('basic', 'basic.user_id = job_apply.user_id');
        $this->db->join('job_post', 'job_post.id = job_apply.post_id');

        $query_result = $this->db->get('job_apply');
        $result = $query_result->result();
        return $result;
    }
    
}