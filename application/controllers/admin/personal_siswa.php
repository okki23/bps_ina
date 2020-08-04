<?php
class personal_siswa extends CI_Controller{
    
    var $folder =   "admin/personal_siswa";
    var $tables =   "registrasi";
    var $pk     =   "id_registrasi";
    var $title  =   "Data Pendaftaran Siswa";
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
       if(isset($_POST['submit']))
        {
            $data['tahun_pendaftaran'] =  $this->input->post('tahun_pendaftaran');
        }
        else
        {
            $data['tahun_pendaftaran']="";
        }
        $tahun_pendaftaran 		=  $data['tahun_pendaftaran'];
		
		$nip          		=  $this->session->userdata('nip');
		$UNITKERJA_SING     =  $this->session->userdata('UNITKERJA_SING');
		$kd_unit          	=  $this->session->userdata('kd_unit');
		
		$query  =  "SELECT * FROM registrasi WHERE tahun_pendaftaran like '$tahun_pendaftaran' AND status_pendaftaran='Lulus' ORDER BY id_registrasi ";
	
        $data['record']=  $this->db->query($query)->result();
        $data['title']=  $this->title;
        $this->template->load('template', $this->folder.'/view',$data);   

    }
	
	function post()
    {
        if(isset($_POST['submit']))
        {
            $UNITKERJA_SING 		=   $this->input->post('UNITKERJA_SING');
            $kd_unit 				=   $this->input->post('kd_unit');
            $nama_siswa 			=   $this->input->post('nama_siswa');
            $jenis_kelamin			=   $this->input->post('jenis_kelamin');
            $NIK					=   $this->input->post('NIK');
            $tempat_lahir			=   $this->input->post('tempat_lahir');
            $tanggal_lahir			=   $this->input->post('tanggal_lahir');
            $alamat					=   $this->input->post('alamat');
            $kode_pos				=   $this->input->post('kode_pos');
            $asal_sekolah			=   $this->input->post('asal_sekolah');
            $kota_asal_sekolah		=   $this->input->post('kota_asal_sekolah');
            $status_pendaftaran		=   $this->input->post('status_pendaftaran');
            $tahun_pendaftaran		=   $this->input->post('tahun_pendaftaran');
           
          
            $data   				=   array('UNITKERJA_SING'=>$UNITKERJA_SING,
												'kd_unit'=>$kd_unit,
												'nama_siswa'=>$nama_siswa,
												'jenis_kelamin'=>$jenis_kelamin,
												'NIK'=>$NIK,
												'tempat_lahir'=>$tempat_lahir,
												'tanggal_lahir'=>$tanggal_lahir,
												'alamat'=>$alamat,
												'kode_pos'=>$kode_pos,
												'asal_sekolah'=>$asal_sekolah,
												'kota_asal_sekolah'=>$kota_asal_sekolah,
												'status_pendaftaran'=>$status_pendaftaran,
												'tahun_pendaftaran'=>$tahun_pendaftaran,
												
												'post_time'=> date('Y-m-d'),
												'inputer'	=> $this->session->userdata('nip') );
           
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
            $nama_siswa 			=   $this->input->post('nama_siswa');
            $jenis_kelamin			=   $this->input->post('jenis_kelamin');
            $NIK					=   $this->input->post('NIK');
            $tempat_lahir			=   $this->input->post('tempat_lahir');
            $tanggal_lahir			=   $this->input->post('tanggal_lahir');
            $alamat					=   $this->input->post('alamat');
            $kode_pos					=   $this->input->post('kode_pos');
            $asal_sekolah			=   $this->input->post('asal_sekolah');
            $kota_asal_sekolah		=   $this->input->post('kota_asal_sekolah');
            $status_pendaftaran		=   $this->input->post('status_pendaftaran');
            $tahun_pendaftaran		=   $this->input->post('tahun_pendaftaran');
  
            $id 	 				= 	$this->input->post('id');
            $data   				=   array(	'nama_siswa'=>$nama_siswa,
												'jenis_kelamin'=>$jenis_kelamin,
												'NIK'=>$NIK,
												'tempat_lahir'=>$tempat_lahir,
												'tanggal_lahir'=>$tanggal_lahir,
												'alamat'=>$alamat,
												'kode_pos'=>$kode_pos,
												'asal_sekolah'=>$asal_sekolah,
												'kota_asal_sekolah'=>$kota_asal_sekolah,
												'status_pendaftaran'=>$status_pendaftaran,
												'tahun_pendaftaran'=>$tahun_pendaftaran,
												'post_time'=> date('Y-m-d'),
												'inputer'	=> $this->session->userdata('nip') );
            $this->mcrud->update($this->tables,$data, $this->pk,$id);
            redirect($this->uri->segment(1));
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
        redirect($this->uri->segment(1));
    }
	
}
