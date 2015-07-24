<?php

class Chefs extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('chef');
	}

	public function chef_profile($chef_id)
	{
		//loads the chef profile page
		$chef = $this->chef->get_chef_by_id($chef_id);
		$this->load->view('chef_profile', array('chef'=>$chef));
	}

	//triggers when you click on "edit profile" in chef_profile and takes you to the form where you can edit your profile
	public function chef_edit_profile($id)
	{
		$chef = $this->chef->get_chef_by_id($id);
		$this->load->view('chef_edit_profile',array('chef'=>$chef));
	}

	//triggers when you click on the submit button on the chef_edit_profile page
	//updates the database and redirects you to the chef_profile
	public function chef_bio_update()
	{
		 // echo "in controller"; var_dump($this->input->post()); die();
		$chef_id = $this->chef->chef_bio_update($this->input->post());
		
		// $this->chef->grab_bio();
		 // echo "in bio update controller"; var_dump($bio); die();
		$this->chef_profile($chef_id);
	}


	//loads the chef_menu page
	//takes in the argument from the result of chef_grab_menu method below
	public function chef_menu($menu_items)
	{		
		// echo ""; var_dump($menu_items); die();
		$this->load->view('chef_menu', array('menu_items' => $menu_items));
	}

	// the "menu of the week" link on the chef_profile page links to this method
	// the method runs chef_grab_menu method in model to return a multidemensional associative array that you loop through to display the menu chef enters in
	public function chef_grab_menu()
	{
		// echo "in chef_grab_menu controller"; var_dump($post); die();
		$menu_items = $this->chef->chef_grab_menu();
		// echo "in chef_grab_menu"; var_dump($menu_items); die();
		$this->chef_menu($menu_items);
	}

	//triggers when you click on the "edit menu" link on the chef_menu view page
	//takes you to the form that helps you enter 5 new entries for the week
	//need to add "allergens" as a form field
	public function chef_edit_menu()
	{
		$this->load->view('chef_edit_menu');
	}

	//triggers when you click on "submit" and runs chef_add_menu in chef model
	//after adding menu items in database, redirects you to the chef_grab_menu function that that will grab the menu and redirected to chef_menu
	public function chef_add_menu()
	{
		$this->chef->chef_add_menu($this->input->post());
		redirect('/chefs/chef_grab_menu');
	}

	//runs when you click on "Recent Customer Orders" link on the chef_profile page
	//runs get_chef_orders_this_week in the model which returns an array of orders associated with the chef
	//it will point to the function below
	public function get_chef_orders_this_week()
	{
		$orders = $this->chef->get_chef_orders_this_week($this->input->post());
		 // echo "in controller"; var_dump($orders); die();
		$this->chef_orders_this_week($orders);
		
	}

	//receives the array of the orders from the function above and passes it onto the view page "chef_orders_this_week"
	public function chef_orders_this_week($orders)
	{
		$this->load->view('chef_orders_this_week', array('orders' => $orders));
	}


	//supposed to be the page that displays the reviews associated with the chef
	//need to build out the method that will actually query for the reviews and pass it onto this method that's only supposed to load the view page.
	public function chef_reviews_this_week()
	{
		$this->load->view('chef_reviews_this_week');
	}

	
	public function chef_update_fulfilled_status($order_id)
	{
		$this->chef->chef_update_fulfilled_status($order_id);
		redirect('/chefs/get_chef_orders_this_week');
	}



}//end of chefs controller

