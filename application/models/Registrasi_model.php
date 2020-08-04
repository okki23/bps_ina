<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi_model extends CI_Model {
	
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
	

	    public function get_provinsi()
        {
            $this->db->order_by('nama_provinsi', 'asc');
            return $this->db->get('provinsi')->result();
        }
        public function get_kota()
        {
            // kita joinkan tabel kota dengan provinsi
            $this->db->order_by('nama_kota', 'asc');
            $this->db->join('provinsi', 'kabupaten_kota.provinsi_id = provinsi.id_provinsi');
            return $this->db->get('kabupaten_kota')->result();
        }
        public function get_kecamatan()
        {
            // kita joinkan tabel kecamatan dengan kota
            $this->db->order_by('nama_kecamatan', 'asc');
            $this->db->join('kabupaten_kota', 'kecamatan.kabupaten_kota_id = kabupaten_kota.id');
            return $this->db->get('kecamatan')->result();
        }
		public function get_kelurahan()
        {
            // kita joinkan tabel kecamatan dengan kota
            $this->db->order_by('nama_kelurahan', 'asc');
            $this->db->join('kecamatan', 'kelurahan.kecamatan_id = id_kecamatan');
            return $this->db->get('kelurahan')->result();
        }
		
        // untuk edit ambil dari id level paling bawah
        public function get_selected_by_id_kecamatan($id_kecamatan)
        {
            $this->db->where('id_kecamatan', $id_kecamatan);
            $this->db->join('kota', 'kecamatan.id_kota_fk = kota.id_kota');
            $this->db->join('provinsi', 'kota.id_provinsi_fk = provinsi.id_provinsi');
            return $this->db->get('kecamatan')->row();
        }
	
	
	
	
	
	
	
}