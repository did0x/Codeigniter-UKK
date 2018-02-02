<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();		

		$this->load->model('m_user');
		$this->load->model('m_transportation');
        $this->load->helper('url');

        if($this->session->userdata('status') != "login"){
			redirect(site_url("login"));
		}
		
		
	}

	public function index()
	{
		$this->load->view('admin');
	}

	//Function for User;

	public function table_user()
	{
		$data['user'] = $this->m_user->tampil_data()->result();	
		$this->load->view('table_user',$data);
	}

	public function form_user()
	{
		$data['user'] = null;
		$this->load->view('form_user',$data);
	}

	public function edit_form_user($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_user->tampil_data_id($where,'user')->result();
		$this->load->view('form_user',$data);
	}

	//Function for Transportation

	public function table_transportation()
	{
		$data['transportation'] = $this->m_transportation->tampil_data()->result();	
		$this->load->view('table_transportation',$data);
	}

	public function form_transportation()
	{
		$data['transportation'] = null;
		$this->load->view('form_transportation',$data);
	}

	public function edit_form_transportation($id){
		$where = array('id' => $id);
		$data['transportation'] = $this->m_transportation->tampil_data_id($where,'transportation')->result();
		$this->load->view('form_transportation',$data);
	}



}
