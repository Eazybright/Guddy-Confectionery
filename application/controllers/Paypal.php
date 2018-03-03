<?php
!defined('BASE_PATH') OR exit('No direct script access allowed');

class Paypal extends CI_Controller{

  public function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url', 'html'));
		$this->load->model(array('home_model','products_model'));
		$this->load->library(array('form_validation', 'session'));
		$this->load->database('soc_guddy');
	}

  public function index(){
    if ((isset($_SESSION['logged_in'] ) && $_SESSION['logged_in'] == true )){
      $this->load->view('pages/pay_with_paypal');
    }else{
      redirect('home/login');
    }
  }

}

/* End of file Home.php */
/* Location: system/application/controllers/ */
