<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pegawai2 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //is_login();
        $this->load->model('Pegawai2_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/pegawai2/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/pegawai2/index/';
            $config['first_url'] = base_url() . 'index.php/pegawai2/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Pegawai2_model->total_rows($q);
        $pegawai2 = $this->Pegawai2_model->get_all();
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pegawai2_data' => $pegawai2,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','pegawai2/t_rekap_master_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Pegawai2_model->get_by_id($id);
        if ($row) {
            $data = array(
		'NIP' => $row->NIP,
		'nipbaru' => $row->nipbaru,
		'id_pns' => $row->id_pns,
		'id_unor' => $row->id_unor,
		'status' => $row->status,
		'NAMA' => $row->NAMA,
		'NAMAGELAR' => $row->NAMAGELAR,
		'TGL_LAHIR' => $row->TGL_LAHIR,
		'kd_agama' => $row->kd_agama,
		'GOL' => $row->GOL,
		'sk_pangkat' => $row->sk_pangkat,
		'GOL_TMT' => $row->GOL_TMT,
		'gol_tgl' => $row->gol_tgl,
		'CPNS_TMT' => $row->CPNS_TMT,
		'pensiun_tmt' => $row->pensiun_tmt,
		'kd_fung' => $row->kd_fung,
		'kd_statusfung' => $row->kd_statusfung,
		'kd_jenjangfung' => $row->kd_jenjangfung,
		'uraian_jenjang' => $row->uraian_jenjang,
		'keahlian' => $row->keahlian,
		'tmt_jenjang' => $row->tmt_jenjang,
		'PDD' => $row->PDD,
		'pendidikan' => $row->pendidikan,
		'pendidikan_duk' => $row->pendidikan_duk,
		'diklat_struk_tk' => $row->diklat_struk_tk,
		'diklat_struk' => $row->diklat_struk,
		'diklat_struk_th' => $row->diklat_struk_th,
		'diklat_struk_jam' => $row->diklat_struk_jam,
		'diklat_fung' => $row->diklat_fung,
		'pelaksanaan_dikfung' => $row->pelaksanaan_dikfung,
		'KD_UNITKERJA' => $row->KD_UNITKERJA,
		'kd_unit' => $row->kd_unit,
		'UNITKERJA' => $row->UNITKERJA,
		'UNITKERJA_SING' => $row->UNITKERJA_SING,
		'UNITKERJAES1' => $row->UNITKERJAES1,
		'UNITKERJAES1_SING' => $row->UNITKERJAES1_SING,
		'JENIS_UNIT' => $row->JENIS_UNIT,
		'jabatan' => $row->jabatan,
		'no_sk' => $row->no_sk,
		'tgl_sk' => $row->tgl_sk,
		'tmt_jab' => $row->tmt_jab,
		'tmt_lantik' => $row->tmt_lantik,
		'duk_tmt_jab' => $row->duk_tmt_jab,
		'tmt_jab_awal' => $row->tmt_jab_awal,
		'ms_kerja_th' => $row->ms_kerja_th,
		'ms_kerja_bl' => $row->ms_kerja_bl,
		'kelamin' => $row->kelamin,
		'umur' => $row->umur,
		'umurbulan' => $row->umurbulan,
		'u25' => $row->u25,
		'u26' => $row->u26,
		'u31' => $row->u31,
		'u36' => $row->u36,
		'u41' => $row->u41,
		'u46' => $row->u46,
		'u51' => $row->u51,
		'u56' => $row->u56,
		'lastupdate' => $row->lastupdate,
		'no_box' => $row->no_box,
	    );
            $this->template->load('template','pegawai2/t_rekap_master_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pegawai2'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pegawai2/create_action'),
	    'NIP' => set_value('NIP'),
	    'nipbaru' => set_value('nipbaru'),
	    'id_pns' => set_value('id_pns'),
	    'id_unor' => set_value('id_unor'),
	    'status' => set_value('status'),
	    'NAMA' => set_value('NAMA'),
	    'NAMAGELAR' => set_value('NAMAGELAR'),
	    'TGL_LAHIR' => set_value('TGL_LAHIR'),
	    'kd_agama' => set_value('kd_agama'),
	    'GOL' => set_value('GOL'),
	    'sk_pangkat' => set_value('sk_pangkat'),
	    'GOL_TMT' => set_value('GOL_TMT'),
	    'gol_tgl' => set_value('gol_tgl'),
	    'CPNS_TMT' => set_value('CPNS_TMT'),
	    'pensiun_tmt' => set_value('pensiun_tmt'),
	    'kd_fung' => set_value('kd_fung'),
	    'kd_statusfung' => set_value('kd_statusfung'),
	    'kd_jenjangfung' => set_value('kd_jenjangfung'),
	    'uraian_jenjang' => set_value('uraian_jenjang'),
	    'keahlian' => set_value('keahlian'),
	    'tmt_jenjang' => set_value('tmt_jenjang'),
	    'PDD' => set_value('PDD'),
	    'pendidikan' => set_value('pendidikan'),
	    'pendidikan_duk' => set_value('pendidikan_duk'),
	    'diklat_struk_tk' => set_value('diklat_struk_tk'),
	    'diklat_struk' => set_value('diklat_struk'),
	    'diklat_struk_th' => set_value('diklat_struk_th'),
	    'diklat_struk_jam' => set_value('diklat_struk_jam'),
	    'diklat_fung' => set_value('diklat_fung'),
	    'pelaksanaan_dikfung' => set_value('pelaksanaan_dikfung'),
	    'KD_UNITKERJA' => set_value('KD_UNITKERJA'),
	    'kd_unit' => set_value('kd_unit'),
	    'UNITKERJA' => set_value('UNITKERJA'),
	    'UNITKERJA_SING' => set_value('UNITKERJA_SING'),
	    'UNITKERJAES1' => set_value('UNITKERJAES1'),
	    'UNITKERJAES1_SING' => set_value('UNITKERJAES1_SING'),
	    'JENIS_UNIT' => set_value('JENIS_UNIT'),
	    'jabatan' => set_value('jabatan'),
	    'no_sk' => set_value('no_sk'),
	    'tgl_sk' => set_value('tgl_sk'),
	    'tmt_jab' => set_value('tmt_jab'),
	    'tmt_lantik' => set_value('tmt_lantik'),
	    'duk_tmt_jab' => set_value('duk_tmt_jab'),
	    'tmt_jab_awal' => set_value('tmt_jab_awal'),
	    'ms_kerja_th' => set_value('ms_kerja_th'),
	    'ms_kerja_bl' => set_value('ms_kerja_bl'),
	    'kelamin' => set_value('kelamin'),
	    'umur' => set_value('umur'),
	    'umurbulan' => set_value('umurbulan'),
	    'u25' => set_value('u25'),
	    'u26' => set_value('u26'),
	    'u31' => set_value('u31'),
	    'u36' => set_value('u36'),
	    'u41' => set_value('u41'),
	    'u46' => set_value('u46'),
	    'u51' => set_value('u51'),
	    'u56' => set_value('u56'),
	    'lastupdate' => set_value('lastupdate'),
	    'no_box' => set_value('no_box'),
	);
        $this->template->load('template','pegawai2/t_rekap_master_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nipbaru' => $this->input->post('nipbaru',TRUE),
		'id_pns' => $this->input->post('id_pns',TRUE),
		'id_unor' => $this->input->post('id_unor',TRUE),
		'status' => $this->input->post('status',TRUE),
		'NAMA' => $this->input->post('NAMA',TRUE),
		'NAMAGELAR' => $this->input->post('NAMAGELAR',TRUE),
		'TGL_LAHIR' => $this->input->post('TGL_LAHIR',TRUE),
		'kd_agama' => $this->input->post('kd_agama',TRUE),
		'GOL' => $this->input->post('GOL',TRUE),
		'sk_pangkat' => $this->input->post('sk_pangkat',TRUE),
		'GOL_TMT' => $this->input->post('GOL_TMT',TRUE),
		'gol_tgl' => $this->input->post('gol_tgl',TRUE),
		'CPNS_TMT' => $this->input->post('CPNS_TMT',TRUE),
		'pensiun_tmt' => $this->input->post('pensiun_tmt',TRUE),
		'kd_fung' => $this->input->post('kd_fung',TRUE),
		'kd_statusfung' => $this->input->post('kd_statusfung',TRUE),
		'kd_jenjangfung' => $this->input->post('kd_jenjangfung',TRUE),
		'uraian_jenjang' => $this->input->post('uraian_jenjang',TRUE),
		'keahlian' => $this->input->post('keahlian',TRUE),
		'tmt_jenjang' => $this->input->post('tmt_jenjang',TRUE),
		'PDD' => $this->input->post('PDD',TRUE),
		'pendidikan' => $this->input->post('pendidikan',TRUE),
		'pendidikan_duk' => $this->input->post('pendidikan_duk',TRUE),
		'diklat_struk_tk' => $this->input->post('diklat_struk_tk',TRUE),
		'diklat_struk' => $this->input->post('diklat_struk',TRUE),
		'diklat_struk_th' => $this->input->post('diklat_struk_th',TRUE),
		'diklat_struk_jam' => $this->input->post('diklat_struk_jam',TRUE),
		'diklat_fung' => $this->input->post('diklat_fung',TRUE),
		'pelaksanaan_dikfung' => $this->input->post('pelaksanaan_dikfung',TRUE),
		'KD_UNITKERJA' => $this->input->post('KD_UNITKERJA',TRUE),
		'kd_unit' => $this->input->post('kd_unit',TRUE),
		'UNITKERJA' => $this->input->post('UNITKERJA',TRUE),
		'UNITKERJA_SING' => $this->input->post('UNITKERJA_SING',TRUE),
		'UNITKERJAES1' => $this->input->post('UNITKERJAES1',TRUE),
		'UNITKERJAES1_SING' => $this->input->post('UNITKERJAES1_SING',TRUE),
		'JENIS_UNIT' => $this->input->post('JENIS_UNIT',TRUE),
		'jabatan' => $this->input->post('jabatan',TRUE),
		'no_sk' => $this->input->post('no_sk',TRUE),
		'tgl_sk' => $this->input->post('tgl_sk',TRUE),
		'tmt_jab' => $this->input->post('tmt_jab',TRUE),
		'tmt_lantik' => $this->input->post('tmt_lantik',TRUE),
		'duk_tmt_jab' => $this->input->post('duk_tmt_jab',TRUE),
		'tmt_jab_awal' => $this->input->post('tmt_jab_awal',TRUE),
		'ms_kerja_th' => $this->input->post('ms_kerja_th',TRUE),
		'ms_kerja_bl' => $this->input->post('ms_kerja_bl',TRUE),
		'kelamin' => $this->input->post('kelamin',TRUE),
		'umur' => $this->input->post('umur',TRUE),
		'umurbulan' => $this->input->post('umurbulan',TRUE),
		'u25' => $this->input->post('u25',TRUE),
		'u26' => $this->input->post('u26',TRUE),
		'u31' => $this->input->post('u31',TRUE),
		'u36' => $this->input->post('u36',TRUE),
		'u41' => $this->input->post('u41',TRUE),
		'u46' => $this->input->post('u46',TRUE),
		'u51' => $this->input->post('u51',TRUE),
		'u56' => $this->input->post('u56',TRUE),
		'lastupdate' => $this->input->post('lastupdate',TRUE),
		'no_box' => $this->input->post('no_box',TRUE),
	    );

            $this->Pegawai2_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('pegawai2'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pegawai2_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pegawai2/update_action'),
		'NIP' => set_value('NIP', $row->NIP),
		'nipbaru' => set_value('nipbaru', $row->nipbaru),
		'id_pns' => set_value('id_pns', $row->id_pns),
		'id_unor' => set_value('id_unor', $row->id_unor),
		'status' => set_value('status', $row->status),
		'NAMA' => set_value('NAMA', $row->NAMA),
		'NAMAGELAR' => set_value('NAMAGELAR', $row->NAMAGELAR),
		'TGL_LAHIR' => set_value('TGL_LAHIR', $row->TGL_LAHIR),
		'kd_agama' => set_value('kd_agama', $row->kd_agama),
		'GOL' => set_value('GOL', $row->GOL),
		'sk_pangkat' => set_value('sk_pangkat', $row->sk_pangkat),
		'GOL_TMT' => set_value('GOL_TMT', $row->GOL_TMT),
		'gol_tgl' => set_value('gol_tgl', $row->gol_tgl),
		'CPNS_TMT' => set_value('CPNS_TMT', $row->CPNS_TMT),
		'pensiun_tmt' => set_value('pensiun_tmt', $row->pensiun_tmt),
		'kd_fung' => set_value('kd_fung', $row->kd_fung),
		'kd_statusfung' => set_value('kd_statusfung', $row->kd_statusfung),
		'kd_jenjangfung' => set_value('kd_jenjangfung', $row->kd_jenjangfung),
		'uraian_jenjang' => set_value('uraian_jenjang', $row->uraian_jenjang),
		'keahlian' => set_value('keahlian', $row->keahlian),
		'tmt_jenjang' => set_value('tmt_jenjang', $row->tmt_jenjang),
		'PDD' => set_value('PDD', $row->PDD),
		'pendidikan' => set_value('pendidikan', $row->pendidikan),
		'pendidikan_duk' => set_value('pendidikan_duk', $row->pendidikan_duk),
		'diklat_struk_tk' => set_value('diklat_struk_tk', $row->diklat_struk_tk),
		'diklat_struk' => set_value('diklat_struk', $row->diklat_struk),
		'diklat_struk_th' => set_value('diklat_struk_th', $row->diklat_struk_th),
		'diklat_struk_jam' => set_value('diklat_struk_jam', $row->diklat_struk_jam),
		'diklat_fung' => set_value('diklat_fung', $row->diklat_fung),
		'pelaksanaan_dikfung' => set_value('pelaksanaan_dikfung', $row->pelaksanaan_dikfung),
		'KD_UNITKERJA' => set_value('KD_UNITKERJA', $row->KD_UNITKERJA),
		'kd_unit' => set_value('kd_unit', $row->kd_unit),
		'UNITKERJA' => set_value('UNITKERJA', $row->UNITKERJA),
		'UNITKERJA_SING' => set_value('UNITKERJA_SING', $row->UNITKERJA_SING),
		'UNITKERJAES1' => set_value('UNITKERJAES1', $row->UNITKERJAES1),
		'UNITKERJAES1_SING' => set_value('UNITKERJAES1_SING', $row->UNITKERJAES1_SING),
		'JENIS_UNIT' => set_value('JENIS_UNIT', $row->JENIS_UNIT),
		'jabatan' => set_value('jabatan', $row->jabatan),
		'no_sk' => set_value('no_sk', $row->no_sk),
		'tgl_sk' => set_value('tgl_sk', $row->tgl_sk),
		'tmt_jab' => set_value('tmt_jab', $row->tmt_jab),
		'tmt_lantik' => set_value('tmt_lantik', $row->tmt_lantik),
		'duk_tmt_jab' => set_value('duk_tmt_jab', $row->duk_tmt_jab),
		'tmt_jab_awal' => set_value('tmt_jab_awal', $row->tmt_jab_awal),
		'ms_kerja_th' => set_value('ms_kerja_th', $row->ms_kerja_th),
		'ms_kerja_bl' => set_value('ms_kerja_bl', $row->ms_kerja_bl),
		'kelamin' => set_value('kelamin', $row->kelamin),
		'umur' => set_value('umur', $row->umur),
		'umurbulan' => set_value('umurbulan', $row->umurbulan),
		'u25' => set_value('u25', $row->u25),
		'u26' => set_value('u26', $row->u26),
		'u31' => set_value('u31', $row->u31),
		'u36' => set_value('u36', $row->u36),
		'u41' => set_value('u41', $row->u41),
		'u46' => set_value('u46', $row->u46),
		'u51' => set_value('u51', $row->u51),
		'u56' => set_value('u56', $row->u56),
		'lastupdate' => set_value('lastupdate', $row->lastupdate),
		'no_box' => set_value('no_box', $row->no_box),
	    );
            $this->template->load('template','pegawai2/t_rekap_master_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pegawai2'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('NIP', TRUE));
        } else {
            $data = array(
		'nipbaru' => $this->input->post('nipbaru',TRUE),
		'id_pns' => $this->input->post('id_pns',TRUE),
		'id_unor' => $this->input->post('id_unor',TRUE),
		'status' => $this->input->post('status',TRUE),
		'NAMA' => $this->input->post('NAMA',TRUE),
		'NAMAGELAR' => $this->input->post('NAMAGELAR',TRUE),
		'TGL_LAHIR' => $this->input->post('TGL_LAHIR',TRUE),
		'kd_agama' => $this->input->post('kd_agama',TRUE),
		'GOL' => $this->input->post('GOL',TRUE),
		'sk_pangkat' => $this->input->post('sk_pangkat',TRUE),
		'GOL_TMT' => $this->input->post('GOL_TMT',TRUE),
		'gol_tgl' => $this->input->post('gol_tgl',TRUE),
		'CPNS_TMT' => $this->input->post('CPNS_TMT',TRUE),
		'pensiun_tmt' => $this->input->post('pensiun_tmt',TRUE),
		'kd_fung' => $this->input->post('kd_fung',TRUE),
		'kd_statusfung' => $this->input->post('kd_statusfung',TRUE),
		'kd_jenjangfung' => $this->input->post('kd_jenjangfung',TRUE),
		'uraian_jenjang' => $this->input->post('uraian_jenjang',TRUE),
		'keahlian' => $this->input->post('keahlian',TRUE),
		'tmt_jenjang' => $this->input->post('tmt_jenjang',TRUE),
		'PDD' => $this->input->post('PDD',TRUE),
		'pendidikan' => $this->input->post('pendidikan',TRUE),
		'pendidikan_duk' => $this->input->post('pendidikan_duk',TRUE),
		'diklat_struk_tk' => $this->input->post('diklat_struk_tk',TRUE),
		'diklat_struk' => $this->input->post('diklat_struk',TRUE),
		'diklat_struk_th' => $this->input->post('diklat_struk_th',TRUE),
		'diklat_struk_jam' => $this->input->post('diklat_struk_jam',TRUE),
		'diklat_fung' => $this->input->post('diklat_fung',TRUE),
		'pelaksanaan_dikfung' => $this->input->post('pelaksanaan_dikfung',TRUE),
		'KD_UNITKERJA' => $this->input->post('KD_UNITKERJA',TRUE),
		'kd_unit' => $this->input->post('kd_unit',TRUE),
		'UNITKERJA' => $this->input->post('UNITKERJA',TRUE),
		'UNITKERJA_SING' => $this->input->post('UNITKERJA_SING',TRUE),
		'UNITKERJAES1' => $this->input->post('UNITKERJAES1',TRUE),
		'UNITKERJAES1_SING' => $this->input->post('UNITKERJAES1_SING',TRUE),
		'JENIS_UNIT' => $this->input->post('JENIS_UNIT',TRUE),
		'jabatan' => $this->input->post('jabatan',TRUE),
		'no_sk' => $this->input->post('no_sk',TRUE),
		'tgl_sk' => $this->input->post('tgl_sk',TRUE),
		'tmt_jab' => $this->input->post('tmt_jab',TRUE),
		'tmt_lantik' => $this->input->post('tmt_lantik',TRUE),
		'duk_tmt_jab' => $this->input->post('duk_tmt_jab',TRUE),
		'tmt_jab_awal' => $this->input->post('tmt_jab_awal',TRUE),
		'ms_kerja_th' => $this->input->post('ms_kerja_th',TRUE),
		'ms_kerja_bl' => $this->input->post('ms_kerja_bl',TRUE),
		'kelamin' => $this->input->post('kelamin',TRUE),
		'umur' => $this->input->post('umur',TRUE),
		'umurbulan' => $this->input->post('umurbulan',TRUE),
		'u25' => $this->input->post('u25',TRUE),
		'u26' => $this->input->post('u26',TRUE),
		'u31' => $this->input->post('u31',TRUE),
		'u36' => $this->input->post('u36',TRUE),
		'u41' => $this->input->post('u41',TRUE),
		'u46' => $this->input->post('u46',TRUE),
		'u51' => $this->input->post('u51',TRUE),
		'u56' => $this->input->post('u56',TRUE),
		'lastupdate' => $this->input->post('lastupdate',TRUE),
		'no_box' => $this->input->post('no_box',TRUE),
	    );

            $this->Pegawai2_model->update($this->input->post('NIP', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pegawai2'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pegawai2_model->get_by_id($id);

        if ($row) {
            $this->Pegawai2_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pegawai2'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pegawai2'));
        }
    }

   

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "t_rekap_master.xls";
        $judul = "t_rekap_master";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Nipbaru");
	xlsWriteLabel($tablehead, $kolomhead++, "Status");
	xlsWriteLabel($tablehead, $kolomhead++, "NAMA");
	xlsWriteLabel($tablehead, $kolomhead++, "NAMAGELAR");
	xlsWriteLabel($tablehead, $kolomhead++, "TGL LAHIR");
	xlsWriteLabel($tablehead, $kolomhead++, "Kd Agama");
	xlsWriteLabel($tablehead, $kolomhead++, "GOL");
	xlsWriteLabel($tablehead, $kolomhead++, "Sk Pangkat");
	xlsWriteLabel($tablehead, $kolomhead++, "GOL TMT");
	xlsWriteLabel($tablehead, $kolomhead++, "Gol Tgl");
	xlsWriteLabel($tablehead, $kolomhead++, "CPNS TMT");
	xlsWriteLabel($tablehead, $kolomhead++, "Pensiun Tmt");
	xlsWriteLabel($tablehead, $kolomhead++, "Kd Fung");
	xlsWriteLabel($tablehead, $kolomhead++, "Kd Statusfung");
	xlsWriteLabel($tablehead, $kolomhead++, "Kd Jenjangfung");
	xlsWriteLabel($tablehead, $kolomhead++, "Uraian Jenjang");
	xlsWriteLabel($tablehead, $kolomhead++, "Keahlian");
	xlsWriteLabel($tablehead, $kolomhead++, "Tmt Jenjang");
	xlsWriteLabel($tablehead, $kolomhead++, "PDD");
	xlsWriteLabel($tablehead, $kolomhead++, "Pendidikan");
	xlsWriteLabel($tablehead, $kolomhead++, "Pendidikan Duk");
	xlsWriteLabel($tablehead, $kolomhead++, "Diklat Struk Tk");
	xlsWriteLabel($tablehead, $kolomhead++, "Diklat Struk");
	xlsWriteLabel($tablehead, $kolomhead++, "Diklat Struk Th");
	xlsWriteLabel($tablehead, $kolomhead++, "Diklat Struk Jam");
	xlsWriteLabel($tablehead, $kolomhead++, "Diklat Fung");
	xlsWriteLabel($tablehead, $kolomhead++, "Pelaksanaan Dikfung");
	xlsWriteLabel($tablehead, $kolomhead++, "KD UNITKERJA");
	xlsWriteLabel($tablehead, $kolomhead++, "Kd Unit");
	xlsWriteLabel($tablehead, $kolomhead++, "UNITKERJA");
	xlsWriteLabel($tablehead, $kolomhead++, "UNITKERJA SING");
	xlsWriteLabel($tablehead, $kolomhead++, "UNITKERJAES1");
	xlsWriteLabel($tablehead, $kolomhead++, "UNITKERJAES1 SING");
	xlsWriteLabel($tablehead, $kolomhead++, "JENIS UNIT");
	xlsWriteLabel($tablehead, $kolomhead++, "Jabatan");
	xlsWriteLabel($tablehead, $kolomhead++, "No Sk");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Sk");
	xlsWriteLabel($tablehead, $kolomhead++, "Tmt Jab");
	xlsWriteLabel($tablehead, $kolomhead++, "Tmt Lantik");
	xlsWriteLabel($tablehead, $kolomhead++, "Duk Tmt Jab");
	xlsWriteLabel($tablehead, $kolomhead++, "Tmt Jab Awal");
	xlsWriteLabel($tablehead, $kolomhead++, "Ms Kerja Th");
	xlsWriteLabel($tablehead, $kolomhead++, "Ms Kerja Bl");
	xlsWriteLabel($tablehead, $kolomhead++, "Kelamin");
	xlsWriteLabel($tablehead, $kolomhead++, "Umur");
	xlsWriteLabel($tablehead, $kolomhead++, "Umurbulan");
	xlsWriteLabel($tablehead, $kolomhead++, "Lastupdate");
	

	foreach ($this->Pegawai2_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nipbaru);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status);
	    xlsWriteLabel($tablebody, $kolombody++, $data->NAMA);
	    xlsWriteLabel($tablebody, $kolombody++, $data->NAMAGELAR);
	    xlsWriteLabel($tablebody, $kolombody++, $data->TGL_LAHIR);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kd_agama);
	    xlsWriteLabel($tablebody, $kolombody++, $data->GOL);
	    xlsWriteLabel($tablebody, $kolombody++, $data->sk_pangkat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->GOL_TMT);
	    xlsWriteLabel($tablebody, $kolombody++, $data->gol_tgl);
	    xlsWriteLabel($tablebody, $kolombody++, $data->CPNS_TMT);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pensiun_tmt);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kd_fung);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kd_statusfung);
	    xlsWriteNumber($tablebody, $kolombody++, $data->kd_jenjangfung);
	    xlsWriteLabel($tablebody, $kolombody++, $data->uraian_jenjang);
	    xlsWriteLabel($tablebody, $kolombody++, $data->keahlian);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tmt_jenjang);
	    xlsWriteLabel($tablebody, $kolombody++, $data->PDD);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pendidikan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pendidikan_duk);
	    xlsWriteNumber($tablebody, $kolombody++, $data->diklat_struk_tk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->diklat_struk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->diklat_struk_th);
	    xlsWriteLabel($tablebody, $kolombody++, $data->diklat_struk_jam);
	    xlsWriteLabel($tablebody, $kolombody++, $data->diklat_fung);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pelaksanaan_dikfung);
	    xlsWriteLabel($tablebody, $kolombody++, $data->KD_UNITKERJA);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kd_unit);
	    xlsWriteLabel($tablebody, $kolombody++, $data->UNITKERJA);
	    xlsWriteLabel($tablebody, $kolombody++, $data->UNITKERJA_SING);
	    xlsWriteLabel($tablebody, $kolombody++, $data->UNITKERJAES1);
	    xlsWriteLabel($tablebody, $kolombody++, $data->UNITKERJAES1_SING);
	    xlsWriteLabel($tablebody, $kolombody++, $data->JENIS_UNIT);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jabatan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_sk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_sk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tmt_jab);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tmt_lantik);
	    xlsWriteLabel($tablebody, $kolombody++, $data->duk_tmt_jab);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tmt_jab_awal);
	    xlsWriteNumber($tablebody, $kolombody++, $data->ms_kerja_th);
	    xlsWriteNumber($tablebody, $kolombody++, $data->ms_kerja_bl);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kelamin);
	    xlsWriteNumber($tablebody, $kolombody++, $data->umur);
	    xlsWriteNumber($tablebody, $kolombody++, $data->umurbulan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->lastupdate);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=t_rekap_master.doc");

        $data = array(
            't_rekap_master_data' => $this->Pegawai2_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('pegawai2/t_rekap_master_doc',$data);
    }

}

/* End of file Pegawai2.php */
/* Location: ./application/controllers/Pegawai2.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-04-19 17:46:01 */
/* http://harviacode.com */