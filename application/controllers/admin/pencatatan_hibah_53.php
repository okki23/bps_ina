<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pencatatan_hibah_53 extends CI_Controller {
	var $folder =   "admin/pencatatan_hibah_53";
    var $tables =   "pencatatan_hibah_53";
    var $pk     =   "id_pencatatan_hibah";
    var $title  =   "Pencatatan Hibah";
	
	// Load database
	public function __construct(){
		parent::__construct();
		$this->load->model('pencatatan_hibah_53_model');
	}
	
	// Index
	public function index() {
		$pencatatan_hibah_53 = $this->pencatatan_hibah_53_model->listing();
		$data = array('pencatatan_hibah_53'	=> $pencatatan_hibah_53);
		$data['title']=  $this->title;
		$this->template->load('template', $this->folder.'/view',$data);
	}

	// Tambah
	// public function post() {

	// 	if(isset($_POST['submit'])) {

	// 	$v = $this->form_validation;
		
	// 	$v->set_rules('nama_barang','Nama Barang','required', array('required'=> 'Nama Barang harus diisi'));
	// 	$v->set_rules('nilai_barang','Nilai Barang','', array('required'=> 'Nilai Barang harus diisi'));
	// 	$v->set_rules('nama_penerima','Nama Penerima','', array('required'=> 'Nama Penerima harus diisi'));
	// 	$v->set_rules('file_1','Surat Usulan Penetapan Status Penggunaan BMN','', array('required'=> 'Surat Usulan Penetapan Status Penggunaan BMN harus diisi'));
	// 	$v->set_rules('file_2','SK. Penetapan Status Penggunaan BMN','', array('required'=> 'SK. Penetapan Status Penggunaan BMN harus diisi'));
	// 	$v->set_rules('file_3','BAST. Pihak Pemberi & Penerima','', array('required'=> 'BAST KeBAST. Pihak Pemberi & Penerima harus diisi'));
	// 	$v->set_rules('file_4','Surat Pernyataan Bersedia Menerima Hibah','', array('required'=> 'Surat Pernyataan Bersedia Menerima Hibah harus diisi'));
	// 	$v->set_rules('file_5','Foto / Dokumentasi Hibah','', array('required'=> 'Foto / Dokumentasi Hibah harus diisi'));
	// 	$v->set_rules('file_6','Fotokopi POK/DIPA','', array('required'=> 'Fotokopi POK/DIPA harus diisi'));
	// 	$v->set_rules('file_7','Surat Usulan Permohonan Persetujuan Hibah','', array('required'=> 'Surat Usulan Permohonan Persetujuan Hibah harus diisi'));
	// 	$v->set_rules('file_8','SK. Pembentukan TIM Internal Hibah','', array('required'=> 'SK. Pembentukan TIM Internal Hibah harus diisi'));
	// 	$v->set_rules('file_9','Berita Acara Penelitian','', array('required'=> 'Berita Acara Penelitian harus diisi'));
	// 	$v->set_rules('file_10','Surat Pernyataan','', array('required'=> 'Surat Pernyataan harus diisi'));
	// 	$v->set_rules('file_11','Surat Pernyataan Tanggung Jawab','', array('required'=> 'Surat Pernyataan Tanggung Jawab harus diisi'));
	// 	$v->set_rules('file_12','Alasan Hibah','', array('required'=> 'Alasan Hibah harus diisi'));
	// 	$v->set_rules('file_13','Naskah Hibah yang Ditanda Tangani','', array('required'=> 'Naskah Hibah yang Ditanda Tangani harus diisi'));
	// 	$v->set_rules('file_14','BAST Akhir yang Ditanda Tangani','', array('required'=> 'BAST Akhir yang Ditanda Tangani harus diisi'));
	// 	$v->set_rules('file_15','Surat Usulan Permohonan SK. Penghapusan Hibah','', array('required'=> 'Surat Usulan Permohonan SK. Penghapusan Hibah harus diisi'));
	// 	$v->set_rules('status','Status');


	// 	$config['upload_path'] 		= './assets/upload/pencatatan_hibah_53/';
	// 	$config['allowed_types'] 	= 'docx|jpg|png|pdf';
	// 	$config['max_size']			= '12000'; // KB	
	// 	$this->load->library('upload', $config);

	// 	// File 1

	// 	if(!empty($_FILES['file_1']['name'])){
	// 	$this->upload->do_upload('file_1');
	// 	$data1=$this->upload->data();
	// 	$file_1 = $data1['file_name'];
	// 	}

	// 	// File 2
		
	// 	if(!empty($_FILES['file_2']['name'])){
	// 	$this->upload->do_upload('file_2');
	// 	$data2=$this->upload->data();
	// 	$file_2 = $data1['file_name'];
	// 	}

	// 	// File 3
		
	// 	if(!empty($_FILES['file_3']['name'])){
	// 	$this->upload->do_upload('file_3');
	// 	$data3=$this->upload->data();
	// 	$file_3 = $data1['file_name'];
	// 	}


	// 	// File 4
		
	// 	if(!empty($_FILES['file_4']['name'])){
	// 	$this->upload->do_upload('file_4');
	// 	$data4=$this->upload->data();
	// 	$file_4 = $data1['file_name'];
	// 	}


	// 	// File 5
		
	// 	if(!empty($_FILES['file_5']['name'])){
	// 	$this->upload->do_upload('file_5');
	// 	$data5=$this->upload->data();
	// 	$file_5 = $data1['file_name'];
	// 	}


	// 	// File 6
		
	// 	if(!empty($_FILES['file_6']['name'])){
	// 	$this->upload->do_upload('file_6');
	// 	$data6=$this->upload->data();
	// 	$file_6 = $data1['file_name'];
	// 	}

	// 	// File 7
		
	// 	if(!empty($_FILES['file_7']['name'])){
	// 	$this->upload->do_upload('file_7');
	// 	$data7=$this->upload->data();
	// 	$file_7 = $data1['file_name'];
	// 	}

	// 	// File 8
		
	// 	if(!empty($_FILES['file_8']['name'])){
	// 	$this->upload->do_upload('file_8');
	// 	$data8=$this->upload->data();
	// 	$file_8 = $data1['file_name'];
	// 	}

	// 	// File 9
		
	// 	if(!empty($_FILES['file_9']['name'])){
	// 	$this->upload->do_upload('file_9');
	// 	$data9=$this->upload->data();
	// 	$file_9 = $data1['file_name'];
	// 	}


	// 	// File 10
		
	// 	if(!empty($_FILES['file_10']['name'])){
	// 	$this->upload->do_upload('file_10');
	// 	$data10=$this->upload->data();
	// 	$file_10 = $data1['file_name'];
	// 	}

	// 	// File 11
		
	// 	if(!empty($_FILES['file_11']['name'])){
	// 	$this->upload->do_upload('file_11');
	// 	$data11=$this->upload->data();
	// 	$file_11 = $data1['file_name'];
	// 	}

	// 	// File 12
		
	// 	if(!empty($_FILES['file_12']['name'])){
	// 	$this->upload->do_upload('file_12');
	// 	$data12=$this->upload->data();
	// 	$file_12 = $data1['file_name'];
	// 	}

	// 	// File 13
		
	// 	if(!empty($_FILES['file_13']['name'])){
	// 	$this->upload->do_upload('file_13');
	// 	$data13=$this->upload->data();
	// 	$file_13 = $data1['file_name'];
	// 	}

	// 	// File 14
		
	// 	if(!empty($_FILES['file_14']['name'])){
	// 	$this->upload->do_upload('file_14');
	// 	$data14=$this->upload->data();
	// 	$file_14 = $data1['file_name'];
	// 	}

	// 	// File 15
		
	// 	if(!empty($_FILES['file_15']['name'])){
	// 	$this->upload->do_upload('file_15');
	// 	$data15=$this->upload->data();
	// 	$file_15 = $data1['file_name'];
	// 	}


	// 	if($v->run())
	// 	{
	// 	$this->template->load('template', $this->folder.'/post',$data);
	// 	$name = $this->input->post('name', TRUE);
	// 	$data = ['name'=>$name, 'file_1'=>$file_1, 'file_2'=>$file_2, 'file_3'=>$file_3, 'file_4'=>$file_4, 'file_5'=>$file_5,
	// 			'file_6'=>$file_6, 'file_7'=>$file_7, 'file_8'=>$file_8, 'file_9'=>$file_9, 'file_10'=>$file_10,
	// 			'file_11'=>$file_11, 'file_12'=>$file_12, 'file_13'=>$file_13, 'file_14'=>$file_14, 'file_15'=>$file_15];
	// 	$insert = $this->db->insert('upload', $data);
	// 	if ($insert) {
	// 		$this->session->set_flashdata('sukses','Catatan Hibah telah ditambah');
	// 		redirect(base_url('admin/pencatatan_hibah_53'));
	// 		} 
	// 	}

	// 	}

	// }
	
	//Tambah
	public function post() {
		$v = $this->form_validation;
		
		$v->set_rules('nama_barang','Nama Barang','required', array('required'=> 'Nama Barang harus diisi'));
		$v->set_rules('nilai_barang','Nilai Barang','', array('required'=> 'Nilai Barang harus diisi'));
		$v->set_rules('nama_penerima','Nama Penerima','', array('required'=> 'Nama Penerima harus diisi'));
		$v->set_rules('file_1','Surat Usulan Penetapan Status Penggunaan BMN','', array('required'=> 'Surat Usulan Penetapan Status Penggunaan BMN harus diisi'));
		$v->set_rules('file_2','SK. Penetapan Status Penggunaan BMN','', array('required'=> 'SK. Penetapan Status Penggunaan BMN harus diisi'));
		$v->set_rules('file_3','BAST. Pihak Pemberi & Penerima','', array('required'=> 'BAST KeBAST. Pihak Pemberi & Penerima harus diisi'));
		$v->set_rules('file_4','Surat Pernyataan Bersedia Menerima Hibah','', array('required'=> 'Surat Pernyataan Bersedia Menerima Hibah harus diisi'));
		$v->set_rules('file_5','Foto / Dokumentasi Hibah','', array('required'=> 'Foto / Dokumentasi Hibah harus diisi'));
		$v->set_rules('file_6','Fotokopi POK/DIPA','', array('required'=> 'Fotokopi POK/DIPA harus diisi'));
		$v->set_rules('file_7','Surat Usulan Permohonan Persetujuan Hibah','', array('required'=> 'Surat Usulan Permohonan Persetujuan Hibah harus diisi'));
		$v->set_rules('file_8','SK. Pembentukan TIM Internal Hibah','', array('required'=> 'SK. Pembentukan TIM Internal Hibah harus diisi'));
		$v->set_rules('file_9','Berita Acara Penelitian','', array('required'=> 'Berita Acara Penelitian harus diisi'));
		$v->set_rules('file_10','Surat Pernyataan','', array('required'=> 'Surat Pernyataan harus diisi'));
		$v->set_rules('file_11','Surat Pernyataan Tanggung Jawab','', array('required'=> 'Surat Pernyataan Tanggung Jawab harus diisi'));
		$v->set_rules('file_12','Alasan Hibah','', array('required'=> 'Alasan Hibah harus diisi'));
		$v->set_rules('file_13','Naskah Hibah yang Ditanda Tangani','', array('required'=> 'Naskah Hibah yang Ditanda Tangani harus diisi'));
		$v->set_rules('file_14','BAST Akhir yang Ditanda Tangani','', array('required'=> 'BAST Akhir yang Ditanda Tangani harus diisi'));
		$v->set_rules('file_15','Surat Usulan Permohonan SK. Penghapusan Hibah','', array('required'=> 'Surat Usulan Permohonan SK. Penghapusan Hibah harus diisi'));
		$v->set_rules('status','Status');
		
		if($v->run()) {
			$config['upload_path'] 		= './assets/upload/pencatatan_hibah_53/';
			$config['allowed_types'] 	= 'docx|jpg|png|pdf';
			$config['max_size']			= '12000'; // KB	
			$this->load->library('upload', $config);
			if(! $this->upload->do_upload('file_1','file_2','file_3','file_4','file_5','file_6','file_7','file_8',
				'file_9','file_10','file_11','file_12','file_13','file_14','file_15')) {
		// End validasi
		
		$data = array(	'error'		=> $this->upload->display_errors());
		$this->template->load('template', $this->folder.'/post',$data);
		// Masuk database
		}else{
			$upload_data				= array('uploads' =>$this->upload->data());
			// Image Editor
			$config['image_library']	= 'gd2';
			$config['source_image'] 	= './assets/upload/pencatatan_hibah_53/'.$upload_data['uploads']['file_name']; 
			$config['new_image'] 		= './assets/upload/pencatatan_hibah_53/thumbs/';
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
							'file_15'			=> $upload_data['uploads']['file_name'],
							'status'			=> $i->post('status'),
							'post_time'			=> date('Y-m-d')
							);
			$this->pencatatan_hibah_53_model->post($data);
			$this->session->set_flashdata('sukses','Catatan Hibah telah ditambah');
			redirect(base_url('admin/pencatatan_hibah_53'));
		}}
		// End masuk database
		
		$data['title']=  $this->title;
		$this->template->load('template', $this->folder.'/post',$data);
	}
	
	// Edit
	public function edit($id_pencatatan_hibah) {
		$pencatatan_hibah_53		= $this->pencatatan_hibah_53_model->detail($id_pencatatan_hibah);
		
		// Validasi
		$v = $this->form_validation;
		
		$v->set_rules('nama_barang','Nama Barang','required', array('required'=> 'Nama Barang harus diisi'));
		$v->set_rules('nilai_barang','Nilai Barang','', array('required'=> 'Nilai Barang harus diisi'));
		$v->set_rules('nama_penerima','Nama Penerima','', array('required'=> 'Nama Penerima harus diisi'));
		$v->set_rules('file_1','Surat Usulan Penetapan Status Penggunaan BMN','', array('required'=> 'Surat Usulan Penetapan Status Penggunaan BMN harus diisi'));
		$v->set_rules('file_2','SK. Penetapan Status Penggunaan BMN','', array('required'=> 'SK. Penetapan Status Penggunaan BMN harus diisi'));
		$v->set_rules('file_3','BAST. Pihak Pemberi & Penerima','', array('required'=> 'BAST KeBAST. Pihak Pemberi & Penerima harus diisi'));
		$v->set_rules('file_4','Surat Pernyataan Bersedia Menerima Hibah','', array('required'=> 'Surat Pernyataan Bersedia Menerima Hibah harus diisi'));
		$v->set_rules('file_5','Foto / Dokumentasi Hibah','', array('required'=> 'Foto / Dokumentasi Hibah harus diisi'));
		$v->set_rules('file_6','Fotokopi POK/DIPA','', array('required'=> 'Fotokopi POK/DIPA harus diisi'));
		$v->set_rules('file_7','Surat Usulan Permohonan Persetujuan Hibah','', array('required'=> 'Surat Usulan Permohonan Persetujuan Hibah harus diisi'));
		$v->set_rules('file_8','SK. Pembentukan TIM Internal Hibah','', array('required'=> 'SK. Pembentukan TIM Internal Hibah harus diisi'));
		$v->set_rules('file_9','Berita Acara Penelitian','', array('required'=> 'Berita Acara Penelitian harus diisi'));
		$v->set_rules('file_10','Surat Pernyataan','', array('required'=> 'Surat Pernyataan harus diisi'));
		$v->set_rules('file_11','Surat Pernyataan Tanggung Jawab','', array('required'=> 'Surat Pernyataan Tanggung Jawab harus diisi'));
		$v->set_rules('file_12','Alasan Hibah','', array('required'=> 'Alasan Hibah harus diisi'));
		$v->set_rules('file_13','Naskah Hibah yang Ditanda Tangani','', array('required'=> 'Naskah Hibah yang Ditanda Tangani harus diisi'));
		$v->set_rules('file_14','BAST Akhir yang Ditanda Tangani','', array('required'=> 'BAST Akhir yang Ditanda Tangani harus diisi'));
		$v->set_rules('file_15','Surat Usulan Permohonan SK. Penghapusan Hibah','', array('required'=> 'Surat Usulan Permohonan SK. Penghapusan Hibah harus diisi'));
		$v->set_rules('status','Status');
		
		if($v->run()) {
			if(!empty($_FILES['file_1']['file_2']['file_3']['file_4']['file_5']['file_6']['file_7']['file_8']
				['file_9']['file_10']['file_11']['file_12']['file_13']['file_14']['file_15']['name'])) {
			$config['upload_path'] 		= './assets/upload/pencatatan_hibah_53/';
			$config['allowed_types'] 	= 'docx|jpg|png|pdf';
			$config['max_size']			= '12000'; // KB	
			$this->load->library('upload', $config);
			if(! $this->upload->do_upload('file_1','file_2','file_3','file_4','file_5','file_6','file_7','file_8',
				'file_9','file_10','file_11','file_12','file_13','file_14','file_15')) {
		// End validasi
		
		$this->template->load('template', $this->folder.'/edit',$data);
		// Masuk database
		}else{
			$upload_data				= array('uploads' =>$this->upload->data());
			// Image Editor
			$config['image_library']	= 'gd2';
			$config['source_image'] 	= './assets/upload/pencatatan_hibah_53/'.$upload_data['uploads']['file_name']; 
			$config['new_image'] 		= './assets/upload/pencatatan_hibah_53/thumbs/';
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
							'file_15'			=> $upload_data['uploads']['file_name'],
							'status'			=> $i->post('status'),
							'post_time'			=> date('Y-m-d')
							);
			$this->pencatatan_hibah_53_model->edit($data);
			$this->session->set_flashdata('sukses','Pencatatan Hibah telah diedit');
			redirect(base_url('admin/pencatatan_hibah_53'));
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
							'file_15'			=> $upload_data['uploads']['file_name'],
							'status'				=> $i->post('status'),
							'post_time'				=> date('Y-m-d')								
							);
			$this->pencatatan_hibah_53_model->edit($data);
			$this->session->set_flashdata('sukses','Pencatatan Hibah telah diedit');
			redirect(base_url('pencatatan_hibah_53'));
		}}
		// End masuk database
		$data = array('pencatatan_hibah_53'	=> $pencatatan_hibah_53);
		$data['title']=  $this->title;
		$this->template->load('template', $this->folder.'/edit',$data);
	}

	// Delete
	public function delete($id_pencatatan_hibah) {
		$data = array('id_pencatatan_hibah'	=> $id_pencatatan_hibah);
		$this->pencatatan_hibah_53_model->delete($data);
		$this->session->set_flashdata('sukses','Data telah didelete');
		redirect(base_url('admin/pencatatan_hibah_53'));		
	}
}