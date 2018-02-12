<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();		

		$this->load->model('m_data');		
        $this->load->helper('url');

        if($this->session->userdata('status') != "login"){
			redirect(site_url("login"));
		}
		
		
	}

	public function index()
	{
		$this->load->view('admin');
	}

/////////////// FUNCTION FOR USER  ///////////////////////////

	public function table_user()
	{
		$data['user'] = $this->m_data->tampil_data('user')->result();	
		$this->load->view('table_user',$data);
	}

	public function form_user()
	{
		$data['user'] = null;
		$this->load->view('form_user',$data);
	}

	public function edit_form_user($id){
		$where = array('id' => $id);
		$data['model'] = $this->m_data;
		$data['user'] = $this->m_data->tampil_data_id($where,'user')->result();
		$this->load->view('form_user',$data);
	}

/////////////// FUNCTION FOR TRANSPORTATION  ///////////////////////////

	public function table_transportation()
	{
		$data['transportation'] = $this->m_data->tampil_data('transportation')->result();	
		$this->load->view('table_transportation',$data);
	}

	public function form_transportation()
	{
		$data['transportation'] = null;
		$this->load->view('form_transportation',$data);
	}

	public function edit_form_transportation($id){
		$where = array('id' => $id);
		$data['transportation'] = $this->m_data->tampil_data_id($where,'transportation')->result();
		$this->load->view('form_transportation',$data);
	}


/////////////// FUNCTION FOR RUTE  ///////////////////////////

	public function table_rute()
	{
		$data['rute'] = $this->m_data->tampil_data('rute')->result();	
		$this->load->view('table_rute',$data);
	}

	public function form_rute()
	{
		$data['rute'] = null;
		$this->load->view('form_rute',$data);
	}

	public function edit_form_rute($id){
		$where = array('id' => $id);
		$data['rute'] = $this->m_data->tampil_data_id($where,'rute')->result();
		$this->load->view('form_rute',$data);
	}


/////////////// FUNCTION FOR CUSTOMER  ///////////////////////////

	public function table_customer()
	{
		$data['customer'] = $this->m_data->tampil_data('customer')->result();	
		$this->load->view('table_customer',$data);
	}


	// !TODO ADD FUNCTION MESSAGE CUSTOMER


}
