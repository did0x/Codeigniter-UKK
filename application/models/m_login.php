<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_login extends CI_Model{

	function check_login($where,$table){		
		return $this->db->get_where($table,$where);
	}

}
