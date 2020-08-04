<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainmenu_model extends CI_Model {
	
	// Load database
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	public function listing() {
		$this->db->select('mainmenu.*, level.nama_level');
		$this->db->from('mainmenu');
		// Join
		$this->db->join('level','level.id_level = mainmenu.level', 'LEFT');
		
		
		// End join
		$this->db->order_by('id_mainmenu','ASC');
		$query = $this->db->get();
		return $query->result();
	}
	
	
	// detail mainmenu
	public function detail($id_mainmenu){
		$query = $this->db->get_where('mainmenu',array('id_mainmenu'  => $id_mainmenu));
		return $query->row();
	}
	
	// Tambah
	public function tambah ($data) {
		$this->db->insert('mainmenu',$data);
	}
	
	// Edit 
	public function edit ($data,$id_mainmenu) {
		$this->db->where('id_mainmenu',$id_mainmenu);
		$this->db->update('mainmenu',$data);
	}
	
	// Delete
	public function delete ($data){
		$this->db->where('id_mainmenu',$data['id_mainmenu']);
		$this->db->delete('mainmenu',$data);
	}
}