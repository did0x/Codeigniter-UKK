<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_data extends CI_Model{

	function tampil_data($table)
	{	
		return $this->db->get($table);
	}
	function tampil_data_group($table)
	{	
		$this->db->group_by('rute_from');
		return $this->db->get($table);
	}

	function tampil_data_join($select,$where,$table,$table_join,$on)
	{	
		$this->db->select($select);
		$this->db->from($table);
		$this->db->join($table_join,$on);
		$this->db->where($where);
		return $this->db->get();;
	}

	function tampil_data_join_all($select,$table,$table_join,$on)
	{	
		$this->db->select($select);
		$this->db->from($table);
		$this->db->join($table_join,$on);		
		return $this->db->get();;
	}
	
	function tampil_data_where($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function input_data_id($data,$table){
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	function search_data($select,$where,$table,$table_join,$on){
		$this->db->select($select);
		$this->db->from($table);
		$this->db->join($table_join,$on);
		$this->db->where($where);
		return $this->db->get();
	}

	function search_data_double($select,$where,$table,$table_join,$on,$table_join_duo,$on_duo){
		$this->db->select($select);
		$this->db->from($table);
		$this->db->join($table_join,$on);
		$this->db->join($table_join_duo,$on_duo);
		$this->db->where($where);
		return $this->db->get();
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