<?php


class Product
{
	private $proid;
	private $proImage;
	private $proName;
	private $price;
	private $proDescription;
	private $proCategory;

	/**
	 * Product constructor.
	 * @param $proid
	 * @param $proImage
	 * @param $proName
	 * @param $price
	 * @param $proDescription
	 * @param $proCategory
	 */
	public function __construct($proid, $proImage, $proName, $price, $proDescription, $proCategory)
	{
		$this->proid = $proid;
		$this->proImage = $proImage;
		$this->proName = $proName;
		$this->price = $price;
		$this->proDescription = $proDescription;
		$this->proCategory = $proCategory;
	}

	/**
	 * @return mixed
	 */
	public function getProid()
	{
		return $this->proid;
	}

	/**
	 * @param mixed $proid
	 */
	public function setProid($proid)
	{
		$this->proid = $proid;
	}

	/**
	 * @return mixed
	 */
	public function getProImage()
	{
		return $this->proImage;
	}

	/**
	 * @param mixed $proImage
	 */
	public function setProImage($proImage)
	{
		$this->proImage = $proImage;
	}

	/**
	 * @return mixed
	 */
	public function getProName()
	{
		return $this->proName;
	}

	/**
	 * @param mixed $proName
	 */
	public function setProName($proName)
	{
		$this->proName = $proName;
	}

	/**
	 * @return mixed
	 */
	public function getPrice()
	{
		return $this->price;
	}

	/**
	 * @param mixed $price
	 */
	public function setPrice($price)
	{
		$this->price = $price;
	}

	/**
	 * @return mixed
	 */
	public function getProDescription()
	{
		return $this->proDescription;
	}

	/**
	 * @param mixed $proDescription
	 */
	public function setProDescription($proDescription)
	{
		$this->proDescription = $proDescription;
	}

	/**
	 * @return mixed
	 */
	public function getProCategory()
	{
		return $this->proCategory;
	}

	/**
	 * @param mixed $proCategory
	 */
	public function setProCategory($proCategory)
	{
		$this->proCategory = $proCategory;
	}
}
