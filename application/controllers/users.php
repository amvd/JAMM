<?php

class users extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User');
	}

	public function user_profile($user_id)
	{
		$user = $this->User->get_user_by_id($user_id);

		$this->load->view('user_profile', ["user" => $this->User->get_user_by_id($user_id)]);
	}

	public function user_edit_profile($id)
	{
		$user = $this->User->get_user_by_id($id);
		$this->load->view('user_edit_profile', ["user" => $user]);
	}

	public function user_bio_update()
	{

		$config['upload_path'] = 'assets/images/pics';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '0';
		$config['max_width']  = '0';
		$config['max_height']  = '0';
		$config['file_name'] = 'profile';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			// var_dump($error);
			$this->session->set_flashdata('error', $error);
			redirect("/Users/user_edit_profile/".$this->session->userdata('id'));
		} else {
			$data = array('upload_data' => $this->upload->data());

			// $this->session->set_flashdata('error');
			// redirect("/users/user_profile/". $this->session->userdata("id"));
		}
		$new_pic = $data["upload_data"]["file_name"];
		$this->User->user_bio_update($this->input->post(), $new_pic);
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
