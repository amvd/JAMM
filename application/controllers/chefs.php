<?php

class Chefs extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('chef');
	}

	public function chef_profile()
	{
		$this->load->view('chef_profile');
	}

	public function chef_menu($menu_items)
	{
		// echo ""; var_dump($menu_items); die();
		$this->load->view('chef_menu', array('menu_items' => $menu_items));
	}

	public function chef_orders_this_week($orders)
	{
		$this->load->view('chef_orders_this_week', $orders);
	}

	public function get_chef_orders_this_week()
	{
		$orders = $this->user->get_chef_orders_this_week($this->input->post());
		$this->chef_orders_this_week($orders);
		
	}

	public function chef_reviews_this_week()
	{
		$this->load->view('chef_reviews_this_week');
	}

	public function chef_edit_profile()
	{
		$this->load->view('chef_edit_profile');
	}

	public function chef_bio_update()
	{
		 // echo "in controller"; var_dump($this->input->post()); die();
		$this->chef->chef_bio_update($this->input->post());
		// $this->chef->grab_bio();
		 // echo "in bio update controller"; var_dump($bio); die();
		redirect('/chefs/chef_profile');
	}

	public function chef_edit_menu()
	{
		$this->load->view('chef_edit_menu');
	}

	public function chef_add_menu()
	{
		$this->chef->chef_add_menu($this->input->post());
		redirect('/chefs/chef_grab_menu');
	}

	public function chef_grab_menu()
	{
		 // echo "in chef_grab_menu controller"; var_dump($post); die();
		$menu_items = $this->chef->chef_grab_menu();
		 // echo "in chef_grab_menu"; var_dump($menu_items); die();
		$this->chef_menu($menu_items);
	}



}//end of chefs controller

