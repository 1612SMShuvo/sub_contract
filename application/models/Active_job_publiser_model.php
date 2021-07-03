<?php
class Active_job_publiser_model extends CI_Model
{
    public function view_all_active_job($user_id)
    {
        $this->db->select('job_post.*,basic.organization_name,master_category.category_name, master_sub_category.sub_category_name,master_work_authority.work_authority_name,job_apply.status,job_apply.quotation_price_for_bidder,');
        $this->db->where('job_post.user_id', $user_id);
        $this->db->join('job_apply', 'job_apply.post_id = job_post.id', 'left');
        $this->db->where('job_post.status',6);
        $this->db->where('job_apply.job_type',1);
        $this->db->join('basic', 'basic.user_id = job_post.user_id');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority');
        $this->db->order_by('job_post.id', "desc");
        $query_result = $this->db->get('job_post');
        $result = $query_result->result();
        return $result;
    }
    public function view_details_active_job($id)
    {
        $this->db->select('job_post.*,basic.organization_name,basic.company_logo,basic.office_address,master_category.category_name, master_sub_category.sub_category_name,master_work_authority.work_authority_name');
        $this->db->where('job_post.id', $id);
        $this->db->join('basic', 'basic.user_id = job_post.user_id');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority');
        $query_result = $this->db->get('job_post');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_payment_term($post_id)
    {
        $this->db->select('publisher_agreement_payment.*,publisher_agreement.budget,publisher_agreement.post_id');
        $this->db->where('publisher_agreement.post_id', $post_id);
        $this->db->join('publisher_agreement_payment', 'publisher_agreement_payment.agreement_id = publisher_agreement.id');
        $this->db->order_by('publisher_agreement_payment.id', "asc");
        $query_result = $this->db->get('publisher_agreement');
        $result = $query_result->result();
        return $result;
    }

    public function select_specification_requirement($id){
        $this->db->select('job_apply.*,job_post.approximate_budget');
        $this->db->where('job_apply.post_id', $id);
        $this->db->join('job_post', 'job_post.id = job_apply.post_id');
        //$this->db->join('job_apply_catalog', 'job_apply_catalog.job_apply_id = job_apply.id');
        $query_result = $this->db->get('job_apply');
        $result = $query_result->result();
        return $result;
    }


//========================================================Investor Information==========================================================================
    public function view_all_active_job_investor($user_id)
    {
        $this->db->select('job_post.*,basic.organization_name,master_category.category_name, master_sub_category.sub_category_name,master_work_authority.work_authority_name,job_apply.status');
        $this->db->where('job_post.user_id', $user_id);
        $this->db->join('job_apply', 'job_apply.post_id = job_post.id', 'left');
        $this->db->where('job_apply.status',11);
        $this->db->where('job_apply.job_type',2);
        $this->db->join('basic', 'basic.user_id = job_post.user_id');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority');
        $this->db->order_by('job_post.id', "desc");
        $query_result = $this->db->get('job_post');
        $result = $query_result->result();
        return $result;
    }

    public function view_details_active_job_investor($id)
    {
        $this->db->select('job_post.*,basic.organization_name,basic.company_logo,basic.office_address,master_category.category_name, master_sub_category.sub_category_name,master_work_authority.work_authority_name');
        $this->db->where('job_post.id', $id);
        $this->db->join('basic', 'basic.user_id = job_post.user_id');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority');
        $query_result = $this->db->get('job_post');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_payment_term_investor($post_id)
    {
        $this->db->select('publisher_investor_agreement.budget,publisher_investor_agreement_payment.*');
        $this->db->where('publisher_investor_agreement.post_id', $post_id);
        $this->db->join('publisher_investor_agreement_payment', 'publisher_investor_agreement_payment.agreement_id = publisher_investor_agreement.id');
        $this->db->order_by('publisher_investor_agreement_payment.id', "asc");
        $query_result = $this->db->get('publisher_investor_agreement');
        $result = $query_result->result();
        return $result;
    }

    public function select_my_requirement_details_investor_publiser($id){
        $this->db->select('job_apply.*,job_post.approximate_budget');
        $this->db->where('job_apply.post_id', $id);
        $this->db->where('job_apply.job_type',2);
        $this->db->join('job_post', 'job_post.id = job_apply.post_id');
        //$this->db->join('job_apply_catalog', 'job_apply_catalog.job_apply_id = job_apply.id');
        $query_result = $this->db->get('job_apply');
        $result = $query_result->result();
        return $result;
    }
}
