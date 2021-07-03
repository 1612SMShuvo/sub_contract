<?php

class Certificate extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Certificate_model');

    }
public function all_certificate(){
    $this->load->view('web/certificate/certificate_tpl');
}
   
}

       
