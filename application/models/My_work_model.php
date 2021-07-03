<?php

class My_work_model extends CI_Model
{
//===================================My Bid Information=============================================================
    public function select_all_my_bid($user_id)
    {
        $this->db->select('job_apply.user_id,job_apply.post_id,job_apply.job_type,job_apply.quotation_price_for_bidder,job_post.*,basic.organization_name,master_category.category_name,master_sub_category.sub_category_name,master_work_authority.work_authority_name');
        $this->db->where('job_apply.user_id', $user_id);
        $this->db->where('job_apply.status', 6);
        $this->db->where('job_apply.job_type', 1);
        $this->db->join('basic', 'basic.user_id = job_apply.user_id');
        $this->db->join('job_post', 'job_post.id = job_apply.post_id');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority');
        $query_result = $this->db->get('job_apply');
        $result = $query_result->result();
        return $result;

    }

    public function select_my_bid_details($id, $user_id)
    {
        $this->db->select('job_post.*,basic.organization_name,basic.company_logo,basic.	office_address,master_category.category_name, master_sub_category.sub_category_name,master_work_authority.work_authority_name,job_apply.quotation_price_for_bidder,job_apply.status');
        $this->db->where('job_post.id', $id);
        $this->db->where('job_apply.user_id', $user_id);
        $this->db->join('basic', 'basic.user_id = job_post.user_id');
        $this->db->where('job_apply.status', 6);
        $this->db->where('job_apply.job_type', 1);
        $this->db->join('job_apply', 'job_apply.post_id = job_post.id');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority');
        $this->db->order_by('job_post.id', "desc");
        $query_result = $this->db->get('job_post');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_payment_term($post_id, $user_id)
    {
        $this->db->select('publisher_agreement_payment.*');
        $this->db->where('publisher_agreement.post_id', $post_id);
        $this->db->where('publisher_agreement.user_id', $user_id);
        $this->db->join('publisher_agreement_payment', 'publisher_agreement_payment.agreement_id = publisher_agreement.id');
        $this->db->order_by('publisher_agreement_payment.id', "asc");
        $query_result = $this->db->get('publisher_agreement');
        $result = $query_result->result();
        return $result;
    }


    public function select_my_bid_all($user_id)
    {
        $this->db->select('job_apply.user_id,job_apply.post_id,job_apply.job_type,job_apply.quotation_price_for_bidder,job_post.*,basic.organization_name,master_category.category_name,master_sub_category.sub_category_name,master_work_authority.work_authority_name');
        $this->db->where('job_apply.user_id', $user_id);
        $this->db->where('job_apply.job_type', 1);
        $this->db->where('job_apply.status', 1);
        $this->db->join('basic', 'basic.user_id = job_apply.user_id');
        $this->db->join('job_post', 'job_post.id = job_apply.post_id');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority');
        $query_result = $this->db->get('job_apply');
        $result = $query_result->result();
        return $result;

    }

    public function select_my_bid_pending($user_id)
    {
        $this->db->select('job_apply.user_id,job_apply.post_id,job_apply.job_type,job_apply.quotation_price_for_bidder,job_apply.status,
        job_post.job_title,job_post.work_authority,job_post.work_category_id,job_post.sub_category_id,job_post.id,job_post.work_type_bidder,job_post.publish_date,job_post.work_completion_date,job_post.submit_date,job_post.approximate_budget,basic.organization_name,master_category.category_name,master_sub_category.sub_category_name,master_work_authority.work_authority_name');
        $this->db->where('job_apply.user_id', $user_id);
        $this->db->where('job_apply.job_type',1);
        $this->db->where('job_apply.status',4);
        $this->db->join('basic', 'basic.user_id = job_apply.user_id');
        $this->db->join('job_post', 'job_post.id = job_apply.post_id');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority');
        $query_result = $this->db->get('job_apply');
        $result = $query_result->result();
        return $result;

    }

    public function select_my_bid_active($user_id)
    {
        $this->db->select('job_apply.user_id,job_apply.post_id,job_apply.job_type,job_apply.quotation_price_for_bidder,job_post.*,basic.organization_name,master_category.category_name,master_sub_category.sub_category_name,master_work_authority.work_authority_name');
        $this->db->where('job_apply.user_id', $user_id);
        $this->db->where('job_apply.job_type', 1);
        $this->db->where('job_apply.status', 6);
        $this->db->join('basic', 'basic.user_id = job_apply.user_id');
        $this->db->join('job_post', 'job_post.id = job_apply.post_id');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority');
        $query_result = $this->db->get('job_apply');
        $result = $query_result->result();
        return $result;

    }

    public function agreement_show($user_id){
        $this->db->select('*');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('publisher_agreement');
        $result = $query_result->row();
        return $result;
    }

    public function pending_job_detail_view_bidder($id){
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
    
    public function proposal_details($id){
        $this->db->select('basic.organization_name,basic.office_address,basic.company_logo,basic.nid_card,basic.tin,basic.bin,basic.years_of_experiences,job_apply.*,job_post.approximate_budget');
        $this->db->where('job_apply.post_id', $id);
        //$this->db->where('job_apply.job_type', 1);
        $this->db->join('job_apply', 'job_apply.user_id = basic.user_id');
        $this->db->join('job_post', 'job_post.id = job_apply.post_id');
        $query_result = $this->db->get('basic');
        $result = $query_result->result();
        return $result;
    }

public function select_my_requirement_details($id){
    $this->db->select('job_apply.*,job_post.approximate_budget');
    $this->db->where('job_apply.post_id', $id);
    $this->db->join('job_post', 'job_post.id = job_apply.post_id');
    //$this->db->join('job_apply_catalog', 'job_apply_catalog.job_apply_id = job_apply.id');
    $query_result = $this->db->get('job_apply');
    $result = $query_result->result();
    return $result;
}
//==================================================My Invest Information========================================================
    public function select_all_my_invest($user_id)
    {
        $this->db->select('job_apply.user_id,job_apply.post_id,job_apply.job_type,job_apply.quotation_price_for_bidder,job_apply.interested_investment,job_post.*,basic.organization_name,master_category.category_name,master_sub_category.sub_category_name,master_work_authority.work_authority_name');
        $this->db->where('job_apply.user_id', $user_id);
       $this->db->where('job_apply.status',5);
        $this->db->where('job_apply.job_type',2);
        $this->db->join('basic', 'basic.user_id = job_apply.user_id');
        $this->db->join('job_post', 'job_post.id = job_apply.post_id');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority');
        $query_result = $this->db->get('job_apply');
        $result = $query_result->result();
        return $result;

    }

    public function select_my_invest_pending($user_id)
    {
        $this->db->select('job_apply.user_id,job_apply.post_id,job_apply.job_type,job_apply.quotation_price_for_bidder,job_apply.status,
        job_post.job_title,job_post.work_authority,job_post.work_category_id,job_post.sub_category_id,job_post.id,job_post.work_type_bidder,job_post.publish_date,job_post.work_completion_date,job_post.submit_date,job_post.approximate_budget,basic.organization_name,master_category.category_name,master_sub_category.sub_category_name,master_work_authority.work_authority_name');
        $this->db->where('job_apply.user_id', $user_id);
        $this->db->where('job_apply.status',5);
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

    public function select_my_invest_active($user_id)
    {
        $this->db->select('job_apply.user_id,job_apply.post_id,job_apply.job_type,job_apply.quotation_price_for_bidder,job_apply.interested_investment,job_post.*,basic.organization_name,master_category.category_name,master_sub_category.sub_category_name,master_work_authority.work_authority_name');
        $this->db->where('job_apply.user_id', $user_id);
        $this->db->where('job_apply.job_type', 2);
        $this->db->where('job_apply.status', 11);
        $this->db->join('basic', 'basic.user_id = job_apply.user_id');
        $this->db->join('job_post', 'job_post.id = job_apply.post_id');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority');
        $query_result = $this->db->get('job_apply');
        $result = $query_result->result();
        return $result;

    }


    public function pending_job_detail_view_investor($id){
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

    public function select_all_payment_term_investor($post_id, $user_id)
    {
        $this->db->select('publisher_investor_agreement.*,publisher_investor_agreement_payment.*');
        $this->db->where('publisher_investor_agreement.post_id', $post_id);
        $this->db->where('publisher_investor_agreement.user_id', $user_id);
        $this->db->join('publisher_investor_agreement_payment', 'publisher_investor_agreement_payment.agreement_id = publisher_investor_agreement.id');
        $this->db->order_by('publisher_investor_agreement_payment.id', "asc");
        $query_result = $this->db->get('publisher_investor_agreement');
        $result = $query_result->result();
        return $result;
    }

    public function proposal_details_investor($id){
        $this->db->select('basic.organization_name,basic.office_address,basic.company_logo,basic.nid_card,basic.tin,basic.bin,basic.years_of_experiences,job_apply.*,job_post.approximate_budget');
        $this->db->where('job_apply.post_id', $id);
        $this->db->join('job_apply', 'job_apply.user_id = basic.user_id');
        $this->db->join('job_post', 'job_post.id = job_apply.post_id');
        $query_result = $this->db->get('basic');
        $result = $query_result->result();
        return $result;
    }

    public function select_my_investor_details($id)
    {
        $this->db->select('job_post.*,basic.*,master_category.category_name, master_sub_category.sub_category_name,master_work_authority.work_authority_name');
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

    public function select_all_payment_term_investor1($post_id, $user_id)
    {
        $this->db->select('publisher_investor_agreement.*');
        $this->db->where('publisher_investor_agreement.post_id', $post_id);
        $this->db->where('publisher_investor_agreement.user_id', $user_id);
        $query_result = $this->db->get('publisher_investor_agreement');
        $result = $query_result->result();
        return $result;
    }

    public function select_my_requirement_details_investor($id){
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