<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();		

		$this->load->model('m_data');
        $this->load->helper('url');
		
		
	}

	public function index()
	{
		$this->load->view('admin');
	}

	public function table()
	{
		$data['user'] = $this->m_data->tampil_data()->result();	
		$this->load->view('table',$data);
	}

	public function form()
	{
		$data['user'] = null;
		$this->load->view('form',$data);
	}

	public function edit_form($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_data->tampil_data_id($where,'user')->result();
		$this->load->view('form',$data);
	}



}
