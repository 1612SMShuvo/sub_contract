<?php

class View_investor_job_model extends CI_Model
{
    public function select_all_my_invest($user_id){
        $this->db->select('job_apply.user_id,job_apply.post_id,job_apply.job_type,job_apply.quotation_price_for_bidder,job_apply.interested_investment,job_post.*,basic.organization_name,master_category.category_name,master_sub_category.sub_category_name,master_work_authority.work_authority_name');
        $this->db->where('job_apply.user_id', $user_id);
        $this->db->where('job_apply.status', 7);
        $this->db->where('job_apply.job_type', 2);
        $this->db->join('basic', 'basic.user_id = job_apply.user_id');
        $this->db->join('job_post', 'job_post.id = job_apply.post_id');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority');
        $query_result = $this->db->get('job_apply');
        $result = $query_result->result();
        return $result;
    }

    public function select_my_invest_details($id,$user_id){
        $this->db->select('job_post.*,basic.organization_name,basic.company_logo,basic.	office_address,master_category.category_name, master_sub_category.sub_category_name,master_work_authority.work_authority_name,job_apply.quotation_price_for_bidder,job_apply.status');
        $this->db->where('job_post.id', $id);
        $this->db->where('job_apply.user_id', $user_id);
        $this->db->join('basic', 'basic.user_id = job_post.user_id');
        $this->db->where('job_apply.status', 7);
        $this->db->where('job_apply.job_type', 2);
        $this->db->join('job_apply', 'job_apply.post_id = job_post.id');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority');
        $this->db->order_by('job_post.id', "desc");
        $query_result = $this->db->get('job_post');
        $result = $query_result->result();
        return $result;
    }




}

