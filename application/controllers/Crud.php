<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	function __construct(){
		parent::__construct();		

		$this->load->model('m_data');
        $this->load->helper('url');
	}

	public function index(){
		// Sementara di kosongkan dulu
	}


/////////////// FUNCTION FOR USER  ///////////////////////////

	public function add_user(){
		$id = $this->input->post('id');
		$fullname= $this->input->post('fullname');
		$username= $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');

		$data = array(
			'fullname' => $fullname,
			'username' => $username,
			'password' => $this->m_data->encrypt_data($password),
			'level' => $level
			);

		$where = array(
			'id' => $id
			);

		if ($id == 0) {
			//Add Data
			$this->m_data->input_data($data,'user');
			redirect('admin/table_user');
		} else {
			//Update Data
			$this->m_data->update_data($where,$data,'user');
			redirect('admin/table_user');
		}


	}


	public function delete_user($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'user');
		redirect('admin/table_user');
	}

/////////////// FUNCTION FOR TRANSPORTATION  ///////////////////////////

	public function add_transportation(){
		$id = $this->input->post('id');
		$code = $this->input->post('code');
		$description = $this->input->post('description');
		$seat_qty = $this->input->post('seat_qty');

		$data = array(
			'code' => $code,
			'description' => $description,
			'seat_qty' => $seat_qty
			);

		$where = array(
			'id' => $id
			);

		if ($id == 0) {
			//Add Data
			$this->m_data->input_data($data,'transportation');
			redirect('admin/table_transportation');
		} else {
			//Update Data
			$this->m_data->update_data($where,$data,'transportation');
			redirect('admin/table_transportation');
		}


	}


	public function delete_transportation($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'transportation');
		redirect('admin/table_transportation');
	}

/////////////// FUNCTION FOR RUTE  ///////////////////////////

	public function add_rute(){
		$id = $this->input->post('id');
		$transportation_id = $this->input->post('transportation_id');
		$rute_to = $this->input->post('rute_to');
		$rute_from = $this->input->post('rute_from');
		$depart_at = $this->input->post('depart_at');
		$transit_to = $this->input->post('transit_to');
		$transit_arrived = $this->input->post('transit_arrived');
		$arrived = $this->input->post('arrived');
		$price = $this->input->post('price');
		

		$data = array(
			'rute_to' => $rute_to,
			'rute_from' => $rute_from,
			'depart_at' => $depart_at,
			'transit_to' => $transit_to,
			'transit_arrived' => $transit_arrived,
			'arrived' => $arrived,
			'price' => $price,
			'transportation_id' => $transportation_id
			);

		$where = array(
			'id' => $id
			);

		if ($id == 0) {
			//Add Data
			$this->m_data->input_data($data,'rute');
			redirect('admin/table_rute');
		} else {
			//Update Data
			$this->m_data->update_data($where,$data,'rute');
			redirect('admin/table_rute');
		}


	}


	public function delete_rute($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'rute');
		redirect('admin/table_rute');
	}


/////////////// FUNCTION FOR Passenger  ///////////////////////////	


}
