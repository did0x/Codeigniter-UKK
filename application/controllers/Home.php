<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();		

		$this->load->model('m_data');
	}

	public function index(){
		$data["rute"] = $this->m_data->tampil_data("rute")->result();
		$this->load->view('home',$data);
	}

	public function search_flight(){
		$rute_from = $this->input->get('flight-from');
		$rute_to = $this->input->get('flight-to');

		$where = array(
			'rute_from' => $rute_from,
			'rute_to' => $rute_to
			);
		$select = 'rute.id,rute.depart_at,rute.rute_from,rute.rute_to,rute.transit_to,rute.transit_arrived,rute.arrived,rute.price,transportation.description';
		$table = 'rute';
		$table_join = 'transportation';
		$on = 'rute.transportation_id = transportation.id';

		$data['depart'] = $where;
		$data['flight'] = $this->m_data->search_data($select,$where,$table,$table_join,$on)->result();
		$this->load->view('home_flight',$data);
	}

	public function reservation(){
		$rute_id = $this->input->get('rute');
		$where = array(
				'rute.id' => $rute_id
			);

		$select = '*';
		$table = 'rute';
		$table_join = 'transportation';
		$on = 'rute.transportation_id = transportation.id';

		$data['flight'] = $this->m_data->search_data($select,$where,$table,$table_join,$on)->result();
		$this->load->view('home_reservation',$data);
	}

	public function confirm(){
		$this->load->view('home_confirm');
	}
}
