<?php


class FavouritesController extends CI_Controller
{
	public function index()
	{
		$this->getCartDetails();
	}
	public function getCartDetails(){
		$this->load->model('Products_manager');
		$favDetails=$this->Products_manager->getFavouriteItems(1);

		$Details =array(
			'favourites'=>$favDetails
		);

		print_r($favDetails);

		$this->load->view('pages/favouritesPage',$Details);
	}
}
