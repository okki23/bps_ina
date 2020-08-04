<?php
class magang extends CI_Controller{
    
    var $folder =   "magang";
    var $tables =   "magang";
    var $pk     =   "id_magang";
    var $title  =   "Pengalaman Magang";
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
		
		$nip  	=  $this->uri->segment(3);
			$NIP  	=  $this->uri->segment(4);
		
		$query  	  =  "SELECT * FROM magang WHERE nip='$nip' Order by tgl_selesai";
	
        $data['record']=  $this->db->query($query)->result();
        $data['title']=  $this->title;
        $this->template->load('template', $this->folder.'/view',$data);
    }
	
	
	function post()
    {
        if(isset($_POST['submit']))
        {
            $nip 				 =   $this->input->post('nip');
			$nama 				 =   $this->input->post('nama');
			$kd_unit 			 =   $this->input->post('kd_unit');
			$bidang 			 =   $this->input->post('bidang');
			$perusahaan 		=   $this->input->post('perusahaan');
			$lokasi 			 =   $this->input->post('lokasi');
			$tgl_mulai 			 =   $this->input->post('tgl_mulai');
			$tgl_selesai 		=   $this->input->post('tgl_selesai');
			$no_sertifikat 		=   $this->input->post('no_sertifikat');
			
            $data   			=   array('nip'=>$nip,'nama'=>$nama,'kd_unit'=>$kd_unit,
											'bidang'=>$bidang,'perusahaan'=>$perusahaan,'lokasi'=>$lokasi,
											'tgl_mulai'=>$tgl_mulai,'tgl_selesai'=>$tgl_selesai,'no_sertifikat'=>$no_sertifikat
											);
           
            $this->db->insert($this->tables,$data);
			//redirect('magang/index/'.$nip);
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
	
					
			$data['record']		=  $this->db->query($query)->result();
			$data['y']         	= $this->db->query($query)->row_array();
			$data['nipbaru']    =  $this->uri->segment(4);
			$data['title']		=  $this->title;
			$this->template->load('template', $this->folder.'/post',$data);
        }
    }
	
	function edit()
    {
        if(isset($_POST['submit']))
        {
            $nip  				=   $this->input->post('nip');
            $nama 				=   $this->input->post('nama');
            $kd_unit 			=   $this->input->post('kd_unit');
            $perusahaan 		=   $this->input->post('perusahaan');
            $bidang 			=   $this->input->post('bidang');
            $lokasi 			=   $this->input->post('lokasi');
            $tgl_mulai 			=   $this->input->post('tgl_mulai');
            $tgl_selesai 			=   $this->input->post('tgl_selesai');
            $no_sertifikat 			=   $this->input->post('no_sertifikat');
            
           
            $id     		= $this->input->post('id');
            $data   		= array('nip'=>$nip,
									'nama'=>$nama,
									'kd_unit'=>$kd_unit,
									'perusahaan'=>$perusahaan,
									'bidang'=>$bidang,
									'lokasi'=>$lokasi,
									'tgl_mulai'=>$tgl_mulai,
									'tgl_selesai'=>$tgl_selesai,
									'no_sertifikat'=>$no_sertifikat,
									'tgl_update'	=> date('Y-m-d')	
									);
            $this->mcrud->update($this->tables,$data, $this->pk,$id);
            redirect('dosen');	
        }
        else
        {
            $data['title']=  $this->title;
            $id          =  $this->uri->segment(3);
            $data['r']   =  $this->mcrud->getByID($this->tables,  $this->pk,$id)->row_array();
            $this->template->load('template', $this->folder.'/edit',$data);
        }
    }
    function delete()
    {
        $id     =  $this->uri->segment(3);
        $chekid = $this->db->get_where($this->tables,array($this->pk=>$id));
        if($chekid->num_rows()>0)
        {
            $this->mcrud->delete($this->tables,  $this->pk,  $this->uri->segment(3));
        }
        redirect('dosen');	
    }


}
