<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view("index");
	}

	public function login_reg()
	{
		$this->load->view("login-reg");
	}

	public function user_profile()
	{
		$this->load->view('user_profile');
	}

	public function user_orders_this_week()
	{
		$this->load->view('user_orders_this_week');
	}

	public function user_orders_this_month()
	{
		$this->load->view('user_orders_this_month');
	}

	public function user_orders_this_lifetime()
	{
		$this->load->view('user_orders_this_lifetime');
	}


	public function user_reviews_this_week()
	{
		$this->load->view('user_reviews_this_week');
	}
	public function user_reviews_this_month()
	{
		$this->load->view('user_reviews_this_month');
	}
	public function user_reviews_this_lifetime()
	{
		$this->load->view('user_reviews_this_lifetime');
	}



	public function chef_profile()
	{
		$this->load->view('chef_profile');
	}

	public function chef_menu()
	{
		$this->load->view('chef_menu');
	}

	public function chef_orders_this_week()
	{
		$this->load->view('chef_orders_this_week');
	}

	public function chef_reviews_this_week()
	{
		$this->load->view('chef_reviews_this_week');
	}
}

//end of main controller