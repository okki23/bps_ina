<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pencatatan_hibah_5261 extends CI_Controller {
	var $folder =   "admin/pencatatan_hibah_5261";
    var $tables =   "pencatatan_hibah_5261";
    var $pk     =   "id_pencatatan_hibah";
    var $title  =   "Pencatatan Hibah";
	
	// Load database
	public function __construct(){
		parent::__construct();
		$this->load->model('pencatatan_hibah_5261_model');
	}
	
	// Index
	public function index() {
		$pencatatan_hibah_5261 = $this->pencatatan_hibah_5261_model->listing();
		$data = array('pencatatan_hibah_5261'	=> $pencatatan_hibah_5261);
		$data['title']=  $this->title;
		$this->template->load('template', $this->folder.'/view',$data);
	}
	
	// Tambah
	public function post() {
		$v = $this->form_validation;
		
		$v->set_rules('nama_barang','Nama Barang','required', array('required'=> 'Nama Barang harus diisi'));
		$v->set_rules('nilai_barang','Nilai Barang','', array('required'=> 'Nilai Barang harus diisi'));
		$v->set_rules('nama_penerima','Nama Penerima','', array('required'=> 'Nama Penerima harus diisi'));
		$v->set_rules('file_1','BAST Kepala Sekolah','', array('required'=> 'BAST Kepala Sekolah harus diisi'));
		$v->set_rules('file_2','BAST Yayasan','', array('required'=> 'BAST Yayasan harus diisi'));
		$v->set_rules('file_3','BAST Kepala Dinas Pendidikan','', array('required'=> 'BAST Kepala Dinas Pendidikan harus diisi'));
		$v->set_rules('file_4','Data Dukung Lainnya','', array('required'=> 'Data Dukung Lainnya harus diisi'));
		$v->set_rules('file_5','Fotocopy POK / DIPA','', array('required'=> 'Fotocopy POK / DIPA harus diisi'));
		$v->set_rules('file_6','Surat Usulan Permohonan Persetujuan Hibah','', array('required'=> 'Surat Usulan Permohonan Persetujuan Hibah harus diisi'));
		$v->set_rules('file_7','SK. Pembentukan TIM Internal','', array('required'=> 'SK. Pembentukan TIM Internal harus diisi'));
		$v->set_rules('file_8','Berita Acara Pemeriksaan','', array('required'=> 'Berita Acara Pemeriksaan harus diisi'));
		$v->set_rules('file_9','Surat Pernyataan','', array('required'=> 'Surat Pernyataan harus diisi'));
		$v->set_rules('file_10','Surat Pernyataan Tanggung Jawab','', array('required'=> 'Surat Pernyataan Tanggung Jawab harus diisi'));
		$v->set_rules('file_11','Alasan Hibah','', array('required'=> 'Alasan Hibah harus diisi'));
		$v->set_rules('file_12','Naskah Hibah yang Ditanda Tangani','', array('required'=> 'Naskah Hibah yang Ditanda Tangani harus diisi'));
		$v->set_rules('file_13','BAST Akhir yang Ditanda Tangani','', array('required'=> 'BAST Akhir yang Ditanda Tangani harus diisi'));
		$v->set_rules('file_14','Surat Usulan Permohonan SK. Penghapusan','', array('required'=> 'Surat Usulan Permohonan SK. Penghapusan harus diisi'));
		$v->set_rules('status','Status');
		
		if($v->run()) {
			$config['upload_path'] 		= './assets/upload/pencatatan_hibah_5261/';
			$config['allowed_types'] 	= 'docx|jpg|png|pdf';
			$config['max_size']			= '12000'; // KB	
			$this->load->library('upload', $config);
			if(! $this->upload->do_upload('file_1','file_2','file_3','file_4','file_5','file_6','file_7','file_8',
				'file_9','file_10','file_11','file_12','file_13','file_14')) {
		// End validasi
		
		$data = array(	'error'		=> $this->upload->display_errors());
		$this->template->load('template', $this->folder.'/post',$data);
		// Masuk database
		}else{
			$upload_data				= array('uploads' =>$this->upload->data());
			// Image Editor
			$config['image_library']	= 'gd2';
			$config['source_image'] 	= './assets/upload/pencatatan_hibah_5261/'.$upload_data['uploads']['file_name']; 
			$config['new_image'] 		= './assets/upload/pencatatan_hibah_5261/thumbs/';
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
			$data = array(	
							'nama_barang'		=> $i->post('nama_barang'),
							'nilai_barang'		=> $i->post('nilai_barang'),
							'nama_penerima'		=> $i->post('nama_penerima'),
							'file_1'			=> $upload_data['uploads']['file_name'],
							'file_2'			=> $upload_data['uploads']['file_name'],
							'file_3'			=> $upload_data['uploads']['file_name'],
							'file_4'			=> $upload_data['uploads']['file_name'],
							'file_5'			=> $upload_data['uploads']['file_name'],
							'file_6'			=> $upload_data['uploads']['file_name'],
							'file_7'			=> $upload_data['uploads']['file_name'],
							'file_8'			=> $upload_data['uploads']['file_name'],
							'file_9'			=> $upload_data['uploads']['file_name'],
							'file_10'			=> $upload_data['uploads']['file_name'],
							'file_11'			=> $upload_data['uploads']['file_name'],
							'file_12'			=> $upload_data['uploads']['file_name'],
							'file_13'			=> $upload_data['uploads']['file_name'],
							'file_14'			=> $upload_data['uploads']['file_name'],
							'status'			=> $i->post('status'),
							'post_time'			=> date('Y-m-d')
							);
			$this->pencatatan_hibah_5261_model->post($data);
			$this->session->set_flashdata('sukses','Catatan Hibah telah ditambah');
			redirect(base_url('admin/pencatatan_hibah_5261'));
		}}
		// End masuk database
		
		$data['title']=  $this->title;
		$this->template->load('template', $this->folder.'/post',$data);
	}
	
	// Edit
	public function edit($id_pencatatan_hibah) {
		$pencatatan_hibah_5261		= $this->pencatatan_hibah_5261_model->detail($id_pencatatan_hibah);
		
		// Validasi
		$v = $this->form_validation;
		
		$v->set_rules('nama_barang','Nama Barang','required', array('required'=> 'Nama Barang harus diisi'));
		$v->set_rules('nilai_barang','Nilai Barang','', array('required'=> 'Nilai Barang harus diisi'));
		$v->set_rules('nama_penerima','Nama Penerima','', array('required'=> 'Nama Penerima harus diisi'));
		$v->set_rules('file_1','BAST Kepala Sekolah','', array('required'=> 'BAST Kepala Sekolah harus diisi'));
		$v->set_rules('file_2','BAST Yayasan','', array('required'=> 'BAST Yayasan harus diisi'));
		$v->set_rules('file_3','BAST Kepala Dinas Pendidikan','', array('required'=> 'BAST Kepala Dinas Pendidikan harus diisi'));
		$v->set_rules('file_4','Data Dukung Lainnya','', array('required'=> 'Data Dukung Lainnya harus diisi'));
		$v->set_rules('file_5','Fotocopy POK / DIPA','', array('required'=> 'Fotocopy POK / DIPA harus diisi'));
		$v->set_rules('file_6','Surat Usulan Permohonan Persetujuan Hibah','', array('required'=> 'Surat Usulan Permohonan Persetujuan Hibah harus diisi'));
		$v->set_rules('file_7','SK. Pembentukan TIM Internal','', array('required'=> 'SK. Pembentukan TIM Internal harus diisi'));
		$v->set_rules('file_8','Berita Acara Pemeriksaan','', array('required'=> 'Berita Acara Pemeriksaan harus diisi'));
		$v->set_rules('file_9','Surat Pernyataan','', array('required'=> 'Surat Pernyataan harus diisi'));
		$v->set_rules('file_10','Surat Pernyataan Tanggung Jawab','', array('required'=> 'Surat Pernyataan Tanggung Jawab harus diisi'));
		$v->set_rules('file_11','Alasan Hibah','', array('required'=> 'Alasan Hibah harus diisi'));
		$v->set_rules('file_12','Naskah Hibah yang Ditanda Tangani','', array('required'=> 'Naskah Hibah yang Ditanda Tangani harus diisi'));
		$v->set_rules('file_13','BAST Akhir yang Ditanda Tangani','', array('required'=> 'BAST Akhir yang Ditanda Tangani harus diisi'));
		$v->set_rules('file_14','Surat Usulan Permohonan SK. Penghapusan','', array('required'=> 'Surat Usulan Permohonan SK. Penghapusan harus diisi'));
		$v->set_rules('status','Status');
		
		if($v->run()) {
			if(!empty($_FILES['file_1']['file_2']['file_3']['file_4']['file_5']['file_6']['file_7']['file_8']
				['file_9']['file_10']['file_11']['file_12']['file_13']['file_14']['name'])) {
			$config['upload_path'] 		= './assets/upload/pencatatan_hibah_5261/';
			$config['allowed_types'] 	= 'docx|jpg|png|pdf';
			$config['max_size']			= '12000'; // KB	
			$this->load->library('upload', $config);
			if(! $this->upload->do_upload('file_1','file_2','file_3','file_4','file_5','file_6','file_7','file_8',
				'file_9','file_10','file_11','file_12','file_13','file_14')) {
		// End validasi
		
		$this->template->load('template', $this->folder.'/edit',$data);
		// Masuk database
		}else{
			$upload_data				= array('uploads' =>$this->upload->data());
			// Image Editor
			$config['image_library']	= 'gd2';
			$config['source_image'] 	= './assets/upload/pencatatan_hibah_5261/'.$upload_data['uploads']['file_name']; 
			$config['new_image'] 		= './assets/upload/pencatatan_hibah_5261/thumbs/';
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
			$data = array(	
							'nama_barang'		=> $i->post('nama_barang'),
							'nilai_barang'		=> $i->post('nilai_barang'),
							'nama_penerima'		=> $i->post('nama_penerima'),
							'file_1'			=> $upload_data['uploads']['file_name'],
							'file_2'			=> $upload_data['uploads']['file_name'],
							'file_3'			=> $upload_data['uploads']['file_name'],
							'file_4'			=> $upload_data['uploads']['file_name'],
							'file_5'			=> $upload_data['uploads']['file_name'],
							'file_6'			=> $upload_data['uploads']['file_name'],
							'file_7'			=> $upload_data['uploads']['file_name'],
							'file_8'			=> $upload_data['uploads']['file_name'],
							'file_9'			=> $upload_data['uploads']['file_name'],
							'file_10'			=> $upload_data['uploads']['file_name'],
							'file_11'			=> $upload_data['uploads']['file_name'],
							'file_12'			=> $upload_data['uploads']['file_name'],
							'file_13'			=> $upload_data['uploads']['file_name'],
							'file_14'			=> $upload_data['uploads']['file_name'],
							'status'			=> $i->post('status'),
							'post_time'			=> date('Y-m-d')
							);
			$this->pencatatan_hibah_5261_model->edit($data);
			$this->session->set_flashdata('sukses','Pencatatan Hibah telah diedit');
			redirect(base_url('admin/pencatatan_hibah_5261'));
		}}else{
			// Proses ke database
			$i = $this->input;
			$data = array(	'id_pencatatan_hibah'	=> $id_pencatatan_hibah,
							'inputer'				=> $this->session->userdata('nip'),
							'nama_barang'			=> $i->post('nama_barang'),
							'nilai_barang'			=> $i->post('nilai_barang'),
							'nama_penerima'			=> $i->post('nama_penerima'),
							'file_1'				=> $upload_data['uploads']['file_name'],
							'file_3'				=> $upload_data['uploads']['file_name'],
							'file_4'				=> $upload_data['uploads']['file_name'],
							'file_5'				=> $upload_data['uploads']['file_name'],
							'file_6'				=> $upload_data['uploads']['file_name'],
							'file_7'				=> $upload_data['uploads']['file_name'],
							'file_8'				=> $upload_data['uploads']['file_name'],
							'file_9'				=> $upload_data['uploads']['file_name'],
							'file_10'				=> $upload_data['uploads']['file_name'],
							'file_11'				=> $upload_data['uploads']['file_name'],
							'file_12'				=> $upload_data['uploads']['file_name'],
							'file_13'				=> $upload_data['uploads']['file_name'],
							'file_14'				=> $upload_data['uploads']['file_name'],
							'status'				=> $i->post('status'),
							'post_time'				=> date('Y-m-d')								
							);
			$this->pencatatan_hibah_5261_model->edit($data);
			$this->session->set_flashdata('sukses','Pencatatan Hibah telah diedit');
			redirect(base_url('pencatatan_hibah_5261'));
		}}
		// End masuk database
		$data = array('pencatatan_hibah_5261'	=> $pencatatan_hibah_5261);
		$data['title']=  $this->title;
		$this->template->load('template', $this->folder.'/edit',$data);
	}

	// Delete
	public function delete($id_pencatatan_hibah) {
		$data = array('id_pencatatan_hibah'	=> $id_pencatatan_hibah);
		$this->pencatatan_hibah_5261_model->delete($data);
		$this->session->set_flashdata('sukses','Data telah didelete');
		redirect(base_url('admin/pencatatan_hibah_5261'));		
	}
}