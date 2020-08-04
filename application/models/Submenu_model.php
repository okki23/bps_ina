<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submenu_model extends CI_Model {
	
	// Load database
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	public function listing() {
		$this->db->select('submenu.*, mainmenu.nama_mainmenu');
		$this->db->from('submenu');
		// Join
		$this->db->join('mainmenu','mainmenu.id_mainmenu = submenu.id_mainmenu', 'LEFT');
		
		
		// End join
		$this->db->order_by('id_submenu','ASC');
		$query = $this->db->get();
		return $query->result();
	}
	
	// detail submenu
	public function detail($id_submenu){
		$query = $this->db->get_where('submenu',array('id_submenu'  => $id_submenu));
		return $query->row();
	}
	
	// Tambah
	public function tambah ($data) {
		$this->db->insert('submenu',$data);
	}
	
	// Edit 
	public function edit ($data,$id_submenu) {
		$this->db->where('id_submenu',$id_submenu);
		$this->db->update('submenu',$data);
	}
	
	// Delete
	public function delete ($data){
		$this->db->where('id_submenu',$data['id_submenu']);
		$this->db->delete('submenu',$data);
	}
}