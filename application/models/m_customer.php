<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_customer extends CI_Model{

	function tampil_data()
	{	
		return $this->db->get('customer');
	}
		
}