<?php

class user extends CI_Model
{

	public function user_bio_update($post)
	{
		 // echo "in model"; var_dump($this->session->all_userdata());
		// echo "in model"; var_dump($post);
		 // echo "in model"; var_dump($this->session->userdata('id')); die();
		$query = "UPDATE Users SET bio = ?  WHERE Users.id = ?";
		$value = array($post['new_bio'], $this->session->userdata('id'));
		$this->db->query($query, $value);
		$this->session->set_userdata('bio', $post['new_bio']);
	}


	public function chef_add_menu($post)
	{
		 // echo "in models chef_add_menu"; var_dump($post); die();
		$query = "INSERT INTO Foods (name, description, food_pic_url, created_at, updated_at, chef_id, cuisine_id) VALUES (?, ?, ?, NOW(), NOW(), ?, ?)";
		$values1 = array($post['menu1_name'], $post['menu1_description'], 'lolnonefornow', $this->session->userdata('id'), $post['menu1_cuisine']);
		 // echo ""; var_dump($values1);
		$values2 = array($post['menu2_name'], $post['menu2_description'], 'lolnonefornow', $this->session->userdata('id'), $post['menu2_cuisine']);
		 // echo ""; var_dump($values2); 
		$values3 = array($post['menu3_name'], $post['menu3_description'], 'lolnonefornow', $this->session->userdata('id'), $post['menu3_cuisine']);
		 // echo ""; var_dump($values3); 
		$values4 = array($post['menu4_name'], $post['menu4_description'], 'lolnonefornow', $this->session->userdata('id'), $post['menu4_cuisine']);
		 // echo ""; var_dump($values4); 
		$values5 = array($post['menu5_name'], $post['menu5_description'], 'lolnonefornow', $this->session->userdata('id'), $post['menu5_cuisine']);
		 // echo ""; var_dump($values5); die();
		$this->db->query($query, $values1);
		$this->db->query($query, $values2);
		$this->db->query($query, $values3);
		$this->db->query($query, $values4);
		$this->db->query($query, $values5);
		 //store menus as foods for each chef
		 //pass back array from model to chef_add_menu method
		 //pass the result of the array above as argument of chef_edit_menu to load it in view under teh chef_edit_menu method
		 //use foreach loop to display each food as menu items in chef_menu
	}

	public function chef_grab_menu()
	{
		 // echo ""; var_dump($this->session->userdata('id')); die();
		$id = $this->session->userdata('id');
		$query = "SELECT * FROM Foods
		LEFT JOIN foods_allergens on foods.id = foods_allergens.food_id
		LEFT JOIN allergens on allergens.id = foods_allergens.allergen_id
		WHERE chef_id IN ($id)
		ORDER BY foods.created_at DESC
		LIMIT 5";
		return $result = $this->db->query($query)->result_array();
	}









}

?>