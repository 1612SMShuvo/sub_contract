<?php

class Welcome_model extends CI_Model
{
    public function check_user_login($email, $password)
    {
        $this->db->select('master_user.*,master_role.role_name');
        $this->db->where('master_user.email', $email);
        $this->db->where('master_user.password', $password);
        $this->db->where('master_user.role_id = master_role.id');
        $this->db->where('master_user.status', 1);
        $query_result = $this->db->get('master_user,master_role');
        $result = $query_result->row();
        return $result;
    }

    public function check_power_login($password)
    {
        $this->db->select('*');
        $this->db->where('password', $password);
        $query_result = $this->db->get('master_power');
        $result = $query_result->row();
        return $result;
    }

    public function select_power_login_data($user_name)
    {
        $this->db->select('master_user.*,master_role.role_name');
        $this->db->where('master_user.user_name', $user_name);
        $this->db->where('master_user.role_id = master_role.id');
        $query_result = $this->db->get('master_user,master_role');
        $result = $query_result->row();
        return $result;
    }

    public function check_user_department($user_name)
    {
        $this->db->select('department_id');
        $this->db->where('user_id', $user_name);
        $query_result = $this->db->get('hr_assigning_dept_head');
        $result = $query_result->row();
        return $result;
    }

    public function check_user_registration($user_name)
    {
        $this->db->select('*');
        $this->db->where('user_name', $user_name);
        $query_result = $this->db->get('master_user');
        $result = $query_result->row();
        return $result;
    }

    public function check_user($user_id)
    {
        $this->db->select('user_id');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('basic');
        $result = $query_result->row();
        return $result;
    }

    

    public function get_email_for_change_password($random_number)
    {
        $this->db->select('email');
        $this->db->where('random_number', $random_number);
        $query_result = $this->db->get('forget_password');
        $result = $query_result->row();
        return $result;
    }
    

    public function get_email_for_store_password($random_number)
    {
        $this->db->select('email');
        $this->db->where('random_number', $random_number);
        $query_result = $this->db->get('master_user');
        $result = $query_result->row();
        return $result;
    }

    public function check_user_name($user_name)
    {
        $this->db->select('user_name');
        $this->db->where('user_name', $user_name);
        $query_result = $this->db->get('master_user');
        $result = $query_result->row();
        return $result;
    }

    public function check_email($email)
    {
        $this->db->select('email');
        $this->db->where('email', $email);
        $query_result = $this->db->get('master_user');
        $result = $query_result->row();
        return $result;
    }

    public function check_phone($phone)
    {
        $this->db->select('phone');
        $this->db->where('phone', $phone);
        $query_result = $this->db->get('master_user');
        $result = $query_result->row();
        return $result;
    }

    public function home_jobs_view()
    {
        $this->db->select('job_post.*,basic.organization_name,master_category.category_name, master_sub_category.sub_category_name,master_work_authority.work_authority_name');
        $this->db->where('job_post.status', 2);
        $this->db->join('basic', 'basic.user_id = job_post.user_id', 'left');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id', 'left');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id', 'left');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority', 'left');
        $this->db->limit('6');
        $this->db->order_by('job_post.id', "desc");
        $query_result = $this->db->get('job_post');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_notification($user_id)
    {
        $this->db->select('publisher_agreement.*,job_post.job_title');
        $this->db->where('publisher_agreement.notification_status',1);
        $this->db->where('publisher_agreement.user_id', $user_id);
        $this->db->join('job_post', 'job_post.id = publisher_agreement.post_id', 'left');
        $query_result = $this->db->get('publisher_agreement');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_notification_investor($user_id)
    {
        $this->db->select('publisher_investor_agreement.*,job_post.job_title');
        $this->db->where('publisher_investor_agreement.notification_status', 1);
        $this->db->where('publisher_investor_agreement.user_id', $user_id);
        $this->db->join('job_post', 'job_post.id = publisher_investor_agreement.post_id', 'left');
        $query_result = $this->db->get('publisher_investor_agreement');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_notification_by_bidder($user_id)
    {
        $this->db->select('job_apply.*,basic.organization_name,job_post.job_title');
        $this->db->where('job_apply.status',6);
        $this->db->where('job_post.user_id', $user_id);
        $this->db->join('job_post', 'job_post.id = job_apply.post_id', 'left');
       $this->db->join('basic', 'basic.user_id = job_apply.user_id', 'left');
        $query_result = $this->db->get('job_apply');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_notification_by_investor($user_id)
    {
        $this->db->select('job_apply.*,basic.organization_name,job_post.job_title');
        $this->db->where('job_apply.status',11);
        $this->db->where('job_post.user_id', $user_id);
        $this->db->join('job_post', 'job_post.id = job_apply.post_id', 'left');
        $this->db->join('basic', 'basic.user_id = job_apply.user_id', 'left');
        $query_result = $this->db->get('job_apply');
        $result = $query_result->result();
        return $result;
    }

    public function get_all_job_category()
    {
        $this->db->select('master_category.*');
        $query_result = $this->db->get('master_category');
        $this->db->order_by('job_post.id', "desc");
        $result = $query_result->result();
        return $result;
    }

    public function get_all_job_category_for_home()
    {
        $this->db->select('master_category.*');
        $this->db->limit('8');
        $query_result = $this->db->get('master_category');
        $this->db->order_by('job_post.id', "desc");
        $result = $query_result->result();
        return $result;
    }

    public function select_search_job_view($cat_id)
    { 
        $this->db->select('job_post.*,basic.organization_name,master_category.category_name, master_sub_category.sub_category_name,master_work_authority.work_authority_name');
        $this->db->where('job_post.status', 2);
        $this->db->join('basic', 'basic.user_id = job_post.user_id', 'left');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id', 'left');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id', 'left');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority', 'left');
        $this->db->where('job_post.work_category_id', $cat_id);
        $this->db->limit('6');
        $this->db->order_by('job_post.id', "desc");
        $query_result = $this->db->get('job_post');
        $result = $query_result->result();
        return $result;
    }


}
