<?php


class Leaderboard
{
	private $userId;
	private $username;
	private $points;
	private $purchaseCount;
	private $level;
	private $imageLink;


	public function __construct($userId, $username, $points, $purchaseCount, $level, $imageLink)
	{
		$this->userId = $userId;
		$this->username = $username;
		$this->points = $points;
		$this->purchaseCount = $purchaseCount;
		$this->level = $level;
		$this->imageLink = $imageLink;
	}


	public function getUserId()
	{
		return $this->userId;
	}


	public function setUserId($userId)
	{
		$this->userId = $userId;
	}


	public function getUsername()
	{
		return $this->username;
	}


	public function setUsername($username)
	{
		$this->username = $username;
	}


	public function getPoints()
	{
		return $this->points;
	}


	public function setPoints($points)
	{
		$this->points = $points;
	}


	public function getPurchaseCount()
	{
		return $this->purchaseCount;
	}


	public function setPurchaseCount($purchaseCount)
	{
		$this->purchaseCount = $purchaseCount;
	}


	public function getLevel()
	{
		return $this->level;
	}


	public function setLevel($level)
	{
		$this->level = $level;
	}
	public function getImageLink()
	{
		return $this->imageLink;
	}


	public function setImageLink($imageLink)
	{
		$this->imageLink = $imageLink;
	}

}
