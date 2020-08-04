<?php
class pegawai extends CI_Controller{
    
    var $folder =   "admin/pegawai";
    var $tables =   "t_rekap_master";
    var $pk     =   "NIP";
    var $title  =   "Pegawai";
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
    
		$nip          =  $this->session->userdata('nip');
		$query  	  =  "SELECT * FROM t_rekap_master WHERE kd_unit LIKE '%9690%' Order by kd_unit ASC";
	
        $data['record']=  $this->db->query($query)->result();
        $data['title']=  $this->title;
        $this->template->load('template', $this->folder.'/view',$data);   

    }
	function profile()
    {
       
            $data['title']=  $this->title;
            $data['desc']="";
            $id  =  $this->uri->segment(5);
			$nipbaru  =  $this->uri->segment(4);
            $data['r']   =  $this->mcrud->getByID($this->tables,  $this->pk,$id)->row_array();
            
      			
			//pegawai
			$id          =  $this->uri->segment(3);
            $query_p          =   "SELECT jabatan FROM t_rekap_master";
            $data['peg']      = $this->db->query($query_p)->result_array();
			
			
			//jabatan
			$id  =  $this->uri->segment(5);
			$nipbaru  =  $this->uri->segment(4);
            $jab             =   " SELECT * FROM jabatan WHERE nip =$id order by tgl_sk desc";
            $data['j']         = $this->db->query($jab)->result_array();
			
			//dikmum
            $query          =   " SELECT * FROM dikumum as dk,mst_tk_ijasah as tk WHERE dk.kd_tk_ijasah =tk.kd_tk_ijasah AND dk.nip = '$id' and dk.kd_tk_ijasah > 0 order by dk.tahun desc";
            $data['p']         = $this->db->query($query)->result_array();
			

            //dikstruk
            $struk          =   " SELECT * FROM dikstru as dk,mst_dikstru as tk WHERE dk.kd_dikstru =tk.kd_dikstru AND dk.nip = '$id' and dk.validator > 0 order by dk.tahun desc";
            $data['s']         = $this->db->query($struk)->result_array();

			$fungsional		=  " SELECT * FROM dikfung WHERE nip = '$id' and validator > 0 order by tahun desc";
			$data['record']=  $this->db->query($fungsional)->result();

            //dikjang
            $jang             =   " SELECT * FROM dikjang WHERE nip = '$id' and validator > 0 order by tahun desc";
           $data['record']=  $this->db->query($jang)->result();

            
        
            $this->template->load('template', $this->folder.'/profile',$data);
       
    }
	
	function dp3()
   
    {
       
        {
             error_reporting(0);
            if($this->uri->segment(4)>0)
                {
                    $data['id_assesment'] =  $this->uri->segment(4);
                           }
                else
                {
                    $data['id_assesment']="";
                }
                    $id_assesment =  $data['id_assesment'];

            $data['title']=  $this->title;
            $data['desc']="";
            $id          =  $this->uri->segment(3);
            $data['r']   =  $this->mcrud->getByID($this->tables,  $this->pk,$id)->row_array();
            
            
            //prestasi
		    date_default_timezone_set('Asia/Jakarta');
            $year   = date('Y')-1;
                                          
            $jang               =   " SELECT * FROM skp  WHERE nip = '$id' and tahun = '$year' ORDER BY id_skp DESC LIMIT 1 ";

            $peri               =   " SELECT * FROM skp_perilaku as pr , mst_perilaku as mpr WHERE pr.id_perilaku = mpr.id_perilaku AND pr.nip = '$id' AND pr.tahun = '$year' "; 
            $rek               =   " SELECT * FROM skp_rekap WHERE nip = '$id' AND tahun = '$year' ";                            
                                                               
            $data['y']          = $this->db->query($jang)->result_array();
            $data['pri']          = $this->db->query($peri)->result_array();
            $data['avgpri']          = $this->db->query($rek)->row_array();
             $this->template->load('template', $this->folder.'/dp3',$data);



        }
    }
	
    
 
}
