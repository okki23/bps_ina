<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level_model extends CI_Model {
	
	// Load database
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	//Listing
	public function listing() {
		$this->db->select('*');
		$this->db->from('level');
		$this->db->order_by('id_level','ASC');
		$query = $this->db->get();
		return $query->result();
	}
	
	// detail level
	public function detail($id_level){
		$query = $this->db->get_where('level',array('id_level'  => $id_level));
		return $query->row();
	}
	
	// Tambah
	public function tambah ($data) {
		$this->db->insert('level',$data);
	}
	
	// Edit 
	public function edit ($data,$id_level) {
		$this->db->where('id_level',$id_level);
		$this->db->update('level',$data);
	}
	
	// Delete
	public function delete ($data){
		$this->db->where('id_level',$data['id_level']);
		$this->db->delete('level',$data);
	}
}