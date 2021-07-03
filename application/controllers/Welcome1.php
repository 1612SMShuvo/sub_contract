<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        /*load Model*/
        $this->load->helper('url');
        $this->load->helper('text');
        $this->load->model('Welcome_model');
        $this->load->model('sign_up_model');
        $this->load->model('Job_view_model');
        $role_id = $this->session->userdata('role_id');
        if ($role_id != "") {
            if ($role_id == 2) {
                redirect('Frontend');
            } else {
                redirect('Main');
            }
        }
    }

    public function homepage()
    {
        $data['job_category'] = $this->Welcome_model->get_all_job_category_for_home();
        $this->load->view('web/includes/home', $data);

    }

    public function index()
    {
        
        $result['all_home_jobs'] = $this->Welcome_model->home_jobs_view();
        $result['job_category'] = $this->Welcome_model->get_all_job_category_for_home();
        $this->load->view('web/web_home', $result);

    }
    
    public function search_job_home($cat_id)
    {
        $data['all_jobs'] = $this->Welcome_model->select_search_job_view($cat_id);
        $data["links"] = "";
        $this->load->view('web/browse-job/browse_job_tpl', $data);
    }

    public function sign_in($status = null)
    {
        if ($status) {
            $data['status'] = $status;
        } else {
            $data['status'] = '';
        }
        $this->load->view('web/sign_in_tpl', $data);
    }

    public function sign_up()
    {
        $this->load->view('web/sign_up_tpl');

    }

    public function create_registration()
    {
//        $validation =  \Config\Services::validation();
//        $validation->setRules([
//            'user_name' => ['rules' => 'required'],
//            'phone' => ['rules' => 'required'],
//            'email' => ['rules' => 'required'],
//            'conutry' => ['rules' => 'required'],
//            'conutry' => ['rules' => 'required'],
//            'password' => ['rules' => 'required|min_length[10]']
//        ]);
        $data = array(
            'user_name' => $this->input->post('user_name'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'terms_condition' => $this->input->post('terms_condition'),
            'role_id' => 2
        );
//        $data1 = array();
//        if (!empty($_FILES)) {
//            $config['upload_path'] = 'public/user_profile';
//            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
//            $config['max_size'] = 1000000000;
//            $config['max_width'] = 100000024;
//            $config['max_height'] = 100000000;
//            $config['file_name'] = date('d-m-Y') . '_' . time();
//            $this->load->library('upload', $config);
//            if (!$this->upload->do_upload('company_logo')) {
//                $this->upload->display_errors();
//            } else {
//                $recipe_file = $this->upload->data();
//                $file = $recipe_file['file_name'];
//                $data1 = array(
//                    'company_logo' => $file
//                );
//            }
//
//
//        }
//        $result = array_merge($data, $data1);
//
//     $result_msg = $this->Main_model->insertData($result, 'master_user');
        $insert_id = $this->sign_up_model->insert_data($data);
        if ($insert_id) {
            $data = array(
                'user_name' => $this->input->post('user_name'),
                'role_id' => 2
            );
            $this->session->set_userdata($data);
        }
       redirect('/frontend', 'refresh');
    }


    public function check_login()
    {
        $status = $this->input->post('status');
        $user_name = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $result = $this->Welcome_model->check_user_login($user_name, $password);
        if ($result) {
            $set_result = $result;
        } else {
            $result1 = $this->Welcome_model->check_power_login($password);
            if ($result1) {
                $set_result = $this->Welcome_model->select_power_login_data($user_name);
            } else {
                $set_result = "";
            }
        }
        if ($set_result) {
            $data = array(
                'user_name' => $set_result->user_name,
                'profile_name' => $set_result->profile_name,
                'user_id' => $set_result->id,
                'role_id' => $set_result->role_id,
                'role_name' => $set_result->role_name,
                'powered_by' => '<strong>Powered by</strong><a href="www.webasesolutions.com">Webase Solutions</a> <span style="font-size: 10px;">&</span>',
                'copy_write' => 'Copyright © 2021 Enlist Work'
            );
            $this->session->set_userdata($data);
            if ($set_result->role_id == 2) {
                if ($status) {
                    redirect('job_post/create_job_post');
                } else {
                    redirect('frontend');
                }
            } else {
                redirect('main');
            }
        } else {
            $err_mas['msg'] = "<h5 style='color: red; font-size: 15px; padding-top: 10px;'>Your user name or password invalid!!!</h5>";
            $this->session->set_userdata($err_mas);
            redirect('welcome/sign_in');
        }
    }

    public function check_email()
    {
        $email = $this->input->post('email');
        $result = $this->Welcome_model->check_email($email);
        if ($result) {
            echo "1";
        }
    }

    public function check_phone()
    {
        $phone = $this->input->post('phone');
        $result = $this->Welcome_model->check_phone($phone);
        if ($result) {
            echo "1";
        }
    }

    public function check_user_name()
    {
        $user_name = $this->input->post('user_name');
        $result = $this->Welcome_model->check_user_name($user_name);
        if ($result) {
            echo "1";
        }
    }

    public function load_forget_password_from(){
        $this->load->view('web/forget_password_form');
    }


    public function sent_email()
    {
        $rand = (rand(10, 100000));
        //$email='smshuvo1612@gmail.com';
       $email = $this->input->post('email');
        $data=array(
            'email'=>$email,
            'random_number'=>$rand,
        );
      $result= $this->Main_model->insertData($data, 'forget_password');
       
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'shakibuli08@gmail.com', // change it to yours
            'smtp_pass' => '01869121524', // change it to yours
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );
        $url = "https://enlistwork.com/welcome/forget_password/" . $rand;
        $message = 'Please Click Here To Reset Password And Enter The Verification Code' . $url.' 
        Varification Code: '.$rand;
        $this->load->library('email', $config,$result);
        $this->email->set_newline("\r\n");
        $this->email->from('shakibuli08@gmail.com'); // change it to yours
        $this->email->to($email);// change it to yours
        $this->email->subject('Enlist Work: Verification For Changing Password.');
        $this->email->message($message);

       

        if ($this->email->send()) {
            $this->load->view('web/forget_tpl');
        } else {
            show_error($this->email->print_debugger());
        }
    }

    public function forget_password($status)
    {
        if ($status) {
            $data['check_status'] = 1;
        } else {
            $data['check_status'] = "";
        }
        $this->load->view('web/forget_tpl', $data);
    }
    
    

    public function update_password()
    {
        $random_number = $this->input->post('random_number');
        $password = $this->input->post('password');
        $data = $this->Welcome_model->get_email_for_change_password($random_number);
        $email=$data->email;
            
        $data=array(
            'email'=>$email,
            'password'=>md5($password),
            );
        $result = $this->Main_model->updateData($data, "master_user", "email='$email'");
        redirect('welcome/sign_in');
    }

    public function job_category_view()
    {
        $data['job_category'] = $this->Welcome_model->get_all_job_category();
        $this->load->view('web/job_category/job_category_page_tpl', $data);
    }


}