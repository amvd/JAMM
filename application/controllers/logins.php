<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class logins extends CI_Controller {

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
		// var_dump($this->input->post()); die();
		$validation_errors = $this->Food->validate();
		if ($validation_errors == "valid") {
			if ($this->input->post('chef')) {
				$this->Food->register_chef($this->input->post());
				$chef_info = $this->Food->login_chef($this->input->post());
				$this->session->set_userdata($chef_info);
				// var_dump($this->session->all_userdata()); 
				// var_dump(array('chef_id' => $chef_info['id'])); die();
				redirect('/chefs/chef_profile/'.$chef_info['id']);
			} //if chef 
			else {
				$this->Food->register_user($this->input->post());
				$user_info = $this->Food->login_user($this->input->post());
				// var_dump($this->session->all_userdata()); 
				// var_dump(array('user_id' => $user_info['id'])); die();
				$this->session->set_userdata($user_info);
				redirect('/users/user_profile/'.$user_info['id']);
			} //if user
		} //if no errors
		else {
			// var_dump($this->session->flashdata('errors')); die();
			// $this->load->view('login_reg');
			redirect('/logins/login_page');
		} //if there are errors
	}//registration

	
	public function login() 
	{
		if($this->input->post('chef')) {
			$chef_info = $this->Food->login_chef($this->input->post());
			if ($chef_info) {
				$this->session->set_userdata($chef_info);
				// var_dump($this->session->all_userdata()); 
				// var_dump(array('chef_id' => $chef_info['id'])); die();
				redirect('/chefs/chef_profile/'.$chef_info['id']);
			}
			else {
				$this->session->set_flashdata('error', "Invalid credentials.");
				redirect('/logins/login_page/');
			}
		}//if chef logs in
		else{
			$user_info = $this->Food->login_user($this->input->post());
			if ($user_info) {
				$this->session->set_userdata($user_info);
				// var_dump($this->session->all_userdata()); 
				// var_dump(array('user_id' => $user_info['id'])); die();
				redirect('/users/user_profile/'.$user_info['id']);
			}
			else{
				$this->session->set_flashdata('error', "Invalid credentials.");
				redirect('/logins/login_page/');
			}
		}//else if the user logs in
	}//login

	public function logout() {
		$this->session->sess_destroy();
		redirect("/");
	}
}//end of logins controller

//in controllers, class names must be the same name as the file