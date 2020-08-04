<?php
class magang_siswa extends CI_Controller{
    
    var $folder =   "magang_siswa";
    var $tables =   "magang_siswa";
    var $pk     =   "id_magang_siswa";
    var $title  =   "Pengalaman Magang";
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
		$UNITKERJA_SING     =  $this->session->userdata('UNITKERJA_SING');
		$kd_unit          	=  $this->session->userdata('kd_unit');
		
		$query 		 	  	=  "SELECT * FROM magang_siswa WHERE kd_unit='$kd_unit' AND UNITKERJA_SING='$UNITKERJA_SING' Order by 			tgl_selesai";
	
        $data['record']=  $this->db->query($query)->result();
        $data['title']=  $this->title;
        $this->template->load('template', $this->folder.'/view',$data);
    }
	
	
	function post()
    {
        if(isset($_POST['submit']))
        {
			
            $nama 						=   $this->input->post('nama');
            $NIS						=   $this->input->post('NIS');
            $perusahaan					=   $this->input->post('perusahaan');
            $bidang						=   $this->input->post('bidang');
            $lokasi						=   $this->input->post('lokasi');
            $tgl_mulai					=   $this->input->post('tgl_mulai');
            $tgl_selesai				=   $this->input->post('tgl_selesai');
            $no_sertifikat				=   $this->input->post('no_sertifikat');
            
        
            $data   			=   array(	'nama'=>$nama,
											'NIS'=>$NIS,
											'perusahaan'=>$perusahaan,
											'bidang'=>$bidang,
											'lokasi'=>$lokasi,
											'tgl_mulai'=>$tgl_mulai,
											'tgl_selesai'=>$tgl_selesai,
											'no_sertifikat'=>$no_sertifikat,
											'kd_unit'=> $this->session->userdata('kd_unit'),
											'UNITKERJA_SING'=> $this->session->userdata('UNITKERJA_SING')
											);
           
            $this->db->insert($this->tables,$data);
            redirect($this->uri->segment(1));
        }
        else
        {
            $data['title']=  $this->title;
            $this->template->load('template', $this->folder.'/post',$data);
        }
    }
	
	function edit()
    {
        if(isset($_POST['submit']))
        {
            $nama 						=   $this->input->post('nama');
            $NIS						=   $this->input->post('NIS');
            $perusahaan					=   $this->input->post('perusahaan');
            $bidang						=   $this->input->post('bidang');
            $lokasi						=   $this->input->post('lokasi');
            $tgl_mulai					=   $this->input->post('tgl_mulai');
            $tgl_selesai				=   $this->input->post('tgl_selesai');
            $no_sertifikat				=   $this->input->post('no_sertifikat');
            
           
            $id     		= $this->input->post('id');
            $data   		= array('nama'=>$nama,
									'NIS'=>$NIS,
									'perusahaan'=>$perusahaan,
									'bidang'=>$bidang,
									'lokasi'=>$lokasi,
									'tgl_mulai'=>$tgl_mulai,
									'tgl_selesai'=>$tgl_selesai,
									'no_sertifikat'=>$no_sertifikat
									
									);
            $this->mcrud->update($this->tables,$data, $this->pk,$id);
            redirect('magang_siswa');	
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
        redirect('magang_siswa');	
    }


}
