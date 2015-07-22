<?php

class foods extends CI_Controller {
	
	public function all_food(){
		//goes to foods with all foods 
		//either with the user zip code or location zipcode

		$this->load->view('all_food');
	}//all foods

	public function all_chefs() {

		$this->load->view('all_chef');
	}// all chefs

}//end of foods controller