<?php

class Chefs extends CI_Controller {
	



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
