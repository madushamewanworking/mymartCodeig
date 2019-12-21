<?php


class CartController extends CI_Controller
{
  public function index(){
  	$this->getCartDetails();
  }

	public function getCartDetails(){
		$this->load->model('Products_manager');
		$userId= $this->session->userdata('usr_id');
		$cartDetails=$this->Products_manager->getCartItems($userId);

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


	public function checkproduct(){
		$data = $this->input->post('cartpro');
//
//		var_dump($data);
//
//		setcookie("hello","sdfdlhfsluuuuuuuu");



//		setcookie("hello","sdfdlhfsluuuuuuuu");
//		print_r("dfsgbshrfhassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssc");

		$this->load->model('Cart_manager');
		$productList=$this->Cart_manager->getChekedList($data);

		$purchaseCount=count($productList);
		$price=0;

		setcookie("hello","$purchaseCount");

		foreach ($productList as $d){
			$price+=$d->getProductPrice()*$d->getProductCount();
		}

		$pay_data = array(
			'count' => $purchaseCount,
			'amount'=>$price,
			'proList' => $productList
		);

		setcookie("price","$price");
		$this->load->view('pages/paymentdetail_page',$pay_data);

//		redirect('payementdetailcontroller');
	}

	public function checkFavproduct(){
		$data = $this->input->post('cartpro');
//
//		var_dump($data);
//
//		setcookie("hello","sdfdlhfsluuuuuuuu");

		foreach ($data as $d){
			setcookie($d,$d);
		}

//		setcookie("hello","sdfdlhfsluuuuuuuu");
//		print_r("dfsgbshrfhassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssc");

		$this->load->model('Cart_manager');
		$productList=$this->Cart_manager->getFavChekedList($data);

		redirect('CartController');

//		$purchaseCount=count($productList);
//		$price=0;
//
//		setcookie("hello","$purchaseCount");
//


//		$pay_data = array(
//			'count' => $purchaseCount,
//			'amount'=>$price,
//			'proList' => $productList
//		);
//
//		setcookie("price","$price");
//		$this->load->view('pages/cartPage',$pay_data);

//		redirect('payementdetailcontroller');
	}

}
