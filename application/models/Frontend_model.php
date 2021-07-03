<?php

class Frontend_model extends CI_Model
{
    public function check_user_department($user_name)
    {
        $this->db->select('department_id');
        $this->db->where('user_id', $user_name);
        $query_result = $this->db->get('hr_assigning_dept_head');
        $result = $query_result->row();
        return $result;
    }

    public function check_user_account($user_id)
    {
        $this->db->select('password');
        $this->db->where('id', $user_id);
        $query_result = $this->db->get('master_user');
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

    public function check_management_team($user_id, $name, $designation, $nid, $tin, $email, $phone)
    {
        $this->db->select('user_id');
        $this->db->where('user_id', $user_id);
        $this->db->where('name', $name);
        $this->db->where('designation', $designation);
        $this->db->where('nid', $nid);
        $this->db->where('tin', $tin);
        $this->db->where('email', $email);
        $this->db->where('phone', $phone);
        $query_result = $this->db->get('management_team');
        $result = $query_result->row();
        return $result;
    }

    public function check_nid($nid)
    {
        $this->db->select('nid');
        $this->db->where('nid', $nid);
        $query_result = $this->db->get('management_team');
        $result = $query_result->row();
        return $result;
    }

    public function check_tin($tin)
    {
        $this->db->select('tin');
        $this->db->where('tin', $tin);
        $query_result = $this->db->get('management_team');
        $result = $query_result->row();
        return $result;
    }

    public function check_email($email)
    {
        $this->db->select('email');
        $this->db->where('email', $email);
        $query_result = $this->db->get('management_team');
        $result = $query_result->row();
        return $result;
    }

    public function check_phone($phone)
    {
        $this->db->select('phone');
        $this->db->where('phone', $phone);
        $query_result = $this->db->get('management_team');
        $result = $query_result->row();
        return $result;
    }

    public function select_management_info($user_id)
    {
        $this->db->select('*');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('management_team');
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


    public function select_work_area()
    {
        $this->db->select('*');
        $this->db->where('status', 1);
        $query_result = $this->db->get('master_category');
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
public function select_experience_info($user_id){
    $this->db->select('*');
    $this->db->where('user_id', $user_id);
    $query_result = $this->db->get('experience');
    $result = $query_result->result();
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

//======================================Update Profile Information===========================================================
    public function update_basic_info($user_id)
    {
        $this->db->select('basic.*', 'master_user.*');
        $this->db->where('basic.user_id', $user_id);
        $this->db->join('master_user', 'master_user.id = basic.user_id', 'left');
        $query_result = $this->db->get('basic');
        $result = $query_result->result();
        return $result;
    }

    public function update_management_team_info($id)
    {
        $this->db->select('management_team.*', 'master_user.*');
        $this->db->where('management_team.id', $id);
        $this->db->join('master_user', 'master_user.id = management_team.user_id', 'left');
        $query_result = $this->db->get('management_team');
        $result = $query_result->result();
        return $result;
    }

    public function update_nominee_info($user_id)
    {
        $this->db->select('nominee.*', 'master_user.*');
        $this->db->where('nominee.user_id', $user_id);
        $this->db->join('master_user', 'master_user.id = nominee.user_id', 'left');
        $query_result = $this->db->get('nominee');
        $result = $query_result->result();
        return $result;
    }


    public function update_experience_info($id)
    {
        $this->db->select('experience.*', 'master_user.user_id');
        $this->db->where('experience.id', $id);
        $this->db->join('master_user', 'master_user.id = experience.user_id', 'left');
        $query_result = $this->db->get('experience');
        $result = $query_result->result();
        return $result;
    }

    public function update_legal_info($user_id)
    {
        $this->db->select('legal.*', 'master_user.*');
        $this->db->where('legal.user_id', $user_id);
        $this->db->join('master_user', 'master_user.id = legal.user_id', 'left');
        $query_result = $this->db->get('legal');
        $result = $query_result->result();
        return $result;
    }

    public function update_official_contract_info($user_id)
    {
        $this->db->select('official_contract.*', 'master_user.*');
        $this->db->where('official_contract.user_id', $user_id);
        $this->db->join('master_user', 'master_user.id = official_contract.user_id', 'left');
        $query_result = $this->db->get('official_contract');
        $result = $query_result->result();
        return $result;
    }

    public function update_award_certification_info($id)
    {
        $this->db->select('award_certification.*', 'master_user.*');
        $this->db->where('award_certification.id', $id);
        $this->db->join('master_user', 'master_user.id = award_certification.user_id', 'left');
        $query_result = $this->db->get('award_certification');
        $result = $query_result->result();
        return $result;
    }

    public function update_portfolio_link_info($id)
    {
        $this->db->select('portfolio_link.*', 'master_user.id');
        $this->db->where('portfolio_link.id', $id);
        $this->db->join('master_user', 'master_user.id = portfolio_link.user_id', 'left');
        $query_result = $this->db->get('portfolio_link');
        $result = $query_result->result();
        return $result;
    }

    public function update_financial_info($user_id)
    {
        $this->db->select('financial.*', 'master_user.*');
        $this->db->where('financial.user_id', $user_id);
        $this->db->join('master_user', 'master_user.id = financial.user_id', 'left');
        $query_result = $this->db->get('financial');
        $result = $query_result->result();
        return $result;
    }

    public function select_own_profile($user_id)
    {
        $this->db->select('master_user.*');
        $this->db->where('id', $user_id);
        $query_result = $this->db->get('master_user');
        $result = $query_result->row();
        return $result;
    }
    //======================================Check Profile Create====================================================================================
    public function check_basic($user_id)
    {
        $this->db->select('user_id');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('basic');
        $result = $query_result->row();
        return $result;
    }

    public function check_management($user_id)
    {
        $this->db->select('user_id');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('management_team');
        $result = $query_result->row();
        return $result;
    }

    public function check_work_area($user_id)
    {
        $this->db->select('user_id');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('area_of_work');
        $result = $query_result->row();
        return $result;
    }

    public function check_experience($user_id)
    {
        $this->db->select('user_id');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('experience');
        $result = $query_result->row();
        return $result;
    }

    public function check_financial($user_id)
    {
        $this->db->select('user_id');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('financial');
        $result = $query_result->row();
        return $result;
    }

    public function check_legal($user_id)
    {
        $this->db->select('user_id');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('legal');
        $result = $query_result->row();
        return $result;
    }

    public function check_portfolio($user_id)
    {
        $this->db->select('user_id');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('portfolio_link');
        $result = $query_result->row();
        return $result;
    }

    public function check_award($user_id)
    {
        $this->db->select('user_id');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('award_certification');
        $result = $query_result->row();
        return $result;
    }


    public function check_official_contract($user_id)
    {
        $this->db->select('user_id');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('official_contract');
        $result = $query_result->row();
        return $result;
    }

    public function check_nominee($user_id)
    {
        $this->db->select('user_id');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('nominee');
        $result = $query_result->row();
        return $result;
    }


//============================Check Profile Then post Job============================================================
    public function basic_info($user_id)
    {
        $this->db->select('basic.user_id,basic.publisher');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('basic');
        $result = $query_result->row();
        return $result;
    }
    public function basic_info_bidder($user_id)
    {
        $this->db->select('job_post.user_id,basic.user_id,basic.publisher');
        $this->db->where('job_post.user_id', $user_id);
        $this->db->join('basic', 'basic.user_id = job_post.user_id');
        $query_result = $this->db->get('job_post');
        $result = $query_result->row();
        return $result;
    }


    public function management_info($user_id)
    {
        $this->db->select('user_id');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('management_team');
        $result = $query_result->row();
        return $result;
    }

    public function work_area_info($user_id)
    {
        $this->db->select('user_id');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('area_of_work');
        $result = $query_result->row();
        return $result;
    }

    public function experience_info($user_id)
    {
        $this->db->select('user_id');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('experience');
        $result = $query_result->row();
        return $result;
    }

    public function financial_info($user_id)
    {
        $this->db->select('user_id');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('financial');
        $result = $query_result->row();
        return $result;
    }

    public function legal_info($user_id)
    {
        $this->db->select('user_id');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('legal');
        $result = $query_result->row();
        return $result;
    }

    public function award_certification_info($user_id)
    {
        $this->db->select('user_id');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('award_certification');
        $result = $query_result->row();
        return $result;
    }

    public function portfolio_link_info($user_id)
    {
        $this->db->select('user_id');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('portfolio_link');
        $result = $query_result->row();
        return $result;
    }

    public function official_contract_info($user_id)
    {
        $this->db->select('user_id');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('official_contract');
        $result = $query_result->row();
        return $result;
    }

    public function nominee_info($user_id)
    {
        $this->db->select('user_id');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('nominee');
        $result = $query_result->row();
        return $result;
    }

    public function select_area_of_work($user_id){
        $this->db->select('*');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get('area_of_work');
        $result = $query_result->result();
        return $result;
    }

    public function area_of_work_details($id)
    {
        $this->db->select('master_category.category_name');
        $this->db->where('area_of_work.user_id', $id);
        $this->db->join('master_category', 'master_category.id = area_of_work.category_id','left');
        $query_result = $this->db->get('area_of_work');
        $result = $query_result->result();
        return $result;
    }
}
