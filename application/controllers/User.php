<?php

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index()
    {
    }

// ===================================================================
// ==================user role start here=============================
// ===================================================================

    public function all_role()
    {
        $result['user_role'] = $this->Main_model->getValue("", 'master_role', '*', "id desc");
        $this->load->view('admin/user/user_role/user_role_tpl', $result);
    }

    public function load_add_user_role_from()
    {
        $this->load->view('admin/user/user_role/user_role_from');
    }

    public function create_user_role()
    {
        $data = array(
            'role_name' => $this->input->post('role_name'),
            'status' => 1
        );
        $result = $this->Main_model->insertData($data, 'master_role');
        if ($result) {
            $msg['load_success_message'] = "User role successfully added.";
            $this->load->view('messages/success_message', $msg);
        }
    }

    public function delete_role($id)
    {
        $this->Main_model->deleteData("id = '$id'", "master_role");
    }

    public function role_active($id)
    {
        $data = array(
            'status' => 1
        );
        $result = $this->Main_model->updateData($data, "master_role", "id='$id'");
        if ($result) {
            echo "1";
        }
    }

    public function role_inactive($id)
    {
        $data = array(
            'status' => 0
        );
        $result = $this->Main_model->updateData($data, "master_role", "id='$id'");
        if ($result) {
            echo "1";
        }
    }
// ===================================================================
// ==================user role end here===============================
// ===================================================================

// ===================================================================
// ==================user start here==================================
// ===================================================================

    public function all_user()
    {
        $this->config->load('pagination');
        $this->load->library("pagination");
        $config = array();
        $config["base_url"] = base_url() . "user/all_user";
        $emp_id = $this->input->post('emp_id');
        if ($emp_id) {
            $result = $this->User_model->countAllByLikeCondition("master_user.user_name", $emp_id);
            $config["total_rows"] = $result->count_total_rows;
        } else {
            $result = $this->User_model->countAll();
            $config["total_rows"] = $result->count_total_rows;
        }
        $config['per_page'] = 50;
        $config['uri_segment'] = 3;
        $config['num_links'] = 2;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        if ($emp_id) {
            $data["user"] = $this->User_model->select_user_by_user_name($config["per_page"], $page, $emp_id);
        } else {
            $data["user"] = $this->User_model->select_all_user($config["per_page"], $page);
        }
        $data["links"] = $this->pagination->create_links();
        if ($this->input->is_ajax_request()) {
            $this->load->view('admin/user/user/per_page_user', $data);
        } else {
            $this->load->view('admin/user/user/user_tpl', $data);
        }

    }

    public function load_add_user_from()
    {
        $result['user_role'] = $this->Main_model->getValue("", 'master_role', '*', "ID DESC");
        $this->load->view('admin/user/user/user_from', $result);
    }

    public function create_user()
    {
        $data = array(
            'user_name' => $this->input->post('user_name'),
            'password' => md5($this->input->post('password')),
            'role_id' => $this->input->post('role_id'),
            'status' => 1
        );
        $result_msg = $this->Main_model->insertData($data, 'master_user');
        if ($result_msg) {
            echo "Add User Successfully";
        }
    }

    public function delete_user($id)
    {
        $this->Main_model->deleteData("id = '$id'", "master_user");
    }

    public function user_active($id)
    {
        $data = array(
            'status' => 1
        );
        $result = $this->Main_model->updateData($data, "master_user", "id='$id'");
        if ($result) {
            echo "1";
        }
    }

    public function user_inactive($id)
    {
        $data = array(
            'status' => 0
        );
        $result = $this->Main_model->updateData($data, "master_user", "id='$id'");
        if ($result) {
            echo "1";
        }
    }

    public function check_duplicate_data()
    {
        $user_name = $this->input->post('user_name');
        $role_id = $this->input->post('role_id');
        $result = $this->User_model->check_duplicate_data($user_name, $role_id);
        if ($result) {
            echo "<p style='color: red; font-size: 16px;'>This user name already exit !!!</p>";
        } else {
            echo "";
        }
    }


    // ===================================================================
    // ==================user end here====================================
    // ===================================================================


    public function all_privilege()
    {
        $result['user_role'] = $this->Main_model->getValue("", 'master_role', '*', "ID DESC");
        $result['module'] = $this->Main_model->getValue("", 'master_module', '*', "ID DESC");
        $this->load->view('admin/user/privilege/privilege_tpl', $result);
    }

    public function load_user_data($user_id = null)
    {
        $data['module'] = $this->Main_model->getValue("", 'master_module', '*', "ID DESC");
        $data['user_id'] = $user_id;
        $this->load->view('admin/user/privilege/load_from', $data);
    }

    public function user_privilege()
    {
        error_reporting(E_ERROR);
        $user_id = $this->input->post('user_id');
        $module_id = $this->input->post('module_id');
        $menu_id = $this->input->post('menu_id');
        $sub_menu_id = $this->input->post('sub_menu_id');

        $this->User_model->delete_user_data($user_id);

        $check_value = '';
        foreach ($module_id as $key => $value) {
            $value = trim($value);
            if (empty($value)) {
            } else {
                $check_value = "not_empty";
            }
        }
        if ($check_value == "not_empty") {
            for ($i = 0; $i < count($module_id); $i++) {
                $main_mu = $module_id[$i];
                for ($j = 0; $j < count($menu_id[$main_mu]); $j++) {
                    $sub = $menu_id[$main_mu][$j];
                    for ($k = 0; $k < count($sub_menu_id[$main_mu][$sub]); $k++) {
                        $menu = $sub_menu_id[$main_mu][$sub][$k];
                        $data = array(
                            'user_id' => $user_id,
                            'module_id' => $main_mu,
                            'menu_id' => $sub,
                            'sub_menu_id' => $menu,
                            'status' => 1
                        );
                        $result = $this->Main_model->insertData($data, 'user_role_permission');
                    }
                }
            }
            if ($result) {
                echo "<div style='color: white; padding: 10px; text-align: center; background-color: green; height: 40px;'>Privilege added successfully.</div>";
            }
        } else {
            echo "<div style='color: white; padding: 10px; text-align: center; background-color: red; height: 40px;'>Please select any one !!!.</div>";
        }
    }

}

?>