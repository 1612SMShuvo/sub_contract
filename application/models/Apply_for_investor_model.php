<?php

class Apply_for_investor_model extends CI_Model
{
    public function job_apply_view_investor($id)
    {
        $this->db->select('job_post.*,basic.organization_name,master_category.category_name, master_sub_category.sub_category_name,master_work_authority.work_authority_name');
        $this->db->join('basic', 'basic.user_id = job_post.user_id');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority');
        $this->db->where('job_post.id', $id);
        $query_result = $this->db->get('job_post');
        $result = $query_result->row();
        return $result;
    }
    
    public function check_job_apply_investor($user_id,$post_id){
        $this->db->select('user_id');
        $this->db->where('user_id', $user_id);
        $this->db->where('post_id', $post_id);
        $query_result = $this->db->get('job_apply');
        $result = $query_result->row();
        return $result;
    }

    public function check_tin($user_id)
    {
        $this->db->select('tin');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('management_team');
        $result = $query_result->row();
        return $result;
    }

    public function check_bin($user_id)
    {
        $this->db->select('bin');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('legal');
        $result = $query_result->row();
        return $result;
    }

    public function check_nid($user_id)
    {

        $this->db->select('nid');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('management_team');
        $result = $query_result->row();
        return $result;
    }

    public function check_liquid_money($user_id)
    {

        $this->db->select('liquid_money');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('financial');
        $result = $query_result->row();
        return $result;
    }

    public function check_bank_statement($user_id)
    {

        $this->db->select('	bank_statement');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('financial');
        $result = $query_result->row();
        return $result;
    }

    public function check_audit_report($user_id)
    {

        $this->db->select('audit_report');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('legal');
        $result = $query_result->row();
        return $result;
    }

    public function select_invest_installment($id)
    {
        $this->db->select('payment_sl,bidder_installment_type');
        $this->db->where('job_id', $id);
        
        $this->db->where('type', 2);
        $query_result = $this->db->get('post_installment_type');
        $result = $query_result->result();
        return $result;
    }


    public function check_required_document_investor($post_id)
    {
        $this->db->select('*');
        $this->db->where('job_post.id', $post_id);
        $query_result = $this->db->get('job_post');
        $result = $query_result->row();
        return $result;
    }
}