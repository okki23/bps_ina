<?php
class pendidikan_siswa extends CI_Controller{
    
    var $folder =   "pendidikan_siswa";
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
		
		$query  =  "SELECT * FROM pendidikan_siswa WHERE tahun like '$tahun' AND kd_unit='$kd_unit' ORDER BY id_pendidikan_siswa ";
	
        $data['record']=  $this->db->query($query)->result();
        $data['title']=  $this->title;
        $this->template->load('template', $this->folder.'/view',$data);   

    }
	
	function post()
    {
        if(isset($_POST['submit']))
        {
           
            $tahun 					=   $this->input->post('tahun');
            $NIM 					=   $this->input->post('NIM');
            $nama 					=   $this->input->post('nama');
            $nama_prodi				=   $this->input->post('nama_prodi');
            $strata					=   $this->input->post('strata');
            $jenis_kelas			=   $this->input->post('jenis_kelas');
            $jenjang_kelas			=   $this->input->post('jenjang_kelas');
            $jenis_pembayaran		=   $this->input->post('jenis_pembayaran');
          
             
            $data   =   array(	'UNITKERJA_SING'=> $this->session->userdata('UNITKERJA_SING'),'kd_unit'	=> $this->session->userdata('kd_unit'),
								'tahun'=>$tahun,'nama'=>$nama,'NIM'=>$NIM,'nama_prodi'=>$nama_prodi,'strata'=>$strata,'jenis_kelas'=>$jenis_kelas,
								'jenjang_kelas'=>$jenjang_kelas,'jenis_pembayaran'=>$jenis_pembayaran,'post_time'=> date('Y-m-d'),'inputer'	=> $this->session->userdata('nip') );
           
            $this->db->insert($this->tables,$data);
            redirect($this->uri->segment(1));
        }
        else
        {
			//Prodi
			$kd_unit          	=  $this->session->userdata('kd_unit');
			$query = "SELECT nama_prodi FROM prodi where kd_unit = $kd_unit";
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
            $tahun 					=   $this->input->post('tahun');
            $NIM 					=   $this->input->post('NIM');
            $nama 					=   $this->input->post('nama');
            $nama_prodi				=   $this->input->post('nama_prodi');
            $strata					=   $this->input->post('strata');
            $jenis_kelas			=   $this->input->post('jenis_kelas');
            $jenjang_kelas			=   $this->input->post('jenjang_kelas');
            $jenis_pembayaran		=   $this->input->post('jenis_pembayaran');
          
  
            $id 	 				= 	$this->input->post('id');
            $data   =   array(	'UNITKERJA_SING'=> $this->session->userdata('UNITKERJA_SING'),'kd_unit'	=> $this->session->userdata('kd_unit'),
								'tahun'=>$tahun,'nama'=>$nama,'NIM'=>$NIM,'nama_prodi'=>$nama_prodi,'strata'=>$strata,'jenis_kelas'=>$jenis_kelas,
								'jenjang_kelas'=>$jenjang_kelas,'jenis_pembayaran'=>$jenis_pembayaran,'post_time'=> date('Y-m-d'),'inputer'	=> $this->session->userdata('nip') );
            $this->mcrud->update($this->tables,$data, $this->pk,$id);
            redirect($this->uri->segment(1));
			
        }
        else
        {
			//Prodi
			$kd_unit          	=  $this->session->userdata('kd_unit');
			$query = "SELECT nama_prodi FROM prodi where kd_unit = $kd_unit";
			$data['record3']=  $this->db->query($query)->result_array();
			
			//Strata
			$query = "SELECT keterangan FROM mst_strata_pendidikan";
			$data['record4']=  $this->db->query($query)->result_array();
			
			//Jenis Kelas
			$query = "SELECT keterangan FROM mst_jenis_kelas";
			$data['record5']=  $this->db->query($query)->result_array();
			
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
