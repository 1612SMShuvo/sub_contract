<?php

class Apply_for_bidder_model extends CI_Model
{
    function insertData($data)
    {
        $this->db->insert('job_apply', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
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

    public function check_tax_return($user_id)
    {
        $this->db->select('income_tax');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('legal');
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

    public function job_apply_view($id)
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

    public function check_job_apply($post_id, $user_id)
    {
        $this->db->select('user_id');
        $this->db->where('user_id', $user_id);
        $this->db->where('post_id', $post_id);
        $query_result = $this->db->get('job_apply');
        $result = $query_result->row();
        return $result;
    }

    public function select_bidder_installment($id)
    {
        $this->db->select('payment_sl,bidder_installment_type');
        $this->db->where('job_id', $id);
//        $this->db->where('user_id', $user_id);
        $this->db->where('type', 1);
        $query_result = $this->db->get('post_installment_type');
        $result = $query_result->result();
        return $result;
    }

    public function check_user($post_id)
    {
        $this->db->select('user_id,post_id');
        $this->db->where('post_id', $post_id);
        $query_result = $this->db->get('job_apply');
        $result = $query_result->row();
        return $result;
    }

    public function check_required_document($post_id)
    {
        $this->db->select('job_post.*');
        $this->db->where('job_post.id', $post_id);
        $query_result = $this->db->get('job_post');
        $result = $query_result->row();
        return $result;
    }
   



}