<?php


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
}
