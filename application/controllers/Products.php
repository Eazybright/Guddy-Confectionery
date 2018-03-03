<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url', 'html'));
		$this->load->model('products_model');
		$this->load->library( 'session');
	}
	public function index(){
		//check if user is logged in
		if ((isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)){
			$this->data['title'] = 'Products';

			$this->data['products'] = $this->products_model->get_all();

			$this->load->view('pages/products', $this->data);
		}else{
			$this->load->view('pages/home');
		}
	}
	public function search(){
		$data = new stdClass();
		$query = $this->input->get('query');
		$post_results = $this->products_model->search($query);

		$data->posts = $post_results;
		$data->query = $query;
		$this->load->view('pages/search_result', $data);
	}

}
/* End of file Products.php */
/* Location: system/application/controllers/ */
