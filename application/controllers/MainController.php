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

//		$catArray= array();
//		for( $i=0; $i<count(4); $i++ ){
//			$catArray= $categories[$i];
//
//		}

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
		$commen=$this->Products_manager->comments($id);
		$data =array(
			'product' =>$product,
			'comments'=>$commen
		);

		$this->load->view('pages/productdetailpage',$data);
	}
	public function addcomment()
	{
		$this->load->model('Products_manager');
		$this->Products_manager->addcomment();
		redirect('maincontroller/productDetail/'.$this->input->post('proid'));
	}

	public function addpoints()
	{
		$this->load->model('Products_manager');
		$this->Products_manager->addpoints();
		redirect('accountcontroller');
	}


}
