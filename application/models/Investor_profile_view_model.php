<?php

class Investor_profile_view_model extends CI_Model
{
   public function profile_details_investor($user_id){
       $this->db->select('basic.organization_name,basic.office_address,basic.company_logo,basic.nid_card,basic.tin,basic.bin,basic.years_of_experiences,job_apply.*,job_post.approximate_budget');
       $this->db->where('basic.user_id', $user_id);
       $this->db->where('job_apply.job_type',2);
       $this->db->join('job_apply', 'job_apply.user_id = basic.user_id');
       $this->db->join('job_post', 'job_post.id = job_apply.post_id');
       $query_result = $this->db->get('basic');
       $result = $query_result->result();
       return $result;
   }

}