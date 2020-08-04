<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level extends CI_Controller 
{
	
	var $folder =   "admin/level";
    var $tables =   "level";
    var $pk     =   "id_level";
    var $title  =   "Level Akses";
	
	// Load database
	
	public function __construct() {
		parent::__construct();
		$this->load->model('level_model');
	}
	
	public function index() 
	{
		$level = $this->level_model->listing();
		$data = array('level'	=> $level);
		$data['title']=  $this->title;
		$this->template->load('template', $this->folder.'/list',$data);
	}
	
	public function tambah() 
	{
	
		$valid = $this->form_validation;
	
		$valid->set_rules('nama_level','Level Akses','required', array( 'required' => 'Level Akses harus diisi'));
		   	
		if($valid->run()===FALSE) {
		// End validasi
		$data['title']=  $this->title;
		$this->template->load('template', $this->folder.'/tambah',$data);
		// masuk database
		}else{
			$i = $this->input;
			$data = array('nama_level'	=> $i->post('nama_level'));
			$this->level_model->tambah($data);
			$this->session->set_flashdata('sukses','Level Akses telah ditambah');
			redirect(base_url('admin/level'));
		}
	}
	
	public function edit($id_level) 
	{
		$level = $this->level_model->detail($id_level);
		
		$valid = $this->form_validation;
		$valid->set_rules('nama_level','Nama Level Akses','required', array( 'required' => 'Nama Level Akses harus diisi'));
		
		if($valid->run()===FALSE) {
		
		$data = array( 'level'	=> $level);
		$data['title']=  $this->title;
		$this->template->load('template', $this->folder.'/edit',$data);
		
		}else{
			$i = $this->input;
			$data = array('nama_level'=> $i->post ('nama_level'));
			$this->level_model->edit($data,$id_level);
			$this->session->set_flashdata('sukses','Level Akses telah diedit');
			redirect(base_url('admin/level'));
		}
	}
	
	public function delete($id_level) {
		$data = array('id_level'=> $id_level);
		$this->level_model->delete($data);
		$this->session->set_flashdata('sukses','Data Level Akses telah dihapus');
		redirect (base_url('admin/level'));
	}
}