<?php

class Browse_job_model extends CI_Model
{
    public function browse_active_job($limit, $start)
    {
        $this->db->limit($limit, $start);
        $this->db->select('job_post.*,basic.organization_name,master_category.category_name, master_sub_category.sub_category_name,master_work_authority.work_authority_name');
        $this->db->where('job_post.status', 2);
        $this->db->join('basic', 'basic.user_id = job_post.user_id', 'left');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id', 'left');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id', 'left');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority', 'left');
        $this->db->order_by('job_post.id', "desc");
        $query_result = $this->db->get('job_post');
        $result = $query_result->result();
        return $result;
    }



    public function browse_all_boost_job()
    {
        $this->db->select('job_boost_payment.*,job_post.*,basic.organization_name,master_category.category_name, master_sub_category.sub_category_name,master_work_authority.work_authority_name');
        $this->db->join('job_post', 'job_post.id =  job_boost_payment.post_id');
        $this->db->where('job_boost_payment.status', 1);
        $this->db->join('basic', 'basic.user_id = job_boost_payment.user_id', 'left');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id', 'left');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id', 'left');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority', 'left');
        $this->db->limit(5);
        $this->db->order_by('job_boost_payment.id', "desc");
        $query_result = $this->db->get('job_boost_payment');
        $result = $query_result->result();
        return $result;
    }

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

    public function select_all_job_by_tender_id($limit, $start, $tender_id)
    {
        $this->db->limit($limit, $start);
        $this->db->select('job_post.*,basic.organization_name,master_category.category_name, master_sub_category.sub_category_name,master_work_authority.work_authority_name');
        $this->db->where('job_post.status', 2);
        $this->db->like('job_post.id', $tender_id);
        $this->db->join('basic', 'basic.user_id = job_post.user_id');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority');
        $this->db->order_by('job_post.id', "desc");
        $query_result = $this->db->get('job_post');
        $result = $query_result->result();
        return $result;
    }

    public function select_all_job_by_job_title($limit, $start, $job_title)
    {
        $this->db->limit($limit, $start);
        $this->db->select('job_post.*,basic.organization_name,master_category.category_name, master_sub_category.sub_category_name,master_work_authority.work_authority_name');
        $this->db->where('job_post.status', 2);
        $this->db->like('job_post.job_title', $job_title);
        $this->db->join('basic', 'basic.user_id = job_post.user_id');
        $this->db->join('master_category', 'master_category.id = job_post.work_category_id');
        $this->db->join('master_sub_category', 'master_sub_category.id = job_post.sub_category_id');
        $this->db->join('master_work_authority', 'master_work_authority.id = job_post.work_authority');
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

}
