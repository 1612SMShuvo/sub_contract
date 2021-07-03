<?php

class Job_sub_category_model extends CI_Model
{
    public function countAll()
    {
        $this->db->select('count(id) total_rows');
        $query_result = $this->db->get('master_sub_category');
        $result = $query_result->row();
        return $result;
    }

    public function select_all_sub_category($limit, $start)
    {
        $this->db->limit($limit, $start);
        $this->db->select('master_category.category_name,master_sub_category.*');
        $this->db->join('master_category', 'master_category.id = master_sub_category.category_id', 'left');
        $this->db->order_by('master_sub_category.id', "desc");
        $query_result = $this->db->get('master_sub_category');
        $result = $query_result->result();
        return $result;
    }
}