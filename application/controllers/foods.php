<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class foods extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Food');
		$this->output->enable_profiler();
	}

	public function index()
	{
		// $this->session->sess_destroy(); die();
		$this->load->view('index');
	}

	public function login_page() {
		$this->load->view('login_reg');
	}

	public function registration() 
	{
		var_dump($this->input->post()); die();
		$validation_errors = $this->Food->validate();
		if ($validation_errors == "valid") {
			if ($this->input->post('chef')) {
				$this->Food->register_chef($this->input->post());
				$chef_info = $this->Food->login_chef($this->input->post());
				$this->session->set_session($chef_info);	
			} //if chef 
			else {
				$this->Food->register_user($this->input->post());
				$user_info = $this->Food->login_user($this->input->post());
				$this->session->set_session($user_info);
			} //if user
		} //if no errors
		else {
			// var_dump($this->session->flashdata('errors')); die();
			// $this->load->view('login_reg');
			redirect('/foods/login_page');
		} //if there are errors
	}//registration

	
	public function login() 
	{
		var_dump($this->input->post()); die();
		if($this->input->post('chef')) {
			$chef_info = $this->Food->login_chef($this->input->post());
			if ($chef_info) 
				$this->session->set_userdata($chef_info);
			else {
				$this->session->set_flashdata('error', "Invalid credentials.");
				redirect('/foods/login_page');
			}
		}//if chef logs in
		else{
			$user_info = $this->Food->login_user($this->input->post());
			if ($user_info) 
				$this->session->set_userdata($user_info);
			else{
				$this->session->set_flashdata('error', "Invalid credentials.");
				redirect('/foods/login_page');
			}
		}//else if the user logs in
	}//login








}//end of main controller

//in controllers, class names must be the same name as the file