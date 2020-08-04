<?php
class pengajar extends CI_Controller{
    
    var $folder =   "pengajar";
    var $tables =   "t_rekap_master";
    var $pk     =   "NIP";
    var $title  =   "Dosen/Guru";
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
		
		//$nipbaru  		=  $this->uri->segment(4);
		//$id  			=  $this->uri->segment(5);
		$nip          =  $this->session->userdata('nip');
		$kd_unit          =  $this->session->userdata('kd_unit');
		
		$query  	  =  "SELECT * FROM t_rekap_master WHERE jabatan='Dosen' OR jabatan='Guru' Order by kd_unit ASC";
	
        $data['record']=  $this->db->query($query)->result();
        $data['title']=  $this->title;
        $this->template->load('template', $this->folder.'/view',$data);   

    }

}
