<?php


class Favourites
{


	private $productName;
	private $productImage;
	private $productPrice;
	private $productCount;
	private $userId;
	private $productId;

	public function __construct($productId, $productName, $productImage, $productPrice, $productCount, $userId)
	{
		$this->productId = $productId;
		$this->productName = $productName;
		$this->productImage = $productImage;
		$this->productPrice = $productPrice;
		$this->productCount = $productCount;
		$this->userId = $userId;
	}




	public function getProductId()
	{
		return $this->productId;
	}


	public function setProductId($productId)
	{
		$this->productId = $productId;
	}


	public function getProductName()
	{
		return $this->productName;
	}


	public function setProductName($productName)
	{
		$this->productName = $productName;
	}


	public function getProductImage()
	{
		return $this->productImage;
	}


	public function setProductImage($productImage)
	{
		$this->productImage = $productImage;
	}


	public function getProductPrice()
	{
		return $this->productPrice;
	}


	public function setProductPrice($productPrice)
	{
		$this->productPrice = $productPrice;
	}


	public function getProductCount()
	{
		return $this->productCount;
	}


	public function setProductCount($productCount)
	{
		$this->productCount = $productCount;
	}


	public function getUserId()
	{
		return $this->userId;
	}


	public function setUserId($userId)
	{
		$this->userId = $userId;
	}



}
