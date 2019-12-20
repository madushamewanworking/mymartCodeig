<?php


class LeaderboardController extends  CI_Controller
{
	public  function index(){
		$this->getLBList();
	}

	public function getLBList(){

		$this->load->model('LeaderboardManager');
		$lbdetails=$this->LeaderboardManager->getLeaderboardList();

		$Details =array(
			'leaderboardData'=>$lbdetails
		);


		$this->load->view('pages/leaderboardPage',$Details);
 	}
}

