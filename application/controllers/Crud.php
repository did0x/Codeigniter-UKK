<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	function __construct(){
		parent::__construct();		

		$this->load->model('m_user');
        $this->load->helper('url');
	}

	public function index()
	{
		// Sementara di kosongkan dulu
		// $data['user'] = $this->m_data->tampil_data()->result();	
		// var_dump($data);
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
			'password' => $password,
			'level' => $level
			);

		$where = array(
			'id' => $id
			);

		if ($id == 0) {
			//Add Data
			$this->m_user->input_data($data,'user');
			redirect('admin/table_user');
		} else {
			//Update Data
			$this->m_user->update_data($where,$data,'user');
			redirect('admin/table_user');
		}


	}


	public function delete_user($id){
		$where = array('id' => $id);
		$this->m_user->hapus_data($where,'user');
		redirect('admin/table_user');
	}

/////////////// FUNCTION FOR TRANSPORTATION  ///////////////////////////

	public function add_transportation(){
		$id = $this->input->post('id');
		$code= $this->input->post('code');
		$description= $this->input->post('description');
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
			$this->m_user->input_data($data,'transportation');
			redirect('admin/table_transportation');
		} else {
			//Update Data
			$this->m_user->update_data($where,$data,'transportation');
			redirect('admin/table_transportation');
		}


	}


	public function delete_transportation($id){
		$where = array('id' => $id);
		$this->m_user->hapus_data($where,'transportation');
		redirect('admin/table_transportation');
	}

/////////////// FUNCTION FOR RUTE  ///////////////////////////

	public function add_rute(){
		$id = $this->input->post('id');
		$code= $this->input->post('code');
		$description= $this->input->post('description');
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
			$this->m_user->input_data($data,'rute');
			redirect('admin/table_transportation');
		} else {
			//Update Data
			$this->m_user->update_data($where,$data,'rute');
			redirect('admin/table_transportation');
		}


	}


	public function delete_rute($id){
		$where = array('id' => $id);
		$this->m_user->hapus_data($where,'rute');
		redirect('admin/table_transportation');
	}

/////////////// FUNCTION FOR TRANSPORTATION  ///////////////////////////

	public function add_transportation(){
		$id = $this->input->post('id');
		$code= $this->input->post('code');
		$description= $this->input->post('description');
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
			$this->m_user->input_data($data,'transportation');
			redirect('admin/table_transportation');
		} else {
			//Update Data
			$this->m_user->update_data($where,$data,'transportation');
			redirect('admin/table_transportation');
		}


	}


	public function delete_transportation($id){
		$where = array('id' => $id);
		$this->m_user->hapus_data($where,'transportation');
		redirect('admin/table_transportation');
	}


/////////////// FUNCTION FOR CUSTOMER  ///////////////////////////

	public function add_customer(){
		$id = $this->input->post('id');
		$code= $this->input->post('code');
		$description= $this->input->post('description');
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
			$this->m_user->input_data($data,'customer');
			redirect('admin/table_transportation');
		} else {
			//Update Data
			$this->m_user->update_data($where,$data,'customer');
			redirect('admin/table_transportation');
		}


	}


	public function delete_transportation($id){
		$where = array('id' => $id);
		$this->m_user->hapus_data($where,'customer');
		redirect('admin/table_transportation');
	}






}
