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
		//get all foods from certain city 

		$query = "SELECT foods.id, foods.name, foods.description, foods.food_pic_url, foods.created_at, foods.chef_id, foods.cuisine_id, 
cuisines.type, prices.food_id, group_concat(distinct sizes.type) AS sizes, group_concat(distinct prices.price) AS prices, chefs.first_name, chefs.last_name, chefs.city, group_concat(distinct allergens.allergen) AS allergens FROM foods
							LEFT JOIN cuisines
							ON foods.cuisine_id = cuisines.id
							LEFT JOIN prices
							ON foods.id = prices.food_id
							LEFT JOIN sizes
							ON prices.size_id = sizes.id
							LEFT JOIN chefs
							ON foods.chef_id = chefs.id
							LEFT JOIN foods_allergens
							ON foods.id = foods_allergens.food_id
							LEFT JOIN allergens
							ON foods_allergens.allergen_id = allergens.id
							WHERE chefs.city = ?
					    GROUP BY foods.id";

		$all_foods = $this->db->query($query, array(urldecode($city)))->result_array();
		// foreach($all_foods as $food) {
		for ($i=0; $i < count($all_foods) ; $i++)
		{
			$sizes = explode(",", $all_foods[$i]['sizes']);
			// var_dump($sizes111);
			$all_foods[$i]['sizes'] = $sizes;

			$prices = explode(",", $all_foods[$i]['prices']);
			// var_dump($prices111);
			$all_foods[$i]['prices'] = $prices;
			$jcounter = count($sizes);
			for ($j=0; $j< $jcounter; $j++)
			{

				$all_foods[$i]['pricing'][$sizes[$j]] = $prices[$j];
			};
		};
		return $all_foods;
	} 

	// public function get_foods_no_filter($city) {
	// 	//get all foods no filters
	// 	$query = "SELECT foods.id, foods.name, foods.description, foods.food_pic_url, foods.created_at, foods.chef_id, foods.cuisine_id, 
	// 										cuisines.type, prices.size_id, sizes.small, sizes.medium, sizes.large, chefs.first_name, chefs.last_name FROM foods
	// 						LEFT JOIN cuisines
	// 						ON foods.cuisine_id = cuisines.id
	// 						LEFT JOIN prices
	// 						ON foods.id = prices.food_id
	// 						LEFT JOIN sizes
	// 						ON prices.size_id = sizes.id
	// 						LEFT JOIN chefs
	// 						ON chefs.id = foods.chef_id
	// 						WHERE city = ?";
	// 	$all_foods_info = $this->db->query($query, array(urldecode($city)))->result_array();
	// 	return $all_foods_info;
	// }

	public function get_foods_by_cuisine($cuisine_type, $city) {
		//get all food by cuisine type
		$query = "SELECT foods.id, foods.name, foods.description, foods.food_pic_url, foods.created_at, foods.chef_id, foods.cuisine_id, 
											cuisines.type, prices.food_id, group_concat(distinct sizes.type) AS sizes, group_concat(distinct prices.price) AS prices, 
											chefs.first_name, chefs.last_name, chefs.city, group_concat(distinct allergens.allergen) AS allergens FROM foods
							LEFT JOIN cuisines
							ON foods.cuisine_id = cuisines.id
							LEFT JOIN prices
							ON foods.id = prices.food_id
							LEFT JOIN sizes
							ON prices.size_id = sizes.id
							LEFT JOIN chefs
							ON chefs.id = foods.chef_id
							LEFT JOIN foods_allergens
							ON foods.id = foods_allergens.food_id
							LEFT JOIN allergens
							ON foods_allergens.allergen_id = allergens.id
							LEFT JOIN carts
							ON foods.id = carts.food_id
							WHERE cuisines.type = ? && chefs.city = ?";

		$all_foods = $this->db->query($query, array($cuisine_type, urldecode($city)))->result_array();
		for ($i=0; $i < count($all_foods) ; $i++)
		{
			$sizes = explode(",", $all_foods[$i]['sizes']);
			$all_foods[$i]['sizes'] = $sizes;

			$prices = explode(",", $all_foods[$i]['prices']);
			$all_foods[$i]['prices'] = $prices;
			$jcounter = count($sizes);
			for ($j=0; $j< $jcounter; $j++)
			{

				$all_foods[$i]['pricing'][$sizes[$j]] = $prices[$j];
			};
		};
		return $all_foods;
	}//all_foods_by_cuisine
	

	public function display_food_in_modal($city, $food_id) {
		//to show food info in modal
		$query = "SELECT foods.id, foods.name, foods.description, foods.food_pic_url, foods.created_at, foods.chef_id, foods.cuisine_id, 
											cuisines.type, prices.food_id, sizes.type, prices.price, chefs.first_name, chefs.last_name, chefs.city FROM foods
							LEFT JOIN cuisines
							ON foods.cuisine_id = cuisines.id
							LEFT JOIN prices
							ON foods.id = prices.food_id
							LEFT JOIN sizes
							ON prices.size_id = sizes.id
							LEFT JOIN chefs
							ON chefs.id = foods.chef_id
              WHERE chefs.city = ? AND foods.id = ?;";
    $food_in_modal = $this->db->query($query, array($city, $food_id))->result_array();
    return $food_in_modal;
	}//display_food_in_modal

	public function get_all_cart_info(){
		//TO GET THE WHOLE CART
		$query = "SELECT * FROM carts
							WHERE carts.user_id = ?";
		$whole_cart = $this->db->query($query, array($this->session->userdata('id')))->result_array();
		return $whole_cart;
	}

	public function insert_into_cart_table($food_id, $post) {
		//put into cart material

		$explosion = explode(" ", $post['something']);
		$post_size = $explosion[0];
		$post_price = $explosion[1];
		$whole_cart = $this->get_all_cart_info();
		$food_ids = array();
		$food_sizes = array();
		// var_dump($whole_cart); die();

		foreach($whole_cart as $food_id_in_cart) {
			$food_ids[] = $food_id_in_cart['food_id'];
			$food_sizes[] = $food_id_in_cart['food_size'];
			if ($food_id == $food_id_in_cart['food_id'] && $post_size == $food_id_in_cart['food_size']){
				$query = "UPDATE carts SET carts.qty = ?
									WHERE carts.food_id = ? AND carts.food_size = ?";
				$this->db->query($query, array(($post['quantity'] + $food_id_in_cart['qty']), $food_id, $post_size));				
			}
		}//foreach
		
		if (!(in_array($food_id, $food_ids))   ||   ((in_array($food_id, $food_ids)) && !(in_array($post_size, $food_sizes)))  ||  (!(in_array($food_id, $food_ids)) && (in_array($post_size, $food_sizes)))   ) {
			$query = "INSERT INTO carts(qty, food_size, user_id, food_id, created_at, updated_at)
								VALUES (?, ?, ?, ?, NOW(), NOW())";
			$this->db->query($query, array($post['quantity'], $post_size, $this->session->userdata('id'), $food_id));				
		}//if in array
	
	}//inserti into cart


	public function get_cart_item_info($cart_num, $food_id, $size) {

		$query = "SELECT * FROM foods
							LEFT JOIN prices
							ON foods.id = prices.food_id
							LEFT JOIN sizes
							ON prices.size_id = sizes.id
							WHERE prices.food_id = ?
							AND sizes.type = ?";
		$cart_info = $this->db->query($query, array($food_id, $size))->row_array();
		return $cart_info;
	}


//////////// END ALL FOODS PAGE /////////////


/////////////// ALL CHEFS PAGE //////////////////


	public function get_all_chefs_with_ratings($city) {
		$query = "SELECT chefs.id as chef_id,chefs.first_name,chefs.first_name, kitchen_name,email,password,phone,address,city,state,zip_code,bio,chef_picture_url,restaurant_picture_url, AVG(rating) as avg_rating
			from chefs
			LEFT JOIN reviews on chefs.id=reviews.chef_id
			WHERE city = ?
			GROUP BY chefs.id";
		$all_chefs = $this->db->query($query, array(urldecode($city)))->result_array();
		return $all_chefs;		
	}



/////////////// END ALL CHEFS PAGE //////////////

/////////////// CART PAGE //////////////////	
	public function get_cart($user_id){
		$query = "SELECT carts.qty, carts.food_size, users.first_name, foods.name FROM carts
							LEFT JOIN foods
							ON carts.food_id = foods.id
							LEFT JOIN users
							ON carts.user_id = users.id
							WHERE users.id = ? ";
		$user_cart = $this->db->query($query, array($user_id))->result_array();
		// var_dump($user_cart); die();
		$qty = 0;
		foreach ($user_cart as $cart) {
			$qty = $qty + $cart['qty'];
		}
		$user_cart['qty'] = $qty;
		return $user_cart;
	}

	public function delete_from_cart($id){
		$this->db->delete('carts', array('id' =>$id));
	}

	public function update($id,$data){
		$this->db->where('id', $id);
		$this->db->update('cart_item',$data);
	}

/////////////// END CART PAGE //////////////



}//end of model


?>
