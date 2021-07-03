<?php

class Publisher_model extends CI_Model
{
    public function countAll()
    {
        $this->db->select('count(id) total_rows');
        $this->db->where('publisher', 1);
        $query_result = $this->db->get('basic');
        $result = $query_result->row();
        return $result;
    }

    public function select_all_publisher($limit, $start)
    {
        $this->db->limit($limit, $start);
        $this->db->select('basic.*,master_user.*');
        $this->db->where('basic.publisher', 1);
        $this->db->join('master_user', 'master_user.id = basic.user_id', 'left');
        $this->db->order_by('basic.id', "desc");
        $query_result = $this->db->get('basic');
        $result = $query_result->result();
        return $result;
    }

}