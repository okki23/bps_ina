<?php
class akreditasi extends CI_Controller{
    
    var $folder =   "akreditasi";
    var $tables =   "akreditasi";
    var $pk     =   "id_akreditasi";
    var $title  =   "Akreditasi Program Studi/Jurusan";
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
      
		$nip          		=  $this->session->userdata('nip');
		$UNITKERJA_SING     =  $this->session->userdata('UNITKERJA_SING');
		$kd_unit          	=  $this->session->userdata('kd_unit');
		
		$query  =  "SELECT * FROM akreditasi WHERE kd_unit=$kd_unit ORDER BY tahun ";
	
        $data['title']=  $this->title;
        $data['record']=  $this->db->query($query)->result();
        $this->template->load('template', $this->folder.'/view',$data);   

    }
	
	function post()
    {
        if(isset($_POST['submit']))
        {
			$UNITKERJA_SING 	=   $this->input->post('UNITKERJA_SING');
            $kd_unit 			=   $this->input->post('kd_unit');
           
            $nama_prodi 		=   $this->input->post('nama_prodi');
            $tahun				=   $this->input->post('tahun');
            $kriteria			=   $this->input->post('kriteria');
           
            $data   			=   array('UNITKERJA_SING'	=>$UNITKERJA_SING,
											'kd_unit'			=>$kd_unit,
											'nama_prodi'		=>$nama_prodi,
											'tahun'				=>$tahun,
											'kriteria'			=>$kriteria,
											'post_time'			=> date('Y-m-d'),
											'inputer'			=> $this->session->userdata('nip') );
           
            $this->db->insert($this->tables,$data);
            redirect($this->uri->segment(1));
        }
        else
        {	
			$UNITKERJA_SING     =  $this->session->userdata('UNITKERJA_SING');
			$kd_unit          	=  $this->session->userdata('kd_unit');
			
			$query  			=  "SELECT * FROM prodi WHERE kd_unit=$kd_unit  ";
			
			$data['record']		=  $this->db->query($query)->result();
			$data['y']         	=  $this->db->query($query)->row_array();
			
			$data['title']		=  $this->title;
			$this->template->load('template', $this->folder.'/post',$data);
			
        }
    }
	
    function edit()
    {
        if(isset($_POST['submit']))
        {
           
            $nama_prodi 		=   $this->input->post('nama_prodi');
            $tahun				=   $this->input->post('tahun');
            $kriteria			=   $this->input->post('kriteria');
  
            $id 	 			= 	$this->input->post('id');
            $data   			=   array(	'nama_prodi'		=>$nama_prodi,
											'tahun'				=>$tahun,
											'kriteria'			=>$kriteria,
											'post_time'			=> date('Y-m-d'),
											'inputer'			=> $this->session->userdata('nip') );
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
