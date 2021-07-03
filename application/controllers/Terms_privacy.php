<?php

class Terms_privacy extends CI_Controller
{
    public function privacy()
    {
        $this->load->view('web/terms_privacy/privacy_policy_tpl');
    }
    
    
    public function privacy_user()
    {
        $this->load->view('web/terms_privacy/privacy_policy_user_tpl');
    }

    public function terms_service()
    {
        $this->load->view('web/terms_privacy/terms_service_tpl');
    }
    
    
    public function terms_service_user()
    {
        $this->load->view('web/terms_privacy/terms_service_user_tpl');
    }

    public function aggrement_service()
    {
        $data['agreement'] = $this->Main_model->getValue("", 'company_agreements', '*', "ID DESC");
        $this->load->view('web/terms_privacy/aggrement_page_tpl',$data);
    }
    public function aggrement_service2()
    {
        $data['agreement'] = $this->Main_model->getValue("", 'company_agreements', '*', "ID DESC");
        $this->load->view('web/terms_privacy/aggrement_page_tpl2',$data);
    }


//==============================After Login ===============================================================================
    public function terms_service2()
    {
        $this->load->view('web/terms_privacy/terms_service2_tpl');
    }
    public function privacy2()
    {
        $this->load->view('web/terms_privacy/privacy_policy2_tpl');
    }

}