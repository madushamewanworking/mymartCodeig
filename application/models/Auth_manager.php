<?php

include_once ('User.php');


class Auth_manager extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function register_user($encrypt_pw)
	{
		$register_usr_data = array(
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => $encrypt_pw,
//			'user_profile_img_url' => $this->input->post('profileimglink')
		);
		setcookie("ok","dbb");
		$result = $this->db->insert('user', $register_usr_data);
		//get return value just added to db
		$insert_id = $this->db->insert_id();

		/*add new user to database*/
		return $result;
	}

	public function login_user($username, $password)
	{

		$this->db->where('username', $username);
		//		$this->db->where('password',$password);
		//		$login_summary=$this->db->get('users');
		$query = $this->db->get('user');
		$result = $query->row_array();
//
//		setcookie("aa",$password);

		if (!empty($result) && password_verify($password, $result['password'])) {

			setcookie("aa",$result['id']);
			return $result['id'];


		} else {
//			setcookie("aa",$result['id']);
			return false;
		}

	}


	public function getUserDetails($userId){
		$this->db->select('user.*');
		$this->db->from('user');
		//	$this->db->join('user', 'posts.userId = user.id');
		$this->db->where('user.id',$userId);
		//	$this->db->order_by('createdDate', 'DESC');

		$query= $this->db->get();
		$userDetails=array();
		if($query->num_rows() !=0){

			foreach ($query->result() as $catRow){
				$userDetails[]=new User($catRow->id, $catRow->address,$catRow->email, $catRow->username, $catRow->imagelink);
			}
			return $userDetails;
		}else{
			return $userDetails;
		}
	}

	public function userEdit($details)
	{

//		$data=$this->db->insert('user',$details);
//		//$insert_id = $this->db->insert_id();
//
//		return $data;

       $userId= $this->session->userdata('usr_id');

		//     echo $this->input->post('id');
		//$slugKey=url_title($this->input->post('title'));

		$this->db->where('id',$userId);
		return $this->db->update('user', $details);


	}

}
