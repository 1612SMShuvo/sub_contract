<?php
class Payment_as_publisher_Model extends CI_Model
{
//..............................Heading Part Payment as Publisher Counting...................................//
    public function select_all_budget_as_publisher($user_id)
    {
        $this->db->select('publisher_agreement.*');
        $this->db->join('job_post', 'job_post.id = publisher_agreement.post_id');
        $this->db->where('job_post.user_id', $user_id);
        $query_result = $this->db->get('publisher_agreement');
        $result = $query_result->result();
        return $result;
    }


    public function select_all_payterm_as_publisher($user_id)
    {
        $this->db->select('publisher_agreement_payment.*,publisher_agreement.post_id');
        $this->db->join('job_post', 'job_post.id = publisher_agreement.post_id');
        $this->db->join('publisher_agreement_payment', 'publisher_agreement_payment.agreement_id = publisher_agreement.id');
        $this->db->where('job_post.user_id', $user_id);
        $this->db->order_by('publisher_agreement_payment.id', "asc");
        $query_result = $this->db->get('publisher_agreement');
        $result = $query_result->result();
        return $result;
    }

//.........................Table Part Payment as publisher Counting...................................//
    public function select_all_payment_per_post_as_publisher($agreement_id)
    {

        $this->db->select('publisher_agreement_payment.*');
        $this->db->where('agreement_id', $agreement_id);
        $this->db->order_by('id', "asc");
        $query_result = $this->db->get('publisher_agreement_payment');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_payment_term_as_publisher($user_id)
    {
        $this->db->select('publisher_agreement_payment.*,publisher_agreement.budget,publisher_agreement_payment.amount,publisher_agreement.post_id');
        $this->db->join('publisher_agreement_payment', 'publisher_agreement_payment.agreement_id = publisher_agreement.id');
        $this->db->join('job_post', 'job_post.id = publisher_agreement.post_id');
        $this->db->where('job_post.user_id', $user_id);
        $this->db->order_by('publisher_agreement_payment.id', "asc");
        $query_result = $this->db->get('publisher_agreement');
        $result = $query_result->result();
        return $result;
    }

//...........................Heading Part Payment as Investor Counting...................................//
    public function select_all_payment_term_as_investor($user_id)
    {
        $this->db->select('publisher_investor_agreement.post_id,publisher_investor_agreement.id,publisher_investor_agreement.invest_amount');
        $this->db->join('job_apply', 'job_apply.post_id = publisher_investor_agreement.post_id');
        $this->db->where('job_apply.user_id', $user_id);
        $query_result = $this->db->get('publisher_investor_agreement');
        $result = $query_result->result();
        return $result;
    }
    public function select_all_budget_as_investor($user_id)
    {
        $this->db->select('publisher_investor_agreement.*');
        $this->db->join('job_apply', 'job_apply.post_id = publisher_investor_agreement.post_id');
        $this->db->where('job_apply.user_id', $user_id);
        $query_result = $this->db->get('publisher_investor_agreement');
        $result = $query_result->result();
        return $result;
    }
//.............................Table Part Payment as publisher Counting...................................//
    public function select_all_payterm_as_investor($user_id)
    {
        $this->db->select('publisher_investor_agreement_payment.*,publisher_investor_agreement.post_id,publisher_investor_agreement_payment.status,publisher_investor_agreement_payment.amount');
        $this->db->join('publisher_investor_agreement_payment', 'publisher_investor_agreement_payment.agreement_id = publisher_investor_agreement.id');
        $this->db->join('job_apply', 'job_apply.post_id = publisher_investor_agreement.post_id');
        $this->db->where('job_apply.user_id', $user_id);
        $this->db->order_by('publisher_investor_agreement_payment.id', "asc");
        $query_result = $this->db->get('publisher_investor_agreement');
        $result = $query_result->result();
        return $result;
    }
    public function select_all_payment_per_post_as_investor($agreement_id)
    {
        $this->db->select('publisher_investor_agreement_payment.*');
        $this->db->where('agreement_id', $agreement_id);
        $this->db->order_by('id', "asc");
        $query_result = $this->db->get('publisher_investor_agreement_payment');
        $result = $query_result->result();
        return $result;
    }
}