<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		// $this->session->sess_destroy(); die();
		$this->load->view("index");
	}

	public function test_maps()
	{
		$this->load->view("testmaps");
	}

	public function test_upload()
	{
		$this->load->view("upload_test");
	}
	
}
	

//end of main controller