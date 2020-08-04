<?php
class pendidikan_siswa extends CI_Controller{
    
    var $folder =   "admin/pendidikan_siswa";
    var $tables =   "pendidikan_siswa";
    var $pk     =   "id_pendidikan_siswa";
    var $title  =   "Data Pendidikan Siswa";
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
       if(isset($_POST['submit']))
        {
            $data['tahun'] =  $this->input->post('tahun');
        }
        else
        {
            $data['tahun']="";
        }
        $tahun 		=  $data['tahun'];
		
		$nip          		=  $this->session->userdata('nip');
		$UNITKERJA_SING     =  $this->session->userdata('UNITKERJA_SING');
		$kd_unit          	=  $this->session->userdata('kd_unit');
		
		$query  =  "SELECT * FROM pendidikan_siswa WHERE tahun like '$tahun'  ORDER BY id_pendidikan_siswa ";
	
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
            $tahun 					=   $this->input->post('tahun');
            $NIM 					=   $this->input->post('NIM');
            $nama 					=   $this->input->post('nama');
            $nama_prodi				=   $this->input->post('nama_prodi');
            $strata					=   $this->input->post('strata');
            $jenis_kelas			=   $this->input->post('jenis_kelas');
            $jenjang_kelas			=   $this->input->post('jenjang_kelas');
            $jenis_pembayaran		=   $this->input->post('jenis_pembayaran');
          
             
            $data   =   array(	'UNITKERJA_SING'=>$UNITKERJA_SING,'kd_unit'	=> $kd_unit,
								'tahun'=>$tahun,'nama'=>$nama,'NIM'=>$NIM,'nama_prodi'=>$nama_prodi,'strata'=>$strata,'jenis_kelas'=>$jenis_kelas,
								'jenjang_kelas'=>$jenjang_kelas,'jenis_pembayaran'=>$jenis_pembayaran,'post_time'=> date('Y-m-d'),'inputer'	=> $this->session->userdata('nip') );
           
            $this->db->insert($this->tables,$data);
            redirect('admin/pendidikan_siswa');
        }
        else
        {
			//Prodi
			//$kd_unit          	=  $this->session->userdata('kd_unit');
			$query = "SELECT nama_prodi FROM prodi ";
			$data['record3']=  $this->db->query($query)->result_array();
			
			//Strata
			$query = "SELECT keterangan FROM mst_strata_pendidikan";
			$data['record4']=  $this->db->query($query)->result_array();
			
			//Jenis Kelas
			$query = "SELECT keterangan FROM mst_jenis_kelas";
			$data['record5']=  $this->db->query($query)->result_array();
			
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
            $tahun 					=   $this->input->post('tahun');
            $NIM 					=   $this->input->post('NIM');
            $nama 					=   $this->input->post('nama');
            $nama_prodi				=   $this->input->post('nama_prodi');
            $strata					=   $this->input->post('strata');
            $jenis_kelas			=   $this->input->post('jenis_kelas');
            $jenjang_kelas			=   $this->input->post('jenjang_kelas');
            $jenis_pembayaran		=   $this->input->post('jenis_pembayaran');
          
  
            $id 	 				= 	$this->input->post('id');
            $data   =   array(	'UNITKERJA_SING'=>$UNITKERJA_SING,'kd_unit'	=> $kd_unit,
								'tahun'=>$tahun,'nama'=>$nama,'NIM'=>$NIM,'nama_prodi'=>$nama_prodi,'strata'=>$strata,'jenis_kelas'=>$jenis_kelas,
								'jenjang_kelas'=>$jenjang_kelas,'jenis_pembayaran'=>$jenis_pembayaran,'post_time'=> date('Y-m-d'),'inputer'	=> $this->session->userdata('nip') );
            $this->mcrud->update($this->tables,$data, $this->pk,$id);
            redirect('admin/pendidikan_siswa');
			
        }
        else
        {	
			//UNIT KERJA
			$query = "SELECT UNITKERJA_SING FROM users";
			$data['record10']=  $this->db->query($query)->result_array();
			
			//KODE UNIT
			$query = "SELECT UNITKERJA_SING,kd_unit FROM users";
			$data['record11']=  $this->db->query($query)->result_array();
			
			//Prodi
			$kd_unit          	=  $this->session->userdata('kd_unit');
			$query = "SELECT nama_prodi FROM prodi ";
			$data['record3']=  $this->db->query($query)->result_array();
			
			//Strata
			$query = "SELECT keterangan FROM mst_strata_pendidikan";
			$data['record4']=  $this->db->query($query)->result_array();
			
			//Jenis Kelas
			$query = "SELECT keterangan FROM mst_jenis_kelas";
			$data['record5']=  $this->db->query($query)->result_array();
			
            $data['title']=  $this->title;
            $id          =  $this->uri->segment(4);
            $data['r']   =  $this->mcrud->getByID($this->tables,  $this->pk,$id)->row_array();
			
            $this->template->load('template', $this->folder.'/edit',$data);
        }
    }

    function delete()
    {
        $id     =  $this->uri->segment(4);
        $chekid = $this->db->get_where($this->tables,array($this->pk=>$id));
        if($chekid->num_rows()>0)
        {
            $this->mcrud->delete($this->tables,  $this->pk,  $this->uri->segment(3));
        }
         redirect('admin/pendidikan_siswa');
    }
	
}
