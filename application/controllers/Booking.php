<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	function __construct(){
		parent::__construct();		

		$this->load->model('m_data');
	}

	public function index() {
		$data['reservation'] = null;
		$this->load->view('booking',$data);
	}

	public function search() {

		if ($this->input->post('reservation_code')) {
	
		$reservation_code = $this->input->post('reservation_code');

		$select = '*';
		$table = 'reservation';
		$table_join = 'customer';
		$table_join_duo = 'rute';
		$on = 'reservation.customer_id = customer.id';
		$on_duo = 'reservation.rute_id = rute.id';

		$where = array(
			'reservation.reservation_code' => $reservation_code
		);

		$reservation_data = $this->m_data->search_data_double($select,$where,$table,$table_join,$on,$table_join_duo,$on_duo)->result();		
		$status = $reservation_data[0]->status;
		if ($status == 0) {
			$status = "NOT PAID";
		} else {
			$status = "PAID";
		}

		$reservation = [];
		foreach ($reservation_data as $data ) {
			$reservation[] = [
				'name' => $data->name,
				'rute_from' => $data->rute_from,
				'rute_to' => $data->rute_to,
				'reservation_at' => $data->reservation_at,
				'reservation_date' => $data->reservation_date,
				'status' => $status

			];
		}

		$data = [
			'reservation' => $reservation
		];


		$this->load->view('booking',$data);

		} else {
			$data['reservation'] = null;
			$this->load->view('booking',$data);
		}
	}
}
