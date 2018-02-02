<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();		

		$this->load->model('m_login');

	}

	public function index()
	{
		$data['msg'] = null;
		$this->load->view('login',$data);
	}

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_login->check_login($where,'user')->num_rows();
		if($cek > 0){

			$fullname = $this->m_login->check_login($where,'user')->row()->fullname;

			$data_session = array(
				'username' => $username,
				'fullname' => $fullname,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);
			redirect(site_url("admin"));

		} else {
			$data['msg'] = "Username dan password salah !";
			$this->load->view('login',$data);
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(site_url('login'));
	}
}
