<?php

class Bidder_model extends CI_Model
{
    public function countAll()
    {
        $this->db->select('count(id) total_rows');
        $this->db->where('bidder', 3);
        $query_result = $this->db->get('basic');
        $result = $query_result->row();
        return $result;
    }

    public function select_all_user($limit, $start)
    {
        $this->db->limit($limit, $start);
        $this->db->select('basic.*,master_user.*');
        $this->db->where('basic.bidder', 3);
        $this->db->or_where('basic.investor', 2);
        $this->db->or_where('basic.publisher', 1);
        $this->db->join('master_user', 'master_user.id = basic.user_id', 'left');
        $this->db->order_by('basic.id', "desc");
        $query_result = $this->db->get('basic');
        $result = $query_result->result();
        return $result;
    }

    public function user_profile_details($user_id)
    {
        $this->db->select('basic.*', 'master_user.*');
        $this->db->where('basic.user_id', $user_id);
        $this->db->join('master_user', 'master_user.id = basic.user_id', 'left');
        $query_result = $this->db->get('basic');
        $result = $query_result->result();
        return $result;
    }

    public function select_management_team($user_id)
    {
        $this->db->select('*');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('management_team');
        $result = $query_result->result();
        return $result;
    }
    
    public function select_nominee($user_id)
    {
        $this->db->select('*');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('nominee');
        $result = $query_result->result();
        return $result;
    }

    public function select_official_contract_person($user_id)
    {
        $this->db->select('*');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('official_contract');
        $result = $query_result->result();
        return $result;
    }

    public function select_experience($user_id)
    {
        $this->db->select('*');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('experience');
        $result = $query_result->result();
        return $result;
    }
    public function select_area_of_work($user_id)
    {
        $this->db->select('*');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('area_of_work');
        $result = $query_result->result();
        return $result;
    }


    public function select_legal_papers($user_id)
    {
        $this->db->select('*');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('legal');
        $result = $query_result->row();
        return $result;
    }

    public function select_financial($user_id)
    {
        $this->db->select('*');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('financial');
        $result = $query_result->row();
        return $result;
    }

    public function select_award_certification($user_id)
    {
        $this->db->select('*');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('award_certification');
        $result = $query_result->result();
        return $result;
    }


    public function select_portfolio_link($user_id)
    {
        $this->db->select('*');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('portfolio_link');
        $result = $query_result->result();
        return $result;
    }


}