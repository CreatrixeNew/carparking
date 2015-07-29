<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class error extends CI_Controller {
    

    public $layout = 'default';

    function __construct() {
        parent::__construct();

        $this->layout = 'default';
    }

	public function index()
	{

		$this->load->view('error');
                
	}
}
