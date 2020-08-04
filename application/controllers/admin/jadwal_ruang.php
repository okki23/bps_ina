<?php
class jadwal_ruang extends CI_Controller{
    
    var $folder =   "admin/jadwal_ruang";
    var $tables =   "ruang_rapat";
    var $pk     =   "id_ruangan";
    var $title  =   "Jadwal Peminjaman Ruang Rapat dan Ruang Penginapan";
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
      
		$nip          		=  $this->session->userdata('nip');
		
		$query  =  "SELECT * FROM ruang_rapat  ORDER BY id_ruangan ";
	
        $data['record']=  $this->db->query($query)->result();
        $data['title']=  $this->title;
        $this->load->view($this->folder.'/view',$data);

    }
}
