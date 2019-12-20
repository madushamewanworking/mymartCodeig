<?php


class Cart
{
 private $productCount;
 private $productId;
 private $productName;
 private $productPrice;
 private $productImage;
 private $userId;


	public function __construct($productCount, $productId, $productName, $productPrice, $productImage, $userId)
	{
		$this->productCount = $productCount;
		$this->productId = $productId;
		$this->productName = $productName;
		$this->productPrice = $productPrice;
		$this->productImage = $productImage;
		$this->userId = $userId;
	}




	public function getProductCount()
	{
		return $this->productCount;
	}


	public function setProductCount($productCount)
	{
		$this->productCount = $productCount;
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


	public function getProductPrice()
	{
		return $this->productPrice;
	}


	public function setProductPrice($productPrice)
	{
		$this->productPrice = $productPrice;
	}


	public function getProductImage()
	{
		return $this->productImage;
	}


	public function setProductImage($productImage)
	{
		$this->productImage = $productImage;
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
