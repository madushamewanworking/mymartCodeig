<?php


class AccountController extends CI_Controller
{
	public function index()
	{
		$this->load->view('pages/accountpage');
	}


	public function editAccountDisplay(){

		$this->load->model('Auth_manager');
		$userid= $this->session->userdata('usr_id');
		$userDetails=$this->Auth_manager->getUserDetails($userid);

		$Details =array(
			'userDetails'=>$userDetails
		);



		$this->load->view('pages/editaccountPage',$Details);
	}



	public function  editAccount(){
		$details = array(
			'username'=>$this->input->post('username', TRUE),
			//'lastName'=>$this->input->post('lname', TRUE),
			'email'=>$this->input->post('email', TRUE),
			'address'=>$this->input->post('address', TRUE),
			//'password'=>md5($this->input->post('password',TRUE)),

		);

		$this->load->model('Auth_manager');
		$response = $this->Auth_manager->userEdit($details);

		$this->load->view('pages/AccountPage');
	}
}
