<?php

class Subscription_View extends CI_Controller

{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Subscription_model');

        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }

    }
    
    public function subscription_all_show()
    {
        $this->load->view('web/subscription/subscription_view_tpl');
    }
    
    public function daily_subscription_show()
    {
        $this->load->view('web/subscription/daily_subscription_view_tpl');
    }

    public function subscription_list()
    {
        $data['subscription'] = $this->Subscription_model->get_subscription_list();
        $this->load->view('admin/subscription/subscription_list_tpl',$data);
    }


    public function delete_subscriber($id)
    {
        $this->Main_model->deleteData("id = '$id'", "subscription_payment");
    }

    public function subscriber_active($id)
    {
        $data = array(
            'status' => 1
        );
        $result = $this->Main_model->updateData($data, "subscription_payment", "id='$id'");
        if ($result) {
            echo "1";
        }
    }

    public function subscriber_inactive($id)
    {
        $data = array(
            'status' => 0
        );
        $result = $this->Main_model->updateData($data, "subscription_payment", "id='$id'");
        if ($result) {
            echo "1";
        }
    }

}