<?php
include_once ("Cart.php");
include_once ("Favourites.php");

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
			'user_id' => $this->session->userdata('usr_id')
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
					$cartDetails[]=new Cart($cartRow->cart_id,$cartRow->productcount, $cartRow->product_id, $cartRow->proname, $cartRow->proprice, $cartRow->proimagelink, $cartRow->user_id);
				}

			}
		}


		return $cartDetails;
	}


	public function getBuynowProduct(){
		$inputData=array(
			'productcount' => $this->input->post('count'),
			'product_id'=>$this->input->post('id'),
			'proname' => $this->input->post('name'),
			'proprice' => $this->input->post('price'),
			'proimagelink' => $this->input->post('image'),
			'user_id' => $this->session->userdata('usr_id')
		);

		return $this->db->insert('cart', $inputData);
	}

	public function getFavChekedList($data_set){
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
		$favDetails=array();
		for ($x = 0; $x < count($data_set); $x++) {
			$this->db->select('fav.*');
			$this->db->from('fav');
			$this->db->where('fav.fav_id', $data_set[$x]);
			$query = $this->db->get();
			setcookie("ksg", $query->num_rows());

//			$query= $this->db->get();

			if($query->num_rows() !=0){

				foreach ($query->result() as $cartRow){
					$favDetails[]=new Favourites($cartRow->fav_id,$cartRow->proname, $cartRow->proimagelink, $cartRow->proprice, $cartRow->procount, $cartRow->user_id, $cartRow->product_id);
				}

			}
		}

		foreach ($favDetails as $fav){
			$cartInsertData = array(
				'productcount' => $fav->getProductCount(),
				'product_id' =>$fav->getProductId(),
				'proname' => $fav->getProductName(),
				'proprice' => $fav->getProductPrice(),
				'proimagelink' => $fav->getProductImage(),
				'user_id' => $this->session->userdata('usr_id')

//			'user_profile_img_url' => $this->input->post('profileimglink')
			);
			setcookie("ok","dbb");
			$result = $this->db->insert('cart', $cartInsertData);
			//get return value just added to db
			//$insert_id = $this->db->insert_id();

			/*add new user to database*/


		}


		return $result;
	}
}
