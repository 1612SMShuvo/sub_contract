<?php
class Agreement_form_model extends CI_Model
{
    public function select_aggrement_form()
    {
        $this->db->select('publisher_agreement.*,job_post.job_title, job_post.approximate_budget, basic.organization_name,basic.official_contact, basic.web_address, publisher_agreement_payment.amount');
//        $this->db->where('job_apply.job_type', 1);
        $this->db->join('job_post', 'job_post.id = publisher_agreement.post_id');
        $this->db->join('basic', 'basic.user_id = publisher_agreement.user_id ');
        $this->db->join('publisher_agreement_payment', 'publisher_agreement_payment.agreement_id = publisher_agreement.id ');
        $this->db->order_by('publisher_agreement.id', "desc");
        $query_result = $this->db->get('publisher_agreement');
        $result = $query_result->result();
        return $result;
    }
}