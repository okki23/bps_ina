<?php
class kerjasama extends CI_Controller{
    
    var $folder =   "admin/kerjasama";
    var $tables =   "kerjasama";
    var $pk     =   "id_kerjasama";
    var $title  =   "Data Kerjasama";
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
      
		$nip          		=  $this->session->userdata('nip');
		$UNITKERJA_SING     =  $this->session->userdata('UNITKERJA_SING');
		$kd_unit          	=  $this->session->userdata('kd_unit');
		
		$query  =  "SELECT * FROM kerjasama  ORDER BY id_kerjasama ";
	
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
            $nama_perusahaan 			=   $this->input->post('nama_perusahaan');
            $lokasi_perusahaan			=   $this->input->post('lokasi_perusahaan');
            $bidang_perusahaan			=   $this->input->post('bidang_perusahaan');
            $start						=   $this->input->post('start');
            $end						=   $this->input->post('end');
            $nama_kerjasama				=   $this->input->post('nama_kerjasama');
          
  
            $data   				=   array('UNITKERJA_SING'=>$UNITKERJA_SING,
												'kd_unit'=>$kd_unit,
												'nama_perusahaan'=>$nama_perusahaan,
												'lokasi_perusahaan'=>$lokasi_perusahaan,
												'bidang_perusahaan'=>$bidang_perusahaan,
												'start'=>$start,
												'end'=>$end,
												'nama_kerjasama'=>$nama_kerjasama,
												'post_time'=> date('Y-m-d'),
												'inputer'	=> $this->session->userdata('nip') );
           
            $this->db->insert($this->tables,$data);
            redirect('admin/kerjasama');
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
            $nama_perusahaan 			=   $this->input->post('nama_perusahaan');
            $lokasi_perusahaan			=   $this->input->post('lokasi_perusahaan');
            $bidang_perusahaan			=   $this->input->post('bidang_perusahaan');
            $start						=   $this->input->post('start');
            $end						=   $this->input->post('end');
            $nama_kerjasama				=   $this->input->post('nama_kerjasama');
  
            $id 	 				= 	$this->input->post('id');
            $data   				=   array(	'UNITKERJA_SING'=>$UNITKERJA_SING,
												'kd_unit'=>$kd_unit,
												'nama_perusahaan'=>$nama_perusahaan,
												'lokasi_perusahaan'=>$lokasi_perusahaan,
												'bidang_perusahaan'=>$bidang_perusahaan,
												'start'=>$start,
												'end'=>$end,
												'nama_kerjasama'=>$nama_kerjasama,
												'post_time'=> date('Y-m-d'),
												'inputer'	=> $this->session->userdata('nip') );
            $this->mcrud->update($this->tables,$data, $this->pk,$id);
             redirect('admin/kerjasama');
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
	
    function delete()
    {
        $id     =  $this->uri->segment(4);
        $chekid = $this->db->get_where($this->tables,array($this->pk=>$id));
        if($chekid->num_rows()>0)
        {
            $this->mcrud->delete($this->tables,  $this->pk,  $this->uri->segment(4));
        }
        redirect('admin/kerjasama');
    }
	
}
