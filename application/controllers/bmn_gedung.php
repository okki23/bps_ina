<?php
class bmn_gedung extends CI_Controller{
    
    var $folder =   "bmn_gedung";
    var $tables =   "bmn_gedung";
    var $pk     =   "id_bmn_gedung";
    var $title  =   "BMN Gedung";
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
      
		$nip          		=  $this->session->userdata('nip');
		$UNITKERJA_SING     =  $this->session->userdata('UNITKERJA_SING');
		$kd_unit          	=  $this->session->userdata('kd_unit');
		
		$query  =  "SELECT * FROM bmn_gedung WHERE kd_unit='$kd_unit' ORDER BY id_bmn_gedung ";
	
        $data['record']=  $this->db->query($query)->result();
        $data['title']=  $this->title;
        $this->template->load('template', $this->folder.'/view',$data);   

    }
	
	function post()
    {
        if(isset($_POST['submit']))
        {
            $UNITKERJA_SING 			=   $this->input->post('UNITKERJA_SING');
            $kd_unit 					=   $this->input->post('kd_unit');
            $nama_gedung 				=   $this->input->post('nama_gedung');
            $luas_gedung				=   $this->input->post('luas_gedung');
            $lokasi_gedung				=   $this->input->post('lokasi_gedung');
            $tahun_berdiri				=   $this->input->post('tahun_berdiri');
            $tahun_terakhir_renovasi	=   $this->input->post('tahun_terakhir_renovasi');
            $arsitek_terakhir			=   $this->input->post('arsitek_terakhir');
            $kontraktor_terakhir		=   $this->input->post('kontraktor_terakhir');
            $status_kondisi_gedung		=   $this->input->post('status_kondisi_gedung');
            $keluhan_status_gedung		=   $this->input->post('keluhan_status_gedung');
            $nilai_gedung				=   $this->input->post('nilai_gedung');
            $jumlah_gedung				=   $this->input->post('jumlah_gedung');
            $harcopy					=   $this->input->post('harcopy');
            $softcopy_pdf					=   $this->input->post('softcopy_pdf');
            $softcopy_cad					=   $this->input->post('softcopy_cad');
            $softcopy_3d					=   $this->input->post('softcopy_3d');
            
        
            $data   			=   array('UNITKERJA_SING'=>$UNITKERJA_SING,
											'kd_unit'=>$kd_unit,
											'nama_gedung'=>$nama_gedung,
											'luas_gedung'=>$luas_gedung,
											'lokasi_gedung'=>$lokasi_gedung,
											'tahun_berdiri'=>$tahun_berdiri,
											'tahun_terakhir_renovasi'=>$tahun_terakhir_renovasi,
											'arsitek_terakhir'=>$arsitek_terakhir,
											'kontraktor_terakhir'=>$kontraktor_terakhir,
											'status_kondisi_gedung'=>$status_kondisi_gedung,
											'keluhan_status_gedung'=>$keluhan_status_gedung,
											'nilai_gedung'=>$nilai_gedung,
											'jumlah_gedung'=>$jumlah_gedung,
											'harcopy'=>$harcopy,
											'softcopy_pdf'=>$softcopy_pdf,
											'softcopy_cad'=>$softcopy_cad,
											'softcopy_3d'=>$softcopy_3d,
											
											'post_time'=> date('Y-m-d'),
											'inputer'=> $this->session->userdata('nip') );
           
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
            $nama_gedung 				=   $this->input->post('nama_gedung');
            $luas_gedung				=   $this->input->post('luas_gedung');
            $lokasi_gedung				=   $this->input->post('lokasi_gedung');
            $tahun_berdiri				=   $this->input->post('tahun_berdiri');
            $tahun_terakhir_renovasi	=   $this->input->post('tahun_terakhir_renovasi');
            $arsitek_terakhir			=   $this->input->post('arsitek_terakhir');
            $kontraktor_terakhir		=   $this->input->post('kontraktor_terakhir');
            $status_kondisi_gedung		=   $this->input->post('status_kondisi_gedung');
            $keluhan_status_gedung		=   $this->input->post('keluhan_status_gedung');
            $nilai_gedung				=   $this->input->post('nilai_gedung');
            $jumlah_gedung				=   $this->input->post('jumlah_gedung');
            $harcopy					=   $this->input->post('harcopy');
            $softcopy_pdf				=   $this->input->post('softcopy_pdf');
            $softcopy_cad				=   $this->input->post('softcopy_cad');
            $softcopy_3d				=   $this->input->post('softcopy_3d');
  
            $id 	 					= 	$this->input->post('id');
            $data   					=   array('tahun_bentuk_prodi'=>$tahun_bentuk_prodi,
											'nama_prodi'=>$nama_prodi,
											'status'=>$status,
											'post_time'=> date('Y-m-d'),
											'inputer'=> $this->session->userdata('nip') );
											
			
			$data   			=   array('nama_gedung'=>$nama_gedung,
											'luas_gedung'=>$luas_gedung,
											'lokasi_gedung'=>$lokasi_gedung,
											'tahun_berdiri'=>$tahun_berdiri,
											'tahun_terakhir_renovasi'=>$tahun_terakhir_renovasi,
											'arsitek_terakhir'=>$arsitek_terakhir,
											'kontraktor_terakhir'=>$kontraktor_terakhir,
											'status_kondisi_gedung'=>$status_kondisi_gedung,
											'keluhan_status_gedung'=>$keluhan_status_gedung,
											'nilai_gedung'=>$nilai_gedung,
											'jumlah_gedung'=>$jumlah_gedung,
											'harcopy'=>$harcopy,
											'softcopy_pdf'=>$softcopy_pdf,
											'softcopy_cad'=>$softcopy_cad,
											'softcopy_3d'=>$softcopy_3d,
											
											'post_time'=> date('Y-m-d'),
											'inputer'=> $this->session->userdata('nip') );
			
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
