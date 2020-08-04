<?php
class bmn_barang_lainnya extends CI_Controller{
    
    var $folder =   "bmn_barang_lainnya";
    var $tables =   "bmn_barang_lainnya";
    var $pk     =   "id_bmn_barang_lainnya";
    var $title  =   "Data BMN Barang Lainnya";
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
     	
		$nip          		=  $this->session->userdata('nip');
		$UNITKERJA_SING     =  $this->session->userdata('UNITKERJA_SING');
		$kd_unit          	=  $this->session->userdata('kd_unit');
		
		$query  =  "SELECT * FROM bmn_barang_lainnya WHERE kd_unit='$kd_unit' ORDER BY id_bmn_barang_lainnya ";
	
        $data['record']=  $this->db->query($query)->result();
        $data['title']=  $this->title;
        $this->template->load('template', $this->folder.'/view',$data);   

    }
	
	function post()
    {
        if(isset($_POST['submit']))
        {
          
			$nama_barang 							=   $this->input->post('nama_barang');
            $merk_barang 							=   $this->input->post('merk_barang');
            $jenis_barang 							=   $this->input->post('jenis_barang');
            $tahun_pembelian 						=   $this->input->post('tahun_pembelian');
            $nilai_barang 							=   $this->input->post('nilai_barang');
            $lokasi_barang 							=   $this->input->post('lokasi_barang');
            $status_barang 							=   $this->input->post('status_barang');
            $keluhan_kondisi_barang 				=   $this->input->post('keluhan_kondisi_barang');
            
           
          
            $data   =   array(	'UNITKERJA_SING'=> $this->session->userdata('UNITKERJA_SING'),
								'kd_unit'	=> $this->session->userdata('kd_unit'),
								'nama_barang'=>$nama_barang,
								'merk_barang'=>$merk_barang,
								'jenis_barang'=>$jenis_barang,
								'tahun_pembelian'=>$tahun_pembelian,
								'nilai_barang'=>$nilai_barang,
								'lokasi_barang'=>$lokasi_barang,
								'status_barang'=>$status_barang,
								'keluhan_kondisi_barang'=>$keluhan_kondisi_barang,
								
								'post_time'=> date('Y-m-d'),'inputer'	=> $this->session->userdata('nip') );
           
            $this->db->insert($this->tables,$data);
            redirect($this->uri->segment(1));
        }
        else
        {
			//Jenis Barang
			$query = "SELECT keterangan FROM mst_jenis_barang ";
			$data['record3']=  $this->db->query($query)->result_array();
			
			//Kondisi Barang
			$query = "SELECT keterangan FROM mst_kondisi_gedung ";
			$data['record4']=  $this->db->query($query)->result_array();
			
            $data['title']=  $this->title;
            $this->template->load('template', $this->folder.'/post',$data);
        }
    }
	
    function edit()
    {
        if(isset($_POST['submit']))
        {
            $nama_barang 							=   $this->input->post('nama_barang');
            $merk_barang 							=   $this->input->post('merk_barang');
            $jenis_barang 							=   $this->input->post('jenis_barang');
            $tahun_pembelian 						=   $this->input->post('tahun_pembelian');
            $nilai_barang 							=   $this->input->post('nilai_barang');
            $lokasi_barang 							=   $this->input->post('lokasi_barang');
            $status_barang 							=   $this->input->post('status_barang');
            $keluhan_kondisi_barang 				=   $this->input->post('keluhan_kondisi_barang');
  
            $id 	= 	$this->input->post('id');
            $data   =   array(	'UNITKERJA_SING'=> $this->session->userdata('UNITKERJA_SING'),
								'kd_unit'	=> $this->session->userdata('kd_unit'),
								'nama_barang'=>$nama_barang,
								'merk_barang'=>$merk_barang,
								'jenis_barang'=>$jenis_barang,
								'tahun_pembelian'=>$tahun_pembelian,
								'nilai_barang'=>$nilai_barang,
								'lokasi_barang'=>$lokasi_barang,
								'status_barang'=>$status_barang,
								'keluhan_kondisi_barang'=>$keluhan_kondisi_barang,
								'post_time'=> date('Y-m-d'),'inputer'	=> $this->session->userdata('nip') );
            $this->mcrud->update($this->tables,$data, $this->pk,$id);
            redirect($this->uri->segment(1));
			
        }
        else
        {
			//Jenis Barang
			$query = "SELECT keterangan FROM mst_jenis_barang ";
			$data['record3']=  $this->db->query($query)->result_array();
			
			//Kondisi Barang
			$query = "SELECT keterangan FROM mst_kondisi_gedung ";
			$data['record4']=  $this->db->query($query)->result_array();
			
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
