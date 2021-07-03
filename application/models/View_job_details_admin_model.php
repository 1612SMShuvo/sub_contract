<?php

class View_job_details_admin_model extends CI_Model
{
    function job_details($id)
    {
        $this->db->select('job_post.*,basic.organization_name');
        $this->db->where('job_post.id', $id);
        $this->db->join('basic', 'basic.user_id = job_post.user_id');
        $this->db->order_by('id', "desc");
        $query_result = $this->db->get('job_post');
        $result = $query_result->result();
        return $result;
    } 
}

