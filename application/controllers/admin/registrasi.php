<?php
class registrasi extends CI_Controller{
    
    var $folder =   "admin/registrasi";
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
		
		$query  =  "SELECT * FROM registrasi WHERE tahun_pendaftaran like '$tahun_pendaftaran' ORDER BY id_registrasi ";
	
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
            $kode_pos					=   $this->input->post('kode_pos');
            $agama					=   $this->input->post('agama');
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
												'agama'=>$agama,
												'asal_sekolah'=>$asal_sekolah,
												'kota_asal_sekolah'=>$kota_asal_sekolah,
												'status_pendaftaran'=>$status_pendaftaran,
												'tahun_pendaftaran'=>$tahun_pendaftaran,
												
												'post_time'=> date('Y-m-d'),
												'inputer'	=> $this->session->userdata('nip') );
           
            $this->db->insert($this->tables,$data);
            redirect('admin/registrasi');
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
			
            $UNITKERJA_SING 		=   $this->input->post('UNITKERJA_SING');
            $kd_unit 				=   $this->input->post('kd_unit');
            $nama_siswa 			=   $this->input->post('nama_siswa');
            $jenis_kelamin			=   $this->input->post('jenis_kelamin');
            $NIK					=   $this->input->post('NIK');
            $tempat_lahir			=   $this->input->post('tempat_lahir');
            $tanggal_lahir			=   $this->input->post('tanggal_lahir');
            $alamat					=   $this->input->post('alamat');
            $kode_pos					=   $this->input->post('kode_pos');
			$agama					=   $this->input->post('agama');
            $asal_sekolah			=   $this->input->post('asal_sekolah');
            $kota_asal_sekolah		=   $this->input->post('kota_asal_sekolah');
            $status_pendaftaran		=   $this->input->post('status_pendaftaran');
            $tahun_pendaftaran		=   $this->input->post('tahun_pendaftaran');
  
            $id 	 				= 	$this->input->post('id');
            $data   				=   array(	'nama_siswa'=>$nama_siswa,
												'UNITKERJA_SING'=>$UNITKERJA_SING,
												'kd_unit'=>$kd_unit,
												'jenis_kelamin'=>$jenis_kelamin,
												'NIK'=>$NIK,
												'tempat_lahir'=>$tempat_lahir,
												'tanggal_lahir'=>$tanggal_lahir,
												'alamat'=>$alamat,
												'kode_pos'=>$kode_pos,
												'agama'=>$agama,
												'asal_sekolah'=>$asal_sekolah,
												'kota_asal_sekolah'=>$kota_asal_sekolah,
												'status_pendaftaran'=>$status_pendaftaran,
												'tahun_pendaftaran'=>$tahun_pendaftaran,
												'post_time'=> date('Y-m-d'),
												'inputer'	=> $this->session->userdata('nip') );
            $this->mcrud->update($this->tables,$data, $this->pk,$id);
            redirect('admin/registrasi');
			
        }
        else
        {
			//UNIT KERJA
			$query = "SELECT UNITKERJA_SING FROM users";
			$data['record3']=  $this->db->query($query)->result_array();
			
			//KODE UNIT
			$query = "SELECT UNITKERJA_SING,kd_unit FROM users";
			$data['record4']=  $this->db->query($query)->result_array();
			
            $data['title']=  $this->title;
            $id          =  $this->uri->segment(4);
            $data['r']   =  $this->mcrud->getByID($this->tables,  $this->pk,$id)->row_array();
			
            $this->template->load('template', $this->folder.'/edit',$data);
        }
    }
	
	
	function edit_siswa()
    {
        if(isset($_POST['submit']))
        {
            $nama_siswa 			=   $this->input->post('nama_siswa');
            $jenis_kelamin			=   $this->input->post('jenis_kelamin');
            $NIK					=   $this->input->post('NIK');
            $NIM					=   $this->input->post('NIM');
            $tempat_lahir			=   $this->input->post('tempat_lahir');
            $tanggal_lahir			=   $this->input->post('tanggal_lahir');
            $alamat					=   $this->input->post('alamat');
            $kode_pos					=   $this->input->post('kode_pos');
			$agama					=   $this->input->post('agama');
            $asal_sekolah			=   $this->input->post('asal_sekolah');
            $kota_asal_sekolah		=   $this->input->post('kota_asal_sekolah');
          
            $tahun_pendaftaran		=   $this->input->post('tahun_pendaftaran');
  
            $id 	 				= 	$this->input->post('id');
            $data   				=   array(	'nama_siswa'=>$nama_siswa,
												'jenis_kelamin'=>$jenis_kelamin,
												'NIK'=>$NIK,
												'NIM'=>$NIM,
												'tempat_lahir'=>$tempat_lahir,
												'tanggal_lahir'=>$tanggal_lahir,
												'alamat'=>$alamat,
												'kode_pos'=>$kode_pos,
												'agama'=>$agama,
												'asal_sekolah'=>$asal_sekolah,
												'kota_asal_sekolah'=>$kota_asal_sekolah,
												
												'tahun_pendaftaran'=>$tahun_pendaftaran,
												'post_time'=> date('Y-m-d'),
												'inputer'	=> $this->session->userdata('nip') );
            $this->mcrud->update($this->tables,$data, $this->pk,$id);
            redirect('admin/personal_siswa');	
			
        }
        else
        {
            $data['title']=  $this->title;
            $id          =  $this->uri->segment(4);
            $data['r']   =  $this->mcrud->getByID($this->tables,  $this->pk,$id)->row_array();
			
            $this->template->load('template', $this->folder.'/edit_siswa',$data);
        }
    }
	
    function delete()
    {
        $id     =  $this->uri->segment(4);
        $chekid = $this->db->get_where($this->tables,array($this->pk=>$id));
        if($chekid->num_rows()>0)
        {
            $this->mcrud->delete($this->tables,  $this->pk,  $this->uri->segment(4));
        }
        redirect('admin/registrasi');
    }
	
	
	function profil()
    {
       
            $data['title']=  $this->title;
            $data['desc']="";
            $id  =  $this->uri->segment(4);
            $data['r']   =  $this->mcrud->getByID($this->tables,  $this->pk,$id)->row_array();
            
	
            $this->template->load('template', $this->folder.'/profil',$data);
       
    }	
	
}
