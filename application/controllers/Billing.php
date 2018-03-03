<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Billing extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('cart', 'session'));

		$this->load->model('Billing_model');
	}

	public function index()
	{
		$this->data['title'] = 'Billing';

		$this->load->view('pages/billing', $this->data);
	}


	public function save_order()
	{
		$data = new stdClass();
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'name', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
		$this->form_validation->set_rules('phone', 'phone', 'trim|required|numeric');

		if ($this->form_validation->run() == false){
				$this->load->view('pages/billing');
		}else{

			$customer = array(
			'name' 		=> $this->input->post('name'),
			'email' 	=> $this->input->post('email'),
			'phone' 	=> $this->input->post('phone')
		);

		if($cust_id = $this->Billing_model->insert_customer($customer)){

		$order = array(
			'date' 			=> date('Y-m-d'),
			'customerid' 	=> $cust_id
		);

		$ord_id = $this->Billing_model->insert_order($order);

		if ($cart = $this->cart->contents()):
			foreach ($cart as $item):
				$order_detail = array(
					'orderid' 		=> $ord_id,
					'productid' 	=> $item['id'],
					'quantity' 		=> $item['qty'],
					'price' 		=> $item['price']
				);

				$cust_id = $this->Billing_model->insert_order_detail($order_detail);
			endforeach;
			$data->cart = $cart;
		endif;

			$this->load->view('pages/billing_success', $data);
		}else{
			$this->load->view('pages/billing');
		}
		}
		}

	}


?>
