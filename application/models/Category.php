<?php


class Category
{
	private $catId;
	private $categoryName;
	private $categoryImage;
	private $catDescription;

	/**
	 * Category constructor.
	 * @param $catId
	 * @param $categoryName
	 * @param $categoryImage
	 * @param $catDescription
	 */
	public function __construct($catId, $categoryName, $categoryImage, $catDescription)
	{
		$this->catId = $catId;
		$this->categoryName = $categoryName;
		$this->categoryImage = $categoryImage;
		$this->catDescription = $catDescription;
	}

	/**
	 * @return mixed
	 */
	public function getCatId()
	{
		return $this->catId;
	}

	/**
	 * @param mixed $catId
	 */
	public function setCatId($catId)
	{
		$this->catId = $catId;
	}

	/**
	 * @return mixed
	 */
	public function getCatDescription()
	{
		return $this->catDescription;
	}

	/**
	 * @param mixed $catDescription
	 */
	public function setCatDescription($catDescription)
	{
		$this->catDescription = $catDescription;
	}





	public function getCategoryName()
	{
		return $this->categoryName;
	}


	public function setCategoryName($categoryName)
	{
		$this->categoryName = $categoryName;
	}


	public function getCategoryImage()
	{
		return $this->categoryImage;
	}


	public function setCategoryImage($categoryImage)
	{
		$this->categoryImage = $categoryImage;
	}


//	public function getCategoryDescription()
//	{
//		return $this->categoryDescription;
//	}
//
//
//	public function setCategoryDescription($categoryDescription)
//	{
//		$this->categoryDescription = $categoryDescription;
//	}
//	private $categoryDescription;





}
