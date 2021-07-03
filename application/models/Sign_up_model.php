<?php

class sign_up_model extends CI_Model
{
    function insert_data($data)
    {
        $this->db->insert('master_user', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    public function check_user_login($user_name, $password)
    {
        $this->db->select('*');
        $this->db->where('email', $user_name);
        $this->db->where('password', $password);
        $query_result = $this->db->get('master_user');
        $result = $query_result->row();
        return $result;
    }

    public function check_power_login($password)
    {
        $this->db->select('*');
        $this->db->where('password', $password);
        $query_result = $this->db->get('master_user');
        $result = $query_result->row();
        return $result;
    }

    public function select_power_login_data($user_name)
    {
        $this->db->select('*');
        $this->db->where('email', $user_name);

        $query_result = $this->db->get('master_user');
        $result = $query_result->row();
        return $result;
    }
}
