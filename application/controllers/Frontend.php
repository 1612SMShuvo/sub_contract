  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Frontend_model');
        $this->load->model('Welcome_model');
        $this->load->library('form_validation');
        $role_id = $this->session->userdata('role_id');
        if ($role_id == "") {
            redirect('Welcome');
        } else {
            if ($role_id == 1) {
                redirect('Main');
            }
        }
    }

    public function index()
    {
        $user_id = $this->session->userdata("user_id");
        $password=$this->Frontend_model->check_user_account($user_id);
        // print_r($password); exit();
        if($password==NULL){
            redirect('welcome/sign_in');
        }
        else{
            $basic = $this->Frontend_model->check_basic($user_id);
            $management = $this->Frontend_model->check_management($user_id);
            if (($basic) and ($management)) {
                redirect('frontend/create_work_area_profile');
            } else {
                $this->load->view('web/profile/profile_tpl');
            }
            
        }

    }



    public function edit_password()
    {
        $user_id = $this->session->userdata("user_id");
        $data['profile'] = $this->Frontend_model->select_own_profile($user_id);
        $this->load->view('web/profile/update_user_profile_tpl',$data);
    }

    public function update_user_password()
    {
        $user_id = $this->session->userdata("user_id");
        $pass=$this->input->post('password');
        $password=md5($pass);
//        print_r($password); exit();
        $data = array(
            'user_name' => $this->input->post('user_name'),
            'profile_name' => $this->input->post('profile_name'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
            'password' => $password,
            'terms_condition' => $this->input->post('terms_condition'),
        );
        $result_msg = $this->Main_model->updateData($data, "master_user", "id='$user_id'");
        if ($result_msg) {
            $data['profile'] = $this->Frontend_model->select_own_profile($user_id);
            $this->load->view('web/profile/update_user_profile_tpl',$data);
        }
    }

//=====================================Basic profile=====================================

 public function set_password()
    {
        $this->load->view('web/profile/set_password_tpl');
    }
    
    

    

    public function store_password()
    {
        $random_number = $this->input->post('random_number');
        $password = $this->input->post('password');
        $data = $this->Welcome_model->get_email_for_store_password($random_number);
        $email=$data->email;
            
        $data=array(
            'email'=>$email,
            'password'=>md5($password),
            );
        $result = $this->Main_model->updateData($data, "master_user", "email='$email'");
            if($result){
                redirect('welcome/sign_in');   
                }
            else{
            }
    }
    
    public function create_basic_profile()
    {
        $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
        $user_id = $this->session->userdata("user_id");
        $user_name = $this->session->userdata("user_name");
        $publisher = $this->input->post('publisher');
        $investor = $this->input->post('investor');
        $bidder = $this->input->post('bidder');
        $business_type = $this->input->post('business_type');
        $organization_name = $this->input->post('organization_name');
        $office_address = $this->input->post('office_address');
        $web_address = $this->input->post('web_address');
        $official_contact = $this->input->post('official_contact');

        $nid_card = $this->input->post('nid_card');
        $tin = $this->input->post('tin');
        $bin = $this->input->post('bin');

        $established = $this->input->post('established');
        $newDate = date("Y-m-d", strtotime($established));
        $number_of_employees = $this->input->post('number_of_employees');
        $years_of_experiences = $this->input->post('years_of_experiences');
        $result = $this->Frontend_model->check_user($user_id);
        if ($result) {
            echo "2";
        } else {
            $data = array(
                'publisher' => $publisher,
                'investor' => $investor,
                'bidder' => $bidder,
                'user_id' => $user_id,
                'business_type' => $business_type,
                'organization_name' => $organization_name,
                'office_address' => $office_address,
                'web_address' => $web_address,
                'official_contact' => $official_contact,
                'nid_card' => $nid_card,
                'tin' => $tin,
                'bin' => $bin,
                'established' => $newDate,
                'number_of_employees' => $number_of_employees,
                'years_of_experiences' => $years_of_experiences,
                'created_by' => $user_name,
                'date_and_time' => $dt->format("d-m-Y, g:i a"),
                'remarks' => 'Add'
            );
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('company_logo')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data1 = array(
                    'company_logo' => $file
                );
            }
        }
        $result = array_merge($data, $data1);
            $result_msg = $this->Main_model->insertData($result, 'basic');
            if ($result_msg) {
                echo "1";
            }
        }
    }

//=====================================Management Team=====================================

    public function create_management_team()
    {
        $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
        $user_id = $this->session->userdata("user_id");
        $user_name = $this->session->userdata("user_name");
        $name = $this->input->post('name');
        $designation = $this->input->post('designation');
        $nid = $this->input->post('nid');
        $tin = $this->input->post('tin');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $result = $this->Frontend_model->check_management_team($user_id, $name, $designation, $nid, $tin, $email, $phone);


        // Form Validations
        // $this->load->library('form_validation');
        // $this->form_validation->set_rules('name','Name','required');
        // $this->form_validation->set_rules('designation','Desination','trim|required|max_length[50]');
        // $this->form_validation->set_rules('nid','NID','trim|required|numeric|max_length[17]|unique:management_team');
        // $this->form_validation->set_rules('tin','TIN','trim|required|numeric|max_length[12]');
        // $this->form_validation->set_rules('email','Email','trim|required|unique:management_team');
        // $this->form_validation->set_rules('phone','Phone','trim|required|numeric|max_length[11]');
        // $this->form_validation->set_rules('profile_picture','Profile Picture ','trim|required|memes:jpg,jpeg,png,PNG,JPG,JPEG');
        // if($this->form_validation->run() == False){

        // }
        // else{

        // }
        if ($result) {
            echo "2";
        } else {
            $data = array(
                'user_id' => $user_id,
                'name' => $name,
                'designation' => $designation,
                'nid' => $nid,
                'tin' => $tin,
                'email' => $email,
                'phone' => $phone,
                'created_by' => $user_name,
                'date_and_time' => $dt->format("d-m-Y, g:i a"),
                'remarks' => 'Add'
            );
            $data1 = array();
            if (!empty($_FILES)) {
                $config['upload_path'] = 'public/user_profile';
                $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
                $config['max_size'] = 1000000000;
                $config['max_width'] = 100000024;
                $config['max_height'] = 100000000;
                $config['file_name'] = date('d-m-Y') . '_' . time();
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('profile_picture')) {
                    $this->upload->display_errors();
                } else {
                    $recipe_file = $this->upload->data();
                    $file = $recipe_file['file_name'];
                    $data1 = array(
                        'profile_picture' => $file
                    );
                }
            }
            $result = array_merge($data, $data1);
            $result_msg = $this->Main_model->insertData($result, 'management_team');
            if ($result_msg) {
                echo "1";
            }
        }
    }

    public function check_nid()
    {
        $nid = $this->input->post('nid');
        $result = $this->Frontend_model->check_nid($nid);
        if ($result) {
            echo "1";
        }
    }

    public function check_tin()
    {
        $tin = $this->input->post('tin');
        $result = $this->Frontend_model->check_tin($tin);
        if ($result) {
            echo "1";
        }
    }

    public function check_email()
    {
        $email = $this->input->post('email');
        $result = $this->Frontend_model->check_email($email);
        if ($result) {
            echo "1";
        }
    }

    public function check_phone()
    {
        $phone = $this->input->post('phone');
        $result = $this->Frontend_model->check_phone($phone);
        if ($result) {
            echo "1";
        }
    }

    //=====================================Management Team View=====================================

    public function management_team_view()
    {
        $user_id = $this->session->userdata("user_id");
        $data['management_team_info'] = $this->Frontend_model->select_management_info($user_id);
        $this->load->view('web/profile/profile_view_tpl', $data);
    }

    public function load_add_management_team_from()
    {
        $this->load->view('web/profile/add_management_team_form');
    }

    public function load_update_management_team_from()
    {
        $id = $this->input->post('id');
        $result['update_team'] = $this->Main_model->getValue("id='$id'", ' management_team', '*', "id desc");
        $this->load->view('web/profile/update_management_team_form', $result);
    }

    public function update_management_team()
    {
        $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
        $user_id = $this->session->userdata("user_id");
        $user_name = $this->session->userdata("user_name");
        $id = $this->input->post('id');
        $data = array(
            'user_id' => $user_id,
            'name' => $this->input->post('name'),
            'designation' => $this->input->post('designation'),
            'nid' => $this->input->post('nid'),
            'tin' => $this->input->post('tin'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'created_by' => $user_name,
            'date_and_time' => $dt->format("d-m-Y, g:i a"),
            'remarks' => 'Update'
        );
        $data1 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('profile_picture')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data1 = array(
                    'profile_picture' => $file
                );
            }
        }
        $all_data = array_merge($data, $data1);
        $result_msg = $this->Main_model->updateData($all_data, "management_team", "id='$id'");
        if ($result_msg) {
            echo "1";
        }
    }


    //=====================================Area of Work=====================================

    public function create_work_area_profile()
    {
        $user_id = $this->session->userdata("user_id");
        $data['category'] = $this->Frontend_model->select_work_area();
        $area = $this->Frontend_model->check_work_area($user_id);
        $experience = $this->Frontend_model->check_experience($user_id);
        if (($area) and ($experience)) {
            redirect('frontend/financial_legal');
        } else {
            $this->load->view('web/profile/work_experience_tpl', $data);
        }

    }

    public function add_work_area_profile()
    {
        $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
        $user_id = $this->session->userdata("user_id");
        $user_name = $this->session->userdata("user_name");
        $total = $this->input->post("total_number_of_fields");
        $area_of_works = $this->input->post("area_of_works");
        for ($i = 0; $i < $total; $i++) {
            $data = array(
                'category_id' => $area_of_works[$i],
                'user_id' => $user_id,
                'created_by' => $user_name,
                'date_and_time' => $dt->format("d-m-Y, g:i a"),
                'remarks' => 'Add'
            );
            $result_msg = $this->Main_model->insertData($data, 'area_of_work');
        }
        if ($result_msg) {
            echo "1";
        }
    }

    //=====================================Experience=====================================

    public function create_experience_profile()
    {
        $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
        $user_id = $this->session->userdata("user_id");
        $user_name = $this->session->userdata("user_name");
        $data = array(
            'user_id' => $user_id,
            'client_name' => $this->input->post('client_name'),
            'project_type' => $this->input->post('project_type'),
            'completion' => $this->input->post('completion'),
            'terms_condition' => $this->input->post('terms_condition'),
            'created_by' => $user_name,
            'date_and_time' => $dt->format("d-m-Y, g:i a"),
            'remarks' => 'Add'
        );

        // Form Validations
        // $this->load->library('form_validation');

        // $this->form_validation->set_rules('client_name','Client Name','trim|required');
        // $this->form_validation->set_rules('project_type','Project Type ','trim|required|numeric');
        // $this->form_validation->set_rules('completion','Completion Date','required|date');
        // if($this->form_validation->run() == False){

        // }
        // else{

        // }
        // form validation  ends
        $data1 = array();
        $data2 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 100000;
            $config['max_width'] = 100024;
            $config['max_height'] = 100000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('certificate')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data1 = array(
                    'certificate' => $file
                );
            }

            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 100000;
            $config['max_width'] = 100024;
            $config['max_height'] = 100000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('completion_letter')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data2 = array(
                    'completion_letter' => $file
                );
            }
        }
        $result = array_merge($data, $data1, $data2);
        $result_msg = $this->Main_model->insertData($result, 'experience');
        if ($result_msg) {
            echo "1";
        }
    }

    public function work_area_profile_view()

    {
        $user_id = $this->session->userdata("user_id");
        $data['experience_info'] = $this->Frontend_model->select_experience_info($user_id);
        $this->load->view('web/profile/work_area_profile_view_tpl', $data);
    }

    //========================================financial_legal=====================================================
    public function financial_legal()
    {
        $user_id = $this->session->userdata("user_id");
        $financial = $this->Frontend_model->check_financial($user_id);
        $legal = $this->Frontend_model->check_legal($user_id);
        if (($financial) and ($legal)) {
            redirect('frontend/portfolio_award');
        } else {
            $this->load->view('web/profile/financial_legal_tpl');
        }

    }

    //========================================FinancialProfile=====================================================

    public function create_financial_profile()
    {
        $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
        $user_id = $this->session->userdata("user_id");
        $user_name = $this->session->userdata("user_name");
        $data = array(
            'user_id' => $user_id,
            'terms_condition' => $this->input->post('terms_condition'),
            'created_by' => $user_name,
            'date_and_time' => $dt->format("d-m-Y, g:i a"),
            'remarks' => 'Add'
        );
        $data1 = array();
        $data2 = array();
        $data3 = array();
        $data4 = array();
        $data5 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = 100000;
            $config['max_width'] = 100024;
            $config['max_height'] = 100000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('financial_statement')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data1 = array(
                    'financial_statement' => $file
                );
            }

            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = 100000;
            $config['max_width'] = 100024;
            $config['max_height'] = 100000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('bank_solvency')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data2 = array(
                    'bank_solvency' => $file
                );
            }

            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = 100000;
            $config['max_width'] = 100024;
            $config['max_height'] = 100000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('credit')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data3 = array(
                    'credit' => $file
                );
            }
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = 100000;
            $config['max_width'] = 100024;
            $config['max_height'] = 100000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('bank_statement')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data4 = array(
                    'bank_statement' => $file
                );
            }
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = 100000;
            $config['max_width'] = 100024;
            $config['max_height'] = 100000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('liquid_money')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data5 = array(
                    'liquid_money' => $file
                );
            }
        }
        $result = array_merge($data, $data1, $data2, $data3, $data4, $data5);
        $result_msg = $this->Main_model->insertData($result, ' financial');
        if ($result_msg) {
            echo "1";
        }
    }

//========================================Legal Profile=====================================================
    public function create_legal_profile()
    {
        $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
        $user_id = $this->session->userdata("user_id");
        $user_name = $this->session->userdata("user_name");
        $data = array(
            'user_id' => $user_id,
            'terms_condition' => $this->input->post('terms_condition'),
            'created_by' => $user_name,
            'date_and_time' => $dt->format("d-m-Y, g:i a"),
            'remarks' => 'Add'
        );
        $data1 = array();
        $data2 = array();
        $data3 = array();
        $data4 = array();
        $data5 = array();
        $data6 = array();
        $data7 = array();
        $data8 = array();
        $data9 = array();
        $data10 = array();
        $data11 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 100000;
            $config['max_width'] = 100024;
            $config['max_height'] = 100000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('audit_report')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data1 = array(
                    'audit_report' => $file
                );
            }

            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 100000;
            $config['max_width'] = 100024;
            $config['max_height'] = 100000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('trade_license')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data2 = array(
                    'trade_license' => $file
                );
            }

            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 100000;
            $config['max_width'] = 100024;
            $config['max_height'] = 100000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('tin')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data3 = array(
                    'tin' => $file
                );
            }
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 100000;
            $config['max_width'] = 100024;
            $config['max_height'] = 100000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('brochure')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data4 = array(
                    'brochure' => $file
                );
            }
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 100000;
            $config['max_width'] = 100024;
            $config['max_height'] = 100000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('income_tax')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data5 = array(
                    'income_tax' => $file
                );
            }
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 100000;
            $config['max_width'] = 100024;
            $config['max_height'] = 100000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('brochure')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data6 = array(
                    'brochure' => $file
                );
            }
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 100000;
            $config['max_width'] = 100024;
            $config['max_height'] = 100000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('joint_venture')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data7 = array(
                    'joint_venture' => $file
                );
            }
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 100000;
            $config['max_width'] = 100024;
            $config['max_height'] = 100000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('board_of_resolution')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data8 = array(
                    'board_of_resolution' => $file
                );
            }
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 100000;
            $config['max_width'] = 100024;
            $config['max_height'] = 100000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('completion_letter')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data9 = array(
                    'completion_letter' => $file
                );
            }
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 100000;
            $config['max_width'] = 100024;
            $config['max_height'] = 100000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('work_orders')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data10 = array(
                    'work_orders' => $file
                );
            }

            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 100000;
            $config['max_width'] = 100024;
            $config['max_height'] = 100000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('bin')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data11 = array(
                    'bin' => $file
                );
            }
        }
        $result = array_merge($data, $data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8, $data9, $data10, $data11);
        $result_msg = $this->Main_model->insertData($result, ' legal');
        if ($result_msg) {
            echo "1";
        }
    }


    //========================================Portfolio Link AND Award certificate=====================================================
    public function portfolio_award()
    {
        $user_id = $this->session->userdata("user_id");
        $portfolio = $this->Frontend_model->check_portfolio($user_id);
        $award = $this->Frontend_model->check_award($user_id);
        if (($portfolio) and ($award)) {
            redirect('frontend/nominee_official_contract');
        }
        $this->load->view('web/profile/portfolio_award_tpl');
    }

//========================================Portfolio Link=====================================================


    public function create_portfolio_profile()
    {
        $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
        $user_id = $this->session->userdata("user_id");
        $user_name = $this->session->userdata("user_name");
        $data = array(
            'user_id' => $user_id,
            'project_name' => $this->input->post('project_name'),
            'project_type' => $this->input->post('project_type'),
            'description' => $this->input->post('description'),
            'project_value' => $this->input->post('project_value'),
            'client_name' => $this->input->post('client_name'),
            'link' => $this->input->post('link'),
            'terms_condition' => $this->input->post('terms_condition'),
            'created_by' => $user_name,
            'date_and_time' => $dt->format("d-m-Y, g:i a"),
            'remarks' => 'Add'
        );

        
        // $this->load->library('form_validation');

        //         $this->form_validation->set_rules('project_name','Project Name','trim|required|');
        //         $this->form_validation->set_rules('project_type','Project Type','trim|required');
        //         $this->form_validation->set_rules('description','Description','trim|required|max_length[100]');
        //         $this->form_validation->set_rules('project_value','Value','required|numeric');
        //         $this->form_validation->set_rules('client_name','Client Name','trim|required|');
        //         $this->form_validation->set_rules('link','Link','trim|valid_url');
        // if($this->form_validation->run() == False){

        // }
        // else{

        // }
        $data1 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 100000;
            $config['max_width'] = 100024;
            $config['max_height'] = 100000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('board_of_resolution')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data1 = array(
                    'board_of_resolution' => $file
                );
            }
        }
        $result = array_merge($data, $data1);
        $result_msg = $this->Main_model->insertData($result, 'portfolio_link');
        if ($result_msg) {
            echo "1";
        }

    }

//======================================Award Certification===============================================
    public function create_award_profile()
    {
        $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
        $user_id = $this->session->userdata("user_id");
        $user_name = $this->session->userdata("user_name");
        $data = array(
            'user_id' => $user_id,
            'award_name' => $this->input->post('award_name'),
            'categories_name' => $this->input->post('categories_name'),
            'authorized_by' => $this->input->post('authorized_by'),
            'description' => $this->input->post('description'),
            'terms_condition' => $this->input->post('terms_condition'),
            'created_by' => $user_name,
            'date_and_time' => $dt->format("d-m-Y, g:i a"),
            'remarks' => 'Add'
        );

        // Form Validation
        // $this->load->library('form_validation');

        //         $this->form_validation->set_rules('award_name','Award Name','trim|required|');
        //         $this->form_validation->set_rules('categories_name','Categories Name','trim|required');
        //         $this->form_validation->set_rules('authorized_by','Authorized By','trim|required');
        //         $this->form_validation->set_rules('image','Image Or PDF ','required|memes:jpg,JPG,JPEG,png,PNG,doc,pdf');
        //         $this->form_validation->set_rules('description','Description','trim|required');
        // if($this->form_validation->run() == False){

        // }
        // else{

        // }
        // End form validation
        $data1 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 100000;
            $config['max_width'] = 100024;
            $config['max_height'] = 100000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data1 = array(
                    'image' => $file
                );
            }
        }
        $result = array_merge($data, $data1);
        $result_msg = $this->Main_model->insertData($result, 'award_certification');
        if ($result_msg) {
            echo "1";
        }

    }

//=========================================Nominee And Official Contract===========================================================
    public function nominee_official_contract()
    {
        $user_id = $this->session->userdata("user_id");
        $official_contract = $this->Frontend_model->check_official_contract($user_id);
        $nominee = $this->Frontend_model->check_nominee($user_id);
        if (($official_contract) and ($nominee)) {
            redirect('job_view/all_job');
        }
        $this->load->view('web/profile/nominee_official_contract_tpl');
    }

//===========================================Nominee Profile===========================================================
    public function create_nominee_profile()
    {
        $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
        $user_id = $this->session->userdata("user_id");
        $user_name = $this->session->userdata("user_name");
        $data = array(
            'user_id' => $user_id,
            'name' => $this->input->post('name'),
            'designation' => $this->input->post('designation'),
            'nid' => $this->input->post('nid'),
            'tin' => $this->input->post('tin'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'terms_condition' => $this->input->post('terms_condition'),
            'created_by' => $user_name,
            'date_and_time' => $dt->format("d-m-Y, g:i a"),
            'remarks' => 'Add'
        );



        // Form Validation
        // $this->load->library('form_validation');

        //         $this->form_validation->set_rules('name','Name','trim|required|');
        //         $this->form_validation->set_rules('designation','Designation','trim|required');
        //         $this->form_validation->set_rules('nid','NID','trim|required|numeric|max_length[17]');
        //         $this->form_validation->set_rules('tin','TIN','required|numeric|max_length[13]');
        //         $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        //         $this->form_validation->set_rules('phone','Phone Number','trim|required'); 
        //         $this->form_validation->set_rules('image','Profile Picture','trim|required|memes:jpg,JPG,JPEG,png,PNG');
        // if($this->form_validation->run() == False){

        // }
        // else{

        // }
        // End form validation

        $data1 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 100000;
            $config['max_width'] = 100024;
            $config['max_height'] = 100000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data1 = array(
                    'image' => $file
                );
            }
        }
        $result = array_merge($data, $data1);
        $result_msg = $this->Main_model->insertData($result, ' nominee');
        if ($result_msg) {
            echo "1";
        }

    }

    //===========================Official Contract Person===============================================
    public function create_official_contract_profile()
    {
        $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
        $user_id = $this->session->userdata("user_id");
        $user_name = $this->session->userdata("user_name");
        $data = array(
            'user_id' => $user_id,
            'name' => $this->input->post('name'),
            'designation' => $this->input->post('designation'),
            'nid' => $this->input->post('nid'),
            'tin' => $this->input->post('tin'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'terms_condition' => $this->input->post('terms_condition'),
            'created_by' => $user_name,
            'date_and_time' => $dt->format("d-m-Y, g:i a"),
            'remarks' => 'Add'
        );


        // Form Validation
        // $this->load->library('form_validation');

        //         $this->form_validation->set_rules('name','Name','trim|required|');
        //         $this->form_validation->set_rules('designation','Designation','trim|required');
        //         $this->form_validation->set_rules('nid','NID','trim|required|numeric|max_length[17]');
        //         $this->form_validation->set_rules('tin','TIN','required|numeric|max_length[13]');
        //         $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        //         $this->form_validation->set_rules('phone','Phone Number','trim|required'); 
        // if($this->form_validation->run() == False){

        // }
        // else{

        // }
        // End form validation

        $result = array_merge($data);
        $result_msg = $this->Main_model->insertData($result, 'official_contract');
        if ($result_msg) {
            echo "1";
        }
    }

    public function registration_success()
    {
        $this->load->view('web/profile/registration_success_tpl');
    }

//=============================================View Profile Information=================================================================
    public function profile_all_details()
    {
        $user_id = $this->session->userdata("user_id");
        $data['user_id'] = $user_id;
        $data['user_profiles'] = $this->Frontend_model->user_profile_details($user_id);
        $data['area_of_work'] = $this->Frontend_model->area_of_work_details($user_id);
        $data['management_team'] = $this->Frontend_model->select_management_team($user_id);
        $data['nominee'] = $this->Frontend_model->select_nominee($user_id);
        $data['official_contract_person'] = $this->Frontend_model->select_official_contract_person($user_id);
        $data['experience'] = $this->Frontend_model->select_experience($user_id);
        $this->load->view('web/profile/profile_view/profile_details_tpl', $data);
    }

//================================================Update Basic Profile Information==========================================================================

    public function load_basic_from()
    {
        $user_id = $this->session->userdata("user_id");
        $result['update_basic'] = $this->Frontend_model->update_basic_info($user_id);
        $this->load->view('web/profile/profile_view/basic_update_form', $result);
    }

    public function update_basic_profile()
    {
        $id = $this->input->post('id');
        $data = array(
            'publisher' => $this->input->post('publisher'),
            'investor' => $this->input->post('investor'),
            'bidder' => $this->input->post('bidder'),
            'business_type' => $this->input->post('business_type'),
            'organization_name' => $this->input->post('organization_name'),
            'office_address' => $this->input->post('office_address'),
            'web_address' => $this->input->post('web_address'),
            'official_contact' => $this->input->post('official_contact'),
            'established' => $this->input->post('established'),

            'nid_card' => $this->input->post('nid_card'),
            'tin' => $this->input->post('tin'),
            'bin' => $this->input->post('bin'),

            'number_of_employees' => $this->input->post('number_of_employees'),
            'years_of_experiences' => $this->input->post('years_of_experiences'),
        );
        $data1 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('company_logo')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data1 = array(
                    'company_logo' => $file
                );
            }


        }
        $result = array_merge($data, $data1);
        $result_msg = $this->Main_model->updateData($result, 'basic', "id='$id'");
        if ($result_msg) {
            echo "1";
        }
    }


//================================================Update Management Profile Information=======================================================================
    public function load_management_team_from()
    {

        $id = $this->input->post("id");
        $result['update_management'] = $this->Frontend_model->update_management_team_info($id);
        $this->load->view('web/profile/profile_view/management_team_form', $result);
    }

    public function update_management_profile()
    {
        $id = $this->input->post('id');
        $data = array(
            'name' => $this->input->post('name'),
            'designation' => $this->input->post('designation'),
            'nid' => $this->input->post('nid'),
            'tin' => $this->input->post('tin'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),

        );
        $data1 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('profile_picture')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data1 = array(
                    'profile_picture' => $file
                );
            }
        }
        $all_data = array_merge($data, $data1);
        $result_msg = $this->Main_model->updateData($all_data, "management_team", "id='$id'");
        if ($result_msg) {
            echo "1";
        }
    }


    public function load_experience_from()
    {

        $id = $this->input->post('id');
        $result['update_experience'] = $this->Frontend_model->update_experience_info($id);
        $this->load->view('web/profile/profile_view/experience_update_form', $result);
    }

    public function update_experience_profile()
    {
        $id = $this->input->post('id');
        $data = array(
            'client_name' => $this->input->post('client_name'),
            'project_type' => $this->input->post('project_type'),
            'completion' => $this->input->post('completion'),
            'terms_condition' => $this->input->post('terms_condition'),
        );
        $data1 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('certificate')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data1 = array(
                    'certificate' => $file
                );
            }
        }

        $data2 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('completion_letter')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data2 = array(
                    'completion_letter' => $file
                );
            }
        }
        $all_data = array_merge($data, $data1, $data2);
        $result_msg = $this->Main_model->updateData($all_data, "experience", "id='$id'");
        if ($result_msg) {
            echo "1";
        }


    }


    public function load_legal_from()
    {
        $user_id = $this->session->userdata("user_id");
        $result['update_legal'] = $this->Frontend_model->update_legal_info($user_id);
        $this->load->view('web/profile/profile_view/legal_update_form', $result);
    }

    public function update_legal_profile()
    {
        $user_id = $this->session->userdata("user_id");
        $data = array(
            'terms_condition' => $this->input->post('terms_condition'),
        );
        $data1 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('audit_report')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data1 = array(
                    'audit_report' => $file
                );
            }
        }

        $data2 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('trade_license')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data2 = array(
                    'trade_license' => $file
                );
            }
        }

        $data3 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('tin')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data3 = array(
                    'tin' => $file
                );
            }
        }

        $data4 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('bin')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data4 = array(
                    'bin' => $file
                );
            }
        }

        $data5 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('income_tax')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data5 = array(
                    'income_tax' => $file
                );
            }
        }

        $data6 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('brochure')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data6 = array(
                    'brochure' => $file
                );
            }
        }

        $data7 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('joint_venture')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data7 = array(
                    'joint_venture' => $file
                );
            }
        }

        $data8 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('board_of_resolution')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data8 = array(
                    'board_of_resolution' => $file
                );
            }
        }
        $data9 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('completion_letter')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data9 = array(
                    'completion_letter' => $file
                );
            }
        }

        $data10 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('work_orders')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data10 = array(
                    'work_orders' => $file
                );
            }
        }

        $all_datas = array_merge($data, $data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8, $data9, $data10);
        $result_msg = $this->Main_model->updateData($all_datas, "legal", "user_id='$user_id'");
        if ($result_msg) {
            echo "1";
        }

    }

    public function load_nominee_from()
    {
        $user_id = $this->session->userdata("user_id");
        $result['update_nominee'] = $this->Frontend_model->update_nominee_info($user_id);
        $this->load->view('web/profile/profile_view/nominee_update_form', $result);
    }

    public function update_nominee_profile()
    {
        $id = $this->input->post('id');
        $data = array(
            'name' => $this->input->post('name'),
            'designation' => $this->input->post('designation'),
            'nid' => $this->input->post('nid'),
            'tin' => $this->input->post('tin'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'terms_condition' => $this->input->post('terms_condition'),
        );

        $data1 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data1 = array(
                    'image' => $file
                );
            }
        }

        $all_data = array_merge($data, $data1);
        $result_msg = $this->Main_model->updateData($all_data, "nominee", "id='$id'");
        if ($result_msg) {
            echo "1";
        }

    }

    public function load_official_contract_from()
    {
        $user_id = $this->session->userdata("user_id");
        $result['update_official_contract'] = $this->Frontend_model->update_official_contract_info($user_id);
        $this->load->view('web/profile/profile_view/update_official_contract_form', $result);
    }

    public function update_official_contract_profile()
    {
        $id = $this->input->post('id');
        $data = array(
            'name' => $this->input->post('name'),
            'designation' => $this->input->post('designation'),
            'nid' => $this->input->post('nid'),
            'tin' => $this->input->post('tin'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'terms_condition' => $this->input->post('terms_condition'),
        );
        $result_msg = $this->Main_model->updateData($data, "official_contract", "id='$id'");
        if ($result_msg) {
            echo "Official Contract Information Updated Successfully";
        }
    }

    public function load_award_certification_from()
    {
        $id = $this->input->post('id');
        $result['update_award_certification'] = $this->Frontend_model->update_award_certification_info($id);
        $this->load->view('web/profile/profile_view/award_certification_form', $result);
    }

    public function update_award_profile()
    {

        $id = $this->input->post('id');
        $data = array(
            'award_name' => $this->input->post('award_name'),
            'categories_name' => $this->input->post('categories_name'),
            'authorized_by' => $this->input->post('authorized_by'),
            'description' => $this->input->post('description'),
            'terms_condition' => $this->input->post('terms_condition'),
        );
        $data1 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data1 = array(
                    'image' => $file
                );
            }
        }

        $all_data = array_merge($data, $data1);

        $result_msg = $this->Main_model->updateData($all_data, "award_certification", "id='$id'");
        if ($result_msg) {
            echo "1";
        }

    }

    public function load_portfolio_link_from()
    {
        $id = $this->input->post('id');
        $result['update_portfolio_link'] = $this->Frontend_model->update_portfolio_link_info($id);
        $this->load->view('web/profile/profile_view/portfolio_link_form', $result);
    }

    public function update_portfolio_profile()
    {
        $id = $this->input->post('id');
        $data = array(
            'project_name' => $this->input->post('project_name'),
            'project_type' => $this->input->post('project_type'),
            'description' => $this->input->post('description'),
            'project_value' => $this->input->post('project_value'),
            'client_name' => $this->input->post('client_name'),
            'link' => $this->input->post('link'),
            'terms_condition' => $this->input->post('terms_condition'),
        );

        $data1 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('board_of_resolution')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data1 = array(
                    'board_of_resolution' => $file
                );
            }
        }

        $all_data = array_merge($data, $data1);
        $result_msg = $this->Main_model->updateData($all_data, "portfolio_link", "id='$id'");
        if ($result_msg) {
            echo "1";
        }
    }

    public function load_financial_from()
    {
        $user_id = $this->session->userdata("user_id");
        $result['update_financial'] = $this->Frontend_model->update_financial_info($user_id);
        $this->load->view('web/profile/profile_view/fianacial_update_form', $result);
    }

    public function update_financial_profile()
    {
        $id = $this->input->post('id');
        $data = array(
            'terms_condition' => $this->input->post('terms_condition'),
        );

        $data1 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('financial_statement')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data1 = array(
                    'financial_statement' => $file
                );
            }
        }
        $data2 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('financial_statement')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data2 = array(
                    'financial_statement' => $file
                );
            }
        }
        $data3 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('bank_solvency')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data3 = array(
                    'bank_solvency' => $file
                );
            }
        }
        $data4 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('credit')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data4 = array(
                    'credit' => $file
                );
            }
        }
        $data5 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('	bank_statement')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data5 = array(
                    'bank_statement' => $file
                );
            }
        }
        $data6 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 1000000000;
            $config['max_width'] = 100000024;
            $config['max_height'] = 100000000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('liquid_money')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data6 = array(
                    'liquid_money' => $file
                );
            }
        }
        $all_data = array_merge($data, $data1, $data2, $data3, $data4, $data5, $data6);
        $result_msg = $this->Main_model->updateData($all_data, "financial", "id='$id'");
        if ($result_msg) {
            echo "1";
        }
    }


//=========================================================Add New Experience===================================================================
    public function load_add_new_experience_from()
    {
        $this->load->view('web/profile/profile_view/add_experience_form');

    }

    public function add_experience_profile()
    {

        $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
        $user_id = $this->session->userdata("user_id");
        $user_name = $this->session->userdata("user_name");
        $data = array(
            'user_id' => $user_id,
            'client_name' => $this->input->post('client_name'),
            'project_type' => $this->input->post('project_type'),
            'completion' => $this->input->post('completion'),
            'terms_condition' => $this->input->post('terms_condition'),
            'created_by' => $user_name,
            'date_and_time' => $dt->format("d-m-Y, g:i a"),
            'remarks' => 'Add'
        );
        $data1 = array();
        $data2 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 100000;
            $config['max_width'] = 100024;
            $config['max_height'] = 100000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('certificate')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data1 = array(
                    'certificate' => $file
                );
            }

            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 100000;
            $config['max_width'] = 100024;
            $config['max_height'] = 100000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('completion_letter')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data2 = array(
                    'completion_letter' => $file
                );
            }
        }
        $result = array_merge($data, $data1, $data2);
        $result_msg = $this->Main_model->insertData($result, 'experience');
        if ($result_msg) {
            echo "1";
        }
    }


    public function load_add_portfolio_link_from()
    {
        $this->load->view('web/profile/profile_view/add_portfolio_link_from');
    }

    public function add_portfolio_link_profile()
    {
        $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
        $user_id = $this->session->userdata("user_id");
        $user_name = $this->session->userdata("user_name");
        $data = array(
            'user_id' => $user_id,
            'project_name' => $this->input->post('project_name'),
            'project_type' => $this->input->post('project_type'),
            'description' => $this->input->post('description'),
            'project_value' => $this->input->post('project_value'),
            'client_name' => $this->input->post('client_name'),
            'link' => $this->input->post('link'),
            'terms_condition' => $this->input->post('terms_condition'),
            'created_by' => $user_name,
            'date_and_time' => $dt->format("d-m-Y, g:i a"),
            'remarks' => 'Add'
        );
        $data1 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 100000;
            $config['max_width'] = 100024;
            $config['max_height'] = 100000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('board_of_resolution')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data1 = array(
                    'board_of_resolution' => $file
                );
            }
        }
        $result = array_merge($data, $data1);
        $result_msg = $this->Main_model->insertData($result, 'portfolio_link');
        if ($result_msg) {
            echo "1";
        }

    }

    public function load_add_award_certification_from()
    {
        $this->load->view('web/profile/profile_view/add_award_certification_form');
    }

    public function add_award_certification_profilee()
    {
        $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
        $user_id = $this->session->userdata("user_id");
        $user_name = $this->session->userdata("user_name");
        $data = array(
            'user_id' => $user_id,
            'award_name' => $this->input->post('award_name'),
            'categories_name' => $this->input->post('categories_name'),
            'authorized_by' => $this->input->post('authorized_by'),
            'description' => $this->input->post('description'),
            'terms_condition' => $this->input->post('terms_condition'),
            'created_by' => $user_name,
            'date_and_time' => $dt->format("d-m-Y, g:i a"),
            'remarks' => 'Add'
        );
        $data1 = array();
        if (!empty($_FILES)) {
            $config['upload_path'] = 'public/user_profile';
            $config['allowed_types'] = 'jpg|png|docx|doc|pdf';
            $config['max_size'] = 100000;
            $config['max_width'] = 100024;
            $config['max_height'] = 100000;
            $config['file_name'] = date('d-m-Y') . '_' . time();
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $this->upload->display_errors();
            } else {
                $recipe_file = $this->upload->data();
                $file = $recipe_file['file_name'];
                $data1 = array(
                    'image' => $file
                );
            }
        }
        $result = array_merge($data, $data1);
        $result_msg = $this->Main_model->insertData($result, 'award_certification');
        if ($result_msg) {
            echo "1";
        }

    }
}



