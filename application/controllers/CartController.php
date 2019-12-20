<?php


class CartController extends CI_Controller
{
  public function index(){
  	$this->getCartDetails();
  }

	public function getCartDetails(){
		$this->load->model('Products_manager');
		$cartDetails=$this->Products_manager->getCartItems(1);

		$Details =array(
			'cartDetails'=>$cartDetails
		);

		$this->load->view('pages/cartPage',$Details);
	}



	public function addcart(){
		/*check login status*/
//		if (!$this->session->userdata('login_status')) {
//			redirect('authentication/login_user');
//		}



		$this->load->model('Cart_manager');
		$product=$this->Cart_manager->addcart();

		redirect('maincontroller');

	}

	public function addfav(){
		/*check login status*/
//		if (!$this->session->userdata('login_status')) {
//			redirect('authentication/login_user');
//		}



		$this->load->model('Cart_manager');
		$product=$this->Cart_manager->addfav();

//		redirect('maincontroller');

	}
}
