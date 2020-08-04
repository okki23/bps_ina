<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pegawai2_model extends CI_Model
{

    public $table = 't_rekap_master';
    public $id = 'kd_unit';
    public $order = 'ASC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
		
		$this->db->where('JENIS_UNIT', 'P');
		$this->db->like('kd_unit','09690');
		
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
        $this->db->like('NIP', $q);
	$this->db->or_like('nipbaru', $q);
	$this->db->or_like('id_pns', $q);
	$this->db->or_like('id_unor', $q);
	$this->db->or_like('status', $q);
	$this->db->or_like('NAMA', $q);
	$this->db->or_like('NAMAGELAR', $q);
	$this->db->or_like('TGL_LAHIR', $q);
	$this->db->or_like('kd_agama', $q);
	$this->db->or_like('GOL', $q);
	$this->db->or_like('sk_pangkat', $q);
	$this->db->or_like('GOL_TMT', $q);
	$this->db->or_like('gol_tgl', $q);
	$this->db->or_like('CPNS_TMT', $q);
	$this->db->or_like('pensiun_tmt', $q);
	$this->db->or_like('kd_fung', $q);
	$this->db->or_like('kd_statusfung', $q);
	$this->db->or_like('kd_jenjangfung', $q);
	$this->db->or_like('uraian_jenjang', $q);
	$this->db->or_like('keahlian', $q);
	$this->db->or_like('tmt_jenjang', $q);
	$this->db->or_like('PDD', $q);
	$this->db->or_like('pendidikan', $q);
	$this->db->or_like('pendidikan_duk', $q);
	$this->db->or_like('diklat_struk_tk', $q);
	$this->db->or_like('diklat_struk', $q);
	$this->db->or_like('diklat_struk_th', $q);
	$this->db->or_like('diklat_struk_jam', $q);
	$this->db->or_like('diklat_fung', $q);
	$this->db->or_like('pelaksanaan_dikfung', $q);
	$this->db->or_like('KD_UNITKERJA', $q);
	$this->db->or_like('kd_unit', $q);
	$this->db->or_like('UNITKERJA', $q);
	$this->db->or_like('UNITKERJA_SING', $q);
	$this->db->or_like('UNITKERJAES1', $q);
	$this->db->or_like('UNITKERJAES1_SING', $q);
	$this->db->or_like('JENIS_UNIT', $q);
	$this->db->or_like('jabatan', $q);
	$this->db->or_like('no_sk', $q);
	$this->db->or_like('tgl_sk', $q);
	$this->db->or_like('tmt_jab', $q);
	$this->db->or_like('tmt_lantik', $q);
	$this->db->or_like('duk_tmt_jab', $q);
	$this->db->or_like('tmt_jab_awal', $q);
	$this->db->or_like('ms_kerja_th', $q);
	$this->db->or_like('ms_kerja_bl', $q);
	$this->db->or_like('kelamin', $q);
	$this->db->or_like('umur', $q);
	$this->db->or_like('umurbulan', $q);
	$this->db->or_like('u25', $q);
	$this->db->or_like('u26', $q);
	$this->db->or_like('u31', $q);
	$this->db->or_like('u36', $q);
	$this->db->or_like('u41', $q);
	$this->db->or_like('u46', $q);
	$this->db->or_like('u51', $q);
	$this->db->or_like('u56', $q);
	$this->db->or_like('lastupdate', $q);
	$this->db->or_like('no_box', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('NIP', $q);
	$this->db->or_like('nipbaru', $q);
	$this->db->or_like('id_pns', $q);
	$this->db->or_like('id_unor', $q);
	$this->db->or_like('status', $q);
	$this->db->or_like('NAMA', $q);
	$this->db->or_like('NAMAGELAR', $q);
	$this->db->or_like('TGL_LAHIR', $q);
	$this->db->or_like('kd_agama', $q);
	$this->db->or_like('GOL', $q);
	$this->db->or_like('sk_pangkat', $q);
	$this->db->or_like('GOL_TMT', $q);
	$this->db->or_like('gol_tgl', $q);
	$this->db->or_like('CPNS_TMT', $q);
	$this->db->or_like('pensiun_tmt', $q);
	$this->db->or_like('kd_fung', $q);
	$this->db->or_like('kd_statusfung', $q);
	$this->db->or_like('kd_jenjangfung', $q);
	$this->db->or_like('uraian_jenjang', $q);
	$this->db->or_like('keahlian', $q);
	$this->db->or_like('tmt_jenjang', $q);
	$this->db->or_like('PDD', $q);
	$this->db->or_like('pendidikan', $q);
	$this->db->or_like('pendidikan_duk', $q);
	$this->db->or_like('diklat_struk_tk', $q);
	$this->db->or_like('diklat_struk', $q);
	$this->db->or_like('diklat_struk_th', $q);
	$this->db->or_like('diklat_struk_jam', $q);
	$this->db->or_like('diklat_fung', $q);
	$this->db->or_like('pelaksanaan_dikfung', $q);
	$this->db->or_like('KD_UNITKERJA', $q);
	$this->db->or_like('kd_unit', $q);
	$this->db->or_like('UNITKERJA', $q);
	$this->db->or_like('UNITKERJA_SING', $q);
	$this->db->or_like('UNITKERJAES1', $q);
	$this->db->or_like('UNITKERJAES1_SING', $q);
	$this->db->or_like('JENIS_UNIT', $q);
	$this->db->or_like('jabatan', $q);
	$this->db->or_like('no_sk', $q);
	$this->db->or_like('tgl_sk', $q);
	$this->db->or_like('tmt_jab', $q);
	$this->db->or_like('tmt_lantik', $q);
	$this->db->or_like('duk_tmt_jab', $q);
	$this->db->or_like('tmt_jab_awal', $q);
	$this->db->or_like('ms_kerja_th', $q);
	$this->db->or_like('ms_kerja_bl', $q);
	$this->db->or_like('kelamin', $q);
	$this->db->or_like('umur', $q);
	$this->db->or_like('umurbulan', $q);
	$this->db->or_like('u25', $q);
	$this->db->or_like('u26', $q);
	$this->db->or_like('u31', $q);
	$this->db->or_like('u36', $q);
	$this->db->or_like('u41', $q);
	$this->db->or_like('u46', $q);
	$this->db->or_like('u51', $q);
	$this->db->or_like('u56', $q);
	$this->db->or_like('lastupdate', $q);
	$this->db->or_like('no_box', $q);
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
