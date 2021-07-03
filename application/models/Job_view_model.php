<?php

class Job_view_model extends CI_Model
{
    public function all_sub_category($category_id)
    {
        $this->db->select('master_sub_category.sub_category_name,master_sub_category.id');
        $this->db->where('master_sub_category.category_id', $category_id);
        $this->db->join('master_category', 'master_category.id = master_sub_category.category_id');
        $this->db->order_by('master_category.id', "desc");
        $query_result = $this->db->get('master_sub_category');
        $result = $query_result->result();
        return $result;
    }

    public function countAll()
    {
        $this->db->select('count(id) total_rows');
        $this->db->where('job_post.status', 2);
        $query_result = $this->db->get('job_post');
        $result = $query_result->row();
        return $result;
    }

    public function countAllByCategory($category_id)
    {
        $this->db->select('count(id) total_rows');
        $this->db->where('job_post.status', 2);
        $this->db->where('job_post.sub_category_id', $category_id);
        $query_result = $this->db->get('job_post');
        $result = $query_result->row();
        return $result;
    }

    public function countAllByTenderId($tender_id)
    {
        $this->db->select('count(id) total_rows');
        $this->db->where('job_post.status', 2);
        $this->db->like('job_post.id', $tender_id);
        $query_result = $this->db->get('job_post');
        $result = $query_result->row();
        return $result;
    }

    public function countAllByJobTitle($title)
    {
        $this->db->select('count(id) total_rows');
        $this->db->where('job_post.status', 2);
        $this->db->like('job_post.job_title', $title);
        $query_result = $this->db->get('job_post');
        $result = $query_result->row();
        return $result;
    }

    public function countAllByCategoryName($category_name)
    {
        $this->db->select('count(job_post.id) total_rows');
        $this->db->like('master_category.category_name', $category_name);
        $this->db->join('job_post', 'job_post.work_category_id = master_category.id');
        $this->db->where('job_post.status', 2);
        $query_result = $this->db->get('master_category');
        $result = $query_result->row();
        return $result;
    }

    public function countAllBySubCategory($sub_category_name)
    {
        $this->db->select('count(job_post.id) total_rows');
        $this->db->like('master_sub_category.sub_category_name', $sub_category_name);
        $this->db->join('job_post', 'job_post.sub_category_id = master_sub_category.id');
        $this->db->where('job_post.status', 2);
        $query_result = $this->db->get('master_sub_category');
        $result = $query_result->row();
        return $result;
    }

    public function select_all_active_job($limit, $start, $id)
    {
        $this->db->limit($limit, $start);
        $this->db->select('job_post.*,basic.organization_name,master_category.category_name, master_sub_category.sub_category_name,master_work_authority.work_authority_name');
        $this->db->where('job_post.status', 2);
        $this->db->join('basic', 'basic.user_id = job_post.user_id', 'left');
        $this->db->join('area_of_work', 'area_of_work.category_id = job_post.work_category_id', 'left');
        $this->db->where('area_of_work.user_id', $id);
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id', 'left');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id', 'left');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority', 'left');
        $this->db->order_by('job_post.id', "desc");
        $query_result = $this->db->get('job_post');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_active_category_wise_job($limit, $start, $id)
    {
        $this->db->limit($limit, $start);
        $this->db->select('job_post.*,basic.organization_name,master_category.category_name, master_sub_category.sub_category_name,master_work_authority.work_authority_name');
        $this->db->where('job_post.status', 2);
        $this->db->where('job_post.sub_category_id', $id);
        $this->db->join('basic', 'basic.user_id = job_post.user_id');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority');
        $this->db->order_by('job_post.id', "desc");
        $query_result = $this->db->get('job_post');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_job_by_tender_id($limit, $start, $tender_id, $user_id)
    {
        $this->db->limit($limit, $start);
        $this->db->select('job_post.*,basic.organization_name,master_category.category_name, master_sub_category.sub_category_name,master_work_authority.work_authority_name');
        $this->db->where('job_post.status', 2);
        $this->db->like('job_post.id', $tender_id);
        $this->db->join('basic', 'basic.user_id = job_post.user_id');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority');
        $this->db->join('area_of_work', 'area_of_work.category_id = job_post.work_category_id');
        $this->db->where('area_of_work.user_id', $user_id);
        $this->db->order_by('job_post.id', "desc");
        $query_result = $this->db->get('job_post');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_job_by_job_title($limit, $start, $job_title, $user_id)
    {
        $this->db->limit($limit, $start);
        $this->db->select('job_post.*,basic.organization_name,master_category.category_name, master_sub_category.sub_category_name,master_work_authority.work_authority_name');
        $this->db->where('job_post.status', 2);
        $this->db->like('job_post.job_title', $job_title);
        $this->db->join('basic', 'basic.user_id = job_post.user_id');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority');
        $this->db->join('area_of_work', 'area_of_work.category_id = job_post.work_category_id');
        $this->db->where('area_of_work.user_id', $user_id);
        $this->db->order_by('job_post.id', "desc");
        $query_result = $this->db->get('job_post');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_job_by_category_name($limit, $start, $category_name)
    {
        $this->db->limit($limit, $start);
        $this->db->select('job_post.*,basic.organization_name,master_category.category_name, master_sub_category.sub_category_name,master_work_authority.work_authority_name');
        $this->db->where('job_post.status', 2);
        $this->db->join('basic', 'basic.user_id = job_post.user_id');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority');
        $this->db->like('master_category.category_name', $category_name);
        $this->db->order_by('job_post.id', "desc");
        $query_result = $this->db->get('job_post');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_job_by_sub_category_name($limit, $start, $sub_category_name)
    {
        $this->db->limit($limit, $start);
        $this->db->select('job_post.*,basic.organization_name,master_category.category_name, master_sub_category.sub_category_name,master_work_authority.work_authority_name');
        $this->db->where('job_post.status', 2);
        $this->db->join('basic', 'basic.user_id = job_post.user_id');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority');
        $this->db->like('master_sub_category.sub_category_name', $sub_category_name);
        $this->db->order_by('job_post.id', "desc");
        $query_result = $this->db->get('job_post');
        $result = $query_result->result();
        return $result;
    }

    public function select_legal_information($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query_result = $this->db->get('job_post');
        $result = $query_result->row();
        return $result;
    }

    public function select_all_job_apply_bidder($id)
    {
        $this->db->select('count(id) total');
        $this->db->where('post_id', $id);
        $this->db->where('job_type', 1);
        $query_result = $this->db->get('job_apply');
        $result = $query_result->row();
        return $result;
    }

    public function select_all_job_apply_investor($id)
    {
        $this->db->select('count(id) total');
        $this->db->where('post_id', $id);
        $this->db->where('job_type', 2);
        $query_result = $this->db->get('job_apply');
        $result = $query_result->row();
        return $result;
    }

    public function select_all_published_job($id)
    {
        $this->db->select('count(id) total');
        $this->db->where('status', 2);
        $this->db->where('user_id', $id);
        $query_result = $this->db->get('job_post');
        $result = $query_result->row();
        return $result;
    }

    public function select_all_complete_job($id)
    {
        $this->db->select('count(id) total');
        $this->db->where('status', 6);
        $this->db->where('user_id', $id);
        $query_result = $this->db->get('job_post');
        $result = $query_result->row();
        return $result;
    }

    public function select_all_bidd_job($id)
    {
        $this->db->select('count(id) total');
        $this->db->where('status',6);
        $this->db->where('job_type', 1);
        $this->db->where('user_id', $id);
        $query_result = $this->db->get('job_apply');
        $result = $query_result->row();
        return $result;
    }

    public function select_all_invest_job($id)
    {
        $this->db->select('count(id) total');
        $this->db->where('status',11);
        $this->db->where('job_type', 2);
        $this->db->where('user_id', $id);
        $query_result = $this->db->get('job_apply');
        $result = $query_result->row();
        return $result;
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