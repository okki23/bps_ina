<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pencatatan_hibah_5261_model extends CI_Model {
	
	// Load database
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	//Listing
	public function listing() {
		//$this->db->select('produk.*, kategori_produk.nama_kategori_produk, users.nama');
		$this->db->from('pencatatan_hibah_5261');
		// Join
		//$this->db->join('kategori_produk','kategori_produk.id_kategori_produk = produk.id_kategori_produk', 'LEFT');
		//$this->db->join('users','users.id_user = produk.id_user','LEFT');
		// End join
		$this->db->order_by('id_pencatatan_hibah','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	
	// //Home
	// public function home() {
	// 	$this->db->select('produk.*, kategori_produk.nama_kategori_produk, users.nama');
	// 	$this->db->from('produk');
	// 	// Join
	// 	$this->db->join('kategori_produk','kategori_produk.id_kategori_produk = produk.id_kategori_produk', 'LEFT');
	// 	$this->db->join('users','users.id_user = produk.id_user','LEFT');
	// 	// End join
	// 	$this->db->where('produk.status_produk','Publish');
	// 	$this->db->order_by('id_pencatatan_hibah_5261','DESC');
	// 	$this->db->limit(6);
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }
	
	
	// detail surat
	public function detail($id_pencatatan_hibah){
		$query = $this->db->get_where('pencatatan_hibah_5261',array('id_pencatatan_hibah'  => $id_pencatatan_hibah));
		return $query->row();
	}
	
	// Post
	public function post ($data) {
		$this->db->insert('pencatatan_hibah_5261',$data);
	}
	
	// Edit 
	public function edit ($data) {
		$this->db->where('id_pencatatan_hibah',$data['id_pencatatan_hibah']);
		$this->db->update('pencatatan_hibah_5261',$data);
	}
	
	// Delete
	public function delete ($data){
		$this->db->where('id_pencatatan_hibah',$data['id_pencatatan_hibah']);
		$this->db->delete('pencatatan_hibah_5261',$data);
	}
}