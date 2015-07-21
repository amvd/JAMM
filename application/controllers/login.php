<?php 

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}



	public function login_reg()
	{
		$this->load->view("login_reg");
	}

	public function register()
	{
		redirect("Main");
	}

	public function login()
	{
		redirect("Main");
	}