<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submenu extends CI_Controller 
{
	
	var $folder =   "admin/submenu";
    var $tables =   "submenu";
    var $pk     =   "id_submenu";
    var $title  =   "Sub Menu";
	
	// Load database
	
	public function __construct() {
		parent::__construct();
		$this->load->model('submenu_model');
		$this->load->model('mainmenu_model');
	}
	
	// Index
	public function index() 
	{
		$submenu = $this->submenu_model->listing();
		$data = array('submenu'	=> $submenu);
		$data['title']=  $this->title;
		$this->template->load('template', $this->folder.'/list',$data);
	}
	
	
	// Tambah
	public function tambah() {
		$mainmenu	= $this->mainmenu_model->listing();
		
		// Validasi
		$valid = $this->form_validation;
		
		$valid->set_rules('id_mainmenu','Main Menu','required', array( 'required' => 'Main Menu harus diisi'));	
		$valid->set_rules('nama_submenu','Nama Sub Menu','required', array( 'required' => 'Nama Sub Menu harus di isi'));		
		
		$valid->set_rules('link','Link','required|is_unique[submenu.link]',
		array( 	'required' 	=> 'Link harus diisi',
				'is_unique'	=> 'Link: <strong>'.$this->input->post('link').
							   '</strong> sudah digunakan. Buat Link baru!'));
							   
		$valid->set_rules('aktif','Status','required', array( 'required' => 'Status harus diisi'));
	
		$valid->set_rules('icon','ICON','required', array( 'required' => 'ICON harus diisi'));
	 
		$valid->set_rules('level','Akses Level','required', array( 'required' => 'Akses Level harus diisi'));					   
					
		if($valid->run()===FALSE) {
		// End validasi
		
		$data = array(	'mainmenu'	=> $mainmenu );
		$data['title']=  $this->title;
		$this->template->load('template', $this->folder.'/tambah',$data);
		// masuk database
		}else{
			$i = $this->input;
			$data = array( 	'nama_submenu'			=> 	$i->post('nama_submenu'),
							'id_mainmenu'			=>	$i->post('id_mainmenu'),
							'icon'					=>	$i->post('icon'),
							'aktif'					=>	$i->post('aktif'),
							'link'					=>	$i->post('link'),
							'level'					=> $i->post('level'));
			$this->submenu_model->tambah($data);
			$this->session->set_flashdata('sukses','Sub Menu telah ditambah');
			
			$data = array('mainmenu'=> $mainmenu,);
			
			$data['title']=  $this->title;
			redirect(base_url('admin/submenu'));
		}
	}
	
	public function edit($id_submenu) {
		$submenu = $this->submenu_model->detail($id_submenu);
		$mainmenu	= $this->mainmenu_model->listing();
		
		$valid = $this->form_validation;
		$valid->set_rules('id_mainmenu','Main Menu','required', array( 'required' => 'Main Menu harus diisi'));	
		$valid->set_rules('nama_submenu','Nama Sub Menu','required', array( 'required' => 'Nama Sub Menu harus diisi'));
		$valid->set_rules('icon','ICON','required', array( 'required' => 'ICON harus diisi'));
		$valid->set_rules('aktif','Status','required', array( 'required' => 'Status harus diisi'));
		$valid->set_rules('link','Link','required', array( 'required' => 'Link harus diisi'));
		$valid->set_rules('level','Level','required', array( 'required' => 'Level harus diisi'));
		
				
		if($valid->run()===FALSE) {
		// End validasi
		
		
		$data = array( 'submenu'	=> $submenu, 'mainmenu'	=> $mainmenu);
		$data['title']=  $this->title;
		$this->template->load('template', $this->folder.'/edit',$data);
		// masuk database
		}else{
			$i = $this->input;
			$data = array( 	'id_mainmenu'			=> 	$i->post('id_mainmenu'),
							'nama_submenu'			=>	$i->post('nama_submenu'),
							'icon'					=>	$i->post('icon'),
							'aktif'					=>	$i->post('aktif'),
							'link'					=>	$i->post('link'),
							'level'					=> $i->post('level'));
			$this->submenu_model->edit($data,$id_submenu);
			$this->session->set_flashdata('sukses','Sub Menu telah diedit');
			redirect(base_url('admin/submenu'));
		}
	}
	
	// Delete User
	public function delete($id_submenu) {
		$data = array('id_submenu'=> $id_submenu);
		$this->submenu_model->delete($data);
		$this->session->set_flashdata('sukses','Data Sub Menu telah dihapus');
		redirect (base_url('admin/submenu'));
	}
}