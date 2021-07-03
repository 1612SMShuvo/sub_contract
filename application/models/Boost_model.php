<?php
class Boost_model extends CI_Model
{
    public function view_all_job_boost()
    {
        $this->db->select(' job_boost_payment.*,job_post.job_title,basic.organization_name');
        $this->db->join('basic', 'basic.user_id = job_boost_payment.user_id');
        $this->db->join('master_user', 'master_user.id = job_boost_payment.user_id');
        $this->db->join('job_post', 'job_post.id = job_boost_payment.post_id');
        $this->db->order_by('job_boost_payment.created_at', "desc");
        $query_result = $this->db->get('job_boost_payment');
        $result = $query_result->result();
        return $result;
    }
}
