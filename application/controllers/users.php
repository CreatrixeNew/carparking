<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class users extends CI_Controller {

    public $layout = 'default_inner';

    function __construct() {
        parent::__construct();
        $this->layout = 'default_inner';
        ensureSession();
    }

    public function index() {
        $this->load->view('users/manage');
    }

    public function manage() {
        $this->load->model('model_users');
        $data['res'] = $this->model_users->fetchAllEmployees();
        $this->load->view('users/manage',$data);
    }
    
    public function proceedPayment() {
        $id = $this->uri->segment(4);
        $this->load->model('model_users');
        if ($id) {
        $data['res'] = $this->model_users->get_user_by_id($id);
         $this->load->view('users/proceed_payment', $data);
        }
    }
    
    public function payroll() {
        $this->load->model('model_users');
        $data['res'] = $this->model_users->fetchAllEmployees();
        $this->load->view('users/payroll',$data);
    }
    
     public function calculator() {
        $this->layout = "default_inner";
        $id = $this->uri->segment(4);
        $this->load->model('model_users');
        if ($id) {
            $data['res'] = $this->model_users->get_user_by_id($id);
            $this->load->view('users/calculator', $data);
        }
    }
    
    public function filterEmployees($status) {
        $this->layout = 'empty.php';
        $status= $_GET['status'];
//        print_r($status);exit;
        $this->load->model('model_users');
        $data['res'] = $this->model_users->fetchFilterEmployees($status);
        $this->load->view('users/filter_employees',$data);
    }
    
        public function sortEmployees($status) {
        $this->layout = 'empty.php';
        $date= $_GET['date'];
        $order= $_GET['sortBy'];
//        print_r($order.$date);exit;
        $this->load->model('model_users');
        $data['res'] = $this->model_users->fetchSortEmployees($date,$order);
//        print_r($data);exit;
        $this->load->view('users/sort_employees',$data);
    }

    public function add() {
        $this->load->model('model_users');
        $this->load->view('users/add', $data);
    }

    public function saveBio() {
        $data2 = $this->data;
        $this->load->model('model_users');
        $data = array();
        $loggedInUserId = $this->session->userdata('user_id');
        $data['user_first_name'] = addslashes($this->input->post('user_first_name'));
        $data['user_last_name'] = addslashes($this->input->post('user_last_name'));
        $data['user_gender'] = addslashes($this->input->post('user_gender'));
        $data['user_type'] = addslashes($this->input->post('user_type'));
        $data['user_dob'] = addslashes($this->input->post('user_dob'));
        $data['user_email'] = addslashes($this->input->post('blabla'));
        $passwd = $this->input->post('user_password');
        $hash_passwd = generatePassword($passwd);
        $data['user_password'] = $hash_passwd;
        $data['user_address'] = addslashes($this->input->post('user_address'));
        $data['user_phone'] = addslashes($this->input->post('user_phone'));
        $data['user_created_at'] = date('Y-m-d H:i:s');
        $data['user_created_by'] = $loggedInUserId;
        $data['user_joined_on'] = date('Y-m-d H:i:s');
        $data['user_shift'] = '';
        $data['user_image'] = '';
        $data['user_salary_rate'] = '';
        $data['user_bank_name'] = '';
        $data['user_account_title'] = '';
        $data['user_account_numb'] = '';
        $result = $this->model_users->saveBio($data);
        
        // Assigning full rights on profile creation 
		$this->load->model('model_acl');
		$this->model_acl->default_user_rights(  $result );
        $data2['user_id'] = $result;
        if ($result) {
            $this->session->set_flashdata('message', 'Employee added Successfully, Please Configure his job Details in Job Section.');
        }
        redirect($this->config->item('base_url') . 'users/edit/id/' . $result);
    }

    public function uploadFile() {
//        $this->layout = '';
        $error = "";
        $msg = "";
        $fileElementName = 'user_image';
        $config['upload_path'] = './uploads/user_images/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('user_image')) {
            $error = $this->upload->display_errors('', '');
            echo "{";
            echo "error: '" . $error . "',\n";
            echo "msg: '" . $msg . "'\n";
            echo "}";
            exit;
        } else {
            $data2['upload_data'] = $this->upload->data();
            $data = $data2['upload_data']['file_name'];
            $thumbnail = $data2['upload_data']['raw_name'] . $data2['upload_data']['file_ext'];
            $libconfig['image_library'] = 'gd2';
            $libconfig['source_image'] = 'uploads/user_images/' . $data2['upload_data']['file_name'];
            $libconfig['quality'] = "100%";
            $libconfig['create_thumb'] = TRUE;
            $libconfig['maintain_ratio'] = TRUE;
            $libconfig['new_image'] = 'uploads/user_images/thumbs';
            $libconfig['width'] = 125;
            $libconfig['height'] = 125;
            $this->load->library('image_lib', $libconfig);
            $this->image_lib->resize();
            $msg .=$thumbnail;
            echo "{";
            echo "error: '" . $error . "',\n";
            echo "msg: '" . $msg . "'\n";
            echo "}";
            exit;
        }
    }

    public function saveDetails() {
        $id = $this->input->post('user_id');
        $this->load->model('model_users');
        $data = array();
        $loggedInUserId = $this->session->userdata('user_id');
        $airports = $this->input->post('user_airports');
        $this->model_users->deletePreviousAirports($id);
        foreach ($airports as $a) {
            $a_data['assign_airport_id'] = $a;
            $a_data['assign_user_id'] = $id;
            $result = $this->model_users->addAirports($a_data);
        }
        $data['user_shift'] = addslashes($this->input->post('user_shift'));
        $data['user_contract'] = addslashes($this->input->post('user_contract'));
        $data['user_image'] = addslashes($this->input->post('hidden_file'));
        $data['user_salary_rate'] = addslashes($this->input->post('user_salary_rate'));
        $data['user_bank_name'] = addslashes($this->input->post('user_bank_name'));
        $data['user_email'] = addslashes($this->input->post('user_email'));
        $data['user_account_title'] = $this->input->post('user_account_title');
        $data['user_account_numb'] = addslashes($this->input->post('user_account_numb'));
        $data['user_updated_at'] = date('Y-m-d H:i:s');
        $data['user_updated_by'] = $loggedInUserId;
//        print_r($data);exit;
        $result = $this->model_users->saveDetails($data, $id);
        $data2['user_id'] = $result;
        if ($result) {
            $this->session->set_flashdata('message', 'Employee Job Settings Updated Successfully.');
        }
        redirect($this->config->item('base_url') . 'users/manage');
    }

    public function edit() {
        $this->layout = "default_inner";
        $id = $this->uri->segment(4);
        $this->load->model('model_users');
        if ($id) {
            $data['res'] = $this->model_users->get_user_by_id($id);
            $this->load->view('users/edit', $data);
        }
    }
    
     public function view() {
        $this->layout = "default_inner";
        $id = $this->uri->segment(4);
        $this->load->model('model_users');
        if ($id) {
            $data['res'] = $this->model_users->get_user_by_id($id);
            $this->load->view('users/view', $data);
        }
    }

    public function updateBio() {

        $this->load->model('model_users');
        $id = $this->input->post('user_id');

        $data = array();
        $loggedInUserId = $this->session->userdata('id');

        $data['user_first_name'] = addslashes($this->input->post('user_first_name'));
        $data['user_last_name'] = addslashes($this->input->post('user_last_name'));
        $data['user_gender'] = addslashes($this->input->post('user_gender'));
        $data['user_type'] = addslashes($this->input->post('user_type'));
        $data['user_email'] = addslashes($this->input->post('user_email'));
        $data['user_dob'] = $this->input->post('user_dob');
        $data['user_address'] = addslashes($this->input->post('user_address'));
        $data['user_phone'] = addslashes($this->input->post('user_phone'));
        $data['user_updated_at'] = date('Y-m-d H:i:s');
        $data['user_updated_by'] = $loggedInUserId;
        $res = $this->model_users->updateBio($data, $id);
        if ($res) {
            $this->session->set_flashdata('message', "Employee's Bio Updated Successfully");
        }
        redirect($this->config->item('base_url') . 'users/edit/id/' . $id);
    }
    
       public function publish() {
        $this->layout = '';
        $this->load->model('model_users');
        $id = $_POST['id'];
        $status = $_POST['user_status'];
        $result = $this->model_users->publishStatus($status, $id);
    }

}
