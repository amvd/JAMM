<?php

class users extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
	}

	public function user_profile($user_id)
	{
		
		$this->load->view('user_profile', ["user" => $this->user->get_user_by_id($user_id)]);
	}

	public function user_edit_profile($id)
	{
		$user = $this->user->get_user_by_id($id);
		$this->load->view('user_edit_profile', ["user" => $user]);
	}

	public function user_bio_update()
	{
		$this->user->user_bio_update($this->input->post());
		redirect('/users/user_profile/' . $this->session->userdata('id'));
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

	public function user_orders_this_week($orders)
	{
		$this->load->view('user_orders_this_week', array('orders' => $orders));
	}

	public function get_user_orders_this_week()
	{
		$orders = $this->user->get_user_orders_this_week($this->input->post());
		 // echo "in controller"; var_dump($orders); die();
		$this->user_orders_this_week($orders);
		
	}


	public function user_update_fulfilled_status($order_id)
	{
		$this->user->user_update_fulfilled_status($order_id);
		redirect('/users/get_user_orders_this_week');
	}


}//end of users controller
