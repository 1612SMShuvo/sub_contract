<?php

class My_job_model extends CI_Model
{
    public function select_all_my_job($user_id)
    {
        $this->db->select('job_post.*,basic.organization_name,master_category.category_name, master_sub_category.sub_category_name,master_work_authority.work_authority_name');
        $this->db->where('job_post.user_id', $user_id);
        $this->db->where('job_post.status', 1);
        $this->db->join('basic', 'basic.user_id = job_post.user_id');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority');
        $this->db->order_by('job_post.id', "desc");
        $query_result = $this->db->get('job_post');
        $result = $query_result->result();
        return $result;
    }

    public function job_detail_view($id)
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

    public function select_interest_bidder($id)
    {
        $this->db->select('job_apply.*,basic.company_logo,basic.organization_name,job_post.work_completion_date');
        $this->db->where('post_id', $id);
        $this->db->where('job_apply.job_type', 1);
        $this->db->where('job_apply.status', 3);
        $this->db->join('basic', 'basic.user_id = job_apply.user_id');
        $this->db->join('job_post', 'job_post.id = job_apply.post_id');
        $query_result = $this->db->get('job_apply');
        $result = $query_result->result();
        return $result;
    }
   

    public function select_shortlist_bidder($id)
    {
        $this->db->select('job_apply.*,basic.company_logo,basic.organization_name,job_post.work_completion_date,job_post.profit_share');
        $this->db->where('post_id', $id);
        $this->db->where('job_apply.status', 4);
        $this->db->join('basic', 'basic.user_id = job_apply.user_id');
        $this->db->join('job_post', 'job_post.id = job_apply.post_id');
        $query_result = $this->db->get('job_apply');
        $result = $query_result->result();
        return $result;
    }
  


    public function select_hire_bidder($id)
    {
        $this->db->select('job_apply.*,basic.company_logo,basic.organization_name,job_post.work_completion_date,job_post.profit_share');
        $this->db->where('post_id', $id);
        $this->db->where('job_apply.status',8);
        $this->db->join('basic', 'basic.user_id = job_apply.user_id');
        $this->db->join('job_post', 'job_post.id = job_apply.post_id');
        $query_result = $this->db->get('job_apply');
        $result = $query_result->result();
        return $result;
    }

    public function select_hire_investor($id)
    {
        $this->db->select('job_apply.*,basic.company_logo,basic.organization_name,job_post.work_completion_date,job_post.profit_share');
        $this->db->where('post_id', $id);
        $this->db->where('job_apply.status',9);
        $this->db->join('basic', 'basic.user_id = job_apply.user_id');
        $this->db->join('job_post', 'job_post.id = job_apply.post_id');
        $query_result = $this->db->get('job_apply');
        $result = $query_result->result();
        return $result;
    }


}
