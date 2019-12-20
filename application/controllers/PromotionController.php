<?php


class PromotionController extends CI_Controller
{
	public function index(){
		$this->getPromotionDetails();
	}

	public function getPromotionDetails(){
//		$this->load->model('Products_manager');
//		$cartDetails=$this->Products_manager->getCartItems(1);
//
//		$Details =array(
//			'cartDetails'=>$cartDetails
//		);

		$this->load->view('pages/promotionpage');
	}

}
