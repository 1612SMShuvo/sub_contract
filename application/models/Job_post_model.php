<?php

class Job_post_model extends CI_Model
{
    function insertData($data)
    {
        $this->db->insert('job_post', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    public function get_all_area_of_work($id)
    {
        $this->db->select('master_category.*, area_of_work.category_id');
        $this->db->where('master_category.status', 1);
        $this->db->join('area_of_work', 'area_of_work.category_id = master_category.id');
        $this->db->where('area_of_work.user_id', $id);
        $this->db->order_by('area_of_work.id', "desc");
        $query_result = $this->db->get('master_category');
        $result = $query_result->result();
        return $result;
    }
}