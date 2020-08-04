<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainmenu extends CI_Controller 
{
	
	var $folder =   "admin/mainmenu";
    var $tables =   "mainmenu";
    var $pk     =   "id_mainmenu";
    var $title  =   "Main Menu";
	
	// Load database
	
	public function __construct() {
		parent::__construct();
		$this->load->model('mainmenu_model');
		$this->load->model('level_model');
	}
	
	// Index
	public function index() 
	{
		$mainmenu = $this->mainmenu_model->listing();
		$data = array('mainmenu'	=> $mainmenu);
		$data['title']=  $this->title;
		$this->template->load('template', $this->folder.'/list',$data);
	}
	
	// Tambah
	public function tambah() {
		
		// Validasi
		$valid = $this->form_validation;
		
		$valid->set_rules('nama_mainmenu','Nama Main Menu','required|is_unique[mainmenu.nama_mainmenu]',
		array( 	'required' 	=> 'Nama Mein Menu harus diisi',
				'is_unique'	=> 'Username: <strong>'.$this->input->post('nama_mainmenu').
							   '</strong> sudah digunakan. Buat Nama main Menu baru!'));
	
		$valid->set_rules('icon','ICON','required', array( 'required' => 'ICON harus diisi'));
		
		$valid->set_rules('aktif','Status','required', array( 'required' => 'Status harus diisi'));
		
		$valid->set_rules('link','Link','required|is_unique[mainmenu.link]',
		array( 	'required' 	=> 'Link harus diisi',
				'is_unique'	=> 'Link: <strong>'.$this->input->post('link').
							   '</strong> sudah digunakan. Buat Link baru!'));
							   
		$valid->set_rules('level','Akses Level','required', array( 'required' => 'Akses Level harus diisi'));					   
					
		
		if($valid->run()===FALSE) {
		// End validasi
		$data['title']=  $this->title;
		$this->template->load('template', $this->folder.'/tambah',$data);
		// masuk database
		}else{
			$i = $this->input;
			$data = array( 	'nama_mainmenu'			=> 	$i->post('nama_mainmenu'),
							'icon'					=>	$i->post('icon'),
							'aktif'					=>	$i->post('aktif'),
							'link'					=>	$i->post('link'),
							'level'					=> $i->post('level'));
			$this->mainmenu_model->tambah($data);
			$this->session->set_flashdata('sukses','Main Menu telah ditambah');
			redirect(base_url('admin/mainmenu'));
		}
	}
	
	public function edit($id_mainmenu) {
		$mainmenu = $this->mainmenu_model->detail($id_mainmenu);
		
		$valid = $this->form_validation;
		$valid->set_rules('nama_mainmenu','Nama Main Menu','required', array( 'required' => 'Nama Main Menu harus diisi'));
		$valid->set_rules('icon','ICON','required', array( 'required' => 'ICON harus diisi'));
		$valid->set_rules('aktif','Status','required', array( 'required' => 'Status harus diisi'));
		$valid->set_rules('link','Link','required', array( 'required' => 'Link harus diisi'));
		$valid->set_rules('level','Level','required', array( 'required' => 'Level harus diisi'));
		
		if($valid->run()===FALSE) {
		// End validasi
		
		$data = array( 'mainmenu'	=> $mainmenu);
		$data['title']=  $this->title;
		$this->template->load('template', $this->folder.'/edit',$data);
		// masuk database
		}else{
			$i = $this->input;
			$data = array( 	'nama_mainmenu'			=> 	$i->post('nama_mainmenu'),
							'icon'					=>	$i->post('icon'),
							'aktif'					=>	$i->post('aktif'),
							'link'					=>	$i->post('link'),
							'level'					=> $i->post('level'));
			$this->mainmenu_model->edit($data,$id_mainmenu);
			$this->session->set_flashdata('sukses','Main Menu telah diedit');
			redirect(base_url('admin/mainmenu'));
		}
	}
	
	// Delete User
	public function delete($id_mainmenu) {
		$data = array('id_mainmenu'=> $id_mainmenu);
		$this->mainmenu_model->delete($data);
		$this->session->set_flashdata('sukses','Data Main Menu telah dihapus');
		redirect (base_url('admin/mainmenu'));
	}
}