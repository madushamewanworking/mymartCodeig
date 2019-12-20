<?php

include_once('Category.php');
include_once ('Cart.php');
include_once ('Favourites.php');
include_once ('Product.php');

class Products_manager extends  CI_Model
{
	public function getCategories(){
		$this->db->select('category.*');
		$this->db->from('category');
	//	$this->db->join('user', 'posts.userId = user.id');
	//	$this->db->where('posts.userId',$userId);
	//	$this->db->order_by('createdDate', 'DESC');

		$query= $this->db->get();
		$categories=array();
		if($query->num_rows() !=0){

			foreach ($query->result() as $catRow){
				$categories[]=new Category($catRow->id, $catRow->catname,$catRow->catimagelink, $catRow->catdescription);
			}
			return $categories;
		}else{
			return $categories;
		}
	}


	public function getCartItems($userId){
		$this->db->select('cart.*');
		$this->db->from('cart');
		$this->db->where('cart.user_id',$userId);

		$query= $this->db->get();
		$cartDetails=array();
		if($query->num_rows() !=0){

			foreach ($query->result() as $cartRow){
				$cartDetails[]=new Cart($cartRow->productcount, $cartRow->product_id, $cartRow->proname, $cartRow->proprice, $cartRow->proimagelink, $cartRow->user_id);
			}
			return $cartDetails;
		}else{
			return $cartDetails;
		}


	}


	public function getFavouriteItems($userId){
		$this->db->select('fav.*');
		$this->db->from('fav');
		$this->db->where('fav.user_id',$userId);

		$query= $this->db->get();
		$favouritesDetails=array();
		if($query->num_rows() !=0){

			foreach ($query->result() as $cartRow){
				$favouritesDetails[]=new Favourites($cartRow->product_id, $cartRow->proname, $cartRow->proimagelink, $cartRow->proprice, $cartRow->procount, $cartRow->user_id);
			}
			return $favouritesDetails;
		}else{
			return $favouritesDetails;
		}


	}

	public function getProductItems(){
		$this->db->select('product.*');
		$this->db->from('product');
		$query= $this->db->get();
		setcookie("mewan",$query->num_rows());
		$ProductDetails=array();
		if($query->num_rows() !=0){

			foreach ($query->result() as $cartRow){
				$ProductDetails[]=new Product($cartRow->id, $cartRow->proimagelink, $cartRow->proname, $cartRow->price, $cartRow->prodescription, $cartRow->category_id);
			}
			return $ProductDetails;
		}else{
			return $ProductDetails;
		}


	}


	public function ProductByCategory($id)
	{
		$this->db->select('product.*');
		$this->db->from('product');
		$this->db->where('product.category_id',$id);
		$query= $this->db->get();
		setcookie("mewan",$query->num_rows());
		$ProductDetails=array();
		if($query->num_rows() !=0){

			foreach ($query->result() as $cartRow){
				$ProductDetails[]=new Product($cartRow->id, $cartRow->proimagelink, $cartRow->proname, $cartRow->price, $cartRow->prodescription, $cartRow->category_id);
			}
			return $ProductDetails;
		}else{
			return $ProductDetails;
		}

	}

	public function productDetail($id){

		$this->db->select('product.*');
		$this->db->from('product');
		$this->db->where('product.id',$id);
		$query= $this->db->get();
		setcookie("mewan",$query->num_rows());
		$ProductDetails=array();
		if($query->num_rows() !=0){

			foreach ($query->result() as $cartRow){
				$ProductDetails[]=new Product($cartRow->id, $cartRow->proimagelink, $cartRow->proname, $cartRow->price, $cartRow->prodescription, $cartRow->category_id);
			}
			return $ProductDetails;
		}else{
			return $ProductDetails;
		}
	}

}
