<?php
class List_of_all_model extends CI_Model
{
    public function list_of_investors($user_id)
    {
        $this->db->select('job_apply.*,master_user.user_name,master_user.phone,master_user.email,job_post.job_title, job_post.approximate_budget, basic.organization_name,basic.number_of_employees');
        $this->db->where('job_post.user_id', $user_id);
        $this->db->where('job_apply.job_type', 2);
        $this->db->join('master_user', 'master_user.id = job_apply.user_id');
        $this->db->join('job_post', 'job_post.id = job_apply.post_id ');
        $this->db->join('basic', 'basic.user_id = job_apply.user_id ');
        $this->db->order_by('job_post.date_and_time', "desc");
        $query_result = $this->db->get('job_apply');
        $result = $query_result->result();
        return $result;
    }
    public function list_of_bidder($user_id)
    {
        $this->db->select('job_apply.*,master_user.user_name,master_user.phone,master_user.email,job_post.job_title, job_post.approximate_budget, basic.organization_name,basic.number_of_employees');
        $this->db->where('job_post.user_id', $user_id);
        $this->db->where('job_apply.job_type', 1);
        $this->db->join('master_user', 'master_user.id = job_apply.user_id');
        $this->db->join('job_post', 'job_post.id = job_apply.post_id ');
        $this->db->join('basic', 'basic.user_id = job_apply.user_id ');
        $this->db->order_by('job_post.date_and_time', "desc");
        $query_result = $this->db->get('job_apply');
        $result = $query_result->result();
        return $result;
    }
}