<?php
class serapan_alumni extends CI_Controller{
    
    var $folder =   "admin/serapan_alumni";
    var $tables =   "serapan_alumni";
    var $pk     =   "id_serapan_alumni";
    var $title  =   "Data Serapan Alumni";
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
		
		$query  =  "SELECT * FROM serapan_alumni WHERE tahun like '$tahun' ORDER BY id_serapan_alumni ";
	
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
            $tahun 							=   $this->input->post('tahun');
            $NIM 							=   $this->input->post('NIM');
            $nama 							=   $this->input->post('nama');
            $nama_prodi						=   $this->input->post('nama_prodi');
            $tahun_lulus					=   $this->input->post('tahun_lulus');
            $status_serapan					=   $this->input->post('status_serapan');
            $nama_perusahaan_universitas	=   $this->input->post('nama_perusahaan_universitas');
            $lokasi_perusahaan_universitas	=   $this->input->post('lokasi_perusahaan_universitas');
            $bidang_perusahaan				=   $this->input->post('bidang_perusahaan');
            $tgl_masuk						=   $this->input->post('tgl_masuk');
            $gaji							=   $this->input->post('gaji');
           
         
            $data   =   array(	'UNITKERJA_SING'=> $UNITKERJA_SING,
								'kd_unit'	=> $kd_unit,
								'tahun'=>$tahun,
								'nama'=>$nama,
								'NIM'=>$NIM,
								'nama_prodi'=>$nama_prodi,
								'tahun_lulus'=>$tahun_lulus,
								'status_serapan'=>$status_serapan,
								'nama_perusahaan_universitas'=>$nama_perusahaan_universitas,
								'lokasi_perusahaan_universitas'=>$lokasi_perusahaan_universitas,
								'bidang_perusahaan'=>$bidang_perusahaan,
								'tgl_masuk'=>$tgl_masuk,
								'gaji'=>$gaji,
								'post_time'=> date('Y-m-d'),'inputer'	=> $this->session->userdata('nip') );
           
            $this->db->insert($this->tables,$data);
            redirect('admin/serapan_alumni');
        }
        else
        {
			//Prodi
			$kd_unit          	=  $this->session->userdata('kd_unit');
			$query = "SELECT nama_prodi FROM prodi ";
			$data['record3']=  $this->db->query($query)->result_array();
			
			//Status Serapan Alumni
			$query = "SELECT keterangan FROM mst_status_serapan_alumni";
			$data['record4']=  $this->db->query($query)->result_array();
			
		
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
            $tahun 							=   $this->input->post('tahun');
            $NIM 							=   $this->input->post('NIM');
            $nama 							=   $this->input->post('nama');
            $nama_prodi						=   $this->input->post('nama_prodi');
            $tahun_lulus					=   $this->input->post('tahun_lulus');
            $status_serapan					=   $this->input->post('status_serapan');
            $nama_perusahaan_universitas	=   $this->input->post('nama_perusahaan_universitas');
            $lokasi_perusahaan_universitas	=   $this->input->post('lokasi_perusahaan_universitas');
            $bidang_perusahaan				=   $this->input->post('bidang_perusahaan');
            $tgl_masuk						=   $this->input->post('tgl_masuk');
            $gaji							=   $this->input->post('gaji');
          
  
            $id 	 				= 	$this->input->post('id');
			$data   =   array(	'UNITKERJA_SING'=> $UNITKERJA_SING,
								'kd_unit'	=> $kd_unit,
								'tahun'=>$tahun,
								'nama'=>$nama,
								'NIM'=>$NIM,
								'nama_prodi'=>$nama_prodi,
								'tahun_lulus'=>$tahun_lulus,
								'status_serapan'=>$status_serapan,
								'nama_perusahaan_universitas'=>$nama_perusahaan_universitas,
								'lokasi_perusahaan_universitas'=>$lokasi_perusahaan_universitas,
								'bidang_perusahaan'=>$bidang_perusahaan,
								'tgl_masuk'=>$tgl_masuk,
								'gaji'=>$gaji,
								'post_time'=> date('Y-m-d'),'inputer'	=> $this->session->userdata('nip') );
            $this->mcrud->update($this->tables,$data, $this->pk,$id);
            redirect('admin/serapan_alumni');
			
        }
        else
        {
			//UNIT KERJA
			$query = "SELECT UNITKERJA_SING FROM users";
			$data['record6']=  $this->db->query($query)->result_array();
			
			//KODE UNIT
			$query = "SELECT UNITKERJA_SING,kd_unit FROM users";
			$data['record7']=  $this->db->query($query)->result_array();
			
			//Prodi
			$kd_unit          	=  $this->session->userdata('kd_unit');
			$query = "SELECT nama_prodi FROM prodi ";
			$data['record3']=  $this->db->query($query)->result_array();
			
			//Status Serapan Alumni
			$query = "SELECT keterangan FROM mst_status_serapan_alumni";
			$data['record4']=  $this->db->query($query)->result_array();
			
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
            $this->mcrud->delete($this->tables,  $this->pk,  $this->uri->segment(4));
        }
        redirect('admin/serapan_alumni');
    }
	
}
