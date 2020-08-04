<?php
class prodi extends CI_Controller{
    
    var $folder =   "prodi";
    var $tables =   "prodi";
    var $pk     =   "id_prodi";
    var $title  =   "Program Studi/Jurusan";
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
      
		$nip          		=  $this->session->userdata('nip');
		$UNITKERJA_SING     =  $this->session->userdata('UNITKERJA_SING');
		$kd_unit          	=  $this->session->userdata('kd_unit');
		
		$query  =  "SELECT * FROM prodi WHERE kd_unit='$kd_unit' ORDER BY id_prodi ";
	
        $data['record']=  $this->db->query($query)->result();
        $data['title']=  $this->title;
        $this->template->load('template', $this->folder.'/view',$data);   

    }
	
	function post()
    {
        if(isset($_POST['submit']))
        {
            $UNITKERJA_SING 	=   $this->input->post('UNITKERJA_SING');
            $kd_unit 			=   $this->input->post('kd_unit');
            $tahun_bentuk_prodi =   $this->input->post('tahun_bentuk_prodi');
            $nama_prodi			=   $this->input->post('nama_prodi');
            $status				=   $this->input->post('status');
           
            $data   			=   array('UNITKERJA_SING'=>$UNITKERJA_SING,
											'kd_unit'=>$kd_unit,
											'tahun_bentuk_prodi'=>$tahun_bentuk_prodi,
											'nama_prodi'=>$nama_prodi,
											'status'=>$status,
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
            $UNITKERJA_SING 	=   $this->input->post('UNITKERJA_SING');
            $kd_unit 			=   $this->input->post('kd_unit');
            $tahun_bentuk_prodi =   $this->input->post('tahun_bentuk_prodi');
            $nama_prodi			=   $this->input->post('nama_prodi');
            $status				=   $this->input->post('status');
  
            $id 	 			= 	$this->input->post('id');
            $data   			=   array('tahun_bentuk_prodi'=>$tahun_bentuk_prodi,'nama_prodi'=>$nama_prodi,
										 'status'=>$status,'post_time'=> date('Y-m-d'),'inputer'=> $this->session->userdata('nip') );
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
