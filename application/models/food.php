<?php

class Food extends CI_Model{

	public function validate() {
		//to validate registration
		$this->load->library("form_validation");
		$this->form_validation->set_rules("name", "Name", "required");
		$this->form_validation->set_rules("username", "Username", "trim|required");
		$this->form_validation->set_rules("email", "Email", "required|valid_email|is_unique[users.email]");
		$this->form_validation->set_rules("password", "Password", "required|min_length[8]|matches[confirm_pw]");
		$this->form_validation->set_rules("confirm_pw", "Confirm Password", "required");
		$this->form_validation->set_rules("phone", "Phone Number", "required|is_natural|min_length[10]|max_length[10]");
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
		$query = "INSERT INTO users (name, username, password, email, phone, bio, profile_pic_url, allergies, address, zip_code, created_at, updated_at)
							VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())";
		$this->db->query($query, array($post['name'], $post['username'], md5($post['password']), $post['email'], $post['phone'], $post['bio'], $post['profile_pic_url'], $post['allergies'], $post['address'], $post['zip_code']));
	}//register_user

	public function register_chef($post) {
		//to register user after no validation error
		$query = "INSERT INTO chefs (chef_name, kitchen_name, email, password, phone_number, address, zip_code, bio, chef_picture_url, restaurant_picture_url, created_at, updated_at)
							VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())";
		$this->db->query($query, array($post['chef_name'], $post['kitchen_name'], $post['email'], md5($post['password']), $post['phone_number'], $post['address'], $post['zip_code'], $post['bio'], $post['chef_picture_url'], $post['restaurant_picture_url']));
	}//register_chef

	public function login_user($post) {
		//first checks DB and if true, then log in
		$query = "SELECT * FROM users WHERE email = ?";
		$user_info = $this->db->query($query, array($post['email']))->row_array();
		if ($user_info){
			if (md5($post['password']) == $user_info['password']) {
				$this->session->set_userdata('user_type', "user");
				$this->session->set_userdata('logged_in', true);
				return $user_info; //to put into session
			}
			else
				return false;
		}//if $user_info
	}//login_user

	public function login_chef($post) {
		//first checks DB and if true, then log in
		$query = "SELECT * FROM chef WHERE email = ?";
		$chef_info = $this->db->query($query, array($post['email']))->row_array();
		if ($chef_info){
			if (md5($post['password']) == $chef_info['password']){
				$this->session->set_userdata('user_type', "chef");
				$this->session->set_userdata('logged_in', true);
				return $chef_info; //to put into session
			}
			else
				return false;
		}//if $chef_info
	}//login_chef

////////////END REGISTER AND LOGIN/////////////




///////ON USER OR CHEF PAGE////////////

	// public function get_user_info($post) {
	// 	//to get info to display on user page
	// 	$query = "SELECT users.id, "
	// }//get_user_info





}//end of model


?>
