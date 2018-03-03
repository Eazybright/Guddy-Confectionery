<?php
class Home_model extends CI_Model{
	public function __construct(){
		parent::__construct();
			$this->load->database();
	}
	//get user details into the database
	public function get_user($user_id){
		$this->db->where('id', $user_id);
		return $this->db->get('guddy')->row();

	}
	//register user details into the database
	public function register($data){
		return $this->db->insert('guddy', $data);
	}
	//comment
	public function get_user_comment($user_id){
		$this->db->where('id', $user_id);
		return $this->db->get('complaint')->row();

	}
	public function register_comment($data){
		return $this->db->insert('complaint', $data);
	}
	//get user's username from database
	public function get_user_from_username($username){
		$this->db->where('username', $username);
		return $this->db->get('guddy')->row();
	}
	//verify user password before login
	public function resolve_login($username, $password){

		$this->db->where('username', $username);

		$hash = $this->db->get('guddy')->row('password');

		return password_verify($password, $hash);
	}
	//get id from user
	public function get_user_id_from_username($username){
		$this->db->where('username', $username);
		$this->db->select('id');
		return $this->db->get('guddy')->row();
	}
	
}


?>
