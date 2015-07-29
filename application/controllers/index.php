<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class index extends CI_Controller {

    public $layout = 'default';

    function __construct() {
        parent::__construct();
       
        $this->layout = 'default';
    }

    public function index() {
        $this->load->view('index');
    }

    function login() {
        $this->form_validation->set_rules('username', 'username', 'trim|required', '');
        $this->form_validation->set_rules('password', 'password', 'trim|required', '');
        $this->form_validation->set_error_delimiters('<div class="remember-me">', '</div>');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('index');
        } else {
            $this->load->model('model_login');
            $hash_passwd = generatePassword($this->input->post('password'));
            $result = $this->model_login->admin_login($this->input->post('username'), $hash_passwd);
            if ($result) {
                foreach ($result as $row) {
                    $this->session->set_userdata(array('logged_in' => TRUE,
                        'user_id' => $row->user_id,
                        'user_first_name' => $row->user_first_name,
                        'user_last_name' => $row->user_last_name,
                        'user_email' => $row->user_email,
                        'user_type' => $row->user_type
                    ));
                }
                redirect($this->config->item('base_url') . 'dashboard');
            } else {
                $this->session->set_flashdata('message', _erMsg2('<h5 style="color:red">You Have Entered  Invalid Credentials</h5>'));
                redirect($this->config->item('base_url') . 'index');
            }
        }
    }

    function logout() {

        $this->session->userdata = array();
        $this->session->sess_destroy();
        $this->session->sess_create();
        redirect($this->config->item('base_url') . 'index');
    }

}

/* End of file index.php */
/* Location: ./application/controllers/index.php */
?>