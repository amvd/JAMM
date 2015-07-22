<?php

class foods extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Food');
	}

	public function all_food($food_info){
		//goes to foods with all foods 
		//either with the user zip code or location zipcode
		$this->load->view('all_food', array('food_info' => $food_info));
	}//all foods

	public function all_chefs() {

		$this->load->view('all_chef');
	}// all chefs


	public function all_food_by_city() {
		//filter foods by city
		// var_dump($this->input->post()); die();
		$food_info = $this->Food->get_foods_by_city($this->input->post('city'));
		// var_dump($food_info); die();
		$this->all_food($food_info);
	}

}//end of foods controller

?>