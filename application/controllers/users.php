<?php

class Users extends CI_Controller {
	

	public function user_profile()
	{
		$this->load->view('user_profile');
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


}
