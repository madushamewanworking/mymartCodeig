<?php


class rating
{
	private $rateId;
	private $comment;
	private $rating;
	private $username;
	private $productId;
	private $userId;

	/**
	 * rating constructor.
	 * @param $rateId
	 * @param $comment
	 * @param $rating
	 * @param $username
	 * @param $productId
	 * @param $userId
	 */
	public function __construct($rateId, $comment, $rating, $username, $productId, $userId)
	{
		$this->rateId = $rateId;
		$this->comment = $comment;
		$this->rating = $rating;
		$this->username = $username;
		$this->productId = $productId;
		$this->userId = $userId;
	}

	/**
	 * @return mixed
	 */
	public function getRateId()
	{
		return $this->rateId;
	}

	/**
	 * @param mixed $rateId
	 */
	public function setRateId($rateId)
	{
		$this->rateId = $rateId;
	}

	/**
	 * @return mixed
	 */
	public function getComment()
	{
		return $this->comment;
	}

	/**
	 * @param mixed $comment
	 */
	public function setComment($comment)
	{
		$this->comment = $comment;
	}

	/**
	 * @return mixed
	 */
	public function getRating()
	{
		return $this->rating;
	}

	/**
	 * @param mixed $rating
	 */
	public function setRating($rating)
	{
		$this->rating = $rating;
	}

	/**
	 * @return mixed
	 */
	public function getUsername()
	{
		return $this->username;
	}

	/**
	 * @param mixed $username
	 */
	public function setUsername($username)
	{
		$this->username = $username;
	}

	/**
	 * @return mixed
	 */
	public function getProductId()
	{
		return $this->productId;
	}

	/**
	 * @param mixed $productId
	 */
	public function setProductId($productId)
	{
		$this->productId = $productId;
	}

	/**
	 * @return mixed
	 */
	public function getUserId()
	{
		return $this->userId;
	}

	/**
	 * @param mixed $userId
	 */
	public function setUserId($userId)
	{
		$this->userId = $userId;
	}
}
