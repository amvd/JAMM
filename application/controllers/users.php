<?php

class users extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
	}

	public function user_profile($user_id)
	{
		$this->load->view('user_profile');
	}

	public function user_edit_profile()
	{
		$this->load->view('user_edit_profile');
	}

	public function user_bio_update()
	{
		$this->user->user_bio_update($this->input->post());
		redirect('/users/user_profile');
	}

	public function user_orders_this_week()
	{
		$this->load->view('user_orders_this_week');
	}

	public function user_orders()
	{
		$this->load->view('partials/orders');
	}

	public function user_reviews_this_week()
	{
		$this->load->view('user_reviews_this_week');
	}

	public function user_cart()
	{
		$this->load->view("cart");
	}

	public function order_form()
	{
		$this->load->view("order_form");
	}


}//end of users controller
