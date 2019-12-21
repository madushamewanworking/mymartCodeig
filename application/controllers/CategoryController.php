<?php


class CategoryController extends CI_Controller
{
	public function index(){
		$this->getCategories();
	}


	public function getCategories(){
		$this->load->model('Products_manager');
		$categories=$this->Products_manager->getCategories();



		$catDetails =array(
			'categories'=>$categories

		);

		$this->load->view('pages/categoryPage',$catDetails);
	}

}
