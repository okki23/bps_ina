<?php
class ruang_penginapan extends CI_Controller{
    
    var $folder =   "ruang_penginapan";
    var $tables =   "ruang_penginapan";
    var $pk     =   "id_ruangan";
    var $title  =   "Peminjaman Ruang Penginapan";
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
      
		
		$nip          		=  $this->session->userdata('nip');
		
		$query  =  "SELECT * FROM ruang_penginapan ORDER BY id_ruangan ";
	
        $data['record']=  $this->db->query($query)->result();
        $data['title']=  $this->title;
        $this->template->load('template', $this->folder.'/view',$data);   

    }
	
	function post()
    {
        if(isset($_POST['submit']))
        {
            $nama_ruangan       =   $this->input->post('nama_ruangan');
            $jumlah_bed         =   $this->input->post('jumlah_bed');
            $jenis_ruangan      =   $this->input->post('jenis_ruangan');
            $lokasi             =   $this->input->post('lokasi');
            $hari               =   $this->input->post('hari');
            $tanggal_mulai      =   $this->input->post('tanggal_mulai');
            $tanggal_selesai    =   $this->input->post('tanggal_selesai');
            $status             =   $this->input->post('status');
          
  
            $data               =   array('nama_ruangan'=>$nama_ruangan,
                                                'jumlah_bed'=>$jumlah_bed,
                                                'jenis_ruangan'=>$jenis_ruangan,
                                                'lokasi'=>$lokasi,
                                                'hari'=>$hari,
                                                'tanggal_mulai'=>$tanggal_mulai,
                                                'tanggal_selesai'=>$tanggal_selesai,
                                                'status'=>$status);

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
            $nama_ruangan       =   $this->input->post('nama_ruangan');
            $jumlah_bed         =   $this->input->post('jumlah_bed');
            $jenis_ruangan      =   $this->input->post('jenis_ruangan');
            $lokasi             =   $this->input->post('lokasi');
            $hari               =   $this->input->post('hari');
            $tanggal_mulai      =   $this->input->post('tanggal_mulai');
            $tanggal_selesai    =   $this->input->post('tanggal_selesai');
            $status             =   $this->input->post('status');
  
            $id 	 				= 	$this->input->post('id');
             $data                  =   array('nama_ruangan'=>$nama_ruangan,
                                                'jumlah_bed'=>$jumlah_bed,
                                                'jenis_ruangan'=>$jenis_ruangan,
                                                'lokasi'=>$lokasi,
                                                'hari'=>$hari,
                                                'tanggal_mulai'=>$tanggal_mulai,
                                                'tanggal_selesai'=>$tanggal_selesai,
                                                'status'=>$status);
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
