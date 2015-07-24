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

	public function get_user_orders_this_week($post)
	{
		$query = "SELECT orders.id, orders.qty, orders.order_date, orders.pickup_date, orders.special_instructions,
orders.fulfilled, orders.created_at, orders.user_id, orders.food_id,
foods.id, foods.name, foods.description, foods.food_pic_url, foods.chef_id, foods.cuisine_id,
cuisines.id, cuisines.type, prices.id, prices.price, prices.food_id, prices.size_id,
sizes.id, sizes.type FROM Orders
		LEFT JOIN users on users.id = orders.user_id
        LEFT JOIN foods on foods.id = orders.food_id
		LEFT JOIN cuisines on cuisines.id = foods.cuisine_id
		LEFT JOIN prices on foods.id = prices.food_id
		LEFT JOIN sizes on sizes.id = prices.size_id
		WHERE users.id = ?
        ORDER BY orders.pickup_date DESC";

		// echo "in model"; var_dump($this->session->all_userdata()); die();
		$value = array($this->session->userdata('id'))[0];
		 // echo "in model"; var_dump($value); die();

		$user_orders = $this->db->query($query, $value)->result_array();
		 // echo "in model chef_orders"; var_dump($user_orders); die();
		return $user_orders;

	}

	public function user_update_fulfilled_status($order_id)
	{
		$query = "UPDATE Orders SET fulfilled = ? WHERE food_id = ?";
		$fulfilled = "0";
		$values = array($fulfilled, $order_id);
		 // echo "in model"; var_dump($values); die();
		$result = $this->db->query($query, $values);
		 // echo "in model"; var_dump($result); die();
	}


	public function get_user_by_id($id)
	{
		$query = "SELECT * FROM users WHERE id = ?";
		$this->db->query($query, [$id])->row_array();
	}




}

?>