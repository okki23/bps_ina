<?php
class bmn_kendaraan extends CI_Controller{
    
    var $folder =   "bmn_kendaraan";
    var $tables =   "bmn_kendaraan";
    var $pk     =   "id_bmn_kendaraan";
    var $title  =   "BMN Kendaraan";
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
      
		$nip          		=  $this->session->userdata('nip');
		$UNITKERJA_SING     =  $this->session->userdata('UNITKERJA_SING');
		$kd_unit          	=  $this->session->userdata('kd_unit');
		
		$query  =  "SELECT * FROM bmn_kendaraan WHERE kd_unit='$kd_unit' ORDER BY id_bmn_kendaraan ";
	
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
            $nama_kendaraan 			=   $this->input->post('nama_kendaraan');
            $merk_kendaraan 			=   $this->input->post('merk_kendaraan');
            $jenis_kendaraan 			=   $this->input->post('jenis_kendaraan');
            $tahun_pembelian 			=   $this->input->post('tahun_pembelian');
            $nilai_pembelian 			=   $this->input->post('nilai_pembelian');
            $nilai_sekarang 			=   $this->input->post('nilai_sekarang');
            $status_kendaraan 			=   $this->input->post('status_kendaraan');
            $keluhan_kendaraan 			=   $this->input->post('keluhan_kendaraan');
            $fungsi_kendaraan 			=   $this->input->post('fungsi_kendaraan');
           
            
           
            $data   			=   array('UNITKERJA_SING'=>$UNITKERJA_SING,
											'kd_unit'=>$kd_unit,
											'nama_kendaraan'=>$nama_kendaraan,
											'merk_kendaraan'=>$merk_kendaraan,
											'jenis_kendaraan'=>$jenis_kendaraan,
											'tahun_pembelian'=>$tahun_pembelian,
											'nilai_pembelian'=>$nilai_pembelian,
											'nilai_sekarang'=>$nilai_sekarang,
											'status_kendaraan'=>$status_kendaraan,
											'keluhan_kendaraan'=>$keluhan_kendaraan,
											'fungsi_kendaraan'=>$fungsi_kendaraan,
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
           $nama_kendaraan 			=   $this->input->post('nama_kendaraan');
            $merk_kendaraan 			=   $this->input->post('merk_kendaraan');
            $jenis_kendaraan 			=   $this->input->post('jenis_kendaraan');
            $tahun_pembelian 			=   $this->input->post('tahun_pembelian');
            $nilai_pembelian 			=   $this->input->post('nilai_pembelian');
            $nilai_sekarang 			=   $this->input->post('nilai_sekarang');
            $status_kendaraan 			=   $this->input->post('status_kendaraan');
            $keluhan_kendaraan 			=   $this->input->post('keluhan_kendaraan');
            $fungsi_kendaraan 			=   $this->input->post('fungsi_kendaraan');
  
            $id 	 					= 	$this->input->post('id');
          
			$data   			=   array('nama_kendaraan'=>$nama_kendaraan,
											'merk_kendaraan'=>$merk_kendaraan,
											'jenis_kendaraan'=>$jenis_kendaraan,
											'tahun_pembelian'=>$tahun_pembelian,
											'nilai_pembelian'=>$nilai_pembelian,
											'nilai_sekarang'=>$nilai_sekarang,
											'status_kendaraan'=>$status_kendaraan,
											'keluhan_kendaraan'=>$keluhan_kendaraan,
											'fungsi_kendaraan'=>$fungsi_kendaraan,
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
