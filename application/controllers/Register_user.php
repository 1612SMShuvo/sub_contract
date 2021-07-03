<?php

class Register_user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Register_user_model');

    }

    public function all_register_user()
    {

        $result['bidder'] = $this->Main_model->getValue("", 'basic', '*', "id desc");

        $this->load->view('admin/bidder/register_user_tpl',$result);
    }



}

?>