<?php

class Boost extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Boost_model');
        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }

    }


    public function hosted_view()
    {
        $this->load->view('web/payment/hostedcheckout');
    }

    public function Boost_all()
    {
       
        $this->load->view('web/job/boost/boost_tpl');
    }

    public function all_boost_list()
    {
        $data['boost'] = $this->Boost_model->view_all_job_boost();
        $this->load->view('admin/boost/job_boost_list_tpl',$data);
    }


    public function delete_job_boost($id)
    {
        $this->Main_model->deleteData("id = '$id'", "job_boost_payment");
    }

    public function job_boost_active($id)
    {
        $data = array(
            'status' => 1
        );
        // $datas = array(
        //     ''
        // );
        $result = $this->Main_model->updateData($data, "job_boost_payment", "id='$id'");
        // $result2 = $this->Main_model->updateData($data, "job_boost_payment", "id='$id'");
        if ($result) {
            echo "1";
        }
    }

    public function job_boost_inactive($id)
    {
        $data = array(
            'status' => 0
        );
        $result = $this->Main_model->updateData($data, "job_boost_payment", "id='$id'");
        if ($result) {
            echo "1";
        }
    }
}