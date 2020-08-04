<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_keluar extends CI_Controller {
	var $folder =   "surat_keluar";
    var $tables =   "surat_keluar";
    var $pk     =   "id_surat_keluar";
    var $title  =   "Surat Keluar";
	
	// Load database
	public function __construct(){
		parent::__construct();
		$this->load->model('surat_keluar_model');
	}
	
	// Index
	public function index() {
		$surat_keluar = $this->surat_keluar_model->listing();
		$data = array('surat_keluar'=> $surat_keluar);
		$data['title']=  $this->title;
		$this->template->load('template', $this->folder.'/list',$data);
	}
	
	// Tambah
	public function tambah() {
		$v = $this->form_validation;
		
		$v->set_rules('tahun','Tahun','required', array('required'=> 'Tahun harus diisi'));
		$v->set_rules('no_surat','Nomor Surat','', array('required'=> 'Nomor Surat harus diisi'));
		$v->set_rules('tgl_surat','Tanggal Surat','', array('required'=> 'Tanggal Surat harus diisi'));
		$v->set_rules('asal_surat','Asal Surat','', array('required'=> 'Asal Surat harus diisi'));
		$v->set_rules('isi_ringkas','Isi Ringkas','', array('required'=> 'Isi Ringkas harus diisi'));
		$v->set_rules('tujuan','Tujuan Surat','', array('required'=> 'Tujuan Surat harus diisi'));
		$v->set_rules('keterangan','Keterangan');
		
		if($v->run()) {
			$config['upload_path'] 		= './assets/upload/surat_keluar/';
			$config['allowed_types'] 	= 'docx|jpg|png|pdf';
			$config['max_size']			= '12000'; // KB	
			$this->load->library('upload', $config);
			if(! $this->upload->do_upload('gambar')) {
		// End validasi
		
		$data = array(	'error'		=> $this->upload->display_errors());
		$this->template->load('template', $this->folder.'/tambah',$data);
		// Masuk database
		}else{
			$upload_data				= array('uploads' =>$this->upload->data());
			// Image Editor
			$config['image_library']	= 'gd2';
			$config['source_image'] 	= './assets/upload/surat_keluar/'.$upload_data['uploads']['file_name']; 
			$config['new_image'] 		= './assets/upload/surat_keluar/thumbs/';
			$config['create_thumb'] 	= TRUE;
			$config['quality'] 			= "100%";
			$config['maintain_ratio'] 	= TRUE;
			$config['width'] 			= 360; // Pixel
			$config['height'] 			= 200; // Pixel
			$config['x_axis'] 			= 0;
			$config['y_axis'] 			= 0;
			$config['thumb_marker'] 	= '';
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			
			// Proses ke database
			$i = $this->input;
			$data = array(	'UNITKERJA_SING'		=> $this->session->userdata('UNITKERJA_SING'),
							'kd_unit'				=> $this->session->userdata('kd_unit'),
							'inputer'				=> $this->session->userdata('nip'),
							'tahun'					=> $i->post('tahun'),
							'no_surat'				=> $i->post('no_surat'),
							'tgl_surat'				=> $i->post('tgl_surat'),
							'asal_surat'			=> $i->post('asal_surat'),
							'isi_ringkas'			=> $i->post('isi_ringkas'),
							'tujuan'			=> $i->post('tujuan'),
							'keterangan'			=> $i->post('keterangan'),
							'gambar'				=> $upload_data['uploads']['file_name'],
							'post_time'			=> date('Y-m-d')
							);
			$this->surat_keluar_model->tambah($data);
			$this->session->set_flashdata('sukses','Surat Masuk telah ditambah');
			redirect(base_url('surat_keluar'));
		}}
		// End masuk database
		
		$data['title']=  $this->title;
		$this->template->load('template', $this->folder.'/tambah',$data);
	}
	
	// Edit
	public function edit($id_surat_keluar) {
		$surat_keluar		= $this->surat_keluar_model->detail($id_surat_keluar);
		
		// Validasi
		$v = $this->form_validation;
		
		$v->set_rules('tahun','Tahun','required', array('required'=> 'Tahun harus diisi'));
		$v->set_rules('no_surat','Nomor Surat','', array('required'=> 'Nomor Surat harus diisi'));
		$v->set_rules('tgl_surat','Tanggal Surat','', array('required'=> 'Tanggal Surat harus diisi'));
		$v->set_rules('asal_surat','Asal Surat','', array('required'=> 'Asal Surat harus diisi'));
		$v->set_rules('isi_ringkas','Isi Ringkas','', array('required'=> 'Isi Ringkas harus diisi'));
		$v->set_rules('tujuan','Asal Surat','', array('required'=> 'Asal Surat harus diisi'));
		$v->set_rules('keterangan','Keterangan');
			
			if($v->run()) {
			if(!empty($_FILES['gambar']['name'])) {
			$config['upload_path'] 		= './assets/upload/surat_keluar/';
			$config['allowed_types'] 	= 'docx|jpg|png|pdf';
			$config['max_size']			= '12000'; // KB	
			$this->load->library('upload', $config);
			if(! $this->upload->do_upload('gambar')) {
		// End validasi
		
		$this->template->load('template', $this->folder.'/edit',$data);
		// Masuk database
		}else{
			$upload_data				= array('uploads' =>$this->upload->data());
			// Image Editor
			$config['image_library']	= 'gd2';
			$config['source_image'] 	= './assets/upload/surat_keluar/'.$upload_data['uploads']['file_name']; 
			$config['new_image'] 		= './assets/upload/surat_keluar/thumbs/';
			$config['create_thumb'] 	= TRUE;
			$config['quality'] 			= "100%";
			$config['maintain_ratio'] 	= TRUE;
			$config['width'] 			= 360; // Pixel
			$config['height'] 			= 200; // Pixel
			$config['x_axis'] 			= 0;
			$config['y_axis'] 			= 0;
			$config['thumb_marker'] 	= '';
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			
			// Proses ke database
			$i = $this->input;
			$data = array(	'id_surat_keluar'		=> $id_surat_keluar,
							'UNITKERJA_SING'		=> $this->session->userdata('UNITKERJA_SING'),
							'kd_unit'				=> $this->session->userdata('kd_unit'),
							'inputer'				=> $this->session->userdata('nip'),
							'tahun'					=> $i->post('tahun'),
							'no_surat'				=> $i->post('no_surat'),
							'tgl_surat'				=> $i->post('tgl_surat'),
							'asal_surat'			=> $i->post('asal_surat'),
							'isi_ringkas'			=> $i->post('isi_ringkas'),
							'tujuan'				=> $i->post('tujuan'),
							'keterangan'			=> $i->post('keterangan'),
							'gambar'				=> $upload_data['uploads']['file_name']
							);
			$this->surat_keluar_model->edit($data);
			$this->session->set_flashdata('sukses','Surat Keluar telah diedit');
			redirect(base_url('surat_keluar'));
		}}else{
			// Proses ke database
			$i = $this->input;
			$data = array(	'id_surat_keluar'		=> $id_surat_keluar,
							'UNITKERJA_SING'		=> $this->session->userdata('UNITKERJA_SING'),
							'kd_unit'				=> $this->session->userdata('kd_unit'),
							'inputer'				=> $this->session->userdata('nip'),
							'tahun'					=> $i->post('tahun'),
							'no_surat'				=> $i->post('no_surat'),
							'tgl_surat'				=> $i->post('tgl_surat'),
							'asal_surat'			=> $i->post('asal_surat'),
							'isi_ringkas'			=> $i->post('isi_ringkas'),
							'tujuan'				=> $i->post('tujuan'),
							'keterangan'			=> $i->post('keterangan'),								
							);
			$this->surat_keluar_model->edit($data);
			$this->session->set_flashdata('sukses','Surat Masuk telah diedit');
			redirect(base_url('surat_keluar'));
		}}
		// End masuk database
		$data = array('surat_keluar'	=>$surat_keluar);
		$data['title']=  $this->title;
		$this->template->load('template', $this->folder.'/edit',$data);
	}

	// Delete
	public function delete($id_surat_keluar) {
		$data = array('id_surat_keluar'	=> $id_surat_keluar);
		$this->surat_keluar_model->delete($data);
		$this->session->set_flashdata('sukses','Data telah didelete');
		redirect(base_url('surat_keluar'));		
	}
}