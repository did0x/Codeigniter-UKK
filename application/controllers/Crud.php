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


}
