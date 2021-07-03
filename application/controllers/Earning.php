
<?php
class Earning extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Earning_model');
        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
        } else {
            redirect('welcome/sign_in');
        }
    }
    public function all_earning()
    {
        $user_id = $this->session->userdata("user_id");
        $data['payment_term'] = $this->Earning_model->select_all_payment_term($user_id);
        $data['total_budget'] = $this->Earning_model->select_all_budget($user_id);
        $data['total'] = $this->Earning_model->select_all_payterm($user_id);
        $this->load->view('web/earning/earning_tpl',$data);
    }
    public function all_earning_as_investor()
    {
        $user_id = $this->session->userdata("user_id");
        $data['investment_list'] = $this->Earning_model->select_all_investment_as_investor($user_id);
        $data['total_budget'] = $this->Earning_model->select_all_payment_term_as_investor($user_id);
        $data['total_request'] = $this->Earning_model->select_all_request_as_investor($user_id);
        $data['total_milestone'] = $this->Earning_model->select_all_milestone_as_investor($user_id);
        $data['total_remain'] = $this->Earning_model->select_all_remain_as_investor($user_id);
        $data['total_gainable'] = $this->Earning_model->select_all_gainable_as_investor($user_id);
        $this->load->view('web/earning/earning_as_investor_tpl',$data);
    }
} 