<?php

class foods extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Food');
	}

	// public function all_food_no_filter($city) 
	// {
	// 	//showing all foods without any filters
	// 	$all_foods_info = $this->Food->get_foods_no_filter($city);
	// 	$this->load->view('all_food', array('food_info' => $all_foods_info));
	// }

	public function all_chefs_by_city($city) {	
		$all_chefs=$this->Food->get_all_chefs_with_ratings($city);	
		$this->load->view('all_chef', array('all_chefs' => $all_chefs));
	}// all chefs


	public function all_food_by_city($city) {
		//filter foods by city
		// var_dump($this->input->post()); die();
		$food_info = $this->Food->get_foods_by_city($city);
		$all_food = $food_info;
		// var_dump($food_info); die();
		// $this->Food->display_food_in_modal($city, $food_info);
		$cart_qty = $this->Food->get_cart($this->session->userdata('id'));
		$this->load->view('all_food', array('food_info' => $food_info, 
																				'all_food' => $all_food,
																				'cart_qty'=> $cart_qty));
	}

	public function all_food_by_cuisine($cuisine_type, $city) {
		//filter by cuisine
		// var_dump($cuisine_type); die();
		$all_food = $this->Food->get_foods_by_city($city);
		$food_by_cuisine = $this->Food->get_foods_by_cuisine($cuisine_type, urldecode($city));
		$cart_qty = $this->Food->get_cart($this->session->userdata('id'));
		$this->load->view('all_food', array('food_info' => $food_by_cuisine,
																				'all_food' => $all_food,
																				'cart_qty'=> $cart_qty));	}

	public function display_cart(){
		$user_id = $this->session->userdata('id');
		$user_cart = $this->Food->get_cart($user_id);
		$this->load->view('cart', array('user_cart' => $user_cart));
	}

	public function delete_from_cart(){
		$id=$this->input->post('cart_item');
		$this->food->remove($id);
	}

	public function update_cart(){

	}

	public function display_model($city, $food_id){
		var_dump($this->input->post()); die();
		$food_in_modal = $this->Food->display_food_in_modal($city, $food_id);
	}

	public function insert_into_cart($city, $food_id) {
		//put post info from modal into cart
		// var_dump($this->input->post()); die();

		$this->Food->insert_into_cart_table($food_id, $this->input->post());
		$this->all_food_by_city($city);
	}

}//end of foods controller

?>