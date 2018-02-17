<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();		

		$this->load->model('m_data');
        $this->load->helper('url');
	}

	public function index(){
		$data["rute"] = $this->m_data->tampil_data("rute")->result();
		$this->load->view('home',$data);
	}

	public function search_flight($rute_from,$rute_to){

		$where = array(
			'rute_from' => $rute_from,
			'rute_to' => $rute_to
			);

		$data['flight'] = $this->m_data->search_data($where,'rute')->result();
		$this->load->view('home_flight',$data);
	}
}
