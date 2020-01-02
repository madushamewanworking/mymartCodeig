<?php
include_once ('Leaderboard.php');


class LeaderboardManager extends CI_Model
{
	public function getLeaderboardList(){
		$this->db->select('leaderboard.*');
		$this->db->from('leaderboard');
		$this->db->order_by("leaderboard.level", "desc");
		//$this->db->where('cart.user_id');

		$query= $this->db->get();
		$leaderboardDetails=array();
		if($query->num_rows() !=0){

			foreach ($query->result() as $lbRow){
				$leaderboardDetails[]=new Leaderboard($lbRow->user_id, $lbRow->username, $lbRow->point, $lbRow->purchase_count, $lbRow->level, $lbRow->proimageLink);
			}
			return $leaderboardDetails;
		}else{
			return $leaderboardDetails;
		}


	}

	public function getinfo(){
		$this->db->select('leaderboard.*');
		$this->db->from('leaderboard');

		$this->db->where('leaderboard.user_id',$this->session->userdata('usr_id'));

		$query= $this->db->get();
		$leaderboardinfo=array();
		if($query->num_rows() !=0){

			foreach ($query->result() as $lbRow){
				$leaderboardinfo[]=new Leaderboard($lbRow->user_id, $lbRow->username, $lbRow->point, $lbRow->purchase_count, $lbRow->level, $lbRow->proimageLink);
			}
			return $leaderboardinfo;
		}else{
			return $leaderboardinfo;
		}

	}


}
