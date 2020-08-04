<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_masuk_model extends CI_Model {
	
	// Load database
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	//Listing
	public function listing() {
		//$this->db->select('produk.*, kategori_produk.nama_kategori_produk, users.nama');
		$this->db->from('surat_masuk');
		// Join
		//$this->db->join('kategori_produk','kategori_produk.id_kategori_produk = produk.id_kategori_produk', 'LEFT');
		//$this->db->join('users','users.id_user = produk.id_user','LEFT');
		// End join
		$this->db->order_by('id_surat_masuk','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	
	//Home
	public function home() {
		$this->db->select('produk.*, kategori_produk.nama_kategori_produk, users.nama');
		$this->db->from('produk');
		// Join
		$this->db->join('kategori_produk','kategori_produk.id_kategori_produk = produk.id_kategori_produk', 'LEFT');
		$this->db->join('users','users.id_user = produk.id_user','LEFT');
		// End join
		$this->db->where('produk.status_produk','Publish');
		$this->db->order_by('id_surat_masuk','DESC');
		$this->db->limit(6);
		$query = $this->db->get();
		return $query->result();
	}
	
	
	// detail surat
	public function detail($id_surat_masuk){
		$query = $this->db->get_where('surat_masuk',array('id_surat_masuk'  => $id_surat_masuk));
		return $query->row();
	}
	
	// Tambah
	public function tambah ($data) {
		$this->db->insert('surat_masuk',$data);
	}
	
	// Edit 
	public function edit ($data) {
		$this->db->where('id_surat_masuk',$data['id_surat_masuk']);
		$this->db->update('surat_masuk',$data);
	}
	
	// Delete
	public function delete ($data){
		$this->db->where('id_surat_masuk',$data['id_surat_masuk']);
		$this->db->delete('surat_masuk',$data);
	}
}