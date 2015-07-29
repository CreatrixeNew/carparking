<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

    public $layout = 'default_inner';

    function __construct() {
        parent::__construct();
        ensureSession();
        $this->layout = 'default_inner';
    }

    public function index() {
        $this->load->view('dashboard');
    }

}
