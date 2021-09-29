<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Bmn_barang_lainnya_model extends CI_Model
{

    public $table = 'bmn_barang_lainnya';
    public $id = 'id_bmn_barang_lainnya';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {	$kd_unit= $this->session->userdata['kd_unit'];
		$this->db->where('kd_unit',$kd_unit );
		
		
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }
	

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_bmn_barang_lainnya', $q);
	$this->db->or_like('kd_unit', $q);
	$this->db->or_like('UNITKERJA_SING', $q);
	$this->db->or_like('nama_barang', $q);
	$this->db->or_like('merk_barang', $q);
	$this->db->or_like('jenis_barang', $q);
	$this->db->or_like('tahun_pembelian', $q);
	$this->db->or_like('nilai_barang', $q);
	$this->db->or_like('lokasi_barang', $q);
	$this->db->or_like('status_barang', $q);
	$this->db->or_like('keluhan_kondisi_barang', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_bmn_barang_lainnya', $q);
	$this->db->or_like('kd_unit', $q);
	$this->db->or_like('UNITKERJA_SING', $q);
	$this->db->or_like('nama_barang', $q);
	$this->db->or_like('merk_barang', $q);
	$this->db->or_like('jenis_barang', $q);
	$this->db->or_like('tahun_pembelian', $q);
	$this->db->or_like('nilai_barang', $q);
	$this->db->or_like('lokasi_barang', $q);
	$this->db->or_like('status_barang', $q);
	$this->db->or_like('keluhan_kondisi_barang', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Bmn_barang_lainnya_model.php */
/* Location: ./application/models/Bmn_barang_lainnya_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-04-21 19:23:43 */
/* http://harviacode.com */