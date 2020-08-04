<?php
class dosen extends CI_Controller{
    
    var $folder =   "dosen";
    var $tables =   "t_rekap_master";
    var $pk     =   "NIP";
    var $title  =   "Dosen Pengajar";
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
		
		$nip          =  $this->session->userdata('nip');
		$kd_unit      =  $this->session->userdata('kd_unit');
		
		$query  	  =  "SELECT * FROM t_rekap_master WHERE kd_unit=$kd_unit AND jabatan='Dosen' Order by NAMA";
	
        $data['record']=  $this->db->query($query)->result();
        $data['title']=  $this->title;
        $this->template->load('template', $this->folder.'/view',$data);   

    }
	
	function post()
    {
        if(isset($_POST['submit']))
        {
			$nipbaru  =  $this->uri->segment(3);
			$NIP  =  $this->uri->segment(4);
			
            $nm = $this->input->post('nipbaru');
			$result = array();
			foreach($nm AS $key => $val)
			{
			$result[] = array
				(
					
					"nipbaru"  			=> $_POST['nipbaru'][$key],
					"mata_pelajaran"  	=> $_POST['mata_pelajaran'][$key],
					"tanggal_mulai"  	=> $_POST['tanggal_mulai'][$key],
					"tanggal_selesai"  	=> $_POST['tanggal_selesai'][$key],
					"NIP"  				=> $_POST['NIP'],
					"NAMA"  			=> $_POST['NAMA'],
					"NAMAGELAR"			=> $_POST['NAMAGELAR'],
					"KD_UNITKERJA"  	=> $_POST['KD_UNITKERJA'],
					"kd_unit"  			=> $_POST['kd_unit'],
					"UNITKERJA"  		=> $_POST['UNITKERJA'],
					"UNITKERJA_SING"  	=> $_POST['UNITKERJA_SING'],
					"no_ktp"  			=> $_POST['no_ktp'],
					"longitude"  		=> $_POST['longitude'],
					"latitude"  		=> $_POST['latitude'],
					'post_time'			=> date('Y-m-d')	
				);
			}    
			$test= $this->db->insert_batch('personal_dosen', $result); 
			
			$nipbaru  =  $this->uri->segment(3);
			$NIP  =  $this->uri->segment(4);
		
			redirect('dosen');
		
        }
        else
        {
			$nipbaru  	=  $this->uri->segment(3);
			$NIP  	=  $this->uri->segment(4);
				
			$query  =  "SELECT TR.NIP,TR.nipbaru,TR.NAMA,TR.UNITKERJA_SING,TR.NAMAGELAR,TR.KD_UNITKERJA,TR.kd_unit, TR.UNITKERJA,
						 PEG.nip, PEG.nip_baru,PEG.tempat_lahir, PEG.tgl_lahir,PEG.alamat, PEG.no_ktp
						FROM t_rekap_master as TR, pegawai as PEG
						WHERE TR.nipbaru=PEG.nip_baru AND TR.nipbaru=$nipbaru AND TR.NIP=$NIP ";
	
					
        $data['record']=  $this->db->query($query)->result();
		$data['y']         = $this->db->query($query)->row_array();
		$data['nipbaru']          =  $this->uri->segment(4);
        $data['title']=  $this->title;
         $this->template->load('template', $this->folder.'/post',$data);
        }
    }

	
	function data()
    {
       
            $data['title']=  $this->title;
            $data['desc']="";
            $id  =  $this->uri->segment(4);
			$nipbaru  =  $this->uri->segment(3);
            $data['r']   =  $this->mcrud->getByID($this->tables,  $this->pk,$id)->row_array();
            
			//pegawai
			$id          =  $this->uri->segment(3);
            $query_p          =   "SELECT jabatan FROM t_rekap_master";
            $data['peg']      = $this->db->query($query_p)->result_array();
			
			//jabatan
			$id         	 =  $this->uri->segment(3);
			$NIP          	 =  $this->uri->segment(4);
            $jab             =   " SELECT * FROM jabatan WHERE nip = '$NIP' order by tgl_sk desc";
            $data['j']         = $this->db->query($jab)->result_array();
			
			//dikmum
			$id         	 =  $this->uri->segment(3);
			$NIP          	 =  $this->uri->segment(4);
            $query          =   " SELECT * FROM dikumum as dk,mst_tk_ijasah as tk WHERE dk.kd_tk_ijasah =tk.kd_tk_ijasah AND dk.nip = '$NIP' and dk.kd_tk_ijasah > 0 order by dk.tahun desc";
            $data['p']         = $this->db->query($query)->result_array();
			
            //dikstruk
			$id         	 =  $this->uri->segment(3);
			$NIP          	 =  $this->uri->segment(4);
            $struk           =   " SELECT * FROM dikstru as dk,mst_dikstru as tk WHERE dk.kd_dikstru =tk.kd_dikstru AND dk.nip = '$id' and dk.validator > 0 order by dk.tahun desc";
            $data['s']         = $this->db->query($struk)->result_array();

			//fungsional
			$id         	 =  $this->uri->segment(3);
			$NIP          	 =  $this->uri->segment(4);
			$fungsional		=  " SELECT * FROM dikfung WHERE nip = '$NIP' and validator > 0 order by tahun desc";
			$data['record']=  $this->db->query($fungsional)->result();
			
			//dikjang
			$id         	 =  $this->uri->segment(3);
			$NIP          	 =  $this->uri->segment(4);
            $penunjang       =   " SELECT * FROM dikjang WHERE nip = '$NIP' and validator > 0 order by tahun desc";
            $data['record']		=  $this->db->query($penunjang)->result_array();
			
			//Mata Kuliah
			$id         	 =  $this->uri->segment(3);
			$NIP          	 =  $this->uri->segment(4);
            $ajar            =   " SELECT * FROM personal_dosen WHERE nipbaru = '$id' order by id_personal_dosen";
            $data['a']       = $this->db->query($ajar)->result_array();
			
			//Magang
			$id         	 =  $this->uri->segment(3);
			$NIP          	 =  $this->uri->segment(4);
            $mg            =   " SELECT * FROM magang WHERE nip = '$id' order by tgl_selesai";
            $data['m']       = $this->db->query($mg)->result_array();
		
            $this->template->load('template', $this->folder.'/data',$data);
       
    }	

}
