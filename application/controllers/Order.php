<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url', 'html'));
		$this->load->model('home_model');
		$this->load->library( 'session');
	}
	public function place($product_id = false){
		//check if user is logged in
		if ((isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)){
			$this->load->view('pages/order');
		}else{
		}
	}
	
}
	
	