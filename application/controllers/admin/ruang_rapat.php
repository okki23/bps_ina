<?php
class ruang_rapat extends CI_Controller{
    
    var $folder =   "admin/ruang_rapat";
    var $tables =   "ruang_rapat";
    var $pk     =   "id_ruangan";
    var $title  =   "Peminjaman Ruang Rapat";
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
      
		$nip          		=  $this->session->userdata('nip');
		
		$query  =  "SELECT * FROM ruang_rapat  ORDER BY id_ruangan ";
	
        $data['record']=  $this->db->query($query)->result();
        $data['title']=  $this->title;
        $this->template->load('template', $this->folder.'/view',$data);   

    }
	
	function post()
    {
        if(isset($_POST['submit']))
        {
            $nama_ruangan       =   $this->input->post('nama_ruangan');
            $narasumber         =   $this->input->post('narasumber');
            $jumlah_peserta     =   $this->input->post('jumlah_peserta');
            $materi             =   $this->input->post('materi');
            $hari 				=   $this->input->post('hari');
            $tanggal_mulai      =   $this->input->post('tanggal_mulai');
            $tanggal_selesai    =   $this->input->post('tanggal_selesai');
            $jam_mulai			=   $this->input->post('jam_mulai');
            $jam_selesai		=   $this->input->post('jam_selesai');
            $status		        =   $this->input->post('status');
          
  
            $data   			=   array('nama_ruangan'=>$nama_ruangan,
                                            'narasumber'=>$narasumber,
                                            'jumlah_peserta'=>$jumlah_peserta,
                                            'materi'=>$materi,
                                            'hari'=>$hari,
              								'tanggal_mulai'=>$tanggal_mulai,
                                            'tanggal_selesai'=>$tanggal_selesai,
              								'jam_mulai'=>$jam_mulai,
              								'jam_selesai'=>$jam_selesai,
              								'status'=>$status);
           
            $this->db->insert($this->tables,$data);
            redirect(base_url('admin/ruang_rapat'));
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
            $narasumber         =   $this->input->post('narasumber');
            $jumlah_peserta     =   $this->input->post('jumlah_peserta');
            $materi             =   $this->input->post('materi');
            $hari               =   $this->input->post('hari');
            $tanggal_mulai      =   $this->input->post('tanggal_mulai');
            $tanggal_selesai    =   $this->input->post('tanggal_selesai');
            $jam_mulai          =   $this->input->post('jam_mulai');
            $jam_selesai        =   $this->input->post('jam_selesai');
            $status             =   $this->input->post('status');
  
            $id 	 				= 	$this->input->post('id');
            $data           =   array('nama_ruangan'=>$nama_ruangan,
                                      'narasumber'=>$narasumber,
                                      'jumlah_peserta'=>$jumlah_peserta,
                                      'materi'=>$materi,
                                      'hari'=>$hari,
                                      'tanggal_mulai'=>$tanggal_mulai,
                                      'tanggal_selesai'=>$tanggal_selesai,
                                      'jam_mulai'=>$jam_mulai,
                                      'jam_selesai'=>$jam_selesai,
                                      'status'=>$status);
            $this->mcrud->update($this->tables,$data, $this->pk,$id);
             redirect(base_url('admin/ruang_rapat'));
        }
        else
        {
			
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
        redirect(base_url('admin/ruang_rapat'));
    }
	
}
