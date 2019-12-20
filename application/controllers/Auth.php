<?php


class Auth extends CI_Controller
{
	public function register_user()
	{

		if ($this->session->userdata('login_status')) {
			redirect('maincontroller');
		}
		//		retrive available music genres
//		$returnedResult_genreList = $this->musicgenres_model->get_genres();

		//		debug purpose
		//		print_r($register_data)
		$register_data = array(
			'title' => 'Register User',
//			'genreList' => $returnedResult_genreList['genList']
		);
		//form validations

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
//		$this->form_validation->set_rules('conpassword', 'Confirm Password');
		//print_r("hellozxcdssssssssssssssssssssssssc");


		if ($this->form_validation->run() === FALSE) {

			/// derectory path
			$this->load->view('pages/register', $register_data);

			$this->session->set_flashdata('not_register', 'Fields Required or username existing');
			setcookie("ok","WW");
		} else {
			//password encryption
			$encrypt_pw = password_hash($this->input->post('password'), PASSWORD_DEFAULT);


//			$this->load->model('Auth_manager');
//			setcookie("ok",$encrypt_pw);
			$this->Auth_manager->register_user($encrypt_pw);
			//session handling
//			setcookie("ok","rrrrSDDSDDrrrrrrrrr");
			$this->session->set_flashdata('user_successfully_registered', 'You can log now');
			redirect('auth/register_user');

		}
	}

	public function login_user()
	{

//		$this->session->unset_userdata('login_status');
//		$this->session->unset_userdata('username');
//		$this->session->unset_userdata('usr_id');

		if ($this->session->userdata('login_status')) {
			setcookie("ls", $this->session->userdata('login_status'));
			redirect('maincontroller/index');
//			$this->load->view('pages/homepage');
		}else {
			$login_data = array(
				'title' => 'Login User',
//			'genreList' => $returnedResult_genreList['genList']
			);
//		setcookie("ono","WW");
			//form validation
			$this->form_validation->set_rules('username_log', 'Username', 'required');
			$this->form_validation->set_rules('password_log', 'Password', 'required');


			if ($this->form_validation->run() === FALSE) {
				setcookie("ono", "WW");
//			$this->load->view('pages/login', $login_data);
				$this->load->view('pages/login', $login_data);

			} else {

				//get login data
				$login_username = $this->input->post('username_log');
				$login_password = $this->input->post('password_log');


				$login_user_id = $this->Auth_manager->login_user($login_username, $login_password);

//			setcookie("osdfdsfno",$login_user_id);

				if ($login_user_id) {
					//session start
					//die($login_user);
					$login_user_data = array(
						'usr_id' => $login_user_id,
						'username' => $login_username,
						'login_status' => true
					);
					//set session userdata
					$this->session->set_userdata($login_user_data);
					$this->session->set_flashdata('user_successfully_loggedin', 'User successfully logged in');

					redirect('maincontroller/view/homepage');
				} else {
					//session handling
					$this->session->set_flashdata('user_login_fail', 'User login failed Wrong Credentials');
					redirect('auth/login_user');
				}
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('login_status');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('usr_id');

		$this->session->set_flashdata('user_logout', 'User log out');
		redirect('auth/login_user');
	}


}
