<?php


class PayementdetailController extends CI_Controller
{
public function index(){


	$this->load->view('pages/paymentdetail_page');
}

//	public function showAmount(){
//		$this->load->view('pages/paymentdetail_page');
//	}

	public function sendmail()
	{

//		$this->input->post('amount');
//		setcookie("hello",$this->input->post('amount'));
//
//		$this->load->library('email');
//
//		$config = Array(
//			'protocol'  => 'smtp',
//			'smtp_host' => 'smtp.googlemail.com',
//			'smtp_port' => 465,
//			'smtp_user' => 'mymarketuiux@gmail.com',
//			'smtp_pass' => 'mymarket123',
//			'mailtype'  => 'html',
//			'charset'  => 'utf-8',
//			'smtp_crypto'   => 'ssl',
//			'wordwrap'  => TRUE
//		);
//		$this->email->initialize($config);
//
//		$this->email->from('mymarketuiux@gmail.com');
//		$this->email->to('madushamewan@gmail.com');
//		$this->email->subject('Send Email Codeigniter');
//		$this->email->message('The email send using codeigniter library');
//
//
//		$this->email->send();
	}


}





