<?php


class FavouritesController extends CI_Controller
{
	public function index()
	{
		$this->getCartDetails();
	}
	public function getCartDetails(){
		$this->load->model('Products_manager');
		$userId = $this->session->userdata('usr_id');
		$favDetails=$this->Products_manager->getFavouriteItems($userId);

		$Details =array(
			'favourites'=>$favDetails
		);

		$this->load->view('pages/favouritesPage',$Details);
	}
}
