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

		if ($this->input->get('flight-from') && $this->input->get('flight-to') && $this->input->get('departing') && 
			$this->input->get('adults')) {

			$rute_from = $this->input->get('flight-from');
			$rute_to = $this->input->get('flight-to');
			$departing = $this->input->get('departing');
			$passenger = $this->input->get('adults');

		} else {
			redirect(site_url("home"));
		} 
			

		$where = array(
			'rute_from' => $rute_from,
			'rute_to' => $rute_to
			);


		$select = 'rute.id, rute.depart_at, rute.rute_from, rute.rute_to, rute.transit_to, rute.transit_arrived,
				   rute.arrived, rute.price, transportation.code, transportation.description, transportation.seat_qty';
		$table = 'rute';
		$table_join = 'transportation';
		$on = 'rute.transportation_id = transportation.id';
		// 
		$search_data = $this->m_data->search_data($select,$where,$table,$table_join,$on)->result();

		$search =[];
		foreach ($search_data as $data ) {
			$search[]  = [
				'id' => $data->id,
				'rute_from' => $data->rute_from,
				'rute_to' => $data->rute_to,
				'depart_at' => $data->depart_at,
				'arrived' => $data->arrived,
				'transit_to' => $data->transit_to,
				'transit_arrived' => $data->transit_arrived,
				'price'=> $data->price,
				'code' => $data->code,
				'description' => $data->description,
				'seat_qty' => $data->seat_qty
			];
		}

		$data = [
			'data' => $search
		];

		$this->load->view('home_flight',$data);

	}

	public function reservation(){
		$rute_id = $this->input->post('rute');
		$passenger = $this->input->post('passenger');
		$where = array(
				'rute.id' => $rute_id
			);

		$select = '*';
		$table = 'rute';
		$table_join = 'transportation';
		$on = 'rute.transportation_id = transportation.id';

		$data_rute = $this->m_data->search_data($select,$where,$table,$table_join,$on)->result();

		if (count($data_rute) > 0) {

			$price = $data_rute[0]->price;
			$total_price = $price * $passenger;

			$data['data']	= [
				'flight' => $data_rute[0],
				'total_price' => $total_price
			];

			$this->load->view('home_reservation',$data);

		} else {
			redirect(site_url('home'));
		}

	}

	public function booking(){
		if ($this->input->post('rute_id')) {
		
		$rute_id = $this->input->post('rute_id');
/////// Data untuk customer //////////////////////////////////////////////
		$firstname_customer = $this->input->post('firstname');
		$lastname_customer = $this->input->post('lastname');
		$email_customer = $this->input->post('email');
		$phone_customer = $this->input->post('phone');
		$city = $this->input->post('city');
		$address = $this->input->post('address');
		$gender = $this->input->post('gender');
		//----
		$name_customer = $firstname_customer. " ".$lastname_customer;
		$full_address = $city.",".$address;

		$data_customer = [
			'name' => $name_customer,
			'email' => $email_customer,
			'address' => $full_address,
			'phone' => $phone_customer,
			'gender' => $gender

		];

		$customer_id = $this->m_data->input_data_id($data_customer,"customer");

/////// Data untuk reservasi //////////////////////////////////////////////
		$reservation_at = date("Y-m-d");
		$reservation_date = date("Y-m-d",strtotime($this->input->post('departing')));	

		$code = 'BOOKAW'.rand(11111,99999);
		$reservation_code = $code;
		$where_code = array(
			'reservation_code' => $reservation_code
		);
		// while (count($this->m_data->tampil_data_where($where_code,'reservation')) != 0) {
		// 	$code = 'BOOKAW'.rand(11111,99999);
		// 	$reservation_code = $code;
		// } 

		$data_reservation = [
			'customer_id' => $customer_id,
			'reservation_code' => $reservation_code,
			'reservation_at' => $reservation_at,
			'reservation_date' => $reservation_date,
			'rute_id' => $rute_id
		];

		$reservation_id = $this->m_data->input_data_id($data_reservation,"reservation");

/////// Data untuk passenger //////////////////////////////////////////////
		$passengers = $this->input->post('passenger');
		//
		$firstname_passenger = $this->input->post('firstname_passenger');
		$lastname_passenger = $this->input->post('lastname_passenger');
		$phone_passenger = $this->input->post('phone_passenger');
		$passport_passenger = $this->input->post('passport_passenger');
		$seat = $this->input->post('seat');

		for ($i=0; $i < $passengers; $i++) { 

			$name_passenger[$i] =  $firstname_passenger[$i]." ".$lastname_passenger[$i];
			$data_passenger = [
				'customer_id' => $customer_id,
				'reservation_id' => $reservation_id,
				'name' => $name_passenger[$i],
				'phone' => $phone_passenger[$i],
				'passport' => $passport_passenger[$i],
				'seat' => $seat[$i]
			];
			// var_dump($data_passenger);
			$this->m_data->input_data($data_passenger,'passenger');		
		}

		$data_session = array(
				'rute_id' => $rute_id,
				'reservation_code' => $reservation_code,
				'reservation_id' => $reservation_id,
				);

		$this->session->set_userdata($data_session);
		$this->confirm();

		} else {
			redirect (site_url('home'));
		}
	}

	public function confirm(){
		if ($this->session->userdata('reservation_id')) {
		
		$rute_id = $this->session->userdata('rute_id');
		$reservation_id = $this->session->userdata('reservation_id');
		$reservation_code = $this->session->userdata('reservation_code');


//////// Select Passenger /////////////////////////
		$select_passenger = "passenger.name,passenger.phone,passenger.passport,passenger.seat";
		$table_passenger = "passenger";
		$table_join_passenger = "reservation";
		$on_passenger = "passenger.reservation_id = reservation.id";
		$where_passenger = array(
			'reservation.id' => $reservation_id,
			'reservation.reservation_code' => $reservation_code
		);

		$data['passenger'] = $this->m_data->tampil_data_join($select_passenger,$where_passenger,$table_passenger,$table_join_passenger,$on_passenger)->result();

//////// Select Passenger /////////////////////////
		$select_rute = "rute.id, rute.depart_at, rute.rute_from, rute.rute_to, rute.transit_to, rute.transit_arrived,
				   		rute.arrived, rute.price, transportation.code, transportation.description";
		$table_rute  = "rute";
		$table_join_rute  = "transportation";
		$on_rute  = "rute.transportation_id = transportation.id";
		$where_rute  = array(
			'rute.id' => $rute_id,
		);

		$data['rute'] = $this->m_data->tampil_data_join($select_rute,$where_rute,$table_rute,$table_join_rute,$on_rute)->result();

		$data['reservation_code'] = $reservation_code;

		$this->load->view('home_confirm',$data);

		} else {
			redirect (site_url('home'));
		}

	}
	
}
