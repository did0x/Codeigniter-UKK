<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_data extends CI_Model{

	function tampil_data($table)
	{	
		return $this->db->get($table);
	}
	
	function tampil_data_id($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	function search_data($where, $table){
		return $this->db->get_where($table,$where);
	}
	
	function encrypt_data($password){
		$hex = '';
	    for ($i=0; $i<strlen($password); $i++){
	        $ord = ord($password[$i]);
	        $hexCode = dechex($ord);
	        $hex .= substr('0'.$hexCode, -2);
	    }
    	return strToUpper($hex);	

	}

	function decrypt_data($password){
		$string='';
	    for ($i=0; $i < strlen($password)-1; $i+=2){
	        $string .= chr(hexdec($password[$i].$password[$i+1]));

	    }
	    return $string;
	}
}