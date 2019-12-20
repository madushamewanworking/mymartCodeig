<?php


class User
{
 private $userid;
 private $address;
 private $email;
 private $username;
 private $profileimage;


	public function __construct($userid, $address, $email, $username, $profileimage)
	{
		$this->userid = $userid;
		$this->address = $address;
		$this->email = $email;
		$this->username = $username;
		$this->profileimage = $profileimage;
	}

	public function getUserid()
	{
		return $this->userid;
	}


	public function setUserid($userid)
	{
		$this->userid = $userid;
	}


	public function getAddress()
	{
		return $this->address;
	}


	public function setAddress($address)
	{
		$this->address = $address;
	}


	public function getEmail()
	{
		return $this->email;
	}


	public function setEmail($email)
	{
		$this->email = $email;
	}


	public function getUsername()
	{
		return $this->username;
	}


	public function setUsername($username)
	{
		$this->username = $username;
	}


	public function getProfileimage()
	{
		return $this->profileimage;
	}


	public function setProfileimage($profileimage)
	{
		$this->profileimage = $profileimage;
	}



}
