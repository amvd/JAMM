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

	public function all_chefs() {
		$this->load->view('all_chef');
	}// all chefs


	public function all_food_by_city($city) {
		//filter foods by city
		// var_dump($this->input->post()); die();
		$food_info = $this->Food->get_foods_by_city($city);
		$all_food = $food_info;
		$this->load->view('all_food', array('food_info' => $food_info, 'all_food' => $all_food));
	}

	public function all_food_by_cuisine($cuisine_type, $city) {
		//filter by cuisine
		// var_dump($cuisine_type); die();
		$all_food = $this->Food->get_foods_by_city($city);
		$food_by_cuisine = $this->Food->get_foods_by_cuisine($cuisine_type, urldecode($city));
		$this->load->view('all_food', array('food_info' => $food_by_cuisine,
																				'all_food' => $all_food));
	}

}//end of foods controller

?>