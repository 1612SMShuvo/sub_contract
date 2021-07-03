<?php
class Earning_Model extends CI_Model
{
    public function select_all_payment_term($user_id)
    {
        $this->db->select('publisher_agreement.*');
        $this->db->join('job_apply', 'job_apply.post_id = publisher_agreement.post_id');
        $this->db->where('job_apply.user_id', $user_id);
        $this->db->order_by('publisher_agreement.id', "asc");
        $query_result = $this->db->get('publisher_agreement');
        $result = $query_result->result();
        return $result;
    }
//..................................Table Part Earning Counting For per Job...................................//
    public function select_all_payment_per_post($agreement_id)
    {
        $this->db->select('publisher_agreement_payment.*');
        $this->db->where('agreement_id', $agreement_id);
        $this->db->order_by('id', "asc");
        $query_result = $this->db->get('publisher_agreement_payment');
        $result = $query_result->result();
        return $result;
    }
//.......................................Heading Part Earning Counting...................................//
    public function select_all_budget($user_id)
    {
        $this->db->select('publisher_agreement.*');
        $this->db->where('publisher_agreement.user_id', $user_id);
        $query_result = $this->db->get('publisher_agreement');
        $result = $query_result->result();
        return $result;
    }
    public function select_all_payterm($user_id)
    {
        $this->db->select('publisher_agreement_payment.*,publisher_agreement.post_id');
        $this->db->where('publisher_agreement.user_id', $user_id);
        $this->db->join('publisher_agreement_payment', 'publisher_agreement_payment.agreement_id = publisher_agreement.id');
        $this->db->order_by('publisher_agreement_payment.id', "asc");
        $query_result = $this->db->get('publisher_agreement');
        $result = $query_result->result();
        return $result;
    }
// as investor
    public function select_paid_payment_term($user_id)
    {
        $this->db->select('publisher_agreement_payment.*,publisher_agreement.post_id,publisher_agreement.budget');
        $this->db->where('publisher_agreement.user_id', $user_id);
        $this->db->where('publisher_agreement_payment.status', 5);
        $this->db->join('publisher_agreement_payment', 'publisher_agreement_payment.agreement_id = publisher_agreement.id');
        $this->db->order_by('publisher_agreement_payment.id', "asc");
        $query_result = $this->db->get('publisher_agreement');
        $result = $query_result->result();
        return $result;
    }
    public function select_all_payment_term_as_investor($user_id)
    {
        $this->db->select('publisher_investor_agreement.*');
        $this->db->join('job_apply', 'job_apply.post_id = publisher_investor_agreement.post_id');
        $this->db->where('job_apply.user_id', $user_id);
        $this->db->order_by('publisher_investor_agreement.id', "asc");
        $query_result = $this->db->get('publisher_investor_agreement');
        $result = $query_result->result();
        return $result;
    }
    public function select_all_request_as_investor($user_id)
    {
        $this->db->select('publisher_investor_agreement_payment.*,publisher_investor_agreement.post_id');
        $this->db->where('publisher_investor_agreement_payment.status', 2);
        $this->db->join('publisher_investor_agreement_payment', 'publisher_investor_agreement_payment.agreement_id = publisher_investor_agreement.id');
        $this->db->join('job_apply', 'job_apply.post_id = publisher_investor_agreement.post_id');
        $this->db->where('job_apply.user_id', $user_id);
        $this->db->order_by('publisher_investor_agreement_payment.id', "asc");
        $query_result = $this->db->get('publisher_investor_agreement');
        $result = $query_result->result();
        return $result;
    }
    public function select_all_milestone_as_investor($user_id)
    {
        $this->db->select('publisher_investor_agreement_payment.*,publisher_investor_agreement.post_id');
        $this->db->where('publisher_investor_agreement_payment.status', 3 OR 'publisher_investor_agreement_payment.status', 4);
        // $this->db->where('publisher_investor_agreement_payment.status', 3);
        $this->db->join('publisher_investor_agreement_payment', 'publisher_investor_agreement_payment.agreement_id = publisher_investor_agreement.id');
        $this->db->join('job_apply', 'job_apply.post_id = publisher_investor_agreement.post_id');
        $this->db->where('job_apply.user_id', $user_id);
        $this->db->order_by('publisher_investor_agreement_payment.id', "asc");
        $query_result = $this->db->get('publisher_investor_agreement');
        $result = $query_result->result();
        return $result;
    }
    public function select_all_remain_as_investor($user_id)
    {
        $this->db->select('publisher_investor_agreement_payment.*,publisher_investor_agreement.post_id');
        $this->db->where('publisher_investor_agreement_payment.status ', 2 OR 'publisher_investor_agreement_payment.status ', 1);
        // $this->db->where('publisher_investor_agreement_payment.status ', 1);
        $this->db->join('publisher_investor_agreement_payment', 'publisher_investor_agreement_payment.agreement_id = publisher_investor_agreement.id');
        $this->db->join('job_apply', 'job_apply.post_id = publisher_investor_agreement.post_id');
        $this->db->where('job_apply.user_id', $user_id);
        $this->db->order_by('publisher_investor_agreement_payment.id', "asc");
        $query_result = $this->db->get('publisher_investor_agreement');
        $result = $query_result->result();
        return $result;
    }
    public function select_all_gainable_as_investor($user_id)
    {
        $this->db->select('publisher_investor_agreement_payment.*,publisher_investor_agreement.post_id');
        $this->db->where('publisher_investor_agreement_payment.status ', 5);
        $this->db->join('publisher_investor_agreement_payment', 'publisher_investor_agreement_payment.agreement_id = publisher_investor_agreement.id');
        $this->db->join('job_apply', 'job_apply.post_id = publisher_investor_agreement.post_id');
        $this->db->where('job_apply.user_id', $user_id);
        $this->db->order_by('publisher_investor_agreement_payment.id', "asc");
        $query_result = $this->db->get('publisher_investor_agreement');
        $result = $query_result->result();
        return $result;
    }
    public function select_all_investment_as_investor($user_id)
    {
        $this->db->select('publisher_investor_agreement.*');
        $this->db->join('job_apply', 'job_apply.post_id = publisher_investor_agreement.post_id');
        $this->db->where('job_apply.user_id', $user_id);
        $this->db->order_by('publisher_investor_agreement.id', "asc");
        $query_result = $this->db->get('publisher_investor_agreement');
        $result = $query_result->result();
        return $result;
    }
}
