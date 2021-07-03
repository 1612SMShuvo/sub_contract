<?php

class Subscription_Model extends CI_Model
{
    public function get_subscription_list()
    {

        $this->db->select('subscription_payment.*,basic.organization_name,master_user.user_name');
        $this->db->join('basic', 'basic.user_id = subscription_payment.user_id');
        $this->db->join('master_user', 'master_user.id = subscription_payment.user_id');
        $this->db->order_by('subscription_payment.created_at', "desc");
        $query_result = $this->db->get('subscription_payment');
        $result = $query_result->result();
        return $result;
    }
}