<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Products_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_all()
	{
		$query = $this->db->get('products');
		return $query->result_array();
	}

	public function get_product($product_id){
		$this->db->from('products');
		$this->db->where('serial', $product_id);
		return $this->db->get()->row();
	}
	public function search($query){
		$this->db->from('products');
		$this->db->like('name', $query);
		$this->db->order_by('serial');

		return $this->db->get()->result();
	}

}

?>
