<?php
include_once ("Cart.php");

class Cart_manager extends CI_Model
{
	public function addcart(){

		setcookie("dfsf",$this->input->post('count'));

		$inputData=array(
			'productcount' => $this->input->post('count'),
			'product_id'=>$this->input->post('id'),
			'proname' => $this->input->post('name'),
			'proprice' => $this->input->post('price'),
			'proimagelink' => $this->input->post('image'),
			'user_id' => $this->session-userdata('usr_id')
		);

		return $this->db->insert('cart', $inputData);
	}

	public function addfav(){

		setcookie("dfsf",$this->input->post('count'));

		$inputData=array(

			'product_id'=>$this->input->post('id'),
			'proname' => $this->input->post('name'),
			'proimagelink' => $this->input->post('image'),
			'proprice' => $this->input->post('price'),
			'procount' => $this->input->post('count'),
			'user_id' => $this->session->userdata('usr_id')
		);

		return $this->db->insert('fav', $inputData);
	}


	public function getChekedList($data_set){
//		$data_set=array(
//			0=>1,
//			1=>2
//		);
//		for ($x = 0; $x < count($genre); $x++) {
//			$genre_data = array(
//				'user_id' => $insert_id,
//				'genres_id' => $genre[$x]
//			);
//			$this->db->insert('user_music_genres', $genre_data);
//		}
//		$data = $this->input->post('cartpro');
		$cartDetails=array();
		for ($x = 0; $x < count($data_set); $x++) {
			$this->db->select('cart.*');
			$this->db->from('cart');
			$this->db->where('cart.cart_id', $data_set[$x]);
			$query = $this->db->get();
			setcookie("mewan", $query->num_rows());

//			$query= $this->db->get();

			if($query->num_rows() !=0){

				foreach ($query->result() as $cartRow){
					$cartDetails[]=new Cart($cartRow->productcount, $cartRow->product_id, $cartRow->proname, $cartRow->proprice, $cartRow->proimagelink, $cartRow->user_id);
				}

			}
		}


		return $cartDetails;
	}
}
