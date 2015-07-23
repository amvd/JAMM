<?php

class Food extends CI_Model{

	public function validate() {
		//to validate registration
		$this->load->library("form_validation");
		$this->form_validation->set_rules("first_name", "First Name", "trim|required");
		$this->form_validation->set_rules("last_name", "Last Name", "trim|required");
		$this->form_validation->set_rules("email", "Email", "required|valid_email|is_unique[users.email]");
		$this->form_validation->set_rules("password", "Password", "required|min_length[8]|matches[confirm_pw]");
		$this->form_validation->set_rules("confirm_pw", "Confirm Password", "required");
		$this->form_validation->set_rules("phone", "Phone Number", "trim|required|is_natural|min_length[10]|max_length[12]");
		$this->form_validation->set_rules("city", "City", "trim|required");
		$this->form_validation->set_rules("state", "State", "required");
		$this->form_validation->set_rules("zip_code", "Zip Code", "required|is_natural|min_length[5]|max_length[5]");


		if($this->form_validation->run())
			return "valid";
		else{
			$this->session->set_flashdata('errors', validation_errors());
			// var_dump($this->session->flashdata('errors'));
			// die();
			// return false;
		}
	}//end validation


////////////BEGIN REGISTER AND LOGIN////////////////

	public function register_user($post) {
		//to register user after no validation error
		$query = "INSERT INTO users (first_name, last_name, email, password, phone, address, city, state, zip_code, created_at, updated_at)
							VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())";
		$this->db->query($query, array($post['first_name'], $post['last_name'], $post['email'], md5($post['password']), $post['phone'], $post['address'], $post['city'], $post['state'], $post['zip_code']));
	}//register_user

	public function register_chef($post) {
		//to register user after no validation error
		$query = "INSERT INTO chefs (first_name, last_name, email, password, phone, address, city, state, zip_code, created_at, updated_at)
							VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())";
		$this->db->query($query, array($post['first_name'], $post['last_name'], $post['email'], md5($post['password']), $post['phone'], $post['address'], $post['city'], $post['state'], $post['zip_code']));
	}//register_chef

	public function login_user($post) {
		//first checks DB and if true, then log in
		$query = "SELECT * FROM users WHERE email = ?";
		$user_info = $this->db->query($query, array($post['email']))->row_array();
		if ($user_info){
			if (md5($post['password']) == $user_info['password']) {
				$this->session->set_userdata('user_type', "user");
				$this->session->set_userdata('logged_in', true);
				$this->session->set_userdata('user_type', "user");
				return $user_info; //to put into session
			}
			else
				return false;
		}//if $user_info
	}//login_user

	public function login_chef($post) {
		//first checks DB and if true, then log in
		$query = "SELECT * FROM chefs WHERE email = ?";
		$chef_info = $this->db->query($query, array($post['email']))->row_array();
		if ($chef_info){
			if (md5($post['password']) == $chef_info['password']){
				$this->session->set_userdata('user_type', "chef");
				$this->session->set_userdata('logged_in', true);
				$this->session->set_userdata('user_type', "chef");
				return $chef_info; //to put into session
			}
			else
				return false;
		}//if $chef_info
	}//login_chef

////////////END REGISTER AND LOGIN/////////////




/////////// ALL FOODS PAGE //////////////////

	public function get_foods_by_city($city) {
		//get all foods from certain city / city
		$query = "SELECT * FROM foods
							LEFT JOIN chefs 
							ON foods.chef_id = chefs.id
							LEFT JOIN cuisines
							ON foods.cuisine_id = cuisines.id
							WHERE city = ?";
		$all_foods = $this->db->query($query, array(urldecode($city)))->result_array();
		return $all_foods;
	} 

	public function get_foods_no_filter($city) {
		//get all foods no filters
		$query = "SELECT foods.id, foods.name, foods.description, foods.food_pic_url, foods.created_at, foods.chef_id, foods.cuisine_id, 
											cuisines.type, prices.size_id, sizes.small, sizes.medium, sizes.large, chefs.first_name, chefs.last_name FROM foods
							LEFT JOIN cuisines
							ON foods.cuisine_id = cuisines.id
							LEFT JOIN prices
							ON foods.id = prices.food_id
							LEFT JOIN sizes
							ON prices.size_id = sizes.id
							LEFT JOIN chefs
							ON chefs.id = foods.chef_id
							WHERE city = ?";
		$all_foods_info = $this->db->query($query, array(urldecode($city)))->result_array();
		return $all_foods_info;
	}

	public function get_foods_by_cuisine($cuisine_type, $city) {
		//get all food by cuisine type
		$query = "SELECT foods.id, foods.name, foods.description, foods.food_pic_url, foods.created_at, foods.chef_id, foods.cuisine_id, 
											cuisines.type, prices.size_id, sizes.small, sizes.medium, sizes.large, chefs.first_name, chefs.last_name, chefs.city FROM foods
							LEFT JOIN cuisines
							ON foods.cuisine_id = cuisines.id
							LEFT JOIN prices
							ON foods.id = prices.food_id
							LEFT JOIN sizes
							ON prices.size_id = sizes.id
							LEFT JOIN chefs
							ON chefs.id = foods.chef_id
							WHERE cuisines.type = ? && chefs.city = ?";
		return $this->db->query($query, array($cuisine_type, $city))->result_array();
	}//all_foods_by_cuisine
	
//////////// END ALL FOODS PAGE /////////////


/////////////// ALL CHEFS PAGE //////////////////


	public function get_chefs_by_city($city) {
		$query = "SELECT * FROM chefs WHERE city = ?";

		$all_chefs = $this->db->query($query, [urldecode($city)]);
	}



/////////////// END ALL CHEFS PAGE //////////////

}//end of model


?>
