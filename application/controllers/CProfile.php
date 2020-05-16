<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CProfile extends CI_Controller {

	public function __construct() {
        parent::__construct();

		// Load database
        //~ $this->load->model('MProfile');
        // Load libraries
        //~ $this->load->library('session');
		
    }
	
	public function index()
	{

		$this->load->view('profile');
		
	}
	
}
