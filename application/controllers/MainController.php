<?php


class MainController extends CI_Controller
{
	public  function  view($page = 'HomePage'){
		if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
			show_404();
		}
		$data['title'] = ucfirst($page);

		$this->load->view('pages/'.$page, $data);


	}
	public function index()
	{
//		if (!$this->session->userdata('login_status')) {
//			redirect('auth/login_user');
//		}

		setcookie("mewan","csssssssssss");


		$this->load->model('Products_manager');
		$categories=$this->Products_manager->getCategories();



		$products=$this->Products_manager->getProductItems();


		$catDetails =array(
			'categories'=>$categories,
			'products' =>$products
		);

		$this->load->view('pages/homepage',$catDetails);
	}

	public function ProductByCategory($id)
	{
		$this->load->model('Products_manager');
		$productList=$this->Products_manager->ProductByCategory($id);

		$data =array(
			'products' =>$productList
		);

		$this->load->view('pages/productpage',$data);
	}


	public function productDetail($id)
	{
		$this->load->model('Products_manager');
		$product=$this->Products_manager->productDetail($id);

		$data =array(
			'product' =>$product
		);

		$this->load->view('pages/productdetailpage',$data);
	}
}
